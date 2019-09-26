<?php
/**
 * Template Name: create_interviews
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


  form {
    padding: 0 15px;
}
.obstacle-inter{
  position: relative;
  left: 3%;
  margin-right: 15px;
  right: 3%;
}
.obstacle-inter1 {
    position: relative;
    overflow: hidden;
    left: 2%;
    right: 2%;
}
.margin-left{
  padding-left: 15px;
  margin-right: 16px;
}
.box-shadow {
    box-shadow: 0 0 20px #ededed;
}
  
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
h3 a {
    color: #242424;
    text-decoration: none;
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
  font-size: 20px;
}
.btn-right a {
  font-size: 18px;
}
.form-main{
  padding: 0 15px;
}
.btn-right1 {
/*    padding: 6px 0 14px!important;
*/    align-items: center;
    display: inline-flex;
}

.btn-success {
    color: #fff;
    background-color: #5cb85c;
    border-color: #4cae4c;
    border: 0;
    padding: 9px;
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
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">

<?php
$error = 0;
if(isset($_SESSION['userdata'])){
      $email = $_SESSION['userdata']['email'];
      $states = getstates();
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
                                        <input type="hidden" id="saved_interview_id" value=""/>
                                            <label for="first">First name <em style="color:red">*</em></label>
                                            <input type="text" class="form-control" id="caller_first_name" value=""  autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label for="pwd">Last name <em style="color:red">*</em></label>
                                            <input type="text" class="form-control" id="caller_last_name" value=""  autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label for="DOB">DOB <em style="color:red">*</em></label>
                                            <input type="text" class="form-control datepicker" id="caller_dob" value=""  onblur="checkinterviewfield();" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="Address">Address </label>
                                            <input type="text" class="form-control" value="" id="caller_address" onblur="updateinterviewfield();" >
                                        </div>
                                        <div class="form-group">
                                            <label for="zip">Zip </label>
                                            <input type="text" id="caller_zipcode" onblur="updateinterviewfield();"  class="form-control" value="" >
                                        </div>
                                        <div class="form-group">
                                            <label for="state">State </label>
                                            <br>
                                            <select  onchange="updateinterviewfield();" id="caller_state">
                                                
                                                <?php if(!empty($states)){
                                                  foreach ($states as $key => $value) { ?>
                                                <option value="<?php echo $key; ?>"><?php echo $value; ?> </option> <?php  }  } ?>
              
                                            </select>

                                        </div>
                                 <!--        <div class="form-group">
                                            <label for="zip">PCP </label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="state">Insurance </label>
                                            <br>
                                            <select>
                                                <option value="har">demo1 </option>
                                                <option value="har">demo2</option>
                                                <option value="har">demo3 </option>
                                            </select>
                                        </div> -->
                                        <a href="javascript:void(0)" id="addmoreadditional" class="text-center"><i class="fa fa-plus" aria-hidden="true"></i> Add additional field</a>

                                        <div class="input_fields_wrap_additional">
                                        
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>

        <div class="col-md-9 panel-group" id="accordion">
            <div class="panel ">
                <div class="post_title post_tilte-inter">
                  <h3 class="pull-left"><a id="intervirefiels"  class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" data-target="#panel1" href="#" ><i class="fa fa-plus" aria-hidden="true"></i></a> Interviews</h3>
                  <ul class="pull-right  nav navbar-nav">
                    <li><a href="#"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </li>
                  </ul>
                </div>
            </div>
                
            <div class="alert alert-success alert-dismissible"  id="interview-msg" style="display: none" >
               <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
               <strong>Success!</strong> Interview detail successfully added.
            </div>
  
            <div id="panel1" class="panel-collapse collapse">
               <div class="panel-body">
                  <div class="main-interview">
                     <div class="row">
                        <div class="col-md-6">
                            <h3 ><a class="accordion-toggle" data-toggle="collapse"  href="#panel2">Need</a></h3>
                        </div>
                        <div id="panel2" class="panel-collapse collapse box-shadow">
                            <div class="panel-body">
                             <div class="col-md-6">
                                <div class="pull-right btn-right">
                                  <a class="add-need" href="javascript:void(0)" id="addmore" ><i class="fa fa-plus" aria-hidden="true"></i> Add Need</a><br>
                                  <a href="javascript:void(0)" class="addmoreObstacle" id="obs_1" style="color: red;"><i class="fa fa-plus" aria-hidden="true"></i> Add Obstacle </a>
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
                            </div>
                        </div>  <!-- <hr>
                                <div id="main-interview"></div>
                                <div class="main-interview">
                                    <div class="row">
                                        <div class="col-md-4 ">
                                            <h3><a id="obstacleancher" class="accordion-toggle" data-toggle="collapse"  href="#panel3">Obstacle </a> </h3>

                                        </div>
                                        <div id="panel3" class="panel-collapse collapse">
                                          <div class="panel-body">
                                        <div class="col-md-8 inline">
                                            <div class="pull-left btn-right btn-right1 "> -->
                                                <!-- <a href="#" class="pull-left" style="font-size: 25px;padding-right: 25px;border-right:2px solid #ddd; ">Collapse</a>
                                                <a href="#" style="color: red;padding-left: 20px;">Remove</a> -->
                                           <!--  </div>
                                            <div class="pull-right btn-right  "> -->
                                                <!-- <a href="javascript:void(0)"><i class="fa fa-plus" aria-hidden="true" class="addmoreObstacle"></i> Add Obstacle </a><br> -->
                                                 <!-- <a href="javascript:void(0)" data-ndcheck="1" data-obscheck="1" id="addmoreSolutions" style="color: red;"><i class="fa fa-plus" aria-hidden="true"></i> Add solution </a>
                                            </div>
                                            </div>

                                        </div>
                             
    <div class="alert alert-success alert-dismissible" id="obstacle-msg" style="display: none">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> Obstacle detail successfully added.
  </div>

                                    <form action="">
                                        <div class="row">
                                            <div class="form-group col-md-3 left">
                                                <input type="hidden" id="saved_obstacleid_1_1" value="">
                                                <label for="first">Title</label>
                                                <input type="text" id="obstacle_title_1_1" class="form-control" value="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="first">Descripation</label>
                                                <textarea rows="5" id="obstacle_desc_1_1" cols="41"  data-com="1" data-tom="1" onblur="checkInterviewObstacledeatils(this)"></textarea>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="first"> Notes</label>
                                                <textarea id="obstacle_notes_1_1" data-pop='1' data-mom='1' onblur="updateInterviewObstacle(this)" rows="5" cols="41"></textarea>
                                            </div>
                                            <div class="form-group col-md-2 ">
                                             <label for="first">Urgency</label>
                                              <br>
                                                <select id="obstacle_urgency_1_1" data-mom='1' data-pop='1' onchange="updateInterviewObstacle(this)">
                                                <option value="">Select</option>
                                                <option value="High">High </option>
                                                <option value="Critical">Critical</option>
                                                <option value="Modrate">Modrate</option>
                                                <option value="Low">Low</option>

                                                </select>
                                              </div>
                                            <div class="form-group col-md-2 pull-right">
                                                <label for="first">Status</label>
                                                <br>
                                                <select id="obstacle_status_1_1" data-mom='1' data-pop='1' onchange="updateInterviewObstacle(this)">
                                                    <option value="">Select </option>
                                                    <option value="New">New </option>
                                                    <option value="Pending">Pending</option>
                                                    <option value="Close">Close </option>
                                                    <option value="Review">Review </option>

                                                </select>
                                            </div>
                                        </div>
                                </div>
                                </form></div>
                            </div>
                            
                                <hr>
                                <div class="main-interview">
                                    <div class="row">
                                        <div class="col-md-4 ">
                                            <h3><a id="solutionancher" class="accordion-toggle" data-toggle="collapse"  href="#panel4">Solution</a> </h3>

                                        </div>
                                        <div id="panel4" class="panel-collapse collapse">
                                          <div class="panel-body">
                                        <div class="col-md-8 inline">
                                            <div class="pull-left btn-right btn-right1 "> -->
                                                <!-- <a href="#" class="pull-left" style="font-size: 25px;padding-right: 25px;border-right:2px solid #ddd; ">Collapse</a>
                                                <a href="#" style="color: red;padding-left: 20px;">Remove</a> -->
                                           <!--  </div>
                                            <div class="pull-right btn-right btn-right1 "> --><!-- <a href="#"><i class="fa fa-plus" aria-hidden="true"></i> Add solution </a> -->
                                            <!-- </div>

                                        </div>
                                    </div>

                                    
    <div class="alert alert-success alert-dismissible" id="solution-msg" style="display: none" >
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> Solution detail successfully added.
  </div>

                                    <form action="">
                                        <div class="row">
                                            <div class="form-group col-md-3 left">
                                                <label for="first">Title</label>
                                                <input type="hidden" id="saved_solutionid_1_1_1" class="form-control">
                                                <input type="text" id="solution_title_1_1_1" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="first">Descripation</label>
                                                <textarea rows="5" id="solution_description_1_1_1" data-tot="1" data-fot="1" data-got="1" onblur="checkInterviewSolutiondeatils(this)" cols="45"></textarea>
                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="form-group col-md-4">
                                                <h5><b>Attach Service Provider (optional)</b></h5>
                                                <label for="first">Search</label>
                                                <input type="search" data-toggle='modal'  data-target='#myProviderModal' id="solution_provider_1_1_1" onclick="searchprovider(this.id)" data-tot="1" data-fot="1" data-got="1"  class="form-control" placeholder="Search Entire Database">
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-4 ">
                                                <label for="first">Advanced Search</label>
                                                <br>
                                                <select>
                                                    <option value="har">Search </option>
                                                    <option value="har">Search</option>
                                                    <option value="har">Search </option>

                                                </select>
                                            </div>
                                        </div>
                                </div>
                                </form>
                            </div></div> -->
                            <div id="main-interview"></div>
                            <div class="input_fields_wrap_solution_1_1 "></div>
                            <div id="main-interview " ></div>
                            <div class="input_fields_wrap_obstcles obstacle-inter ">
                              
                            </div>
                                <hr >
                                <div class="post-tags"></div>
                            </div>
                            
                            <div id="main-interview "></div>
                            <div class="input_fields_wrap " >

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
                <div class="loader" style="
                      position: fixed;
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

var ajax_url = "<?php echo '/ajax.php'; ?>";

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





var y = 2;
function add(iid) {
    var arr = iid.split('_');
    var r = arr[1];
    //alert(iid);
    var max_fields      = 20; 
    var wrapper         = jQuery(".input_fields_wrap_obstcles_"+r); 
    
    

            if(y < max_fields){        
            var titleid = "obstacle_title_"+r+"_"+y;
            var descid = "obstacle_desc_"+r+"_"+y;
            var notesdid = "obstacle_notes_"+r+"_"+y;
            var urgencyid = "obstacle_urgency_"+r+"_"+y;
            var statusid = "obstacle_status_"+r+"_"+y;
            var triid = "trobs_"+r+"_"+y;
            var divvtriid = "divtrobs_"+r+"_"+y;
            var provideriid = "provider-"+y;
            

            jQuery(wrapper).append("<div id='"+divvtriid+"'><div class='main-interview '><div class='row'><div class='col-md-4'><h3><a id='obstacleancher' class='accordion-toggle' data-toggle='collapse'  href='#"+triid+"'>Obstacle</a> </h3></div><div id='"+triid+"' class='panel-collapse collapse '><div class='panel-body'><div class='col-md-8 inline'><div class='pull-left btn-right btn-right1 '><a href='javascript:void(0)' id='remove-"+divvtriid+"' onclick='removeobstr(this.id)' style='color: red;padding-left: 20px;'>Remove</a></div><div class='pull-right btn-right'><a href='javascript:void(0)' id='sol_1_"+y+"' data-check = '"+r+"' data-neck = '"+y+"' onclick='addobsoln(this)'  style='color: red;'><i class='fa fa-plus' aria-hidden='true'></i> Add solution </a></div></div></div><div class='alert alert-success alert-dismissible' id='obstacle-msg-"+r+"-"+y+"' style='display: none'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success!</strong> Obstacle detail successfully added.</div><form action=''><div class='row'><div class='form-group col-md-3 left'><input type='hidden' id='saved_obstacleid_"+r+"_"+y+"' value=''><label for='first'>Title</label><input type='text' id='"+titleid+"' class='form-control' value=''></div></div><div class='row'><div class='form-group col-md-4'><label for='first'>Descripation</label><textarea rows='5' data-com='"+r+"' data-tom ='"+y+"' id='"+descid+"' cols='41' onblur='checkInterviewObstacledeatils(this)'></textarea></div><div class='form-group col-md-4'><label for='first'> Notes</label><textarea rows='5' cols='41' data-pop='"+r+"' data-mom ='"+y+"' id='"+notesdid+"' onblur='updateInterviewObstacle(this)' ></textarea></div><div class='form-group col-md-2'><label for='first'>Urgency</label><br><select data-pop='"+r+"' data-mom ='"+y+"' id='"+urgencyid+"' onchange='updateInterviewObstacle(this)'>"+urgencyoption+"</select></div><div class='form-group col-md-2 pull-right'><label for='first'>Status</label><br><select data-pop='"+r+"' data-mom ='"+y+"' id='"+statusid+"' onchange='updateInterviewObstacle(this)'>"+statusoption+"</select></div></div></div></form></div> <div id='main-interview'></div><div class='input_fields_wrap_solution_"+r+"_"+y+"'></div></div></div>"); //add input box
             y++; 
             r++; 
        }
}

var g = 1;
function addobsoln(iid) {
    var y = 1;
    var e = $(iid).attr('data-check');
    var f = $(iid).attr('data-neck');

    //alert(e);
    //alert(f);

    var max_fields      = 20; 
    var wrapper         = jQuery(".input_fields_wrap_solution_"+e+"_"+f); 
    //alert(wrapper);
    if(y < max_fields){        
        var titleid = "solution_title_"+e+"_"+f+"_"+g;
        var descid = "solution_desc_"+e+"_"+f+"_"+g;   
        var providerid = "solution_provider_"+e+"_"+f+"_"+g;   
        var savedsoliid = "saved_solutionid_"+e+"_"+f+"_"+g;  
        var searchprovider = "search-"+e+"_"+f+"_"+g;  
            
        var triid = "trobssol_"+e+"_"+g;
        var soltriid = "soltrobs_"+e+"_"+g;
        var provideriid = "provider-"+y;
            
        jQuery(wrapper).append("<div id='"+soltriid+"'><div class='main-interview obstacle-inter1 margin-left box-shadow'><div class='row'><div class='col-md-4'><h3><a id='solutionancher' class='accordion-toggle' data-toggle='collapse'  href='#"+triid+"'>Solution </a> </h3></div><div id='"+triid+"' class='panel-collapse collapse'><div class='panel-body'><div class='col-md-8 inline'><div class='pull-left btn-right btn-right1'><a href='javascript:void(0)' id='remove-"+soltriid+"' onclick='removeobstr(this.id)' style='color: red;padding-left: 20px;'>Remove</a></div><div class='pull-right btn-right btn-right1'></div></div></div><div class='alert alert-success alert-dismissible' id='solution-msg' style='display: none' ><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success!</strong> Solution detail successfully added.</div><form action=''><div class='row'><div class='form-group col-md-3 left'><label for='first'>Title</label><input type='hidden' id='"+savedsoliid+"' class='form-control' value=''><input type='text' id='"+titleid+"' class='form-control'></div></div><div class='row'><div class='form-group col-md-4'><label for='first'>Descripation</label><textarea rows='5' id='"+descid+"' data-tot='"+e+"'  data-fot='"+f+"' data-got='"+g+"' onblur='checkInterviewSolutiondeatils(this)' cols='45'></textarea></div></div><div class='row'><div class='form-group col-md-4'><h5><button type='button' class='btn1 btn-success'  data-toggle='modal'  data-target='#myProviderModal' class='form-control' id='"+searchprovider+"' onclick='searchprovider(this.id)'>Search Provider</button></h5><label for='first'>Search</label><input type='text' id='"+providerid+"' data-tot='"+e+"'  data-fot='"+f+"' data-got='"+g+"' onblur='updateInterviewSolutiondeatils(this)' onclick='updateInterviewSolutiondeatils(this)' class='form-control' placeholder='Search Entire Database'></div></div></div></form></div></div></div>"); //add input box
             y++; 
             g++; 
        }
}

jQuery(document).ready(function() {
    var max_fields      = 60; 
   
    //var add_button      = $("#addmore");   
    var z = 40; 
    var r = 2;
    var option= $("#coountry").html();
    var taskstatusoption = $("#tskstatus").html();
    jQuery("#addmoreSolutions").click(function(e){ 
        var p = jQuery(this).attr('data-ndcheck');
        var q = jQuery(this).attr('data-obscheck');
        var wrapper         = jQuery(".input_fields_wrap_solution_"+p+"_"+q); 
        e.preventDefault();
        if(z < max_fields){   
            var titleid = "solution_title_"+p+"_"+q+"_"+r;
            var descid = "solution_desc_"+p+"_"+q+"_"+r;  
            var providerid = "solution_provider_"+p+"_"+q+"_"+r;   
            var searchproviderid = "search-"+p+"_"+q+"_"+r;   
            var savedsoliid = "saved_solutionid_"+p+"_"+q+"_"+r;
            
            var triid = "trsol"+z;
            var divsoltriid = "divsoltrsol"+z;
            var provideriid = "provider-"+z;

            jQuery(wrapper).append("<div id='"+divsoltriid+"'><div class='main-interview'><div class='row'><div class='col-md-4'><h3><a id='solutionancher' class='accordion-toggle' data-toggle='collapse'  href='#"+triid+"'>Solution </a> </h3></div><div id='"+triid+"' class='panel-collapse collapse'><div class='panel-body'><div class='col-md-8 inline'><div class='pull-left btn-right btn-right1'><a href='javascript:void(0)' id='remove-"+divsoltriid+"' onclick='removeobstr(this.id)' style='color: red;padding-left: 20px;'>Remove</a></div><div class='pull-right btn-right btn-right1'></div></div></div><div class='alert alert-success alert-dismissible' id='solution-msg' style='display: none' ><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success!</strong> Solution detail successfully added.</div><form action=''><div class='row'><div class='form-group col-md-3 left'><label for='first'>Title</label><input type='hidden' id='"+savedsoliid+"' value='' class='form-control'><input type='text' id='"+titleid+"' class='form-control'></div></div><div class='row'><div class='form-group col-md-4'><label for='first'>Descripation</label><textarea rows='5' id='"+descid+"' data-tot='"+p+"' data-fot='"+q+"' data-got='"+r+"'  onblur='checkInterviewSolutiondeatils(this)' cols='45'></textarea></div></div><div class='row'><div class='form-group col-md-4'><h5><button type='button' class='btn btn-success'  data-toggle='modal'  data-target='#myProviderModal' class='form-control' id='"+searchproviderid+"' onclick='searchprovider(this.id)'>Search Provider</button></h5><label for='first'>Search</label><input type='text' id='"+providerid+"' data-tot='"+p+"' data-fot='"+q+"' data-got='"+r+"' onblur='updateInterviewSolutiondeatils(this)' onclick='updateInterviewSolutiondeatils(this)' class='form-control' placeholder='Search Entire Database'></div></div></div></form></div></div></div>"); //add input box
             z++; 
             r++; 
        }
    });
   
});


jQuery(document).ready(function() {
    var max_fields      = 20; 
    var wrapper         = jQuery(".input_fields_wrap_obstcles"); 
    //var add_button      = $("#addmore");   
    var y = 2; 
    var r = 1; 
    var option= $("#coountry").html();
    var taskstatusoption = $("#tskstatus").html();
    jQuery(".addmoreObstacle").click(function(e){ 
        //alert('hii');
       // var r = $(this).attr('id');
        //alert(r);
        e.preventDefault();
        if(y < max_fields){        
            var titleid = "obstacle_title_"+r+"_"+y;
            var descid = "obstacle_desc_"+r+"_"+y;
            var notesdid = "obstacle_notes_"+r+"_"+y;
            var urgencyid = "obstacle_urgency_"+r+"_"+y;
            var statusid = "obstacle_status_"+r+"_"+y;

            var triid = "trobs"+y;
            var diivvtriid = "diivtrobs"+y;
            var provideriid = "provider-"+y;
            
            jQuery(wrapper).append("<div id='"+diivvtriid+"'><div class='main-interview '><div class='row'><div class='col-md-4'><h3><a id='obstacleancher' class='accordion-toggle' data-toggle='collapse'  href='#"+triid+"'>Obstacle</a> </h3></div><div id='"+triid+"' class='panel-collapse collapse margin-left box-shadow'><div class='panel-body'><div class='col-md-8 inline'><div class='pull-left btn-right btn-right1 '><a href='javascript:void(0)' style='color: red;padding-left: 20px;' id='remove-"+diivvtriid+"' onclick='removeobstr(this.id)'>Remove</a></div><div class='pull-right btn-right'><a href='javascript:void(0)' id='sol_1_"+y+"' data-check = '"+r+"' data-neck = '"+y+"' onclick='addobsoln(this)'  style='color: red;'><i class='fa fa-plus' aria-hidden='true'></i> Add solution </a></div></div></div><div class='alert alert-success alert-dismissible' id='obstacle-msg-"+r+"-"+y+"' style='display: none'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success!</strong> Obstacle detail successfully added.</div><form action=''><div class='row'><div class='form-group col-md-3 left'><input type='hidden' id='saved_obstacleid_"+r+"_"+y+"' value=''><label for='first'>Title</label><input type='text' id='"+titleid+"' class='form-control' value=''></div></div><div class='row'><div class='form-group col-md-4'><label for='first'>Descripation</label><textarea rows='5' data-com='1' data-tom ='2' id='"+descid+"' cols='41' onblur='checkInterviewObstacledeatils(this)'></textarea></div><div class='form-group col-md-4'><label for='first'> Notes</label><textarea rows='5' cols='41' data-pop='"+r+"' data-mom ='"+y+"' id='"+notesdid+"' onblur='updateInterviewObstacle(this)'></textarea></div><div class='form-group col-md-2'><label for='first'>Urgency</label><br><select data-pop='"+r+"' data-mom ='"+y+"' id='"+urgencyid+"' onchange='updateInterviewObstacle(this)'>"+urgencyoption+"</select></div><div class='form-group col-md-2 pull-right'><label for='first'>Status</label><br><select data-pop='"+r+"' data-mom ='"+y+"' id='"+statusid+"' onchange='updateInterviewObstacle(this)'>"+statusoption+"</select></div></div></div></form></div> <div id='main-interview'></div><div class='input_fields_wrap_solution_"+r+"_"+y+"'></div></div></div>"); //add input box
             y++; 
        }
    });
   
    /*$(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('tr').remove(); x--;
    })*/
});

jQuery(document).ready(function() {
    var max_fields      = 20; 
    var wrapper         = jQuery(".input_fields_wrap");   
    var x = 2; 
    var m = 1; 

    jQuery("#addmore").click(function(e){ 
        
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
            
            jQuery(wrapper).append("<div id='"+diviid+"'><div  class='main-interview'><div class='row'><div class='col-md-6'><h3 ><a class='accordion-toggle' data-toggle='collapse'  href='#"+triid+"'>Need</a></h3></div><div id='"+triid+"' class='panel-collapse collapse'><div class='panel-body'><div class='col-md-6'><div class='pull-right btn-right'><a class='add-need' href='javascript:void(0)' id='addmore11' onclick='removetr("+x+")' style='color: red;' >Remove</a><br><a id='obs_"+x+"' class='addmoreObstacle11' href='javascript:void(0)' onclick='add(this.id)' ><i class='fa fa-plus' aria-hidden='true'></i> Add Obstacle </a></div></div></div> <div class='alert alert-success alert-dismissible' id='need-msg-"+x+"' style='display: none'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success!</strong> Need detail successfully added. </div><form action=''><div class='row'><div class='form-group col-md-3 left'><label for='first'>Title <em style='color:red'>*</em></label><input type='hidden' id='saved_needid_"+x+"' value=''><input type='text' id='need_title_"+x+"' class='form-control'></div></div><div class='row'><div class='form-group col-md-4'><label for='first'>Descripation <em style='color:red'>*</em></label><textarea rows='5'data-check='"+x+"' id='need_desc_"+x+"' onblur='checkinterviewneeddeatils(this)' cols='41'></textarea></div><div class='form-group col-md-4'><label for='first'> Notes</label><textarea rows='5' cols='41' data-check='"+x+"' id='need_notes_"+x+"' onblur='checkneedupdate(this)'></textarea></div><div class='form-group col-md-2'><label for='first'>Urgency</label><br><select data-check='"+x+"' id='need_urgency_"+x+"' onchange='checkneedupdate(this)'>"+urgencyoption+"</select></div><div class='form-group col-md-2 pull-right'><label for='first'>Status</label><br><select data-check='"+x+"' id='need_status_"+x+"' onchange='checkneedupdate(this)'>"+statusoption+"</select></div></div></div></form></div></div><div class='main-interview'></div><div class='input_fields_wrap_obstcles_"+x+"'></div><hr><div class='post-tags'></div></div></div>"); //add input box
             x++; 
        }
    });
   
});





function searchprovider(iid){
    var arr = iid.split('-');
    var arr1 = arr[1];
    var newiid = 'solution_provider_'+arr1;
    document.getElementById("assignprovidertab").value = newiid;
    getserviceprovide();
}

function getserviceprovide(){
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
}


function assignprovider(name,id){
  document.getElementById(id).value = name;
  $( "#"+id ).trigger( "click" );
  jQuery("#closeserviceprovider").click();
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
            jQuery("#providerdiv").html(html);
          }
      });
    }

