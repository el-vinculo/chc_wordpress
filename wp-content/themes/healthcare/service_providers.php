 


<style >
:root
{
  --text: "Select values";
}
.multiple_select
{
  height: 34px!important;
  -webkit-appearance: menulist;
  position: relative;
}
.multiple_select::before
{
  content: var(--text);
  display: block;
  margin-left: 5px;
  margin-bottom: 2px;
}
.multiple_select_active
{
  overflow: visible !important;
}
.multiple_select option
{
  display: none;
    height: 18px;
  background-color: white;
}
.multiple_select_active option
{
  display: block;
}

.multiple_select option::before{
  content: "\2610";
}
.multiple_select option:checked::before {
  content: "\2611";
}


.multiple_services
{
  height: 34px!important;
  -webkit-appearance: menulist;
  position: relative;
}
 .multiple_services::before
{
  content: var(--text);
  display: block;
  margin-left: 5px;
  margin-bottom: 2px;
}
 .multiple_services_active
{
  overflow: visible !important;
}
 .multiple_services option
{
  display: none;
    height: 18px;
  background-color: white;
}
 .multiple_services_active option
{
  display: block;
}

 .multiple_services option::before {
  content: "\2610";
}
.multiple_services option:checked::before {
  content: "\2611";
}

  .caret {
      color: #000;
  }
  .btn-default {
       border: none!important;
    border-radius: 5px;
  }
  .btn, .post-tags a {
    border: 1px solid #b7bdb5 !important;
    border-radius: 5px!important;
}
 .btn-group>.btn:first-child {
    margin-left: 0!important;
    width: 100%!important;
}
.btn-group, .btn-group-vertical {
    position: relative;
    display: inline-block;
    width: middle;
    width: 100%!important;
}
 .sec .multiselect-container>li {
    padding: 0;
    display: inline-block;
    width: 170px;
}
.sec .open>.dropdown-menu {
    display: block;
    width: 400px;
    display: inline-block;
}
  
  .multiselect-container>li>a>label {
    margin: 0;
    height: 100%;
    cursor: pointer;
    font-weight: 400;
    padding: 0px 0px 0px 10px!important;
}
  span.multiselect-native-select button:hover span {
    color: #fff!important;
}
  span.multiselect-selected-text {
    color: #838586;
}
  

h1 {
  text-align: center;
 font-family: 'Montserrat', sans-serif;
  color: #06D85F;
  margin: 80px 0;
}
.rightside a.icon1 i {
    color: #43b02a !important;
}
.box {
  width: 40%;
  margin: 0 auto;
  background: rgba(255,255,255,0.2);
  padding: 35px;
  border: 2px solid #fff;
  border-radius: 20px/50px;
  background-clip: padding-box;
  text-align: center;
}

.button {
  font-size: 1em;
  padding: 10px;
  color: #fff;
  border: 2px solid #06D85F;
  border-radius: 20px/50px;
  text-decoration: none;
  cursor: pointer;
  transition: all 0.3s ease-out;
}
.button:hover {
  background: #06D85F;
}

.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
    margin: 70px auto;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    border: 4px solid rgba(3, 169, 244, 0.69);
    width: 80%;
    position: relative;
    transition: all 5s ease-in-out;
    font-family: 'Montserrat', sans-serif;
}
.popup h2 {
  margin-top: 0;
  font-size: 32px;
  font-weight: 700;
  color: rgba(3, 169, 244, 0.69);
font-family: 'Montserrat', sans-serif;}
.popup .close {
    position: absolute;
    top: 20px;
    right: 30px;
    transition: all 200ms;
    font-size: 30px;
    font-weight: bold;
    text-shadow: none;
    width: 40px;
    text-align: center;
    height: 40px;
    padding: 6px;
    border-radius: 100%;
    box-shadow: none;
    background: rgba(3, 169, 244, 0.69)!important;
    text-decoration: none;
    color: #fff;
}
.popup .close:hover {
  color: #fff!important;
}
.popup .content {
  max-height: 80%;
  overflow: auto;
}
.content ul li {
    padding: 12px 0;
    font-size: 16px;
}
.content ul li span{
   font-weight: 700;
   font-family: 'Montserrat', sans-serif;
}

