<?php
/**
 * Template Name: Login
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


if(!empty($_SESSION['emailaddress'])){
	$email = $_SESSION['emailaddress'];
if(!empty($_POST)){
	$error = 0;
	if(empty($_POST['email']) || empty($_POST['password']) ){
		$error = 1;
		$msg = 'The email and  password should not empty. Please try again';
	}else{
		$email = $_POST['email'];
		$password = $_POST['password'];
		if(!empty($_SESSION['two_factor_enabled'])){
		$otp_attempt = $_POST['otp_attempt'];
	}else{
		$otp_attempt = '';
	}
		$authdata = authentication($email,$password,$otp_attempt);
		if($authdata){
			if(isset($authdata['status']) && $authdata['status'] == 'unauthorized' ){
				$error = 1;
				if(!empty($authdata['message'])){
                    $msg = $authdata['message'];
				}else{
					$msg = 'The email or password was incorrect. Please try again';
				}
				
			}else{
				$error = 2;
				
				$_SESSION['userdata'] = $authdata;
                               
				wp_redirect( site_url()."/dashboard/", 301 );


			}

		}else{
			$error = 1;
		}
	}
}

}else{
	wp_redirect( site_url()."/verify/", 301 );
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
				<h3><?php the_title(); ?></h3>
				</div>
								<div class="post-tags">				</div>
				
	<form class="form-horizontal" method="post" action="">
<fieldset>
<div class="form-group"><label class="control-label col-xs-2" for="inputEmail">Email</label>
<div class="col-xs-10"><input id="inputEmail" name="email" class="form-control" type="email" placeholder="Email" value="<?php echo $email; ?>" readonly required/></div>
</div>
<div class="form-group"><label class="control-label col-xs-2" for="inputPassword">Password</label>
<div class="col-xs-10"><input id="inputPassword" name="password" class="form-control" type="password" placeholder="Password" required /></div>
</div>


<?php 
//echo "<pre>";
//print_r($_SESSION['two_factor_enabled']); die; 

if(!empty($_SESSION['two_factor_enabled'])){ ?>
<div class="form-group"><label class="control-label col-xs-2" for="inputPassword">Authentication Code</label>
<div class="col-xs-10"><input id="step-2-otp" name="otp_attempt" class="form-control" type="password" placeholder="Two Factor Authentication Code" required /></div>
</div>

<?php } ?>

<div class="form-group">
 <div class="col-xs-offset-2 col-xs-10"><label><input type="checkbox" checked="checked" name="remember"> Remember me</label></div></div>

<div class="form-group">
<div class="col-xs-offset-2 col-xs-10"><button class="btn-primary" id="login_details" type="submit">Login</button></div>
</div>


<div class="form-group">

<iframe name="adminAccess" id="frame1" src="https://dev11.resourcestack.com/backend/" width="1000" height="400" style="display: none;"></iframe>


</div>
<script type="text/javascript">
	//document.getElementById("#frame1").style.display = "none";
	jQuery(document).ready(function($){
	
		$("#login_details").click(function() {
			const email = $("#inputEmail").val();
	   		const pass = $("#inputPassword").val();
			const otp = $("#step-B-otp").val();
	   		const frame = $("#frame1");
	   		console.log("the frame is " , frame.get(0).contentWindow);
			//if ($("#step-2-otp").val()!= '')
			//frame.get(0).contentWindow.postMessage("logout","https://dev11.resourcestack.com/backend/");
	   		frame.get(0).contentWindow.postMessage(["login",email,pass,otp].toString(),"https://dev11.resourcestack.com/backend/");
			//lse
			//frame.get(0).contentWindow.postMessage([email,pass].toString(),"https://dev11.resourcestack.com/backend/");
	   		//alert("sdkjfhalfasifjhlafaijsef");
	   		return console.log("Message was sent from login");
		});
	});
</script>

<div class="form-group">
<div class="col-xs-offset-2 col-xs-10"><a href="javascript:void(0)">Forgot Password</a></div>
</div>

</fieldset>
</form>


							</div>
	</div>
</div>	
		</div>
	</div>
	<?php //get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>