function showview(type){
  if(type == 'map'){
     jQuery('#mapview').show();
     jQuery('#listview').hide();
     document.getElementById("mapprac").classList.add("view-active");
     document.getElementById("listprac").classList.remove("view-active");
    
  }else{
     jQuery('#listview').show();
     jQuery('#mapview').hide();
     document.getElementById("listprac").classList.add("view-active");
     document.getElementById("mapprac").classList.remove("view-active");
  }

}



function removetr(id){
    jQuery('#tr'+id).remove();
}

function removeobstr(id){
    var arr = id.split('-');
    var r = arr[1];
    jQuery('#'+r).remove();
}



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
                if(res == '11'){          
                   return true;
                }else{
                    return false;
                }
              
            }
          });
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
                if(res == '11'){          
                   return true;
                }else{
                    //alert('Error ! Please try again ');
                    return false;
                }
              
            }
          });
      }


}


function updateinterviewfield(){
      var interview_iid =  $("#saved_interview_id").val();
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
        //return false;
       if(caller_firstname == ''){
         return false;
      }else if(caller_lastname == ''){
        return false;
      }else if(caller_dob == ''){
        return false;
      }else{
       // alert('hello');
        jQuery.ajax({
            type: 'post',
            url: ajax_url,
            data: {'interview_id':interview_iid,'email':email,'caller_first_name':caller_firstname,'caller_last_name':caller_lastname,'caller_dob':caller_dob,'caller_address':caller_address,'caller_state':caller_state,'caller_zipcode':caller_zipcode,'caller_additional_fields':caller_additional_fields,'caller_additional_keys':caller_additional_keys,funtion:'updateInterviewData'},
            success: function (res) {
              //console.log(res);
                if(res == '11'){          
                    return true;
                }else{
                    return false;
                }
              
            }
          });
      }

      }else{
        return false;
      }

 

}



