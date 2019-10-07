<?php 
/**
 * Template Name: Logout
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage healthcare
*/
session_destroy();
$url=site_url();
get_header();
?>
<html>
<div>
   <iframe name="adminAccess" id="frame1" src="https://dev11.resourcestack.com/backend/" width="1000" height="400" style="display: none;"></iframe>
</div>
  <script>
    function sleepFor( sleepDuration ){
      var now = new Date().getTime();
      while(new Date().getTime() < now + sleepDuration){ /* do nothing */ } 
    }
    //jQuery(document).ready(function($){
    jQuery('#frame1').on("load", function() {
      //alert("LOGOUT");
      const frame2 = jQuery("#frame1");
      //console.log("the frame is " , frame2.get(0).contentWindow);
      frame2.get(0).contentWindow.postMessage("logout","https://dev11.resourcestack.com/backend/");
      window.location.href = "<?php echo $url?>";
    });
 </script>
</html>