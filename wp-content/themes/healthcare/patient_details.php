<?php

/**
 * Template Name: Patient_details
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

?>


<style type="text/css">
.panel-heading .accordion-toggle:after {
    /* symbol for "opening" panels */
    font-family: 'Glyphicons Halflings';  /* essential for enabling glyphicon */
    content: "\e114";    /* adjust as needed, taken from bootstrap.css */
    float: right;        /* adjust as needed */
    color: grey;
    position: relative;
    bottom: 18px;         /* adjust as needed */
}
.panel-heading .accordion-toggle.collapsed:after {
    /* symbol for "collapsed" panels */
    content: "\e080";    /* adjust as needed, taken from bootstrap.css */
}
.input-group-addon:last-child span {
    text-align: center;
    position: relative;
    right: 5px;
}
.input-group-addon:last-child {
    border-left: 0;
    position: absolute;
    top: 25px;
    text-align: center;
    padding: 9px 15px;
    right: 16px;
}

.view-active{
color: #43b02a!important;
}
</style>



<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.jqueryui.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/scroller/2.0.0/css/scroller.jqueryui.min.css">


<?php



$error = 0;
$success = 0;
if(isset($_SESSION['userdata'])){
	$email = $_SESSION['userdata']['email']; 
    $patient_id = base64_decode($_GET['pid']);
    $documents = array();

    /*--------Add Tasks--------------------------------*/
     if(!empty($_POST) && !empty($_POST['addTask'])){
	  	$postTaskData = $_POST;
        if(!empty($_FILES)){
            $documents = $_FILES['patient_document'];
        }else{
            $documents = array();
        }

	  	$saveTask = saveReferralTask($postTaskData,$patient_id,$email,$documents);
	  	if(!empty($saveTask)){
	  		if($saveTask['status'] == 'ok'){
	  			$error = 0;
	  			$success = 51; 
	  			$msg   = $saveTask['message'];   
	  		}else{
	  			$error = 52;
	  			$msg   = 'Please try again !! Something went wrong';
	  		}
	  	}
	  }

    /*--------------------------------------------------*/

    /* ------------ Add Referral --------------------- */
    if(!empty($_POST) && !empty($_POST['save2'])){
	  	$postReferralData = $_POST; 
	  	$save = savePatientReferral($postReferralData,$patient_id,$email);
	  	if(!empty($save)){
	  		if($save['status'] == 'ok'){
	  			$error = 0;
	  			$success = 45; 
	  			$msg   = $save['message'];   
	  		}else{
	  			$error = 46;
	  			$msg   = 'Please try again !! Something went wrong';
	  		}
	  	}
	  }
	/* -------------------------------------------------*/
    
    /* ------------ Update Patient Details --------------------- */
	if(!empty($_POST['submit'])){
       $dataArray = $_POST;
       $updateDeatils = updatePatientDetails($dataArray,$patient_id,$email);
       if($updateDeatils['status'] == 'ok'){
       	  $error = '0';
       	  $success = 21;
       	  $msg   = $updateDeatils['message'];
       }else{
       	  $error = 0;
       	  $success = 11;
       	  $msg   = $updateDeatils['message'];
       }
	}
	/* -------------------------------------------------*/
    
	if(!empty($_POST['vik-ref-post']) && ($_POST['vik-ref-post'] == 497)){
		 $success = 41;
		 $msg   = 'Referral Updated';
	}

    /* ------------ Referral List --------------------- */
    $referraldata = referralList($patient_id,$email);
    if(!empty($referraldata['status'] == 'ok')){
    	$referralList  = $referraldata['referral_list'];
    }
    /* -------------------------------------------------*/

    /* ------------ Communcation List --------------------- */
    $communcationdata = communicationList($patient_id,$email);
    if(!empty($communcationdata['status'] == 'ok')){
    	$commList  = $communcationdata['task_msg_data'];
    }
    /* -------------------------------------------------*/

    /*---------------Task List --------------------------*/
    if(!empty($referralList)){
        if(!empty($_POST['addTask']) && (!empty($_POST['referral_id']))){
            $referralid = $_POST['referral_id'];
        }else{
           $referralid = $referralList[0]['referral_id'];
        }
       
       $taskData = taskList($referralid,$email);
       if(!empty($taskData['status'] == 'ok')){
    	  $taskList  = $taskData['task_list'];
       }

    }
    
    /*--------------------------------------------------*/


    /* ------------ Patient Details --------------------- */
	$patientdata = patientDetails($patient_id,$email);
	if(!empty($patientdata['status'] == 'ok')){
	  	$patientsDeatils = $patientdata['patients_details'];
	  	$patinetZip  = $patientsDeatils['patient_zipcode'];
	}else{
	  	$error = 1;
	    $msg   = $patientdata['status']. ' ! '. $patientdata['message'];
	}

	/* -------------------------------------------------*/

	/* ------------ Owner List --------------------- */
    $ownerdata = ownerlist($email);
    if(!empty($ownerdata['status'] == 'ok')){
    	$ownerList  = $ownerdata['users_data'];
    	$owners = array_column($ownerList, 'name');
    	$owners = array_filter($owners);
    }
    /* -------------------------------------------------*/

    /* ------------ Task Status List --------------------- */
    $taskstatusdata = taskstatus($email);
    if(!empty($taskstatusdata['status'] == 'ok')){
    	$taskstatus  =  $taskstatusdata['status_array'];
    }
    /* -------------------------------------------------*/

    /* ------------ Documents List --------------------- */
    $documentdata = patientdocuments($email,$patient_id);
    if(!empty($documentdata['status'] == 'ok')){
    	$documentList  = $documentdata['patient_document_array'];
    }
    /* -------------------------------------------------*/
    

    /* ------------ Add Note --------------------- */
    if(!empty($_POST) && !empty($_POST['submitnotes'])){
	  	$postNotesData = $_POST; 
	  	$save = savePatientNotes($postNotesData,$patient_id,$email);
	  	if(!empty($save)){
	  		if($save['status'] == 'ok'){
	  			$error = 0;
	  			$success = 61; 
	  			$msg   = $save['message'];   
	  		}else{
	  			$success = 62;
	  			$msg   = 'Please try again !! Something went wrong';
	  		}
	  	}
	  }
	/* -------------------------------------------------*/

	/* ------------ Notes Lists --------------------- */
	    $notesdata = notesList($patient_id,$email);
	    if(!empty($notesdata['status'] == 'ok')){
	    	$notesList  = array_reverse($notesdata['notes_array']);

	    }

    /* -------------------------------------------------*/


    /* ------------ Clients Lists --------------------- */
	    $clientdata = clientsList();
	    if(!empty($clientdata['status'] == 'ok')){
	    	$clientList  = $clientdata['client_list'];
	    }

    /* -------------------------------------------------*/

    //echo "<pre>";
    //print_r($owners); die; 

	 
	
}else{
	$error = 1;
	$msg   = 'unauthorized ! you have to login';
}

