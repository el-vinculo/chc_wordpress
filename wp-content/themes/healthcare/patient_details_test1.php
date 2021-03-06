<?php

/**
 * Template Name: Patient_details
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.get
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

<style >
h1 {
  text-align: center;
 font-family: 'Montserrat', sans-serif;
  color: #06D85F;
  margin: 80px 0;
}
.rightside a.icon1 i {
    color: #43b02a !important;
}
.box {
  width: 40%;
  margin: 0 auto;
  background: rgba(255,255,255,0.2);
  padding: 35px;
  border: 2px solid #fff;
  border-radius: 20px/50px;
  background-clip: padding-box;
  text-align: center;
}

.button {
  font-size: 1em;
  padding: 10px;
  color: #fff;
  border: 2px solid #06D85F;
  border-radius: 20px/50px;
  text-decoration: none;
  cursor: pointer;
  transition: all 0.3s ease-out;
}
.button:hover {
  background: #06D85F;
}

.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
    margin: 70px auto;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    border: 4px solid rgba(3, 169, 244, 0.69);
    width: 80%;
    position: relative;
    transition: all 5s ease-in-out;
    font-family: 'Montserrat', sans-serif;
}
.popup h2 {
  margin-top: 0;
  font-size: 32px;
  font-weight: 700;
  color: rgba(3, 169, 244, 0.69);
font-family: 'Montserrat', sans-serif;}
.popup .close {
    position: absolute;
    top: 20px;
    right: 30px;
    transition: all 200ms;
    font-size: 30px;
    font-weight: bold;
    text-shadow: none;
    width: 40px;
    text-align: center;
    height: 40px;
    padding: 6px;
    border-radius: 100%;
    box-shadow: none;
    background: rgba(3, 169, 244, 0.69)!important;
    text-decoration: none;
    color: #fff;
}
.popup .close:hover {
  color: #fff!important;
}
.popup .content {
  max-height: 80%;
  overflow: auto;
}
.content ul li {
    padding: 12px 0;
    font-size: 16px;
}
.content ul li span{
   font-weight: 700;
   font-family: 'Montserrat', sans-serif;
}

.view-active{
color: #43b02a!important;
}
@media screen and (max-width: 700px){
  .box{
    width: 70%;
  }
  .popup{
    width: 70%;
  }
}
.content p{
  font-weight: 700;
   font-family: 'Montserrat', sans-serif;
   font-size: 17px;
       color: #949292;

}

.view-button {
       margin-top: 13px;
    position: relative;
    display: block;
    
    margin-right: 5px;
}
.border {
    border: 1px solid #ccc;
}

/*new start css*/
.custom-btn{
  border-radius: 5px;
  padding: 7px 10px;
  border: 0!important;  
  box-shadow: none!important; 
}
.pt-20{
    padding: 20px;
}
.provider-content {
    display: inline-block;
}
.provider-content h3{
  font-size: 20px;
  font-weight: bold;
}
span.fa.fa-print {
    font-size: 33px;
    color: #3b5999;
}
.margin-bt thead tr td {
    padding-bottom: 8px!important;
}
.margin-bt thead tr th{
  padding: 8px 0!important; 
}
.scroll  {
    height: 219px;
    overflow-y: scroll;
}
i.fa.fa-envelope {
    padding-left: 0px!important;
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

       print_r($_POST);
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

    /*---------------Assessments List --------------------------*/
    if(!empty($referralList)){
        if(!empty($_POST['addTask']) && (!empty($_POST['referral_id']))){
            $referralid = $_POST['referral_id'];
        }else{
           $referralid = $referralList[0]['referral_id'];
        }
        $interviewdata = interviewDetailsTest($referralid,$email);
     //echo "<pre>";
     //print_r($interviewdata); die; 
    if(!empty($interviewdata['status'] == 'ok')){
        $interviewDeatils = $interviewdata['interview_hash'];
        $detailsData  = $interviewdata['details_array']; 
    }else{
        $error = 1;
        $msg   = $patientdata['status']. ' ! '. $patientdata['message'];
    }
       

       // $assessmentData = assessmentlist($referralid,$email);
       // if(!empty($assessmentData['status'] == 'ok')){
       //  $assessmentList  = $assessmentData['needs_array'];
       //   // echo "<pre>";
       //   // print_r($assessmentList); 
       // }

    }


    
    /*--------------------------------------------------*/


    /* ------------ Patient Details --------------------- */
	$patientdata = patientDetails($patient_id,$email);
	if(!empty($patientdata['status'] == 'ok')){

	  	$patientsDeatils = $patientdata['patients_details'];

     // echo "<pre>";
     // print_r($patientsDeatils); die; 
	  	$patinetZip  = $patientsDeatils['patient_zipcode'];

       if($patientsDeatils['client_consent'] == 'no'){
   /* writte code for modal window */
  }
  else {
   /* do nothing */
  }
  // end
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
                                    <label for="email">Primary Care Physician:</label>
                                    <input type="text" name="primary_care_physician" class="form-control" id="insurance" placeholder="Primary Care"
                                    value="<?php echo $patientsDeatils['primary_care_physician']; ?>">
                                  </div>
                                </div>

				<div class="col-md-4">
				  <div class="form-group">
				    <label for="pwd">Policy Id:</label>
				    <input type="text" name="patient_coverage_id" class="form-control" id="policyid" placeholder="Policy Id" value="<?php echo $patientsDeatils['patient_coverage_id']; ?>">
				  </div>
				</div>
				<div class="col-md-4">
                                  <div class="form-group">
                                    <label for="email">Insurance:</label>
                                    <input type="text" name="healthcare_coverage" class="form-control" id="insurance" placeholder="Insurance"
                                    value="<?php echo $patientsDeatils['healthcare_coverage']; ?>">
                                  </div>
                                </div>
<br/>
<br/>
<br/>
<p>Emergency Contacts: </p>
	<div class="col-md-4">
                                  <div class="form-group">
                                    <label for="email">Name:</label>
                                    <input type="text" name="emergency_contact_fName" class="form-control" id="insurance" placeholder="Name"
                                    value="<?php echo $patientsDeatils['emergency_contact_fName']; ?>">
                                  </div>
                                </div>
<div class="col-md-4">
                                  <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="text" name="emergency_contact_email" class="form-control" id="insurance" placeholder="Email"
                                    value="<?php echo $patientsDeatils['emergency_contact_email']; ?>">
                                  </div>
                                </div>
<div class="col-md-4">
                                  <div class="form-group">
                                    <label for="email">Phone Number:</label>
                                    <input type="text" name="emergency_contact_phone" class="form-control" id="insurance" placeholder="Phone Number"
                                    value="<?php echo $patientsDeatils['emergency_contact_phone']; ?>">
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
<br/> 

 <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-4">
                                  <div class="form-group">
                                    <label for="email":>Client Consent:</label>
			
<label class="radio-inline"><input type="radio" name="client_consent"  value="yes" <?php if(isset($patientsDeatils['client_consent']) && ($patientsDeatils['client_consent'] == 'yes')) { echo "checked"; } ?>>yes</label>
<label class="radio-inline"><input type="radio" name="client_consent" value="no" <?php if(isset($patientsDeatils['client_consent']) && ($patientsDeatils['client_consent'] == 'no')) { echo "checked"; } ?>>no</label>

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
	                                	<td id="refstatus-<?php echo $referralList['referral_id'];?>"><?php echo $refvalue['status']; ?></td>
                                        <td id="reffolllowup-<?php echo $referralList['referral_id'];?>"><?php echo $refvalue['follow_up_date']; ?></td>
                                        <td id="refagreement-<?php echo $referralList['referral_id'];?>"><?php echo $refvalue['agreement_notification_flag']; ?></td>
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
                                   <td id="reftasktdeadline-<?php echo $taskvalue['task_id']; ?>"><?php 
                                  if(date('Y-m-d',strtotime($taskvalue['task_deadline'])) == '1970-01-01'){
                                    echo "--";
                                    
                                   }else{
                                     echo date('Y-m-d',strtotime($taskvalue['task_deadline']));
                                   }
                                   ?></td>
                                   <td id="reftaskstatus-<?php echo $taskvalue['task_id']; ?>"><?php echo $taskvalue['task_status'];?></td>
                                   <td><button class="btn-primary" data-toggle="modal"  data-target="#myTaskModal" onclick="getPatientRefTask('<?php echo $taskvalue['task_id']; ?>')"  ><i class="fa fa-pencil" title="Edit" aria-hidden="true"></i></button></td>
                                   <td><button class="btn-primary" data-toggle="modal"  data-target="#myTransferModal" onclick="getTransferTaskdetails('<?php echo $taskvalue['task_id']; ?>')"  >Transfer</button><button class="btn-primary" data-toggle="modal"  data-target="#myLedgerModal" onclick="getledgerdetails('<?php echo $taskvalue['task_id']; ?>')"  >Ledger </button>

                                   </td>
                                   
                                   
                                </tr>
                                <?php } }else { ?>
                                <tr>
	                                <td colspan="7" style="color: red"><center><p>No Task Added</p></center></td>
	                            </tr>

	                            <?php } ?>
                                
                            </tbody>
                        </table> 

        <a href="javascript:void(0)" data-toggle="modal" onclick="getReferralId()" data-target="#myAddTaskModal" >+ Add Task</a> 

  <div class="col-md-9 panel-group" id="accordion">
                           
                           <div class="panel">
                            <div class="post_title post_tilte-inter">
                                <h3 class="pull-left"> <a id="intervirefiels" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#" ></a> Assessments</h3>
                            </div>
                            </div>





    <div class="alert alert-success alert-dismissible"  id="interview-msg" style="display: none" >
       <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
       <strong>Success!</strong> Assessment detail successfully added.
    </div>
  
   
      
      
    <div id="panel1" class="panel-collapse collapse in" aria-expanded="true">
       <div class="panel-body">
    <?php 
    if(!empty($detailsData)){ 
      foreach ($detailsData as $intkey => $intvalue) { ?>
          <div class="main-interview box-shadow">
            <div class="row">
              <div class="col-md-6">
                 <h3 ><a class="accordion-toggle" data-toggle="collapse"  href="#panelneed_<?php echo $intkey; ?>"><?php echo $intvalue['need_title']; ?></a></h3>
              </div>
              <div id="panelneed_<?php echo $intkey; ?>" class="panel-collapse collapse">
                <div class="panel-body">
                  <div class="col-md-6">
                   <div class="pull-left btn-right btn-right1 "> 
                           <a href="javascript:void(0)"  id="need-<?php echo $intkey; ?>" onclick="removedata(this.id)" style="color: red;padding-left: 20px;">Remove</a>
                        </div>
                    <div class="pull-right btn-right">
                      <a class="add-need addmore" href="javascript:void(0)"  ><i class="fa fa-plus" aria-hidden="true"></i> Add Need</a><br>
                      <a href="javascript:void(0)" data-check = "<?php echo $intkey; ?>"  class="addmoreObstacle"  onclick='add(this)' style="color: red;"><i class="fa fa-plus" aria-hidden="true"></i> Add Obstacle </a>
                    </div>
                  </div>
                </div>
                <div class="alert alert-success alert-dismissible" id="need-msg-<?php echo $intkey; ?>" style="display: none">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Success!</strong> Need detail successfully updated.
                </div>
                <form action="">
                   <div class="row">
                      <div class="form-group col-md-3 left">
                        <label for="first">Title <em style="color:red">*</em></label>
                        <input type="hidden" id="last_obs_<?php echo $intkey; ?>" value="<?php echo  end(array_keys($intvalue['obstacles_array'])) ?>">
                        <input type="hidden" id="saved_needid_<?php echo $intkey; ?>" value="<?php echo $intvalue['need_id'];?>">
                        <input type="text" data-check="<?php echo $intkey; ?>" id="need_title_<?php echo $intkey; ?>" class="form-control" value="<?php echo $intvalue['need_title'];?>" onblur="checkneedupdate(this)">
                      </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-4">
                          <label for="first">Descripation <em style="color:red">*</em></label>
                          <textarea class="focus-edit" rows="5" id="need_desc_<?php echo $intkey; ?>" data-check="<?php echo $intkey; ?>" onblur="checkneedupdate(this)" cols="41"><?php echo $intvalue['need_description'];?></textarea>
                        </div>
                        
                        <div class="form-group col-md-4">
                          <label for="first"> Notes</label>
                            <textarea rows="5" data-check="<?php echo $intkey; ?>" onblur="checkneedupdate(this)" id="need_notes_<?php echo $intkey; ?>" cols="41"><?php echo $intvalue['need_note'];?></textarea>
                        </div>

                        <div class="form-group col-md-2 ">
                          <label for="first">Urgency</label><br>
                            <select id="need_urgency_<?php echo $intkey; ?>" data-check="<?php echo $intkey; ?>" onchange="checkneedupdate(this)">
                            <option value="Critical" <?php if($intvalue['need_urgency'] == 'Critical'){ echo "selected"; } ?>>Critical</option>
                               <option value="High" <?php if($intvalue['need_urgency'] == 'High'){ echo "selected"; } ?>>High </option>
                               
                               <option value="Modrate" <?php if($intvalue['need_urgency'] == 'Modrate'){ echo "selected"; } ?>>Modrate </option>
                               <option value="Low" <?php if($intvalue['need_urgency'] == 'Low'){ echo "selected"; } ?>>Low </option>
                            </select>
                        </div>

                        <div class="form-group col-md-2 pull-right">
                           <label for="first">Status</label><br>
                            <select id="need_status_<?php echo $intkey; ?>" data-check="<?php echo $intkey; ?>" onchange="checkneedupdate(this)">
                              <option value="New" <?php if($intvalue['need_status'] == 'New'){ echo "selected"; } ?>>New </option>
                              <option value="Pending" <?php if($intvalue['need_status'] == 'Pending'){ echo "selected"; } ?>>Pending</option>
                              <option value="Close" <?php if($intvalue['need_status'] == 'Close'){ echo "selected"; } ?>>Close </option>
                              <option value="Review" <?php if($intvalue['need_status'] == 'Review'){ echo "selected"; } ?>>Review </option>
                            </select>
                        </div>
                    </div>
                   </div>
                 </form>
               </div>
              </div><hr>
              <?php if(!empty($intvalue['obstacles_array']) && is_array($intvalue['obstacles_array'])){ 
                  foreach ($intvalue['obstacles_array'] as $obskey => $obsvalue) {
              ?>

              <div id="main-interview"></div>
                <div class="main-interview box-shadow obstacle-inter">
                  <div class="row">
                    <div class="col-md-4 ">
                        <h3><a id="obstacleancher" class="accordion-toggle" data-toggle="collapse"  href="#panelobs_<?php echo $intkey; ?>_<?php echo $obskey; ?>"><?php echo $obsvalue['obstacle_title']; ?> </a> </h3>
                    </div>
                    <div id="panelobs_<?php echo $intkey; ?>_<?php echo $obskey; ?>" class="panel-collapse collapse">
                      <div class="panel-body">
                        <div class="col-md-8 inline">

                        <div class="pull-left btn-right btn-right1 "> 
                           <a href="javascript:void(0)"  id="obstacle-<?php echo $intkey; ?>_<?php echo $obskey; ?>" onclick="removedata(this.id)" style="color: red;padding-left: 20px;">Remove</a>
                        </div>    
                            <div class="pull-right btn-right  ">
                              
                              <a href="javascript:void(0)" style="color: red;" data-check = "<?php echo $intkey; ?>" data-neck = "<?php echo $obskey; ?>"   onclick='addobsoln(this)'><i class="fa fa-plus" aria-hidden="true"></i> Add solution </a>
                            </div>
                        </div>
                      </div>
                             
                      <div class="alert alert-success alert-dismissible" id="msg-obs-<?php echo $intkey; ?>-<?php echo $obskey; ?>" style="display: none">
                           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                           <strong>Success!</strong> Obstacle detail successfully added.
                      </div>

                      <form action="">
                        <div class="row">
                          <div class="form-group col-md-3 left">
                            <input type="hidden" id="last_sol_<?php echo $intkey; ?>_<?php echo $obskey; ?>" value="<?php echo  end(array_keys($obsvalue['solutions_array'])) ?>">
                            <input type="hidden" id="saved_obstacleid_<?php echo $intkey; ?>_<?php echo $obskey; ?>" value="<?php echo $obsvalue['obstacle_id']; ?>">
                            <label for="first">Title</label>
                            <input type="text" id="obstacle_title_<?php echo $intkey; ?>_<?php echo $obskey; ?>" data-pop='<?php echo $intkey; ?>' data-mom='<?php echo $obskey; ?>' class="form-control" value="<?php echo $obsvalue['obstacle_title']; ?>" onblur="updateInterviewObstacle(this)">
                           </div>
                        </div>

                        <div class="row">
                          <div class="form-group col-md-4">
                            <label for="first">Descripation</label>
                              <textarea rows="5" id="obstacle_desc_<?php echo $intkey; ?>_<?php echo $obskey; ?>" data-pop='<?php echo $intkey; ?>' data-mom='<?php echo $obskey; ?>' cols="41" onblur="updateInterviewObstacle(this)"><?php echo $obsvalue['obstacle_description']; ?></textarea>
                          </div>
                          <div class="form-group col-md-4">
                             <label for="first"> Notes</label>
                             <textarea rows="5" id="obstacle_notes_<?php echo $intkey; ?>_<?php echo $obskey; ?>" data-pop='<?php echo $intkey; ?>' data-mom='<?php echo $obskey; ?>' cols="41" onblur="updateInterviewObstacle(this)"><?php echo $obsvalue['obstacle_notes']; ?></textarea>
                          </div>
                          <div class="form-group col-md-2 ">
                            <label for="first">Urgency</label><br>
                              <select id="obstacle_urgency_<?php echo $intkey; ?>_<?php echo $obskey; ?>" data-pop='<?php echo $intkey; ?>' data-mom='<?php echo $obskey; ?>' onchange="updateInterviewObstacle(this)">
                              <option value="Critical" <?php if(!empty($obsvalue['obstacle_urgency'] == 'Critical')){ echo "selected"; }?>>Critical</option>
                               <option value="High" <?php if(!empty($obsvalue['obstacle_urgency'] == 'High')){ echo "selected"; }?>>High </option>
                               
                               <option value="Modrate" <?php if(!empty($obsvalue['obstacle_urgency'] == 'Modrate')){ echo "selected"; }?>>Modrate</option>
                               <option value="Low" <?php if(!empty($obsvalue['obstacle_urgency'] == 'Low')){ echo "selected"; }?>>Low</option>
                              </select>
                          </div>
                          <div class="form-group col-md-2 pull-right">
                            <label for="first">Status</label><br>
                              <select id="obstacle_status_<?php echo $intkey; ?>_<?php echo $obskey; ?>" data-pop='<?php echo $intkey; ?>' data-mom='<?php echo $obskey; ?>' onchange="updateInterviewObstacle(this)">
                                <option value="New" <?php if(!empty($obsvalue['obstacle_status'] == 'New')){ echo "selected"; }?>>New </option>
                                <option value="Pending" <?php if(!empty($obsvalue['obstacle_status'] == 'Pending')){ echo "selected"; }?>>Pending</option>
                                <option value="Close" <?php if(!empty($obsvalue['obstacle_status'] == 'Close')){ echo "selected"; }?>>Close </option>
                                <option value="Review" <?php if(!empty($obsvalue['obstacle_status'] == 'Review')){ echo "selected"; }?>>Review </option>
                               </select>
                           </div>
                         </div>
                        </div>
                      </form></div>
                    </div><hr>
                    
                    <?php
                    if(!empty($obsvalue['solutions_array']) && is_array($obsvalue['solutions_array'])){ 
                      foreach ($obsvalue['solutions_array'] as $solkey => $solvalue) {
                    ?>        
                    <div class="main-interview obstacle-inter1 box-shadow">
                      <div class="row">
                        <div class="col-md-4 ">
                          <h3><a id="solutionancher" class="accordion-toggle" data-toggle="collapse"  href="#panelsol_<?php echo $intkey;?>_<?php echo $obskey; ?>_<?php echo $solkey; ?>"><?php echo $solvalue['solution_title']; ?></a> </h3>
                        </div>
                        <div id="panelsol_<?php echo $intkey;?>_<?php echo $obskey; ?>_<?php echo $solkey; ?>" class="panel-collapse collapse">
                          <div class="panel-body">
                            <div class="col-md-8 inline">
                         
                            <div class="pull-left btn-right btn-right1 "> 
                           <a href="javascript:void(0)"  id="solution-<?php echo $intkey;?>_<?php echo $obskey; ?>_<?php echo $solkey; ?>" onclick="removedata(this.id)" style="color: red;padding-left: 20px;">Remove</a></div>
                            </div>
                           </div>

                                    
                    <div class="alert alert-success alert-dismissible" id="msg-sol-<?php echo $intkey;?>_<?php echo $obskey; ?>_<?php echo $solkey; ?>" style="display: none" >
                       <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                       <strong>Success!</strong> Solution detail successfully added.
                    </div>

                    <form action="">
                      <div class="row">
                          <div class="form-group col-md-3 left">
                              <label for="first">Title</label>
                              <input type="hidden" id="saved_solutionid_<?php echo $intkey; ?>_<?php echo $obskey; ?>_<?php echo $solkey; ?>" class="form-control" value="<?php echo $solvalue['solution_id'];?>">
                              <input type="text" id="solution_title_<?php echo $intkey; ?>_<?php echo $obskey; ?>_<?php echo $solkey; ?>" class="form-control" data-tot="<?php echo $intkey; ?>" data-fot="<?php echo $obskey; ?>" data-got="<?php echo $solkey; ?>" value="<?php echo $solvalue['solution_title']; ?>" onblur="updateInterviewSolutiondeatils(this)">
                          </div>
                      </div>
                      <div class="row">
                          <div class="form-group col-md-4">
                              <label for="first">Descripation</label>
                              <textarea rows="5" data-tot="<?php echo $intkey; ?>" data-fot="<?php echo $obskey; ?>" data-got="<?php echo $solkey; ?>" id="solution_desc_<?php echo $intkey; ?>_<?php echo $obskey; ?>_<?php echo $solkey; ?>" onblur="updateInterviewSolutiondeatils(this)" cols="45"><?php echo $solvalue['solution_description']; ?></textarea>
                          </div>

                      </div>

                      <div class="row">

                          <div class="form-group col-md-4">
                              <h5><button type="button" class="btn1 btn-success"  data-toggle='modal'  data-target='#myProviderModal' class="form-control" id="search-<?php echo $intkey; ?>_<?php echo $obskey; ?>_<?php echo $solkey; ?>" onclick="searchprovider(this.id)">Search Provider</button></h5>
                              <label for="first">Selected Provider</label>
                              <input type="text"  placeholder="Search Entire Database"  id="solution_provider_<?php echo $intkey; ?>_<?php echo $obskey; ?>_<?php echo $solkey; ?>" data-tot="<?php echo $intkey; ?>" data-fot="<?php echo $obskey; ?>" data-got="<?php echo $solkey; ?>" value="<?php echo $solvalue['solution_provider']; ?>" onblur="updateInterviewSolutiondeatils(this)" onclick="updateInterviewSolutiondeatils(this)">
                          </div>

                      </div>
                      </div>
                    </form>
                 </div></div>
                 
                 <?php  } } ?>
                 <div id="main-interview"></div>
                    <div class="input_fields_wrap_solution_<?php echo $intkey; ?>_<?php echo $obskey; ?> "></div>
                 <?php  }} ?>
                  <div id="main-interview " ></div>
                            <div class="input_fields_wrap_obstcles_<?php echo $intkey; ?> obstacle-inter ">
                <div class="post-tags"></div>
                            </div>
                 <?php }}else{  ?>
                  <div class="main-interview">
                     <div class="row">
                        <div class="col-md-6">
                            <h3 ><a class="accordion-toggle" data-toggle="collapse"  href="#editpanel1">Need</a></h3>
                        </div>
                        <div id="editpanel1" class="panel-collapse collapse box-shadow">
                            <div class="panel-body">
                             <div class="col-md-6">
                                <div class="pull-right btn-right">
                                  <a class="add-need" href="javascript:void(0)" id="addmore" ><i class="fa fa-plus" aria-hidden="true"></i> Add Need</a><br>
                                  <a href="javascript:void(0)" data-check = "1"  class="addmoreObstacle"  onclick='add(this)' style="color: red;"><i class="fa fa-plus" aria-hidden="true"></i> Add Obstacle </a>
                                </div>
                             </div>
                            </div>
                                        
                        <div class="alert alert-success alert-dismissible" id="need-msg-1" style="display: none">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success!</strong> Need detail successfully added.
                        </div>

                        <form action="">
                           <div class="row">
                              <div class="form-group col-md-3 left">
                                 <label for="first">Title <em style="color:red">*</em></label>
                                 <input type="hidden" id="saved_needid_1" value="">
                                 <input type="text" id="need_title_1" class="form-control">
                               </div>
                           </div>
                           
                           <div class="row">
                              <div class="form-group col-md-4">
                                  <label for="first">Descripation <em style="color:red">*</em></label>
                                  <textarea rows="5" id="need_desc_1" data-check="1" onblur="checkinterviewneeddeatils(this)" cols="41"></textarea>
                               </div>
                               <div class="form-group col-md-4">
                                  <label for="first"> Notes</label>
                                   <textarea rows="5" cols="41" id="need_notes_1" data-check="1" onblur="checkneedupdate(this)"></textarea>
                               </div>
                               <div class="form-group col-md-2 ">
                                  <label for="first">Urgency</label>
                                                <br>
                                                <select id="need_urgency_1" data-check="1" onchange="checkneedupdate(this)">
                                                   <option value="">Select</option>
                                                   <option value="Critical">Critical</option>
                                                   <option value="High">High </option>
                                                    
                                                    <option value="Modrate">Modrate</option>
                                                    <option value="Low">Low</option>

                                                </select>
                               </div>
                                            <div class="form-group col-md-2 pull-right">
                                                <label for="first">Status</label>
                                                <br>
                                                <select id="need_status_1" data-check="1" onchange="checkneedupdate(this)">
                                                     <option value="">Select</option>
                                                     <option value="New">New </option>
                                                    <option value="Pending">Pending</option>
                                                    <option value="Close">Close </option>
                                                    <option value="Review">Review </option>

                                                </select>
                                            </div>
                                        </div>
                                </div>
                                </form>
                                <div id="main-interview " ></div>
                            <div class="input_fields_wrap_obstcles_1 obstacle-inter ">
                <div class="post-tags"></div>
                            </div>
                            <hr>
                            <div id="main-interview "></div>
                            <div class="input_fields_wrap " >
                             <?php } ?>
                 <div id="main-interview " ></div>
                            <div class="input_fields_wrap_obstcles obstacle-inter ">
                <div class="post-tags"></div>
                            </div>

                            <div id="main-interview "></div>
                            <div class="input_fields_wrap " >

                        </div>

                            

                        </div>

                    </div>

                </div>

