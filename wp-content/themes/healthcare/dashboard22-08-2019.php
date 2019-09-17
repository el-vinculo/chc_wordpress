<?php
/**
 * Template Name: Dashboard
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
	.equal-width {
    width: 24%;
}
.equal-width1{
    width: 13%;
}
.divBorder {
    border-width:1px;  
    border-style:solid;
}
.referral-main .mr-b {
    margin-bottom: 32px;
}
.referral-main a {
    color: #1f9fea;
}
.referral-main {
    padding: 0 10px;
    
}
.table{
	margin-bottom: 0!important;
}
.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    padding: 10px 15px!important;
   border-right: 1px solid #ddd;
}
.rightside .post-area {
    margin: 0px;
    margin-bottom: 40px!important;
    padding: 0 10px;
}
.view-active{
color: #43b02a!important;
}
.referral-main h1{
	text-align: left;
margin:0;
padding-bottom: 25px;
	font-size:25px;
}
/* Style the buttons that are used to open and close the accordion panel */
.accordion {
  
  color: #444;
  cursor: pointer;
  padding: 0px;
  width: 100%;
  text-align: left;
  border: none;
  outline: none;
  transition: 0.4s;
}
span.text-date {
    float: right;
    padding-right: 47px;
}
.button-posi {
    z-index: 100;
    position: absolute!important;
    top: 25px!important;
    right: 15!important;
    padding: 9px 20px!important;
}
.upcoming-right {
    position: relative;
    right: -116px;
    float: right;
    top: 3px;
}
i.fa.fa-check-circle {
    padding-right: 10px;
}
/* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
/*.active, .accordion:hover {
  background-color: #ccc;
}*/

/* Style the accordion panel. Note: hidden by default */
.panel {
/*  padding: 0 18px;
*/  background-color: white;
  display: none;
  overflow: hidden;
  margin-top: 13px;
    margin-bottom: 13px!important;
}
.panel table tbody tr td {
    line-height: 22px!important;
}
.input-group-addon:last-child span {
    text-align: center;
    position: relative;
    right: 5px;
}

p {
  margin: 0!important;
    color: #000;
}
span.accordion.active i {
    transform: rotateZ(-270deg);
}
</style>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">

<?php