function checkinterviewfield(){
      var interview_iid = $("#saved_interview_id").val();
      var email = "<?php echo $email; ?>";
      var caller_firstname = $("#caller_first_name").val();
      var caller_lastname = $("#caller_last_name").val();
      var caller_dob = $("#caller_dob").val();
      var loadurl = "<?php echo site_url().'/interviews/';?>";
      var interview_id = '';
      if(interview_iid == ''){


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
            data: {'email':email,'caller_first_name':caller_firstname,'caller_last_name':caller_lastname,'caller_dob':caller_dob,funtion:'saveinterview'},
            success: function (res) {
                var obj = JSON.parse(res);
                var result = obj.error;
                var saved_interviewid = obj.interview_id
                var trimStr  = $.trim(result);
                if(trimStr == '11'){          
                    jQuery("#saved_interview_id").val(obj.interview_id);
                       var oldUrl = $("#intervirefiels").attr("href"); // Get current url
                       var newUrl = oldUrl.replace("#", "#panel1"); 
                       $("#intervirefiels").attr("href", newUrl);
                       $("#intervirefiels")[0].click();
                       $("#interview-msg").show(1000);
                        //  $("#interview-msg").fadeOut(3000);
                        //alert(obj.interview_id);         
                        //alert('interview save successfully');
                        // $("#intervirefiels").click();
                }else{
                    alert('Error ! Please try again ');
                }
              
            }
          });
      }

      }else{
        return false;
      }

 }


