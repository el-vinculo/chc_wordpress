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

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">

<?php
$error = 0;
if(isset($_SESSION['userdata'])){

      $email = $_SESSION['userdata']['email'];
   

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
                                            <input type="text" class="form-control" value="" >
                                        </div>
                                        <div class="form-group">
                                            <label for="zip">Zip </label>
                                            <input type="text" class="form-control" value="" >
                                        </div>
                                        <div class="form-group">
                                            <label for="state">State </label>
                                            <br>
                                            <select >
                                                <option value="har">haryana </option>
                                                <option value="har">delhi </option>
                                                <option value="har">punjab </option>

                                            </select>

                                        </div>
                                        <div class="form-group">
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
                                        </div>
                                        <a href="#" class="text-center"><i class="fa fa-plus" aria-hidden="true"></i> Add additional field</a>
                                    </form>
                                </div>
                            </div>

                        </div>

        <div class="col-md-9 panel-group" id="accordion">
            <div class="panel ">
                <div class="post_title post_tilte-inter">
                  <h3 class="pull-left"><a id="intervirefiels"  class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#" ><i class="fa fa-plus" aria-hidden="true"></i></a> Interviews</h3>
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
                                        <div id="panel2" class="panel-collapse collapse">
                                          <div class="panel-body">
                                        <div class="col-md-6">
                                            <div class="pull-right btn-right">

                                                <a class="add-need" href="javascript:void(0)" id="addmore" ><i class="fa fa-plus" aria-hidden="true"></i> Add Need</a><br>
                                                <a href="javascript:void(0)" id="addmoreObstacle" style="color: red;"><i class="fa fa-plus" aria-hidden="true"></i> Add Obstacle </a>
                                            </div>


                                        </div>
                                        </div>
                                        
    <div class="alert alert-success alert-dismissible" id="need-msg" style="display: none">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> Need detail successfully added.
  </div>

        <form action="">
                                        <div class="row">
                                            <div class="form-group col-md-3 left">
                                                <label for="first">Title <em style="color:red">*</em></label>
                                                <input type="hidden" id="saved_needid" value="">
                                                <input type="text" id="need_title" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="first">Descripation <em style="color:red">*</em></label>
                                                <textarea rows="5" id="need_desc" onblur="checkinterviewneeddeatils()" cols="41"></textarea>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="first"> Notes</label>
                                                <textarea rows="5" cols="41"></textarea>
                                            </div>
                                            <div class="form-group col-md-2 ">
                                                <label for="first">Urgency</label>
                                                <br>
                                                <select>
                                                   <option value="High">High </option>
                                                    <option value="Critical">Critical</option>
                                                    <option value="Modrate">Modrate</option>
                                                    <option value="Low">Low</option>

                                                </select>
                                            </div>
                                            <div class="form-group col-md-2 pull-right">
                                                <label for="first">Status</label>
                                                <br>
                                                <select>
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
                        </div>  <hr>
                                <div id="main-interview"></div>
                                <div class="main-interview">
                                    <div class="row">
                                        <div class="col-md-4 ">
                                            <h3><a id="obstacleancher" class="accordion-toggle" data-toggle="collapse"  href="#panel3">Obstacle </a> </h3>

                                        </div>
                                        <div id="panel3" class="panel-collapse collapse">
                                          <div class="panel-body">
                                        <div class="col-md-8 inline">
                                            <div class="pull-left btn-right btn-right1 ">
                                                <a href="#" class="pull-left" style="font-size: 25px;padding-right: 25px;border-right:2px solid #ddd; ">Collapse</a>
                                                <a href="#" style="color: red;padding-left: 20px;">Remove</a>
                                            </div>
                                            <div class="pull-right btn-right  ">
                                                <a href="#"><i class="fa fa-plus" aria-hidden="true"></i> Add Obstacle </a><br>
                                                 <a href="#" id="addmoreSolutions" style="color: red;"><i class="fa fa-plus" aria-hidden="true"></i> Add solution </a>
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
                                                <input type="hidden" id="saved_obstacleid" value="">
                                                <label for="first">Title</label>
                                                <input type="text" id="obstacle_title" class="form-control" value="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="first">Descripation</label>
                                                <textarea rows="5" id="obstacle_desc" cols="41" onblur="checkInterviewObstacledeatils()"></textarea>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="first"> Notes</label>
                                                <textarea rows="5" cols="41"></textarea>
                                            </div>
                                            <div class="form-group col-md-2 ">
                                             <label for="first">Urgency</label>
                                              <br>
                                                <select>
                                                <option value="High">High </option>
                                                <option value="Critical">Critical</option>
                                                <option value="Modrate">Modrate</option>
                                                <option value="Low">Low</option>

                                                </select>
                                              </div>
                                            <div class="form-group col-md-2 pull-right">
                                                <label for="first">Status</label>
                                                <br>
                                                <select>
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
                            <div id="main-interview"></div>
                            <div class="input_fields_wrap_obstcles"></div>
                                <hr>
                                <div class="main-interview">
                                    <div class="row">
                                        <div class="col-md-4 ">
                                            <h3><a id="solutionancher" class="accordion-toggle" data-toggle="collapse"  href="#panel4">Solution</a> </h3>

                                        </div>
                                        <div id="panel4" class="panel-collapse collapse">
                                          <div class="panel-body">
                                        <div class="col-md-8 inline">
                                            <div class="pull-left btn-right btn-right1 ">
                                                <a href="#" class="pull-left" style="font-size: 25px;padding-right: 25px;border-right:2px solid #ddd; ">Collapse</a>
                                                <a href="#" style="color: red;padding-left: 20px;">Remove</a>
                                            </div>
                                            <div class="pull-right btn-right btn-right1 ">

                                                <a href="#"><i class="fa fa-plus" aria-hidden="true"></i> Add solution </a>
                                            </div>

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
                                                <input type="hidden" id="saved_solutionid" class="form-control">
                                                <input type="text" id="solution_title" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="first">Descripation</label>
                                                <textarea rows="5" id="solution_description" onblur="checkInterviewSolutiondeatils()" cols="45"></textarea>
                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="form-group col-md-4">
                                                <h5><b>Attach Service Provider (optional)</b></h5>
                                                <label for="first">Search</label>
                                                <input type="search" onclick="" class="form-control" placeholder="Search Entire Database">
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
                            </div></div>
                            <div id="main-interview"></div>
                            <div class="input_fields_wrap_solution"></div>
                                <hr>
                                <div class="post-tags"></div>
                            </div>
                            
                            <div id="main-interview"></div>
                            <div class="input_fields_wrap" >

                        </div>

                    </div>

                </div>
</div></div>
            </div>
        </div>
    </div>
</div>










<?php get_footer(); ?>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 



<script type="text/javascript">
    jQuery(function () {
      jQuery(".datepicker").datepicker({ dateFormat: "yy-mm-dd" });
    });
</script>


<script>

var ajax_url = "<?php echo '/ajax.php'; ?>";

var urgencyoption = "<option value='High'>High</option><option value='Critical'>Critical</option><option value='Modrate'>Modrate</option><option value='Low'>Low</option>";

var statusoption = "<option value='New'>New</option><option value='Pending'>Pending</option><option value='Close'>Close</option><option value='Review'>Review</option>";



jQuery(document).ready(function() {
    var max_fields      = 60; 
    var wrapper         = jQuery(".input_fields_wrap_solution"); 
    //var add_button      = $("#addmore");   
    var z = 40; 
    var option= $("#coountry").html();
    var taskstatusoption = $("#tskstatus").html();
    jQuery("#addmoreSolutions").click(function(e){ 
        
        e.preventDefault();
        if(z < max_fields){        
            var name1 = "tasks["+z+"][task_type]";
            var name2 = "tasks["+z+"][provider]";
            var name3 = "tasks["+z+"][task_owner]";
            var name4 = "tasks["+z+"][task_description]";
            var name5 = "tasks["+z+"][task_deadline]";
            var name6 = "tasks["+z+"][task_status]";
            var triid = "trsol"+z;
            var provideriid = "provider-"+z;
            

            var option2 = "<option value='New'>New</option><option value='Pending'>Pending</option><option value='Urgent'>Urgent</option>";
            var taskoption = "<option value='Appointment'>Appointment</option><option value='Support'>Support</option><option value='User Defined'>User Defined</option><option value='Delegated Referral'>Delegated Referral</option>";
            jQuery(wrapper).append("<div class='main-interview'><div class='row'><div class='col-md-4'><h3><a id='solutionancher' class='accordion-toggle' data-toggle='collapse'  href='#"+triid+"'>Solution </a> </h3></div><div id='"+triid+"' class='panel-collapse collapse'><div class='panel-body'><div class='col-md-8 inline'><div class='pull-left btn-right btn-right1'><a href='#' class='pull-left' style='font-size: 25px;padding-right: 25px;border-right:2px solid #ddd; '>Collapse</a><a href='#' style='color: red;padding-left: 20px;'>Remove</a></div><div class='pull-right btn-right btn-right1'><a href='#'><i class='fa fa-plus' aria-hidden='true'></i> Add solution </a></div></div></div><div class='alert alert-success alert-dismissible' id='solution-msg' style='display: none' ><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success!</strong> Solution detail successfully added.</div><form action=''><div class='row'><div class='form-group col-md-3 left'><label for='first'>Title</label><input type='hidden' id='saved_solutionid' class='form-control'><input type='text' id='solution_title' class='form-control'></div></div><div class='row'><div class='form-group col-md-4'><label for='first'>Descripation</label><textarea rows='5' id='solution_description' onblur='checkInterviewSolutiondeatils()' cols='45'></textarea></div></div><div class='row'><div class='form-group col-md-4'><h5><b>Attach Service Provider (optional)</b></h5><label for='first'>Search</label><input type='search' class='form-control' placeholder='Search Entire Database'></div></div><div class='row'><div class='form-group col-md-4'><label for='first'>Advanced Search</label><br><select><option value='har'>Search </option><option value='har'>Search</option><option value='har'>Search </option></select></div></div></div></form></div></div>"); //add input box
             z++; 
        }
    });
   
    /*$(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('tr').remove(); x--;
    })*/
});


jQuery(document).ready(function() {
    var max_fields      = 40; 
    var wrapper         = jQuery(".input_fields_wrap_obstcles"); 
    //var add_button      = $("#addmore");   
    var y = 20; 
    var option= $("#coountry").html();
    var taskstatusoption = $("#tskstatus").html();
    jQuery("#addmoreObstacle").click(function(e){ 
        
        e.preventDefault();
        if(y < max_fields){        
            var name1 = "tasks["+y+"][task_type]";
            var name2 = "tasks["+y+"][provider]";
            var name3 = "tasks["+y+"][task_owner]";
            var name4 = "tasks["+y+"][task_description]";
            var name5 = "tasks["+y+"][task_deadline]";
            var name6 = "tasks["+y+"][task_status]";
            var triid = "trobs"+y;
            var provideriid = "provider-"+y;
            

            var option2 = "<option value='New'>New</option><option value='Pending'>Pending</option><option value='Urgent'>Urgent</option>";
            var taskoption = "<option value='Appointment'>Appointment</option><option value='Support'>Support</option><option value='User Defined'>User Defined</option><option value='Delegated Referral'>Delegated Referral</option>";
            jQuery(wrapper).append("<div class='main-interview'><div class='row'><div class='col-md-4'><h3><a id='obstacleancher' class='accordion-toggle' data-toggle='collapse'  href='#"+triid+"'>Obstacle</a> </h3></div><div id='"+triid+"' class='panel-collapse collapse'><div class='panel-body'><div class='col-md-8 inline'><div class='pull-left btn-right btn-right1 '><a href='#' class='pull-left' style='font-size: 25px;padding-right: 25px;border-right:2px solid #ddd; '>Collapse</a><a href='#' style='color: red;padding-left: 20px;'>Remove</a></div><div class='pull-right btn-right'><a href='#'><i class='fa fa-plus' aria-hidden='true'></i> Add Obstacle </a><br><a href='#' style='color: red;'><i class='fa fa-plus' aria-hidden='true'></i> Add solution </a></div></div></div><div class='alert alert-success alert-dismissible' id='obstacle-msg' style='display: none'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success!</strong> Obstacle detail successfully added.</div><form action=''><div class='row'><div class='form-group col-md-3 left'><input type='hidden' id='saved_obstacleid_' value=''><label for='first'>Title</label><input type='text' id='obstacle_title_' class='form-control' value=''></div></div><div class='row'><div class='form-group col-md-4'><label for='first'>Descripation</label><textarea rows='5' id='obstacle_desc' cols='41' onblur='checkInterviewObstacledeatils()'></textarea></div><div class='form-group col-md-4'><label for='first'> Notes</label><textarea rows='5' cols='41'></textarea></div><div class='form-group col-md-2'><label for='first'>Urgency</label><br><select>"+urgencyoption+"</select></div><div class='form-group col-md-2 pull-right'><label for='first'>Status</label><br><select>"+statusoption+"</select></div></div></div></form></div></div>"); //add input box
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
    //var add_button      = $("#addmore"); 
   
    var x = 2; 
    var option= $("#coountry").html();
    var taskstatusoption = $("#tskstatus").html();
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
            
            var provideriid = "provider-"+x;
            var option1 = 'test1';
            var option2 = "<option value='New'>New</option><option value='Pending'>Pending</option><option value='Urgent'>Urgent</option>";
            var taskoption = "<option value='Appointment'>Appointment</option><option value='Support'>Support</option><option value='User Defined'>User Defined</option><option value='Delegated Referral'>Delegated Referral</option>";
            jQuery(wrapper).append("<div id='"+diviid+"' class='main-interview'><div class='row'><div class='col-md-6'><h3 ><a class='accordion-toggle' data-toggle='collapse'  href='#"+triid+"'>Need</a></h3></div><div id='"+triid+"' class='panel-collapse collapse'><div class='panel-body'><div class='col-md-6'><div class='pull-right btn-right'><a class='add-need' href='javascript:void(0)' id='addmore' onclick='removetr("+x+")' ><i class='fa fa-minus' aria-hidden='true'></i> Remove</a><br><a href='#' style='color: red;''><i class='fa fa-plus' aria-hidden='true'></i> Add Obstacle </a></div></div></div> <div class='alert alert-success alert-dismissible' id='need-msg' style='display: none'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success!</strong> Need detail successfully added. </div><form action=''><div class='row'><div class='form-group col-md-3 left'><label for='first'>Title <em style='color:red'>*</em></label><input type='hidden' id='saved_needid' value=''><input type='text' id='need_title' class='form-control'></div></div><div class='row'><div class='form-group col-md-4'><label for='first'>Descripation <em style='color:red'>*</em></label><textarea rows='5' id='need_desc' onblur='checkinterviewneeddeatils()' cols='41'></textarea></div><div class='form-group col-md-4'><label for='first'> Notes</label><textarea rows='5' cols='41'></textarea></div><div class='form-group col-md-2'><label for='first'>Urgency</label><br><select>"+urgencyoption+"</select></div><div class='form-group col-md-2 pull-right'><label for='first'>Status</label><br><select>"+statusoption+"</select></div></div></div></form></div></div><div class='main-interview'><div class='row'><div class='col-md-4'><h3><a id='obstacleancher' class='accordion-toggle' data-toggle='collapse'  href='#"+obstriid+"'>Obstacle</a> </h3></div><div id='"+obstriid+"' class='panel-collapse collapse'><div class='panel-body'><div class='col-md-8 inline'><div class='pull-left btn-right btn-right1 '><a href='#' class='pull-left' style='font-size: 25px;padding-right: 25px;border-right:2px solid #ddd; '>Collapse</a><a href='#' style='color: red;padding-left: 20px;'>Remove</a></div><div class='pull-right btn-right'><a href='#'><i class='fa fa-plus' aria-hidden='true'></i> Add Obstacle </a><br><a href='#' style='color: red;'><i class='fa fa-plus' aria-hidden='true'></i> Add solution </a></div></div></div><div class='alert alert-success alert-dismissible' id='obstacle-msg' style='display: none'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success!</strong> Obstacle detail successfully added.</div><form action=''><div class='row'><div class='form-group col-md-3 left'><input type='hidden' id='saved_obstacleid_' value=''><label for='first'>Title</label><input type='text' id='obstacle_title_' class='form-control' value=''></div></div><div class='row'><div class='form-group col-md-4'><label for='first'>Descripation</label><textarea rows='5' id='obstacle_desc' cols='41' onblur='checkInterviewObstacledeatils()'></textarea></div><div class='form-group col-md-4'><label for='first'> Notes</label><textarea rows='5' cols='41'></textarea></div><div class='form-group col-md-2'><label for='first'>Urgency</label><br><select>"+urgencyoption+"</select></div><div class='form-group col-md-2 pull-right'><label for='first'>Status</label><br><select>"+statusoption+"</select></div></div></div></form></div></div><div class='main-interview'><div class='row'><div class='col-md-4'><h3><a id='solutionancher' class='accordion-toggle' data-toggle='collapse'  href='#"+soltriid+"'>Solution </a> </h3></div><div id='"+soltriid+"' class='panel-collapse collapse'><div class='panel-body'><div class='col-md-8 inline'><div class='pull-left btn-right btn-right1'><a href='#' class='pull-left' style='font-size: 25px;padding-right: 25px;border-right:2px solid #ddd; '>Collapse</a><a href='#' style='color: red;padding-left: 20px;'>Remove</a></div><div class='pull-right btn-right btn-right1'><a href='#'><i class='fa fa-plus' aria-hidden='true'></i> Add solution </a></div></div></div><div class='alert alert-success alert-dismissible' id='solution-msg' style='display: none' ><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success!</strong> Solution detail successfully added.</div><form action=''><div class='row'><div class='form-group col-md-3 left'><label for='first'>Title</label><input type='hidden' id='saved_solutionid' class='form-control'><input type='text' id='solution_title' class='form-control'></div></div><div class='row'><div class='form-group col-md-4'><label for='first'>Descripation</label><textarea rows='5' id='solution_description' onblur='checkInterviewSolutiondeatils()' cols='45'></textarea></div></div><div class='row'><div class='form-group col-md-4'><h5><b>Attach Service Provider (optional)</b></h5><label for='first'>Search</label><input type='search' class='form-control' placeholder='Search Entire Database'></div></div><div class='row'><div class='form-group col-md-4'><label for='first'>Advanced Search</label><br><select><option value='har'>Search </option><option value='har'>Search</option><option value='har'>Search </option></select></div></div></div></form></div></div><div class='post-tags'></div></div>"); //add input box
             x++; 
        }
    });
   
    /*$(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('tr').remove(); x--;
    })*/
});











function removetr(id){
    jQuery('#diviid'+id).remove();
}

function saveinterviews(iid) {
  console.log(iid);
  //alert(iid);
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


function checkinterviewneeddeatils() {
    var interview_iid = $("#saved_interview_id").val();
    //alert(interview_iid);
    var email = "<?php echo $email; ?>";
    var need_title = $("#need_title").val();
    var need_desc = $("#need_desc").val();
    if(interview_iid == ''){
        alert('Ypu can not add need without add interview');
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
                    jQuery("#saved_needid").val(obj.need_id);
                    //alert(obj.need_id);
                    $("#need-msg").show();     
                    $("#obstacleancher")[0].click();
                   // $("#need-msg").fadeOut(3000);
                         
                    //alert('Needs save successfully');
                }else{
                    alert('Error ! Please try again ');
                }
              
            }
          });
      }


}

function checkInterviewObstacledeatils() {
    var interview_iid = $("#saved_interview_id").val();
    var need_iid = $("#saved_needid").val();
    //alert(interview_iid);
    var email = "<?php echo $email; ?>";
    var obstacle_title = $("#obstacle_title").val();
    var obstacle_desc = $("#obstacle_desc").val();
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
                    jQuery("#saved_obstacleid").val(obj.obstacle_id);
                    $("#obstacle-msg").show();     
                    $("#solutionancher")[0].click();
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


function checkInterviewSolutiondeatils() {
    var interview_iid = $("#saved_interview_id").val();
    var need_iid = $("#saved_needid").val();
    var obstacle_iid = $("#saved_obstacleid").val();
    //alert(interview_iid);
    var email = "<?php echo $email; ?>";
    var solution_title = $("#solution_title").val();
    var solution_description = $("#solution_description").val();
    if(interview_iid == ''){
        alert('You can not add soultion without add interview');
        return false;
    }else if(need_iid == ''){
        alert('You can not add soultion without add need');
        return false;
    }else if(obstacle_iid == ''){
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
                    jQuery("#saved_solutionid").val(obj.solution_id);
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



  
   

   
  
   

    






  </script>