</div></div>
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

<table class="table ">
      <tbody>
  
  <thead>
    <tr>
      <th scope="col">
        <label>Search</label>
        <input type="Search" name="provider_name" id="ptn_provider" class="form-control" placeholder="Provider Name..">
      </th>
      <th scope="col">
        <label>Populations</label>
        <select class="form-control" name="population[]"  id='testSelect1' multiple>
          <option value="">Please Select </option>
          <option value="Citizenship">Citizenship</option>
          <option value="Disabled">Disabled</option>
          <option value="Families w/ Children">Families w/ Children</option>
          <option value="LGBT" >LGBT</option>
          <option value="Very Low-Income">Very Low-Income</option>
          <option value="Native American">Native American</option>
          <option value="Other">Other</option>
          <option value="Senior">Senior</option>
          <option value="Veteran/Military">Veteran/Military</option>
        </select>
      </th>
     
      <th scope="col">
        <label>Services</label>
        <select class="form-control" name="services_type[]"  id='services-test' multiple>
        <option value="">Please Select </option>
          <option value="Abuse">Abuse</option>
          <option value="Addiction">Addiction</option>
          <option value="BasicNeeds" >BasicNeeds</option>
          <option value="Behavioral" >Behavioral</option>
          <option value="CaseManagement" >CaseManagement</option>
          <option value="Clothing" >Clothing</option>
          <option value="DayCare" >DayCare</option>
          <option value="Disabled" >Disabled</option>
          <option value="Education">Education</option>
          <option value="Emergency" >Emergency</option>
          <option value="Employment" >Employment</option>
          <option value="Family" >Family</option>
          <option value="Financial" >Financial</option>
          <option value="Food">Food</option>
          <option value="GeneralSupport" >GeneralSupport</option>
          <option value="Housing" >Housing</option>
          <option value="Identification">Identification</option>
          <option value="IndependentLiving">IndependentLiving</option>
          <option value="Legal" >Legal</option>
          <option value="Medical" >Medical</option>
          <option value="Research" >Research</option>
          <option value="Resources" >Resources</option>
          <option value="Respite" >Respite</option>
          <option value="Senior" >Senior</option>
          <option value="Transportation">Transportation</option>
          <option value="Veteran" >Veteran</option>
          <option value="Victim" >Victim</option>

        </select>
      </th>
       <th scope="col">
        <label>Tags</label>
        <input type="text"  name="tags" id="ptn_tags" class="form-control" placeholder="Tags">
      </th>
      <th scope="col">
        <label>Location Name</label>
        <input type="text" value="98168" name="location" id="ptn_location" class="form-control" placeholder="Virginia">
      </th>
      <th scope="col">
        <label>Location Type</label>
        
        <select class="form-control" name="location_type" id="ptn_locationtype">
        <option value="">Please Select </option>
          <option value="City" >City</option>
          <option value="State" >State</option>
          <option value="Country" >Country</option>
          <option value="National" >National</option>
        
        </select>
      </th>
      <th scope="col">
        <button type="search " onclick="getserachserviceprovider()" class="custom-btn btn-success">Search</button> 
        <input type="hidden" id="assignprovidertab" value=""/>
        <!-- <input type="submit" name="search" class="custom-btn btn-success" value="Search"> -->
      </th>
    </tr>
  </thead>

  