//echo $error."_____"; die; 
get_header(); 
//get_template_part('cover');
?>
<!-- <div class="container-fluid space cover" style="background:linear-gradient(rgba(0, 0, 0, 0.70),rgba(0, 0, 0, 0.70) ),url() no-repeat fixed;">
	<div class="container">
		<h1 class="white">Whole Human</h1>
		<h4 class="white"><ul class="breadcrumb"><li><a href="https://dev11.resourcestack.com">Home</a></li> <li><a href="<?php echo site_url().'/patients'; ?>">Patients</a></li><li>Patients Details</li></ul></h4>
	</div>
</div> -->



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
				            <div class="post-tags"></div>
				            <div class="post_content">
							  <div class="panel-group" id="accordion">
							  <div class="panel panel-default">
							    <div class="panel-heading">
							    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
							      <h4 class="panel-title"><b>Client Details</b></h4></a>
							    </div>
    <div id="collapseOne" class="panel-collapse collapse <?php if(($success == '21') || ($success == '11')){ echo "in"; } ?>">
      <div class="panel-body">

        <?php if($success == '21'){ ?>
        <div class="row">
	    <div class="alert alert-success alert-dismissible">
	        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
            <strong><?php echo $msg; ?></strong>
        </div>
        </div>
        <?php }elseif($success == '11'){ ?>
        <div class="row">
        <div class="alert alert-danger alert-dismissible">
	        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
            <strong><?php echo $msg; ?></strong>
       </div>
        </div> 
        <?php }?>

	 <form class="form-inline" id="detailsform" method="post" action = "">
	    <div class="row">
		    <div class="col-md-12">
		        <div class="col-md-4">
				  <div class="form-group">
				    <label for="email">First Name:<span style="color: red">*</span></label>
				    <input type="text" name="first_name" class="form-control" id="first_name" placeholder="First Name" value="<?php echo $patientsDeatils['first_name']; ?>" required>
				  </div>
				</div>  
				<div class="col-md-4">
				  <div class="form-group">
				    <label for="pwd">Last Name:</label>
				    <div class='input-group' >
				    <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last Name" value="<?php echo $patientsDeatils['last_name']; ?>">
				    </div>
				  </div>
				</div>
				<div class="col-md-4">
				  <div class="form-group">
				    <label for="pwd">Date of Birth:<span style="color: red">*</span></label>
				    <div class='input-group date' >
                    <input type='text' name="date_of_birth" class="form-control datepicker" id="datepicker1"    placeholder="Date of Birth"  value="<?php echo date('Y-m-d',strtotime($patientsDeatils['date_of_birth'])); ?>" required="required"/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
				    
				  </div>
				</div>
			 </div>
		</div>
		<br/>
			<div class="row">
		    <div class="col-md-12">
		        <div class="col-md-4">
				  <div class="form-group">
				    <label for="email">Phone:<span style="color: red">*</span></label>
				    <input type="text" name="patient_phone" class="form-control" id="mobile" placeholder="Mobile" value="<?php echo $patientsDeatils['ph_number']; ?>" required="required">
				  </div>
				</div>  
				<div class="col-md-4">
				  <div class="form-group">
				    <label for="pwd">Email:<span style="color: red">*</span></label>
				    <input type="email" name="patient_email" class="form-control" id="email" placeholder="Email" value="<?php echo $patientsDeatils['patient_email']; ?>" required>
				  </div>
				</div>
				<div class="col-md-4">
				  <div class="form-group">
				    <label for="pwd">Zip:<span style="color: red">*</span></label>
				    <input type="text"  name="patient_zipcode" class="form-control" id="zip" placeholder="Zip" value="<?php echo $patientsDeatils['patient_zipcode']; ?>" required="required" maxlength="5" onkeyup="checknumber(this.id,this.value);">
				  </div>
				</div>
				
			 </div>
		</div>
		
<!-- 	<br/>	<div class="row">
		    <div class="col-md-12">
		        <div class="col-md-4">
				  <div class="form-group">
				    <label for="email">Address:</label>
				    <input type="text" name="patient_address" class="form-control" id="address" placeholder="Address" value="<?php echo $patientsDeatils['patient_address']; ?>">
				  </div>
				</div>  
				<div class="col-md-4">
				  <div class="form-group">
				    <label for="pwd">City:</label>
				    <input type="text" class="form-control" id="city" placeholder="City" value="<?php echo ""; ?>">
				  </div>
				</div>
				<div class="col-md-4">
				  <div class="form-group">
				    <label for="pwd">Office:</label>
				    <input type="text" class="form-control" id="office" placeholder="Office" value="">
				  </div>
				</div>
			 </div>
		</div> -->
		<br/>
		<div class="row">
		    <div class="col-md-12">
		        <div class="col-md-4">
				  <div class="form-group">
				    <label for="email">Insurance:</label>
				    <input type="text" name="healthcare_coverage" class="form-control" id="insurance" placeholder="Insurance" 
				    value="<?php echo $patientsDeatils['healthcare_coverage']; ?>">
				  </div>
				</div>  
				<div class="col-md-4">
				  <div class="form-group">
				    <label for="pwd">Policy Id:</label>
				    <input type="text" name="patient_coverage_id" class="form-control" id="policyid" placeholder="Policy Id" value="<?php echo $patientsDeatils['patient_coverage_id']; ?>">
				  </div>
				</div>
				<!-- <div class="col-md-4">
				  <div class="form-group">
				    <label for="pwd">Group:</label>
				    <input type="text" class="form-control" id="pwd">
				  </div>
				</div> -->


			 </div>
		</div>
		<br/>
		<!-- <div class="row">
		    <div class="col-md-12">
		        <div class="col-md-4">
				  <div class="form-group">
				    <label for="email">Allergies:</label>
				    <input type="text" class="form-control" id="allergies" placeholder="Allergies" value="<?php echo ""; ?>">
				  </div>
				</div>  
				<div class="col-md-4">
				  <div class="form-group">
				    <label for="pwd">Complications:</label>
				    <input type="text" class="form-control" id="complications" placeholder="Complications" value="<?php echo ""; ?>" >
				  </div>
				</div>
				<div class="col-md-4">
				  <div class="form-group">
				    <label for="pwd">Age:</label>
				    <input type="number"  class="form-control" id="age" min="0" placeholder="Age" value="<?php echo $patientsDeatils['age']; ?>">
				  </div>
				</div>
			 </div>
		</div>
		<br/> -->
		<div class="row">
		    <div class="col-md-12">
		        <div class="col-md-4">
				  <div class="form-group">
				    <label for="email">Perfered Contact:</label>
