<?php 
  require_once('config.php');  
  require_once('scrap.php');  
  require_once('functions.php'); 

  if (!isset($_REQUEST['flag'])) $_REQUEST['flag'] = '';

  switch ($_REQUEST['flag']) {
    case 'scrap_videos':
      $videos = scrapVideos($_REQUEST['site_url']);
      exit(json_encode($videos));
    
  	case 'save_video':
      exit (saveVideoInfo($_REQUEST['title'], $_REQUEST['description'], $_REQUEST['video_url'], $_REQUEST['thumbnail']));
    
    case 'get_stored_videos':
      $videos = getStoredVideos();
      exit (json_encode($videos));
    
    case 'change_video_info':
      exit (changeVideoInfo($_REQUEST['video_id'], $_REQUEST['title'], $_REQUEST['description']));
    
    case 'delete_video':
      exit (deleteVideo($_REQUEST['video_id']));
    
    case 'login':
      $status = getLoggableStatus($_REQUEST['username'], $_REQUEST['password']);
      exit($status);
  	
  	default:
  		# code...
  		break;
  }
?>