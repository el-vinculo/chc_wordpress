<?php

/**
 * Template Name: Referral_details
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
  .model-width { -ms-overflow-style: none; }
  .model-width { overflow: -moz-scrollbars-none; }
  .model-width::-webkit-scrollbar { width: 0 !important }
  .panel-body {
    padding: 15px 0;
}
th.width-com {
    width: 200px!important;
}
  a.custom-task {
    border: 2px solid #242424;
    border-radius: 7px;
    padding: 11px 16px;
    position: relative;
    top: 64px;
}
a.custom-task:hover {
    border: 2px solid #5cb85c;
    color: #5cb85c;
}
  .model-width {
    width: 980px!important;
    height: 650px;
    overflow-y: scroll;
}

.obstacle-inter{
  position: relative;
  left: 3%;
  margin-right: 30px;

}
.obstacle-inter1 {
    position: relative;
    overflow: hidden;
    left: 5%;
    right: 0;
    margin-right: 49px;
}

  form {
    padding: 0 15px;
}
.margin-left{
  padding-left: 15px;
  margin-right: 16px;
}
.box-shadow {
  padding: 0 20px;
    box-shadow: 0 0 20px #ededed;
}
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
  tbody#taskbody tr td button {
    margin-right: 6px;
}
tbody#refbody tr td button {
    margin-bottom: 6px;
}
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
	$referral_id = base64_decode($_GET['refid']);
    $patient_id = base64_decode($_GET['ptn']);
    $documents = array();




   $referraldata = getreferraldetails($email,$referral_id);
    if(!empty($referraldata['status'] == 'ok')){
    	$referralList  = $referraldata['referral_details'];
    }



    //echo "<pre>";
    //print_r($referralList); die;


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

	  $taskData = taskList($referral_id,$email);
       if(!empty($taskData['status'] == 'ok')){
    	  $taskList  = $taskData['task_list'];
    }

    $assessmentData = assessmentlist($referralid,$email);
       if(!empty($assessmentData['status'] == 'ok')){
        $assessmentList  = $assessmentData['needs_array'];
    }


    /*--------------------------------------------------*/

    /* ------------ Add Referral --------------------- */
   /* if(!empty($_POST) && !empty($_POST['save2'])){
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
	  }*/
	/* -------------------------------------------------*/

    /* ------------ Update Patient Details --------------------- */
	/*if(!empty($_POST['submit'])){
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
	}*/
	/* -------------------------------------------------*/

	/*if(!empty($_POST['vik-ref-post']) && ($_POST['vik-ref-post'] == 497)){
		 $success = 41;
		 $msg   = 'Referral Updated';
	}*/

    /* ------------ Referral List --------------------- */
   /* $referraldata = referralList($patient_id,$email);
    if(!empty($referraldata['status'] == 'ok')){
    	$referralList  = $referraldata['referral_list'];
    }*/
    /* -------------------------------------------------*/

    /* ------------ Communcation List --------------------- */
    /*$communcationdata = communicationList($patient_id,$email);
    if(!empty($communcationdata['status'] == 'ok')){
    	$commList  = $communcationdata['task_msg_data'];
    }*/
    /* -------------------------------------------------*/

    /*---------------Task List --------------------------*/
   /* if(!empty($referralList)){
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
    */
    /*--------------------------------------------------*/


    /* ------------ Patient Details --------------------- */
	/*$patientdata = patientDetails($patient_id,$email);
	if(!empty($patientdata['status'] == 'ok')){
	  	$patientsDeatils = $patientdata['patients_details'];
	  	$patinetZip  = $patientsDeatils['patient_zipcode'];
	}else{
	  	$error = 1;
	    $msg   = $patientdata['status']. ' ! '. $patientdata['message'];
	}*/

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
   /* $documentdata = patientdocuments($email,$patient_id);
    if(!empty($documentdata['status'] == 'ok')){
    	$documentList  = $documentdata['patient_document_array'];
    }*/
    /* -------------------------------------------------*/


    /* ------------ Add Note --------------------- */
    /*if(!empty($_POST) && !empty($_POST['submitnotes'])){
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
	  }*/
	/* -------------------------------------------------*/

	/* ------------ Notes Lists --------------------- */
	   /* $notesdata = notesList($patient_id,$email);
	    if(!empty($notesdata['status'] == 'ok')){
	    	$notesList  = array_reverse($notesdata['notes_array']);

	    }*/

    /* -------------------------------------------------*/


    /* ------------ Clients Lists --------------------- */
	   $clientdata = clientsList();
	    if(!empty($clientdata['status'] == 'ok')){
	    	$clientList  = $clientdata['client_list'];
	    }

    /* -------------------------------------------------*/

    //echo "<pre>";
    //print_r($owners); die;

	 //echo "vikkk"; die;

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

<?php   $patientdata = patientDetails($patient_id,$email);

  if(!empty($patientdata['status'] == 'ok')){

      $patientsDeatils = $patientdata['patients_details'];

  }else{
      $error = 1;
      $msg   = $patientdata['status']. ' ! '. $patientdata['message'];
  } ?>

