

<?php
/**
 * Template Name: Administrator
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
/*header('X-Frame-Options: https://dev7.resourcestack.com'); 
$headers = apache_request_headers();
echo "<pre>";
print_r($headers); die;*/
get_header(); 

$error = 0;
if(isset($_SESSION['userdata'])){
  $error = 0;

}else{
	$error = 1;
	$msg   = 'unauthorized ! you have to login';
}

if($_SESSION['userdata']!=''){
    $email = $_SESSION['userdata']['email'];
    $authToken= $_SESSION['userdata']['authentication_token'];
} 


?>
<style type="text/css">
	
.divBorder {
    border-width:1px;  
    border-style:solid;
}

.view-active{
color: #43b02a!important;
}


</style>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<div class="container-fluid space">
	<div class="container blogs">
	<div class="col-md-12 rightside">
	    <div class="post-73 page type-page status-publish hentry">	
			<div class="row post-area">
	            <div class="post-73 page type-page status-publish hentry">
					<div class="col-md-12 border">
				        <div class="line"></div>
				            
							<div class="post_title"><h3>Administrator</h3></div>
				            <div class="post-tags"></div>

				            <div class="post_content">
                             <a href="<?=site_url()?>/backend/contact_management_details" target="_blank">
				            	<button type="search " class="custom-btn btn-primary button-all">Catalog Manager</button>
				            </a>
				            	<p class="pull-right " style="margin-right:58px"><a href="<?=site_url()?>/backend/" target="_blank">Open this link in a new tab</a></p>
				                    <?php if($error == 0){ ?>

										
										<form action="<?=site_url()?>/backend/" method="get" target="adminAccess" id="formId">
											<input type="hidden" name="email" value="<?php echo $email; ?>">
											<input type="hidden" name="user-token" value="<?php echo $authToken; ?>">
										</form>

										<iframe name="adminAccess" id="frame1" src="<?=site_url()?>/backend/" width="1000" height="400"></iframe> 

										<script type="text/javascript">document.getElementById("formId").submit();
</script>
		
                                      <!-- <iframe src="https://dev7.resourcestack.com" width="1000" height="400" target="_parent"></iframe> -->

						  			<?php }else{ ?>
									<div class="alert alert-danger alert-dismissible">
									<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
									<strong><?php echo $msg; ?></strong> 
									</div>

									    
                                    <?php } ?>
                            </div>
					</div>
	            </div>
            </div>				
        </div>
	</div>
	<?php //get_sidebar(); ?>
	</div>
</div>
<?php get_footer();?>
