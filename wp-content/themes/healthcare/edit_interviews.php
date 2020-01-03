<?php
/**
 * Template Name: edit_interviews
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
  .panel-body {
    padding: 15px 0!important;
}
.obstacle-inter{
  position: relative;
  left: 3%;
  margin-right: 30px;
  
}
.obstacle-inter1 {
    position: relative;
    overflow: hidden;
    left: 5%;
    right: 0;
    margin-right: 49px;
}

  form {
    padding: 0 15px;
}
.margin-left{
  padding-left: 15px;
  margin-right: 16px;
}
.box-shadow {
  padding: 0 20px;
    box-shadow: 0 0 20px #ededed;
}
    .focus-edit:focus {
    border-color: #4CBB17!important;
   outline: 0; 
    -webkit-box-shadow: none!important 
    box-shadow: none!important; 
}
  /*.panel-body{
    padding: 0px!important;
  }*/
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


.btn-success {
    color: #fff;
    background-color: #5cb85c;
    border-color: #4cae4c;
    border: 0;
    padding: 9px;
}


h3 a {
    color: #242424;
    text-decoration: none;
    font-size: 20px;
}
h3 a:hover, h3 a:focus{

  text-decoration: none;
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
.inline h3 {
    margin: 0;
    padding-top: 5px;
/*    border-right: 2px solid #dddd;
*/    padding-right: 20px;
    padding-bottom: 5px;
}
.inline {
    margin-top: -3px;
}
hr {
    margin-top: 6px!important;
    margin-bottom: 6px!important;
    border: 0;
    border-top: 1px solid #eee;
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
/*  display: none;
*/  overflow: hidden;
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

  .post_title.post_tilte-inter {
    background: #b8dfa9!important;
    float: left;
    width: 100%;
}
.post_tilte-inter h3 {
    padding: 15px 12px;
    margin: 0;
}
.post_tilte-inter a {
    padding-right: 18px;
}
.btn-right{
  padding: 14px 0;
}
.btn-right a i{
  font-size: 17px;
}
.btn-right a {
    font-size: 15px;
}
.form-main{
  padding: 0 15px;
}
.btn-right1 {
/*    padding: 6px 0 14px!important;
*/    align-items: center;
    display: inline-flex;
}

input {
  width: calc(100% - 16px);
  padding: 10px 0 10px 10px;
  margin: 0;
  border: 2px solid transparent;
  border-radius: 5px;
  box-shadow: 1px 1px 1px #B2B2B2, -1px -1px 1px #292929;
  position: relative;
}
input:focus {
  outline:none;
  border: 2px solid transparent;
}

input.isRequired {
  border: 2px solid #e74c3c;
}
.ms-options-wrap > .ms-options > ul input[type="checkbox"] {
    margin: 0 5px 0 -88px!important;
    position: absolute;
    left: 4px;
    top: 8px;
    text-align: left;
    width: 100%;
    box-shadow: none!important;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/jquery.multiselect.css">
<?php
$error = 0;
if(isset($_SESSION['userdata'])){

    $email = $_SESSION['userdata']['email'];
    $states = getstates();
    $interview_id = base64_decode($_GET['iid']);
    /* ------------ Interview Details --------------------- */
    $interviewdata = interviewDetails($interview_id,$email);
     //echo "<pre>";
     //print_r($interviewdata); die; 
    if(!empty($interviewdata['status'] == 'ok')){
        $interviewDeatils = $interviewdata['interview_hash'];
        $detailsData  = $interviewdata['details_array']; 
    }else{
        $error = 1;
        $msg   = $patientdata['status']. ' ! '. $patientdata['message'];
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
    <div class=" blogs">
        <div class=" rightside">
            <div class="post-73 page type-page status-publish hentry">
                <div class="row post-area">
                    <div class="post-73 page type-page status-publish hentry">
             
                        <div class="col-md-3">
                            <div class="border">
                                <h3 class="text-center">Client details</h3>
                                <div class="form-main">
                                    <form action="">
                                        <div class="form-group">
                                        <input type="hidden" id="saved_interview_id" value="<?php echo base64_decode($_GET['iid']) ?>"/>
                                            <label for="first">First name <em style="color:red">*</em></label>
                                            <input type="text" class="form-control" id="caller_first_name" value="<?php echo $interviewDeatils['caller_first_name']; ?>" onblur="updateinterviewfield();" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label for="pwd">Last name <em style="color:red">*</em></label>
                                            <input type="text" class="form-control" id="caller_last_name" value="<?php echo $interviewDeatils['caller_last_name']; ?>" onblur="updateinterviewfield();" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label for="DOB">DOB <em style="color:red">*</em></label>
                                            <input type="text" class="form-control datepicker" id="caller_dob" value="<?php echo $interviewDeatils['caller_dob']; ?>"  onblur="updateinterviewfield();" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="Address">Address </label>
                                            <input type="text" id="caller_address" class="form-control" value="<?php echo $interviewDeatils['caller_address']; ?>" onblur="updateinterviewfield();" >
                                        </div>
                                        <div class="form-group">
                                            <label for="zip">Zip </label>
                                            <input type="text" id="caller_zipcode" class="form-control" value="<?php echo $interviewDeatils['caller_zipcode']; ?>" onblur="updateinterviewfield();" >
                                        </div>
                                        <div class="form-group">
                                            <label for="state">State </label>
                                            <br>
                                            <select class="form-control" id = "caller_state" onchange="updateinterviewfield()">
                                                 <?php if(!empty($states)){
                                                  foreach ($states as $key => $value) { ?>
                                                <option value="<?php echo $key; ?>"  <?php if($interviewDeatils['caller_state'] == $key){ echo "selected"; }?>><?php echo $value; ?> </option> <?php  }  } ?>

                                            </select>

                                        </div>
                            
                                        <a href="javascript:void(0)" id="addmoreadditional" class="text-center"><i class="fa fa-plus" aria-hidden="true"></i> Add additional field</a>

                                        <?php if(!empty($interviewDeatils['caller_additional_fields'])){
                                            foreach ($interviewDeatils['caller_additional_fields'] as $additionalkey => $additionalvalue) { ?>   
                                           <div class="form-group">
                                             <div class="row">
                                             <div class="col-md-12">
                                             <div class="col-md-10">
                                             <input type="text" name="additionalkeys[]" class="form-control" value="<?php echo $additionalkey; ?>" placeholder="Additional Field" onblur="updateinterviewfield();" >
                                            </div>
                                            <div class="col-md-10">
                                            <input type="text" name="additional[]" class="form-control" value="<?php echo $additionalvalue; ?>" placeholder="Additional Value" onblur="updateinterviewfield();" >
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        <?php } } ?>
                                        <div class="input_fields_wrap_additional">
                                        
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-9 panel-group" id="accordion">
                           
                           <div class="panel">
                            <div class="post_title post_tilte-inter">
                                <h3 class="pull-left"> <a id="intervirefiels" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#" ></a> Assessments</h3>
                            </div>
                            </div>





    <div class="alert alert-success alert-dismissible"  id="interview-msg" style="display: none" >
       <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
       <strong>Success!</strong> Assessment detail successfully added.
    </div>
  
   
      
    	
    <div id="panel1" class="panel-collapse collapse in" aria-expanded="true">
       <div class="panel-body">
    <?php 
    if(!empty($detailsData)){ 
      foreach ($detailsData as $intkey => $intvalue) { ?>
          <div class="main-interview box-shadow">
            <div class="row">
              <div class="col-md-6">
                 <h3 ><a class="accordion-toggle" data-toggle="collapse"  href="#panelneed_<?php echo $intkey; ?>"><?php echo $intvalue['need_title']; ?></a></h3>
              </div>
              <div id="panelneed_<?php echo $intkey; ?>" class="panel-collapse collapse">
                <div class="panel-body">
                  <div class="col-md-6">
                   <div class="pull-left btn-right btn-right1 "> 
                           <a href="javascript:void(0)"  id="need-<?php echo $intkey; ?>" onclick="removedata(this.id)" style="color: red;padding-left: 20px;">Remove</a>
                        </div>
                    <div class="pull-right btn-right">
                      <a class="add-need addmore" href="javascript:void(0)"  ><i class="fa fa-plus" aria-hidden="true"></i> Add Need</a><br>
                      <a href="javascript:void(0)" data-check = "<?php echo $intkey; ?>"  class="addmoreObstacle"  onclick='add(this)' style="color: red;"><i class="fa fa-plus" aria-hidden="true"></i> Add Obstacle </a>
                    </div>
                  </div>
                </div>
                <div class="alert alert-success alert-dismissible" id="need-msg-<?php echo $intkey; ?>" style="display: none">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Success!</strong> Need detail successfully updated.
                </div>
                <form action="">
                   <div class="row">
                      <div class="form-group col-md-3 left">
                        <label for="first">Title <em style="color:red">*</em></label>
                        <input type="hidden" id="last_obs_<?php echo $intkey; ?>" value="<?php echo  end(array_keys($intvalue['obstacles_array'])) ?>">
                        <input type="hidden" id="saved_needid_<?php echo $intkey; ?>" value="<?php echo $intvalue['need_id'];?>">
                        <input type="text" data-check="<?php echo $intkey; ?>" id="need_title_<?php echo $intkey; ?>" class="form-control" value="<?php echo $intvalue['need_title'];?>" onblur="checkneedupdate(this)">
                      </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-4">
                          <label for="first">Descripation <em style="color:red">*</em></label>
                          <textarea class="focus-edit" rows="5" id="need_desc_<?php echo $intkey; ?>" data-check="<?php echo $intkey; ?>" onblur="checkneedupdate(this)" cols="41"><?php echo $intvalue['need_description'];?></textarea>
                        </div>
                        
                        <div class="form-group col-md-4">
                          <label for="first"> Notes</label>
                            <textarea rows="5" data-check="<?php echo $intkey; ?>" onblur="checkneedupdate(this)" id="need_notes_<?php echo $intkey; ?>" cols="41"><?php echo $intvalue['need_note'];?></textarea>
                        </div>

                        <div class="form-group col-md-2 ">
                          <label for="first">Urgency</label><br>
                            <select id="need_urgency_<?php echo $intkey; ?>" data-check="<?php echo $intkey; ?>" onchange="checkneedupdate(this)">
                            <option value="Critical" <?php if($intvalue['need_urgency'] == 'Critical'){ echo "selected"; } ?>>Critical</option>
                               <option value="High" <?php if($intvalue['need_urgency'] == 'High'){ echo "selected"; } ?>>High </option>
                               
                               <option value="Modrate" <?php if($intvalue['need_urgency'] == 'Modrate'){ echo "selected"; } ?>>Modrate </option>
                               <option value="Low" <?php if($intvalue['need_urgency'] == 'Low'){ echo "selected"; } ?>>Low </option>
                            </select>
                        </div>

                        <div class="form-group col-md-2 pull-right">
                           <label for="first">Status</label><br>
                            <select id="need_status_<?php echo $intkey; ?>" data-check="<?php echo $intkey; ?>" onchange="checkneedupdate(this)">
                              <option value="New" <?php if($intvalue['need_status'] == 'New'){ echo "selected"; } ?>>New </option>
                              <option value="Pending" <?php if($intvalue['need_status'] == 'Pending'){ echo "selected"; } ?>>Pending</option>
                              <option value="Close" <?php if($intvalue['need_status'] == 'Close'){ echo "selected"; } ?>>Close </option>
                              <option value="Review" <?php if($intvalue['need_status'] == 'Review'){ echo "selected"; } ?>>Review </option>
                            </select>
                        </div>
                    </div>
                   </div>
                 </form>
               </div>
              </div><hr>
              <?php if(!empty($intvalue['obstacles_array']) && is_array($intvalue['obstacles_array'])){ 
                  foreach ($intvalue['obstacles_array'] as $obskey => $obsvalue) {
              ?>

              <div id="main-interview"></div>
                <div class="main-interview box-shadow obstacle-inter">
                  <div class="row">
                    <div class="col-md-4 ">
                        <h3><a id="obstacleancher" class="accordion-toggle" data-toggle="collapse"  href="#panelobs_<?php echo $intkey; ?>_<?php echo $obskey; ?>"><?php echo $obsvalue['obstacle_title']; ?> </a> </h3>
                    </div>
                    <div id="panelobs_<?php echo $intkey; ?>_<?php echo $obskey; ?>" class="panel-collapse collapse">
                      <div class="panel-body">
                        <div class="col-md-8 inline">

                        <div class="pull-left btn-right btn-right1 "> 
                           <a href="javascript:void(0)"  id="obstacle-<?php echo $intkey; ?>_<?php echo $obskey; ?>" onclick="removedata(this.id)" style="color: red;padding-left: 20px;">Remove</a>
                        </div>    
                            <div class="pull-right btn-right  ">
                              
                              <a href="javascript:void(0)" style="color: red;" data-check = "<?php echo $intkey; ?>" data-neck = "<?php echo $obskey; ?>"   onclick='addobsoln(this)'><i class="fa fa-plus" aria-hidden="true"></i> Add solution </a>
                            </div>
                        </div>
                      </div>
                             
                      <div class="alert alert-success alert-dismissible" id="msg-obs-<?php echo $intkey; ?>-<?php echo $obskey; ?>" style="display: none">
                           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                           <strong>Success!</strong> Obstacle detail successfully added.
                      </div>

                      <form action="">
                        <div class="row">
                          <div class="form-group col-md-3 left">
                            <input type="hidden" id="last_sol_<?php echo $intkey; ?>_<?php echo $obskey; ?>" value="<?php echo  end(array_keys($obsvalue['solutions_array'])) ?>">
                            <input type="hidden" id="saved_obstacleid_<?php echo $intkey; ?>_<?php echo $obskey; ?>" value="<?php echo $obsvalue['obstacle_id']; ?>">
                            <label for="first">Title</label>
                            <input type="text" id="obstacle_title_<?php echo $intkey; ?>_<?php echo $obskey; ?>" data-pop='<?php echo $intkey; ?>' data-mom='<?php echo $obskey; ?>' class="form-control" value="<?php echo $obsvalue['obstacle_title']; ?>" onblur="updateInterviewObstacle(this)">
                           </div>
                        </div>

                        <div class="row">
                          <div class="form-group col-md-4">
                            <label for="first">Descripation</label>
                              <textarea rows="5" id="obstacle_desc_<?php echo $intkey; ?>_<?php echo $obskey; ?>" data-pop='<?php echo $intkey; ?>' data-mom='<?php echo $obskey; ?>' cols="41" onblur="updateInterviewObstacle(this)"><?php echo $obsvalue['obstacle_description']; ?></textarea>
                          </div>
                          <div class="form-group col-md-4">
                             <label for="first"> Notes</label>
                             <textarea rows="5" id="obstacle_notes_<?php echo $intkey; ?>_<?php echo $obskey; ?>" data-pop='<?php echo $intkey; ?>' data-mom='<?php echo $obskey; ?>' cols="41" onblur="updateInterviewObstacle(this)"><?php echo $obsvalue['obstacle_notes']; ?></textarea>
                          </div>
                          <div class="form-group col-md-2 ">
                            <label for="first">Urgency</label><br>
                              <select id="obstacle_urgency_<?php echo $intkey; ?>_<?php echo $obskey; ?>" data-pop='<?php echo $intkey; ?>' data-mom='<?php echo $obskey; ?>' onchange="updateInterviewObstacle(this)">
                              <option value="Critical" <?php if(!empty($obsvalue['obstacle_urgency'] == 'Critical')){ echo "selected"; }?>>Critical</option>
                               <option value="High" <?php if(!empty($obsvalue['obstacle_urgency'] == 'High')){ echo "selected"; }?>>High </option>
                               
                               <option value="Modrate" <?php if(!empty($obsvalue['obstacle_urgency'] == 'Modrate')){ echo "selected"; }?>>Modrate</option>
                               <option value="Low" <?php if(!empty($obsvalue['obstacle_urgency'] == 'Low')){ echo "selected"; }?>>Low</option>
                              </select>
                          </div>
                          <div class="form-group col-md-2 pull-right">
                            <label for="first">Status</label><br>
                              <select id="obstacle_status_<?php echo $intkey; ?>_<?php echo $obskey; ?>" data-pop='<?php echo $intkey; ?>' data-mom='<?php echo $obskey; ?>' onchange="updateInterviewObstacle(this)">
                                <option value="New" <?php if(!empty($obsvalue['obstacle_status'] == 'New')){ echo "selected"; }?>>New </option>
                                <option value="Pending" <?php if(!empty($obsvalue['obstacle_status'] == 'Pending')){ echo "selected"; }?>>Pending</option>
                                <option value="Close" <?php if(!empty($obsvalue['obstacle_status'] == 'Close')){ echo "selected"; }?>>Close </option>
                                <option value="Review" <?php if(!empty($obsvalue['obstacle_status'] == 'Review')){ echo "selected"; }?>>Review </option>
                               </select>
                           </div>
                         </div>
                        </div>
                      </form></div>
                    </div><hr>
                    
                    <?php
                    if(!empty($obsvalue['solutions_array']) && is_array($obsvalue['solutions_array'])){ 
                    	foreach ($obsvalue['solutions_array'] as $solkey => $solvalue) {
                    ?>        
                    <div class="main-interview obstacle-inter1 box-shadow">
                      <div class="row">
                        <div class="col-md-4 ">
                          <h3><a id="solutionancher" class="accordion-toggle" data-toggle="collapse"  href="#panelsol_<?php echo $intkey;?>_<?php echo $obskey; ?>_<?php echo $solkey; ?>"><?php echo $solvalue['solution_title']; ?></a> </h3>
                        </div>
                        <div id="panelsol_<?php echo $intkey;?>_<?php echo $obskey; ?>_<?php echo $solkey; ?>" class="panel-collapse collapse">
                          <div class="panel-body">
                            <div class="col-md-8 inline">
                         
                            <div class="pull-left btn-right btn-right1 "> 
                           <a href="javascript:void(0)"  id="solution-<?php echo $intkey;?>_<?php echo $obskey; ?>_<?php echo $solkey; ?>" onclick="removedata(this.id)" style="color: red;padding-left: 20px;">Remove</a></div>
                            </div>
                           </div>

                                    
                    <div class="alert alert-success alert-dismissible" id="msg-sol-<?php echo $intkey;?>_<?php echo $obskey; ?>_<?php echo $solkey; ?>" style="display: none" >
                       <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                       <strong>Success!</strong> Solution detail successfully added.
                    </div>

                    <form action="">
	                    <div class="row">
	                        <div class="form-group col-md-3 left">
	                            <label for="first">Title</label>
	                            <input type="hidden" id="saved_solutionid_<?php echo $intkey; ?>_<?php echo $obskey; ?>_<?php echo $solkey; ?>" class="form-control" value="<?php echo $solvalue['solution_id'];?>">
	                            <input type="text" id="solution_title_<?php echo $intkey; ?>_<?php echo $obskey; ?>_<?php echo $solkey; ?>" class="form-control" data-tot="<?php echo $intkey; ?>" data-fot="<?php echo $obskey; ?>" data-got="<?php echo $solkey; ?>" value="<?php echo $solvalue['solution_title']; ?>" onblur="updateInterviewSolutiondeatils(this)">
	                        </div>
	                    </div>
	                    <div class="row">
	                        <div class="form-group col-md-4">
	                            <label for="first">Descripation</label>
	                            <textarea rows="5" data-tot="<?php echo $intkey; ?>" data-fot="<?php echo $obskey; ?>" data-got="<?php echo $solkey; ?>" id="solution_desc_<?php echo $intkey; ?>_<?php echo $obskey; ?>_<?php echo $solkey; ?>" onblur="updateInterviewSolutiondeatils(this)" cols="45"><?php echo $solvalue['solution_description']; ?></textarea>
	                        </div>

	                    </div>

	                    <div class="row">

	                        <div class="form-group col-md-4">
	                            <h5><button type="button" class="btn1 btn-success"  data-toggle='modal'  data-target='#myProviderModal' class="form-control" id="search-<?php echo $intkey; ?>_<?php echo $obskey; ?>_<?php echo $solkey; ?>" onclick="searchprovider(this.id)">Search Provider</button></h5>
	                            <label for="first">Selected Provider</label>
	                            <input type="text"  placeholder="Search Entire Database"  id="solution_provider_<?php echo $intkey; ?>_<?php echo $obskey; ?>_<?php echo $solkey; ?>" data-tot="<?php echo $intkey; ?>" data-fot="<?php echo $obskey; ?>" data-got="<?php echo $solkey; ?>" value="<?php echo $solvalue['solution_provider']; ?>" onblur="updateInterviewSolutiondeatils(this)" onclick="updateInterviewSolutiondeatils(this)">
	                        </div>

	                    </div>
                      </div>
                    </form>
                 </div></div>
                 
                 <?php  } } ?>
                 <div id="main-interview"></div>
                    <div class="input_fields_wrap_solution_<?php echo $intkey; ?>_<?php echo $obskey; ?> "></div>
                 <?php  }} ?>
                  <div id="main-interview " ></div>
                            <div class="input_fields_wrap_obstcles_<?php echo $intkey; ?> obstacle-inter ">
                <div class="post-tags"></div>
                            </div>
                 <?php }}else{  ?>
                  <div class="main-interview">
                     <div class="row">
                        <div class="col-md-6">
                            <h3 ><a class="accordion-toggle" data-toggle="collapse"  href="#editpanel1">Need</a></h3>
                        </div>
                        <div id="editpanel1" class="panel-collapse collapse box-shadow">
                            <div class="panel-body">
                             <div class="col-md-6">
                                <div class="pull-right btn-right">
                                  <a class="add-need" href="javascript:void(0)" id="addmore" ><i class="fa fa-plus" aria-hidden="true"></i> Add Need</a><br>
                                  <a href="javascript:void(0)" data-check = "1"  class="addmoreObstacle"  onclick='add(this)' style="color: red;"><i class="fa fa-plus" aria-hidden="true"></i> Add Obstacle </a>
                                </div>
                             </div>
                            </div>
                                        
                        <div class="alert alert-success alert-dismissible" id="need-msg-1" style="display: none">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success!</strong> Need detail successfully added.
                        </div>

                        <form action="">
                           <div class="row">
                              <div class="form-group col-md-3 left">
                                 <label for="first">Title <em style="color:red">*</em></label>
                                 <input type="hidden" id="saved_needid_1" value="">
                                 <input type="text" id="need_title_1" class="form-control">
                               </div>
                           </div>
                           
                           <div class="row">
                              <div class="form-group col-md-4">
                                  <label for="first">Descripation <em style="color:red">*</em></label>
                                  <textarea rows="5" id="need_desc_1" data-check="1" onblur="checkinterviewneeddeatils(this)" cols="41"></textarea>
                               </div>
                               <div class="form-group col-md-4">
                                  <label for="first"> Notes</label>
                                   <textarea rows="5" cols="41" id="need_notes_1" data-check="1" onblur="checkneedupdate(this)"></textarea>
                               </div>
                               <div class="form-group col-md-2 ">
                                  <label for="first">Urgency</label>
                                                <br>
                                                <select id="need_urgency_1" data-check="1" onchange="checkneedupdate(this)">
                                                   <option value="">Select</option>
                                                   <option value="Critical">Critical</option>
                                                   <option value="High">High </option>
                                                    
                                                    <option value="Modrate">Modrate</option>
                                                    <option value="Low">Low</option>

                                                </select>
                               </div>
                                            <div class="form-group col-md-2 pull-right">
                                                <label for="first">Status</label>
                                                <br>
                                                <select id="need_status_1" data-check="1" onchange="checkneedupdate(this)">
                                                     <option value="">Select</option>
                                                     <option value="New">New </option>
                                                    <option value="Pending">Pending</option>
                                                    <option value="Close">Close </option>
                                                    <option value="Review">Review </option>

                                                </select>
                                            </div>
                                        </div>
                                </div>
                                </form>
                                <div id="main-interview " ></div>
                            <div class="input_fields_wrap_obstcles_1 obstacle-inter ">
                <div class="post-tags"></div>
                            </div>
                            <hr>
                            <div id="main-interview "></div>
                            <div class="input_fields_wrap " >
                             <?php } ?>
                 <div id="main-interview " ></div>
                            <div class="input_fields_wrap_obstcles obstacle-inter ">
                <div class="post-tags"></div>
                            </div>

                            <div id="main-interview "></div>
                            <div class="input_fields_wrap " >

                        </div>

                            

                        </div>

                    </div>

                </div>

</div></div>
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

<table class="table ">
      <tbody>
  
  <thead>
    <tr>
      <th scope="col">
        <label>Search</label>
        <input type="Search" name="provider_name" id="ptn_provider" class="form-control" placeholder="Provider Name..">
      </th>
      <th scope="col">
        <label>Populations</label>
        <select class="form-control" name="population[]"  id='testSelect1' multiple>
          <option value="Any">Any</option>
          <option value="Citizenship">Citizenship</option>
          <option value="Disabled">Disabled</option>
          <option value="Familiy">Families w/ Children</option>
          <option value="LGBTQ" >LGBTQ</option>
          <option value="LowIncome">Very Low-Income</option>
          <option value="Native">Native American</option>
          <option value="Other">Other</option>
          <option value="Senior">Senior</option>
          <option value="Veteran">Veteran/Military</option>
        </select>
      </th>
     
      <th scope="col">
        <label>Services</label>
        <select class="form-control" name="services_type[]"  id='services-test' multiple>
          <option value="Abuse">Abuse</option>
          <option value="Addiction">Addiction</option>
          <option value="BasicNeeds" >BasicNeeds</option>
          <option value="Behavioral" >Behavioral</option>
          <option value="CaseManagement" >CaseManagement</option>
          <option value="Clothing" >Clothing</option>
          <option value="DayCare" >DayCare</option>
          <option value="Disabled" >Disabled</option>
          <option value="Education">Education</option>
          <option value="Emergency" >Emergency</option>
          <option value="Employment" >Employment</option>
          <option value="Family" >Family</option>
          <option value="Financial" >Financial</option>
          <option value="Food">Food</option>
          <option value="GeneralSupport" >GeneralSupport</option>
          <option value="Housing" >Housing</option>
          <option value="Identification">Identification</option>
          <option value="IndependentLiving">IndependentLiving</option>
          <option value="Legal" >Legal</option>
          <option value="Medical" >Medical</option>
          <option value="Research" >Research</option>
          <option value="Resources" >Resources</option>
          <option value="Respite" >Respite</option>
          <option value="Senior" >Senior</option>
          <option value="Transportation">Transportation</option>
          <option value="Veteran" >Veteran</option>
          <option value="Victim" >Victim</option>

        </select>
      </th>
       <th scope="col">
        <label>Tags</label>
        <input type="text"  name="tags" id="ptn_tags" class="form-control" placeholder="Tags">
      </th>
      <th scope="col">
        <label>Location Name</label>
        <input type="text" value="" name="location" id="ptn_location" class="form-control" placeholder="Location">
      </th>
      <th scope="col">
        <label>Location Type</label>
        
        <select class="form-control" name="location_type" id="ptn_locationtype">
        <option value="">Please Select </option>
          <option value="City" >City</option>
          <option value="State" >State</option>
          <option value="County" >County</option>
          <option value="National" >National</option>
        
        </select>
      </th>
      <th scope="col">
        <button type="search " onclick="getserachserviceprovider()" class="custom-btn btn-success">Search</button> 
        <input type="hidden" id="assignprovidertab" value=""/>
        <!-- <input type="submit" name="search" class="custom-btn btn-success" value="Search"> -->
      </th>
    </tr>
  </thead>

  
</tbody>
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
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script> 

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.multiselect.js"></script>

<script>
    $(function () {
        $('#testSelect1').multiselect({
            
            placeholder: 'Please Select',
            
            
            selectAll: true
        });

    });




     $(function () {
        $('#services-test').multiselect({
            
            placeholder: 'Please Select',
            
            
            selectAll: true
        });

    });

     
</script>
<script>
    jQuery(document).ready(function(){
        var date_input=jQuery('.datepicker'); //our date input has the name "date"
        var container=jQuery('.bootstrap-iso form').length>0 ? jQuery('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'yyyy-mm-dd',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
</script>


<script>

  if (window.location.href.indexOf("localhost") > -1) {
      var ajax_url = "<?php echo '/chc/chc_wordpress/ajax.php'; ?>";
    }else{
       var ajax_url = "<?php echo '/ajax.php'; ?>";
    }

var urgencyoption = "<option value=''>Select</option><option value='Critical'>Critical</option><option value='High'>High</option><option value='Modrate'>Modrate</option><option value='Low'>Low</option>";

var statusoption = "<option value=''>Select</option><option value='New'>New</option><option value='Pending'>Pending</option><option value='Close'>Close</option><option value='Review'>Review</option>";


jQuery(document).ready(function() {
    var max_fields      = 40; 
    var wrapper         = jQuery(".input_fields_wrap_additional");    
    var x = 1; 
    jQuery("#addmoreadditional").click(function(e){ 
       e.preventDefault();
        if(x < max_fields){ 
            var name1 = "additional[]";
            var name2 = "additionalkeys[]";
            var divviid = "additionaldiv"+x;
            var placeholdertext = "additional field "+x;
            jQuery(wrapper).append("<div id='"+divviid+"' class='form-group'><div class='row'><div class='col-md-12'><div class='col-md-10'><input type='text' name='"+name2+"' placeholder='Additional Field' class='form-control' value='' onblur='updateinterviewfield()' ></div><div class='col-md-10'><input type='text' name='"+name1+"' class='form-control' placeholder='Additional Value' value='' onblur='updateinterviewfield()' ></div></div></div><button class='btn-danger remove_field' id='remove-additionaldiv"+x+"' onclick='removeobstr(this.id)' type='button' title='Remove'><i class='fa fa-minus-circle'></i></button></div>"); //add input box
             x++; 
        }
    });

});



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


//var g = 0;
function addobsoln(iid) {
    var y = 1;
   // var arr = iid.split('_');
    var e = $(iid).attr('data-check');
    var f = $(iid).attr('data-neck');

    var g = jQuery("#last_sol_"+e+"_"+f).val(); 
    if(g != ''){
      var g = parseInt(g) + 1;
      jQuery("#last_sol_"+e+"_"+f).val(g);
    }else{
      var g = 1;
    }


    var max_fields      = 20; 
    var wrapper         = jQuery(".input_fields_wrap_solution_"+e+"_"+f); 
 
    if(y < max_fields){

        var titleid = "solution_title_"+e+"_"+f+"_"+g;
        var descid = "solution_desc_"+e+"_"+f+"_"+g;   
        var providerid = "solution_provider_"+e+"_"+f+"_"+g;   
        var searchprovider = "search-"+e+"_"+f+"_"+g;   
        var savedsoliid = "saved_solutionid_"+e+"_"+f+"_"+g;   
            
        var triid = "trobs_"+e+"_"+g;
        var soltriid = "soltrobs_"+e+"_"+g;

            jQuery(wrapper).append("<div id='"+soltriid+"'><div class='main-interview obstacle-inter1 margin-left box-shadow'><div class='row'><div class='col-md-4'><h3><a id='solutionancher' class='accordion-toggle' data-toggle='collapse'  href='#"+triid+"'>Solution </a> </h3></div><div id='"+triid+"' class='panel-collapse collapse'><div class='panel-body'><div class='col-md-8 inline'><div class='pull-left btn-right btn-right1'><a href='javascript:void(0)' id='remove-"+soltriid+"' onclick='removeobstr(this.id)' style='color: red;padding-left: 20px;'>Remove</a></div><div class='pull-right btn-right btn-right1'></div></div></div><div class='alert alert-success alert-dismissible' id='solution-msg' style='display: none' ><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success!</strong> Solution detail successfully added.</div><form action=''><div class='row'><div class='form-group col-md-3 left'><label for='first'>Title</label><input type='hidden' id='"+savedsoliid+"' class='form-control' value=''><input type='text' id='"+titleid+"' class='form-control'></div></div><div class='row'><div class='form-group col-md-4'><label for='first'>Descripation</label><textarea rows='5' id='"+descid+"' data-tot='"+e+"'  data-fot='"+f+"' data-got='"+g+"' onblur='checkInterviewSolutiondeatils(this)' cols='45'></textarea></div></div><div class='row'><div class='form-group col-md-4'><h5><button type='button' class='btn1 btn-success'  data-toggle='modal'  data-target='#myProviderModal' class='form-control' id='"+searchprovider+"' onclick='searchprovider(this.id)'>Search Provider</button></h5><label for='first'>Search</label><input type='text' id='"+providerid+"' data-tot='"+e+"'  data-fot='"+f+"' data-got='"+g+"' onblur='updateInterviewSolutiondeatils(this)' onclick='updateInterviewSolutiondeatils(this)' class='form-control' placeholder='Search Entire Database'></div></div></div></form></div></div></div>"); //add input box
             y++; 
             g++; 
        }
}


function checkInterviewSolutiondeatils(iid) {

    var neediid = $(iid).attr('data-tot');
    var obsiid = $(iid).attr('data-fot');
    var soliid = $(iid).attr('data-got');
    var obstacle_iid = $("#saved_obstacleid_"+neediid+"_"+obsiid).val();

    var email = "<?php echo $email; ?>";
    var solution_title = $("#solution_title_"+neediid+"_"+obsiid+"_"+soliid).val();
    var solution_description = $("#solution_desc_"+neediid+"_"+obsiid+"_"+soliid).val();
    if(obstacle_iid == ''){
        //alert('You can not add soultion without add obstacle');
        return false;
    }else if(solution_title == ''){
        //alert('Please fill soultion title');
        return false;
    }else if(solution_description == ''){
        //alert('Please fill soultion descripation');
        return false;
    }else{
        jQuery.ajax({
            type: 'post',
            url: ajax_url,
            data: {'email':email,'obstacle_id':obstacle_iid,'solution_title':solution_title,'solution_description':solution_description,funtion:'saveinterviewsolution'},
            success: function (res) {
                var obj = JSON.parse(res);
                var result = obj.error;
                var saved_solution_id = obj.solution_id
                var trimStr  = $.trim(result);
                if(trimStr == 11){          
                    jQuery("#saved_solutionid_"+neediid+"_"+obsiid+"_"+soliid).val(obj.solution_id);
                    $("#msg-sol-"+neediid+"_"+obsiid+"_"+soliid).show();

                }else{
                    alert('Error ! Please try again ');
                }
              
            }
          });
    }
}



     
    
    
    
   function add(iid){
   //var y = 1; 
        var r = jQuery(iid).attr('data-check');
        var y = jQuery("#last_obs_"+r).val(); 
        //alert(y);
        if (typeof value === "undefined") {
            var y = 1;
        }else if(y != '' &&  y != 'undefined'){
        
          var y = parseInt(y) + 1;
          jQuery("#last_obs_"+r).val(y);
        }else{
          var y = 1;
        }

        //alert(y);
        
        //var r = 1; 
       // var ttem1 = jQuery(this).attr('data-check1');
       var max_fields      = 20;
        var wrapper         = jQuery(".input_fields_wrap_obstcles_"+r); 
        //alert(ttem);
        //e.preventDefault();
        if(y < max_fields){        
            var titleid = "obstacle_title_"+r+"_"+y;
            var descid = "obstacle_desc_"+r+"_"+y;
            var notesdid = "obstacle_notes_"+r+"_"+y;
            var urgencyid = "obstacle_urgency_"+r+"_"+y;
            var statusid = "obstacle_status_"+r+"_"+y;
            //alert(titleid);
            var triid = "trobs"+y;
            var diivvtriid = "diivtrobs"+y;
            var provideriid = "provider-"+y;
            
            jQuery(wrapper).append("<div id='"+diivvtriid+"'><div class='main-interview '><div class='row'><div class='col-md-4'><h3><a id='obstacleancher' class='accordion-toggle' data-toggle='collapse'  href='#"+triid+"'>Obstacle</a> </h3></div><div id='"+triid+"' class='panel-collapse collapse margin-left box-shadow'><div class='panel-body'><div class='col-md-8 inline'><div class='pull-left btn-right btn-right1 '><a href='javascript:void(0)' style='color: red;padding-left: 20px;' id='remove-"+diivvtriid+"' onclick='removeobstr(this.id)'>Remove</a></div><div class='pull-right btn-right'><a href='javascript:void(0)' id='sol_1_"+y+"' data-check = '"+r+"' data-neck = '"+y+"' onclick='addobsoln(this)'  style='color: red;'><i class='fa fa-plus' aria-hidden='true'></i> Add solution </a></div></div></div><div class='alert alert-success alert-dismissible' id='obstacle-msg' style='display: none'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success!</strong> Obstacle detail successfully added.</div><form action=''><div class='row'><div class='form-group col-md-3 left'><input type='hidden' id='saved_obstacleid_"+r+"_"+y+"' value=''><label for='first'>Title</label><input type='text' id='"+titleid+"' class='form-control' value=''></div></div><div class='row'><div class='form-group col-md-4'><label for='first'>Descripation</label><textarea rows='5' data-com='"+r+"' data-tom ='"+y+"' id='"+descid+"' cols='41' onblur='checkInterviewObstacledeatils(this)'></textarea></div><div class='form-group col-md-4'><label for='first'> Notes</label><textarea rows='5' cols='41' data-pop='"+r+"' data-mom ='"+y+"' id='"+notesdid+"' onblur='updateInterviewObstacle(this)'></textarea></div><div class='form-group col-md-2'><label for='first'>Urgency</label><br><select data-pop='"+r+"' data-mom ='"+y+"' id='"+urgencyid+"' onchange='updateInterviewObstacle(this)'>"+urgencyoption+"</select></div><div class='form-group col-md-2 pull-right'><label for='first'>Status</label><br><select data-pop='"+r+"' data-mom ='"+y+"' id='"+statusid+"' onchange='updateInterviewObstacle(this)'>"+statusoption+"</select></div></div></div></form></div> <div id='main-interview'></div><div class='input_fields_wrap_solution_"+r+"_"+y+"'></div></div></div>"); //add input box
             y++; 
        }
    }
   



jQuery(document).ready(function() {
    var max_fields      = 20; 
    var wrapper         = jQuery(".input_fields_wrap");   
    var x = "<?php echo $intkey+1; ?>"; 
    //alert(x);
    var m = 1; 
    jQuery(".addmore").click(function(e){ 
        e.preventDefault();
        if(x < max_fields){         
            var name1 = "tasks["+x+"][task_type]";
            var name2 = "tasks["+x+"][provider]";
            var name3 = "tasks["+x+"][task_owner]";
            var name4 = "tasks["+x+"][task_description]";
            var name5 = "tasks["+x+"][task_deadline]";
            var name6 = "tasks["+x+"][task_status]";
            var triid = "paneltr"+x;
            var obstriid = "paneltrobs"+x;
            var soltriid = "paneltrsol"+x;
            var diviid = "tr"+x;
            
            jQuery(wrapper).append("<div id='"+diviid+"'><div  class='main-interview'><div class='row'><div class='col-md-6'><h3 ><a class='accordion-toggle' data-toggle='collapse'  href='#"+triid+"'>Need</a></h3></div><div id='"+triid+"' class='panel-collapse collapse'><div class='panel-body'><div class='col-md-6'><div class='pull-right btn-right'><a class='add-need' href='javascript:void(0)' id='addmore11' onclick='removetr("+x+")' style='color: red;' >Remove</a><br><a onclick='add(this)' class='addmoreObstacle' data-check ='"+x+"' href='javascript:void(0)'  ><i class='fa fa-plus' aria-hidden='true'></i> Add Obstacle </a></div></div></div> <div class='alert alert-success alert-dismissible' id='need-msg-"+x+"' style='display: none'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success!</strong> Need detail successfully added. </div><form action=''><div class='row'><div class='form-group col-md-3 left'><label for='first'>Title <em style='color:red'>*</em></label><input type='hidden' id='saved_needid_"+x+"' value=''><input type='text' id='need_title_"+x+"' class='form-control'></div></div><div class='row'><div class='form-group col-md-4'><label for='first'>Descripation <em style='color:red'>*</em></label><textarea rows='5'data-check='"+x+"' id='need_desc_"+x+"' onblur='checkinterviewneeddeatils(this)' cols='41'></textarea></div><div class='form-group col-md-4'><label for='first'> Notes</label><textarea rows='5' cols='41' data-check='"+x+"' id='need_notes_"+x+"' onblur='checkneedupdate(this)'></textarea></div><div class='form-group col-md-2'><label for='first'>Urgency</label><br><select data-check='"+x+"' id='need_urgency_"+x+"' onchange='checkneedupdate(this)'>"+urgencyoption+"</select></div><div class='form-group col-md-2 pull-right'><label for='first'>Status</label><br><select data-check='"+x+"' id='need_status_"+x+"' onchange='checkneedupdate(this)'>"+statusoption+"</select></div></div></div></form></div></div><div class='main-interview'></div><div class='input_fields_wrap_obstcles_"+x+"'></div><hr><div class='post-tags'></div></div></div>"); //add input box
             x++; 
             //x++; 
        }
    });
   
});

function removetr(id){
    jQuery('#tr'+id).remove();
}

function removeobstr(id){
    var arr = id.split('-');
    var r = arr[1];
    jQuery('#'+r).remove();
}

function removedata(iid){
  var arr = iid.split('-');
  var idslug = arr[1];
  var type = arr[0];
  if(type == 'need'){
    var id = $("#saved_needid_"+idslug).val();
  }else if(type == 'obstacle'){
   var id = $("#saved_obstacleid_"+idslug).val();
  }else if(type == 'solution'){
    var id = $("#saved_solutionid_"+idslug).val();
  }
  
  var email = "<?php echo $email; ?>";
  if(type == ''){
     return false;
  }else if(id == ''){
     return false;
  }else{
    if (confirm('Are you sure to remove this')) {
      jQuery.ajax({
              type: 'post',
              url: ajax_url,
              data: {'id':id,'email':email,'type':type,funtion:'removeInterviewData'},
              success: function (res) {
                  if(res == 11){          
                    location.reload();
                  }else{
                      return false;
                  }
                
              }
      });
    }else{
      return false;
    }

  }
}




function updateinterviewfield(){
      var interview_iid = "<?php echo base64_decode($_GET['iid']); ?>";
      var email = "<?php echo $email; ?>";
      
      var caller_firstname = $("#caller_first_name").val();
      var caller_lastname = $("#caller_last_name").val();
      var caller_dob = $("#caller_dob").val();
      var caller_address = $("#caller_address").val();
      var caller_state = $("#caller_state").val();
      var caller_zipcode = $("#caller_zipcode").val();
      var values = $("input[name='additional[]']")
              .map(function(){return $(this).val();}).get();
      var values1 = $("input[name='additionalkeys[]']")
              .map(function(){return $(this).val();}).get();

      //alert(values);        
      //alert(values1);        
              
      if(values == ''){
         var caller_additional_fields = '';
      }else{
         var caller_additional_fields = values;
      } 

      if(values1 == ''){
         var caller_additional_keys = '';
      }else{
         var caller_additional_keys = values1;
      }        
      

      
      if(interview_iid != ''){


      if(caller_firstname == ''){
         //alert('Please fill first name');
         return false;
      }else if(caller_lastname == ''){
        //alert('Please fill last name');
        return false;
      }else if(caller_dob == ''){
        //alert('Please fill DOB');
        return false;
      }else{
        jQuery.ajax({
            type: 'post',
            url: ajax_url,
            data: {'interview_id':interview_iid,'email':email,'caller_first_name':caller_firstname,'caller_last_name':caller_lastname,'caller_dob':caller_dob,'caller_address':caller_address,'caller_state':caller_state,'caller_zipcode':caller_zipcode,'caller_additional_fields':caller_additional_fields,'caller_additional_keys':caller_additional_keys,funtion:'updateInterviewData'},
            success: function (res) {
                //console.log(res);
                if(res == '11'){          
                    return true;
                }else{
                    //alert('Error ! Please try again ');
                }
              
            }
          });
      }

      }else{
        return false;
      }

 

}


function checkneedupdate(iid) {
    var needdiid = $(iid).attr('data-check');
    var need_id = $("#saved_needid_"+needdiid).val();
    var email = "<?php echo $email; ?>";
    var need_title = $("#need_title_"+needdiid).val();
    var need_desc = $("#need_desc_"+needdiid).val();
    var need_notes = $("#need_notes_"+needdiid).val();
    var need_urgency = $("#need_urgency_"+needdiid).val();
    var need_status = $("#need_status_"+needdiid).val();

    if(need_id == ''){
        return false;
    }else if(need_title == ''){
        return false;
    }else if(need_desc == ''){
        return false;
    }else{
        jQuery.ajax({
            type: 'post',
            url: ajax_url,
            data: {'email':email,'need_id':need_id,'need_title':need_title,'need_description':need_desc,'need_notes':need_notes,'need_urgency':need_urgency,'need_status':need_status,funtion:'updateinterviewneeds'},
            success: function (res) {
                if(res == 11){ 
                 jQuery("#need-msg-"+needdiid).show();          
                }else{ 
                    return false;
                }
              
            }
          });
      }


}


function checkinterviewneeddeatils(iid) {
    var moreiid = $(iid).attr('data-check');
    var interview_iid = $("#saved_interview_id").val();
    var checking = jQuery("#saved_needid_"+moreiid).val();
    //alert(moreiid);
    var email = "<?php echo $email; ?>";
    var need_title = $("#need_title_"+moreiid).val();
    var need_desc = $("#need_desc_"+moreiid).val();
    if(checking == ''){
    if(interview_iid == ''){
        return false;
    }else if(need_title == ''){
        return false;
    }else if(need_desc == ''){
        return false;
    }else{
        jQuery.ajax({
            type: 'post',
            url: ajax_url,
            data: {'email':email,'interview_id':interview_iid,'need_title':need_title,'need_description':need_desc,funtion:'saveinterviewneeds'},
            success: function (res) {
                var obj = JSON.parse(res);
                var result = obj.error;
                var saved_needid = obj.need_id
                var trimStr  = $.trim(result);
                if(trimStr == '11'){          
                    jQuery("#saved_needid_"+moreiid).val(obj.need_id);
                    $("#need-msg-"+moreiid).show();     
                }else{
                    alert('Error ! Please try again ');
                }
              
            }
          });
      }
    }


}





function checkInterviewObstacledeatils(iiid) {
    //var interview_iid = $("#saved_interview_id").val();
    var obsiid = $(iiid).attr('data-tom');
    var neediid = $(iiid).attr('data-com');
    //alert(obsiid);
    //alert(neediid);
    var need_iid = $("#saved_needid_"+neediid).val();
    //alert(need_iid);
    var email = "<?php echo $email; ?>";
    var obstacle_title = $("#obstacle_title_"+neediid+"_"+obsiid).val();
    var obstacle_desc = $("#obstacle_desc_"+neediid+"_"+obsiid).val();
    //alert(obstacle_desc);
    if(need_iid == ''){
       // alert('You can not add need without add need');
        return false;
    }else if(obstacle_title == ''){
      //  alert('Please fill obstacle title');
        return false;
    }else if(obstacle_desc == ''){
        //alert('Please fill obstacle descripation');
        return false;
    }else{
        jQuery.ajax({
            type: 'post',
            url: ajax_url,
            data: {'email':email,'need_id':need_iid,'obstacle_title':obstacle_title,'obstacle_description':obstacle_desc,funtion:'saveinterviewobstacles'},
            success: function (res) {
               console.log(res);
                var obj = JSON.parse(res);
                var result = obj.error;
                var saved_obstacleid = obj.obstacle_id
                var trimStr  = $.trim(result);
                if(trimStr == '11'){          
                    jQuery("#saved_obstacleid_"+neediid+"_"+obsiid).val(obj.obstacle_id);
                    //$("#obstacle-msg").show();  
                    $("#msg-obs-"+neediid+"-"+obsiid).show();   
                   // $("#solutionancher")[0].click();
                   // $("#obstacle-msg").fadeOut(3000);

                    //alert(obj.need_id);         
                    //alert('Obstacle save successfully');
                }else{
                    alert('Error ! Please try again ');
                }
              
            }
          });
    }
}

function updateInterviewObstacle(iid) {
    var needdiid = $(iid).attr('data-pop');
    var obbsiid = $(iid).attr('data-mom');
    var obstacle_iid = $("#saved_obstacleid_"+needdiid+"_"+obbsiid).val();
    //alert(obstacle_iid);
    var email = "<?php echo $email; ?>";
    var obstacle_title = $("#obstacle_title_"+needdiid+"_"+obbsiid).val();
    var obstacle_desc = $("#obstacle_desc_"+needdiid+"_"+obbsiid).val();
    var obstacle_notes = $("#obstacle_notes_"+needdiid+"_"+obbsiid).val();
    var obstacle_urgency = $("#obstacle_urgency_"+needdiid+"_"+obbsiid).val();
    var obstacle_status = $("#obstacle_status_"+needdiid+"_"+obbsiid).val();
    if(obstacle_iid == ''){
        return false;
    }else if(obstacle_title == ''){
        return false;
    }else if(obstacle_desc == ''){
        return false;
    }else{
        jQuery.ajax({
            type: 'post',
            url: ajax_url,
            data: {'email':email,'obstacle_id':obstacle_iid,'obstacle_title':obstacle_title,'obstacle_description':obstacle_desc,'obstacle_notes':obstacle_notes,'obstacle_urgency':obstacle_urgency,'obstacle_status':obstacle_status,funtion:'updateInterviewObstacles'},
            success: function (res) {
            	console.log(res);
                if(res == 11){          
                   $("#msg-obs-"+needdiid+"-"+obbsiid).show();
                }else{
                    return false;
                }
              
            }
          });
    }
}


function updateInterviewSolutiondeatils(iid) {
     var neediid = $(iid).attr('data-tot');
    var obsiid = $(iid).attr('data-fot');
    var soliid = $(iid).attr('data-got');
    var solution_iid = $("#saved_solutionid_"+neediid+"_"+obsiid+"_"+soliid).val();
    //alert(interview_iid);
    var email = "<?php echo $email; ?>";
    var solution_title = $("#solution_title_"+neediid+"_"+obsiid+"_"+soliid).val();
    var solution_description = $("#solution_desc_"+neediid+"_"+obsiid+"_"+soliid).val();
    var solution_provider = $("#solution_provider_"+neediid+"_"+obsiid+"_"+soliid).val();

   // alert(solution_iid);

   // alert(solution_description);
   // alert(solution_provider);

    if(solution_iid == ''){
        //alert('You can not add soultion without add obstacle');
        return false;
    }else if(solution_title == ''){
        //alert('Please fill soultion title');
        return false;
    }else{
        jQuery.ajax({
            type: 'post',
            url: ajax_url,
            data: {'email':email,'solution_id':solution_iid,'solution_title':solution_title,'solution_description':solution_description,'solution_provider':solution_provider,funtion:'updateInterviewSolutions'},
            success: function (res) {
              console.log(res);
                if(res == 11){
                 $("#msg-sol-"+neediid+"_"+obsiid+"_"+soliid).show();          
                   return true;
                }else{
                    //alert('Error ! Please try again ');
                    return false;
                }
              
            }
        });
    }
}

  function searchprovider(iid){
    var zipcode = '98168';
    //alert(zipcode);
    document.getElementById("assignprovidertab").value = iid;
    getserviceprovide(zipcode);
    //alert(zipcode);
    }


    function getserachserviceprovider(){
   jQuery("#providerdiv").html('');
    var location_type = jQuery("#ptn_locationtype").val();
  //  var population = jQuery("#ptn_population").val();
    var population = jQuery("#testSelect1").val();
    var location = jQuery("#ptn_location").val();
   // var services_type = jQuery("#ptn_servicetype").val();
    var tagss = jQuery("#ptn_tags").val();
    var services_type = jQuery("#services-test").val();
    var provider_name = jQuery("#ptn_provider").val();
    var iid = jQuery("#assignprovidertab").val();
    jQuery.ajax({
          url: ajax_url,
          type:'POST',
          cache: false,
          data : {'location_type':location_type,'population':population,'location':location,'services_type':services_type,'provider_name':provider_name,'iid':iid,'tags':tagss,funtion:'selectserviceprovider'},
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


function getserviceprovide(zipcode){
      jQuery("#providerdiv").html('');
    //  document.getElementById("listprac").classList.add("view-active");
    //  document.getElementById("mapprac").classList.remove("view-active");
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

   /* function getserviceprovide(){
        var zipcode = '';
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
    }*/

function assignprovider(iid){
  
  var id = iid.replace("search-", "solution_provider_");
  //alert(id);
  //solution_provider_
  document.getElementById(id).value = jQuery('#providernamefill').text();
  jQuery("#closeserviceprovider").click();
}

function showdetails(details) { 
  var providername = jQuery(details).attr('data-name');
  var providershortdesc = jQuery(details).attr('data-shortdesc');
  var programName = jQuery(details).attr('data-programName');
  var population = jQuery(details).attr('data-population');
  var populationDesc = jQuery(details).attr('data-populationDesc');
  var services = jQuery(details).attr('data-services');
  var servicesTags = jQuery(details).attr('data-servicesTags');
  var mainOffice = jQuery(details).attr('data-mainOffice');
  var quickLink = jQuery(details).attr('data-quickLink');
  var contactPage = jQuery(details).attr('data-contactPage');
  var homePageUrl = jQuery(details).attr('data-homePageUrl');
  var programPageUrl = jQuery(details).attr('data-programPageUrl');

  if(quickLink==''){
    jQuery("#quickLink").removeAttr("href");
   } else{
    jQuery("#quickLink").attr("href", quickLink);
  }

  if(contactPage==''){
  jQuery("#contactPage").removeAttr("href");
 } else{
    jQuery("#contactPage").attr("href", contactPage);
 }

 if(homePageUrl==''){
  jQuery("#homePageUrl").removeAttr("href");
 } else{
  jQuery("#homePageUrl").attr("href", homePageUrl);
 }

  if(programPageUrl==''){
  jQuery("#programPageUrl").removeAttr("href");  
  
 } else{
  jQuery("#programPageUrl").attr("href", programPageUrl);
 }

 if(programPageUrl==''){
  jQuery("#programPageUrl").removeAttr("href");
 } else{
  jQuery("#programPageUrl").attr("href", programPageUrl);
 }
 
  jQuery('#providernamefill').text(providername);
  jQuery('#providershortdescfill').html(providershortdesc);
  jQuery('#programName').html(programName);
  jQuery('#population').html(population);
  jQuery('#populationDesc').html(populationDesc);
  jQuery('#services').html(services);
  jQuery('#servicesTags').html(servicesTags);
  jQuery('#mainOffice').html(mainOffice);

}

  </script>