<div class="container-fluid space">
	<div class="container blogs">
	<div class="col-md-12 rightside">
	    <div class="post-73 page type-page status-publish hentry">
			<div class="row post-area">

        <div class="post-73 page type-page status-publish hentry">
                    <div class="row">
                         <div class="col-md-12">
                         <div class="col-md-4"></div>
                         <div class="col-md-2">
                          <a href="<?php echo site_url().'/patients/patient-details/create-referral?pid='.base64_encode(base64_decode($_GET['ptn']));?>"><button class="button-all btn-primary">Add Referral</button></a>
                          </div>

                          </div>

                         </div>
                  </div>

                  <br><br><br>
	            <div class="post-73 page type-page status-publish hentry">
					<div class="col-md-12 border">
				        <div class="line"></div>
				        <?php if($error == 0){ ?>
							<div class="post_title"><h3> <a href="javascript:void(0)" data-toggle="modal" onclick="getReferralId()" data-target="#clientModal"><?php echo $patientsDeatils['first_name']." ".$patientsDeatils['last_name']; ?></a>
							</h3></div>
<!-- Client details pop up -->

<div id="clientModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" id="edittaskclose" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Client Details</h4>
      </div>
      <div class="modal-body">
        <table class="table table-striped table-bordered" id="example">

                              <tr>
                                  <th>Name</th>
                                  <td><?php echo $patientsDeatils['first_name']." ".$patientsDeatils['last_name']; ?></td>
                                </tr>

                                <tr>
                                  <th>DOB</th>
                                  <td><?php echo date('Y-m-d',strtotime($patientsDeatils['date_of_birth'])); ?></td>
                                </tr>
                                <tr>
                                  <th>Phone Number</th>
                                  <td><?php echo $patientsDeatils['ph_number']; ?></td>
                                </tr>
                                <tr>
                                  <th>Email Id</th>
                                  <td><?php echo $patientsDeatils['patient_email']; ?></td>
                                </tr>
                                <tr>
                                  <th>Zip</th>
                                  <td><?php echo $patientsDeatils['patient_zipcode']; ?></td>
                                </tr>
                                <tr>
                                  <th>Primary Care Physician</th>
                                  <td><?php echo $patientsDeatils['primary_care_physician']; ?></td>
                                </tr>
                                <tr>
                                  <th>Policy Id</th>
                                  <td><?php echo $patientsDeatils['patient_coverage_id']; ?></td>
                                </tr>

                                 <tr>
                                  <th>Insurance</th>
                                  <td><?php echo $patientsDeatils['healthcare_coverage']; ?></td>
                                 </tr>

        </table>

      </div>
      <div class="modal-footer">
        <button type="button" class="button-all btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- client detail pop up -->
<!-- client detail pop up -->
<!-- client detail pop up -->
				            <div class="post-tags"></div>
				            <div class="post_content">
							  <div class="panel-group" id="accordion">

  <div class="panel panel-default">
    <div class="panel-heading">
    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><h4 class="panel-title"><b>Referrals</b></h4></a></div>
    <div id="collapseTwo" class="panel-collapse collapse in } ?>"">
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
                                    <th>AGREEMENT</th>
                                <th class="tabledit-toolbar-column"></th></tr>
                            </thead>
                            <tbody id="refbody">
                                <?php
                                if(!empty($referralList)){
                                	$r = 1;
                                	 ?>

                                	<tr>
	                                	<td ><input type="radio" class="viewcheck" name="viewtask" id="<?php echo $referralList['referral_id']; ?>" value="<?php echo $referralList['referral_id']; ?>" <?php 
                                           if(!empty($_POST['addTask']) && (!empty($_POST['referral_id']) && $refvalue['referral_id'] == $_POST['referral_id'] )){
                                               echo "checked";
                                           }
                                       else if(!empty($taskList) && ($refvalue['referral_id'] == $referralList['0']['referral_id'])){  echo "checked"; } ?> ></td>
                                    <td id="duedate-<?php echo $referralList['referral_id'];?>"><?php echo str_replace(' ','',$referralList['due_date']);?></td>
                                    <td id="refname-<?php echo $referralList['referral_id'];?>"><?php echo $referralList['referral_name']; ?></td>
                                    <td id="refdesc-<?php echo $referralList['referral_id'];?>"><?php echo $referralList['referral_description']; ?></td>
                                    <td id="source-<?php echo $referralList['referral_id'];?>"><?php echo $referralList['source']; ?></td>
                                    <td id="urgency-<?php echo $referralList['referral_id'];?>"><?php echo $referralList['urgency']; ?></td>
                                    <td><?php echo $referralList['task_count']; ?></td>
                                    <td id="refstatus-<?php echo $referralList['referral_id'];?>"><?php echo $referralList['status']; ?></td>
                                        <td id="reffolllowup-<?php echo $referralList['referral_id'];?>"><?php if($referralList['follow_up_date']!='') {echo $referralList['follow_up_date'];} else{ echo '--';} ?></td>
                                        <td id="refagreement-<?php echo $referralList['referral_id'];?>"><?php echo $referralList['agreement_notification_flag']; ?></td>
                                    <td><button class="button-all btn-primary" data-toggle="modal"  data-target="#myModal" onclick="showReferral('<?php echo $referralList['referral_id']; ?>')"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                    <!-- <button class="btn-primary" title="Manage Referral" onclick="getAssesment('<?php echo $refvalue['referral_id']; ?>')" data-toggle="modal"  data-target="#assesmentModal"><i class="fa fa-file-code-o" aria-hidden="true"></i></button> -->
                                    </td>
                                    </tr>
	                                <?php  }else{ ?>

	                                <tr>
	                                	<td colspan="8" style="color: red"><center><p>No Referral Added</p></center></td>
	                                </tr>

	                                <?php } ?>


                            </tbody>
                        </table>

       



      <!-- End of assesment modal -->


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
                                    <th colspan="3" class="width-com">Action</th>

                            </thead>
                            <tbody id="taskbody">
                            <input type="hidden" id="taskrefiid" value="<?php echo $referralList['referral_id']; ?>">
                                <?php if(!empty($taskList)){
                                	  foreach ($taskList as $taskkey => $taskvalue) { ?>
                                <tr>
                                   <td id="reftasktype-<?php echo $taskvalue['task_id']; ?>"><?php echo $taskvalue['task_type'];?></td>
                                   <td id="reftaskprovider-<?php echo $taskvalue['task_id']; ?>"><?php echo $taskvalue['provider'];?></td>
                                   <td id="reftaskowner-<?php echo $taskvalue['task_id']; ?>"><?php echo $taskvalue['task_owner'];?></td>
                                   <td id="reftaskdesc-<?php echo $taskvalue['task_id']; ?>"><?php echo $taskvalue['task_description'];?></td>
                                   <td id="reftasktdeadline-<?php echo $taskvalue['task_id']; ?>"><?php
                                    if(date('m-d-Y',strtotime($taskvalue['task_deadline'])) == '01-01-1970'){
                                    echo '--';
                                    
                                   }else{
                                    echo date('m-d-Y',strtotime($taskvalue['task_deadline']));
                                   }
                                   ?></td>
                                   <td id="reftaskstatus-<?php echo $taskvalue['task_id']; ?>"><?php echo $taskvalue['task_status'];?></td>
                                   <td><button class="button-all btn-primary" data-toggle="modal"  data-target="#myTaskModal" onclick="getPatientRefTask('<?php echo $taskvalue['task_id']; ?>')"  ><i class="fa fa-pencil" title="Edit" aria-hidden="true"></i></button></td>
                                   <td>
                                   <?php if($taskvalue['transferable']=== true){ ?>
                                    <button class="button-all btn-primary" data-toggle="modal"  data-target="#myTransferModal" onclick="getTransferTaskdetails('<?php echo $taskvalue['task_id']; ?>')"  ><img src="<?php echo get_template_directory_uri(); ?>/images/transfer-icon.png"></button>
                                  <?php } else{ ?>
                                  <button class="button-all btn-primary disable-grey" disabled="disabled" data-toggle="modal"  data-target="#myTransferModal" onclick="getTransferTaskdetails('<?php echo $taskvalue['task_id']; ?>')"  ><img src="<?php echo get_template_directory_uri(); ?>/images/transfer-icon.png"></button>
                                  <?php } ?>
                                    <button class="button-all btn-primary" data-toggle="modal"  data-target="#myLedgerModal" onclick="getledgerdetails('<?php echo $taskvalue['task_id']; ?>')"  ><img src="<?php echo get_template_directory_uri(); ?>/images/history-icon.png"> </button>

									<?php if($taskvalue['transferable']=== true){ ?>
									<button class="btn-primary button-all" data-toggle="modal"  data-target="#inviteModal" onclick="getTaskId('<?php echo $taskvalue['task_id']; ?>')"><img src="<?=site_url()?>/wp-content/themes/healthcare/images/invite-icon.png"></button>
                                    <?php }else{?>
									<button class="btn-primary button-all disable-grey" disabled><img src="<?=site_url()?>/wp-content/themes/healthcare/images/invite-icon.png"></button>
									<?php }?>
                                     <?php if($taskvalue['transferable']=== false && $taskvalue['transfer_status'] == "Pending"){ ?> 
									<button class="btn-primary btn-request" onclick="revertTask('<?php echo $taskvalue['task_id']; ?>');"><img src="<?php echo get_template_directory_uri(); ?>/images/revert.png"></button>
                                    <?php } else{?>
									 <button class="btn-primary button-all disable-grey" disabled ><img src="<?php echo get_template_directory_uri(); ?>/images/revert.png"></button>
									<?php }?>
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

         <h4>Assesment</h4> 
         
         <div class="assesmentBody">


         </div>



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
        <button type="button" class="close" data-dismiss="modal">&times;</button>
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
        		<input name="ref-update"  type="button" onclick="sendmessage()" class="button-all btn-primary" value="Send" > </div>
        	    <label>Message</label>
        	    <div class="container" id="commmsgdiv">
        		    <div class="main"></div>
        		</div>
        		<br/>




        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="button-all btn-primary" data-dismiss="modal">Close</button>
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
                    <input type="text" class="form-control" placeholder="Due Date" name="due_date" id="ref_due_date"  />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>

        		  </div>
        		  <div class="col-md-6">
        		   <label>Referral Name </label>
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
                    <input type="text" class="form-control" placeholder="Follow Up Date" name="followup_date" id="ref_followup_date"  />
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
        <button type="button" class="button-all btn-primary" data-dismiss="modal">Close</button>
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
                    <input type="text" class="form-control" placeholder="Deadline" name="task_deadline" id="edit_task_deadline"  />
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
        <button type="button" class="button-all btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



<!-- myTaskModal-->
<div id="myTransferModal" class="modal fade" role="dialog">
  <div class="modal-dialog model-width">

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
                                <td><?php  if($clientvalue['agreement_signed'] == 1){ echo "Ture";}else{ echo ""; }; ?></td>
                                <td><a href="javascript:void(0)" id="<?php echo $clientvalue['name']; ?>" data-title="<?php echo $clientvalue['id']; ?>" onclick="transferclient(this.id,this.value)">Send</a></td>
                            </tr>
                            <?php } } ?>
                            </tbody>

        </table>

      </div>
      <div class="modal-footer">
        <button type="button" class="button-all btn-primary" data-dismiss="modal">Close</button>
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
        <h4 class="modal-title">History Details</h4>
      </div>
      <div class="modal-body">
        <div id="ledgertabledatadummy"></div>



      </div>
      <div class="modal-footer">
        <button type="button" class="button-all btn-primary" data-dismiss="modal">Close</button>
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
      < class="modal-footer">
        <button type="button" class="button-all btn-primary" data-dismiss="modal">Close</button>
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
                    <input type="text" class="form-control " placeholder="Deadline" name="task_deadline" id="task_deadline"  />
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
        <button type="button" class="button-all btn-primary" data-dismiss="modal">Close</button>
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
          <option value="Any">Any</option>
          <option value="Citizenship">Citizenship</option>
          <option value="Disabled">Disabled</option>
          <option value="Family">Families w/ Children</option>
          <option value="LGBTQ" >LGBTQ</option>
          <option value="LowIncome">Very Low-Income</option>
          <option value="Native">Native American</option>
          <option value="Other">Other</option>
          <option value="Senior">Senior</option>
          <option value="Veteran">Veteran/Military</option>
        </select>
      </th>

      <th scope="col">
        <label>Services</label>
        <select class="form-control" name="services_type[]"  id='services-test' multiple>
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
        <input type="text" value="" name="location" id="ptn_location" class="form-control" placeholder="Location">
      </th>
      <th scope="col">
        <label>Location Type</label>

        <select class="form-control" name="location_type" id="ptn_locationtype">
        <option value="">Please Select </option>
          <option value="City" >City</option>
          <option value="State" >State</option>
          <option value="County" >County</option>
          <option value="National" >National</option>
          <option value="Virtual" >Virtual</option>

        </select>
      </th>
      <th scope="col">
        <button type="search " onclick="getserachserviceprovider()" class="custom-btn button-all btn-primary">Search</button>
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
        <button type="button" class="button-all btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- Invite Modal-->
<div id="inviteModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" id="inviteClose" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Invite Organization</h4>
      </div>
      <div class="modal-body">

        <div class="response"></div>

        <form id="inviteOrgForm">
               
			   <div class="row">
              <div class="col-md-6">
               <label>Homepage URL</label>
               <div>
                   <input type="text" class="form-control" placeholder="Homepage URL" name="homepage_url" id="homepage_url" value="" required>
                </div>
                  <div id="homepage_url_error" style="color:red;">                 
                </div>
              </div>
			
            </div>
            <br/>
			
              <div class="row">
              <div class="col-md-6">
               <label>Name</label>
               <div>
                   <input type="text" class="form-control" placeholder="Organization Name" name="org_name" id="org_name" value="" required>
                </div>
                    <div id="org_name_error" style="color:red;">                 
                </div>
              </div>
               
            </div>
            <br/>
            <div class="row">
              <div class="col-md-6">
               <label>Application URL</label>
                   <input type="text" class="form-control" placeholder="Organization URL" name="application_url " id="application_url" value="" disabled="disabled" required>
              </div>
			  <div id="application_url_error" style="color:red;">                 
                </div>
          
            </div>

            <br/>
             <div class="row">
              <div class="col-md-6">
               <label>Email</label>

                  <input type="text" class="form-control" placeholder="Email" name="org_email " id="org_email" value="" required>
              </div>
			  <div id="org_email_error" style="color:red;">                 
                </div>
              
            </div>
            <br/>

            <br/>
                <input type="hidden" class="form-control" name="task_id_for_invite" id="task_id_for_invite" value="">
            <input name="ref-update" onclick="inviteOrg()" id="invite-org" type="button" class="btn-primary" value="Submit">

        </form>

      </div>
      <div class="modal-footer">
        <button type="button" id="transfermdelclosebutton" class="button-all btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- End of invite modal -->
<?php get_footer(); ?>



<!--
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
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
   <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.multiselect.js"></script>

<script>
    $(function () {
        $('#testSelect1').multiselect({

            placeholder: 'Please Select',


            selectAll: true
        });

    });




     $(function () {
        $('#services-test').multiselect({

            placeholder: 'Please Select',


            selectAll: true
        });

    });


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
    if (window.location.href.indexOf("localhost") > -1) {
      var ajax_url = "<?php echo '/chc/chc_wordpress/ajax.php'; ?>";
    }else{
       var ajax_url = "<?php echo '/ajax.php'; ?>";
    }
var upload_ajax_url = "<?php echo '/upload_ajax_url.php'; ?>";


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
            	document.getElementById("communication_msg").value = '';
            	var trimStr  = $.trim(res);
            	if(trimStr == '11'){
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


function inviteOrg(){

    var task_id  = document.getElementById("task_id_for_invite").value;
    var name  = document.getElementById("org_name").value;
    var email  = document.getElementById("org_email").value;
    var application_url   = document.getElementById("application_url").value;
    var homepage_url = document.getElementById("homepage_url").value;
	
	if(name == '' || email =='' ||  application_url =='' || homepage_url=='' ){
		jQuery('.response').html('<div class="alert  alert-danger alert-dismissible">Please fill all required fields.</div>');
		return false;
	}

	
	else{
		//$('#invite-org').removeAttr("disabled");
       jQuery.ajax({
            type: 'post',
            url: ajax_url,        
            data: {'task_id':task_id,'name':name,'email':email,'application_url':application_url,'homepage_url':homepage_url, funtion:'inviteOrg'},
            success: function (res) {
              //alert(res);
              //exit;
              //console.log(res);exit;
              var trimStr = jQuery.trim(res);
              if(trimStr == '11'){
                jQuery('.response').html('<div class="alert  alert-success alert-dismissible">Successfully Invited</div>');
                $('#inviteOrgForm' ).each(function(){
                    this.reset();
                 });        
              }else{
                jQuery('.response').html('<div class="alert  alert-danger alert-dismissible">Error ! Please try again</div>');
              }
              
            }
          });
	}

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
          jQuery("#ledgertabledatadummy div").html(' ');
          jQuery("#ledgertabledatadummy").html(html);
         // jQuery("#ledgertabledatadummy").html(html);
        }
    });
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

