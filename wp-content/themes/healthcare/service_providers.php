<style >
:root
{
  --text: "Select values";
}
ul#mainOffice i:nth-of-type(1) {
    display: none;
}
ul#mainOffice li i {
    display: inline-block!important;
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
    height: 613px;
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
	  if($serachData['location_type']=='Virtual'){
		  $serachData['location']='Virtual';
	  }

    if($serachData['location_type']=='National'){
      $serachData['location']='National';
    }
     //  echo "<pre>";
     // print_r($serachData);exit;
    }
	//echo "<pre>";
      //print_r($serachData);exit;
	  $practicesdata = serviceproviderslist($serachData);
	  if(!empty($practicesdata['status'] == 'ok')){
	  	 $practices = $practicesdata['provider_list'];
      //echo "<pre>";
      // print_r($practices); 
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
          <option value="LGBTQ" <?php if(!empty($_POST['population']) && (in_array('LGBTQ',$_POST['population']))){ echo "selected"; } ?>>LGBTQ</option>
          <option value="LowIncome" <?php if(!empty($_POST['population']) && (in_array('LowIncome',$_POST['population']))){ echo "selected"; } ?>>Very Low-Income</option>
          <option value="Native" <?php if(!empty($_POST['population']) && (in_array('Native',$_POST['population']))){ echo "selected"; } ?>>Native</option>
          <option value="Other" <?php if(!empty($_POST['population']) && (in_array('Other', $_POST['population']))){ echo "selected"; } ?>>Other</option>
          <option value="Senior" <?php if(!empty($_POST['population']) && (in_array('Senior',$_POST['population']))){ echo "selected"; } ?>>Senior</option>
          <option value="Veteran" <?php if(!empty($_POST['population']) && (in_array('Veteran',$_POST['population']))){ echo "selected"; } ?>>Veteran</option>
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
          <option value="COVID19" <?php if(!empty($_POST['services_type']) && (in_array('COVID19',$_POST['services_type']))){ echo "selected"; } ?>>COVID19</option>
          <option value="DayCare" <?php if(!empty($_POST['services_type']) && (in_array('DayCare',$_POST['services_type']))){ echo "selected"; } ?>>DayCare</option>
          <option value="Dental" <?php if(!empty($_POST['services_type']) && (in_array('Dental',$_POST['services_type']))){ echo "selected"; } ?>>Dental</option>
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
          <option value="Lists & Guides" <?php if(!empty($_POST['services_type']) && (in_array('Lists & Guides',$_POST['services_type']))){ echo "selected"; } ?>>Lists & Guides</option>

          <option value="Medical" <?php if(!empty($_POST['services_type']) && (in_array('Medical', $_POST['services_type']))){ echo "selected"; } ?>>Medical</option>
          <option value="Research" <?php if(!empty($_POST['services_type']) && (in_array('Research', $_POST['services_type']))){ echo "selected"; } ?>>Research</option>
          <option value="Resources" <?php if(!empty($_POST['services_type']) && (in_array('Resources', $_POST['services_type']))){ echo "selected"; } ?>>Resources</option>
          <option value="Respite" <?php if(!empty($_POST['services_type']) && (in_array('Respite', $_POST['services_type']))){ echo "selected"; } ?>>Respite</option>
          <option value="Senior" <?php if(!empty($_POST['services_type']) && (in_array('Senior', $_POST['services_type']))){ echo "selected"; } ?>>Senior</option>
          <option value="Transportation" <?php if(!empty($_POST['services_type']) && (in_array('Transportation', $_POST['services_type']))){ echo "selected"; } ?>>Transportation</option>
          <option value="Veterans" <?php if(!empty($_POST['services_type']) && (in_array('Veterans', $_POST['services_type']))){ echo "selected"; } ?>>Veterans</option>
          <option value="Victim" <?php if(!empty($_POST['services_type']) && (in_array('Victim', $_POST['services_type']))){ echo "selected"; } ?>>Victim</option>
          <option value="Vision" <?php if(!empty($_POST['services_type']) && (in_array('Vision',$_POST['services_type']))){ echo "selected"; } ?>>Vision</option>
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
          } ?>" name="location" id="location" class="form-control" placeholder="Location">
      </th>
      <th scope="col">
        <label>Location Type</label>

        <select class="form-control" name="location_type" id="location_type">
        <option value="">Please Select </option>
          <option value="City" <?php if(!empty($_POST['location_type']) && ($_POST['location_type'] == 'City')){ echo "selected"; } ?>>City</option>
          <option value="State" <?php if(!empty($_POST['location_type']) && ($_POST['location_type'] == 'State')){ echo "selected"; } ?>>State</option>
          <option value="County" <?php if(!empty($_POST['location_type']) && ($_POST['location_type'] == 'County')){ echo "selected"; } ?>>County</option>
          <option value="National" <?php if(!empty($_POST['location_type']) && ($_POST['location_type'] == 'National')){ echo "selected"; } ?>>National</option>
          <option value="Virtual" <?php if(!empty($_POST['location_type']) && ($_POST['location_type'] == 'Virtual')){ echo "selected"; } ?> id="location_virtual">Virtual</option>
        </select>
      </th>
      <th scope="col">
    <!--   <button type="button" onclick="getformdata();" class="custom-btn btn-success">Search</button>  -->
        <input type="submit" name="search" class="custom-btn btn-primary button-all" value="Search">
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
    <h4>Search Results <b>{<?=count($practices)?>}</b></h4>
    <div class="border row">
    <div class="col-sm-12">
      <div class="scroll">
      <table class="margin-bt">

          <thead>
            <tr>

            <th></th>
            <th></th>
            <!-- <th>Description</th> -->
          </tr>

          <?php
          if(!empty($practices)){
          //  echo "<pre>";
          // print_r($practices); die;
         foreach ($practices as $practiceskey => $practicesvalue) {
           //echo "<pre>";
           //print_r($practicesvalue); die;
         $name =  $practicesvalue['OrganizationName']["OrganizationName"]["0"]["Text"];
         $orgDescription =  $practicesvalue['OrganizationName']["OrgDescription"]["0"]["Text"];
         /*if(is_array($practicesvalue['organizationName']["OrgDescription"])){
          $shortdesc= $practicesvalue['organizationName']["OrgDescription"]["0"]["text"];
         }else{
          $shortdesc= $practicesvalue['organizationName']["OrgDescription"];
         }*/

        $shortdesc= $practicesvalue["Programs"]["ProgramDescriptionDisplay"];
         if($shortdesc==''){
          $shortdesc= $practicesvalue["Programs"]["ProgramDescription"][0]["Text"];
         }
         $programName= $practicesvalue["Programs"]["ProgramName"];
         $services="";
         $popolations="";
         foreach($practicesvalue['Programs'] as $key=>$val){
          $arr=explode("_",$key);
          if($arr[0]=="S" && $val=="TRUE"){
            $services .= $arr[1].", ";
          }
          if($arr[0]=="P" && $val=="TRUE"){
            $popolations.=$arr[1].", ";
          }

         }
        $addressRaw="";

          if(is_array($practicesvalue['Programs']['ProgramSites'])){
           foreach($practicesvalue["OrgSites"] as $key=>$val){
           if(in_array($val["SelectSiteID"], $practicesvalue["Programs"]["ProgramSites"])){

              // $mainOffice1 = $val['Addr1'][0]['Text'].', '.$val['Addr2'].', '.$val['AddrCity'].', '.$val['AddrState'].', '.', '.$val['AddrZip'];
              $mainOffice1 = $val['Addr1'][0]['Text'];
              if(!empty($val['Addr2']))
              {
                   $mainOffice1 .= ','.$val['Addr2'];
              }
              if(!empty($val['AddrCity']))
              {
                   $mainOffice1 .= ','.$val['AddrCity'];
              }
              if(!empty($val['AddrState']))
              {
                   $mainOffice1 .= ','.$val['AddrState'];
              }
              if(!empty($val['AddrZip']))
              {
                   $mainOffice1 .= ','.$val['AddrZip'];
              }

              $mainOffice = rtrim($mainOffice1, ',');
             //$addressRaw.='<li  > <i class="fa fa-map-marker"></i>'.$mainOffice.'</li> <br>';
              
            foreach($val['POCs'] as $pockey=>$pocval){

              $officePhone= $pocval['poc']['OfficePhone'];
              $OfficeEmail= $pocval['poc']['Email'];
              $contactName= $pocval['poc']['Name'];

              $addressRaw.='<li  > <i class="fa location-name"></i><strong>'.$val['LocationName'].'</strong></li>
              <li  > <i class="fa web-page"></i>'.$val['Webpage'].'</li>
              <li  > <i class="fa fa-map-marker"></i>'.$mainOffice.'</li>
              <li id="contactName"> <i class="fa fa-user"></i>'.$contactName.'</li>
              <li id="officePhone"> <a href="tel:'.$officePhone.'"><i class="fa fa-phone"></i>'.$officePhone.'</a></li>
              <li id="OfficeEmail"><a href="mailto:'.$OfficeEmail.'"><i class="fa fa-envelope"></i>'.$OfficeEmail.'</a></li>';

              $addressRaw.="<br>";

            }
          } 
		  
		  // else{
            // $addressRaw="";
          // }

          }
         } else{
          $addressRaw="";
         }

         $populationDesc= $practicesvalue['Programs']["PopulationDescriptionDisplay"];
         if($populationDesc==''){
          $populationDesc= $practicesvalue['Programs']["PopulationDescription"][0]["Text"];
         }
         $servicesTags= $practicesvalue['Programs']["ServiceTags"];

         $serviceAreaDesc=$practicesvalue["Programs"]["ServiceAreaDescriptionDisplay"];
        if($serviceAreaDesc==''){
          $serviceAreaDesc=$practicesvalue["Programs"]["ServiceAreaDescription"][0]["Text"];
        }
         $quickLink= $practicesvalue["Programs"]["QuickConnectWebPage"];
         if (filter_var($quickLink, FILTER_VALIDATE_URL)){
          //just pass it
         } else{
          $quickLink="";
         }
         $contactPage= $practicesvalue["Programs"]["ContactWebPage"];
         if (filter_var($contactPage, FILTER_VALIDATE_URL)){
          //just pass it
         } else{
          $contactPage="";
         }
         $homePageUrl= $practicesvalue["OrganizationName"]['HomePageURL'];
         if (filter_var($homePageUrl, FILTER_VALIDATE_URL)){
          //just pass it
         } else{
          $homePageUrl="";
         }
         $programPageUrl= $practicesvalue['Programs']['ProgramWebPage'];
         if (filter_var($programPageUrl, FILTER_VALIDATE_URL)){
          //just pass it
         } else{
          $programPageUrl="";
         }

      ?>
          <tr>
        
            <td>
             <b>Organization Name: </b> <?php echo $name; ?>
              <br>

              <b>Program Name: </b> <?php echo $programName; ?>

              <br><br>

            </td>
            <td style="padding-top: 10px;"><?php echo ""; ?></td>
           <!--  <td><?php  echo $shortdesc; ?></td> -->
            <td>
	<?php /* print_r($practicesvalue) */ ?>
		
             <button type="button" data-name="<?php echo $name; ?>" data-orgDesc="<?php echo $orgDescription; ?>"  data-shortdesc="<?php echo $shortdesc; ?>" data-programName="<?php echo $programName; ?>" data-populationDesc="<?php echo $populationDesc; ?>" data-servicesTags="<?php echo $servicesTags; ?>" data-serviceAreaDesc="<?php echo $serviceAreaDesc; ?>" data-population="<?php echo rtrim($popolations, ','); ?>" data-services="<?php echo rtrim($services, ','); ?>" data-mainOffice="<?php echo htmlentities($addressRaw); ?>" data- data-quickLink="<?=$quickLink?>" data-contactPage="<?=$contactPage?>" data-homePageUrl="<?=$homePageUrl?>" data-programPageUrl="<?=$programPageUrl?>" data-contactName="<?=$contactName?>" style=" display: block; padding: 10px; text-align: center; color: #fff; line-height: 21px; margin-right: 10px;" onclick="showdetails(this)" class="custom-btn btn-primary button-all"> Show Detail</button>
            </td>

          </tr>
          <?php $services=""; $popolations="";} } ?>

        </thead>
      </table>

