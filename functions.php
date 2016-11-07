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

    function getDataAsArray($result) {
    	$rows = [];
		while ($row = mysqli_fetch_assoc($result)) {
			$rows[] = $row; 
		}
		return $rows;
    }

    function saveVideoInfo ($title, $description, $videoURL, $thumbnail) {
    	$db = getDB();
    	$result = mysqli_query($db, "
    		INSERT INTO `juice_db`.`videos` (`title`, `description`, `video_url`, `thumbnail`, `reg_ymd`) 
    	 	VALUES ('".$title."', '".$description."', '".$videoURL."', '".$thumbnail."', '".date('Y-m-d H:i:s')."');
	 	") or die (mysqli_error($db));
    	return 'OK';
    }

    function getStoredVideos () {
    	$db = getDB();
    	$result = mysqli_query($db, "
			SELECT * FROM `juice_db`.`videos` 
			WHERE 1 
			ORDER BY reg_ymd DESC 
			LIMIT 0, 10
		") or die (mysqli_error($db));
		return getDataAsArray($result);
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
?>