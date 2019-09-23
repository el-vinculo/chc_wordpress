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

<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<style type="text/css">
  .green-bg{
    background: #43b02a;
  }
  .ref-cls .green-bg{
background: #43b02a!important;
  }
 .green-bg th {
    padding: 5px 10px;
    border-right: 1px solid #fff;
    font-size: 15px;
    color: #fff;
}
  .margin_left {
    margin-left: 17px;
}
  div#commmsgdiv ul {
    height: 350px;
    overflow-y: scroll;
}
 .panel a {
    text-decoration: none;
    color: #00aec7!important;
    font-weight: bold;
}
 
 a:hover, a:focus{
   text-decoration: none!important;
    color: #43b028!important;
}
  body{
       font-family: 'Montserrat', sans-serif;
 
  }
  h5.blue-font.accordion i {
    font-size: 25px;
    padding-top: 0;
    top: -3px;
}
  .complete{
    display:none;
}
  .single_gallery_item, .single_item_referal, .single_item_client{
    display: none;
  }

  .right-text{
    text-align: right;
  }
  .equal-width3{
    width: 54%;
  }
  select {
    border: 0;
}
  .btn-request {
    margin-left: 5px;
    border-radius: 10px;
    font-size: 13px;
}
  .black-font{
           font-family: 'Montserrat', sans-serif;
           font-size: 18px!important;
           color: #242424!important;
           font-weight: 400;


  }

  .green-text {
    color: #333333;
}
.red-text{
  color: red;
}
.blue-text {
    color: #00aec7;
    padding: 0 10px;
    font-weight: 600;
}
.blue-fonts a {
    font-size: 16px;
    padding-bottom: 8px;
    color: #00aec7!important;
    font-weight: normal;
    font-family: 'Montserrat', sans-serif;
}
  .blue-font{
    font-size:25px;
    padding-bottom: 8px;
    color: #00aec7!important;
    font-weight: 400;
    font-family: 'Montserrat', sans-serif;
  }
	.equal-width {
    width: 24%;
}
.border-right{
  border-right: 0!important;
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
      font-family: 'Montserrat', sans-serif;

	margin-bottom: 0!important;
}
.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    padding: 10px 15px;
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
      font-family: 'Montserrat', sans-serif;

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
    position: absolute;
    right: 25px;
    top: 11px;
    text-align: right;
}
.green-text{
  color: #43b028;
}
.upcoming-right i.fa.fa-angle-right {
    padding-left: 10px;
}
td{
  position: relative;
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
      font-family: 'Montserrat', sans-serif;

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
i.fa.fa-sort-desc {
    top: -1px;
    position: relative;
    transform: rotateZ(-90deg);
    padding-right: 5px;
    font-size: 20px;
}
.accordion.active i {
    transform: rotateZ(-359deg)!important;
    top: -3px!important;
}
.panel table tbody tr td{
  padding: 10px;
}
.gray-text {
    color: #848282;
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
   // $mytasksdata = mytasks($email);
    $inboxdata = inbox($email);
    $notificationdata = notification($email);
    $referraldata = referralDasboard($email);
    //$referraldata = referralList($email);
  	if(!empty($mytasksdata['status'] == 'ok')){
  	  	$todayTasks = $mytasksdata['today_array'];
  	  	$upcomingTasks = $mytasksdata['upcoming_array'];

  	}else{
  	  	$error = 0;
  	    $msg   = $mytasksdata['status']. ' ! '. $mytasksdata['message'];
  	}
    
    /* ------------ Notification --------------------- */
    if(!empty($notificationdata['status'] == 'ok')){
        $notification = $notificationdata['notification_array'];
    }else{
        $error = 0;
        $msg   = $notificationdata['status']. ' ! '. $notificationdata['message'];
    }
    /* ------------------------------------------ */
    
    /* ------------ Message --------------------- */
    if(!empty($inboxdata['status'] == 'ok')){
        $message = $inboxdata['message_array'];
        
    }else{
        $error = 0;
        $msg   = $inboxdata['status']. ' ! '. $inboxdata['message'];
        $message = array();
    }

   // echo "<pre>";
    //print_r($message); die;  

    /* ------------------------------------------ */


    if(!empty($referraldata['status'] == 'ok')){
        $newReferral = $referraldata['new_referral_array'];
        $activeReferral = $referraldata['active_referral_array'];
        $pendingReferral = $referraldata['pending_referral_array'];
    }else{
        $error = 0;
        $msg   = $referraldata['status']. ' ! '. $referraldata['message'];
    }



//echo "<pre>";
//print_r($referraldata); die; 


    /* ------------ Owner List --------------------- */
   /* $ownerdata = ownerlist($email);
    if(!empty($ownerdata['status'] == 'ok')){
      $ownerList  = $ownerdata['users_data'];
      $owners = array_column($ownerList, 'name');
      $owners = array_filter($owners);
    }*/
    /* -------------------------------------------------*/

    /* ------------ Task Status List --------------------- */
   /* $taskstatusdata = taskstatus($email);
    if(!empty($taskstatusdata['status'] == 'ok')){
      $taskstatus  =  $taskstatusdata['status_array'];
    }*/
    /* -------------------------------------------------*/
    
    /* ------------ Incoming Referral List --------------------- */
    $application_id = '5ae781855fd8db064ba82113';
    $incomingreferraldata = incomingReferral($email,$application_id);
    if(!empty($incomingreferraldata['status'] == 'ok')){
      $incomingreferral  =  $incomingreferraldata['incoming_referrals'];
    }
    /* -------------------------------------------------*/


    /* ------------ Outgoing Referral List --------------------- */
   /* $application_id = '5ae781855fd8db064ba82113';
    $outgoingreferraldata = outgoingReferral($email,$application_id);
    if(!empty($outgoingreferraldata['status'] == 'ok')){
      $outgoingreferral  =  $outgoingreferraldata['outgoing_referrals'];
    }*/

    //echo "<pre>";
   // print_r($incomingreferral); die; 
    /* -------------------------------------------------*/
    
    /* ------------ Client List --------------------- */
    $patientdata = patientlist($email,$search);
    if(!empty($patientdata['status'] == 'ok')){
       $patients = $patientdata['patients_details'];
      // $patients = array_slice($patients_output, 0, 5);
       //asort($patients);
    }else{
      $error = 1;
      $patients = array();
    }

   
    /* -------------------------------------------------*/

 /* if(!empty($pendingReferral)){
    foreach ($pendingReferral as $pendingReferralkey => $pendingReferralvalue) { 
        $pendingReferral[$pendingReferralkey]['taskdetails'] = getreferraldetails($email,$pendingReferralvalue['ref_id']);
    }
  }*/

  if(!empty($newReferral)){
    foreach ($newReferral as $newReferralkey => $newReferralvalue) { 
        $newReferral[$newReferralkey]['taskdetails'] = getreferraldetails($email,$newReferralvalue['ref_id']);
    }
  }

  if(!empty($incomingreferral)){
    foreach ($incomingreferral as $incomingreferralkey => $incomingreferralvalue) { 
        $incomingreferral[$incomingreferralkey]['taskdetails'] = gettaskdetails($email,$incomingreferralvalue['task_id']);
         /*$incomingreferral[$incomingreferralkey]['taskdetails'] = getreferraldetails($email,$incomingreferralvalue['ref_id']);*/
    }
  }

 //echo "<pre>";
//print_r($newReferral); die; 

  

    

}else{
	$error = 1;
	$msg   = 'unauthorized ! you have to login';
}
get_header(); 
//get_template_part('cover');
?>

<div class="container-fluid space">
	<div class="container blogs">
	  <div class=" rightside">
	    <div class="post-73 page type-page status-publish hentry">	
			<div class="row post-area">
	      <div class="post-73 page type-page status-publish hentry">
					<div class=" ">
				   <!--  <div class="line"></div> -->
				      <?php if($error == 0){ ?>
                <!-- <div class="post_title"><h3>Dashboard</h3></div> -->
			            <div class="post-tags"></div>
                    <div class="post-content">

                      <h5 class="accordion blue-font"><i class="fa fa-sort-desc" aria-hidden="true"></i><b>&nbsp;My Works</b></h5>
<div class="panel collapse in">
   <div class="margin_left">
<h6 class="accordion black-font"><i class="fa fa-sort-desc" aria-hidden="true"></i>&nbsp;Active Referrals 
</h6>
<div class="panel ">
        <table class="table table-striped">
          <tbody>
            <thead>
            <tr class="green-bg">
              <th>Patient<br> Last, First</th>
              <th>160 char. of summary</th>
              <th>Submission date </th>
              <th>Source</th>
              <th>Urgency</th>
              <th>Status </th>
              <th>Follow-up date</th>
              <th>Agreement/<br>Notif.flag</th>
              <th>Lead<br> Navigator</th>
            </tr> 
            </thead>
            <?php
            if(!empty($newReferral)){
              foreach ($newReferral as $newReferralDatakey => $newReferralDatavalue) {
                ?>
            
             <tr class="single_item_referal">
              <td ><?php echo $newReferralDatavalue['ref_patient']; ?> </td>
              <td><?php echo $newReferralDatavalue['ref_description']; ?></td>
              <td ><?php echo date('d/m/y',strtotime($newReferralDatavalue['taskdetails']['referral_details']['due_date'])); ?></td>
              <td ><?php echo $newReferralDatavalue['taskdetails']['referral_details']['source']; ?></td>
              <td><?php echo $newReferralDatavalue['taskdetails']['referral_details']['urgency']; ?></td>
              <td><?php echo $newReferralDatavalue['taskdetails']['referral_details']['status']; ?></td>
              <td > <?php echo date('d/m/y',strtotime($newReferralDatavalue['taskdetails']['referral_details']['follow_up_date'])); ?></td>
              <td><?php echo $newReferralDatavalue['taskdetails']['referral_details']['agreement_notification_flag']; ?></td>
              <td >
                 <a target="_blank" href="<?php echo site_url().'/patients/referral-details?refid='.base64_encode($newReferralDatavalue['ref_id']);?>"><span class="blue-text" >See More&nbsp;&nbsp; </span></a> 
              </td>
              
            </tr>

            <?php }}?>
           <!--  <tr >
              <td>
              <div class="collapse" id="collapseExample">
                   <h6 class=" blue-font"><b><i class="fa fa-sort-desc" aria-hidden="true"></i>&nbsp;Clients Task</b></h6>
                  </div>
            </td></tr> -->
 <tr><td colspan="10"> <a href="javascript:void(0)" id="viewmore_referal">View More</a></td></tr>

          </tbody>
        </table>
       </div>
<h6 class="accordion black-font"><i class="fa fa-sort-desc" aria-hidden="true"></i>&nbsp;Referral Requests
</h6>
<div class="panel">
  <table>
    <tbody>
        <thead class="ref-cls">
           <tr class="green-bg">
              <th>Patient<br> Last, First</th>
              <th>Request Title </th>
              <th>Submission date </th>
              <th>Source</th>
              <th>Urgency</th>
              <th>Status </th>
              <th>Follow-up date</th>
              <th>Agreement<br>flag</th>
              <th>Action buttons/<br>icons</th>
            </tr> 
      </thead>
    </tbody>
  </table>
  <table class="table table-striped">
  <tbody>
     
   <?php
  if(!empty($incomingreferral)){
    foreach ($incomingreferral as $requestreffkey => $requestreffvalue) { 
       if($requestreffvalue['status'] == 'Pending'){
      ?>
    

    <tr>
      
      <td>
      <span><i class="fa fa-check-circle"></i>Requests From : <?php echo $requestreffvalue['referred_from']; ?> </span>
      
      <span class="accordion upcoming-right"><span class="green-text" ><?php echo date('d/m/y' ,strtotime($requestreffvalue['taskdetails']['task_details']['task_deadline'])); ?></span><i class="fa fa-angle-right" aria-hidden="true"></i></span> 
      <div class="panel">
        <table>
          <tbody>
            <tr>
              <td ><?php echo $requestreffvalue['taskdetails']['task_details']['task_type']; ?></td>
              <td ><?php echo date('d/m/y' ,strtotime($requestreffvalue['taskdetails']['task_details']['task_deadline'])); ?> </td>
              <td >11/30/18</td>
              <td ><?php echo $requestreffvalue['taskdetails']['task_details']['task_owner']; ?></td>
              <td ><a href="javascript:void(0)" onclick="acceptreferralopolicy('<?php echo $requestreffvalue['external_application_id']; ?>','<?php echo $requestreffvalue['taskdetails']['task_details']['task_id']; ?>')"><button class="btn-primary btn-request">Accept</button></a>

              <button class=" btn-danger btn-request">Reject</button> <!-- <button class=" btn-success btn-request">Transfer</button> --> </td>
              <!--  <td ><input type="text" width="100%"></td> -->
            </tr>
          </tbody>
        </table>
      </div>
    </td></tr>

    <?php } }} ?>

  </tbody>
</table>
</div>

<h6 class="accordion black-font"><i class="fa fa-sort-desc" aria-hidden="true"></i>&nbsp;Copied Referrals 
</h6>
<div class="panel">
<span style="color: red;"><center>No Copied Referrals  found</center></span>
        <!-- <table>
          <tbody>
            <tr>
              <td ><i class="fa fa-check-circle"></i> Joy Givvens </td>
              <td >10/27/2018 [Created] </td>
              <td >11/30/18 [Due]</td>
              <td >Referral ID: 667-123 </td>
              <td><select>
                <option>Pending</option>
                 <option>Complete</option>
              </select></td>
              <td>Subreferral: Dentrix </td>
              <td >
                 <a data-toggle="collapse" href="#collapseExample1"><span class="blue-text" >See More&nbsp;&nbsp; </span><i class="fa fa-angle-double-right" aria-hidden="true"></i></a> 
              </td>
            </tr>
            <tr >
              <td>
              <div class="collapse" id="collapseExample1">
                   <h6 class=" blue-font"><b><i class="fa fa-sort-desc" aria-hidden="true"></i>&nbsp;Clients Task</b></h6>
                  </div>
            </td></tr>
          </tbody>
        </table> -->
       </div>

</div></div><br>
                    <h5 class=" blue-font accordion"><i class="fa fa-sort-desc" aria-hidden="true"></i>&nbsp;<b>My Communications</b></h5>
                    <div class="panel collapse in">
                      <div class="margin_left">
                    <h6 class="accordion black-font" ><i class="fa fa-sort-desc" aria-hidden="true"></i>&nbsp;Client Messages</h6>
 
                        
<div class="panel">
  <table class="table table-striped">
  <tbody>
   
    <?php
   if(!empty($message)){
    foreach ($message as $messagekey => $messagevalue) { 
      $messgae_ids = $messagevalue['msg_id'];
      $task_id = $messagevalue['task_id'];
      $patient_id = $messagevalue['patient_id'];
       ?>
    <tr class="single_gallery_item"><td class="border-right">
      <p><?php if(strlen($messagevalue['message']) > 40){ $small = substr($messagevalue['message'], 0, 40); echo $small; }else{ echo $messagevalue['message']; } ?> 

      <?php if(strlen($messagevalue['message']) > 40){ ?> <span class="more-text hide"><?php echo substr($messagevalue['message'],40); ?></span> <a data-show="more" more-collapse="false" href="/" class="showmore">...View More</a> <?php } ?>&nbsp; &nbsp;
      </p></td>

      <td class="border-right"> <span><a href="javascript:void(0)" data-toggle="modal"  data-target="#myCommMsgModal" onclick="replysection('<?php echo $messgae_ids; ?>','<?php echo $task_id; ?>','<?php echo $patient_id; ?>')"   ><small>REPLY</small></a></span></td>
      <td class="equal-width">
     


      &nbsp;&nbsp;&nbsp;<span class="upcoming-right"><a target="_blank" href="<?php echo site_url().'/patients/patient-details?pid='.base64_encode($patient_id);?>"  title="Patients-details"><?php echo date('m/d/Y h:i:s', strtotime($messagevalue['created_at'])); ?></a><i class="fa fa-angle-right  " aria-hidden="true"></i></span> </td>


     <!--  <div class="panel">
        <table>
          <tbody>
            <tr>
              <td class="equal-width">Eric Hummel</td>
              <td class="equal-width">01/01/1970</td>
              <td class="equal-width1">Appointment</td>
              <td class="equal-width1">pending</td>
              <td ><a class="right-link" href="javascript:void(0)" data-toggle="modal"  data-target="#myTaskModal"  >See More &nbsp;&nbsp; <i class="fa fa-angle-double-right " aria-hidden="true"></i></a> </td>

            </tr>
          </tbody>
        </table>
      </div> -->
   </tr>

    <?php } } ?>
    

    <tr><td class="border-right" colspan="3"> <a href="javascript:void(0)" id="viewmore">View More</a></td></tr>
  </tbody>
</table>
</div>
<h6 class="accordion black-font"><i class="fa fa-sort-desc" aria-hidden="true"></i>&nbsp;Provider Messages
</h6>
<div class="panel">
  <table class="table table-striped">
  <tbody>
    <!-- <tr><td>
      <span><i class="fa fa-check-circle"></i>Dental Link is no longer accepting BCBS, please update this info in your system</span>

      <span class="accordion upcoming-right"><span class="green-text" >Today</span><i class="fa fa-angle-right  " aria-hidden="true"></i></span> 
      <div class="panel">
        <table>
          <tbody>
            <tr>
              <td class="equal-width">Eric Hummel</td>
              <td class="equal-width">01/01/1970</td>
              <td class="equal-width1">Appointment</td>
              <td class="equal-width1">pending</td>
              <td ><a class="right-link" href="javascript:void(0)" data-toggle="modal"  data-target="#myTaskModal"  >See More &nbsp;&nbsp; <i class="fa fa-angle-double-right " aria-hidden="true"></i></a> </td>
            </tr>
          </tbody>
        </table>
       </div>
</td>
</tr> 
<tr><td>
      <span><i class="fa fa-check-circle"></i>Dental Link is no longer accepting BCBS, please update this info in your system</span>

      <span class="accordion upcoming-right"><span class="blue-text">Service Provider</span><span class="green-text">Read </span><i class="fa fa-angle-right  " aria-hidden="true"></i></span> 
      <div class="panel">
        <table>
          <tbody>
            <tr>
              <td class="equal-width">Eric Hummel</td>
              <td class="equal-width">01/01/1970</td>
              <td class="equal-width1">Appointment</td>
              <td class="equal-width1">pending</td>
              <td ><a class="right-link" href="javascript:void(0)" data-toggle="modal"  data-target="#myTaskModal"  >See More &nbsp;&nbsp; <i class="fa fa-angle-double-right " aria-hidden="true"></i></a> </td>
            </tr>
          </tbody>
        </table>
       </div>
</td>
</tr>-->
 <tr>
  <span style="color: red;"><center>No Provider Messages</center></span>
  </tr>
  </tbody>
</table>
</div>
<!-- <h6 class="accordion black-font"><i class="fa fa-sort-desc" aria-hidden="true"></i>&nbsp;Referral Requests
</h6> -->
<div class="panel">
  <table class="table table-striped">
  <tbody>
 <!--  <?php
  if(!empty($incomingreferral)){
    foreach ($incomingreferral as $requestreffkey => $requestreffvalue) { ?>
    

    <tr><td>
      <span><i class="fa fa-check-circle"></i>Requests From : <?php echo $requestreffvalue['referred_from']; ?> </span>
      
      <span class="accordion upcoming-right"><span class="green-text" >Yesterday</span><i class="fa fa-angle-right" aria-hidden="true"></i></span> 
      <div class="panel">
        <table>
          <tbody>
            <tr>
              <td ><?php echo $requestreffvalue['taskdetails']['task_details']['task_type']; ?></td>
              <td ><?php echo date('d/m/y' ,strtotime($requestreffvalue['taskdetails']['task_details']['task_deadline'])); ?> </td>
              <td >11/30/18</td>
              <td ><?php echo $requestreffvalue['taskdetails']['task_details']['task_owner']; ?></td>
              <td ><button class="btn-primary btn-request">Accept</button><button class=" btn-danger btn-request">Reject</button> <button class=" btn-success btn-request">Transfer</button> </td>
               <td ><input type="text" width="100%"></td>
            </tr>
          </tbody>
        </table>
      </div>
    </td></tr>

    <?php }} ?> -->


  </tbody>
</table>
</div>
<h6 class="accordion black-font"><i class="fa fa-sort-desc" aria-hidden="true"></i>&nbsp;Notifications
</h6>
<div class="panel">
  <table class="table table-striped">
  <tbody>
   
<?php
   if(!empty($notification)){
    foreach ($notification as $notificationkey => $notificationvalue) {
    if(strtotime($notificationvalue['notification_date']) == strtotime(date('Y-m-d h:i:s'))){
        $spanclass = 'green-text';
        $spantext = 'Today';
      }else{
        $spanclass = 'red-text';
        $spantext = 'Overdue';
      }  ?>
<tr><td>
      <span><i class="fa fa-check-circle"></i><?php if(strlen($notificationvalue['notificaiton_message']) > 70){ $small = substr($notificationvalue['notificaiton_message'], 0, 70); echo $small."......."; }else{ echo $notificationvalue['notificaiton_message']; } ?></span>

      <span class="accordion upcoming-right"><span class="<?php echo $spanclass; ?>"><?php echo $spantext; ?>  </span><i class="fa fa-angle-right  " aria-hidden="true"></i></span> 
      <!-- <div class="panel">
        <table>
          <tbody>
            <tr>
              <td class="equal-width">Eric Hummel</td>
              <td class="equal-width">01/01/1970</td>
              <td class="equal-width1">Appointment</td>
              <td class="equal-width1">pending</td>
              <td ><a class="right-link" href="javascript:void(0)" data-toggle="modal"  data-target="#myTaskModal"  >See More &nbsp;&nbsp; <i class="fa fa-angle-double-right " aria-hidden="true"></i></a> </td>
            </tr>
          </tbody>
        </table>
       </div> -->
</td>
</tr> 
<?php }}else{ ?>
<span style="color: red;"><center>No Notification found</center></span>
<?php } ?>
  </tbody>
</table>
</div>
</div>
</div>

<br>
<!-- <p><b><i class="fa fa-sort-desc" aria-hidden="true"></i>&nbsp;My Clients</b></p>
 --><h5 class="accordion blue-font"><i class="fa fa-sort-desc" aria-hidden="true"></i><b>&nbsp;My Clients</b></h5>

<div class="panel collapse in">
   <div class="margin_left">
        <table>
          <tbody>
          <?php
          if(!empty($patients)){
            foreach ($patients as $patientkey => $patientvalue) { ?>
             
            <tr class="single_item_client">
              <td class="equal-width3"><i class="fa fa-check-circle"></i> Patient: <?php echo $patientvalue['first_name']." ".$patientvalue['last_name']; ?></td>
             <!--  <td class="equal-width gray-text">Nov. 19 (Start Date)  </td> -->
              <td class="blue-fonts equal-width1 right-text"><a target="_blank" href="<?php echo site_url().'/patients/patient-details?pid='.base64_encode($patientvalue['patient_id']);?>"  title="Patients-details">Client Page</a></td>
              </tr>
       <?php   } } ?>
        <tr><td> <a href="javascript:void(0)" id="viewmore_client">View More</a></td></tr>

          </tbody>
        </table>
      </div>
       </div>




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


<div id="myCommMsgModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" id="replybox" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Reply</h4>
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
                 <input type="hidden" class="form-control" placeholder="source" name="msg_reply_task_id" id="msg_reply_task_id" value=""/>
                 <input type="hidden" class="form-control" placeholder="source" name="msg_patient_task_id" id="msg_patient_task_id" value=""/>
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
</div></div>
</div></div>

<?php get_footer(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 

<script src="https://code.jquery.com/jquery-3.3.1.js"></script> 

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>

 <script type="text/javascript">

 jQuery(document).ready(function(){
    jQuery(".single_gallery_item").slice(0, 5).toggle();
   jQuery("#viewmore").click(function(){ 
            jQuery(".single_gallery_item").append(jQuery(".single_gallery_item").slice(0, 5).toggle());
      jQuery(".single_gallery_item").toggle(); 
         $(this).text($(this).text() == 'View More' ? 'View Less' : 'View More');
        if(jQuery(".single_gallery_item").length == 0){ 
           
      }

    });
});


jQuery(document).ready(function(){
    jQuery(".single_item_referal").slice(0, 5).toggle();
   jQuery("#viewmore_referal").click(function(){ 
        jQuery(".single_item_referal").append(jQuery(".single_item_referal").slice(0, 5).toggle()); 

        jQuery(".single_item_referal").toggle(); 
         $(this).text($(this).text() == 'View More' ? 'View Less' : 'View More');
        if(jQuery(".single_item_referal").length == 0){ 
           
        }
    });
});


jQuery(document).ready(function(){
    jQuery(".single_item_client").slice(0, 5).toggle();
    jQuery("#viewmore_client").click(function(){
     jQuery(".single_item_client").append(jQuery(".single_item_client").slice(0, 5).toggle()); 
      jQuery(".single_item_client").toggle(); 
        $(this).text($(this).text() == 'View More' ? 'View Less' : 'View More');
        if(jQuery(".single_item_client").length == 0){ 
           
        }
    });

});
</script>

<script type="text/javascript">
$('[data-show="more"]').on('click', function(event) {
 event.preventDefault();
    if ( $(this).attr('more-collapse') === 'false' ) {     
     $(this).attr('more-collapse', 'true'); 
     $(this).prev('.more-text').removeClass('hide');
     $(this).text('View Less');
    }  else {
         $(this).text('...View More');
         $(this).attr('more-collapse', 'false'); 
         $(this).prev('.more-text').addClass('hide');
    }  
});   
</script>
 
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

function replysection(msg_id,taskid,patientid) {
  $('#msg_task_id').val(msg_id);
  $('#msg_reply_task_id').val(taskid);
  $('#msg_patient_task_id').val(patientid);

  getcommicationmessage(taskid,patientid);
  //msg_task_id
  //alert('hello');
}

function sendmessage(){
  var action = 'sendmeassagetosender';
  var comm_message = document.getElementById("communication_msg").value;
  //var comm_task_id = document.getElementById("msg_task_id").value;
  var comm_task_id = document.getElementById("msg_reply_task_id").value;
  var recipient_id = document.getElementById("msg_patient_task_id").value;
  var recipient_type = 'text';
  var comm_subject  = '';
  jQuery.ajax({
            type: 'post',
            url: ajax_url,
            data: {task_id:comm_task_id,recipient_id:recipient_id,recipient_type:recipient_type,comm_subject:comm_subject,comm_message:comm_message,funtion:action},
            success: function (res) {
              jQuery('#communication_msg').val();
              //console.log(res);
              var trimStr  = $.trim(res);
              if(trimStr == 11){
                
                //alert('message send successfully');

                getcommicationmessage(comm_task_id,recipient_id);
                //getcommicationlist(recipient_id);

              }else{
                alert('Error ! Please try again ');
              }
              
            }
          });
}

function getcommicationmessage(taskid,patient_id) {
  //document.getElementById("msg_task_id").value = taskid;
  //alert(taskid);

  var email = "<?php echo $email; ?>";
  //var patient_id = "5b747d185fd8db1ea26004db";
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
<script type="text/javascript">
  (function() {
  
  $(".panel").on("show.bs.collapse hide.bs.collapse", function(e) {
    if (e.type=='show'){
      $(this).addClass('active');
    }else{
      $(this).removeClass('active');
    }
  });  

}).call(this);
</script>


