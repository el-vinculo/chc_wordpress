<?php

/**
 * Template Name: Request_referral
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
  $application_id = '5ae781855fd8db064ba82113';

  $incomingreferraldata = incomingReferral($email,$application_id);
  if(!empty($incomingreferraldata['status'] == 'ok')){
    $incomingreferral  =  $incomingreferraldata['incoming_referrals'];
  }

  if(!empty($incomingreferral)){
    foreach ($incomingreferral as $incomingreferralkey => $incomingreferralvalue) { 
        $incomingreferral[$incomingreferralkey]['taskdetails'] = gettaskdetails($email,$incomingreferralvalue['task_id']);
         
    }
  }
 
  



  
}else{
  $error = 1;
  $msg   = 'unauthorized ! you have to login';
}

//echo $error."_____"; die; 
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
              <div class="post_title"><h3>Request Referral
                

              </h3></div>
                    <div class="post-tags"></div>
                    <div class="post_content">
                <div class="panel-group" id="accordion">
              
  <div class="row">
  
    <div id="collapseTwo" class="panel-collapse collapse in">
      <div class="panel-body">

         <table class="table table-striped"  >
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
            <?php
  if(!empty($incomingreferral)){
    foreach ($incomingreferral as $requestreffkey => $requestreffvalue) { 
       if($requestreffvalue['status'] == 'Pending'){
      ?>
    
            <tr class="accordion" data-toggle="collapse" data-target="#requestref-<?php echo $requestreffkey; ?>">
              <td ><?php echo $requestreffvalue['patient_name']; ?></td>
              <td ><?php echo $requestreffvalue['ref_name']; ?> </td>
              <td ><?php echo date('d/m/y' ,strtotime($requestreffvalue['taskdetails']['task_details']['task_deadline'])); ?></td>
              <td ><?php echo $requestreffvalue['ref_source']; ?></td>
              <td ><?php echo $requestreffvalue['ref_urgency']; ?></td>
              <td ><?php echo $requestreffvalue['status']; ?></td>
              <td ><?php echo ""; ?></td>
              <td ><?php echo ""; ?></td>
              <td ><a href="javascript:void(0)" onclick="acceptreferralopolicy('<?php echo $requestreffvalue['external_application_id']; ?>','<?php echo $requestreffvalue['taskdetails']['task_details']['task_id']; ?>')"><button class="btn-primary btn-request">Accept</button></a>

              <button class=" btn-danger btn-request">Reject</button> <!-- <button class=" btn-success btn-request">Transfer</button> --> </td>
              <!--  <td ><input type="text" width="100%"></td> -->
            </tr>
             <tr class="collapse" id="requestref-<?php echo $requestreffkey; ?>" style="margin: 0;padding: 10px;display: table-row!important;">
               <td colspan="9"><?php echo $requestreffvalue['task_description']; ?> </td>
             </tr>
           
           
             <?php } }} ?>
      </thead>
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






<!-- Modal -->


<!-- myTaskModal-->




<!-- myTaskModal-->



<!-- myTaskModal-->










<?php get_footer(); ?>
    




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.jqueryui.min.js"></script>
<script src="https://cdn.datatables.net/scroller/2.0.0/js/dataTables.scroller.min.js"></script> 




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