$error = 0;
if(isset($_SESSION['userdata'])){

	  $email = $_SESSION['userdata']['email'];
    $mytasksdata = mytasks($email);
    $inboxdata = inbox($email);
    $notificationdata = notification($email);
    $referraldata = referralDasboard($email);
  	if(!empty($mytasksdata['status'] == 'ok')){
  	  	$todayTasks = $mytasksdata['today_array'];
  	  	$upcomingTasks = $mytasksdata['upcoming_array'];

  	}else{
  	  	$error = 0;
  	    $msg   = $mytasksdata['status']. ' ! '. $mytasksdata['message'];
  	}

    if(!empty($notificationdata['status'] == 'ok')){
        $notification = $notificationdata['notification_array'];
    }else{
        $error = 0;
        $msg   = $notificationdata['status']. ' ! '. $notificationdata['message'];
    }

    if(!empty($inboxdata['status'] == 'ok')){
        $message = $inboxdata['message_array'];
        
    }else{
        $error = 0;
        $msg   = $inboxdata['status']. ' ! '. $inboxdata['message'];
    }

    if(!empty($referraldata['status'] == 'ok')){
        $newReferral = $referraldata['new_referral_array'];
        $activeReferral = $referraldata['active_referral_array'];
        $pendingReferral = $referraldata['pending_referral_array'];
    }else{
        $error = 0;
        $msg   = $referraldata['status']. ' ! '. $referraldata['message'];
    }


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
    
    /* ------------ Incoming Referral List --------------------- */
    $application_id = '5ae781855fd8db064ba82113';
    $incomingreferraldata = incomingReferral($email,$application_id);
    if(!empty($incomingreferraldata['status'] == 'ok')){
      $incomingreferral  =  $incomingreferraldata['incoming_referrals'];
    }
    /* -------------------------------------------------*/


    /* ------------ Outgoing Referral List --------------------- */
    $application_id = '5ae781855fd8db064ba82113';
    $outgoingreferraldata = outgoingReferral($email,$application_id);
    if(!empty($outgoingreferraldata['status'] == 'ok')){
      $outgoingreferral  =  $outgoingreferraldata['outgoing_referrals'];
    }
    /* -------------------------------------------------*/
    

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
                <div class="post_title"><h3>Dashboard</h3></div>
			            <div class="post-tags"></div>
                    <div class="post-content">
                    <p><i class="fa fa-sort-desc" aria-hidden="true"></i>&nbsp;<b>My Tasks</b></p>
                    <h6 class="accordion"><i class="fa fa-sort-desc" aria-hidden="true"></i>&nbsp;Today</h6>
                        
<div class="panel">
  <table class="table table-striped">
  <tbody>
  <?php
   if(!empty($todayTasks)){
   	foreach ($todayTasks as $todaykey => $todayvalue) { ?>
   	<tr><td><span><i class="fa fa-check-circle" aria-hidden="true"></i><span class="text-value"><?php echo $todayvalue['patient']; ?></span><span class="text-date"> <?php echo date('m/d/Y' ,strtotime($todayvalue['task_date'])); ?></span>
      <span class="accordion"><i class="fa fa-angle-double-right  upcoming-right" aria-hidden="true"></i></span>  
      <div class="panel">
        <table class="table table-striped">
          <tbody>
            <?php 
            $todaytaskData = gettaskdetails($email,$todayvalue['task_id']);
            if(!empty($todaytaskData['status'] == 'ok')){
              $todaytask  = $todaytaskData['task_details'];
            } ?>
            <tr>
            <td style="display: none;" id="reftaskdesc-<?php echo $todaytask['task_id']; ?>"><?php echo $todaytask['task_description']; ?></td>
              <td  class="equal-width1" id="reftaskowner-<?php echo $todaytask['task_id']; ?>"><?php echo $todaytask['task_owner']; ?></td>
              <td class="equal-width1" id="reftasktdeadline-<?php echo $todaytask['task_id']; ?>"><?php echo date('m/d/Y',strtotime($todaytask['task_deadline'])); ?></td>
              <td class="equal-width" id="reftaskprovider-<?php echo $todaytask['task_id']; ?>"><?php if(strlen($todaytask['provider']) > 20){ $small = substr($todaytask['provider'], 0, 20); echo $small."......."; }else{ echo $todaytask['provider']; } ?></td>
              <td class="equal-width" id="reftasktype-<?php echo $todaytask['task_id']; ?>"><?php echo $todaytask['task_type']; ?></td>
              <td  class="equal-width1" id="reftaskstatus-<?php echo $todaytask['task_id']; ?>"><?php echo $todaytask['task_status']; ?></td><td><a class="right-link" href="javascript:void(0)" data-toggle="modal"  data-target="#myTaskModal" onclick="getPatientRefTask('<?php echo $todaytask['task_id']; ?>')"  >See More &nbsp;&nbsp; <i class="fa fa-angle-double-right " aria-hidden="true"></i></a></td>
            </tr>
          </tbody>
        </table>

      </div>

    
    
    </span></td>
   	</tr>	
    <?php	} }else{ ?>
    <tr><td><p>No task available for today </p></td></tr>
   <?php } ?>
   </tbody>
   </table>
   
</div>
<h6 class="accordion"><i class="fa fa-sort-desc" aria-hidden="true"></i>&nbsp;Upcoming & Past</h6>
<div class="panel">

  <table class="table table-striped">
  <tbody>
  <?php
   if(!empty($upcomingTasks)){
    $past = 0;
   	foreach ($upcomingTasks as $upcomingkey => $upcomingvalue) { 
      $currentdate = date('Y-m-d');
      if(strtotime($currentdate) > strtotime($upcomingvalue['task_date'])){
        $past = 1;
      }else{ $past = 0; }
      
       ?>
      
   	<tr <?php if($past == 1){ ?> style="background-color:#ffe6e6;" <?php } ?>><td><span><i class="fa fa-check-circle" aria-hidden="true"></i><span class="text-value"><?php echo $upcomingvalue['patient']; ?></span><span class="text-date"> <?php echo date('m/d/Y' ,strtotime($upcomingvalue['task_date'])); ?></span>
    <span class="accordion"><i class="fa fa-angle-double-right upcoming-right" aria-hidden="true"></i></span>  
      <div class="panel">
        <table class="table table-striped">
          <tbody>
            <?php 
             $upcomingtaskData = gettaskdetails($email,$upcomingvalue['task_id']);
             if(!empty($upcomingtaskData['status'] == 'ok')){
               $upcomingtask  = $upcomingtaskData['task_details'];
             } 
            ?>
            <tr>
            <td style="display: none;" id="reftaskdesc-<?php echo $upcomingtask['task_id']; ?>"><?php echo $upcomingtask['task_description']; ?></td>
              <td class="equal-width1" id="reftaskowner-<?php echo $upcomingtask['task_id']; ?>"><?php echo $upcomingtask['task_owner']; ?></td>
              <td class="equal-width1" id="reftasktdeadline-<?php echo $upcomingtask['task_id']; ?>"><?php echo date('m/d/Y',strtotime($upcomingtask['task_deadline'])); ?></td>
              <td class="equal-width" id="reftaskprovider-<?php echo $upcomingtask['task_id']; ?>">
                <?php if(strlen($upcomingtask['provider']) > 20){ $small = substr($upcomingtask['provider'], 0, 20); echo $small."......."; }else{ echo $upcomingtask['provider']; } ?>
                
              </td><td class="equal-width" id="reftasktype-<?php echo $upcomingtask['task_id']; ?>"><?php echo $upcomingtask['task_type']; ?></td>
              <td class="equal-width1" id="reftaskstatus-<?php echo $upcomingtask['task_id']; ?>"><?php echo $upcomingtask['task_status']; ?></td>
              <td><a class="right-link" href="javascript:void(0)" data-toggle="modal"  data-target="#myTaskModal" onclick="getPatientRefTask('<?php echo $upcomingtask['task_id']; ?>')"  >See More &nbsp;&nbsp; <i class="fa fa-angle-double-right " aria-hidden="true"></i></a></td>
            </tr>
          </tbody>
        </table></span></td>
   	</tr>	
    <?php	} }else{ ?>
    <tr><td><p>No task available for upcoming </p></td></tr>
   <?php } ?>
   </tbody>
   </table>
</div>
<br>
<p><b><i class="fa fa-sort-desc" aria-hidden="true"></i>&nbsp;Inbox</b></p>
<h6 class="accordion"><i class="fa fa-sort-desc" aria-hidden="true"></i>&nbsp;New</h6>
<div class="panel">
  <p>Data not available...</p>
</div>
<h6 class="accordion"><i class="fa fa-sort-desc" aria-hidden="true"></i>&nbsp;Messages</h6>
<div class="panel">
  <table class="table table-striped">
  <tbody>
  <?php
   if(!empty($message)){
    foreach ($message as $messagekey => $messagevalue) { ?>
    <tr><td><span><i class="fa fa-check-circle" aria-hidden="true"></i><span class="text-value"><?php if(strlen($messagevalue['message']) > 70){ $small = substr($messagevalue['message'], 0, 70); echo $small."......."; }else{ echo $messagevalue['message']; } ?></span><span class="text-date"> <?php echo date('m/d/Y', strtotime($messagevalue['created_at'])); ?></span><?php if(strlen($messagevalue['message']) > 70){   ?><span class="accordion"> <?php } ?><i class="fa fa-angle-double-right upcoming-right" aria-hidden="true"></i><?php if(strlen($messagevalue['message']) > 70){ ?></span> <?php } ?>
      <div class="panel"><?php echo $messagevalue['message']; ?></span></td></div></tr> 
    <?php } }else{ ?>
    <tr><td><p>No message available</p></td></tr>
   <?php } ?>
   </tbody>
   </table>
</div>
<h6 class="accordion"><i class="fa fa-sort-desc" aria-hidden="true"></i>&nbsp;Notifications</h6>
<div class="panel">
    <table class="table table-striped">
  <tbody>
  <?php
   if(!empty($notification)){
    foreach ($notification as $notificationkey => $notificationvalue) { ?>
     <tr><td><span><i class="fa fa-check-circle" aria-hidden="true"></i><span class="text-value"><?php if(strlen($notificationvalue['notificaiton_message']) > 70){ $small = substr($notificationvalue['notificaiton_message'], 0, 70); echo $small."......."; }else{ echo $notificationvalue['notificaiton_message']; } ?></span><span class="text-date"> <?php echo date('m/d/Y', strtotime($notificationvalue['notification_date'])); ?></span><?php if(strlen($notificationvalue['notificaiton_message']) > 70){   ?><span class="accordion"> <?php } ?><i class="fa fa-angle-double-right upcoming-right" aria-hidden="true"></i><?php if(strlen($notificationvalue['notificaiton_message']) > 70){ ?></span> <?php } ?>
      <div class="panel"><?php echo $notificationvalue['notificaiton_message']; ?></span></td></div></tr> 
    <?php } }else{ ?>
    <tr><td><p>No notification available</p></td></tr>
   <?php } ?>
   </tbody>
   </table>
</div>

<br>
<p><b><i class="fa fa-sort-desc" aria-hidden="true"></i>&nbsp;Referrals</b></p>
<h6 class="accordion"><i class="fa fa-sort-desc" aria-hidden="true"></i>&nbsp;New</h6>
<div class="panel">
   <table class="table table-striped">
  <tbody>
  <?php
   if(!empty($newReferral)){
    foreach ($newReferral as $newreferralkey => $newreferralvalue) { ?>
    <tr><td><p><i class="fa fa-check-circle" aria-hidden="true"></i> <b>Client : </b><?php echo $newreferralvalue['ref_patient']; ?><span class="text-date"><?php echo date('m/d/Y' ,strtotime($newreferralvalue['date'])); ?></span><span class="accordion"><i class="fa fa-angle-double-right" aria-hidden="true"></i></span></p></td>
    </tr> 
    <?php } }else{ ?>
    <tr><td><p>No new referral available</p></td></tr>
   <?php } ?>
   </tbody>
   </table>
</div>
<h6 class="accordion"><i class="fa fa-sort-desc" aria-hidden="true"></i>&nbsp;Pending</h6>
<div class="panel">
  <table class="table table-striped">
  <tbody>
  <?php
   if(!empty($pendingReferral)){
    foreach ($pendingReferral as $pendingReferralkey => $pendingReferralvalue) { ?>
    <tr><td><span><i class="fa fa-check-circle" aria-hidden="true"></i> <b>Client : </b><?php echo $pendingReferralvalue['ref_patient']; ?> <span class="text-date"><?php echo date('m/d/Y',strtotime($pendingReferralvalue['date'])); ?></span><span class="accordion"><i class="fa fa-angle-double-right upcoming-right" aria-hidden="true"></i></span>
    <div class="panel">
        <table class="table table-striped">
          <tbody>
            <?php 
            $pendingRefData = getreferraldetails($email,$pendingReferralvalue['ref_id']);
            if(!empty($pendingRefData['status'] == 'ok')){
              $pendingRef  = $pendingRefData['referral_details'];
            } ?>
            <tr>
            <td style="display: none;" id="reftaskdesc-<?php echo $pendingRef['referral_id']; ?>"><?php echo $pendingRef['referral_description']; ?></td>
              <td  class="equal-width" id="reftaskowner-<?php echo $pendingRef['referral_id']; ?>"><?php echo $pendingRef['referral_name']; ?></td><td class="equal-width" id="reftasktdeadline-<?php echo $pendingRef['referral_id']; ?>"><?php echo date('m/d/Y',strtotime($pendingRef['due_date'])); ?></td><td class="equal-width1" id="reftaskprovider-<?php echo $pendingRef['referral_id']; ?>"><?php echo $pendingRef['source']; ?></td><td class="equal-width1" id="reftasktype-<?php echo $pendingRef['referral_id']; ?>"><?php echo $pendingRef['urgency']; ?></td>
            </tr>
          </tbody>
        </table>

      </div>
    </span></td>
    </tr> 
    <?php } }else{ ?>
    <tr><td><p>No new pending available</p></td></tr>
   <?php } ?>
   </tbody>
   </table>
</div>
<h6 class="accordion"><i class="fa fa-sort-desc" aria-hidden="true"></i>&nbsp;Active</h6>
<div class="panel">
  <table class="table table-striped">
  <tbody>
  <?php
   if(!empty($activeReferral)){
    foreach ($activeReferral as $activeReferralkey => $activeReferralvalue) { ?>
    <tr><td><p><i class="fa fa-check-circle" aria-hidden="true"></i> <b>Client : </b><?php echo $activeReferralvalue['ref_patient']; ?><span class="text-date"> <?php echo date('m/d/Y' ,strtotime($activeReferralvalue['date'])); ?></span><i class="fa fa-angle-double-right" aria-hidden="true"></i></p></td>
    </tr> 
    <?php } }else{ ?>
    <tr><td><p>No new active available</p></td></tr>
   <?php } ?>
   </tbody>
   </table>
</div>
</form>
<?php }else{ ?>
<div class="alert alert-danger alert-dismissible">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<strong><?php echo $msg; ?></strong> 
</div>
<?php } ?>
</div>
<?php if($error == 0){ ?>
  
  
</div>

          </div>
					</div>
<div class=" referral-main">
    <h1>Incoming Referral</h1>
<div class="col-md-12 border mr-b" >
	<div class="row">
   <table class="table table-striped" id="example1"  class="display" cellspacing="0" width="100%">
  
  <thead>
    <tr>
      <th>Application Name</th>
      <th>Description</th>
      <th>Status</th>
      <th>&nbsp;</th>
    </tr>
  </thead>
  <tbody>
  <?php
   if(!empty($incomingreferral)){
    foreach ($incomingreferral as $incomingreferralkey => $incomingreferralvalue) { ?>
    <tr>
    <td><?php echo $incomingreferralvalue['referred_from']; ?></td>
    <td><?php echo $incomingreferralvalue['task_description']; ?></td>
    <td><?php echo $incomingreferralvalue['status']; ?></td>
    <td><?php  if($incomingreferralvalue['status'] == 'Pending'){  ?> <a href="javascript:void(0)" onclick="acceptreferralopolicy('<?php echo $incomingreferralvalue['external_application_id']; ?>','<?php echo $incomingreferralvalue['task_id']; ?>')">Accept Referral</a> <?php } ?></td>   
    </tr> 
    <?php } }else{ ?>
    <tr><td><p>No incoming referral available</p></td></tr>
   <?php } ?>
   </tbody>
   </table>
</div>
</div>




<h1>Outgoing Referral</h1>

<div class="col-md-12 border" >
	<div class="row">
   <table class="table" id="example">
  
  <thead>
    <tr>
      <th>Application Name</th>
      <th>Description</th>
      <th>Status</th>
    </tr>
  </thead>
  <tbody>
  <?php
   if(!empty($outgoingreferral)){
    foreach ($outgoingreferral as $outgoingreferralkey => $outgoingreferralvalue) { ?>
    <tr>
      <td><?php echo $outgoingreferralvalue['referred_to']; ?></td>
      <td><?php echo $outgoingreferralvalue['task_description']; ?></td>
      <td><?php echo $outgoingreferralvalue['status']; ?></td> 
    </tr> 
    <?php } }else{ ?>
    <tr><td><p>No outgoing referral available</p></td></tr>
   <?php } ?>
   </tbody>
   </table>
</div>
</div>
<?php } ?>
  <?php //get_sidebar(); ?>
  </div>


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
                    <input type="text" class="form-control datepicker" placeholder="Deadline" name="task_deadline" id="edit_task_deadline"  value="" />
                    <span class="input-group-addon button-posi">
                        <span class="glyphicon glyphicon-calendar "></span>
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
                   <span class="input-group-addon button-posi">
                        <span class="glyphicon glyphicon-search"></span>
                    </span>

              </div>
              <div class="col-md-6">
               <label>Owner</label>
                   <select class="form-control" name="task_owner"  id="edit_task_owner">
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