function getTaskId(taskid) {

  document.getElementById("task_id_for_invite").value = taskid;
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
    var radioValue = '<?php echo $referral_id; ?>';
	document.getElementById("referral_id").value = radioValue;
	/*var radioValue = jQuery("input[name='viewtask']:checked").val();
    if(radioValue){
                document.getElementById("referral_id").value = radioValue;
    }else{
    	alert('Please select any referral to add task');
    	jQuery('#myAddTaskModal').modal('hide');

    }*/
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
		var referralid  = document.getElementById("taskrefiid").value;
		$.ajax({
				  url: ajax_url,
				  type:'POST',
				  cache: false,
				  data : {"task_id":transfertaskid,"email":email,"referred_application_id":clientid,funtion:'sendtaskapp'},
				  success: function(res){
				  	//alert(res);
				  	 if(res == 11){
				  	 	alert('Task send successfully');
						getReferralTask(referralid);
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

    $('#ptn_locationtype').on('change', function() {
  if(this.value == 'Virtual'){
    $('#ptn_location').val('');
    $( "#ptn_location" ).prop( "disabled", true );
  }

  else if(this.value == 'National'){
    $('#ptn_location').val('');
    $( "#ptn_location" ).prop( "disabled", true );
  }

  else{
    $( "#ptn_location" ).prop( "disabled", false );
  }
});

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

    if($( "#ptn_locationtype option:selected" ).text() == 'Virtual'){
              var location = 'Virtual';
      }

      if($( "#ptn_locationtype option:selected" ).text() == 'National'){
              var location = 'National';
      }
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



var ajax_url = "<?php echo site_url().'/ajax.php'; ?>";
var upload_ajax_url = "<?php echo '/upload_ajax_url.php'; ?>";
var assesmentajax_url = "<?php echo '/assesmentajax.php'; ?>";

var urgencyoption = "<option value=''>Select</option><option value='Critical'>Critical</option><option value='High'>High</option><option value='Modrate'>Modrate</option><option value='Low'>Low</option>";

var statusoption = "<option value=''>Select</option><option value='New'>New</option><option value='Pending'>Pending</option><option value='Close'>Close</option><option value='Review'>Review</option>";

function getAssesment(refid) { 
    if(refid) {
        var iid = refid;
        var email = "<?php echo $email; ?>";
        if(iid){
          jQuery.ajax({
          url: assesmentajax_url,
          type:'POST',
          cache: false,
          data : {'referral_id':iid,'email':email,funtion:'getAssesmentByReferralId'},
          success: function(html){
            //alert(html);
            //console.log(html);
            jQuery(".assesmentBody").html(html);
          }
            });
        }else{
          alert('not iid');
        }
    }
}

//var g = 1;
function addobsoln(iid) {
    var y = 1;
    var e = $(iid).attr('data-check');
    var f = $(iid).attr('data-neck');

    var g = jQuery("#last_sol_"+e+"_"+f).val();
    if(g != ''){
      var g = parseInt(g) + 1;
      jQuery("#last_sol_"+e+"_"+f).val(g);
    }else{
      var g = 1;
    }

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

        jQuery(wrapper).append("<div id='"+soltriid+"'><div class='main-interview obstacle-inter1 margin-left box-shadow'><div class='row'><div class='col-md-4'><h3><a id='solutionancher' class='accordion-toggle' data-toggle='collapse'  href='#"+triid+"'>Solution </a> </h3></div><div id='"+triid+"' class='panel-collapse collapse'><div class='panel-body'><div class='col-md-8 inline'></div></div><div class='alert alert-success alert-dismissible' id='solution-msg' style='display: none' ><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success!</strong> Solution detail successfully added.</div><form action=''><div class='row'><div class='form-group col-md-3 left'><label for='first'>Title</label><input type='hidden' id='"+savedsoliid+"' class='form-control' value=''><input type='text' id='"+titleid+"' class='form-control'></div><div class='col-md-2'><a href='javascript:void(0)' id='remove-"+soltriid+"' onclick='removeobstr(this.id)' style='color: red;font-size: 31px;position: relative;top: 23px;'><i class='fa fa-trash'></i></a></div></div><div class='row'><div class='form-group col-md-4'><label for='first'>Descripation</label><textarea rows='5' id='"+descid+"' data-tot='"+e+"'  data-fot='"+f+"' data-got='"+g+"' onblur='checkInterviewSolutiondeatils(this)' cols='45'></textarea></div></div><div class='row'><div class='form-group col-md-4'><h5><button type='button' class='button-all btn-primary'  data-toggle='modal'  data-target='#myProviderModal' class='form-control' id='"+searchprovider+"' onclick='searchprovider(this.id)'>Search Provider</button></h5><label for='first'>Search</label><input type='text' id='"+providerid+"' data-tot='"+e+"'  data-fot='"+f+"' data-got='"+g+"' onblur='updateInterviewSolutiondeatils(this)' onclick='updateInterviewSolutiondeatils(this)' class='form-control' placeholder='Search Entire Database'></div></div></div></form></div></div></div>"); //add input box
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

            jQuery(wrapper).append("<div id='"+diivvtriid+"'><div class='main-interview '><div class='row'><div class='col-md-4'><h3><a id='obstacleancher' class='accordion-toggle' data-toggle='collapse'  href='#"+triid+"'>Obstacle</a> </h3></div><div id='"+triid+"' class='panel-collapse collapse margin-left box-shadow'><div class='panel-body'><div class='col-md-8 inline'><div class='pull-right btn-right'><a href='javascript:void(0)' id='sol_1_"+y+"' data-check = '"+r+"' data-neck = '"+y+"' onclick='addobsoln(this)'  style='color: red;'><i class='fa fa-plus' aria-hidden='true'></i> Add solution </a></div></div></div><div class='alert alert-success alert-dismissible' id='obstacle-msg-"+r+"-"+y+"' style='display: none'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success!</strong> Obstacle detail successfully added.</div><form action=''><div class='row'><div class='col-md-6'><div class='row'><div class='form-group col-md-8 left'><input type='hidden' id='saved_obstacleid_"+r+"_"+y+"' value=''><label for='first'>Title</label><input type='text' id='"+titleid+"' class='form-control' value=''></div><div class='col-md-4 pull-right'><div class='form-group '><label for='first'>Urgency</label><br><select data-pop='"+r+"' data-mom ='"+y+"' id='"+urgencyid+"' onchange='updateInterviewObstacle(this)' class='form-control'>"+urgencyoption+"</select></div></div></div></div><div class='col-md-6'><div class='row'><div class='col-md-4'><div class='form-group'><label for='first'>Status</label><br><select data-pop='"+r+"' data-mom ='"+y+"' id='"+statusid+"' onchange='updateInterviewObstacle(this)' class='form-control'>"+statusoption+"</select></div></div><div class='col-md-2'><a href='javascript:void(0)' id='remove-"+diivvtriid+"' onclick='removeobstr(this.id)' style='color: red;font-size: 31px;position: relative;top: 23px;'><i class='fa fa-trash'></i></a></div></div></div></div><div class='row'><div class='form-group col-md-6'><label for='first'>Descripation</label><br><textarea rows='5' data-com='1' data-tom ='2' id='"+descid+"' onblur='checkInterviewObstacledeatils(this)'></textarea></div><div class='form-group col-md-6'><label for='first'> Notes</label><br><textarea rows='5'  data-pop='"+r+"' data-mom ='"+y+"' id='"+notesdid+"' onblur='updateInterviewObstacle(this)'></textarea></div></div></div></form></div> <div id='main-interview'></div><div class='input_fields_wrap_solution_"+r+"_"+y+"'></div></div></div>"); //add input box
             y++;
        }
    });

    /*$(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('tr').remove(); x--;
    })*/
});

function checkInterviewObstacledeatils(iiid) {
  var assementrefid = $("#assement-refid").val();
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
                    getAssesment(assementrefid);

                }else{
                    alert('Error ! Please try again ');
                }

            }
          });
    }
  }
}

