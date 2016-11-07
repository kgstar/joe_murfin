<?php
	require_once('controller.php');
	$video = getVideoInfo ($_REQUEST['id']); 
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
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 menu-text">
						<a href="#">VIDEOS</a>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 menu-text">
						<a href="#">RANDOM</a>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 menu-text">
						<a href="#">SEARCH</a>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 menu-text">
						<a href="#">CONTACT</a>
					</div>
				</div>
				<div class="row content">
					<div class="col-md-12">
						<div class="embed-responsive embed-responsive-4by3">
						    <iframe class="embed-responsive-item" src="<?php echo $video['video_url']; ?>"></iframe>
						</div>
					</div>
					<div class="col-md-12 video-title"><?php echo $video['title']; ?></div>
					<div class="col-md-12 video-description"><?php echo $video['description']; ?></div>
				</div>
				<div class="row more">
					<a href="index.php" type="button" class="btn btn-lg btn-block btn-warning">MORE VIDEOS</a>
				</div>
				<div class="row footer ">
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 menu-text">
						<a href="#">VIDEOS</a>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 menu-text">
						<a href="#">RANDOM</a>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 menu-text">
						<a href="#">SEARCH</a>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 menu-text">
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

