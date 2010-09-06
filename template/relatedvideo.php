<?php
	/*Plugin Name: Related Video
	Plugin URI: http://nexxuz.com/related-video.html
	Description: Show related videos on my blog
	Version: 0.1
	Author: Jodacame
	Author URI: http://nexxuz.com/*/
function related_video($content){
global $post;

	
	
	
	
	include('template/related_video.html');		
	
	
	return $content;
}





function writeJS() {
		$dir = WP_PLUGIN_URL.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__));

 
 echo ( '  <script src="http://www.google.com/uds/api?file=uds.js&v=1.0"  type="text/javascript"></script> 
  <link href="http://www.google.com/uds/css/gsearch.css" rel="stylesheet"   type="text/css"/> 
  <script src="http://www.google.com/uds/solutions/videobar/gsvideobar.js"   type="text/javascript"></script> 
  <link href="http://www.google.com/uds/solutions/videobar/gsvideobar.css"   rel="stylesheet" type="text/css"/> 
 
 
  <script src="http://www.google.com/uds/api?file=uds.js&v=1.0&source=uds-vbw"   type="text/javascript"></script> 
 
  <!-- Video Bar Code and Stylesheet --> 
  <script type="text/javascript"> 
    window._uds_vbw_donotrepair = true;
  </script> 
  <script src="http://www.google.com/uds/solutions/videobar/gsvideobar.js?mode=new"
    type="text/javascript"></script> 
  <style type="text/css"> 
   
  </style> 
 
  <style type="text/css"> 
    .playerInnerBox_gsvb .player_gsvb {
      width : 320px;
      height : 260px;
    }
  </style> 
  <script type="text/javascript"> 
    function LoadVideoBar(termino) {
    var videoBar;
    var options = {
		 string_allDone : "[X] Close",
        largeResultSet : !true,
        horizontal : true,
        autoExecuteList : {
          cycleTime : GSvideoBar.CYCLE_TIME_MEDIUM,
          cycleMode : GSvideoBar.CYCLE_MODE_LINEAR,
         executeList : [termino]
        }
      }
	//document.getElementById("termino").innerHTML=termino;
    videoBar = new GSvideoBar(document.getElementById("videoBar-bar"),
                              GSvideoBar.PLAYER_ROOT_FLOATING,
                              options);
    }
    // arrange for this function to be called during body.onload
    // event processing
   
  </script> ' ); 
 
 

 
}



add_action('the_content', 'related_video');
add_action('wp_head', 'writeJS');
?>
