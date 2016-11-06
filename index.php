<?php require_once('header.php'); ?>

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

<?php require_once('footer.php'); ?>