</tbody>
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
        		   
                  <div class="col-md-6">
                  <label>Description</label>
                   <textarea name="description" id="ref_desc" class="form-control" rows="7"  placeholder="Description..."></textarea>
                  </div>

                   <div class="col-md-6">
               <label>Follow Up Date</label>
               <div  >
                    <input type="text" class="form-control datepicker" placeholder="Follow Up Date" name="followup_date" id="ref_followup_date"  />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
                   
              </div>
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
                            <input type="text" id="transfer_task_id" value="" style="display: none">
                            <?php
                              if(!empty($clientList)){
                            	foreach ($clientList as $clientkey => $clientvalue) {
                            ?>	
                            <tr>
                                <td><?php echo $clientvalue['name']; ?></td>
                                <td><?php echo $clientvalue['speciality']; ?></td>
                                <td><?php echo $clientvalue['agreement_type']; ?></td>
                                <td><?php  if($clientvalue['agreement_signed'] == 1){ echo "Ture";}else{ echo ""; }; ?></td>
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




<div id="myLedgerModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" id="edittaskclose" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Ledger Details</h4>
      </div>
      <div class="modal-body">
        <div id="ledgertabledatadummy"></div>

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

<table class="table ">
      <tbody>
  
  <thead>
    <tr>
      <th scope="col">
        <label>Search</label>
        <input type="Search" name="provider_name" id="ptn_provider" class="form-control" placeholder="Provider Name..">
      </th>
      <th scope="col">
        <label>Populations</label>
        <select class="form-control" name="population[]"  id='testSelect1' multiple>
          <option value="">Please Select </option>
          <option value="Citizenship">Citizenship</option>
          <option value="Disabled">Disabled</option>
          <option value="Families w/ Children">Families w/ Children</option>
          <option value="LGBT" >LGBT</option>
          <option value="Very Low-Income">Very Low-Income</option>
          <option value="Native American">Native American</option>
          <option value="Other">Other</option>
          <option value="Senior">Senior</option>
          <option value="Veteran/Military">Veteran/Military</option>
        </select>
      </th>
     
      <th scope="col">
        <label>Services</label>
        <select class="form-control" name="services_type[]"  id='services-test' multiple>
        <option value="">Please Select </option>
          <option value="Abuse">Abuse</option>
          <option value="Addiction">Addiction</option>
          <option value="BasicNeeds" >BasicNeeds</option>
          <option value="Behavioral" >Behavioral</option>
          <option value="CaseManagement" >CaseManagement</option>
          <option value="Clothing" >Clothing</option>
          <option value="DayCare" >DayCare</option>
          <option value="Disabled" >Disabled</option>
          <option value="Education">Education</option>
          <option value="Emergency" >Emergency</option>
          <option value="Employment" >Employment</option>
          <option value="Family" >Family</option>
          <option value="Financial" >Financial</option>
          <option value="Food">Food</option>
          <option value="GeneralSupport" >GeneralSupport</option>
          <option value="Housing" >Housing</option>
          <option value="Identification">Identification</option>
          <option value="IndependentLiving">IndependentLiving</option>
          <option value="Legal" >Legal</option>
          <option value="Medical" >Medical</option>
          <option value="Research" >Research</option>
          <option value="Resources" >Resources</option>
          <option value="Respite" >Respite</option>
          <option value="Senior" >Senior</option>
          <option value="Transportation">Transportation</option>
          <option value="Veteran" >Veteran</option>
          <option value="Victim" >Victim</option>

        </select>
      </th>
      <th scope="col">
        <label>Tags</label>
        <input type="text"  name="tags" id="ptn_tags" class="form-control" placeholder="Tags">
      </th>
      <th scope="col">
        <label>Location Name</label>
        <input type="text"  name="location" id="ptn_location" class="form-control" placeholder="Virginia">
      </th>
      <th scope="col">
        <label>Location Type</label>
        
        <select class="form-control" name="location_type" id="ptn_locationtype">
        <option value="">Please Select </option>
          <option value="City" >City</option>
          <option value="State" >State</option>
          <option value="Country" >Country</option>
          <option value="National" >National</option>
        
        </select>
      </th>
      <th scope="col">
        <button type="search " onclick="getserachserviceprovider()" class="custom-btn btn-success">Search</button> 
        <input type="hidden" id="assignprovidertab" value=""/>
        <!-- <input type="submit" name="search" class="custom-btn btn-success" value="Search"> -->
      </th>
    </tr>
  </thead>

  
</tbody>
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
var ajax_url = "<?php echo site_url().'/ajax.php'; ?>";
var upload_ajax_url = "<?php echo '/upload_ajax_url.php'; ?>";

var urgencyoption = "<option value=''>Select</option><option value='Critical'>Critical</option><option value='High'>High</option><option value='Modrate'>Modrate</option><option value='Low'>Low</option>";

var statusoption = "<option value=''>Select</option><option value='New'>New</option><option value='Pending'>Pending</option><option value='Close'>Close</option><option value='Review'>Review</option>";

var g = 1;
function addobsoln(iid) {
    var y = 1;
    var e = $(iid).attr('data-check');
    var f = $(iid).attr('data-neck');

   // alert(e);
  //  alert(f);

    var max_fields      = 20; 
    var wrapper         = jQuery(".input_fields_wrap_solution_"+e+"_"+f); 
    //alert(wrapper);
    if(y < max_fields){        
        var titleid = "solution_title_"+e+"_"+f+"_"+g;
        var descid = "solution_desc_"+e+"_"+f+"_"+g;   
        var providerid = "solution_provider_"+e+"_"+f+"_"+g;   
        var savedsoliid = "saved_solutionid_"+e+"_"+f+"_"+g;  
        var searchprovider = "search-"+e+"_"+f+"_"+g;  
            
        var triid = "trobssol_"+e+"_"+g;
        var soltriid = "soltrobs_"+e+"_"+g;
        var provideriid = "provider-"+y;
            
        jQuery(wrapper).append("<div id='"+soltriid+"'><div class='main-interview obstacle-inter1 margin-left box-shadow'><div class='row'><div class='col-md-4'><h3><a id='solutionancher' class='accordion-toggle' data-toggle='collapse'  href='#"+triid+"'>Solution </a> </h3></div><div id='"+triid+"' class='panel-collapse collapse'><div class='panel-body'><div class='col-md-8 inline'><div class='pull-left btn-right btn-right1'><a href='javascript:void(0)' id='remove-"+soltriid+"' onclick='removeobstr(this.id)' style='color: red;padding-left: 20px;'>Remove</a></div><div class='pull-right btn-right btn-right1'></div></div></div><div class='alert alert-success alert-dismissible' id='solution-msg' style='display: none' ><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success!</strong> Solution detail successfully added.</div><form action=''><div class='row'><div class='form-group col-md-3 left'><label for='first'>Title</label><input type='hidden' id='"+savedsoliid+"' class='form-control' value=''><input type='text' id='"+titleid+"' class='form-control'></div></div><div class='row'><div class='form-group col-md-4'><label for='first'>Descripation</label><textarea rows='5' id='"+descid+"' data-tot='"+e+"'  data-fot='"+f+"' data-got='"+g+"' onblur='checkInterviewSolutiondeatils(this)' cols='45'></textarea></div></div><div class='row'><div class='form-group col-md-4'><h5><button type='button' class='btn1 btn-success'  data-toggle='modal'  data-target='#myProviderModal' class='form-control' id='"+searchprovider+"' onclick='searchprovider(this.id)'>Search Provider</button></h5><label for='first'>Search</label><input type='text' id='"+providerid+"' data-tot='"+e+"'  data-fot='"+f+"' data-got='"+g+"' onblur='updateInterviewSolutiondeatils(this)' onclick='updateInterviewSolutiondeatils(this)' class='form-control' placeholder='Search Entire Database'></div></div></div></form></div></div></div>"); //add input box
             y++; 
             g++; 
        }
}


jQuery(document).ready(function() {
    var max_fields      = 20; 
    var wrapper         = jQuery(".input_fields_wrap_obstcles"); 
    //var add_button      = $("#addmore");   
    var y = 2; 
    var r = 1; 
    var option= $("#coountry").html();
    var taskstatusoption = $("#tskstatus").html();
    jQuery(".addmoreObstacle").click(function(e){ 
        //alert('hii');
       // var r = $(this).attr('id');
        //alert(r);
        e.preventDefault();
        if(y < max_fields){        
            var titleid = "obstacle_title_"+r+"_"+y;
            var descid = "obstacle_desc_"+r+"_"+y;
            var notesdid = "obstacle_notes_"+r+"_"+y;
            var urgencyid = "obstacle_urgency_"+r+"_"+y;
            var statusid = "obstacle_status_"+r+"_"+y;

            var triid = "trobs"+y;
            var diivvtriid = "diivtrobs"+y;
            var provideriid = "provider-"+y;
            
            jQuery(wrapper).append("<div id='"+diivvtriid+"'><div class='main-interview '><div class='row'><div class='col-md-4'><h3><a id='obstacleancher' class='accordion-toggle' data-toggle='collapse'  href='#"+triid+"'>Obstacle</a> </h3></div><div id='"+triid+"' class='panel-collapse collapse margin-left box-shadow'><div class='panel-body'><div class='col-md-8 inline'><div class='pull-left btn-right btn-right1 '><a href='javascript:void(0)' style='color: red;padding-left: 20px;' id='remove-"+diivvtriid+"' onclick='removeobstr(this.id)'>Remove</a></div><div class='pull-right btn-right'><a href='javascript:void(0)' id='sol_1_"+y+"' data-check = '"+r+"' data-neck = '"+y+"' onclick='addobsoln(this)'  style='color: red;'><i class='fa fa-plus' aria-hidden='true'></i> Add solution </a></div></div></div><div class='alert alert-success alert-dismissible' id='obstacle-msg-"+r+"-"+y+"' style='display: none'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success!</strong> Obstacle detail successfully added.</div><form action=''><div class='row'><div class='form-group col-md-3 left'><input type='hidden' id='saved_obstacleid_"+r+"_"+y+"' value=''><label for='first'>Title</label><input type='text' id='"+titleid+"' class='form-control' value=''></div></div><div class='row'><div class='form-group col-md-4'><label for='first'>Descripation</label><textarea rows='5' data-com='1' data-tom ='2' id='"+descid+"' cols='41' onblur='checkInterviewObstacledeatils(this)'></textarea></div><div class='form-group col-md-4'><label for='first'> Notes</label><textarea rows='5' cols='41' data-pop='"+r+"' data-mom ='"+y+"' id='"+notesdid+"' onblur='updateInterviewObstacle(this)'></textarea></div><div class='form-group col-md-2'><label for='first'>Urgency</label><br><select data-pop='"+r+"' data-mom ='"+y+"' id='"+urgencyid+"' onchange='updateInterviewObstacle(this)'>"+urgencyoption+"</select></div><div class='form-group col-md-2 pull-right'><label for='first'>Status</label><br><select data-pop='"+r+"' data-mom ='"+y+"' id='"+statusid+"' onchange='updateInterviewObstacle(this)'>"+statusoption+"</select></div></div></div></form></div> <div id='main-interview'></div><div class='input_fields_wrap_solution_"+r+"_"+y+"'></div></div></div>"); //add input box
             y++; 
        }
    });
   
    /*$(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('tr').remove(); x--;
    })*/
});

function checkInterviewObstacledeatils(iiid) {
   // var interview_iid = $("#saved_interview_id").val();
    var obsiid = $(iiid).attr('data-tom');
    var neediid = $(iiid).attr('data-com');
   // alert(obsiid);
    //alert(neediid);
    var need_iid = $("#saved_needid_"+neediid).val();
    //alert(need_iid); 
    var cheking = jQuery("#saved_obstacleid_"+neediid+"_"+obsiid).val();
    var email = "<?php echo $email; ?>";
    var obstacle_title = $("#obstacle_title_"+neediid+"_"+obsiid).val();
    var obstacle_desc = $("#obstacle_desc_"+neediid+"_"+obsiid).val();
    if(cheking == ''){
    if(need_iid == ''){
        alert('You can not add need without add need');
        return false;
    }else if(obstacle_title == ''){
        alert('Please fill obstacle title');
        return false;
    }else if(obstacle_desc == ''){
        alert('Please fill obstacle descripation');
        return false;
    }else{
        jQuery.ajax({
            type: 'post',
            url: ajax_url,
            data: {'email':email,'need_id':need_iid,'obstacle_title':obstacle_title,'obstacle_description':obstacle_desc,funtion:'saveinterviewobstacles'},
            success: function (res) {
               console.log(res);
                var obj = JSON.parse(res);
                var result = obj.error;
                var saved_obstacleid = obj.obstacle_id
                var trimStr  = $.trim(result);
                if(trimStr == '11'){          
                    jQuery("#saved_obstacleid_"+neediid+"_"+obsiid).val(obj.obstacle_id);
                    $("#obstacle-msg-"+neediid+"-"+obsiid).show();

            
                }else{
                    alert('Error ! Please try again ');
                }
              
            }
          });
    }
  }
}

function updateInterviewObstacle(iid) {
    var needdiid = $(iid).attr('data-pop');
    var obbsiid = $(iid).attr('data-mom');
    var obstacle_iid = $("#saved_obstacleid_"+needdiid+"_"+obbsiid).val();
    //alert(obstacle_iid);
    var email = "<?php echo $email; ?>";
    var obstacle_title = $("#obstacle_title_"+needdiid+"_"+obbsiid).val();
    var obstacle_desc = $("#obstacle_desc_"+needdiid+"_"+obbsiid).val();
    var obstacle_notes = $("#obstacle_notes_"+needdiid+"_"+obbsiid).val();
    var obstacle_urgency = $("#obstacle_urgency_"+needdiid+"_"+obbsiid).val();
    var obstacle_status = $("#obstacle_status_"+needdiid+"_"+obbsiid).val();
    if(obstacle_iid == ''){
        return false;
    }else if(obstacle_title == ''){
        return false;
    }else if(obstacle_desc == ''){
        return false;
    }else{
        jQuery.ajax({
            type: 'post',
            url: ajax_url,
            data: {'email':email,'obstacle_id':obstacle_iid,'obstacle_title':obstacle_title,'obstacle_description':obstacle_desc,'obstacle_notes':obstacle_notes,'obstacle_urgency':obstacle_urgency,'obstacle_status':obstacle_status,funtion:'updateInterviewObstacles'},
            success: function (res) {
                if(res == '11'){          
                   return true;
                }else{
                    return false;
                }
              
            }
          });
    }
}

function checkInterviewSolutiondeatils(iid) {

  //  var interview_iid = $("#saved_interview_id").val();
    var neediid = $(iid).attr('data-tot');
    var obsiid = $(iid).attr('data-fot');
    var soliid = $(iid).attr('data-got');
    var obstacle_iid = $("#saved_obstacleid_"+neediid+"_"+obsiid).val();
    //alert(obstacle_iid);
    var checking = jQuery("#saved_solutionid_"+neediid+"_"+obsiid+"_"+soliid).val();
    var email = "<?php echo $email; ?>";
    var solution_title = $("#solution_title_"+neediid+"_"+obsiid+"_"+soliid).val();
    var solution_description = $("#solution_desc_"+neediid+"_"+obsiid+"_"+soliid).val();
    if(checking == ''){
    if(obstacle_iid == ''){
        alert('You can not add soultion without add obstacle');
        return false;
    }else if(solution_title == ''){
        alert('Please fill soultion title');
        return false;
    }else if(solution_description == ''){
        alert('Please fill soultion descripation');
        return false;
    }else{
        jQuery.ajax({
            type: 'post',
            url: ajax_url,
            data: {'email':email,'obstacle_id':obstacle_iid,'solution_title':solution_title,'solution_description':solution_description,funtion:'saveinterviewsolution'},
            success: function (res) {
                //colsole.log(res);
                var obj = JSON.parse(res);
                var result = obj.error;
                var saved_solution_id = obj.solution_id
                var trimStr  = $.trim(result);
                if(trimStr == '11'){          
                    jQuery("#saved_solutionid_"+neediid+"_"+obsiid+"_"+soliid).val(obj.solution_id);
                    $("#solution-msg").show();
                    //$("#solution-msg").fadeOut(10000);
                    //alert(obj.need_id);         
                    //alert('Obstacle save successfully');
                }else{
                    alert('Error ! Please try again ');
                }
              
            }
          });
    }
  }
}

 function add(iid){
   //var y = 1; 
        var r = jQuery(iid).attr('data-check');
        var y = jQuery("#last_obs_"+r).val(); 
        //alert(y);
        if (typeof value === "undefined") {
            var y = 1;
        }else if(y != '' &&  y != 'undefined'){
        
          var y = parseInt(y) + 1;
          jQuery("#last_obs_"+r).val(y);
        }else{
          var y = 1;
        }

        //alert(y);
        
        //var r = 1; 
       // var ttem1 = jQuery(this).attr('data-check1');
       var max_fields      = 20;
        var wrapper         = jQuery(".input_fields_wrap_obstcles_"+r); 
        //alert(ttem);
        //e.preventDefault();
        if(y < max_fields){        
            var titleid = "obstacle_title_"+r+"_"+y;
            var descid = "obstacle_desc_"+r+"_"+y;
            var notesdid = "obstacle_notes_"+r+"_"+y;
            var urgencyid = "obstacle_urgency_"+r+"_"+y;
            var statusid = "obstacle_status_"+r+"_"+y;
            //alert(titleid);
            var triid = "trobs"+y;
            var diivvtriid = "diivtrobs"+y;
            var provideriid = "provider-"+y;
            
            jQuery(wrapper).append("<div id='"+diivvtriid+"'><div class='main-interview '><div class='row'><div class='col-md-4'><h3><a id='obstacleancher' class='accordion-toggle' data-toggle='collapse'  href='#"+triid+"'>Obstacle</a> </h3></div><div id='"+triid+"' class='panel-collapse collapse margin-left box-shadow'><div class='panel-body'><div class='col-md-8 inline'><div class='pull-left btn-right btn-right1 '><a href='javascript:void(0)' style='color: red;padding-left: 20px;' id='remove-"+diivvtriid+"' onclick='removeobstr(this.id)'>Remove</a></div><div class='pull-right btn-right'><a href='javascript:void(0)' id='sol_1_"+y+"' data-check = '"+r+"' data-neck = '"+y+"' onclick='addobsoln(this)'  style='color: red;'><i class='fa fa-plus' aria-hidden='true'></i> Add solution </a></div></div></div><div class='alert alert-success alert-dismissible' id='obstacle-msg' style='display: none'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success!</strong> Obstacle detail successfully added.</div><form action=''><div class='row'><div class='form-group col-md-3 left'><input type='hidden' id='saved_obstacleid_"+r+"_"+y+"' value=''><label for='first'>Title</label><input type='text' id='"+titleid+"' class='form-control' value=''></div></div><div class='row'><div class='form-group col-md-4'><label for='first'>Descripation</label><textarea rows='5' data-com='"+r+"' data-tom ='"+y+"' id='"+descid+"' cols='41' onblur='checkInterviewObstacledeatils(this)'></textarea></div><div class='form-group col-md-4'><label for='first'> Notes</label><textarea rows='5' cols='41' data-pop='"+r+"' data-mom ='"+y+"' id='"+notesdid+"' onblur='updateInterviewObstacle(this)'></textarea></div><div class='form-group col-md-2'><label for='first'>Urgency</label><br><select data-pop='"+r+"' data-mom ='"+y+"' id='"+urgencyid+"' onchange='updateInterviewObstacle(this)'>"+urgencyoption+"</select></div><div class='form-group col-md-2 pull-right'><label for='first'>Status</label><br><select data-pop='"+r+"' data-mom ='"+y+"' id='"+statusid+"' onchange='updateInterviewObstacle(this)'>"+statusoption+"</select></div></div></div></form></div> <div id='main-interview'></div><div class='input_fields_wrap_solution_"+r+"_"+y+"'></div></div></div>"); //add input box
             y++; 
        }
    }


jQuery(document).ready(function() {
    var max_fields      = 20; 
    var wrapper         = jQuery(".input_fields_wrap");   
    var x = "<?php echo $intkey+1; ?>"; 
    //alert(x);
    var m = 1; 
    jQuery(".addmore").click(function(e){ 
        e.preventDefault();
        if(x < max_fields){         
            var name1 = "tasks["+x+"][task_type]";
            var name2 = "tasks["+x+"][provider]";
            var name3 = "tasks["+x+"][task_owner]";
            var name4 = "tasks["+x+"][task_description]";
            var name5 = "tasks["+x+"][task_deadline]";
            var name6 = "tasks["+x+"][task_status]";
            var triid = "paneltr"+x;
            var obstriid = "paneltrobs"+x;
            var soltriid = "paneltrsol"+x;
            var diviid = "tr"+x;
            
            jQuery(wrapper).append("<div id='"+diviid+"'><div  class='main-interview'><div class='row'><div class='col-md-6'><h3 ><a class='accordion-toggle' data-toggle='collapse'  href='#"+triid+"'>Need</a></h3></div><div id='"+triid+"' class='panel-collapse collapse'><div class='panel-body'><div class='col-md-6'><div class='pull-right btn-right'><a class='add-need' href='javascript:void(0)' id='addmore11' onclick='removetr("+x+")' style='color: red;' >Remove</a><br><a onclick='add(this)' class='addmoreObstacle' data-check ='"+x+"' href='javascript:void(0)'  ><i class='fa fa-plus' aria-hidden='true'></i> Add Obstacle </a></div></div></div> <div class='alert alert-success alert-dismissible' id='need-msg-"+x+"' style='display: none'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success!</strong> Need detail successfully added. </div><form action=''><div class='row'><div class='form-group col-md-3 left'><label for='first'>Title <em style='color:red'>*</em></label><input type='hidden' id='saved_needid_"+x+"' value=''><input type='text' id='need_title_"+x+"' class='form-control'></div></div><div class='row'><div class='form-group col-md-4'><label for='first'>Descripation <em style='color:red'>*</em></label><textarea rows='5'data-check='"+x+"' id='need_desc_"+x+"' onblur='checkinterviewneeddeatils(this)' cols='41'></textarea></div><div class='form-group col-md-4'><label for='first'> Notes</label><textarea rows='5' cols='41' data-check='"+x+"' id='need_notes_"+x+"' onblur='checkneedupdate(this)'></textarea></div><div class='form-group col-md-2'><label for='first'>Urgency</label><br><select data-check='"+x+"' id='need_urgency_"+x+"' onchange='checkneedupdate(this)'>"+urgencyoption+"</select></div><div class='form-group col-md-2 pull-right'><label for='first'>Status</label><br><select data-check='"+x+"' id='need_status_"+x+"' onchange='checkneedupdate(this)'>"+statusoption+"</select></div></div></div></form></div></div><div class='main-interview'></div><div class='input_fields_wrap_obstcles_"+x+"'></div><hr><div class='post-tags'></div></div></div>"); //add input box
             x++; 
             //x++; 
        }
    });
   
});

function removetr(id){
    jQuery('#tr'+id).remove();
}

function removedata(iid){
  var arr = iid.split('-');
  var idslug = arr[1];
  var type = arr[0];
  if(type == 'need'){
    var id = $("#saved_needid_"+idslug).val();
  }else if(type == 'obstacle'){
   var id = $("#saved_obstacleid_"+idslug).val();
  }else if(type == 'solution'){
    var id = $("#saved_solutionid_"+idslug).val();
  }
  
  var email = "<?php echo $email; ?>";
  if(type == ''){
     return false;
  }else if(id == ''){
     return false;
  }else{
    if (confirm('Are you sure to remove this')) {
      jQuery.ajax({
              type: 'post',
              url: ajax_url,
              data: {'id':id,'email':email,'type':type,funtion:'removeInterviewData'},
              success: function (res) {
                  if(res == 11){          
                    location.reload();
                  }else{
                      return false;
                  }
                
              }
      });
    }else{
      return false;
    }

  }
}


function updateInterviewSolutiondeatils(iid) {
     var neediid = $(iid).attr('data-tot');
    var obsiid = $(iid).attr('data-fot');
    var soliid = $(iid).attr('data-got');
    var solution_iid = $("#saved_solutionid_"+neediid+"_"+obsiid+"_"+soliid).val();
    //alert(interview_iid);
    var email = "<?php echo $email; ?>";
    var solution_title = $("#solution_title_"+neediid+"_"+obsiid+"_"+soliid).val();
    var solution_description = $("#solution_desc_"+neediid+"_"+obsiid+"_"+soliid).val();
    var solution_provider = $("#solution_provider_"+neediid+"_"+obsiid+"_"+soliid).val();

    //alert(solution_iid);

    //alert(solution_description);
    //alert(solution_provider);

    if(solution_iid == ''){
        //alert('You can not add soultion without add obstacle');
        return false;
    }else if(solution_title == ''){
        //alert('Please fill soultion title');
        return false;
    }else{
        jQuery.ajax({
            type: 'post',
            url: ajax_url,
            data: {'email':email,'solution_id':solution_iid,'solution_title':solution_title,'solution_description':solution_description,'solution_provider':solution_provider,funtion:'updateInterviewSolutions'},
            success: function (res) {
                if(res == '11'){          
                   return true;
                }else{
                    //alert('Error ! Please try again ');
                    return false;
                }
              
            }
        });
    }
}

function assignprovider(iid){
  var id = iid.replace("search-", "solution_provider_");
  document.getElementById(id).value = jQuery('#providernamefill').text();
  jQuery("#closeserviceprovider").click();
}


function removeobstr(id){
    var arr = id.split('-');
    var r = arr[1];
    jQuery('#'+r).remove();
}

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

function getledgerdetails(taskid) {
  //alert(taskid);
  //document.getElementById("msg_task_id").value = taskid;
  //alert(taskid);
  var email = "<?php echo $email; ?>";
 // var patient_id = "<?php echo base64_decode($_GET['pid']); ?>";
  jQuery.ajax({
        url: ajax_url,
        type:'POST',
        cache: false,
        data : {'task_id':taskid,'email':email,funtion:'ledgertaskdeatillist'},
        success: function(html){
          //alert(html);
         // console.log(html);
          jQuery("#ledgertabledatadummy").html(html);
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
         var followup_date  = document.getElementById("ref_followup_date").value;
          jQuery.ajax({
            type: 'post',
            url: ajax_url,
            data: {ref_id:ref_id,ref_name:ref_name,ref_due_date:ref_due_date,ref_urgency:ref_urgency,ref_source:ref_source,ref_desc:ref_desc,follow_up_date:followup_date,funtion:action},
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
	document.getElementById("ref_followup_date").value = document.getElementById ( 'reffolllowup-'+refid ).textContent;

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
   // alert(transfertaskid);
   // alert(clientid);
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
           // console.log(res);
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

function showdetails(providername,providershortdesc) {
  jQuery('#providernamefill').text(providername);
  jQuery('#providershortdescfill').html(providershortdesc);
}
	




</script>

<script type="text/javascript">
	function checknumber(iid,vaalue){
	    if(isNaN(vaalue)){
	    	jQuery('#'+iid).val('');
	    }
	}

	function searchprovider(iid){
		var zipcode = '98168';
		//alert(zipcode);
		document.getElementById("assignprovidertab").value = iid;
		getserviceprovide(zipcode);
		//alert(zipcode);
    }

    function getserviceprovide(zipcode){
  	    jQuery("#providerdiv").html('');
  	  //  document.getElementById("listprac").classList.add("view-active");
  	  //  document.getElementById("mapprac").classList.remove("view-active");
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
		var location_type = jQuery("#ptn_locationtype").val();
  //  var population = jQuery("#ptn_population").val();
		var population = jQuery("#testSelect1").val();
		var location = jQuery("#ptn_location").val();
   // var services_type = jQuery("#ptn_servicetype").val();
    var tagss = jQuery("#ptn_tags").val();
		var services_type = jQuery("#services-test").val();
		var provider_name = jQuery("#ptn_provider").val();
		var iid = jQuery("#assignprovidertab").val();
		jQuery.ajax({
				  url: ajax_url,
				  type:'POST',
				  cache: false,
				  data : {'location_type':location_type,'population':population,'location':location,'services_type':services_type,'provider_name':provider_name,'iid':iid,'tags':tagss,funtion:'selectserviceprovider'},
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

    function assignprovider(id){

      
	    document.getElementById(id).value = jQuery('#providernamefill').text();
	    jQuery("#closeserviceprovider").click();
    }

    function showdetails(providername,providershortdesc) {
  jQuery('#providernamefill').text(providername);
  jQuery('#providershortdescfill').html(providershortdesc);
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


  function checkneedupdate(iid) {
    var needdiid = $(iid).attr('data-check');
    var need_id = $("#saved_needid_"+needdiid).val();
    var email = "<?php echo $email; ?>";
    var need_title = $("#need_title_"+needdiid).val();
    var need_desc = $("#need_desc_"+needdiid).val();
    var need_notes = $("#need_notes_"+needdiid).val();
    var need_urgency = $("#need_urgency_"+needdiid).val();
    var need_status = $("#need_status_"+needdiid).val();

    if(need_id == ''){
        return false;
    }else if(need_title == ''){
        return false;
    }else if(need_desc == ''){
        return false;
    }else{
        jQuery.ajax({
            type: 'post',
            url: ajax_url,
            data: {'email':email,'need_id':need_id,'need_title':need_title,'need_description':need_desc,'need_notes':need_notes,'need_urgency':need_urgency,'need_status':need_status,funtion:'updateinterviewneeds'},
            success: function (res) {
                if(res == 11){ 
                 jQuery("#need-msg-"+needdiid).show();          
                }else{ 
                    return false;
                }
              
            }
          });
      }


}


  function checkinterviewneeddeatils(iid) {
    var moreiid = $(iid).attr('data-check');
    var interview_iid = $("#saved_interview_id").val();
    var checking = jQuery("#saved_needid_"+moreiid).val();
    //alert(moreiid);
    var email = "<?php echo $email; ?>";
    var need_title = $("#need_title_"+moreiid).val();
    var need_desc = $("#need_desc_"+moreiid).val();
    if(checking == ''){
    if(interview_iid == ''){
        return false;
    }else if(need_title == ''){
        return false;
    }else if(need_desc == ''){
        return false;
    }else{
        jQuery.ajax({
            type: 'post',
            url: ajax_url,
            data: {'email':email,'interview_id':interview_iid,'need_title':need_title,'need_description':need_desc,funtion:'saveinterviewneeds'},
            success: function (res) {
                var obj = JSON.parse(res);
                var result = obj.error;
                var saved_needid = obj.need_id
                var trimStr  = $.trim(result);
                if(trimStr == '11'){          
                    jQuery("#saved_needid_"+moreiid).val(obj.need_id);
                    $("#need-msg-"+moreiid).show();     
                }else{
                    alert('Error ! Please try again ');
                }
              
            }
          });
      }
    }


}

    
</script>
