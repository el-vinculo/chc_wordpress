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
                         	<form  method="post">
                         	<div class="col-md-4">
                         	<input type="text" name="searchbox" class="form-control" placeholder="Search by first or last name..." value="<?php if(!empty($_POST['searchbox'])){ echo $_POST['searchbox']; } ?>"></div>
                         	<div class="col-md-2">
                        <input name="search" class="btn-success" type="submit" value="Search">
                           
                        
                   </div>  </form>
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
				 				<table class="table table-striped">
									<thead>
									    <tr>
									      <th scope="col">CLIENT NAME</th>
									      <th scope="col">EMAIL</th>
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
<?php get_footer(); ?>
