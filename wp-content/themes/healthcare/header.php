
<?php  if(empty($_SESSION['userdata']) && ($_SERVER['REQUEST_URI']!='/' && $_SERVER['REQUEST_URI']!='/login/')) {?>
  <script type="text/javascript">
    window.location.href= "<?php echo site_url(); ?>";
  </script>
<?php } ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/jquery.multiselect.css">
  <link rel="stylesheet" type="text/scss" href="<?php echo get_template_directory_uri(); ?>/scss/custom.scss">

  <?php wp_head(); 
if($_SESSION['userdata']!=''){
  $email = $_SESSION['userdata']['email'];
  $authToken= $_SESSION['userdata']['authentication_token'];
  $theme = getTheme($email, $authToken);
  if($theme['user_theme']!=''){
    $linkColor= $theme['user_theme'];
  } else{
    $linkColor= DEFAULT_THEME_COLOR;
  }
} else{
  $linkColor= DEFAULT_THEME_COLOR;
} 
   ?>

 <style type="text/css">
 .theme-bg{ background-color: <?php echo $linkColor; ?> !important;}
.button-all{
   /* border: 1px solid red;*/
     background: <?php echo $linkColor; ?>;
}
.button-all:hover{
   opacity: 0.6;
     background: <?php echo $linkColor; ?>!important;
}
.faq .panel-title a {    border-bottom: 2px solid <?php echo $linkColor; ?>!important;
}
.button-all1 li a:hover{
    color: #fff;
     background: #fff!important;
}
.mark1{
  color: <?php echo $linkColor; ?>!important
}
.disable-grey {
    background-color: <?php echo $linkColor; ?>!important;
    opacity: 0.4;
}

.links:hover{
  background: red
}
 .login-link{
    position: absolute;
    right: 65px;
    top: 59px;
 	}

 .login-link a {
    border: 1px solid #42af2a;
    padding: 10px 19px;
    border-radius: 100px;
    color: #42af2a;
}
 </style>

<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 --></head>
<?php $health_data= health_care_get_options(); ?>
<body <?php if($health_data['box_layout']==2) { body_class('boxed'); } else body_class(); ?>>

<?php //print_r($_SESSION); 

//echo $_SESSION['userdata']['email'];
//echo $_SESSION['userdata']['email'];
if($_SESSION['userdata']!=''){
	$email = $_SESSION['userdata']['email'];
	$authToken= $_SESSION['userdata']['authentication_token'];
	$userdata = userprofiledetails($email); 
} 
$logodata = logo($email, $authToken);
if($logodata['status']!='unauthorized'){
	$img_src = IMAGE_PATH.$logodata['logo'];
}else{
	$img_src = esc_url($health_data['upload_image_logo']);
}

?>


	<nav class="navbar navbar-static-top marginBottom-0 menu" <?php if ( has_header_image() ) { ?> style='background-image: url("<?php header_image(); ?>")' <?php  } ?>>
		<div class="container">
         
			   <div class=" logo">
				  <a href="<?php if(isset($_SESSION['userdata'])){ echo esc_url(home_url( '/dashboard' )); } else{echo esc_url(home_url( '/' )); }?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" class="navbar-brand"> <?php if($health_data['upload_image_logo']!=''){ ?>
					<img class="img-responsive" src="<?php echo $img_src; ?>" style="height:<?php if($health_data['logo_height']!='') { echo esc_attr($health_data['logo_height']); }  else { "50"; } ?>px; width:<?php if($health_data['logo_width']!='') { echo esc_attr($health_data['logo_width']); }  else { "250"; } ?>px;" />
				 <?php }else{ ?>
				 <h2><?php echo esc_attr(get_bloginfo('name')); } ?></h2> </a>
				 <p> <?php bloginfo( 'description' ); ?> </p>

				</div>
<div class="top-nav-netx">

				<?php if($_SESSION['userdata']==''){?>	
                <div class="signup-link">
					<a href="<?=site_url()?>/backend/registration_requests/new" target="_blank" class="button-all">Sign up</a>
				</div>
              <?php } else{?>

               <div style="position: absolute;right: 102px;top: 50px;width: auto;">
<!-- <style type="text/css">
	#menu-usermenu{
		margin: 10px 0 0; margin-top: 84px;
    margin-left: -34px!important;
	}