function updateInterviewObstacle(iid) {
    var assementrefid = $("#assement-refid").val();
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
              //alert(res);
                if(res == '11'){
                  getAssesment(assementrefid);
                 // return true;
                }else{
                    return false;
                }

            }
          });
    }
}

function checkInterviewSolutiondeatils(iid) {
    var assementrefid = $("#assement-refid").val();
   // alert(assementrefid);
  //  var interview_iid = $("#saved_interview_id").val();
    var neediid = $(iid).attr('data-tot');
    var obsiid = $(iid).attr('data-fot');
    var soliid = $(iid).attr('data-got');
    var obstacle_iid = $("#saved_obstacleid_"+neediid+"_"+obsiid).val();
    //alert(soliid);
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
                console.log(res);
                var obj = JSON.parse(res);
                var result = obj.error;
                var saved_solution_id = obj.solution_id
                var trimStr  = $.trim(result);
                if(trimStr == '11'){
                    jQuery("#saved_solutionid_"+neediid+"_"+obsiid+"_"+soliid).val(obj.solution_id);
                    $("#solution-msg").show();
                     getAssesment(assementrefid);
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

            jQuery(wrapper).append("<div id='"+diivvtriid+"'><div class='main-interview '><div class='row'><div class='col-md-4'><h3><a id='obstacleancher' class='accordion-toggle' data-toggle='collapse'  href='#"+triid+"'>Obstacle</a> </h3></div><div id='"+triid+"' class='panel-collapse collapse margin-left box-shadow'><div class='panel-body'><div class='col-md-8 inline'><div class='pull-right btn-right'><a href='javascript:void(0)' id='sol_1_"+y+"' data-check = '"+r+"' data-neck = '"+y+"' onclick='addobsoln(this)'  style='color: red;'><i class='fa fa-plus' aria-hidden='true'></i> Add solution </a></div></div></div><div class='alert alert-success alert-dismissible' id='obstacle-msg' style='display: none'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success!</strong> Obstacle detail successfully added.</div><form action=''><div class='row'><div class='col-md-6'><div class='row'><div class='form-group col-md-8 left'><input type='hidden' id='saved_obstacleid_"+r+"_"+y+"' value=''><label for='first'>Title</label><input type='text' id='"+titleid+"' class='form-control' value=''></div><div class='col-md-4'><div class='form-group pull-right'><label for='first'>Urgency</label><br><select data-pop='"+r+"' data-mom ='"+y+"' id='"+urgencyid+"' onchange='updateInterviewObstacle(this)' class='form-control'>"+urgencyoption+"</select></div></div></div></div><div class='col-md-6'><div class='row'><div class='col-md-4'><div class='form-group '><label for='first'>Status</label><br><select data-pop='"+r+"' data-mom ='"+y+"' id='"+statusid+"' onchange='updateInterviewObstacle(this)' class='form-control'>"+statusoption+"</select></div></div><div class='col-md-2'><a href='javascript:void(0)'  id='remove-"+diivvtriid+"' onclick='removeobstr(this.id)' style='color: red;font-size: 31px;position: relative;top: 23px;'><i class='fa fa-trash'></i></a></div></div></div></div><div class='row'><div class='form-group col-md-6'><label for='first'>Descripation</label><br><textarea rows='5' data-com='"+r+"' data-tom ='"+y+"' id='"+descid+"'  onblur='checkInterviewObstacledeatils(this)'></textarea></div><div class='form-group col-md-6'><label for='first'> Notes</label><br><textarea rows='5'  data-pop='"+r+"' data-mom ='"+y+"' id='"+notesdid+"' onblur='updateInterviewObstacle(this)'></textarea></div></div></div></form></div> <div id='main-interview'></div><div class='input_fields_wrap_solution_"+r+"_"+y+"'></div></div></div>"); //add input box
             y++;
        }
    }


