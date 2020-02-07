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
				    <label for="email">Perfered Contact:</label>
				    <label class="radio-inline"><input type="radio" name="mode_of_contact"  value="call">Call</label>
<label class="radio-inline"><input type="radio" name="mode_of_contact" value="text">Text</label>
<label class="radio-inline"><input type="radio" name="mode_of_contact" value="email" >Email</label>
				  </div>
				</div>  
			        
					
				
				 </div>
			</div>
	   </div>
	 <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-4">
                                  <div class="form-group">
                                    <label for="email":>Client Consent</label>
                                <?php echo $patientsDeatils['client_consent']; ?>
<label class="radio-inline"><input type="radio" name="client_consent"  value="yes" <?php if(isset($patientsDeatils['client_consent']) && ($patientsDeatils['client_consent'] == 'yes')) { echo "checked"; } ?>>yes</label>
<label class="radio-inline"><input type="radio" name="client_consent" value="no" <?php if(isset($patientsDeatils['client_consent']) && ($patientsDeatils['client_consent'] == 'no')) { echo "checked"; } ?>>no</label>

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
			   $patient_id = $savePatinets['patient_id'];
?>
<script type="text/javascript">
    var postdata = '<?php echo json_encode($postPatientData);?>';
    var interview_iid = '<?php echo $patient_id ;?>';
	
	//console.log(postdata);
    updateinterviewfield(postdata,interview_iid);	
	function updateinterviewfield(postdata,interview_iid){
		var postdata = JSON.parse(postdata);
	    console.log(postdata);
      var interview_iid = interview_iid;
	  console.log(interview_iid);
	  var ajax_url = "<?php echo site_url().'/ajax.php'; ?>";
      //var email = "<?php echo $email; ?>";
	  if("additionalkeys" in postdata){
		  var add_keys =postdata.additionalkeys;
          var add_values =postdata.additional;
	      var values  = add_keys.toString();
          var values1 = add_values.toString();
	  }
      
	  
       var caller_firstname = postdata.first_name;
       var caller_lastname = postdata.last_name;
       var caller_dob = postdata.date_of_birth;
       var email =  postdata.patient_email;
       var caller_zipcode = postdata.patient_zipcode;
       
   
      if(values == ''){
         var caller_additional_fields = '';
      }else{
         var caller_additional_fields = values1;
      } 

      if(values1 == ''){
         var caller_additional_keys = '';
      }else{
         var caller_additional_keys = values;
      }        
      

      
      if(interview_iid != ''){

       
      if(caller_firstname == ''){
         return false;
      }else if(caller_dob == ''){
        return false;
      }else{
        jQuery.ajax({
            type: 'post',
            url: ajax_url,
            data: {'interview_id':interview_iid,'email':email,'caller_first_name':caller_firstname,'caller_last_name':caller_lastname,'caller_dob':caller_dob,'caller_zipcode':caller_zipcode,'caller_additional_fields':caller_additional_fields,'caller_additional_keys':caller_additional_keys,funtion:'updateInterviewData'},
            success: function (res) {
				console.log(res);
                if(res == '11'){          
                    return true;
                }else{
                    //alert('Error ! Please try again ');
                }
              
            }
          });
      }

      }else{
        return false;
      }

 

}

function removeobstr(id){
    var arr = id.split('-');
    var r = arr[1];
    jQuery('#'+r).remove();
}
</script>
<?php	  	
	  			$error = 0;
	  			$success = 51; 
	  			$msg   = $savePatinets['message'];
	  			$actionurl = site_url().'/patients/';  
	  			//$Message = urlencode("Some error occured please try after some time ");
                //header("Location:".$actionurl."?msg=".$msg); 
                header("Refresh: 2; url=".$actionurl);
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