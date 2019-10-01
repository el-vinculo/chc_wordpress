<?php
/**
 * Template Name: Settings
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

/*$email = 'defaultuser@test.com';
$termsdata = terms($email);
if(!empty($termsdata)){
	$terms = $termsdata['terms'][0]['body'];
}else{
	$terms = "";
}*/

get_header(); 
//get_template_part('cover');


?>
<div class="container-fluid space">
	<div class="container blogs">
	<div class="col-md-9 rightside">

		<div <?php post_class();?>>	
		<div class="row post-area">
	<div class="post-64 page type-page status-publish hentry">
					<div class="col-md-12 border">
				<div class="line"></div>
								<div class="post_title">
				<h3><?php //the_title(); ?>Settings</h3>
				</div>
								<div class="post-tags">				</div>
				
	<div class="post_content">
	<form action="/action_page.php">
  <div class="form-group">
    <label for="email">First Name:</label>
    <input type="fname" class="form-control" id="fname">
  </div>
<div class="form-group">
    <label for="email">Last Name:</label>
    <input type="lname" class="form-control" id="lname">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  <div class="form-group">
    <label for="pwd">Confirm Password:</label>
    <input type="cpassword" class="form-control" id="cpwd">
  </div>
  <button type="submit" class="btn-success">Save</button>
</form>
		
       	
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