jQuery(document).ready(function() {
    var max_fields      = 20;
    var wrapper         = jQuery(".input_fields_wrap");
    var x = 2;
   // var x = "<?php echo $intkey+1; ?>";
    //var reffiid = "<?php echo $referraldevid; ?>";

    var m = 1;
    jQuery("#addmoreneed1").on( 'click', 'a', function () {
        alert('Hello');
       // e.preventDefault();
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

            jQuery(wrapper).append("<div id='"+diviid+"'><div  class='main-interview'><div class='row'><div class='col-md-6'><h3 ><a class='accordion-toggle' data-toggle='collapse'  href='#"+triid+"'>Need</a></h3></div><div id='"+triid+"' class='panel-collapse collapse'><div class='panel-body'><div class='col-md-6'><div class='pull-right btn-right'><a onclick='add(this)' class='addmoreObstacle' data-check ='"+x+"' href='javascript:void(0)'  ><i class='fa fa-plus' aria-hidden='true'></i> Add Obstacle </a></div></div></div> <div class='alert alert-success alert-dismissible' id='need-msg-"+x+"' style='display: none'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success!</strong> Need detail successfully added. </div><form action=''><div class='row'><div class='col-md-6'><div class='row'><div class='form-group col-md-8 left'><label for='first'>Title <em style='color:red'>*</em></label><input type='hidden' id='saved_needid_"+x+"' value=''><input type='hidden' id='referral_id_"+x+"' value='"+reffiid+"'><input type='text' id='need_title_"+x+"' class='form-control'></div><div class='col-md-4'><div class='form-group col-md-2'><label for='first'>Urgency</label><br><select data-check='"+x+"' id='need_urgency_"+x+"' onchange='checkneedupdate(this)' class='form-control'>"+urgencyoption+"</select></div></div></div></div><div class='col-md-6'><div class='row'><div class='col-md-4'><div class='form-group '><label for='first'>Status</label><br><select data-check='"+x+"' id='need_status_"+x+"' onchange='checkneedupdate(this)' class='form-control'>"+statusoption+"</select></div></div><div class='col-md-2'><a class='add-need' href='javascript:void(0)' id='addmore11' onclick='removetr("+x+")'  style='color: red;font-size: 31px;position: relative;top: 23px;'><i class='fa fa-trash'></i></a></div></div></div></div><div class='row'><div class='form-group col-md-6'><label for='first'>Descripation <em style='color:red'>*</em></label><br><textarea rows='5'data-check='"+x+"' id='need_desc_"+x+"' onblur='checkinterviewneeddeatils(this)' ></textarea></div><div class='form-group col-md-6'><label for='first'> Notes</label><br><textarea rows='5' data-check='"+x+"' id='need_notes_"+x+"' onblur='checkneedupdate(this)'></textarea></div></div></div></form></div></div><div class='main-interview'></div><div class='input_fields_wrap_obstcles_"+x+"'></div><hr><div class='post-tags'></div></div></div>"); //add input box
             x++;
             //x++;
        }
    });

});

