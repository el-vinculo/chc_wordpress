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


<script type="text/javascript">
    	jQuery("#toggle").click(function() {
  jQuery(this).toggleClass("on");
  jQuery("#menu").slideToggle();
});
    </script>
</body>
</html>