.view-active{
color: #43b02a!important;
}
@media screen and (max-width: 700px){
  .box{
    width: 70%;
  }
  .popup{
    width: 70%;
  }
}
.content p{
  font-weight: 700;
   font-family: 'Montserrat', sans-serif;
   font-size: 17px;
       color: #949292;

}
.view-button {
       margin-top: 13px;
    position: relative;
    display: block;
    
    margin-right: 5px;
}
.border {
    border: 1px solid #ccc;
    height: 800px;
}

/*new start css*/
.custom-btn{
  border-radius: 5px;
  padding: 7px 10px;
  border: 0!important;  
  box-shadow: none!important; 
}
.pt-20{
    padding: 20px;
}
.provider-content {
    display: inline-block;
}
.provider-content h3{
  font-size: 20px;
  font-weight: bold;
}
span.fa.fa-print {
    font-size: 33px;
    color: #3b5999;
}
.margin-bt thead tr td {
    padding-bottom: 8px!important;
}
.margin-bt thead tr th{
  padding: 8px 0!important; 
}
.scroll  {
    height: 370px;
    overflow-y: scroll;
}
i.fa.fa-envelope {
    padding-left: 0px!important;
}
</style>
 <script src="https://maps.google.com/maps/api/js?key=AIzaSyBFAo6LvR1ORPgRNXliXZAWrcrpiAlZtbI&sensor=false" 
          type="text/javascript"></script>


<?php

