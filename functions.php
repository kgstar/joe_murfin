<?php 
    function getDB () {
    	global $config;
    	$db = mysqli_connect($config['hostname'], $config['username'], $config['password'], $config['database']);

		if (!$db) {
		    echo "Error: Unable to connect to MySQL." . PHP_EOL;
		    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
		    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
		    exit;
		}
		return $db;
    }

    function getRows($result) {
    	$rows = [];
		while ($row = mysqli_fetch_assoc($result)) {
			$rows[] = $row; 
		}
		return $rows;
    }

    function getRow($result) {
    	$rows = getRows($result);
    	return sizeof($rows) ? $rows[0] : NULL;
    }

    function saveVideoInfo ($title, $description, $videoURL, $thumbnail) {
    	$db = getDB();
    	$result = mysqli_query($db, "
    		INSERT INTO `juice_db`.`videos` (`title`, `description`, `video_url`, `thumbnail`, `reg_ymd`) 
    	 	VALUES ('".$title."', '".$description."', '".$videoURL."', '".$thumbnail."', '".date('Y-m-d H:i:s')."');
	 	") or die (mysqli_error($db));
    	return 'OK';
    }

    function getVideoInfo ($videoId) {
    	$db = getDB();
    	$result = mysqli_query($db, "
			SELECT * FROM `juice_db`.`videos` 
			WHERE id = '".$videoId."'
			ORDER BY reg_ymd DESC 
			LIMIT 0, 10
		") or die (mysqli_error($db));
		return getRow($result);
    }

    function getStoredVideos () {
    	$db = getDB();
    	$result = mysqli_query($db, "
			SELECT * FROM `juice_db`.`videos` 
			WHERE 1 
			ORDER BY reg_ymd DESC 
			LIMIT 0, 10
		") or die (mysqli_error($db));
		return getRows($result);
    }

    function changeVideoInfo ($videoId, $title, $description) {
    	$db = getDB();
    	$result = mysqli_query($db, "
    		UPDATE `juice_db`.`videos` 
    		SET title='".$title."',
    			description='".$description."'
			WHERE id='".$videoId."'
		") or die (mysqli_error($db));
    	return 'OK';
    }

    function deleteVideo ($videoId) {
    	$db = getDB();
    	$result = mysqli_query($db, "DELETE FROM `juice_db`.`videos` WHERE id='".$videoId."'") or die (mysqli_error($db));
    	return 'OK';
    }

    function getLoggableStatus ($username, $password) {
    	$db = getDB();
    	$result = mysqli_query($db, "SELECT * FROM users WHERE user_name='".$username."'") or die (mysqli_error($db));
    	$row = getRow($result);
    	if (sizeof($row)) {
    		$result = mysqli_query($db, "SELECT * FROM users WHERE user_pwd='".$password."'") or die (mysqli_error($db));
	    	$row = getRow($result);
	    	if (sizeof($row)) {
	    		return 'OK';
	    	} else {
	    		return 'BAD_PASSWORD';
	    	}	
    	} else {
    		return 'BAD_USERNAME';
    	}
    	return 'BAD';
    }
?>