</div>
<!--   <div class="col-sm-12">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2689.174718399692!2d-122.33608998454811!3d47.62273489485683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5490153736c1ee31%3A0xfeb8a0b88f1c8390!2s1200%2C%20400%20Fairview%20Ave%20N%20%23800%2C%20Seattle%2C%20WA%2098109%2C%20USA!5e0!3m2!1sen!2sin!4v1568816896410!5m2!1sen!2sin" width="100%" height="400px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div> -->
    </div>

    </div>
  </div>
  <div class="col-md-6 col-sm-12">

<?php
//echo '<pre>' print_r($practices[0]); die();

         $quickLink=$practices[0]["Programs"]["QuickConnectWebPage"];
         $contactPage= $practices[0]["Programs"]["ContactWebPage"];
         $homePageUrl= $practices[0]['OrganizationName']['HomePageURL'];
         $programPageUrl= $practices[0]['Programs']['ProgramWebPage'];


         ?>
    <h4>Provider Description</h4>
    <div class="border pt-set">
      <div class="row">
        <div class="col-sm-9">
        <?php /* print_r("You are in the right place") */ ?>
    	<h4>Organization Name</h4>
    	<p id='providernamefill'><?php $providername =  $practices["0"]['OrganizationName']["OrganizationName"]["0"]["Text"];
         echo $providername;
       ?></p>
        
        <h4>Organization Description</h4>
        <p id='providerdescriptionfill'><?php $providerdescription =  $practices["0"]['OrganizationName']["OrgDescription"]["0"]["Text"];
         echo $providerdescription;
       ?></p>
      </div>



       <div class="text-right col-sm-3 ">
         <div  style="padding-right: 10px;">
      <button type="button " class="custom-btn btn-primary button-all"> Add Task</button>