<label class="radio-inline"><input type="radio" name="mode_of_contact"  value="call" <?php if(isset($patientsDeatils['mode_of_contact']) && ($patientsDeatils['mode_of_contact'] == 'call')) { echo "checked"; } ?>>Call</label>
<label class="radio-inline"><input type="radio" name="mode_of_contact" value="text" <?php if(isset($patientsDeatils['mode_of_contact']) && ($patientsDeatils['mode_of_contact'] == 'text')) { echo "checked"; } ?>>Text</label>
<label class="radio-inline"><input type="radio" name="mode_of_contact" value="email" <?php if(isset($patientsDeatils['mode_of_contact']) && ($patientsDeatils['mode_of_contact'] == 'email')) { echo "checked"; } ?>>Email</label>
				  </div>
				</div>  
				
				
			 </div>
		</div>        
	   <input name="submit" type="submit" class="btn-primary" value="Update" > 
	  
	</form>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><h4 class="panel-title"><b>Referrals</b></h4></a></div>
    <div id="collapseTwo" class="panel-collapse collapse <?php if((($success == '41' || $success == '51') || ($success == '45' || $success == '46'))){ echo "in"; } ?>"">
      <div class="panel-body">
        <?php if($success == '41' || $success == '45' || $success == '51'){ ?>
        <div class="row">
	    <div class="alert alert-success alert-dismissible">
	        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
            <strong><?php echo $msg; ?></strong>
        </div>
        </div>
        <?php } ?>
        <?php if($success == '46'){ ?>
        <div class="row">
	    <div class="alert alert-danger alert-dismissible">
	        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
            <strong><?php echo $msg; ?></strong>
        </div>
        </div>
        <?php } ?>
        <table class="table table-striped table-bordered" id="example-116">
                            <thead>
                                <tr>
                                    <th>&nbsp;&nbsp;</th>
                                    <th>Due Date</th>
                                    <th>Referral Name</th>
                                    <th>Referral Description</th>
                                    <th>Source</th>
                                    <th>Urgency</th>
                                    <th>Task Count</th>
                                    <th>Status</th>
                                    <th>Follow Up Date</th>
                                    <th>AGREEMENT </th>
                                <th class="tabledit-toolbar-column"></th></tr>
                            </thead>
                            <tbody id="refbody">
                                <?php
                                if(!empty($referralList)){
                                	$r = 1;
                                	foreach ($referralList as $refkey => $refvalue) { ?>
                                     
                                	<tr>
	                                	<td ><input type="radio" class="viewcheck" name="viewtask" id="<?php echo $refvalue['referral_id']; ?>" value="<?php echo $refvalue['referral_id']; ?>" <?php 
                                           if(!empty($_POST['addTask']) && (!empty($_POST['referral_id']) && $refvalue['referral_id'] == $_POST['referral_id'] )){
                                               echo "checked";
                                           }
	                                	   else if(!empty($taskList) && ($refvalue['referral_id'] == $referralList['0']['referral_id'])){  echo "checked"; } ?> ></td>
	                                	<td id="duedate-<?php echo $refvalue['referral_id'];?>"><?php echo date('d-m-Y',strtotime($refvalue['due_date'])); ?></td>
	                                	<td id="refname-<?php echo $refvalue['referral_id'];?>"><?php echo $refvalue['referral_name']; ?></td>
	                                	<td id="refdesc-<?php echo $refvalue['referral_id'];?>"><?php echo $refvalue['referral_description']; ?></td>
	                                	<td id="source-<?php echo $refvalue['referral_id'];?>"><?php echo $refvalue['source']; ?></td>
	                                	<td id="urgency-<?php echo $refvalue['referral_id'];?>"><?php echo $refvalue['urgency']; ?></td>
	                                	<td><?php echo $refvalue['task_count']; ?></td>
	                                	<td><?php echo $refvalue['status']; ?></td>
	                                	<td><?php echo $refvalue['follow_up_date']; ?></td>
	                                	<td><?php echo $refvalue['agreement_notification_flag']; ?></td>
	                                	<td><button class="btn-primary" data-toggle="modal"  data-target="#myModal" onclick="showReferral('<?php echo $refvalue['referral_id']; ?>')"><i class="fa fa-pencil" aria-hidden="true"></i></button></td>
                                    </tr>
	                                <?php $r++; } }else{ ?>

	                                <tr>
	                                	<td colspan="8" style="color: red"><center><p>No Referral Added</p></center></td>
	                                </tr>

	                                <?php } ?>
                                
                                
                            </tbody>
                        </table>
            <a href="<?php echo site_url().'/patients/patient-details/create-referral?pid='.base64_encode(base64_decode($_GET['pid']));?>" >+ Add Referral</a>            

    <h4>Tasks</h4> 
    
     <table class="table table-striped table-bordered" id="example612Q">
                            <thead>
                                <tr>
                                    <th>Task Type</th>
                                    <th>Provider</th>
                                    <th>Owner</th>
                                    <th>Description</th>
                                    <th>Deadline</th>
                                    <th>Task Status</th>
                                    <th colspan="3">Action</th>
                                  
                            </thead>
                            <tbody id="taskbody">
                            <input type="hidden" id="taskrefiid" value="<?php echo $referralList['0']['referral_id']; ?>">
                                <?php if(!empty($taskList)){ 
                                	  foreach ($taskList as $taskkey => $taskvalue) { ?>		
                                <tr>
                                   <td id="reftasktype-<?php echo $taskvalue['task_id']; ?>"><?php echo $taskvalue['task_type'];?></td>
                                   <td id="reftaskprovider-<?php echo $taskvalue['task_id']; ?>"><?php echo $taskvalue['provider'];?></td>
                                   <td id="reftaskowner-<?php echo $taskvalue['task_id']; ?>"><?php echo $taskvalue['task_owner'];?></td>
                                   <td id="reftaskdesc-<?php echo $taskvalue['task_id']; ?>"><?php echo $taskvalue['task_description'];?></td>
                                   <td id="reftasktdeadline-<?php echo $taskvalue['task_id']; ?>"><?php echo date('Y-m-d',strtotime($taskvalue['task_deadline']));?></td>
                                   <td id="reftaskstatus-<?php echo $taskvalue['task_id']; ?>"><?php echo $taskvalue['task_status'];?></td>
                                   <td><button class="btn-primary" data-toggle="modal"  data-target="#myTaskModal" onclick="getPatientRefTask('<?php echo $taskvalue['task_id']; ?>')"  ><i class="fa fa-pencil" title="Edit" aria-hidden="true"></i></button></td>
                                   <td><button class="btn-primary" data-toggle="modal"  data-target="#myTransferModal" onclick="getTransferTaskdetails('<?php echo $taskvalue['task_id']; ?>')"  >Transfer</button></td>
                                   
                                   
                                </tr>
                                <?php } }else { ?>
                                <tr>
	                                <td colspan="7" style="color: red"><center><p>No Task Added</p></center></td>
	                            </tr>

	                            <?php } ?>
                                
                            </tbody>
                        </table> 

        <a href="javascript:void(0)" data-toggle="modal" onclick="getReferralId()" data-target="#myAddTaskModal" >+ Add Task</a> 
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><h4 class="panel-title"><b>Notes</b></h4></a></div>  
    <div id="collapseThree" class="panel-collapse collapse <?php if(($success == '61') || ($success == '62')){ echo "in"; } ?>">
        <div class="panel-body">
        <?php if($success == '61'){ ?>
        <div class="row">
	    <div class="alert alert-success alert-dismissible">
	        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
            <strong><?php echo $msg; ?></strong>
        </div>
        </div>
        <?php } ?>
        <?php if($success == '62'){ ?>
        <div class="row">
	    <div class="alert alert-danger alert-dismissible">
	        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
            <strong><?php echo $msg; ?></strong>
        </div>
        </div>
        <?php } ?>
        <?php if(!empty($notesList)){
      	foreach ($notesList as $noteskey => $notesvalue) {  ?>
	      <div class="main">
	        <div class="message-section" style=" background: #f3f1f1; padding: 10px 15px;font-size: 16px; border: 1px solid #ddd; border-radius: 3px;">
	            <p style=" font-size: 16px; "><?php echo $notesvalue['text']; ?></p>
	            <small><?php echo $notesvalue['time']; ?></small>
	        </div>
	      </div>
	      </br>
        <?php } }?>

        <form method="POST">
        	<div class="row">
        		  <div class="col-md-12">
                   <textarea name="notestext" class="form-control" rows="7"  placeholder="write a note"></textarea>
        		  </div>
        		</div>
        		<br/>

        		<input name="submitnotes" type="submit" class="btn-primary" value="Create" >	
        </form>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><h4 class="panel-title"><b>Communication</b></h4></a></div>
    <div id="collapseFour" class="panel-collapse collapse">
      <div class="panel-body">
        <table class="table table-striped">
									<thead>
									    <tr>
									      <th scope="col">Task</th>
									      <th scope="col">Provider</th>
									      <th scope="col">&nbsp;&nbsp;</th>
									      <th scope="col">&nbsp;&nbsp;</th>
									     
									    </tr>
									</thead>
                                    <tbody id="commlistbody">
                                    <?php if(!empty($commList)){
                                    	foreach ($commList as $commkey => $commvalue) { ?>
                                       <tr>
									      <td><?php echo $commvalue['task_type'];?></td>
									      <td><?php echo $commvalue['provider'];?></td>
									      <td><i class="fa fa-envelope" aria-hidden="true"></i><?php echo $commvalue['msg_count'];?></td>
									      <td><button class="btn-primary" data-toggle="modal"  data-target="#myCommMsgModal" onclick="getcommicationmessage('<?php echo $commvalue['task_id']; ?>')"  ><i class="fa fa-angle-double-right" aria-hidden="true"></i></button></td>  
									    </tr>

									    <?php } }else{ ?>
									    <tr>
	                                <td colspan="4" style="color: red"><center><p>No Msg Added</p></center></td>
	                            </tr>

	                            <?php } ?>
                                    </tbody>
                                    </table>
      </div>
    </div>
  </div>
    <div class="panel panel-default">
    <div class="panel-heading">
    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFive"><h4 class="panel-title"><b>Files</b></h4></a></div>
    <div id="collapseFive" class="panel-collapse collapse">
      <div class="panel-body">
        <table class="table table-striped">
									<thead>
									    <tr>
									      <th scope="col">Name</th>
									      <th scope="col">Date Added</th>
									      <th scope="col">Size</th>
									      <th scope="col">Source</th>
									      <th scope="col">Download</th>
									     
									    </tr>
									</thead>
                                    <tbody id="commlistbody">
                                    <?php 
                                    //$files = range(0,5);
                                    if(!empty($documentList)){
                                    	foreach ($documentList as $fileskey => $filesvalue) { 
                                    	$filepath = $filesvalue['file_path'];	?>
                                       <tr>
									      <td><i class="fa fa-file-pdf-o" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $filesvalue['file_name'];?></td>
									      <td><?php echo $filesvalue['task_date'];?></td>
									      <td><?php echo $filesvalue['file_size']." KB";?></td>
									      <td>Task ID : <a href="javascript:void(0)"><?php echo $filesvalue['task_id'];?></a></td>
									      <td><a href="/download.php?path=<?php echo $filesvalue['file_path']; ?>"><button class="btn-primary" ><i class="fa fa-download" aria-hidden="true"></i></button></a></td>  
									    </tr>

									    <?php } }else{ ?>
									    <tr>
	                                <td colspan="4" style="color: red"><center><p>No files added</p></center></td>
	                            </tr>

	                            <?php } ?>
                                    </tbody>
                                    </table>
      </div>
    </div>
  </div>
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
	</div>
	<?php //get_sidebar(); ?>
	</div>
