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


<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"/>
  

<!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.jqueryui.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/scroller/2.0.0/css/scroller.jqueryui.min.css"> -->


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

 // echo "<pre>";
 // print_r($incomingreferral); die; 

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
                <div class="post_title"><h3>Request Referral</h3></div>
                <div class="post-tags"></div>
                <div class="post_content">
                  <div class="panel-group" id="accordion">
                    <div class="row">
  

        <table class="table table-striped"  id="requestreferraltable">
    <tbody>
        <thead class="ref-cls">
           <tr class="green-bg">
              <th class="green-bg">Patient</th>
              <th class="green-bg">Request Title </th>
              <th class="green-bg">Submission date </th>
              <th class="green-bg">Source</th>
              <th class="green-bg">Urgency</th>
              <th class="green-bg">Status </th>
              <th class="green-bg">Follow-up date</th>
              <th class="green-bg">Agreement</th>
              <th class="green-bg">Action </th>
            </tr> 
            <?php
            if(!empty($incomingreferral)){
            foreach ($incomingreferral as $requestreffkey => $requestreffvalue) { 
            //if($requestreffvalue['status'] == 'Pending'){
            ?>
    
            <tr>
              <td ><?php echo $requestreffvalue['patient_name']; ?></td>
              <td ><?php echo $requestreffvalue['ref_name']; ?> </td>
              <td ><?php echo date('d/m/y' ,strtotime($requestreffvalue['taskdetails']['task_details']['task_deadline'])); ?></td>
              <td ><?php echo $requestreffvalue['ref_source']; ?></td>
              <td ><?php echo $requestreffvalue['ref_urgency']; ?></td>
              <td ><?php echo $requestreffvalue['status']; ?></td>
              <td ><?php echo ""; ?></td>
              <td ><?php echo ""; ?></td>
              <td ><a href="<?php echo site_url().'/request-referral/details/?refaset='.base64_encode($requestreffvalue['task_description']).'&extid='.base64_encode($requestreffvalue['external_application_id']).'&txtid='.base64_encode($requestreffvalue['external_application_id']);?>" target="_blank" ><button class="btn-primary btn-request">Details</button></a>
              </td> 
            </tr>
            
           
            
             <?php  }} ?>
      </thead>
    </tbody>
  </table>

   
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
    
    width: 100px;
}
table.dataTable thead th div.DataTables_sort_wrapper span {
    position: absolute;
    top: 50%;
    margin-top: -8px;
    right: -5px;
   
}

</style>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script> 
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<!-- <script src="https://cdn.datatables.net/1.10.19/js/dataTables.jqueryui.min.js"></script>
<script src="https://cdn.datatables.net/scroller/2.0.0/js/dataTables.scroller.min.js"></script> 
 -->
<script type="text/javascript">
  $(document).ready( function () {
    $('#requestreferraltable').DataTable();
} );
</script>
<?php get_footer(); ?>


<script type="text/javascript">
jQuery(document).ready(function($) {
    jQuery("a[rel^='prettyPhoto']").prettyPhoto();
});

  // jQuery(document).ready(function() {
  //    jQuery('#requestreferraltable').DataTable();
  //  } );"

</script>