</div>
   
       </div>
     </div>
    	 <div class="tab" role="tabpanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs menu-tabs" role="tablist">
                    <li role="presentation" ><a id="quickLink" <?php if (filter_var($quickLink, FILTER_VALIDATE_URL)) { ?> href="<?=$quickLink?>" <?php } elseif(!filter_var($quickLink, FILTER_VALIDATE_URL)){?>  style='opacity: 0.2;' <?php  } ?>  target="_blank" class="button-all">Quick Links</a></li>
                    <li role="presentation"><a  <?php if (filter_var($programPageUrl, FILTER_VALIDATE_URL)) {?>href="<?=$programPageUrl?>" <?php } elseif(!filter_var($programPageUrl, FILTER_VALIDATE_URL)){?>  style='opacity: 0.2;' <?php  } ?> id="programPageUrl" aria-controls="profile" target="_blank" class="button-all">Program Page</a></li>
                    <li role="presentation"><a <?php if (filter_var($homePageUrl, FILTER_VALIDATE_URL)) { ?> href="<?=$homePageUrl?>" <?php } elseif(!filter_var($homePageUrl, FILTER_VALIDATE_URL)){?>  style='opacity: 0.2;' <?php  } ?> id="homePageUrl" aria-controls="messages" target="_blank" class="button-all">Home Page</a></li>
                    <li role="presentation"><a <?php if (filter_var($contactPage, FILTER_VALIDATE_URL)) {?> href="<?=$contactPage?>" <?php } elseif(!filter_var($contactPage, FILTER_VALIDATE_URL)){?>  style='opacity: 0.2;' <?php  } ?> id="contactPage" aria-controls="messages" target="_blank" class="button-all">Contact Page</a></li>
                    <li role="presentation"><a  aria-controls="messages" style='opacity: 0.2;'  class="button-all">Other Page</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content tabs">
                    <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                         <div class="provider-content">
    <?php

         $programName= $practices[0]["Programs"]["ProgramName"];
         $providershortdesc= $practices[0]["Programs"]["ProgramDescriptionDisplay"];
         if($providershortdesc==''){
         $providershortdesc= $practices[0]["Programs"]["ProgramDescription"][0]["Text"];
         }
         $populationDesc= $practices[0]['Programs']["PopulationDescriptionDisplay"];
         if($populationDesc==''){
          $populationDesc= $practices[0]['Programs']["PopulationDescription"][0]["Text"];
         }
         $servicesTags= $practices[0]["Programs"]["ServiceTags"];
         $services="";

        $serviceAreaDesc=$practices[0]["Programs"]["ServiceAreaDescriptionDisplay"];
        if($serviceAreaDesc==''){
          $serviceAreaDesc=$practices[0]["Programs"]["ServiceAreaDescription"][0]["Text"];
        }
         $popolations="";


         foreach($practices["0"]['Programs'] as $key=>$val){
          $arr=explode("_",$key);
          if($arr[0]=="S" && $val=="TRUE"){
            $services .= $arr[1].", ";
          }
          if($arr[0]=="P" && $val=="TRUE"){
            $popolations.=$arr[1].", ";
          }

         }

         //Step-1->logic for displaying the addresses is first of all we will have to check the Program sites if program sites is a valid array then move to step 2

         //Step-2->logic for displaying the addresses is first of all we will have to check the Program sites if program sites is a valid array

         ?>
      <h4>Program Name</h4>
      <p id='programName'><?php echo $programName; ?></p>
      <h4>Program Description</h4>
      <p id='providershortdescfill'><?php echo $providershortdesc; ?></p>
      <h4>Populations </h4>
      <p id='population'><?php echo rtrim($popolations, ','); ?></p>
      <h4>Population Description</h4>
      <p id='populationDesc'><?php echo $populationDesc; ?></p>
         <h4>Services </h4>
      <p id='services'><?php echo rtrim($services, ','); ?></p>
       
       <h4>Service Area Description</h4>
       <p id='serviceAreaDesc'><?php echo $serviceAreaDesc; ?></p>
        <h4>Tags </h4>
      <p id="servicesTags"><?php echo $servicesTags; ?></p>
      <h3 style="margin-bottom: 0px;">Address</h3>
	<?php /*print_r($practices)*/ ?>
    <ul class="nav nav-set" id="mainOffice">
     <?php
    	 if(is_array($practices[0]["Programs"]["ProgramSites"])){
          foreach($practices[0]["OrgSites"] as $key=>$val){
            if(in_array($val["SelectSiteID"], $practices[0]["Programs"]["ProgramSites"])){

             // $mainOffice = $val['Addr1'][0]['Text'].', '.$val['Addr2'].', '.$val['AddrCity'].', '.$val['AddrState'].', '.$val['AddrZip']; 
              $mainOffice1 = $val['Addr1'][0]['Text'];
              if(!empty($val['Addr2']))
              {
                   $mainOffice1 .= ','.$val['Addr2'];
              }
              if(!empty($val['AddrCity']))
              {
                   $mainOffice1 .= ','.$val['AddrCity'];
              }
              if(!empty($val['AddrState']))
              {
                   $mainOffice1 .= ','.$val['AddrState'];
              }
              if(!empty($val['AddrZip']))
              {
                   $mainOffice1 .= ','.$val['AddrZip'];
              }

              $mainOffice = rtrim($mainOffice1, ',');

              ?>




	
              <?php foreach($val['POCs'] as $pockey=>$pocval){
              $officePhone= $pocval['poc']['OfficePhone'];
              $OfficeEmail= $pocval['poc']['Email'];
              $contactName= $pocval['poc']['Name']; ?>

			<li id="contactName"> <i class="fa fa-user"></i> <?=$contactName?></li>
			<li id="officePhone"> <a href="tel:<?php echo $officePhone;?>"><i class="fa fa-phone"></i> <?php echo $officePhone;?></a></li>
			<li id="OfficeEmail"><a href="mailto:<?php echo $OfficeEmail;?>"><i class="fa fa-envelope"></i>

			<?php echo $OfficeEmail;?></a></li>

             <?php }

            }

          }
         } ?>


    </ul>




    </div>
                    </div>

                </div>
            </div>
   <!--  <div class="img-logo">
      <p>
      <img class="img-responsive" src="https://dev11.resourcestack.com/wp-content/uploads/2018/10/arcora_img.png" style="height:73px; width:150px;float: left;">
      <span class="fa fa-print" style="float: right;"></span>
      </p>
    </div> -->

    
    </div>
  </div>
