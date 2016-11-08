<?php 
	require_once('controller.php');

	$videos = getStoredVideos();
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


		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-M5M3TB');</script>
		<!-- End Google Tag Manager -->
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
				<?php 
					foreach($videos as $key => $video) {
						echo '<div class="col-md-6 video-div">';
						echo '<a href="single.php?id='.$video['id'].'">';
						echo '<img src="'.$video['thumbnail'].'" class="img-responsive max-width" alt="Responsive image">';
						echo '</a>';
						echo '</div>';
					}
				?>
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
					COPYRIGHT © THEBESTOFJUICE ON THE COPYRIGHT BIT 
					<a href="mailto:joe@thebestofjuice.com?Subject=Hello">joe@thebestofjuice.com</a>
				</div>
			</div>
		</div>
	</body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M5M3TB"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
</html>

