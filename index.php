<?php 
	require_once('controller.php');
	
	$keyword = isset($_REQUEST['keyword']) ? $_REQUEST['keyword'] : '';
	$videos = getStoredVideos($keyword);
?>
<!DOCTYPE html>
<html lang="en" ng-app="myApp">
	<head>
		<meta charset="utf-8">
		<title>Video List</title>
		<?php common('common_libraries'); ?>
		<?php common('google_tag_header'); ?>
	</head>
	<body>
		<div class="row">
			<div class="col-xs-12 col-sm-10 col-md-8 col-lg-6 col-sm-offset-1 col-md-offset-2 col-lg-offset-3">
				<div class="row logo">
					<a href="index.php">
						<img src="imgs/logo.png" class="img-responsive" alt="Responsive image">
					</a>
				</div>
				
				<?php common('header_menu'); ?>

				<div class="row content">
				<?php 
					if (sizeof($videos)) {
						foreach($videos as $key => $video) {
							echo '<div class="col-md-6 video-div">';
								echo '<a href="single.php?id='.$video['id'].'" class="video-sub-title">';
									echo '<img src="'.$video['thumbnail'].'" class="img-responsive max-width" alt="Responsive image">';
									$title = $video['title'];
									if ($keyword != '') {
										$pattern = preg_quote($keyword);
										$title  = preg_replace("/($pattern)/i", '<b>$1</b>', $title);
									}
									echo '<div class="h4 ">'.$title.'</div>';
								echo '</a>';
							echo '</div>';
						}
					} else {
						echo '<div class="h3 text-center"><br/>There is no any results.<br/><br/></div>';
					}
				?>
				</div>
				<div class="row more">
					<a href="index.php" type="button" class="btn btn-lg btn-block btn-warning">MORE VIDEOS</a>
				</div>
				
				<?php common('footer_menu'); ?>

			</div>
		</div>
	</body>
	<?php common('google_tag_footer'); ?>
</html>

