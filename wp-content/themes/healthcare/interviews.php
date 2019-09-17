<?php

/**
 * Template Name: Interviews
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



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">


<?php


$error = 0;
if(isset($_SESSION['userdata'])){
    $email = $_SESSION['userdata']['email'];
    $interviewdata = interviewslist($email);
    if(!empty($interviewdata['status'] == 'ok')){
       $interview = $interviewdata['interview_list']; 
    }else{
      $error = 1;
      $msg   = $interviewdata['status']. ' ! '. $interviewdata['message'];
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
                          <a  href="<?php echo site_url().'/interviews/create-interview';?>"><button class="btn-success">New Interviews</button></a>
                          </div>
                      
                          </div>
                          
                         </div>
                         <?php } ?>
                     </div>
                    <br/><br/><br/>
    <div class="col-md-12 border">
      <div class="line"></div>
        <div class="post_title pull left"><h3>Interviews</h3></div>
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
                <table class="table table-striped" id="example1" >
                  <thead>
                      <tr>
                        <th scope="col">NAME (Job Title)</th>
                        <th scope="col">NEED</th>
                        <th scope="col">OBSTACLE</th>
                        <th scope="col">ACTION</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php 
                      if(!empty($interview)){
                      foreach ($interview as $key => $value) { ?>  
                      <tr>
                        <th scope="row"><?php echo $value['caller_first_name']; ?></th>
                        <td><?php echo $value['need_title']; ?></td>
                        <td><?php echo $value['obstacle_title'] ?></td>
                        <td><a href="<?php echo site_url().'/interviews/edit-interviews?iid='.base64_encode($value['interview_id']);?>"  title="Edit Interview"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
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
