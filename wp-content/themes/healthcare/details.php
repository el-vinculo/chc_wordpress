<?php

/**
 * Template Name: Details
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

<style>
  .set-btn {
    background: #0fc537!important;
    border-radius: 10px;
    padding: 5px 25px;
    /* background: #000; */
    border: #0fc537 solid 2px!important;
    font-weight: bold;
  }
</style>


<?php



$error = 0;
$success = 0;

if(isset($_SESSION['userdata'])){
	$email = $_SESSION['userdata']['email']; 
	$referral_id = base64_decode($_GET['refid']);
    $patient_id = base64_decode($_GET['refid']);
    $patient_name = base64_decode($_GET['ptn']);
    $ref_name = base64_decode($_GET['refnma']);
    $source = base64_decode($_GET['refsr']);
    $documents = array();

    
    $desc = base64_decode($_GET['refaset']);
    $external_application_id = base64_decode($_GET['extid']);
    $task_id = base64_decode($_GET['txtid']);
  //  echo $desc; die;
  

    

	
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
							<div class="post_title"><h3>Details
								

							</h3></div>

				            <div class="post-tags"></div>
				            <div class="post_content">
							  <div class="panel-group" id="accordion">
							
  <div class="panel panel-default">
    <div class="panel-heading">
  
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
        
        <span style="color:red; display:none;" id="accept-error-msg">Something Error</span>
        <span style="color:green; display:none;" id="accept-success-msg">Patient and Task were transferred successfully</span>
        <table class="table table-striped table-bordered" id="example-116">
                           
                                 <tr>
                                      <td>Patient : <?php echo $patient_name; ?></td>
                                      <td>Referral : <?php echo $ref_name; ?></td>
                                      <td>Source : <?php echo $source; ?></td>
                                      
                                    </tr>
                            <tbody id="refbody">

                                
                                
                                	

                                  <?php if(!empty($desc)){   ?>
                                	<tr>
	                                	<td colspan="4" style="height: 100px;"><?php echo $desc; ?></td>
	                                	
                                    </tr>
                                     <?php  }else{ ?>

                                  <tr>
                                    <td colspan="8" style="color: red"><center><p>Details not found</p></center></td>
                                  </tr>

                                  <?php } ?>
                                    
                                    <tr>
                                        <td colspan="4"><a href="javascript:void(0)" onclick="acceptreferralopolicy('<?php echo $external_application_id; ?>','<?php echo $task_id; ?>')"><button class="btn-primary btn-request set-btn">Accept</button></a>&nbsp;&nbsp;<button data-toggle="modal"  data-target="#myModal" onclick="showReferralReject('<?php echo $external_application_id; ?>','<?php echo $task_id; ?>')" class=" btn-danger btn-request set-btn">Reject</button></td>
                                        
                                    </tr>
	                               
                                
                                
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
	
	</div>
</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button"  class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Reject Referral Request</h4>
      </div>
      <div class="modal-body">
        <form id="referralform">
              
       
             <div class="row">
             <span style="color:red; display:none;" id="error-msg">Something Error</span>
                  <span style="color:green; display:none;" id="success-msg">Request Rejected</span>
              <div class="col-md-12">
               
                  
                  <label>Reason</label>
                   <textarea name="description" id="reason_request" class="form-control" rows="7"  placeholder="Reason..."></textarea>
                   <p id="reason-error" style="display: none; color: red" >Please fill reason for reject !!</p>
                 

    
              </div>
            </div>
            <br/>
                <input type="hidden" class="form-control"  name="reject_external_id" id="reject_external_id" value=""/>
                <input type="hidden" class="form-control"  name="reject_task_id" id="reject_task_id" value=""/>
            <input name="ref-update" onclick="rejectreferaalpolicy()" type="button" class="btn-primary" value="Reject" > 
          
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<?php get_footer(); ?>
    
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.jqueryui.min.js"></script>
<script src="https://cdn.datatables.net/scroller/2.0.0/js/dataTables.scroller.min.js"></script> 

<script type="text/javascript">

  // var ajax_url = "<?php echo '/chc/chc_wordpress/ajax.php'; ?>";
    if (window.location.href.indexOf("localhost") > -1) {
      var ajax_url = "<?php echo '/chc/chc_wordpress/ajax.php'; ?>";
    }else{
       var ajax_url = "<?php echo '/ajax.php'; ?>";
    }

    var return_url = "<?php echo site_url().'/request-referral'; ?>";




    function acceptreferralopolicy(application_id,task_id) {

      //if (confirm('Are you sure to Accept this Referral ?')) {
        jQuery.ajax({
          url: ajax_url,
          type:'POST',
          cache: false,
          data : {'external_application_id':application_id,'task_id':task_id,funtion:'acceptreferralbyclient'},
          success: function(res){
           // console.log(res);
            if(res == 11){
              jQuery("#accept-success-msg").show();
              //alert('Patient and Task were transferred successfully');
              //location.reload();
              window.location.href = return_url;
            }else{
              jQuery("#accept-error-msg").show();
              //alert('Something error');
            }
          }
        });
     /* } else {
          return false;
      }*/
    }

    function showReferralReject(application_id,task_id){
      jQuery('#reject_external_id').val(application_id);
      jQuery('#reject_task_id').val(task_id);
    }

    function rejectreferaalpolicy(){
      //alert(window.location.href.indexOf("localhost"));
      //alert(ajax_url);

      
        var reason = jQuery('textarea#reason_request').val();
        var application_id = jQuery('#reject_external_id').val();
        var task_id = jQuery('#reject_task_id').val();
        if(reason != ''){
        jQuery("#reason-error").hide();
       
      // if (confirm('Are you sure to Reject this Referral ?')) { 
       jQuery.ajax({
          url: ajax_url,
          type:'POST',
          cache: false,
          data : {'external_application_id':application_id,'task_id':task_id,'request_reject_reason':reason,funtion:'rejectreferralbyclient'},
          success: function(res){
            if(res==11){
              jQuery("#success-msg").show();
              // alert('Request Rejected');
              window.location.href = return_url;
            } else{
              jQuery("#error-msg").show();
              //alert('Something error');
            }
          }
        });
     /*  } else {
          return false;
      }*/

     }else{
       jQuery("#reason-error").show();
       //alert('Please fill reason for reject !!');
     }
      
    }

   
    
</script>




