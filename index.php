<?php 
	$videos = array(
		array('src'=>'1', 'title'=>'First Video', 'description'=>'My Description'),
		array('src'=>'2', 'title'=>'Second Video', 'description'=>'My Description'),
		array('src'=>'3', 'title'=>'Second Video', 'description'=>'My Description'),
		array('src'=>'4', 'title'=>'First Video', 'description'=>'My Description'),
		array('src'=>'1', 'title'=>'First Video', 'description'=>'My Description'),
		array('src'=>'2', 'title'=>'Second Video', 'description'=>'My Description'),
		array('src'=>'3', 'title'=>'Second Video', 'description'=>'My Description'),
		array('src'=>'4', 'title'=>'First Video', 'description'=>'My Description'),
		array('src'=>'1', 'title'=>'First Video', 'description'=>'My Description'),
		array('src'=>'2', 'title'=>'Second Video', 'description'=>'My Description'),
		array('src'=>'3', 'title'=>'Second Video', 'description'=>'My Description'),
		array('src'=>'4', 'title'=>'First Video', 'description'=>'My Description'),
	);
?>
<!DOCTYPE html>
<html lang="en" ng-app="myApp">
	<head>
		<meta charset="utf-8">
		<title>People</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="libs/bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="libs/bootstrap-datepicker/datepicker.css" rel="stylesheet">
		<link href="css/styles.css" rel="stylesheet">

		<script src="libs/jquery-2.1.4.min.js"></script>
		<script src="libs/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="row">
			<div class="col-xs-12 col-sm-10 col-md-8 col-lg-6 col-sm-offset-1 col-md-offset-2 col-lg-offset-3">
				<div class="row logo">
					<a href="index.php">
						<img src="imgs/logo.png" class="img-responsive" alt="Responsive image">
					</a>
				</div>
				<div class="row header">
					<div class="col-xs-2 col-md-3 col-md-3 col-md-3 menu-text">
						<a href="#">VIDEOS</a>
					</div>
					<div class="col-xs-2 col-md-3 col-md-3 col-md-3 menu-text">
						<a href="#">RANDOM</a>
					</div>
					<div class="col-xs-2 col-md-3 col-md-3 col-md-3 menu-text">
						<a href="#">SEARCH</a>
					</div>
					<div class="col-xs-2 col-md-3 col-md-3 col-md-3 menu-text">
						<a href="#">CONTACT</a>
					</div>
				</div>
				<div class="row content">
				<?php 
					foreach($videos as $key => $video) {
						echo '<div class="col-md-6 video-div">';
						echo '<a href="single.php?id='.$video['src'].'">';
						echo '<img src="imgs/'.$video['src'].'.png" class="img-responsive" alt="Responsive image">';
						echo '</a>';
						echo '</div>';
					}
				?>
				</div>
				<div class="row more">
					<a href="index.php" type="button" class="btn btn-lg btn-block btn-warning">MORE VIDEOS</a>
				</div>
				<div class="row footer ">
					<div class="col-xs-2 col-md-3 col-md-3 col-md-3 menu-text">
						<a href="#">VIDEOS</a>
					</div>
					<div class="col-xs-2 col-md-3 col-md-3 col-md-3 menu-text">
						<a href="#">RANDOM</a>
					</div>
					<div class="col-xs-2 col-md-3 col-md-3 col-md-3 menu-text">
						<a href="#">SEARCH</a>
					</div>
					<div class="col-xs-2 col-md-3 col-md-3 col-md-3 menu-text">
						<a href="#">CONTACT</a>
					</div>
				</div>
				<div class="row copyright">
					COPYRIGHT © WILL NEED NAME INSERTING HERE
				</div>
			</div>
		</div>
	</body>
</html>