/**
 * Template Name: Service_providers
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
$serachData = array();
if(isset($_SESSION['userdata'])){
	  $email = $_SESSION['userdata']['email'];
    if(!empty($_POST['search']) && $_POST['search'] == 'Search'){
      $serachData = $_POST;
      //echo "<pre>";
      //print_r($_POST); 
    }
	  $practicesdata = serviceproviderslist($serachData);
	  if(!empty($practicesdata['status'] == 'ok')){
	  	 $practices = $practicesdata['provider_list'];
      // echo "<pre>";
       //print_r($practices); die; 
	  }else{
	  	$error = 0;
	    $msg   = 'Error ! Some thing went wrong';
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
    <div class="post_title"><h3>Select Service Providers</h3></div>
    <table class="table ">
      <tbody>
  <form method="post" action="" >
  <thead>
    <tr>
      <th scope="col">
        <label>Search</label>
        <input type="Search" name="provider_name" id="provider_name" class="form-control" placeholder="Provider Name.." value="<?php if(!empty($_POST['provider_name'])){ echo $_POST['provider_name']; } ?>">
      </th>
      <th scope="col">
        <label>Populations Groups</label>
        <select class="form-control " name="population[]" id='testSelect1' multiple>
         <!--  <option value="">Please Select </option> -->
          <option value="Any" <?php if(!empty($_POST['population']) && (in_array('Any', $_POST['population']))){ echo "selected"; } ?>>Any</option>
          <option value="Citizenship" <?php if(!empty($_POST['population']) && (in_array('Citizenship', $_POST['population']))){ echo "selected"; } ?>>Citizenship</option>
          <option value="Disabled" <?php if(!empty($_POST['population']) && (in_array('Disabled', $_POST['population']))){ echo "selected"; } ?>>Disabled</option>
          <option value="Family" <?php if(!empty($_POST['population']) && (in_array('Family',$_POST['population']))){ echo "selected"; } ?>>Families w/ Children</option>
          <option value="LGBTQ" <?php if(!empty($_POST['population']) && (in_array('LGBTQ',$_POST['population']))){ echo "selected"; } ?>>LGBT</option>
          <option value="LowIncome" <?php if(!empty($_POST['population']) && (in_array('LowIncome',$_POST['population']))){ echo "selected"; } ?>>Very Low-Income</option>
          <option value="Native" <?php if(!empty($_POST['population']) && (in_array('Native',$_POST['population']))){ echo "selected"; } ?>>Native American</option>
          <option value="Other" <?php if(!empty($_POST['population']) && (in_array('Other', $_POST['population']))){ echo "selected"; } ?>>Other</option>
          <option value="Senior" <?php if(!empty($_POST['population']) && (in_array('Senior',$_POST['population']))){ echo "selected"; } ?>>Senior</option>
          <option value="Veteran" <?php if(!empty($_POST['population']) && (in_array('Veteran',$_POST['population']))){ echo "selected"; } ?>>Veteran/Military</option>
        </select>
      </th>
      <th scope="col" class="sec">
        <label>Services Groups</label>
        <select class="form-control" name="services_type[]" id='services-test' multiple>
<!--         <option value="">Please Select </option>
 -->          <option value="Abuse" <?php if(!empty($_POST['services_type']) && (in_array('Abuse',$_POST['services_type']))){ echo "selected"; } ?>>Abuse</option>
          <option value="Addiction" <?php if(!empty($_POST['services_type']) && (in_array('Addiction',$_POST['services_type']))){ echo "selected"; } ?>>Addiction</option>
          <option value="BasicNeeds" <?php if(!empty($_POST['services_type']) && (in_array('BasicNeeds', $_POST['services_type']))){ echo "selected"; } ?>>BasicNeeds</option>
          <option value="Behavioral" <?php if(!empty($_POST['services_type']) && (in_array('Behavioral', $_POST['services_type']))){ echo "selected"; } ?>>Behavioral</option>
          <option value="CaseManagement" <?php if(!empty($_POST['services_type']) && (in_array('CaseManagement',$_POST['services_type']))){ echo "selected"; } ?>>CaseManagement</option>
          <option value="Clothing" <?php if(!empty($_POST['services_type']) && (in_array('Clothing',$_POST['services_type']))){ echo "selected"; } ?>>Clothing</option>
          <option value="DayCare" <?php if(!empty($_POST['services_type']) && (in_array('DayCare',$_POST['services_type']))){ echo "selected"; } ?>>DayCare</option>
          <option value="Disabled" <?php if(!empty($_POST['services_type']) && (in_array('Disabled',$_POST['services_type']))){ echo "selected"; } ?>>Disabled</option>
          <option value="Education" <?php if(!empty($_POST['services_type']) && (in_array('Education',$_POST['services_type']))){ echo "selected"; } ?>>Education</option>
          <option value="Emergency" <?php if(!empty($_POST['services_type']) && (in_array('Emergency',$_POST['services_type']))){ echo "selected"; } ?>>Emergency</option>
          <option value="Employment" <?php if(!empty($_POST['services_type']) && (in_array('Employment', $_POST['services_type']))){ echo "selected"; } ?>>Employment</option>
          <option value="Family" <?php if(!empty($_POST['services_type']) && (in_array('Family',$_POST['services_type']))){ echo "selected"; } ?>>Family</option>
          <option value="Financial" <?php if(!empty($_POST['services_type']) && (in_array('Financial', $_POST['services_type']))){ echo "selected"; } ?>>Financial</option>
          <option value="Food" <?php if(!empty($_POST['services_type']) && (in_array('Food',$_POST['services_type']))){ echo "selected"; } ?>>Food</option>
          <option value="GeneralSupport" <?php if(!empty($_POST['services_type']) && (in_array('GeneralSupport', $_POST['services_type']))){ echo "selected"; } ?>>GeneralSupport</option>
          <option value="Housing" <?php if(!empty($_POST['services_type']) && (in_array('Housing', $_POST['services_type']))){ echo "selected"; } ?>>Housing</option>
          <option value="Identification" <?php if(!empty($_POST['services_type']) && (in_array('Identification', $_POST['services_type']))){ echo "selected"; } ?>>Identification</option>
          <option value="IndependentLiving" <?php if(!empty($_POST['services_type']) && (in_array('IndependentLiving', $_POST['services_type']))){ echo "selected"; } ?>>IndependentLiving</option>
          <option value="Legal" <?php if(!empty($_POST['services_type']) && (in_array('Legal', $_POST['services_type']))){ echo "selected"; } ?>>Legal</option>
          <option value="Medical" <?php if(!empty($_POST['services_type']) && (in_array('Medical', $_POST['services_type']))){ echo "selected"; } ?>>Medical</option>
          <option value="Research" <?php if(!empty($_POST['services_type']) && (in_array('Research', $_POST['services_type']))){ echo "selected"; } ?>>Research</option>
          <option value="Resources" <?php if(!empty($_POST['services_type']) && (in_array('Resources', $_POST['services_type']))){ echo "selected"; } ?>>Resources</option>
          <option value="Respite" <?php if(!empty($_POST['services_type']) && (in_array('Respite', $_POST['services_type']))){ echo "selected"; } ?>>Respite</option>
          <option value="Senior" <?php if(!empty($_POST['services_type']) && (in_array('Senior', $_POST['services_type']))){ echo "selected"; } ?>>Senior</option>
          <option value="Transportation" <?php if(!empty($_POST['services_type']) && (in_array('Transportation', $_POST['services_type']))){ echo "selected"; } ?>>Transportation</option>
          <option value="Veteran" <?php if(!empty($_POST['services_type']) && (in_array('Veteran', $_POST['services_type']))){ echo "selected"; } ?>>Veteran</option>
          <option value="Victim" <?php if(!empty($_POST['services_type']) && (in_array('Victim', $_POST['services_type']))){ echo "selected"; } ?>>Victim</option>

        </select>
      </th>
      <th scope="col">
        <label>Tags</label>
        <input type="text" value="<?php if(!empty($_POST['tags'])){ echo $_POST['tags']; }else{
         // echo "98168"; 
          } ?>" name="tags" id="tags" class="form-control" placeholder="Tags">
      </th>
      <th scope="col">
        <label>Location Name</label>
        <input type="text" value="<?php if(!empty($_POST['location'])){ echo $_POST['location']; }else{
         // echo "98168"; 
          } ?>" name="location" id="location" class="form-control" placeholder="Virginia">
      </th>
      <th scope="col">
        <label>Location Type</label>
        
        <select class="form-control" name="location_type">
        <option value="">Please Select </option>
          <option value="City" <?php if(!empty($_POST['location_type']) && ($_POST['location_type'] == 'City')){ echo "selected"; } ?>>City</option>
          <option value="State" <?php if(!empty($_POST['location_type']) && ($_POST['location_type'] == 'State')){ echo "selected"; } ?>>State</option>
          <option value="County" <?php if(!empty($_POST['location_type']) && ($_POST['location_type'] == 'County')){ echo "selected"; } ?>>County</option>
          <option value="National" <?php if(!empty($_POST['location_type']) && ($_POST['location_type'] == 'National')){ echo "selected"; } ?>>National</option>
        
        </select>
      </th>
      <th scope="col">
    <!--   <button type="button" onclick="getformdata();" class="custom-btn btn-success">Search</button>  -->
        <input type="submit" name="search" class="custom-btn btn-success" value="Search"> 
      </th>
    </tr>
  </thead>

  </form>
</tbody>
</table>

<?php
if(!empty($practices)){ ?>
<div class="row">
  <div class="col-md-6 col-sm-12">

    <h4>Search Results</h4>
    <div class="border row">
    <div class="col-sm-12">
      <div class="scroll">
      <table class="margin-bt">
       
          <thead>
            <tr>
            <th></th>
            <th>Provider Name</th>
            <th>Category</th>
            <th>Short Description</th>
          </tr>

          <?php 
          if(!empty($practices)){
           // echo "<pre>";
           // print_r($practices); die; 
         foreach ($practices as $practiceskey => $practicesvalue) { 
         $name =  $practicesvalue['OrganizationName']["OrganizationName"]["0"]["Text"];
         /*if(is_array($practicesvalue['organizationName']["OrgDescription"])){
          $shortdesc= $practicesvalue['organizationName']["OrgDescription"]["0"]["text"];
         }else{
          $shortdesc= $practicesvalue['organizationName']["OrgDescription"];
         }*/

         $shortdesc= $practicesvalue['Programs']["0"]["ProgramDescription"]["0"]["Text"];

          ?>
          <tr>
            <td>
              <i class="fa fa-map-marker"></i>
             <button type="button" data-name="<?php echo $name; ?>" data-shortdesc="<?php echo $shortdesc; ?>" style="background: #42af29; display: block; padding: 10px; text-align: center; color: #fff; line-height: 21px; margin-right: 10px;" onclick="showdetails(this)" class="custom-btn btn-success"> View</button6

             >
            </td>
            <td><?php echo $name; ?></td>
            <td><?php echo ""; ?></td>
            <td><?php  echo $shortdesc; ?></td>

          </tr>
          <?php } } ?>
         
        </thead>
      </table>
       