</div>

<div style="display: none">
  <form method="post" id="vikkkref">
  	<input type="text" name="vik-ref-post" value="497" />
  </form>
</div>


<div id="myCommMsgModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" id="replymodboxclose" onclick="closereplybox()" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Communication Msg</h4>
      </div>
      <div class="modal-body">
        <form id="commmsgfrom">

               <div class="row">
        		  <div class="col-md-12">
        		   <label>New Message</label>
                   <textarea name="msg" id="communication_msg" class="form-control" rows="3"  placeholder="Type Something here..."></textarea>
        		  </div>
        		</div>

        		<br/>
                <input type="hidden" class="form-control" placeholder="source" name="msg_task_id" id="msg_task_id" value=""/>
                <div class="pull-right">
        		<input name="ref-update"  type="button" onclick="sendmessage()" class="btn-primary" value="Send" > </div>
        	    <label>Message</label>
        	    <div class="container" id="commmsgdiv">
        		    <div class="main"></div>
        		</div>
        		<br/>
        	
        	    
        		
        	
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button"  class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Referral</h4>
      </div>
      <div class="modal-body">
        <form id="referralform">
        	    
        	    <div class="row">
        		  <div class="col-md-6">
        		   <label>Due Date</label>
        		   <div  >
                    <input type="text" class="form-control datepicker" placeholder="Due Date" name="due_date" id="ref_due_date"  />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
                   
        		  </div>
        		  <div class="col-md-6">
        		   <label>Referral Name</label>
                   <input type="text" class="form-control" placeholder="Referral Name" name="ref_name" id="ref_name" value=""/>
        		  </div>
        		</div>
        		<br/>
        		<div class="row">
        		  <div class="col-md-6">
        		   <label>Source</label>
                   <select name="ref_source" id="ref_source" class="form-control">
                   <option value="EHR">EHR</option>>
                   <option value="EDR">EDR</option>>
                   <option value="ExtCC">ExtCC</option>>
                   <option value="Internal">Internal</option>>
                   <option value="Self">Self</option>>
                   </select>

        		  </div>
        		  <div class="col-md-6">
        		   <label>Urgency</label>
                   <select name="urgency" id="ref_urgency" class="form-control">
                   <option value="Critical">Critical</option>>
                   <option value="High">High</option>>
                   
                   <option value="Moderate">Moderate</option>>
                   <option value="Low">Low</option>>
                   </select>
        		  </div>
        		</div>
        		<br/>
        	    <div class="row">
        		  <div class="col-md-12">
        		   <label>Description</label>
                   <textarea name="description" id="ref_desc" class="form-control" rows="7"  placeholder="Description..."></textarea>
        		  </div>
        		</div>
        		<br/>
                <input type="hidden" class="form-control" placeholder="source" name="ref_id" id="ref_id" value=""/>
        		<input name="ref-update" onclick="updatereferal()" type="button" class="btn-primary" value="Update" > 
        	
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- myTaskModal-->
<div id="myTaskModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" id="edittaskclose" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Task</h4>
      </div>
      <div class="modal-body">
        <form id="referraltaskform" enctype="multipart/form-data">
        	    
        	    <div class="row">
        		  <div class="col-md-6">
        		   <label>Deadline</label>
        		   <div >
                    <input type="text" class="form-control datepicker" placeholder="Deadline" name="task_deadline" id="edit_task_deadline"  />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
                   
        		  </div>
        		  <div class="col-md-6">
        		   <label>Task Type</label>
                   <select class="form-control" name="task_type"  id="edit_task_type">
                    <option value="">-Select-</option>    
                    <option value="Appointment">Appointment</option>    
                    <option value="Support">Support</option>    
                    <option value="User Defined">User Defined</option>    
                    <option value="Delegated Referral">Delegated Referral</option>    
                  </select>
        		  </div>
        		</div>
        		<br/>
        		<div class="row">
        		  <div class="col-md-6">
        		   <label>Provider</label>
                   <input type="text" class="form-control" placeholder="Provider" name="task_provider" id="edit_task_provider" data-toggle='modal'  data-target='#myProviderModal' onclick="searchprovider(this.id)" value=""/>
                   <span class="input-group-addon">
                        <span class="glyphicon glyphicon-search"></span>
                    </span>

        		  </div>
        		  <div class="col-md-6">
        		   <label>Owner</label>
                   <select class="form-control" name="task_owner" id="edit_task_owner">
                   <?php if(!empty($owners)){
                   	     foreach ($owners as $ownerkey => $ownervalue) { ?>
                         <option value="<?php  echo ucfirst($ownervalue); ?>"><?php echo ucfirst($ownervalue); ?></option>
                   	<?php }  }else{ ?> 
                   	<option value="">-Select-</option>   	
                    <?php } ?>
                       
                   </select>
        		  </div>
        		</div>
        		<br/>
        		<div class="row">
        		  <div class="col-md-6">
        		   <label>Status</label>
                   <select name="task_status" class="form-control" id="edit_task_status">
                   <option value="">-Select-</option>
                      <?php if(!empty($taskstatus)){
                   	     foreach ($taskstatus as $taskstatuskey => $taskstatusvalue) { ?>
                         <option value="<?php  echo ucfirst($taskstatusvalue); ?>"><?php echo ucfirst($taskstatusvalue); ?></option>
                   	<?php }  }else{ ?> 
                    <?php } ?>
                   </select>

        		  </div>
        		   <div class="col-md-6">
        		   <label>Document</label>
                   <input type="file" class="form-control"  name="edit_patient_document" id="edit_patient_document" />
        		  </div> 
        		</div>
        		<br/>

        	    <div class="row">
        		  <div class="col-md-12">
        		   <label>Description</label>
                   <textarea name="task_description" id="edit_task_desc" class="form-control" rows="7"  placeholder="Description..."></textarea>
        		  </div>
        		</div>
        		<br/>
                <input type="hidden" class="form-control" placeholder="source" name="task_id" id="edit_task_id" value=""/>
        		<input name="ref-update" onclick="updatereftaskdetails()"  type="button" class="btn-primary" value="Update" > 
        	
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



