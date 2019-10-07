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
							<div class="post_title"><h3>Deatils
								

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
        

        <table class="table table-striped table-bordered" id="example-116">
                           
                                 <tr>
                                      <td>Patient : Jane Doe</td>
                                      <td>Source : Partner</td>
                                      <td>Request Date</td>
                                      <td>Assignee:</td>
                                    </tr>
                            <tbody id="refbody">

                                <?php
                                if(!empty($desc)){
                                	$r = 1;
                                	 ?>

                                     
                                	<tr>
	                                	<td colspan="4" style="height: 100px;"><?php echo $desc; ?></td>
	                                	
                                    </tr>
                                    
                                    <tr>
                                        <td colspan="4"><a href="javascript:void(0)" onclick="acceptreferralopolicy('<?php echo $external_application_id; ?>','<?php echo $task_id; ?>')"><button class="btn-primary btn-request set-btn">Accept</button></a>&nbsp;&nbsp;<button class=" btn-danger btn-request set-btn">Reject</button></td>
                                        
                                    </tr>
	                                <?php  }else{ ?>

	                                <tr>
	                                	<td colspan="8" style="color: red"><center><p>No Referral Added</p></center></td>
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
	
	</div>
</div>

<?php get_footer(); ?>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.jqueryui.min.js"></script>
<script src="https://cdn.datatables.net/scroller/2.0.0/js/dataTables.scroller.min.js"></script> 

<script type="text/javascript">
var ajax_url = "<?php echo '/ajax.php'; ?>";

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




