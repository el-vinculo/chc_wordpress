<?php 
 /* The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage healthcare
 */
$health_data= health_care_get_options(); ?>
<!-- Start Footer-->
<style>

.cd-popup-trigger {
  display: block;
  width: 170px;
  height: 50px;
  line-height: 50px;
  margin: 3em auto;
  text-align: center;
  color: #FFF;
  font-size: 14px;
  font-size: 0.875rem;
  font-weight: bold;
  text-transform: uppercase;
  border-radius: 50em;
  background: #35a785;
  box-shadow: 0 3px 0 rgba(0, 0, 0, 0.07);
}
@media only screen and (min-width: 1170px) {
  .cd-popup-trigger {
    margin: 6em auto;
  }
}

/* -------------------------------- 

xpopup 

-------------------------------- */
.cd-popup {
  position: fixed;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  background-color: rgba(94, 110, 141, 0.9);
  opacity: 0;
  visibility: hidden;
  -webkit-transition: opacity 0.3s 0s, visibility 0s 0.3s;
  -moz-transition: opacity 0.3s 0s, visibility 0s 0.3s;
  transition: opacity 0.3s 0s, visibility 0s 0.3s;
}
.cd-popup.is-visible {
  opacity: 1;
  visibility: visible;
  -webkit-transition: opacity 0.3s 0s, visibility 0s 0s;
  -moz-transition: opacity 0.3s 0s, visibility 0s 0s;
  transition: opacity 0.3s 0s, visibility 0s 0s;
}

.cd-popup-container {
  position: relative;
  width: 90%;
  max-width: 400px;
  margin: 4em auto;
  background: #FFF;
  border-radius: .25em .25em .4em .4em;
  text-align: center;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
  -webkit-transform: translateY(-40px);
  -moz-transform: translateY(-40px);
  -ms-transform: translateY(-40px);
  -o-transform: translateY(-40px);
  transform: translateY(-40px);
  /* Force Hardware Acceleration in WebKit */
  -webkit-backface-visibility: hidden;
  -webkit-transition-property: -webkit-transform;
  -moz-transition-property: -moz-transform;
  transition-property: transform;
  -webkit-transition-duration: 0.3s;
  -moz-transition-duration: 0.3s;
  transition-duration: 0.3s;
}
.cd-popup-container p {
  padding: 3em 1em;
}
.cd-popup-container .cd-buttons:after {
  content: "";
  display: table;
  clear: both;
}
.cd-popup-container .cd-buttons li {
  float: left;
  width: 50%;
  list-style: none;
}
.cd-popup-container .cd-buttons a {
  display: block;
  height: 60px;
  line-height: 60px;
  text-transform: uppercase;
  color: #FFF;
  -webkit-transition: background-color 0.2s;
  -moz-transition: background-color 0.2s;
  transition: background-color 0.2s;
}
.cd-popup-container .cd-buttons li:first-child a {
  background: #fc7169;
  border-radius: 0 0 0 .25em;
}
.no-touch .cd-popup-container .cd-buttons li:first-child a:hover {
  background-color: #fc8982;
}
.cd-popup-container .cd-buttons li:last-child a {
  background: #b6bece;
  border-radius: 0 0 .25em 0;
}
.no-touch .cd-popup-container .cd-buttons li:last-child a:hover {
  background-color: #c5ccd8;
}
.cd-popup-container .cd-popup-close {
  position: absolute;
  top: 8px;
  right: 8px;
  width: 30px;
  height: 30px;
}
.cd-popup-container .cd-popup-close::before, .cd-popup-container .cd-popup-close::after {
  content: '';
  position: absolute;
  top: 12px;
  width: 14px;
  height: 3px;
  background-color: #8f9cb5;
}
.cd-popup-container .cd-popup-close::before {
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  transform: rotate(45deg);
  left: 8px;
}
.cd-popup-container .cd-popup-close::after {
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
  transform: rotate(-45deg);
  right: 8px;
}
.is-visible .cd-popup-container {
  -webkit-transform: translateY(0);
  -moz-transform: translateY(0);
  -ms-transform: translateY(0);
  -o-transform: translateY(0);
  transform: translateY(0);
}
@media only screen and (min-width: 1170px) {
  .cd-popup-container {
    margin: 8em auto;
  }
}
</style>
<div class="container-fluid space footer theme-bg ">
	<div class="container">
	<?php if ( is_active_sidebar( 'footer-widget-area' ) ){ dynamic_sidebar('footer-widget-area');
		} else { 
		$footer_default = array(
		'before_widget' => '<div class="col-md-12 col-sm-12 widget-footer">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3><div class="ln white"></div><span class="fa fa-heart white hrt"></span>' );
	
  //the_widget('WP_Widget_Categories', null, $footer_default);
	the_widget('WP_Widget_Categories', null, $footer_default);
	the_widget('WP_Widget_Pages', null, $footer_default);
	the_widget('WP_Widget_Archives', null, $footer_default);
	the_widget('WP_Widget_Calendar', null, $footer_default);	
	} ?>


	</div>