<!-- myTaskModal-->
<div id="myTransferModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" id="edittaskclose" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tranfer Task</h4>
      </div>
      <div class="modal-body">
        <table class="table table-striped table-bordered" id="example">
                            <thead>
                                <tr>
                                    <th>APPLICATION NAME</th>
                                    <th>SPECIALTY</th>
                                    <th>AGREEMENT TYPE</th>
                                    <th>AGREEMENT SIGNED</th>
                                    <th>TRANSFER</th>
                                </tr>       
                            </thead>
                            <tbody id="taskbody">
                            <input type="hidden" id="transfer_task_id" value="">
                            <?php
                              if(!empty($clientList)){
                            	foreach ($clientList as $clientkey => $clientvalue) {
                            ?>	
                            <tr>
                                <td><?php echo $clientvalue['name']; ?></td>
                                <td><?php echo $clientvalue['speciality']; ?></td>
                                <td><?php echo $clientvalue['agreement_type']; ?></td>
                                <td><?php echo $clientvalue['agreement_signed']; ?></td>
                                <td><a href="javascript:void(0)" id="<?php echo $clientvalue['name']; ?>" data-title="<?php echo $clientvalue['id']; ?>" onclick="transferclient(this.id,this.value)">Send</a></td>
                            </tr> 
                            <?php } } ?>   
                            </tbody>
                            
        </table>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<!-- myTaskModal-->