var m = 1;
function testvikfun(iid) {

   //var y = 1;
    var reffiid = $(iid).attr('data-ref');
    var x = $(iid).attr('data-cheekint');
    var x = parseInt(x)+1;

   // alert(e);
  //  alert(f);

   // var max_fields      = 20;
  var max_fields      = 20;
  var wrapper         = jQuery(".input_fields_wrap");

 // var reffiid = '';
   // var x = "<?php echo $intkey+1; ?>";
    //var reffiid = "<?php echo $referraldevid; ?>";


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

            jQuery(wrapper).append("<div id='"+diviid+"'><div  class='main-interview'><div class='row'><div class='col-md-6'><h3 ><a class='accordion-toggle' data-toggle='collapse'  href='#"+triid+"'>Need</a></h3></div><div id='"+triid+"' class='panel-collapse collapse'><div class='panel-body'><div class='col-md-6'><div class='pull-right btn-right'><a onclick='add(this)' class='addmoreObstacle' data-check ='"+x+"' href='javascript:void(0)'  ><i class='fa fa-plus' aria-hidden='true'></i> Add Obstacle </a></div></div></div> <div class='alert alert-success alert-dismissible' id='need-msg-"+x+"' style='display: none'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success!</strong> Need detail successfully added. </div><form action=''><div class='row'><div class='col-md-6'><div class='row'><div class='form-group col-md-8 left'><label for='first'>Title <em style='color:red'>*</em></label><input type='hidden' id='saved_needid_"+x+"' value=''><input type='hidden' id='referral_id_"+x+"' value='"+reffiid+"'><input type='text' id='need_title_"+x+"' class='form-control'></div><div class='pull-right col-md-4'><div class='form-group '><label for='first'>Urgency</label><br><select data-check='"+x+"' id='need_urgency_"+x+"' onchange='checkneedupdate(this)' class='form-control'>"+urgencyoption+"</select></div></div></div></div><div class='col-md-6'><div class='row'><div class='col-md-4'><div class='form-group '><label for='first'>Status</label><br><select data-check='"+x+"' id='need_status_"+x+"' onchange='checkneedupdate(this)' class='form-control'>"+statusoption+"</select></div></div><div class='col-md-2'><a class='add-need' href='javascript:void(0)' id='addmore11' onclick='removetr("+x+")' style='color: red;font-size: 31px;position: relative;top: 23px;'><i class='fa fa-trash'></i></a></div></div></div></div><div class='row'><div class='form-group col-md-6'><label for='first'>Descripation <em style='color:red'>*</em></label><br><textarea rows='5'data-check='"+x+"' id='need_desc_"+x+"' onblur='checkinterviewneeddeatils(this)' ></textarea></div><div class='form-group col-md-6'><label for='first'> Notes</label><br><textarea rows='5' data-check='"+x+"' id='need_notes_"+x+"' onblur='checkneedupdate(this)'></textarea></div></div></div></form></div></div><div class='main-interview'></div><div class='input_fields_wrap_obstcles_"+x+"'></div><hr><div class='post-tags'></div></div></div>"); //add input box
             x++;
      }

}

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
    var assementrefid = $("#assement-refid").val();
    var neediid = $(iid).attr('data-tot');
    var obsiid = $(iid).attr('data-fot');
    var soliid = $(iid).attr('data-got');
    var solution_iid = $("#saved_solutionid_"+neediid+"_"+obsiid+"_"+soliid).val();
    var solution_task_iid = $("#saved_solutiontaskid_"+neediid+"_"+obsiid+"_"+soliid).val();
   // alert(solution_task_iid);
    var email = "<?php echo $email; ?>";
    var solution_title = $("#solution_title_"+neediid+"_"+obsiid+"_"+soliid).val();
    var solution_description = $("#solution_desc_"+neediid+"_"+obsiid+"_"+soliid).val();
    var solution_provider = $("#solution_provider_"+neediid+"_"+obsiid+"_"+soliid).val();
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
                //console.log(res);
                var trimStr  = $.trim(res);
                if(trimStr == '11'){
                //  if(solution_task_iid == ''){
                    //alert('save task');
                    saveRefraalSolutionTask(solution_iid,assementrefid,solution_description,solution_provider,email);
                    getReferralTask(assementrefid);
                //  }

                   getAssesment(assementrefid);

                }else{
                    //alert('Error ! Please try again ');
                    return false;
                }

            }
        });
    }
}

