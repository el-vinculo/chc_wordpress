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

<div class="container-fluid space footer">
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
<div class="container-fluid footer-bottom1 footer1">
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

<!--  <div id="warnModal" role="dialog" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            
            <h4 class="modal-title" style="color: orangered;">WARNING!</h4>
          </div>
          <div class="modal-body">
            <p>Your session will be expire and you will be automatically logged out in 60 seconds</p>
            <button type="button" class="btn btn-primary btn-default staylogin">Stay Logged in</button>
            <button type="button" data-dismiss="modal" class="btn btn-primary btn-default logout">Logout</button>
          </div>
          
        </div>
      </div>
    </div> -->

<<<<<<< HEAD
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
=======
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
>>>>>>> 2eee0bb1286a63c74f54b238a49a6a640795f4a0
 <script type="text/javascript">
/*
 $(document).ready(function(){
     
     var count=900; //session expire time in seconds
     var timer = setInterval(function() {
   // var count = parseInt(jQuery('#theTarget').html());
     count= count-1;
    if (count!=60) {
     //countiinue the counter   
    }   else { 
       jQuery("#warnModal").modal('show');  //warning messages display

    } if(count==0){
       window.location.href="<?php echo site_url(); ?>/logout"; // automatically logout
    }
  }, 1000);

    $('.staylogin').click(function(){
      location.reload(true);
     });
    $('.logout').click(function(){
      window.location.href="<?php echo site_url(); ?>/logout";
     });
}); */
  </script>
<?php } ?>
<!-- end of session detect code -->

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.multiselect.js"></script>

<script>
    $(function () {
        $('#testSelect1').multiselect({
            
            placeholder: 'Please Select',
            
            
            selectAll: true
        });

    });




     $(function () {
        $('#services-test').multiselect({
            
            placeholder: 'Please Select',
            
            
            selectAll: true
        });

    });

</script>
<script type="text/javascript">
    	jQuery("#toggle").click(function() {
  jQuery(this).toggleClass("on");
  jQuery("#menu").slideToggle();
}); 

</script>

 
</body>
</html>
