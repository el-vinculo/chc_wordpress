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

<?php
/**
 * Template Name: Create_referral_test
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
	  $patient_id = base64_decode($_GET['pid']);
	  $patientdata = patientDetails($patient_id,$email);
	if(!empty($patientdata['status'] == 'ok')){
	  	$patientsDeatils = $patientdata['patients_details'];
	  	$patinetZip = $patientsDeatils['patient_zipcode'];
	}else{
	  	$error = 1;
	    $msg   = $patientdata['status']. ' ! '. $patientdata['message'];
	}
	  /*if(!empty($_POST) && !empty($_POST['save2'])){
	  	$postData = $_POST; 
	  	$save = savePatientReferral($postData,$patient_id,$email);
	  	if(!empty($save)){

	  		if($save['status'] == 'ok'){
	  			$error = 0;
                $url = site_url().'/patients/patient-details?pid='.base64_encode(base64_decode($_GET['pid'])).'&ref=1';
	  			header("Location: $url");
	  		}else{
	  			$error = 1;
	  		}
	  		//echo "<pre>";
	  		//print_r($save); die; 
	  	}
	  }*/
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
				                    <div class="post_title"><h3><?php echo $patientsDeatils['first_name']." ".$patientsDeatils['last_name']; ?>
								

							</h3></div>
							<div class="post_title"><h3>Create Referral</h3></div>
				            <div class="post-tags"></div>
				            <div class="post_content">
				                    <?php  $actionurl = site_url().'/patients/patient-details?pid='.base64_encode(base64_decode($_GET['pid'])); ?>
				                    <form role="form" method="post"  action="<?php echo $actionurl; ?>">
				 			        	    <div class="container" style="max-width:600px;margin:60px auto;">
				 			        	    <h4>Referral ></h4>
				 			        	    </br></br>
	
	   <div class="form-group">
	     <div class="row">
		    <div class="col-md-12">
		        <div class="col-md-6">
				  <div class="form-group">
				    <label for="email">Referral Name:</label>
				    <input type="text" class="form-control" id="referral_name" name="referral_name" placeholder="Referral Name" required="required">
				  </div>
				</div>  
				<div class="col-md-6">
				  <div class="form-group">
				    <label for="pwd">Referral Resource:</label>
				    <select name="source" id="source" class="form-control">
	                   <option value="EHR">EHR</option>
	                   <option value="EDR">EDR</option>
	                   <option value="ExtCC">ExtCC</option>
	                   <option value="Internal">Internal</option>
	                   <option value="Self">Self</option>
                    </select>
				  </div>
				</div>
			
			 </div>
		 </div>
	   </div>
	   <div class="form-group">
	    
			<div class="row">
			    <div class="col-md-12">
			        <div class="col-md-6">
					  <div class="form-group">
					    <label for="email">Urgency:</label>
					    <select name="urgency" id="urgency" class="form-control">
		                   <option value="High">High</option>
		                   <option value="Critical">Critical</option>
		                   <option value="Moderate">Moderate</option>
		                   <option value="Low">Low</option>
                        </select>
					  </div>
					</div>  
					<div class="col-md-6">
					  <div class="form-group">
					    <label for="pwd">Deadline:</label>
					    <div class='input-group date' >
                    <input type='text' name="due_date" class="form-control datepicker" id="due_date"    placeholder="Deadline"  />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
					    
					  </div>
					</div>
				
				 </div>
			</div>
	   </div>

	    <p>-------------------------------------------------------------------------------------------------------------</p>
	    <h4>Task ></h4>
	    </br></br>
	    </div>
	    <table class="table">
	    <thead>
									    <tr>
									      
									      <th>Task Type</th>
									      <th>Provider</th>
									      <th>Owner</th>
									      <th>Description</th>
									      <th>Deadline</th>
									      <th>Status</th>
									      <th>&nbsp;&nbsp;</th>
									     
									    </tr>
									</thead>
                                    <tbody class="input_fields_wrap">
                                       <tr>
									        <td>&nbsp;</td>
                                            <td>&nbsp;</td> 
                                            <td>&nbsp;</td> 
                                            <td>&nbsp;</td> 
                                            <td>&nbsp;</td> 
                                            <td>&nbsp;</td> 
                                            <td><button class="btn-primary" id="addmore" Title="Add More"  type="button"><i class="fa fa-plus-circle"></i></button></td>
									      
									    </tr>
                                    </tbody>
                                    </table>

       <div class="container" style="max-width:600px;margin:60px auto;">
        <div class="form-group">
	    
			<div class="row">
			    <div class="col-md-12">
			        
					  <div class="form-group">
					    <label for="email">Referral Description:</label>
					    <textarea name="referral_description" placeholder="Write a referral description..." class="form-control" rows="5" cols="75"></textarea>
					  </div>
					
				
				 </div>
			</div>
	   </div>                            
	   </div>                            
	    
	     <button type="submit" name="save2" value="ref-save" class="btn-primary">Save</button>
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

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog" style="width:1190px;">
<script src="https://maps.google.com/maps/api/js?key=AIzaSyBFAo6LvR1ORPgRNXliXZAWrcrpiAlZtbI" 
          type="text/javascript"></script>
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" id="closeserviceprovider"  class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Select Service Providers</h4>

      </div>
      <div class="modal-body" style="height: 450px; overflow-y:auto;"> 
      <div class="pull-right"><h3><a id="listprac" class="view-active" href="javascript:void(0)" onclick="showview('list')"><i class="fa fa-bars " aria-hidden="true"></i></a>|<a href="javascript:void(0)" class="" id="mapprac" onclick="showview('map')"><i class="fa fa-map" aria-hidden="true"></i></a></h3></div>
        	    <table class="table table-bordered">
                               
    				  <thead>
    					<tr>
    					   <th scope="col">
    						    <label>Zipcode</label>
    							<input type="text" name="zipcode" id="ptn_zipcode" class="form-control" placeholder="Zipcode" value="<?php echo $patinetZip; ?>">
    						</th>
    						<th scope="col">
                                <label>Radius</label>
    							<select class="form-control" name="radius" id="ptn_radius">
                                  <option value="">Select</option>
                                  <option value="5">5 Miles</option>
                                  <option value="10">10 Miles</option>
                                  <option value="15">15 Miles</option>
                                  <option value="20">20 Miles</option>
                                  <option value="25">25 Miles</option>
                                  <option value="30">30 Miles</option>
                               </select>
                            </th>
    						<th scope="col">
                                <label>Service Type</label>
                                <select class="form-control" name="services_type" id="ptn_servicetype">
                                <option value=''>-Select-</option>
                                <option value='Extractions'>Extractions</option>
                                <option value='Orthodontics'>Orthodontics</option>
                                <option value='Dentures'>Dentures</option>
                                </select>
    						</th>

    						<th scope="col">
                                <label>Provider Name</label>
    								<input type="text" value="" name="provider_name" class="form-control" id="ptn_provider" placeholder="Provider Name">
    						</th>
                            <th scope="col">
                                <label>&nbsp;&nbsp;</label>
                                <input name="search" type="button" class="btn-success" value="Search" onclick="getserachserviceprovider();" >

                                <input type="hidden" id="assignprovidertab" value=""/>
                            </th>				      
    					</tr>
    					</thead>
                   
				</table>
				<div class="loader" style="position: fixed;