function saveRefraalSolutionTask(solution_iid,refferalId,description,provider,email) {
   var action = 'saveRefSolTask';
   var patient_id = '<?php echo $patient_id; ?>';
   jQuery.ajax({
            type: 'post',
            url: ajax_url,
            data: {solution_id:solution_iid,referral_id:refferalId,patient_id:patient_id,email:email,task_description:description,provider:provider,funtion:action},
            success: function (res) {
              console.log(res);
              var trimStr  = $.trim(res);
              if(trimStr == '11'){
                return true;

              }else{
                return true;

              }

            }
          });
}

function assignprovider(iid){
  alert(iid);
  var id = iid.replace("search-", "solution_provider_");

  document.getElementById(id).value = jQuery('#providernamefill').text();
  jQuery("#closeserviceprovider").click();
}


function removeobstr(id){
    var arr = id.split('-');
    var r = arr[1];
    jQuery('#'+r).remove();
}

function revertTask(taskId){
	var status = confirm("Are you sure to revert this task?");
	if(status){
		var email = "<?php echo $email; ?>";
		var referralid  = document.getElementById("taskrefiid").value;
        //var taskId = '5e463b7a5fd8db1acfb04c28';
		if(taskId && email){
          jQuery.ajax({
          url: ajax_url,
          type:'POST',
          cache: false,
          data : {'task_id':taskId,'email':email,funtion:'revertTask'},
          success: function(response){
            if(response == '11')
			{
				alert('Request was successfully canceled.');
				getReferralTask(referralid);
			}
            console.log(response);
            //jQuery(".assesmentBody").html(html);
          }
            });
        }else{
          alert('taskId');
        }
		
		
	}
}