<div id="myLedgerModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" id="edittaskclose" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Ledger Status Table</h4>
      </div>
      <div class="modal-body">
        <table class="table table-striped table-bordered" id="example612Q">
                            <thead>
                                <tr>
                                    <th>DESCRIPTION</th>
                                    <th>STATUS</th>
                                    <th>&nbsp;&nbsp;</th>
                                </tr> 
                                  
                            </thead>
                            <tbody id="taskbody">
                            <input type="hidden" id="transfer_task_id" value="">
                            
                            <tr>
                                <td>Toney's second task</td>
                                <td>Pending </td>
                                <td><a href="javascript:void(0)">Accept Reffral </a></td>
                            </tr> 
                            <tr>
                                <td>Toney's second 3</td>
                                <td>Pending </td>
                                <td><a href="javascript:void(0)">Accept Reffral </a></td>
                            </tr> 
                            <tr>
                                <td>New Task for Bruce</td>
                                <td>Accepted </td>
                                <td>Accepted</td>
                            </tr> 
                            
                            </tbody>
                            
        </table>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<div id="myDocumentModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" id="editdocumentclose" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Document</h4>
      </div>
      <div class="modal-body">
 

      </div>
      <div class="modal-footer">
        <button type="button" class="btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<div id="myAddTaskModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Task</h4>

      </div>
      <div class="modal-body">
        <form id="referralform" method="post" action="" enctype="multipart/form-data">
        	    
        	    <div class="row">
        		  <div class="col-md-6">
        		   <label>Deadline</label>
        		   <div>
                    <input type="text" class="form-control datepicker " placeholder="Deadline" name="task_deadline" id="task_deadline"  />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
                   
        		  </div>
        		  <div class="col-md-6">
        		   <label>Task Type</label>
                   
                   <select class="form-control" name="task_type" id="task_type">
                    <option value="">-Select-</option>    
                    <option value="Appointment">Appointment</option>    
                    <option value="Support">Support</option>    
                    <option value="User Defined">User Defined</option>    
                    <option value="Delegated Referral">Delegated Referral</option>    
                  </select>
        		  </div>
        		</div>
        		<br/>
        		<div class="row">
        		  <div class="col-md-6">
        		   <label>Provider</label>
                   <input type="text" class="form-control" placeholder="Provider" name="provider" id="task_provider" data-toggle='modal'  data-target='#myProviderModal' onclick="searchprovider(this.id)" value=""/>
                   <span class="input-group-addon">
                        <span class="glyphicon glyphicon-search"></span>
                    </span>

        		  </div>
        		  <div class="col-md-6">
        		   <label>Owner</label>
                   <select class="form-control" placeholder="Owner" name="task_owner" id="task_owner">
                   <?php if(!empty($owners)){
                   	     foreach ($owners as $ownerkey => $ownervalue) { ?>
                         <option value="<?php  echo ucfirst($ownervalue); ?>"><?php echo ucfirst($ownervalue); ?></option>
                   	<?php }  }else{ ?> 
                   	<option value="">-Select-</option>   	
                    <?php } ?>
                       
                   </select>
        		  </div>
        		</div>
        		<br/>
        		<div class="row">
        		  <div class="col-md-6">
        		   <label>Status</label>
                   <select name="task_status" class="form-control" id="task_status">
                        <option value="">-Select-</option>
                        <?php if(!empty($taskstatus)){
                   	     foreach ($taskstatus as $taskstatuskey => $taskstatusvalue) { ?>
                         <option value="<?php  echo ucfirst($taskstatusvalue); ?>"><?php echo ucfirst($taskstatusvalue); ?></option>
                   	<?php }  }else{ ?> 
                   	<option value="">-Select-</option>  	
                    <?php } ?>
                   </select>

        		  </div>
        		  <div class="col-md-6">
        		   <label>Document</label>
                   <input type="file" class="form-control"  name="patient_document" id="patient_document" />
        		  </div> 
        		</div>
        		<br/>

        	    <div class="row">
        		  <div class="col-md-12">
        		   <label>Description</label>
                   <textarea name="task_description" id="task_description" name="task_description" class="form-control" rows="7"  placeholder="Description..."></textarea>
        		  </div>
        		</div>
        		<br/>
                <input type="hidden" class="form-control" placeholder="source" name="referral_id" id="referral_id" value=""/>
        		<input name="addTask"  type="submit" class="btn-primary" value="Save" > 
        	
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



