<?php

/**
 * Template Name: Reports
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
//echo 'Reports';die;
?>


<style type="text/css">
  /*.green-bg theme-bg{
    background: #43b02a!important;
  }
  .ref-cls .green-bg theme-bg{
background: #43b02a!important;
  }*/
 .green-bg th {
    padding: 5px 10px;
    border-right: 1px solid #ddd;
    font-size: 15px;
    color: #fff;
}
  .margin_left {
    margin-left: 17px;
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
.sorting_1 td {
	    width: 200px!important;
}
.rightside .col-md-12 {
    margin-top: 0px;
    margin-bottom: 80px;
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
	$authentication_token = $_SESSION['userdata']['authentication_token']; 
  $getPatientsReports = getPatientsReport($email,$authentication_token,'',''); 
  $getAssessments = getAssessments($email,$authentication_token,'',''); 
  $getTaskTransfered = getTaskTransfered($email,$authentication_token,'',''); 
  $getRefferalAccepted = getRefferalAccepted($email,$authentication_token,'',''); 
  //print_r($getRefferalAccepted);die;
   if(isset($_REQUEST) && in_array("patient",$_REQUEST)){
       $newDate = isset($_REQUEST['patient_date_filter'])?	date("m/d/yy", strtotime($_REQUEST['patient_date_filter'])) :'';
       $duration = isset($_REQUEST['patient_duration'])?$_REQUEST['patient_duration'] :'';
	   if($duration){
		   $getPatientsReports = getPatientsReport($email,$authentication_token,$duration,$newDate);
	   }
	   else{
		   $getPatientsReports = getPatientsReport($email,$authentication_token,'','');
	   }
	   
	   unset($_REQUEST);	   
   }
   if(isset($_REQUEST) && in_array("assessment",$_REQUEST)){
       $newDate = isset($_REQUEST['assessment_date_filter'])?	date("m/d/yy", strtotime($_REQUEST['assessment_date_filter'])) :'';	   
	   $duration = isset($_REQUEST['assessment_duration'])?$_REQUEST['assessment_duration'] :'';
	   if($duration){
		   $getAssessments = getAssessments($email,$authentication_token,$duration,$newDate);
	   }
	   else{
		   $getAssessments = getAssessments($email,$authentication_token,'','');
	   }	   
	   unset($_REQUEST);
   }
   if(isset($_REQUEST) && in_array("task_transferred",$_REQUEST)){
	   $newDate = isset($_REQUEST['task_transferred_date_filter'])?	date("m/d/yy", strtotime($_REQUEST['task_transferred_date_filter'])) :'';
	   $duration = isset($_REQUEST['task_transferred_duration'])?$_REQUEST['task_transferred_duration'] :'';
	   if($duration){
		   $getTaskTransfered = getTaskTransfered($email,$authentication_token,$duration,$newDate);
	   }
	   else{
		   $getTaskTransfered = getTaskTransfered($email,$authentication_token,'','');
	   }
	   
	   unset($_REQUEST);
   }
   if(isset($_REQUEST) && in_array("referral_accepted",$_REQUEST)){
       $newDate = isset($_REQUEST['referral_accepted_date_filter'])?	date("m/d/yy", strtotime($_REQUEST['referral_accepted_date_filter'])) :'';		
	   $duration = isset($_REQUEST['referral_accepted_duration'])?$_REQUEST['referral_accepted_duration'] :'';
	   if($duration){
		   $getRefferalAccepted = getRefferalAccepted($email,$authentication_token,$duration,$newDate);	
	   }
	   else{
		   $getRefferalAccepted = getRefferalAccepted($email,$authentication_token,'','');	
	   }
	      
	   unset($_REQUEST);
   }
   
   
  
  if(!empty($getPatientsReports['status'] == 'ok')){
        $all_patient_array = $getPatientsReports['all_patient_array'];
  }else{
        $error = 0;
        $msg   = $getPatientsReports['status']. ' ! ';
  }
  
  if(!empty($getAssessments['status'] == 'ok')){
        $interview_lists = $getAssessments['interview_list'];
  }else{
        $error = 0;
        $msg   = $getAssessments['status']. ' ! ';
  }
  
  if(!empty($getTaskTransfered['status'] == 'ok')){
        $outgoing_referrals = $getTaskTransfered['outgoing_referrals'];
  }else{
        $error = 0;
        $msg   = $getTaskTransfered['status']. ' ! ';
  }
  
  if(!empty($getRefferalAccepted['status'] == 'ok')){
        $Refferal_outgoing_referrals = $getRefferalAccepted['outgoing_referrals'];
  }else{
        $error = 0;
        $msg   = $getRefferalAccepted['status']. ' ! ';
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
	    <div class="post-73 page type-page status-publish hentry">	
			<div class="row post-area">

<br><br><br>
	            <div class="post-73 page type-page status-publish hentry">
					<div class="col-md-12 border">
				        <div class="line"></div>
				        <?php if($error == 0){ ?>
							<div class="post_title"><h3>Clients
								

							</h3>
							<form id="patient" method="get">
							<div class="row">					 
								 <div class="form-group col-md-8">
								   <input type="date" name="patient_date_filter" id="patient_date_filter" class="form-control">
								   </div>
								   <div class="form-group col-md-4">
								   <select name="patient_duration" id="patient_duration" onchange="getReportByDuration(this)" class="form-control">
									  <option value="">See All</option>
									  <option value="monthly">Monthly</option>
									  <option value="quarterly">Quarterly</option>
									  <option value="yearly">Yearly</option>
								  </select>
								  </div>
								  <input type="hidden" name="form_val_patient" value="patient"/>
								 
							 </div>
							 </form>
							</div>
				            <div class="post-tags"></div>
				            <div class="post_content">
							  <div class="panel-group" id="accordion">
							
  <div class="row">

    <div id="collapseTwo" class="panel-collapse collapse in">
      <div class="panel-body">

        <table class="table table-striped" id="example">
          
            <thead>
            <tr class="green-bg theme-bg">
              <th class="green-bg theme-bg">Client Name</th>
              <th class="green-bg theme-bg">Patient Date</th>
            </tr> 
            </thead>
            <tbody >
            <?php 
            if(!empty($all_patient_array)){
              foreach ($all_patient_array as $patientDatakey => $patientDatavalue) {


                ?>
            
             <tr class=" single_item_referal" data-toggle="collapse" data-target="#newref-<?php echo $patientDatakey; ?>" data-parent="#myTable">
              <td ><?php echo $patientDatavalue['patient_name']; ?> </td>
              <td ><?php echo $patientDatavalue['created_on']; ?> </td>             
            </tr>
            <?php }}?>
          

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
				
				<div class="post-73 page type-page status-publish hentry">
					<div class="col-md-12 border">
				        <div class="line"></div>
				        <?php if($error == 0){ ?>
							<div class="post_title"><h3>Assessments 
								
                            
							</h3>
					        <form id="assessment" method="get">
							<div class="row">					 
								 <div class="form-group col-md-8">
								   <input type="date" name="assessment_date_filter" id="assessment_date_filter" class="form-control">
								   </div>
								   <div class="form-group col-md-4">
								   <select name="assessment_duration" id="assessment_duration" onchange="getReportByDuration(this)" class="form-control">
									  <option value="">See All</option>
									  <option value="monthly">Monthly</option>
									  <option value="quarterly">Quarterly</option>
									  <option value="yearly">Yearly</option>
								  </select>
								  </div>
								  <input type="hidden" name="form_val_assessment" value="assessment"/>
								 
							 </div>
							 </form>
							</div>
				            <div class="post-tags"></div>
				            <div class="post_content">
							  <div class="panel-group" id="accordion1">
							
  <div class="row">

    <div id="collapseThree" class="panel-collapse collapse in">
      <div class="panel-body">

        <table class="table table-striped" id="example1">
          
            <thead>
            <tr class="green-bg theme-bg">
              <th class="green-bg theme-bg">Caller First Name</th>
              <th class="green-bg theme-bg">Referance Name</th>
              <th class="green-bg theme-bg">Interview Date</th>
            </tr> 
            </thead>
            <tbody >
            <?php 
            if(!empty($interview_lists)){
              foreach ($interview_lists as $assessmentDatakey => $assessmentDatavalue) {


                ?>
            
             <tr class=" single_item_referal" data-toggle="collapse" data-target="#newref-<?php echo $assessmentDatakey; ?>" data-parent="#myTable">
              <td ><?php echo $assessmentDatavalue['caller_first_name']; ?> </td>
              <td ><?php echo $assessmentDatavalue['ref_name']; ?> </td>             
              <td ><?php echo $assessmentDatavalue['created_on']; ?> </td>             
            </tr>
            <?php }} else {?>
				  <tr>
				  <td>No Record Found..</td>
				  </tr>
				  <?php }?>
            
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
				
				
				<div class="post-73 page type-page status-publish hentry">
					<div class="col-md-12 border">
				        <div class="line"></div>
				        <?php if($error == 0){ ?>
							<div class="post_title"><h3>Task Transferred  
								
                            
							</h3>
					         <form id="task_transferred" method="get">
							<div class="row">					 
								 <div class="form-group col-md-8">
								   <input type="date" name="task_transferred_date_filter" id="task_transferred_date_filter" class="form-control">
								   </div>
								   <div class="form-group col-md-4">
								   <select name="task_transferred_duration" id="task_transferred_duration" onchange="getReportByDuration(this)" class="form-control">
									  <option value="">See All</option>
									  <option value="monthly">Monthly</option>
									  <option value="quarterly">Quarterly</option>
									  <option value="yearly">Yearly</option>
								  </select>
								  </div>
								  <input type="hidden" name="form_val_task_transferred" value="task_transferred"/>
								 
							 </div>
							 </form>
							</div>
				            <div class="post-tags"></div>
				            <div class="post_content">
							  <div class="panel-group" id="accordion1">
							
  <div class="row">

    <div id="collapseThree" class="panel-collapse collapse in">
      <div class="panel-body">

        <table class="table table-striped" id="example2">
          
            <thead>
            <tr class="green-bg theme-bg">
              <th class="green-bg theme-bg">Referred To</th>
              <th class="green-bg theme-bg">Patient Name</th>
              <th class="green-bg theme-bg">Referrence Name</th>
              <th class="green-bg theme-bg">Task Descrption</th>
              <th class="green-bg theme-bg">Status</th>
            </tr> 
            </thead>
            <tbody >
            <?php 
            if(!empty($outgoing_referrals)){
              foreach ($outgoing_referrals as $outgoing_referralDatakey => $outgoing_referralDatavalue) {


                ?>
            
             <tr class=" single_item_referal" data-toggle="collapse" data-target="#newref-<?php echo $outgoing_referralDatakey; ?>" data-parent="#myTable">
              <td ><?php echo $outgoing_referralDatavalue['referred_to']; ?> </td>
              <td ><?php echo $outgoing_referralDatavalue['patient_name']; ?> </td>             
              <td ><?php echo $outgoing_referralDatavalue['ref_name']; ?> </td>             
              <td ><?php echo $outgoing_referralDatavalue['task_description']; ?> </td>             
              <td ><?php echo $outgoing_referralDatavalue['status']; ?> </td>             
            </tr>
            <?php }} else {?>
				  <tr>
				  <td>No Record Found..</td>
				  </tr>
				  <?php }?>
            
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
				
				
				
				<div class="post-73 page type-page status-publish hentry">
					<div class="col-md-12 border">
				        <div class="line"></div>
				        <?php if($error == 0){ ?>
							<div class="post_title"><h3>Referral Accepted
							</h3>
					             <form id="referral_accepted" method="get">
							<div class="row">					 
								 <div class="form-group col-md-8">
								   <input type="date" name="referral_accepted_date_filter" id="referral_accepted_date_filter" class="form-control">
								   </div>
								   <div class="form-group col-md-4">
								   <select name="referral_accepted_duration" id="referral_accepted_duration" onchange="getReportByDuration(this)" class="form-control">
									  <option value="">See All</option>
									  <option value="monthly">Monthly</option>
									  <option value="quarterly">Quarterly</option>
									  <option value="yearly">Yearly</option>
								  </select>
								  </div>
								  <input type="hidden" name="form_val_referral_accepted" value="referral_accepted"/>
								 
							 </div>
							 </form>
							</div>
				            <div class="post-tags"></div>
				            <div class="post_content">
							  <div class="panel-group" id="accordion1">
							
  <div class="row">

    <div id="collapseThree" class="panel-collapse collapse in">
      <div class="panel-body">

        <table class="table table-striped" id="example3">
          
            <thead>
            <tr class="green-bg theme-bg">
              <th class="green-bg theme-bg">Referred To</th>
              <th class="green-bg theme-bg">Patient Name</th>
              <th class="green-bg theme-bg">Referrence Name</th>
              <th class="green-bg theme-bg">Task Descrption</th>
              <th class="green-bg theme-bg">Status</th>
            </tr> 
            </thead>
            <tbody >
            <?php 
            if(!empty($Refferal_outgoing_referrals)){
              foreach ($Refferal_outgoing_referrals as $Refferal_outgoing_referralDatakey => $Refferal_outgoing_referralDatavalue) {


                ?>
            
             <tr class=" single_item_referal" data-toggle="collapse" data-target="#newref-<?php echo $Refferal_outgoing_referralDatavalue; ?>" data-parent="#myTable">
              <td ><?php echo $Refferal_outgoing_referralDatavalue['referred_to']; ?> </td>
              <td ><?php echo $Refferal_outgoing_referralDatavalue['patient_name']; ?> </td>             
              <td ><?php echo $Refferal_outgoing_referralDatavalue['ref_name']; ?> </td>             
              <td ><?php echo $Refferal_outgoing_referralDatavalue['task_description']; ?> </td>             
              <td ><?php echo $Refferal_outgoing_referralDatavalue['status']; ?> </td>             
            </tr>
            <?php }} else {?>
				  <tr>
				  <td>No Record Found..</td>
				  </tr>
				  <?php }?>
            
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

<style>
  table.dataTable thead th div.DataTables_sort_wrapper {
    position: relative;
    
    width: 87px;
}
table.dataTable thead th div.DataTables_sort_wrapper span {
    position: absolute;
    top: 50%;
    margin-top: -8px;
    right: -5px;
   
}

</style>

<?php get_footer(); ?>
    
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.jqueryui.min.js"></script>
<script src="https://cdn.datatables.net/scroller/2.0.0/js/dataTables.scroller.min.js"></script> 




<script type="text/javascript">
	
	$(document).ready(function() {
    $('#example,#example1,#example2,#example3').DataTable( {
        deferRender:    true,
        //scrollY:        200,
        //scrollCollapse: true,
        //scroller:       true
    } );
} );

// $('#patient_duration').on('change', function() {
	          // var form_id = $(this).parent().attr("id");
		      // var duration = this.value;
                      // jQuery.ajax({
						// type: 'post',
						// async: false,
						// data: {duration: duration},
						 // dataType:'JSON', 
                        // success: function(msg) {
								// console.log(msg);
							 // }						
					  // });
		     // });
			 
		 function getReportByDuration(duration){
			 var id = duration.id;
			 var form_id = $('#'+id).closest("form").attr("id");
			 $('#'+form_id).submit();
			 
		 }
		 
		 var status = '<?php echo $getPatientsReports[status]; ?>';
		 if(status == 'ok'){
			 var selected_patient_duration = '<?php echo $_GET[patient_duration]; ?>';
			 var selected_assessment_duration = '<?php echo $_GET[assessment_duration]; ?>';
			 var selected_task_transferred_duration = '<?php echo $_GET[task_transferred_duration]; ?>';
			 var selected_referral_accepted_duration = '<?php echo $_GET[referral_accepted_duration]; ?>';
			 var referral_accepted_date_filter = '<?php echo $_GET[referral_accepted_date_filter]; ?>';
			 var patient_date_filter = '<?php echo $_GET[patient_date_filter]; ?>';
			 var assessment_date_filter = '<?php echo $_GET[assessment_date_filter]; ?>';
			 var task_transferred_date_filter = '<?php echo $_GET[task_transferred_date_filter]; ?>';
			 if(selected_patient_duration){
				 $("select#patient_duration").val(selected_patient_duration);
				 if(patient_date_filter){
					 $("#patient_date_filter").val(patient_date_filter);
				 }
			 }
			 if(selected_assessment_duration){
				 $("select#assessment_duration").val(selected_assessment_duration);
				 if(assessment_date_filter){
					 $("#assessment_date_filter").val(assessment_date_filter);
				 }
			 }
			 if(selected_task_transferred_duration){
				 $("select#task_transferred_duration").val(selected_task_transferred_duration);
				 if(task_transferred_date_filter){
					 $("#task_transferred_date_filter").val(task_transferred_date_filter);
				 }
			 }
			 if(selected_referral_accepted_duration){
				 $("select#referral_accepted_duration").val(selected_referral_accepted_duration);
				 if(referral_accepted_date_filter){
					 $("#referral_accepted_date_filter").val(referral_accepted_date_filter);
				 }
			 }
		 }
		 
</script>