</div>
  <div class="col-sm-12">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2689.174718399692!2d-122.33608998454811!3d47.62273489485683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5490153736c1ee31%3A0xfeb8a0b88f1c8390!2s1200%2C%20400%20Fairview%20Ave%20N%20%23800%2C%20Seattle%2C%20WA%2098109%2C%20USA!5e0!3m2!1sen!2sin!4v1568816896410!5m2!1sen!2sin" width="100%" height="400px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
    </div>
 
    </div>
  </div>
  <div class="col-md-6 col-sm-12">
    <h4>Provider Description</h4>
    <div class="border pt-20">
    <div class="img-logo">
      <p>
      <img class="img-responsive" src="https://dev11.resourcestack.com/wp-content/uploads/2018/10/arcora_img.png" style="height:73px; width:150px;float: left;">
      <span class="fa fa-print" style="float: right;"></span>
      </p>
    </div>
    <div class="provider-content">
    <?php $providername =  $practices["0"]['OrganizationName']["OrganizationName"]["0"]["Text"];
         /*if(is_array($practices["0"]['organizationName']["OrgDescription"])){
          $providershortdesc= $practices["0"]['organizationName']["OrgDescription"]["0"]["text"];
         }else{
          $providershortdesc= $practices["0"]['organizationName']["OrgDescription"];
         }*/ 
         $providershortdesc= $practices["0"]['Programs']["0"]["ProgramDescription"]["0"]["Text"];
         ?>
      <h4>Provider Name</h4>
      <p id='providernamefill'><?php echo $providername; ?></p>
      <h4>Short Description</h4>
      <p id='providershortdescfill'><?php echo $providershortdesc; ?></p>
      <h4>Mission Statement </h4>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's </p>

    </div>
    <ul class="nav">
      <li> <a href="tel:800.443.4143"><i class="fa fa-phone"></i> 800.443.4143</a></li>
      <li><a href="mailto:contact@arcora.org"><i class="fa fa-envelope"></i> contact@arcora.org</a></li>
    </ul>
    <div class="text-center">
      <button type="button " class="custom-btn btn-success"> Add Task</button>

    </div>
    </div>
  </div>
