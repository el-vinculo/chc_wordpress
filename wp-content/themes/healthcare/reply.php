<style type="text/css">	
.divBorder {
    border-width:1px;  
    border-style:solid;
}
</style>


<?php
/**
 * Template Name: Reply
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


$error = 0;
if(isset($_SESSION['userdata'])){
	  $email = $_SESSION['userdata']['email'];
if(!empty($_POST['savepatient'])){
  	$message = $_POST['message']; 
  	$commid = $_GET['comm_id'];
  	$sendReply = reply($message,$commid,$email);
  	if(!empty($sendReply)){
  		if($sendReply['status'] == 'ok'){
  			$error = 0;
  			$success = 51; 
  			$msg   = $sendReply['message'];
  			
  		}else{
  			$error = 0;
  			$success = 52; 
  			$msg   = $sendReply['message'];
  		}
  	}else{
  		$error = 0;
  		$success = 53; 
  		$msg   = 'Please try again !! Something went wrong';
  	}
  }
  }else{
	$error = 1;
	$msg   = 'unauthorized ! you have to login';
}

get_header(); 
//get_template_part('cover');
?>
<div class="container-fluid space">
	<div class="container blogs">
	<div class="col-md-12 rightside">
	    <div class="post-73 page type-page status-publish hentry">	
			<div class="row post-area">
	            <div class="post-73 page type-page status-publish hentry">
					<div class="col-md-12 border">
				        <div class="line"></div>
				        				           
				            <?php if($error == 0){ ?>    
									<div class="post_title"><h3>Reply</h3></div>
						            <div class="post-tags"></div>
						            <div class="post_content">
				                    <?php  $actionurl = site_url().'/patients/'; ?>
				                    <form role="form" method="post"  action="">
                                    <div class="container" style="max-width:1000px;margin:60px auto;">
	 <?php if($success == '51'){ ?>
        <div class="row">
	    <div class="alert alert-success alert-dismissible">
	        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
            <strong><?php echo $msg; ?></strong>
        </div>
        </div>
        <?php }elseif($success == '52' || $success == '53'){ ?>
        <div class="row">
        <div class="alert alert-danger alert-dismissible">
	        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
            <strong><?php echo $msg; ?></strong>
       </div>
        </div> 
        <?php }?>			 			        	    
	<div class="form-group">
	     <div class="row">
		    <div class="col-md-12">
		        <div class="col-md-8">
				  <div class="form-group">
				    <label for="email">Message :<span style="color: red">*</span></label>
				    <textarea name="message" class="form-control" cols="15" rows="10" style="margin: 0px -341.344px 0px 0px; width: 960px; height: 152px;"  required="required"></textarea>
				  </div>
				</div>
			 </div>
		 </div>
	   </div>
	     <input type="submit" name="savepatient" value="Send" class="btn-primary"/>
	</form>


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
<?php get_footer(); ?>





