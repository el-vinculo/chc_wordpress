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


//get_template_part('cover');


?>

<?php



$error = 0;
$success = 0;

if(isset($_SESSION['userdata'])){
  $email = $_SESSION['userdata']['email']; 
  $userdata = userprofiledetails($email); 
  if(!empty($userdata['status'] == 'ok')){
        $userprofiledata = $userdata['profile'];
       
  }else{
        $error = 0;
        $msg   = $userdata['status']. ' ! '. $userdata['message'];
  }

  if(!empty($_POST['update'])){
      	$postprofiledata = $_POST; 
        
	  	$updateuser = updateuserprofile($postPatientData);
	  	if(!empty($updateuser)){
	  		if($updateuser['status'] == 'ok'){
	  			$error = 0;
	  			$success = 51; 
	  			$msg   = $updateuser['message'];
	  			$actionurl = site_url().'/settings/';  
	  			//$Message = urlencode("Some error occured please try after some time ");
                //header("Location:".$actionurl."?msg=".$msg); 
                header("Refresh: 2; url=".$actionurl);
	  		}else{
	  			$error = 0;
	  			$success = 52; 
	  			$msg   = $updateuser['message'];
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

?>
<div class="container-fluid space">
	<div class="container blogs">
	<div class="col-md-12 rightside">

		<div <?php post_class();?>>	
		<div class="row post-area">
	<div class="post-64 page type-page status-publish hentry">
					<div class="col-md-12 border">
				<div class="line"></div>
								<div class="post_title">
				<h3><?php //the_title(); ?>Settings</h3>
				</div>
								<div class="post-tags">				</div>
	<?php if($error == 0){ ?>			
	<div class="post_content">
	<?php  $actionurl = site_url().'/settings/'; ?>
	<form action="<?php echo $actionurl; ?>" method="post">
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
    <label for="email">Name:</label>
    <input type="text" name="name" class="form-control" id="fname" value="<?php if(!empty($userprofiledata['name'])){ echo $userprofiledata['name']; } ?>">
  </div>
<div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" name="email" id="email" value="<?php if(!empty($userprofiledata['email'])){ echo $userprofiledata['email']; } ?>">
  </div>
  <div class="form-group">
    <label for="email">Phonenumber:</label>
    <input type="phonenumber" class="form-control" name="phonenumber" id="phonenumber" value="<?php if(!empty($userprofiledata['phonenumber'])){ echo $userprofiledata['phonenumber']; } ?>">
  </div>
  <div class="form-group">
    <label for="pwd">Active:</label>
    <input type="radio"  name="active" value="ture" <?php if(!empty($userprofiledata['active']) && ($userprofiledata['active'] == "true")){ echo "checked"; } ?>>Yes
    <input type="radio"  name="active" value="false" <?php if(!empty($userprofiledata['active']) && ($userprofiledata['active'] == "false")){ echo "checked"; } ?>>No
  </div>
  <div class="form-group">
    <label for="pwd">Admin:</label>
    <input type="radio"  name="admin" value="ture" <?php if(!empty($userprofiledata['admin']) && ($userprofiledata['admin'] == "true")){ echo "checked"; } ?>>Yes
    <input type="radio"  name="admin" value="false" <?php if(!empty($userprofiledata['admin']) && ($userprofiledata['admin'] == "false")){ echo "checked"; } ?>>No
  </div>
   <div class="form-group">
    <label for="pwd">OPT Required:</label>
    <input type="radio"  name="otp_required_for_login" value="ture" <?php if(!empty($userprofiledata['otp_required_for_login']) && ($userprofiledata['otp_required_for_login'] == "true")){ echo "checked"; } ?>>Yes
    <input type="radio"  name="otp_required_for_login" value="false" <?php if(!empty($userprofiledata['otp_required_for_login']) && ($userprofiledata['otp_required_for_login'] == "true")){ echo "checked"; } ?>>No
  </div>

  <input type="submit" class="btn-success" name="update" value="Update">
</form>
		
       	
	</div>
        <?php }elseif($error == 1){ ?>
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
	<?php //get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>