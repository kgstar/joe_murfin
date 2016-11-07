<?php 
  require_once('scrap.php');  
  require_once('functions.php'); 

  switch ($_REQUEST['flag']) {
  	case 'scrap_videos':
  		$videos = getVideoInfo($_REQUEST['site_url']);
  		exit(json_encode($videos));
  	
  	default:
  		# code...
  		break;
  }
?>