</div>

<?php }else{ ?>
<div class="row">
<div class="col-md-12"><span><center><strong><p style="color: red">No Record found for this search</p></strong></center></span></div>
</div>
<?php } ?>

	<!-- <div class="col-md-12 rightside">
	    <div class="post-73 page type-page status-publish hentry">	
			<div class="row post-area">
	            <div class="post-73 page type-page status-publish hentry">
	                
					<div class="col-md-12 border">
				        <div class="line"></div>
              <div class="post_title"><h3>Practices</h3></div>
							

				            <div class="post-tags"></div>
				            <div class="post-tags"></div>
                    <div class="post_title pull-right">
              <h3><a  id="listprac" class="" href="javascript:void(0)" onclick="showview('list')" ><i class="fa fa-bars " aria-hidden="true" ></i></a>|<a href="javascript:void(0)" class=""  id="mapprac" onclick="showview('map')"><i class="fa fa-map" aria-hidden="true"></i></a></h3></div>
				            
				            <div class="post_content">
				                <?php if($error == 0){ ?>
                            <table class="table table-bordered">
                              <form method="post" action="">                
    									<thead>
    									    <tr>
    									      <th scope="col">
    									      <label>Zipcode</label>
    									      <input type="text" name="zipcode" class="form-control" placeholder="Zipcode" value="<?php if(!empty($_POST['zipcode'])){ echo $_POST['zipcode']; } ?>"></th>
    									      <th scope="col">
                                <label>Radius</label>
    									         <select class="form-control" name="radius">
                                  <option value="">Select</option>
                                  <option value="5" <?php if(!empty($_POST['radius']) && ($_POST['radius'] == '5')){ echo "selected"; } ?>>5 Miles</option>
                                  <option value="10" <?php if(!empty($_POST['radius']) && ($_POST['radius'] == '10')){ echo "selected"; } ?>>10 Miles</option>
                                  <option value="15" <?php if(!empty($_POST['radius']) && ($_POST['radius'] == '15')){ echo "selected"; } ?>>15 Miles</option>
                                  <option value="20" <?php if(!empty($_POST['radius']) && ($_POST['radius'] == '20')){ echo "selected"; } ?>>20 Miles</option>
                                  <option value="25" <?php if(!empty($_POST['radius']) && ($_POST['radius'] == '25')){ echo "selected"; } ?>>25 Miles</option>
                                  <option value="30" <?php if(!empty($_POST['radius']) && ($_POST['radius'] == '30')){ echo "selected"; } ?>>30 Miles</option>
                               </select>
                            </th>
    									      <th scope="col">
                                <label>Service Type</label>
                                <select class="form-control" name="services_type">
                                <option value=''>-Select-</option>
                                <option value='Extractions' <?php if(!empty($_POST['services_type']) && ($_POST['services_type'] == 'Extractions')){ echo "selected"; } ?>>Extractions</option>
                                <option value='Orthodontics' <?php if(!empty($_POST['services_type']) && ($_POST['services_type'] == 'Orthodontics')){ echo "selected"; } ?>>Orthodontics</option>
                                <option value='Dentures' <?php if(!empty($_POST['services_type']) && ($_POST['services_type'] == 'Dentures')){ echo "selected"; } ?>>Dentures</option>
                                </select>
    									      </th>
    									      <th scope="col">
                            <label>Provider Name</label>
    									      <input type="text" value="<?php if(!empty($_POST['provider_name'])){ echo $_POST['provider_name']; } ?>" name="provider_name" class="form-control" placeholder="Provider Name"> </th>
                            <th scope="col">
                                <label>&nbsp;&nbsp;</label>
                                <input name="providerviewtype" type="hidden" id="providerviewtype"  value="<?php if(!empty($_POST['providerviewtype'])){ echo $_POST['providerviewtype']; } ?>" >
                                <input name="search" type="submit" class="btn-success" value="Search" ></th>
    									      
    									    </tr>
    									</thead>
                  </form>
								</table>
                <div id="listview">
				 				<table class="table table-striped">
									<thead>
									    <tr>
									      <th scope="col">PRACTICE NAME</th>
									      <th scope="col">DISTANCE</th>
									      <th scope="col">HOURS</th> 
									      <th scope="col">EMAIL </th>
									      <th scope="col">WEBSITE</th>
									      <th scope="col">&nbsp;&nbsp;</th>
									    </tr>
									</thead>
                  <tbody>
                      <?php 
                          if(!empty($practices)){
                          foreach ($practices as $key => $value) { 
                          
                                $mapaddress = '';
                                if(!empty($value['Google_Maps_link'])){
                                   $maplink =  str_replace("http://","https://",$value['Google_Maps_link']);
                                   $mapaddress = $maplink.'&output=embed';
                                }else{
                                   $mapaddress = '';
                                }

                                $distance = '';
                                if(!empty($value['distance'])){
                                  $distance = $value['distance'];
                                }else{
                                  $distance = '--';
                                }
                            ?>	
									    <tr>
									      <th><?php echo $value['Name']; ?></th>
									      <td><?php echo $distance; ?></td>
									      <td><?php if(strlen($value['Office_Hours']) > 50){
                                                      $string2 = substr($value['Office_Hours'], 0, 50); echo $string2.'...';
                          }else{ echo $value['Office_Hours']; } ?></td>
									      <td><?php echo $value['Office_Email']; ?></td>
									      <td><i class="fa fa-globe" aria-hidden="true"></i></td>
                        <td><a href="" onclick="getpracticsdetails('<?php echo $value['Name']; ?>','<?php echo $mapaddress; ?>','<?php echo $value['Office_Hours'] ?>','<?php echo $value['Billing_Address_Line_1'] ?>','<?php echo $value['Billing_City'] ?>','<?php echo $value['Billing_Zip/Postal_Code'] ?>','<?php echo $value['Billing_State/Province'] ?>','<?php echo $value['Office_Email']; ?>','<?php echo $value['Provider_Type']; ?>')" title="SEE MORES" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></td> 
									    </tr>
									    <?php } }else{ ?>
                      <tr><td colspan="7"><center>No record found</center></td></tr>
									    <?php } ?>
									    </tbody>
									</table>
                  </div>
                  <div class="row" id="mapview" >
                      <div class="col-md-12">
                      <div class="col-md-8">
                         <div id="map" style="width: 705px; height: 100%;"></div>
       
        
                </div>
                <div class="col-md-4">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">PRACTICE NAME</th>
                          <th scope="col">DISTANCE</th>
                          <th scope="col">&nbsp;&nbsp;</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php 
                          $locarray = array();
                          if(!empty($practices)){
                          foreach ($practices as $key => $value) {
                              if(!empty($value['Latitude']) && !empty($value['Longitude'])) { 
                                                       
                                $locarray[$key] = array(
                                          'name'=> $value['Name'],
                                          'lat'=>$value['Latitude'],
                                          'lng'=>$value['Longitude'],
                                          'key'=>$key,

                                        );

                                }

                                 $distance = '';
                                if(!empty($value['distance'])){
                                  $distance = $value['distance'];
                                }else{
                                  $distance = '--';
                                }

                           ?> 
                         <tr>
                            <th scope="row" ><?php echo $value['Name']; ?></th>
                            <td ><?php echo $distance; ?></td>
                            <?php
                             $mapaddress = '';
                             if(!empty($value['Google_Maps_link'])){
                               $maplink =  str_replace("http://","https://",$value['Google_Maps_link']);
                               $mapaddress = $maplink.'&output=embed';
                             }else{
                               $mapaddress = '';
                             }


                            ?>
                        <td ><a href="" onclick="getpracticsdetails('<?php echo $value['Name']; ?>','<?php echo $mapaddress; ?>','<?php echo $value['Office_Hours'] ?>','<?php echo $value['Billing_Address_Line_1'] ?>','<?php echo $value['Billing_City'] ?>','<?php echo $value['Billing_Zip/Postal_Code'] ?>','<?php echo $value['Billing_State/Province'] ?>','<?php echo $value['Office_Email']; ?>','<?php echo $value['Provider_Type']; ?>')" title="SEE MORES" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></td> 
                      </tr>
                      <?php }

                      
     
       


                       }else{ ?>
                                        <tr><td colspan="7"><center>No record found</center></td></tr>
                      <?php } ?>
                      </tbody>
                  </table>
                </div>
                  
                  </div>
                  </div>

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
</div> -->


<!-- <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" class="overlay">

    <div class="popup container">
        <h2 id="practicsname"></h2>
        <a class="close"  data-dismiss="modal" aria-label="Close" href="#">&times;</a>
        <div class="content col-md-6">
      <div class="row">
      <div class="col-md-7">
            <ul class="nav  ">
                <li id="practicsaddress"></li>
                <li id="practicshour"></li>
                <li id="practicscontact"></li>
                <li id="practicsservice"></li>
            </ul>
    
    </div>
    <div class="col-md-5"><img src="https://www.vikramhospital.com/images/doctors/dummy-men.jpg" class="img-responsive" width="170px " ></div></div>
    <div class="row"> -->
    <!-- <div class="col-md-12 content">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>   </div> -->

       <!--  </div></div>
        <div class=" col-md-6" style="padding-top: 10px;" id="practicsmap" >
            
        </div>
             -->
          
    </div>
    </div>

<?php get_footer(); ?>

<script type="text/javascript">
var ajax_url = "<?php echo '/ajax.php'; ?>";

function showdetails(details) {
  var providername = jQuery(details).attr('data-name');
  var providershortdesc = jQuery(details).attr('data-shortdesc');
  jQuery('#providernamefill').text(providername);
  jQuery('#providershortdescfill').html(providershortdesc);
}
	
function getpracticsdetails(practicesname,maplink,officehours,address1,city,zipcode,state,officeemail,Services){
    
    var addresshtml = "<span>Address:</span><br>"+address1+" , "+city+" , "+state+" "+zipcode;
    var hourshtml = "<span>Hours:</span><br>"+officehours;
    var maphtml = "<iframe  src='"+maplink+"' width='100%'' height='250px' frameborder='0' style='border:0' allowfullscreen></iframe>";
    var contacthtml = "<span>Contact:</span><br>"+officeemail;
    var serviceHtml = "<span>Services:</span><br>"+Services;

    //alert(maphtml);
    jQuery('#practicsname').html(practicesname);
    jQuery('#practicsaddress').html(addresshtml);
    jQuery('#practicshour').html(hourshtml);
    //jQuery('#practicstime').html(phonehtml);
    jQuery('#practicscontact').html(contacthtml);
    jQuery('#practicsmap').html(maphtml);
    jQuery('#practicsservice').html(serviceHtml);
}	


function showview(type){
  if(type == 'map'){

     jQuery('#mapview').show();
     jQuery('#listview').hide();
     document.getElementById("providerviewtype").value = 'map';
    // localStorage.setItem('viewtype', type);
     document.getElementById("mapprac").classList.add("view-active");
     document.getElementById("listprac").classList.remove("view-active");
    
  }else{
     jQuery('#listview').show();
     jQuery('#mapview').hide();
     document.getElementById("providerviewtype").value = 'list';
    // localStorage.setItem('viewtype', type);

     document.getElementById("listprac").classList.add("view-active");
     document.getElementById("mapprac").classList.remove("view-active");
  }

  
  
}

jQuery(window).load(function() {
    var practicsview = document.getElementById("providerviewtype").value;
    if((practicsview != '') || (practicsview != null)){
      showview(practicsview);
    }else{
      showview('list');
    }
     
});
</script>

<script>
   var locations = [];
   <?php foreach ($locarray as $item) : ?>
   locations.push(['<?php echo $item['loc_name']?>', <?php echo $item['lat']?>,<?php echo $item['lng']?>,<?php echo $item['key']?>]);
   <?php endforeach; ?>

    //alert(locations); 

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 7,
      center: new google.maps.LatLng(47.642039, -117.417213),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();
    var marker, i;

    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
         // infowindow.setContent(locations[i][0]);
         // infowindow.open(map, marker);
        }
      })(marker, i));
    }


   /* function getformdata(){
      var populationdata = jQuery("#example-getting-started").val();
      var servicetypes = jQuery("#example-getting-started1").val();
      var provider_name = jQuery("#provider_name").val();
      var location = jQuery("#location").val();
      var location_type = jQuery("#location_type").val();
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
        </script>