background: rgba(255,255,255,0.8);
width: 100%;
height: 100%;
top: 0;
left: 0;
z-index: 9;">
                          <img src="<?php echo get_template_directory_uri(); ?>/images/loader-new.gif" alt="loader" style="position: fixed;top: 50%;left: 0;right: 0;margin: auto;width:170px;z-index: 9; transform: translateY(-50%); -webkit-transform: translateY(-50%); -mstransform: translateY(-50%);">
                        </div>
                <div id="providerdiv"></div>
				
        	
        

      </div>
      <div class="modal-footer">
        <button type="button" class="btn-success" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<?php get_footer(); ?>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script type="text/javascript">
    jQuery('body').on('focus',".datepicker", function(){   
        jQuery(this).datepicker({ dateFormat: "yy-mm-dd" });
    });
</script>

<script>

var ajax_url = "<?php echo '/ajax.php'; ?>";

jQuery(document).ready(function() {
    var max_fields      = 20; 
    var wrapper         = jQuery(".input_fields_wrap"); 
    //var add_button      = $("#addmore"); 
   
    var x = 0; 
    jQuery("#addmore").click(function(e){ 
        
        e.preventDefault();
        if(x < max_fields){ 
            
            var name1 = "tasks["+x+"][task_type]";
            var name2 = "tasks["+x+"][provider]";
            var name3 = "tasks["+x+"][task_owner]";
            var name4 = "tasks["+x+"][task_description]";
            var name5 = "tasks["+x+"][task_deadline]";
            var name6 = "tasks["+x+"][task_status]";
            var triid = "tr"+x;
            var provideriid = "provider-"+x;
            var option1 = 'test1';
            var option2 = "<option value='New'>New</option><option value='Pending'>Pending</option><option value='Urgent'>Urgent</option>";
            jQuery(wrapper).append("<tr id='"+triid+"' ><td><input type='ext' class='form-control' name='"+name1+"' placeholder='Task Type' required/></td><td><div class='input-group'><input type='ext' class='form-control' name='"+name2+"' placeholder='Provider' data-toggle='modal'  data-target='#myModal' id='"+provideriid+"' autocomplete='off' onclick='searchprovider(this.id)' required/><span class='input-group-addon'><span class='glyphicon glyphicon-search'></span></span></div></td><td><input type='ext' class='form-control' name='"+name3+"' placeholder='Owner' required/></td><td><input type='ext' class='form-control' name='"+name4+"' placeholder='Description' required/></td><td><div class='input-group date' ><input type='text' class='form-control datepicker ' autocomplete='off' placeholder='Deadline' name='"+name5+"'   /><span class='input-group-addon'><span class='glyphicon glyphicon-calendar'></span></span></div></td><td><select class='form-control' name='"+name6+"' >"+option2+"</select></td> <td><button class='btn-danger remove_field' onclick='removetr("+x+")' type='button' title='Remove'><i class='fa fa-minus-circle'></i></button></td></tr>"); //add input box
             x++; 
        }
    });
   
    /*$(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('tr').remove(); x--;
    })*/
});


