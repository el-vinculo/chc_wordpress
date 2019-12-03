<?php
/**
 * Template Name: chcAuth
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

get_header(); 

if($_GET['email']!=''){
 $email=$_GET['email'];
 $authResponse = chcAuthNextStep($email);
 if($authResponse['authentication_token']!=''){
 	$_SESSION['userdata'] = $authResponse;
    $redirectUrl= site_url()."/dashboard/";
 	?>
 	<script type="text/javascript">window.location.href="<?php echo $redirectUrl;?>"</script>

<?php } 
 
}
?>
<div class="container-fluid space">
	<div class="container blogs">
	<div class="col-md-9 rightside">

	</div>
	<?php //get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>