<script src="https://code.jquery.com/jquery-3.3.1.js"></script> 

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
 

 
<script type="text/javascript">
jQuery(document).ready(function() {
    jQuery('#example').DataTable();
} );

jQuery(document).ready(function() {
    jQuery('#example1').DataTable();
} );


</script>

<script type="text/javascript">
    jQuery(function () {
      jQuery(".datepicker").datepicker({ dateFormat: "yy-mm-dd" });
    });
</script>


<script>

var ajax_url = "<?php echo '/ajax.php'; ?>";
var upload_ajax_url = "<?php echo '/upload_ajax_url.php'; ?>";

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}


function getPatientRefTask(taskid){
  var taskdate = document.getElementById( 'reftasktdeadline-'+taskid ).textContent;
  var dateAr = taskdate.split('/');
  var newDate = dateAr[2] + '-' + dateAr[0] + '-' + dateAr[1];
  // alert(newDate);
  
  var patientstatus = document.getElementById( 'reftaskstatus-'+taskid ).textContent;
  document.getElementById("edit_task_id").value = taskid;
   document.getElementById("edit_task_type").value = document.getElementById ( 'reftasktype-'+taskid ).textContent;
   document.getElementById("edit_task_provider").value = document.getElementById( 'reftaskprovider-'+taskid ).textContent;
   document.getElementById("edit_task_owner").value = document.getElementById( 'reftaskowner-'+taskid ).textContent;
   document.getElementById("edit_task_desc").value = document.getElementById( 'reftaskdesc-'+taskid ).textContent;
   document.getElementById("edit_task_deadline").value = newDate;
   document.getElementById("edit_task_status").value = patientstatus;
   //alert(patientstatus);
   
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
   // var referralid  = document.getElementById("taskrefiid").value;
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
                location.reload();
                //getReferralTask(referralid);
                //jQuery('#edittaskclose').click();
                
              }else{
                alert('Error ! Please try again ');
              }
              
            }
          });

}

  function searchprovider(iid){
    var zipcode = '<?php echo $patinetZip; ?>';
    document.getElementById("assignprovidertab").value = iid;
    getserviceprovide(zipcode);
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

    function acceptreferralopolicy(application_id,task_id) {

      if (confirm('Are you sure to Accept this Referral ?')) {
         // alert('application_id :'+application_id);
         // alert('task_id :'+task_id);
        jQuery.ajax({
          url: ajax_url,
          type:'POST',
          cache: false,
          data : {'external_application_id':application_id,'task_id':task_id,funtion:'acceptreferralbyclient'},
          success: function(res){
           // console.log(res);
            if(res == 11){
              alert('Patient and Task were transferred successfully');
              location.reload();
            }else{
              alert('Something error');
            }
          }
        });
      } else {
          return false;
      }
    }


  </script>



