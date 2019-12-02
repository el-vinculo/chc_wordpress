<?php
/**
 * Template Name: Verify
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
session_start();
if(!empty($_POST)){
	$error = 0;
	if(empty($_POST['email'])){
		$error = 1;
		$msg = 'The email should not empty.';
	} if($_POST['email']!='' && $_POST['googleAuth']!=''){

		$originUrl= site_url();
	    $authResponse = chcAuth($_POST['email'], $originUrl); ?> 

	<script type="text/javascript">
		window.location.href= "<?php echo $authResponse['redirect_url'] ?>";
	</script>
     
	<?php } else{
		$email = $_POST['email'];
		$authdata = emailverification($email);
		/*echo "<pre>";
		print_r($authdata); die; */
		if($authdata){
			//echo "<pre>";
			//	print_r($authdata); die; 
			if(!empty($authdata['two_factor_enabled']) && ($authdata['two_factor_enabled'] == true) ){
				//echo "ifcondition";
				//die; 
				$error = 2;
			    $_SESSION['emailaddress'] = $email;
			    $_SESSION['two_factor_enabled'] = 1;
			    wp_redirect( site_url()."/login/", 301 );
			}else{
				//echo "elsecondition";
				//die; 
				$error = 2;
			    $_SESSION['emailaddress'] = $email;
			   // $_SESSION['two_factor_enabled'] = 1;
			    wp_redirect( site_url()."/login/", 301 );
			}
			

		}else{
			$msg = 'This email address has not found in our database !!';
			$error = 1;
		}
	}
}

get_header(); 
//get_template_part('cover');
?>
<div class="container-fluid space">
	<div class="container blogs">
	<div class="col-md-9 rightside">
	    <?php if($error == 1){ ?>
	    <div class="alert alert-danger alert-dismissible">
	        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Error!</strong> <?php echo $msg; ?>
        </div>
        <?php } ?>
		<div <?php post_class();?>>	
		<div class="row post-area">
	<div class="post-64 page type-page status-publish hentry">
					<div class="col-md-12 border">
				<div class="line"></div>
								<div class="post_title">
				<h3><?php //the_title(); ?>Login</h3>
				</div>
								<div class="post-tags">				</div>
				
	<div class="post_content">

		<form class="form-horizontal" action="" method="post">
<fieldset>
<div class="form-group">

<label class="control-label col-xs-2" for="inputEmail">Email</label>
<div class="col-xs-10"><input id="inputEmail" class="form-control" name="email" required="" type="email" placeholder="Email" /></div>
</div>
<div class="form-group">
<div class="col-xs-offset-2 col-xs-10"><button class="btn-primary" type="submit">Next</button></div>
</div>
<div class="form-group">
<div class="col-xs-offset-2 col-xs-10"><a href="#">Forgot Password</a></div>
<div class="col-xs-offset-2 col-xs-10" >
<input type="checkbox" name="googleAuth" value="yes"> Sign in with GoogleOAuth2
	<!-- <a href="<?=site_url()?>/verify?type=chcauth" class="google-sign">Sign in with GoogleOAuth2</a> --></div>
</div></fieldset>
</form>
        <?php if ( have_posts()): 
			while ( have_posts() ): the_post(); ?>
				<?php 
				//the_content(); ?>
			<?php endwhile; 
			else:
				//get_template_part('post','nocontent');
			endif; 
        ?>		
	</div>
							</div>
	</div>
</div>	
		</div>
	</div>
	<?php //get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>