function removetr(id){
    jQuery('#tr'+id).remove();
}

function searchprovider(iid){
	var zipcode = '<?php echo $patinetZip; ?>';
	document.getElementById("assignprovidertab").value = iid;
	getserviceprovide(zipcode);
	//alert(zipcode);
}

function getserviceprovide(zipcode){
    jQuery("#providerdiv").html('');
    document.getElementById("listprac").classList.add("view-active");
    document.getElementById("mapprac").classList.remove("view-active");
    var iid = jQuery("#assignprovidertab").val();
    jQuery.ajax({
			  url: ajax_url,
			  type:'POST',
			  cache: false,
			  data : {'zipcode':zipcode,'iid':iid,funtion:'selectserviceprovider'},
			  beforeSend: function() {
                  jQuery('.loader').show();
              },
			  success: function(html){
			  	jQuery('.loader').hide();
			    jQuery("#providerdiv").html(html);
			  }
    });
}

function getserachserviceprovider(){
	jQuery("#providerdiv").html('');
    document.getElementById("listprac").classList.add("view-active");
    document.getElementById("mapprac").classList.remove("view-active");
	var zipcode = jQuery("#ptn_zipcode").val();
	var radius = jQuery("#ptn_radius").val();
	var services_type = jQuery("#ptn_servicetype").val();
	var provider_name = jQuery("#ptn_provider").val();
	var iid = jQuery("#assignprovidertab").val();
	jQuery.ajax({
			  url: ajax_url,
			  type:'POST',
			  cache: false,
			  data : {'zipcode':zipcode,'radius':radius,'services_type':services_type,'provider_name':provider_name,'iid':iid,funtion:'selectserviceprovider'},
			  beforeSend: function() {
                  jQuery('.loader').show();
              },
			  success: function(html){
			  	jQuery('.loader').hide();
			  	//alert(html);
			  	//console.log(html);
			    jQuery("#providerdiv").html(html);
			  }
    });
}

function assignprovider(name,id){
	document.getElementById(id).value = name;
	jQuery("#closeserviceprovider").click();


}

function showview(type){
  if(type == 'map'){

     jQuery('#mapview').show();
     jQuery('#listview').hide();
     //localStorage.setItem('viewtype', type);
     document.getElementById("mapprac").classList.add("view-active");
     document.getElementById("listprac").classList.remove("view-active");
    
  }else{
     jQuery('#listview').show();
     jQuery('#mapview').hide();
     //localStorage.setItem('viewtype', type);

     document.getElementById("listprac").classList.add("view-active");
     document.getElementById("mapprac").classList.remove("view-active");
  }

  
  
}


  </script>