</style> -->

<style>
.dropbtn {
padding: 10px 19px;
border-radius: 100px;
color: #000;
font-size: 20px;
font-weight: normal;
margin-right: 33px;}
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    padding: 0;
    top: 100%;
    left: 20px;
}
.dropdown-content li a {
  color: #fff;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.dropdown-content li{
	list-style: none!important;
}
.dropdown-content li a:hover {    background-color: #fff;
    color: #000!important;}

.dropdown:hover .dropdown-content {display: block;}
</style>

    <?php 
       $userdata = userprofiledetails($email); 
     ?>
               	<div class="dropdown">
					<a href="#" class=" dropdown-toggle dropbtn" data-toggle="dropdown" data-hover="dropdown" ><span class="fa fa-user-plus icon-bg theme-bg"></span> <?php echo $userdata['profile']['name']; ?> </a>
					
				<!--<ul class="dropdown-content" >
				    <li><a href="#">Report</a></li>
				    <li><a href="#">Setting</a></li>

				    <li><a href="<?=site_url()?>/logout">Logout</a></li>
				    
				  </ul> -->

  <?php  wp_nav_menu(array(
        'menu'            => 'usermenu',
        'container'       => '',
        'container_class' => '',
        'container_id'    => '',
        'menu_class'      => 'dropdown-content theme-bg',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'item_spacing'    => 'preserve',
        'depth'           => 0,
        'walker'          => '',
        'theme_location'  => '',
    ));	 ?>

				</div>
					<div class="set-question" style="float: right;">
						<a href="<?=site_url()?>/faq"><span class="mark1">?</span> </a>
					</div>
				</div>


				 <?php } ?>
				
                  
				<div id="toggle">
					 
					  <figure class="menu-fig theme-bg">
					  	 
					  <div class="one"></div>
					  <div class="two"></div>
					  <div class="three"></div>
					  </figure>
					</div>
					<div id="menu" class="theme-bg">
           <!--  <div class="collapse navbar-collapse" id="navbar-collapse-1">      -->          
						<?php  wp_nav_menu( array(
						'theme_location' => 'primary',
						'menu_class' => 'nav navbar-nav navbar-right',
						'fallback_cb' => 'weblizar_fallback_page_menu',
						'walker' => new weblizar_nav_walker(),
						)
						);	 ?>						 
						 
            </div><!-- /.navbar-collapse -->
				</div>
			
			
		</div>
    </nav> 
    
<!-- End Header -->
<!-- <?php 

 if($userdata['profile']['admin'] == 'true'){ ?>
 	<script>
    jQuery("#menu-item-186").css("display", "none");
    </script>
    <?php }  ?> -->
 <?php if($userdata['profile']['admin'] == 'false'){ ?>
 	<script>
    jQuery("#menu-item-176").css("display", "none");
    </script>
    <?php } ?>

<?php if(!empty($_SESSION['userdata'])){?>
<script>
	jQuery("#menu-item-65").css("display", "none");
	jQuery("#menu-item-16").css("display", "none");
	jQuery("#menu-item-156").css("display", "none");
	jQuery("#menu-item-203").css("display", "none");

</script>
<?php } else{?>
<script>
	jQuery("#menu-item-144").css("display", "none");
	jQuery("#menu-item-135").css("display", "none");
	jQuery("#menu-item-125").css("display", "none");
	jQuery("#menu-item-74").css("display", "none");
	jQuery("#menu-item-11").css("display", "none");
	jQuery("#menu-item-55").css("display", "none");
	jQuery("#menu-item-13").css("display", "none");
	jQuery("#menu-item-78").css("display", "none");
	jQuery("#menu-item-173").css("display", "none");
    jQuery("#menu-item-176").css("display", "none");
    jQuery("#menu-item-186").css("display", "none");
    jQuery("#menu-item-201").css("display", "none");
    jQuery("#menu-item-202").css("display", "none");
    jQuery("#menu-item-212").css("display", "none");
    jQuery("#menu-item-235").css("display", "none");
</script>
	<?php } ?>

	<script type="text/javascript">
		$('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu ').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu ').stop(true, true).delay(200).fadeOut(500);
});
	</script>