function checkinterviewneeddeatils(iid) {
    var moreiid = $(iid).attr('data-check');
    var checking = jQuery("#saved_needid_"+moreiid).val();
    var interview_iid = $("#saved_interview_id").val();
    //alert(moreiid);
    var email = "<?php echo $email; ?>";
    var need_title = $("#need_title_"+moreiid).val();
    var need_desc = $("#need_desc_"+moreiid).val();
    if(checking == ''){
    if(interview_iid == ''){
        alert('You can not add need without add interview');
        return false;
    }else if(need_title == ''){
        alert('Please fill need title');
        return false;
    }else if(need_desc == ''){
        alert('Please fill need descripation');
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
                    //alert(obj.need_id);
                   // $("#need-msg").show(); 
                    $("#need-msg-"+moreiid).show();     
                   // $("#obstacleancher")[0].click();
                   // $("#need-msg").fadeOut(3000);
                         
                    //alert('Needs save successfully');
                }else{
                    alert('Error ! Please try again ');
                }
              
            }
          });
      }
    }


}

function checkInterviewObstacledeatils(iiid) {
    var interview_iid = $("#saved_interview_id").val();
    var obsiid = $(iiid).attr('data-tom');
    var neediid = $(iiid).attr('data-com');
    //alert(obsiid);
    //alert(neediid);
    var need_iid = $("#saved_needid_"+neediid).val();
    var cheking = jQuery("#saved_obstacleid_"+neediid+"_"+obsiid).val();
    var email = "<?php echo $email; ?>";
    var obstacle_title = $("#obstacle_title_"+neediid+"_"+obsiid).val();
    var obstacle_desc = $("#obstacle_desc_"+neediid+"_"+obsiid).val();
    if(cheking == ''){
    if(interview_iid == ''){
        alert('You can not add need without add interview');
        return false;
    }else if(need_iid == ''){
        alert('You can not add need without add need');
        return false;
    }else if(obstacle_title == ''){
        alert('Please fill obstacle title');
        return false;
    }else if(obstacle_desc == ''){
        alert('Please fill obstacle descripation');
        return false;
    }else{
        jQuery.ajax({
            type: 'post',
            url: ajax_url,
            data: {'email':email,'need_id':need_iid,'obstacle_title':obstacle_title,'obstacle_description':obstacle_desc,funtion:'saveinterviewobstacles'},
            success: function (res) {
                var obj = JSON.parse(res);
                var result = obj.error;
                var saved_obstacleid = obj.obstacle_id
                var trimStr  = $.trim(result);
                if(trimStr == '11'){          
                    jQuery("#saved_obstacleid_"+neediid+"_"+obsiid).val(obj.obstacle_id);
                    $("#obstacle-msg-"+neediid+"-"+obsiid).show();

            
                }else{
                    alert('Error ! Please try again ');
                }
              
            }
          });
    }
  }
}


