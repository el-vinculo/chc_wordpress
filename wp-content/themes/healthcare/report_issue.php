<?php
/**
 * Template Name: Report Issue
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
  
 
  if(!empty($_POST['submit'])){
      
       $to=CARE_EMAIL;
       $subject="Issues Reported";
       $description=$_POST['description'];
      $headers = array('From: CHC <wordpress@dev11.resourcestack.com>');
    $message ="<html><body>Hello Admin, One of our user has reported issues having following details:<br> Name: ".$_POST['fname']." <br>
      Email:".$_POST['uemail']."<br>
      Phone:".$_POST['phonenumber']."<br>
      Description:".$_POST['description']." </body></html>
      ";

       $filename = basename($_FILES["screenshots"]["name"]);

      
       if($filename !=''){

        $target_dir = wp_upload_dir();


        if ( wp_mkdir_p( $target_dir['path'] ) ) {
                $target_file = $target_dir['path'] . '/'.$filename;
            }
          else {
                $target_file = $target_dir['basedir'].'/'.$filename;
            }
  
          if(move_uploaded_file($_FILES['screenshots']['tmp_name'],$target_file)) {
              //echo "File Uploaded";
              //$uploadOk = 1;
            $url=$target_dir['url'].'/'.$filename;
            $fileUrl= "<a href='".$url."'>'".$url."'</a>";
             $message.="Screenshot: ".$fileUrl;
          } else {
             // echo "File is not uploaded";
             // $uploadOk = 0;
          }
                // $image_url = $file;

                // $upload_dir = wp_upload_dir();

                // $image_data = file_get_contents( $file );

                // $filename = basename( $image_url );

                // if ( wp_mkdir_p( $upload_dir['path'] ) ) {
                // $file = $upload_dir['path'] . '/' . $filename;
                // }
                // else {
                // $file = $upload_dir['basedir'] . '/' . $filename;
                // }

                // file_put_contents($file, $image_data );

               // $wp_filetype = wp_check_filetype( $filename, null );

                // $attachments = array(
                // 'post_mime_type' => $wp_filetype['type'],
                // 'post_title' => sanitize_file_name( $filename ),
                // 'post_content' => '',
                // 'post_status' => 'inherit'
                // );

               // $attach_id = wp_insert_attachment( $attachment, $file );
              //  require_once( ABSPATH . 'wp-admin/includes/image.php' );
               // $attach_data = wp_generate_attachment_metadata( $attach_id, $file );
               // wp_update_attachment_metadata( $attach_id, $attach_data );
       }

      // echo '======>'.$target_file;

       $attachments = array($target_file);

      // print_r($attachments);

      $sendEmail= wp_mail($to, $subject, $message, $headers, $attachments = array() );
	  	//$updateuser = updateuserprofile($postprofiledata);
	  	if($sendEmail){
	  			$error = 0;
	  			$success = 51; 
	  			$msg   = "Your issues reported successfully";
	  			//$actionurl = site_url().'/report-issue/';  
	  			//$Message = urlencode("Some error occured please try after some time ");
                //header("Location:".$actionurl."?msg=".$msg); 
                //header("Refresh: 2; url=".$actionurl);
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
<link rel="stylesheet" href="<?=site_url()?>/wp-content/themes/healthcare/sceditor-2.1.3/minified/themes/default.min.css" id="theme-style" />
      
    <script src="<?=site_url()?>/wp-content/themes/healthcare/sceditor-2.1.3/minified/sceditor.min.js"></script>
    <script src="<?=site_url()?>/wp-content/themes/healthcare/sceditor-2.1.3/minified/icons/monocons.js"></script>
    <script src="<?=site_url()?>/wp-content/themes/healthcare/sceditor-2.1.3/minified/formats/bbcode.js"></script>

    <style>
      html {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 13px;
      }
      form div {
        padding: .5em;
      }
      code:before {
        position: absolute;
        content: 'Code:';
        top: -1.35em;
        left: 0;
      }
      code {
        margin-top: 1.5em;
        position: relative;
        background: #eee;
        border: 1px solid #aaa;
        white-space: pre;
        padding: .25em;
        min-height: 1.25em;
      }
      code:before, code {
        display: block;
        text-align: left;
      }
    </style>

<div class="container-fluid space">
	<div class="container blogs">
	<div class="col-md-12 rightside">

		<div <?php post_class();?>>	
		<div class="row post-area">
	<div class="post-64 page type-page status-publish hentry">
					<div class="col-md-12 border">
				<div class="line"></div>
				<div class="post_title">
				<h3><?php //the_title(); ?>Report Issue</h3>
				</div>
								<div class="post-tags">				</div>
	<?php if($error == 0){ ?>			
	<div class="post_content">
	<?php  $actionurl = site_url().'/report-issue/'; ?>
	<form action="<?php echo $actionurl; ?>" enctype="multipart/form-data" method="post">
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
    <input type="text" name="fname" class="form-control" id="fname" value="<?php if(!empty($userprofiledata['name'])){ echo $userprofiledata['name']; } ?>">
  </div>

<div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" name="uemail" id="uemail" value="<?php if(!empty($userprofiledata['email'])){ echo $userprofiledata['email']; } ?>" readonly="readonly">

  </div>
  <div class="form-group">
    <label for="email">Phone Number:</label>
    <input type="phonenumber" class="form-control" name="phonenumber" id="phonenumber" value="<?php if(!empty($userprofiledata['phone_number'])){ echo $userprofiledata['phone_number']; } ?>">
  </div>

  <div class="form-group">
    <label for="email">Problem Description:</label>
  
<div>
        <textarea id="example" name="description" style="height:300px;width:850px;"></textarea>

       
      </div>

      <div style="display:none;">
        <label for="theme">Theme:</label>
        <select id="theme">
        
          <option value="square">Square</option>
        </select>
      </div>

      <script>
      var textarea = document.getElementById('example');
      sceditor.create(textarea, {
        icons: 'monocons',
        style: '<?=site_url()?>/wp-content/themes/healthcare/sceditor-2.1.3/minified/themes/content/default.min.css'
      });


      var themeInput = document.getElementById('theme');
      themeInput.onchange = function() {
        var theme = '<?=site_url()?>/wp-content/themes/healthcare/sceditor-2.1.3/minified/themes/' + themeInput.value + '.min.css';

        document.getElementById('theme-style').href = theme;
      };
    </script>
  </div>

   <div class="form-group">
    <label for="email">Screenshot:</label>
    <input type="file" class="form-control" name="screenshots">
  </div>


  <input type="submit" class="btn-success" name="submit" value="Submit">

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