function showdetails(details) {
  var providername = jQuery(details).attr('data-name');
  var providershortdesc = jQuery(details).attr('data-shortdesc');
  var programName = jQuery(details).attr('data-programName');
  var population = jQuery(details).attr('data-population');
  var populationDesc = jQuery(details).attr('data-populationDesc');
  var services = jQuery(details).attr('data-services');
  var serviceAreaDesc = jQuery(details).attr('data-serviceAreaDesc');
  var servicesTags = jQuery(details).attr('data-servicesTags');
  var mainOffice = jQuery(details).attr('data-mainOffice');
  var quickLink = jQuery(details).attr('data-quickLink');
  var contactPage = jQuery(details).attr('data-contactPage');
  var homePageUrl = jQuery(details).attr('data-homePageUrl');
  var programPageUrl = jQuery(details).attr('data-programPageUrl');

 if(quickLink==''){
    jQuery("#quickLink").removeAttr("href");
	jQuery("#quickLink").css("opacity", "0.2");
   } else{
    jQuery("#quickLink").attr("href", quickLink);
	  jQuery("#contactPage").removeAttr("style");
  }

  if(contactPage==''){
    jQuery("#contactPage").removeAttr("href");
	jQuery("#contactPage").css("opacity", "0.2");
    

 } else{
    jQuery("#contactPage").attr("href", contactPage);
	jQuery("#contactPage").removeAttr("style");

 }

 if(homePageUrl==''){
  jQuery("#homePageUrl").removeAttr("href");
   jQuery("#homePageUrl").css("opacity", "0.2");

 } else{
  jQuery("#homePageUrl").attr("href", homePageUrl);
  jQuery("#homePageUrl").removeAttr("style");
 }

  if(programPageUrl==''){
  jQuery("#programPageUrl").removeAttr("href");
  
jQuery("#programPageUrl").css("opacity", "0.2");
 } else{
  jQuery("#programPageUrl").attr("href", programPageUrl);
   jQuery("#programPageUrl").removeAttr("style");
 }

 if(programPageUrl==''){
  jQuery("#programPageUrl").removeAttr("href");
  jQuery("#programPageUrl").css("opacity", "0.2");

 } else{
  jQuery("#programPageUrl").attr("href", programPageUrl);
   jQuery("#programPageUrl").removeAttr("style");
 }

  jQuery('#providernamefill').text(providername);
  jQuery('#providershortdescfill').html(providershortdesc);
  jQuery('#programName').html(programName);
  jQuery('#population').html(population);
  jQuery('#populationDesc').html(populationDesc);
  jQuery('#services').html(services);
  jQuery('#serviceAreaDesc').html(serviceAreaDesc);
  jQuery('#servicesTags').html(servicesTags);

  jQuery('#mainOffice').html(mainOffice);

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
    var assementrefid = $("#assement-refid").val();
    var needdiid = $(iid).attr('data-check');
    // alert(needdiid);
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
                 getAssesment(assementrefid);
                }else{
                    return false;
                }

            }
          });
      }


}


 function checkinterviewneeddeatils(iid) {
    var moreiid = $(iid).attr('data-check');
   // var interview_iid = $("#saved_interview_id").val();
    var checking = jQuery("#saved_needid_"+moreiid).val();
    var email = "<?php echo $email; ?>";
    var need_title = $("#need_title_"+moreiid).val();
    var referral_id = $("#referral_id_"+moreiid).val();
   // alert(referral_id);
    //alert("moreiid" + moreiid + " - referralid " + referral_id);
    var need_desc = $("#need_desc_"+moreiid).val();
    if(need_title == ''){
        alert("no title");
        return false;
    }else if(need_desc == ''){
        alert("no desc");
        return false;
    }else{
      //  alert("now executing saveinterviewneeds");
        jQuery.ajax({
            type: 'post',
            url: ajax_url,
            data: {'email':email,'referral_id':referral_id,'need_title':need_title,'need_description':need_desc,funtion:'saveinterviewneeds'},
            success: function (res) {
    //alert("response is " + res);
                var obj = JSON.parse(res);
                var result = obj.error;
                var saved_needid = obj.need_id
                var trimStr  = $.trim(result);
                if(trimStr == '11'){
                    jQuery("#saved_needid_"+moreiid).val(obj.need_id);
                    $("#need-msg-"+moreiid).show();
                    getAssesment(referral_id);
                }else{
                    alert('Error ! Please try again ');
                }

            }
          });
      }

}

$(window).on("load", function () { 
    var idd = "<?php echo $referralList['referral_id']; ?>";
    getAssesment(idd);
});

$( "#org_name" ).keyup(function() {
	var org_name = $(this).val();
  $("#application_url").val(org_name+".commonhealthcore.org");
});
</script>