</div>

<?php }else{ ?>
<div class="row">
<div class="col-md-12"><span><center><strong><p style="color: red">No Record found for this search</p></strong></center></span></div>
</div>
<?php } ?>

	  </div>
    </div>

<?php get_footer(); ?>

<script type="text/javascript">

$('#location_type').on('change', function() {
	if(this.value == 'Virtual'){
		$('#location').val('');
		$( "#location" ).prop( "disabled", true );
	}
  if(this.value == 'National'){
    $('#location').val('');
    $( "#location" ).prop( "disabled", true );
  }
	else{
		$( "#location" ).prop( "disabled", false );
	}
});
 
$( document ).ready(function() {
    if($( "#location_type option:selected" ).text() == 'Virtual'){
		$('#location').val('');
		$( "#location" ).prop( "disabled", true );
	}
	else{
		$( "#location" ).prop( "disabled", false );
	}
});

var ajax_url = "<?php echo '/ajax.php'; ?>";

function showdetails(details) {
  var providername = jQuery(details).attr('data-name');
  var providerdescription = jQuery(details).attr('data-orgDesc');
  var providershortdesc = jQuery(details).attr('data-shortdesc');
  var programName = jQuery(details).attr('data-programName');
  var population = jQuery(details).attr('data-population');
  var populationDesc = jQuery(details).attr('data-populationDesc');
  var services = jQuery(details).attr('data-services');
  var serviceAreaDesc = jQuery(details).attr('data-serviceAreaDesc');
  var servicesTags = jQuery(details).attr('data-servicesTags');
  var mainOffice = jQuery(details).attr('data-mainOffice');
  var quickLink = jQuery(details).attr('data-quickLink');
  var contactPage = jQuery(details).attr('data-contactPage');
  var homePageUrl = jQuery(details).attr('data-homePageUrl');
  var programPageUrl = jQuery(details).attr('data-programPageUrl');
  if(quickLink==''){
    jQuery("#quickLink").removeAttr("href");
	jQuery("#quickLink").css("opacity", "0.2");
   } else{
    jQuery("#quickLink").attr("href", quickLink);
	  jQuery("#contactPage").removeAttr("style");
  }

  if(contactPage==''){
    jQuery("#contactPage").removeAttr("href");
	jQuery("#contactPage").css("opacity", "0.2");
    

 } else{
    jQuery("#contactPage").attr("href", contactPage);
	jQuery("#contactPage").removeAttr("style");

 }

 if(homePageUrl==''){
  jQuery("#homePageUrl").removeAttr("href");
   jQuery("#homePageUrl").css("opacity", "0.2");

 } else{
  jQuery("#homePageUrl").attr("href", homePageUrl);
  jQuery("#homePageUrl").removeAttr("style");
 }

  if(programPageUrl==''){
  jQuery("#programPageUrl").removeAttr("href");
  
jQuery("#programPageUrl").css("opacity", "0.2");
 } else{
  jQuery("#programPageUrl").attr("href", programPageUrl);
   jQuery("#programPageUrl").removeAttr("style");
 }

 if(programPageUrl==''){
  jQuery("#programPageUrl").removeAttr("href");
  jQuery("#programPageUrl").css("opacity", "0.2");

 } else{
  jQuery("#programPageUrl").attr("href", programPageUrl);
   jQuery("#programPageUrl").removeAttr("style");
 }

  jQuery('#providernamefill').text(providername);
  jQuery('#providerdescriptionfill').text(providerdescription);
  jQuery('#providershortdescfill').html(providershortdesc);
  jQuery('#programName').html(programName);
  jQuery('#population').html(population);
  jQuery('#populationDesc').html(populationDesc);
  jQuery('#services').html(services);
  jQuery('#serviceAreaDesc').html(serviceAreaDesc);
  jQuery('#servicesTags').html(servicesTags);
  jQuery('#mainOffice').html('<i class="fa fa-map-marker"></i> '+mainOffice);
  

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