<div id="myProviderModal" class="modal fade" role="dialog">
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
    




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.jqueryui.min.js"></script>
<script src="https://cdn.datatables.net/scroller/2.0.0/js/dataTables.scroller.min.js"></script> 
<script>
/*jQuery(document).ready(function(){
        function updatePatientData(){
        	alert('hi');
         var formdata = jQuery('#detailsform').serialize() ;
         var action  = 'updatePatientDetails';
         var actionurl = "<?php echo site_url().'api.php'; ?>";
         e.preventDefault();
          jQuery.ajax({
            type: 'post',
            url: actionurl,
            data: {postdata:formdata,funtion:action}j,
            success: function () {
              alert('form was submitted');
            }
          });
        }
});*/
        
    </script>

    <script type="text/javascript">
 
    jQuery(function () {
                jQuery( ".datepicker" ).datepicker({ dateFormat: "yy-mm-dd" });
               // jQuery( "#edit_task_deadline" ).datepicker({ dateFormat: "yy-mm-dd" });
               
            });

    
    /*jQuery('.datepicker').each(function(){    jQuery(this).datepicker({ dateFormat: "yy-mm-dd" });});*/
</script>
    <script type="text/javascript">
           


        /*    jQuery(document).ready(function() {
        window.history.pushState(null, "", window.location.href);        
        window.onpopstate = function() {
            window.history.pushState(null, "", window.location.href);
        };
    });*/
     var loadurl = "<?php echo site_url().'/patients/';?>";
    history.pushState(null, null, '<?php echo $_SERVER["REQUEST_URI"]; ?>');
window.addEventListener('popstate', function(event) {
    window.location.assign(loadurl);
});
    </script>


<script type="text/javascript">
	
	$(document).ready(function() {
    $('#example').DataTable( {
        deferRender:    true,
        scrollY:        200,
        scrollCollapse: true,
        scroller:       true
    } );
} );
</script>
<script type="text/javascript">
var ajax_url = "<?php echo '/ajax.php'; ?>";
var upload_ajax_url = "<?php echo '/upload_ajax_url.php'; ?>";

function closereplybox(){
	jQuery("#communication_msg").val('');
	jQuery("#commmsgdiv").html('');
}
function sendmessage(){
	var action = 'sendmeassagetosender';
	var comm_message = document.getElementById("communication_msg").value;
	var comm_task_id = document.getElementById("msg_task_id").value;
	var recipient_id = "<?php echo base64_decode($_GET['pid']); ?>";
	var recipient_type = 'text';
	var comm_subject  = '';
	jQuery.ajax({
            type: 'post',
            url: ajax_url,
            data: {task_id:comm_task_id,recipient_id:recipient_id,recipient_type:recipient_type,comm_subject:comm_subject,comm_message:comm_message,funtion:action},
            success: function (res) {
            	var trimStr  = $.trim(res);
            	if(trimStr == '11'){
            		jQuery("#communication_msg").val('');

            		//alert('message send successfully');
            		getcommicationmessage(comm_task_id);
            		getcommicationlist(recipient_id);

            	}else{
            		alert('Error ! Please try again ');
            	}
              
            }
          });
}

function getReferralTask(iid){
	    //var iid = jQuery(this).attr('id');
        var email = "<?php echo $email; ?>";
        if(iid){
        	jQuery.ajax({
				  url: ajax_url,
				  type:'POST',
				  cache: false,
				  data : {'referral_id':iid,'email':email,funtion:'referraltasks'},
				  success: function(html){
				  	//alert(html);
				  	//console.log(html);
				    jQuery("#taskbody").html(html);
				    jQuery("#taskrefiid").val(iid);
				  }
            });
        }else{
        	alert('not iid');
        }
}

function updatereftaskdetails(){
	    //e.preventDefault();
		var action  = 'updatePatientReferralTask';
		var task_id  = document.getElementById("edit_task_id").value;
		var task_type  = document.getElementById("edit_task_type").value;
		var task_description  = document.getElementById("edit_task_desc").value;
		var task_status  = document.getElementById("edit_task_status").value;
		var task_provider  = document.getElementById("edit_task_provider").value;
		var task_owner  = document.getElementById("edit_task_owner").value;
		var task_deadline  = document.getElementById("edit_task_deadline").value;
		var referralid  = document.getElementById("taskrefiid").value;
		//alert(referralid);
        //var fileupload = document.getElementById("edit_patient_document");
		//var formdata = jQuery('#referraltaskform').serialize();
		var formdata = new FormData(document.getElementById("referraltaskform"));
		//var fileupload = $("#edit_patient_document");
		//alert(formdata);
		jQuery.ajax({
            type: 'post',
            url: upload_ajax_url,
            processData: false, // important
            contentType: false,
            data: formdata,
            success: function (res) {
            	//alert(res);
            	//exit;
            	//console.log(res);exit;
            	var trimStr = jQuery.trim(res);
            	if(trimStr == '11'){
            		alert('Task Updated');
            		getReferralTask(referralid);
            		jQuery('#edittaskclose').click();
            		
            	}else{
            		alert('Error ! Please try again ');
            	}
              
            }
          });

}

function updatereferal(){
	var formdata = jQuery('#referralform').serialize() ;
         var action  = 'updatePatientReferrals';
         var ref_id  = document.getElementById("ref_id").value;
         var ref_name  = document.getElementById("ref_name").value;
         var ref_due_date  = document.getElementById("ref_due_date").value;
         var ref_urgency  = document.getElementById("ref_urgency").value;
         var ref_source  = document.getElementById("ref_source").value;
         var ref_desc  = document.getElementById("ref_desc").value;
          jQuery.ajax({
            type: 'post',
            url: ajax_url,
            data: {ref_id:ref_id,ref_name:ref_name,ref_due_date:ref_due_date,ref_urgency:ref_urgency,ref_source:ref_source,ref_desc:ref_desc,funtion:action},
            success: function (res) {
            	var trimStr = $.trim(res);
            	//alert(trimStr);
            	if(trimStr == '11'){
            		//getRefList();
            		//var currentLocation = window.location;
            		//alert(currentLocation);
            		//alert('Referral Updated');
            		//jQuery('#myModal').modal('hide');
            		//patireflist();
            		jQuery("#vikkkref").submit();
            		//window.location = currentLocation+'&ref=update';
            	}else{
            		alert('Error ! Please try again ');
            	}
              
            }
          });
}

function patireflist(){
       $("#vikkkref").submit();      
}

