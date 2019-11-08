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
<a href="#top" class="scrol enigma_scrollup"><span class="fa fa-angle-up"></span></a>
<!-- End Footer -->
<?php get_template_part('bg', 'css') ;?>
<?php wp_footer(); ?>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>
<script type="text/javascript">
  $(".js-select2").select2({
      closeOnSelect : false,
      placeholder : "Placeholder",
      allowHtml: true,
      allowClear: true,
      tags: true 
    });
</script> -->

    <!-- <script type="text/javascript">
  $(".multiple_select").mousedown(function(e) {
    if (e.target.tagName == "OPTION") 
    {
      return; //don't close dropdown if i select option
    }
    $(this).toggleClass('multiple_select_active'); //close dropdown if click inside <select> box
});
$(".multiple_select").on('blur', function(e) {
    $(this).removeClass('multiple_select_active'); //close dropdown if click outside <select>
});
  
$('.multiple_select option').mousedown(function(e) { //no ctrl to select multiple
    e.preventDefault(); 
    $(this).prop('selected', $(this).prop('selected') ? false : true); //set selected options on click
    $(this).parent().change(); //trigger change event
});

  
  $("#myFilter").on('change', function() {
      var selected = $("#myFilter").val().toString(); //here I get all options and convert to string
      var document_style = document.documentElement.style;
      if(selected !== "")
        document_style.setProperty('--text', "'Selected: "+selected+"'");
      else
        document_style.setProperty('--text', "'Select values'");
  });

</script>
<script type="text/javascript">
  $(".multiple_services").mousedown(function(e) {
    if (e.target.tagName == "OPTION") 
    {
      return; //don't close dropdown if i select option
    }
    $(this).toggleClass('multiple_services_active'); //close dropdown if click inside <select> box
});
$(".multiple_services").on('blur', function(e) {
    $(this).removeClass('multiple_services_active'); //close dropdown if click outside <select>
});
  
$('.multiple_services option').mousedown(function(e) { //no ctrl to select multiple
    e.preventDefault(); 
    $(this).prop('selected', $(this).prop('selected') ? false : true); //set selected options on click
    $(this).parent().change(); //trigger change event
});

  
  $("#myservices").on('change', function() {
      var selected = $("#myservices").val().toString(); //here I get all options and convert to string
      var document_style = document.documentElement.style;
      if(selected !== "")
        document_style.setProperty('--text', "'Selected: "+selected+"'");
      else
        document_style.setProperty('--text', "'Select values'");
  });
</script> -->
	

   
 


</body>
</html>