<?php

/**
 * Template Name: Patient_list
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


$error = 0;
if(isset($_SESSION['userdata'])){
	  $email = $_SESSION['userdata']['email'];
	  $search = '';
      if(!empty($_POST['search'])){
      	$search = $_POST['searchbox'];	
      }

	  $patientdata = patientlist($email,$search);
	  if(!empty($patientdata['status'] == 'ok')){
	  	 $patients = $patientdata['patients_details'];
	  	 //asort($patients);
	  }else{
	  	$error = 1;
	    $msg   = $patientdata['status']. ' ! '. $patientdata['message'];
	  }
}else{
	$error = 1;
	$msg   = 'unauthorized ! you have to login';
}
get_header(); 
//get_template_part('cover');
?>

<style type="text/css">
  .green-bg{
    background: #43b02a!important;
  }
  .ref-cls .green-bg{
background: #43b02a!important;
  }
 .green-bg th {
    padding: 5px 10px;
    border-right: 1px solid #ddd;
    font-size: 15px;
    color: #fff;
     background: #43b02a!important;
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


table.dataTable thead th, table.dataTable thead td {
    padding: 10px 11px!important;
}
</style>



<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.jqueryui.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/scroller/2.0.0/css/scroller.jqueryui.min.css">
<div class="container-fluid space">
	<div class="container blogs">
	<div class="col-md-12 rightside">
	    <div class="post-73 page type-page status-publish hentry">	
			<div class="row post-area">
	            <div class="post-73 page type-page status-publish hentry">
	                   <?php if(isset($_SESSION['userdata'])){ ?>
	                   <div class="row">
                         <div class="col-md-12">
                         <div class="col-md-4"></div>
                         <div class="col-md-2">
                         	<a  href="<?php echo site_url().'/patients/create-patient';?>"><button class="btn-success">New Client</button></a>
                         	</div>
                       
                         	</div>
                         	
                         </div>
                         <?php } ?>
	                   </div>
                    <br/><br/><br/>
					<div class="col-md-12 border">
				        <div class="line"></div>
							<div class="post_title"><h3>Clients</h3></div>
				            <div class="post-tags"></div>
 <?php if(isset($_GET['msg'])){ ?>
        <div class="row">
	    <div class="alert alert-success alert-dismissible">
	        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
            <strong><?php echo $_GET['msg']; ?></strong>
        </div>
        </div>
        <?php } ?>
				            <div class="post_content">
				                <?php if($error == 0){ ?>
				 				<table class="table table-striped" id="example">
									<thead>
									    <tr class="green-bg">
									      <th scope="col" class="green-bg">CLIENT NAME</th>
									      <th scope="col" class="width">EMAIL</th>
									      <th scope="col">MOBILE</th>
									      <th scope="col">AGE </th>
									      <th scope="col">ACTIVE</th>
									      <th scope="col">STATUS</th>
									      <th scope="col">SEE MORE</th>
									    </tr>
									</thead>
                                    <tbody>
                                        <?php 
                                        if(!empty($patients)){
                                        	foreach ($patients as $key => $value) { ?>	
									    <tr>
									      <th scope="row"><?php echo $value['last_name']." ".$value['first_name']; ?></th>
									      <td><?php echo $value['email']; ?></td>
									      <td><?php echo $value['ph_number'] ?></td>
									      <td><?php echo $value['p_age'] ?></td>
									      <td><?php if($value['active_notification'] == true){ echo "Yes"; }else{ echo "No"; } ?></td>
									      <td><?php echo $value['p_status'] ?></td>									      
									       <td><a href="<?php echo site_url().'/patients/patient-details?pid='.base64_encode($value['patient_id']);?>"  title="Patients-details">>>></a></td> 
									    </tr>
									    <?php } }else{ ?>
                                        <tr><td colspan="7"><center>No record found</center></td></tr>
									    <?php } ?>
									    </tbody>
									</table>
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
        //scrollY:        200,
        //scrollCollapse: true,
        //scroller:       true
    } );
} );
</script>