</div>
<div class="container-fluid footer-bottom1 footer1 theme-bg">
	<div class="container">
		<div class="row">

			<div class="col-md-6 col-sm-6">
				<div class="footer-nav">

					 <?php
                    $args = array( 'menu' => 'footer Menu', 'container' => '', 'container_class' => '', 'container_id' => '', 'menu_class' => 'nav', 'menu_id' => 'nav',
                    'echo' => true, 'fallback_cb' => 'wp_page_menu', 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '', 'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', 'item_spacing' => 'preserve',
                    'depth' => 0, 'walker' => '', 'theme_location' => '' );
                       wp_nav_menu( $args)
                     ?>
					
				</div>
				<!-- <div class="footer_copyright">
					<p><?php echo esc_attr($health_data['footer_copyright']); ?> 
						<a href="<?php echo esc_url($health_data['footer_developed_by_link']); ?>" target="_blank">
							<?php echo esc_attr($health_data['footer_developed_by']); ?>
						</a> 
					</p>
			    </div> -->
			</div>
			<div class="col-md-6 col-sm-6">
				<div class="footer_copyright">
          <?php $email = $_SESSION['userdata']['email'];
               $authToken = $_SESSION['userdata']['authentication_token'];
                ?>
         <p class="text-right">Application Version: <?php $appVersion= applicationVersion($email, $authToken); echo $appVersion['version'];?></p>
					<p class="text-right"><?php echo esc_attr($health_data['footer_copyright']); ?> 
						<!-- <a href="<?php echo esc_url($health_data['footer_developed_by_link']); ?>" target="_blank">
							<?php echo esc_attr($health_data['footer_developed_by']); ?>
						</a>  -->
					</p>
			    </div>
			<!-- <?php for($i=1; $i<=8; $i++){
				if($health_data['social_icon_'.$i]!=''){ ?>
				<a href="<?php echo esc_url($health_data['social_link_'.$i]); ?>"><span class="<?php echo esc_attr($health_data['social_icon_'.$i]); ?>"></span></a>
			<?php } } ?> -->
			</div>
		</div>
	</div>
</div>


<!-- <a href="#top" class="scrol enigma_scrollup"><span class="fa fa-angle-up"></span></a>
 --><!-- End Footer -->
<?php get_template_part('bg', 'css') ;?>
<?php wp_footer(); ?>


<!-- session Detect and validate the session -->
<?php if(isset($_SESSION['userdata'])) { ?>

 <!--<div role="dialog" class="warnModal modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            
            <h4 class="modal-title" style="color: orangered;">WARNING!</h4>
          </div>
          <div class="modal-body">
            <p>Your session will be expire and you will be automatically logged out in 60 seconds</p>
            <button type="button" class="btn btn-primary btn-default">Stay Logged in</button>
            <button type="button" data-dismiss="modal" class="btn btn-primary btn-default logout">Logout</button>
          </div>
          
        </div>
      </div>
    </div>-->
	
<div class="cd-popup" role="alert">
	<div class="cd-popup-container">
		<p>Your session will be expire and you will be automatically logged out in 60 seconds</p>
		<ul class="cd-buttons">
			<li><a href="JavaScript:Void(0);" id="stay_popup">Stay Logged in</a></li>
			<li><a href="JavaScript:Void(0);" id="logout_popup">Logout</a></li>
		</ul>
	</div> <!-- cd-popup-container -->
</div> <!-- cd-popup -->
<!-- <div id="cc">ccccc</div> -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->
  <script type="text/javascript">
 $(document).ready(function(){
     var idleCount=1200; //session expire time in seconds
     localStorage.setItem("currentCount", idleCount);
	 
     var timer = setInterval(function() {
   // var count = parseInt(jQuery('#theTarget').html());
   //$("#cc").html(localStorage.getItem("currentCount"));
     count= localStorage.getItem("currentCount")-1;
     localStorage.setItem("currentCount", count);
   //  alert(localStorage.getItem("currentCount"));
    if (count!=60) {
     //countiinue the  counter   
    }   else {
				setTimeout(function(){
					         // jQuery_3_4_1(".popup-content").addClass("active");
							 $('.cd-popup').addClass('is-visible');
							  //jQuery_3_4_1(".warnModal").modal('show');
							}, 2000);
           // jQuery(".warnModal").modal('show');  //warning messages display

    } if(count==0){
				window.location.href="<?php echo site_url(); ?>/logout"; // automatically logout
			}
		  }, 1000);

    $('#stay_popup').click(function(){
    //location.reload(true);
		$('.cd-popup').removeClass('is-visible');
		localStorage.setItem("currentCount", idleCount);
     });
    $('#logout_popup').click(function(){
      window.location.href="<?php echo site_url(); ?>/logout";
     });

    $(this).click(function (e) 
{ 
	//jQuery_3_4_1('.warnModal').modal('hide');
	$('.cd-popup').removeClass('is-visible');
	//jQuery_3_4_1(".popup-content").removeClass("active");
    localStorage.setItem("currentCount", idleCount);
    //idleTime = 0;
});
});
  </script>
<?php } ?>
<!-- end of session detect code -->

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.multiselect.js"></script>

<script>
    (function($) {
        $('#testSelect1').multiselect({
            
            placeholder: 'Please Select',
            
            
            selectAll: true
        });

    }(jQuery));




     (function($) {
        $('#services-test').multiselect({
            
            placeholder: 'Please Select',
            
            
            selectAll: true
        });

    }(jQuery));

</script>
<script type="text/javascript">
  jQuery("#toggle").click(function() {
  jQuery(this).toggleClass("on");
  jQuery("#menu").slideToggle();
}); 
$(function(){
	var custom_date_format = "<?php echo CUSTOM_DATE_FORMAT;?>";
    $("#datetimepicker1,#due_date,#ref_followup_date,#ref_due_date,#edit_task_deadline,#task_deadline").datepicker({
        changeMonth: true,
        changeYear: true,
		dateFormat: custom_date_format,
		yearRange: "-120:+0",
    });
});
</script>

</body>
</html>