function getcommicationmessage(taskid) {
	document.getElementById("msg_task_id").value = taskid;
	//alert(taskid);
	var email = "<?php echo $email; ?>";
	var patient_id = "<?php echo base64_decode($_GET['pid']); ?>";
	jQuery.ajax({
			  url: ajax_url,
			  type:'POST',
			  cache: false,
			  data : {'patient_id':patient_id,'task_id':taskid,'email':email,funtion:'CommunicationMsgList'},
			  success: function(html){
			  	//alert(html);
			  	//console.log(html);
			    jQuery("#commmsgdiv").html(html);
			  }
    });
}

function getcommicationlist(patient_id) {
	//document.getElementById("msg_task_id").value = taskid;
	//alert(taskid);
	var email = "<?php echo $email; ?>";
	//var patient_id = "<?php echo base64_decode($_GET['pid']); ?>";
	jQuery.ajax({
			  url: ajax_url,
			  type:'POST',
			  cache: false,
			  data : {'patient_id':patient_id,'email':email,funtion:'ptnCommunicationList'},
			  success: function(html){
			  	//alert(html);
			  	//console.log(html);
			    jQuery("#commlistbody").html(html);
			  }
    });
}


	
    

function getRefList(){
	var patient_id = "<?php echo base64_decode($_GET['pid']); ?>";
	var email = "<?php echo $email; ?>";
        
    jQuery.ajax({
			  url: ajax_url,
			  type:'POST',
			  cache: false,
			  data : {'patient_id':patient_id,'email':email,funtion:'patientsreferralList'},
			  success: function(html){
			  	//alert(html);
			  	//console.log(html);
			    jQuery("#refbody").html(html);
			  }
    });
        
}

function showReferral(refid){
    //alert('duedate-'+refid);
	
	document.getElementById("ref_id").value = refid;
	document.getElementById("ref_name").value = document.getElementById ( 'refname-'+refid ).textContent;
	document.getElementById("ref_due_date").value = document.getElementById ( 'duedate-'+refid ).textContent;

	document.getElementById("ref_urgency").value = document.getElementById ( 'urgency-'+refid ).textContent;
	document.getElementById("ref_source").value = document.getElementById ( 'source-'+refid ).textContent;

	document.getElementById("ref_desc").value = document.getElementById ( 'refdesc-'+refid ).textContent;

}

function getPatientDocuments(filepath){
	//alert(filepath);
}

function getTransferTaskdetails(taskid) {
	document.getElementById("transfer_task_id").value = taskid;
}


function getPatientRefTask(taskid){
	document.getElementById("edit_task_id").value = taskid;
   document.getElementById("edit_task_type").value = document.getElementById ( 'reftasktype-'+taskid ).textContent;
   document.getElementById("edit_task_provider").value = document.getElementById( 'reftaskprovider-'+taskid ).textContent;
   document.getElementById("edit_task_owner").value = document.getElementById( 'reftaskowner-'+taskid ).textContent;
   document.getElementById("edit_task_desc").value = document.getElementById( 'reftaskdesc-'+taskid ).textContent;
   document.getElementById("edit_task_deadline").value = document.getElementById( 'reftasktdeadline-'+taskid ).textContent;
   document.getElementById("edit_task_status").value = document.getElementById( 'reftaskstatus-'+taskid ).textContent;
}

function getReferralId(){
	var radioValue = jQuery("input[name='viewtask']:checked").val();
    if(radioValue){
                document.getElementById("referral_id").value = radioValue;
    }else{
    	alert('Please select any referral to add task');
    	jQuery('#myAddTaskModal').modal('hide');
    	
    }
}


jQuery(".viewcheck").change(function() {
    if(this.checked) {
        var iid = jQuery(this).attr('id');
        var email = "<?php echo $email; ?>";
        if(iid){
        	jQuery.ajax({
				  url: ajax_url,
				  type:'POST',
				  cache: false,
				  data : {'referral_id':iid,'email':email,funtion:'referraltasks'},
				  success: function(html){
				  	//alert(html);
				  	//console.log(html);
				    jQuery("#taskbody").html(html);
				    jQuery("#taskrefiid").val(iid);
				  }
            });
        }else{
        	alert('not iid');
        }
    }
});
	

jQuery('.show-form').on('click', function (event){
    event.preventDefault();
    var elem = jQuery(this); //writing $(this) every time is bad
    var target = jQuery('div[data-target="'+elem.attr("data-target")+'"]');

    if(elem.hasClass('active')){ 
        //remove from this
        elem.removeClass("active");
        //close box    
        target.slideUp("slow");
    } else { //toggle menu when clicking on some other link
        //remove from everywhere
        jQuery('.show-form').removeClass('active');
        //slide every box up
        jQuery('.collapse').slideUp("slow");
        //add to this only
        elem.addClass('active'); 
        //slide associated box down
        target.slideDown("slow");
    }
});

//editable: [[1, 'username'], [2, 'email'], [3, 'avatar', '{"1": "Black Widow", "2": "Captain America", "3": "Iron Man"}'],[4,'Urgency'],[5,'task_count']]

function transferclient(clientname) {
	var clientid = $('#'+clientname).data('title');
	var transfertaskid = $('#transfer_task_id').val();
	if(confirm("Are you sure you want to transfer Task ID to Application Name "+clientname+" ?")){
		//alert('api is not working');
        referralsend(transfertaskid,clientid);
    }
    else{
        return false;
    }
	
}

function referralsend(transfertaskid,clientid){
	if((transfertaskid != '') &&  (clientid != '')){
		var email = "<?php echo $email; ?>";
		$.ajax({
				  url: ajax_url,
				  type:'POST',
				  cache: false,
				  data : {"task_id":transfertaskid,"email":email,"referred_application_id":clientid,funtion:'sendtaskapp'},
				  success: function(res){
				  	//alert(res);
				  	 if(res == 11){
				  	 	alert('Task send successfully');
				  	 }else{
				  	 	alert('This tasks already send or may be some error');
				  	 }
				  }
            });
	}else{
		alert('This is empty value');
	}
}




</script>

<script type="text/javascript">
	function checknumber(iid,vaalue){
	    if(isNaN(vaalue)){
	    	jQuery('#'+iid).val('');
	    }
	}

	function searchprovider(iid){
		var zipcode = '<?php echo $patinetZip; ?>';
		//alert(zipcode);
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
