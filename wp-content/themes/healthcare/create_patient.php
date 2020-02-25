<style type="text/css">	
.divBorder {
    border-width:1px;  
    border-style:solid;
}
</style>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<?php
/**
 * Template Name: Create_patient
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
									<div class="post_title"><h3>Create New Client</h3></div>
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
		        <div class="col-md-4">
				  <div class="form-group">
				    <label for="email">First Name :<span style="color: red">*</span></label>
				    <input type="text" class="form-control" id="referral_name" name="first_name" placeholder="First Name" autocomplete="off" required="required">
				  </div>
				</div>
				<div class="col-md-4">
				  <div class="form-group">
				    <label for="email">Last Name:</label>
				    <input type="text" class="form-control" id="referral_name" name="last_name" placeholder="Last Name" autocomplete="off" >
				  </div>
				</div> 
					<div class="col-md-4">
					  <div class="form-group">
					    <label for="pwd">Date of Birth: <span style="color: red">*</span></label>
					    <div class='input-group date' id='datetimepicker1'>
                    <input type='text' name="date_of_birth" autocomplete="off" class="form-control" id="datepicker"    placeholder="Date of Birth" required="required" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
					    
					  </div>
					</div>   
				
			
			 </div>
		 </div>
	   </div>
	   <div class="form-group">
	    
			<div class="row">
			    <div class="col-md-12">
			    <div class="col-md-4">
				  <div class="form-group">
				    <label for="email">Email : </label>
				    <input type="email" class="form-control" id="referral_name" name="patient_email" placeholder="Email" >
				  </div>
				</div>
				<div class="col-md-4">
				  <div class="form-group">
				    <label for="email">Phone: <span style="color: red">*</span></label>
				    <input type="text" autocomplete="off" class="form-control" id="referral_name" name="patient_phone" placeholder="Phone" required="required">
				  </div>
				</div>
				<div class="col-md-4">
				  <div class="form-group">
				    <label for="email">Coverage Id:</label>
				    <input type="text" class="form-control" id="referral_name" name="patient_coverage_id" placeholder="Coverage Id" >
				  </div>
				</div>  
			        
					
				
				 </div>
			</div>
	   </div>
	   	   <div class="form-group">
	    
			<div class="row">
			    <div class="col-md-12">
			    <div class="col-md-4">
				  <div class="form-group">
				    <label for="email">Healthcare Coverage :</label>
				    <input type="text" class="form-control" id="healthcare_coverage" name="healthcare_coverage" placeholder="Healthcare Coverage" >
				  </div>
				</div>
				<div class="col-md-4">
				  <div class="form-group">
				    <label for="email">Zipcode: <span style="color: red">*</span></label>
				    <input type="text" class="form-control" id="patient_zipcode" name="patient_zipcode" placeholder="Patient Zipcode" autocomplete="off"  required="required" maxlength="5" onkeyup="checknumber(this.id,this.value);">
				  </div>
				</div>
				<div class="col-md-4">
                                    <div class="form-group">
                                    <label for="email">Primary Care Physician:</label>
                                    <input type="text" name="primary_care_physician" class="form-control" id="insurance" placeholder="Primary Care">
                                    </div>
                                </div>
								
					 </div>
			</div>
	   </div>
	   

<p>Emergency Contacts: </p>

	   <div class="form-group">
	    
			<div class="row">
			    <div class="col-md-12">
			    <div class="col-md-4">
                                  <div class="form-group lebel-set">
                                    <label  for="email">Name:</label>
                                    <input type="text" name="emergency_contact_fName" class="form-control" id="insurance" placeholder="Name">
                                  </div>
                                </div>
<div class="col-md-4">
                                  <div class="form-group lebel-set">
                                    <label  for="email">Email:</label>
                                    <input type="text" name="emergency_contact_email" class="form-control" id="insurance" placeholder="Email">
                                  </div>
                                </div>
<div class="col-md-4">
                                  <div class="form-group lebel-set">
                                    <label for="email">Phone Number:</label>
                                    <input type="text" name="emergency_contact_phone" class="form-control" id="insurance" placeholder="Phone Number">
                                  </div>
                                </div>
			        
					
				
				 </div>
			</div>
	   </div>
	   
	   
	    
			<div class="row">
			    <div class="col-md-12">
				<div class="col-md-6">
				  <div class="form-group">
				    <label for="email">Perfered Contact:</label>
				    <label class="radio-inline"><input type="radio" name="mode_of_contact"  value="call">Call</label>
<label class="radio-inline"><input type="radio" name="mode_of_contact" value="text">Text</label>
<label class="radio-inline"><input type="radio" name="mode_of_contact" value="email" >Email</label>
				  </div>
				</div>  
			        
					
				
				 </div>
			</div>

	 <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="email":>Client Consent</label>
<label class="radio-inline"><input type="radio" name="client_consent"  value="not_answered">Not Answered</label>
<label class="radio-inline"><input type="radio" name="client_consent"  value="yes" >yes</label>
<label class="radio-inline"><input type="radio" name="client_consent" value="no" >no</label>

                                  </div>
                                </div>


                         </div>
         </div>
<a href="javascript:void(0)" id="addmoreadditional" class="text-center"><i class="fa fa-plus" aria-hidden="true"></i> Add additional field</a>
	     <div class="input_fields_wrap_additional">
                                        
          </div>
		 <input type="submit" name="savepatient" value="Save" class="btn-primary button-all"/>
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
<!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<script type="text/javascript">
            jQuery(function () {
                jQuery( "#datepicker" ).datepicker({ dateFormat: "yy-mm-dd" });
            });
    </script>

<script>
function checknumber(iid,vaalue){
    if(isNaN(vaalue)){
    	jQuery('#'+iid).val('');
    }
}

jQuery(document).ready(function() {
    var max_fields      = 40; 
    var wrapper         = jQuery(".input_fields_wrap_additional");    
    var x = 1; 
    jQuery("#addmoreadditional").click(function(e){ 
       e.preventDefault();
        if(x < max_fields){ 
            var name1 = "additional[]";
            var name2 = "additionalkeys[]";
            var divviid = "additionaldiv"+x;
            var placeholdertext = "additional field "+x;
            jQuery(wrapper).append("<div id='"+divviid+"' class='form-group'><div class='row'><div class='col-md-12'><div class='col-md-10'><input type='text' name='"+name2+"' placeholder='Additional Field' class='form-control' value=''  ></div><div class='col-md-10'><input type='text' name='"+name1+"' class='form-control' placeholder='Additional Value' value=''  ></div></div></div><button class='btn-danger remove_field' id='remove-additionaldiv"+x+"' onclick='removeobstr(this.id)' type='button' title='Remove'><i class='fa fa-minus-circle'></i></button></div>"); //add input box
             x++; 
        }
    });

});
</script>
<?php
$error = 0;
if(isset($_SESSION['userdata'])){
	$email = $_SESSION['userdata']['email'];
	if(!empty($_POST['savepatient'])){
      	$postPatientData = $_POST; 
		
	  	$savePatinets = savePatinets($postPatientData,$email);
   	
		if(!empty($savePatinets)){			
	  	   if($savePatinets['status'] == 'ok'){
			   $patient_id = base64_encode($savePatinets['patient_id']);  	
	  			$error = 0;
	  			$success = 51; 
	  			$msg   = $savePatinets['message'];
	  			$actionurl = site_url().'/patients/patient-details/?pid='.$patient_id;  
	  			//$Message = urlencode("Some error occured please try after some time ");
                //header("Location:".$actionurl."?msg=".$msg); 
				echo "<script>window.location.href='$actionurl';</script>";
                exit;
                //header("Refresh: 2; url=".$actionurl);
	  		}else{
	  			$error = 0;
	  			$success = 52; 
	  			$msg   = $savePatinets['message'];
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