function checkInterviewSolutiondeatils(iid) {

    var interview_iid = $("#saved_interview_id").val();
    var neediid = $(iid).attr('data-tot');
    var obsiid = $(iid).attr('data-fot');
    var soliid = $(iid).attr('data-got');
    var obstacle_iid = $("#saved_obstacleid_"+neediid+"_"+obsiid).val();
    var checking = jQuery("#saved_solutionid_"+neediid+"_"+obsiid+"_"+soliid).val();
    var email = "<?php echo $email; ?>";
    var solution_title = $("#solution_title_"+neediid+"_"+obsiid+"_"+soliid).val();
    var solution_description = $("#solution_desc_"+neediid+"_"+obsiid+"_"+soliid).val();
    if(checking == ''){
    if(obstacle_iid == ''){
        alert('You can not add soultion without add obstacle');
        return false;
    }else if(solution_title == ''){
        alert('Please fill soultion title');
        return false;
    }else if(solution_description == ''){
        alert('Please fill soultion descripation');
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
                if(trimStr == '11'){          
                    jQuery("#saved_solutionid_"+neediid+"_"+obsiid+"_"+soliid).val(obj.solution_id);
                    $("#solution-msg").show();
                    //$("#solution-msg").fadeOut(10000);
                    //alert(obj.need_id);         
                    //alert('Obstacle save successfully');
                }else{
                    alert('Error ! Please try again ');
                }
              
            }
          });
    }
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

    //alert(solution_iid);

    //alert(solution_description);
    //alert(solution_provider);

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
                if(res == '11'){          
                   return true;
                }else{
                    //alert('Error ! Please try again ');
                    return false;
                }
              
            }
        });
    }
}



  
   

   
  
   

    






  </script>



