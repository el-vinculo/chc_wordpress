<?php
session_start();
error_reporting(1);
//$filename =  __DIR__.'ajax.php';
require_once('wp-config.php'); 
require_once('api.php');
//

$function_name=$_POST['funtion'];

$res=call_user_func($function_name);
echo $res;


function sendtaskapp(){
    $error = 0;
    if(!empty($_POST)){
        $communicationdata = $_POST;

        $email   = $_SESSION['userdata']['email'];
        $task_id = $communicationdata['task_id'];
        $referred_application_id = $communicationdata['referred_application_id'];
        $save = sendrfltask($communicationdata,$email);
        if(!empty($save)){
            if($save['status'] == 'ok'){
                $error = '11';
            }else{
                $error = 1;
            }
        }else{
            $error = 3;
        }
    }else{

        $error = 2;
    }

    return $error;
}


function referraltasks(){
	if(!empty($_POST)){
		
		$referral_id = $_POST['referral_id'];
		$email       = $_POST['email'];

		$tasks = taskList($referral_id,$email);
		if(!empty($tasks)) {
           if($tasks['status'] == 'ok'){
           	   $taskList  = $tasks['task_list'];

           }
		 
		}else{
			$taskList = array();
		}
        
		$taskHtml = taskHtmlTable($taskList,$referral_id);
		echo  $taskHtml;
	}


}

function taskHtmlTable($taskList,$referral_id)
{  
	
	$html = "<table><tbody id='taskbody'><input type='hidden' id='taskrefiid' value='".$referral_id."'>";
            if(!empty($taskList)){ 
                foreach ($taskList as $taskkey => $taskvalue) { 
                $taskiid = 	$taskvalue['task_id'];	
    $html.= "<tr><td id='reftasktype-".$taskvalue['task_id']."'>".$taskvalue['task_type']."</td>
                 <td id='reftaskprovider-".$taskvalue['task_id']."'>".$taskvalue['provider']."</td>
                 <td id='reftaskowner-".$taskvalue['task_id']."'>".$taskvalue['task_owner']."</td>
                 <td id='reftaskdesc-".$taskvalue['task_id']."'>".$taskvalue['task_description']."</td>
                 <td id='reftaskdeadline-".$taskvalue['task_id']."'>".date('d-m-Y',strtotime($taskvalue['task_deadline']))."</td>
                 <td id='reftaskstatus-".$taskvalue['task_id']."'>".$taskvalue['task_status']."</td>
                 <td><button class='btn-primary' id='".$taskvalue['task_id']."' data-toggle='modal'  data-target='#myTaskModal' onclick='getPatientRefTask(this.id)' ><i class='fa fa-pencil' aria-hidden='true' ></i></button></td>
                 <td><button class='btn-primary' id='".$taskvalue['task_id']."' data-toggle='modal'  data-target='#myTransferModal' onclick='getTransferTaskdetails(this.id)''  >Transfer</button></td>

            </tr>";
            } }else { 

    $html.=  "<tr><td colspan='7' style='color: red'><center><p>No Task Added</p></center></td></tr>";                        
    } 
                                
    $html.= "</tbody></table>";
    return   $html;
}

function updatePatientReferrals(){
    $error = 0;
    if(!empty($_POST)){
        $referraldata = $_POST;
        $referral_id  = $_POST['ref_id'];
        $email   = $_SESSION['userdata']['email'];
        $update = updateReferral($referraldata,$referral_id,$email);
        if(!empty($update)){
            if($update['status'] == 'ok'){
                $error = '11';
            }else{
                $error = 1;
            }
        }else{
            $error = 3;
        }
    }else{

        $error = 2;
    }

    return $error;
}


function replymsg(){
    $error = 0;
    if(!empty($_POST)){
        $referraldata = $_POST;
       // echo "<pre>";
       // print_r($_POST); die;
        $comm_id  = $_POST['comm_id'];
        $message  = $_POST['message'];
        $email   = $_SESSION['userdata']['email'];
        $update = reply($message,$comm_id,$email);
        if(!empty($update)){
            if($update['status'] == 'ok'){
                $error = '11';
            }else{
                $error = 1;
            }
        }else{
            $error = 3;
        }
    }else{

        $error = 2;
    }

    return $error;
}

function patientsreferralList(){
    if(!empty($_POST)){
        
        $patient_id = $_POST['patient_id'];
        $email       = $_POST['email'];

        $referrals = referralList($patient_id,$email);
        if(!empty($referrals)) {
           if($referrals['status'] == 'ok'){
               $referralList  = $referrals['referral_list'];

           }
         
        }else{
            $referralList = array();
        }
        
        $refHtml = referralHtmlTable($referralList);
        echo  $refHtml;
    }
}

function referralHtmlTable($referralList){
    $html = "<table><tbody id='refbody'>";
            if(!empty($referralList)){ 
                foreach ($referralList as $refkey => $refvalue) {         
    $html.= "<tr><td><input type='radio' class='viewcheck' name='viewtask' id='".$refvalue['referral_id']."' value='".$refvalue['referral_id']."' checked></td>
                 <td id='duedate-".$refvalue['referral_id']."'>".date('d-m-Y',strtotime($refvalue['due_date']))."</td>
                 <td id='refname-".$refvalue['referral_id']."'>".$refvalue['referral_name']."</td>
                 <td id='refdesc-".$refvalue['referral_id']."'>".$refvalue['referral_description']."</td>
                 <td id='source-".$refvalue['referral_id']."'>".$refvalue['source']."</td>
                 <td id='urgency-".$refvalue['referral_id']."'>".$refvalue['urgency']."</td>
                 <td>".$refvalue['task_count']."</td>
                 <td><button class='btn-primary' data-toggle='modal'  data-target='#myModal' onclick='showReferral('".$refvalue[referral_id]."')'><i class='fa fa-pencil' aria-hidden='true'></i></button></td>

            </tr>";
            } }else { 

    $html.=  "<tr><td colspan='7' style='color: red'><center><p>No Referral Added</p></center></td></tr>";                        
    } 
                                
    $html.= "</tbody></table>";
    return   $html;
}

function CommunicationMsgList(){
    if(!empty($_POST)){ 
        $patient_id = $_POST['patient_id'];
        $task_id = $_POST['task_id'];
        $email       = $_POST['email'];
        $messages = messagesList($patient_id,$task_id,$email);
        if(!empty($messages)) {
           if($messages['status'] == 'ok'){
               $messagelist  = array_reverse($messages['comm_data']);
               //rsort($messagelist);
           }
         
        }else{
            $messagelist = array();
        }
        
        $msgHtml = commmsgHtml($messagelist);
        echo  $msgHtml;
    }   
}

function commmsgHtml($messagelist){

   $html = "<div class='col-md-6'><ul>";
    if(!empty($messagelist)){ 
        foreach ($messagelist as $msgkey => $msgvalue) { 
            if($msgvalue['sender_name']){  $ref = $msgvalue['sender_name']; }else{ $ref = 'Care Comminator';  } 
                $html.= "<ol>
                  <div class='message-section' style='background: #f3f1f1; padding: 10px 15px;font-size: 16px; border: 1px solid #ddd;
                    border-radius: 3px;'>
           <p style='font-size: 16px;'><b>".$ref."</b>: ".$msgvalue['message']."</p>
           <small>".$msgvalue['created_at']."</small>
       </ol>";       
        } }else { 
              $html.=  "<ol>
   <div class='message-section' style='background: #f3f1f1; padding: 10px 15px;font-size: 16px; border: 1px solid #ddd;
    border-radius: 3px;'>
       <p style='font-size: 16px;'>No message found </p>
   </ol>";                        
    } 
                                
    $html.= "</ul></div>";
    return   $html;
}

function ptnCommunicationList(){
    if(!empty($_POST)){ 
        $patient_id = $_POST['patient_id'];
        $email       = $_POST['email'];
        $communcationdata = communicationList($patient_id,$email);
        if(!empty($communcationdata)) {
           if($communcationdata['status'] == 'ok'){
               $commList  = $communcationdata['task_msg_data'];
               //rsort($messagelist);
           }
         
        }else{
            $commList = array();
        }
        
        //echo "<pre>";
        //print_r($commList); die;
        $commHtml = commListHtml($commList);
        echo  $commHtml;
    }

    
}


function commListHtml($commList){
    $html = "<table><tbody id='commlistbody'>";
            if(!empty($commList)){ 
                foreach ($commList as $commkey => $commvalue) {         
    $html.= "<tr><td>".$commvalue['task_type']."</td>
                 <td>".$commvalue['provider']."</td>
                 <td><i class='fa fa-envelope' aria-hidden='true'></i>".$commvalue['msg_count']."</td>
                 <td><button class='btn-primary' id='".$commvalue['task_id']."' data-toggle='modal'  data-target='#myCommMsgModal' onclick='getcommicationmessage(this.id)'><i class='fa fa-angle-double-right' aria-hidden='true'></td></tr>";
            } }else { 

    $html.=  "<tr><td colspan='4' style='color: red'><center><p>No Msg Added</p></center></td></tr>";                        
    } 
                                
    $html.= "</tbody></table>";
    return   $html;
}

function sendmeassagetosender(){
    $error = 0;
    if(!empty($_POST)){
        $communicationdata = $_POST;
        $email   = $_SESSION['userdata']['email'];
        $patient_id = $communicationdata['patient_id'];
        $save = msgsend($communicationdata,$patient_id,$email);
        if(!empty($save)){
            if($save['status'] == 'ok'){
                $error = '11';
            }else{
                $error = 1;
            }
        }else{
            $error = 3;
        }
    }else{

        $error = 2;
    }

    return $error;
}




function saveinterview(){
    $error = 0;
    $response = array();
    if(!empty($_POST)){
        $interviewdata = $_POST;
        $email   = $_SESSION['userdata']['email'];
        $save = saveinterviewdetails($interviewdata,$email);
        if(!empty($save)){
            if($save['status'] == 'ok'){
                $error = '11';
                $interview_id = $save['interview_id'];

            }else{
                $error = 1;
                $interview_id = '';
            }
        }else{
            $error = 3;
            $interview_id = '';
        }
    }else{

        $error = 2;
        $interview_id = '';
    }
    
    $response['error'] = $error;
    $response['interview_id'] = $interview_id;
    
    $responsejson = json_encode($response);
    return $responsejson;
}

function saveinterviewneeds()
{
  $error = 0;
  $response = array();
  if(!empty($_POST)){
    $needsdata = $_POST;
    $email   = $_SESSION['userdata']['email'];
    $save = saveinterviewneedsdata($needsdata,$email);
    if(!empty($save)){ 
      if($save['status'] == 'ok'){
        $error = '11';
        $need_id  = $save['need_id'];
      }else{
        $error = 1;
        $need_id = '';
      }
    }else{
        $error = 3;
        $need_id = '';
    }
  }else{
        $error = 2;
        $need_id = '';
    }
    
    $response['error'] = $error;
    $response['need_id'] = $need_id;
    
    $responsejson = json_encode($response);
    return $responsejson;
}


function saveinterviewobstacles()
{
  $error = 0;
  $response = array();
  if(!empty($_POST)){
    $obstaclesdata = $_POST;
    $email   = $_SESSION['userdata']['email'];
    $save = saveinterviewobstaclesdata($obstaclesdata,$email);
    if(!empty($save)){ 
      if($save['status'] == 'ok'){
        $error = '11';
        $obstacle_id  = $save['obstacle_id'];
      }else{
        $error = 1;
        $obstacle_id = '';
      }
    }else{
        $error = 3;
        $obstacle_id = '';
    }
  }else{
        $error = 2;
        $obstacle_id = '';
    }
    
    $response['error'] = $error;
    $response['obstacle_id'] = $obstacle_id;
    
    $responsejson = json_encode($response);
    return $responsejson;
}

function saveinterviewsolution()
{
  $error = 0;
  $response = array();
  if(!empty($_POST)){
    $solutionsdata = $_POST;
    $email   = $_SESSION['userdata']['email'];
    $save = saveinterviewsolutiondata($solutionsdata,$email);
    if(!empty($save)){ 
      if($save['status'] == 'ok'){
        $error = '11';
        $solution_id  = $save['solution_id'];
      }else{
        $error = 1;
        $solution_id = '';
      }
    }else{
        $error = 3;
        $solution_id = '';
    }
  }else{
        $error = 2;
        $solution_id = '';
    }
    
    $response['error'] = $error;
    $response['solution_id'] = $solution_id;
    
    $responsejson = json_encode($response);
    return $responsejson;
}

function updatePatientReferralTask(){
    echo "<pre>";
    print_r($_POST); 
     print_r($_FILES); die;
    $error = 0;
    if(!empty($_POST)){
      //echo "<pre>";
       
     // print_r($_POST); 
      //print_r($_FILES); die; 
        $referralTaskdata = $_POST;
        $task_id  = $_POST['task_id'];
        $email   = $_SESSION['userdata']['email'];
        $update = updateReferralTask($referralTaskdata,$task_id,$email);
        if(!empty($update)){
            if($update['status'] == 'ok'){
                $error = '11';
            }else{
                $error = 1;
            }
        }else{
            $error = 3;
        }
    }else{

        $error = 2;
        echo "gofalse"; die; 
    }

    return $error;
}

function selectserviceprovider(){
    if(!empty($_POST)){ 
        $serachData = $_POST;
        if(!empty($serachData['zipcode'])){
          $serachData = array();
        }else{
          $serachData = $_POST;
        }
       
        $id = $_POST['iid'];
        $practicesdata = serviceproviderslist($serachData);
        if(!empty($practicesdata['status'] == 'ok')){
             $practices = $practicesdata['provider_list'];
        }else{
            $practices = array();
        }

        $commHtml = providerListHtml($practices,$id);
        echo  $commHtml;
    }

}





function acceptreferralbyclient()
{
  $error = 0;
  if(!empty($_POST)){
        $referrals = $_POST;
        $email   = $_SESSION['userdata']['email'];
        $accept = acceptreferral($referrals,$email);
        if(!empty($accept)){
            if($accept['status'] == 'ok'){
                $error = '11';
            }else{
                $error = 1;
            }
        }else{
            $error = 3;
        }
    }else{

        $error = 2;
    }

    return $error;
}

function rejectreferralbyclient()
{
  $error = 0;
  if(!empty($_POST)){
        $referrals = $_POST;

        $email   = $_SESSION['userdata']['email'];
        $accept = rejectionferral($referrals,$email);
        if(!empty($accept)){
            if($accept['status'] == 'ok'){
                $error = 11;
            }else{
                $error = 1;
            }
        }else{
            $error = 3;
        }
    }else{

        $error = 2;
    }

    return $error;
}





function providerListHtml($practices,$id){ 

    if(!empty($practices)){ 
    $html = "<div class='row'><div class='col-md-6 col-sm-12'><h4>Search Results</h4><div class='border row'><div class='col-sm-12'><div class='scroll'><table class='margin-bt'><thead><tr><th></th><th>Provider Name</th><th>Category</th><th>Short Descripation</th></tr>";
    if(!empty($practices)){
     foreach ($practices as $practiceskey => $practicesvalue) { 
     $name =  $practicesvalue['organizationName']["organizationName_Text"]["0"]["text"];
     if(is_array($practicesvalue['organizationName']["OrgDescription"])){
      $shortdesc= $practicesvalue['organizationName']["OrgDescription"]["0"]["text"];
     }else{
      $shortdesc= $practicesvalue['organizationName']["OrgDescription"];
    }
    $html.= "<tr><td><i class='fa fa-map-marker'<button type='button' id='".$name."' value='".$shortdesc."' onclick='showdetails(this.id,this.value)' class='custom-btn btn-success'> View</button></td><td>".$name."</td><td></td><td>".$shortdesc."</td></tr>";
    }}
    $html.= "</thead></table></div></div><div class='col-sm-12'>   <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2689.174718399692!2d-122.33608998454811!3d47.62273489485683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5490153736c1ee31%3A0xfeb8a0b88f1c8390!2s1200%2C%20400%20Fairview%20Ave%20N%20%23800%2C%20Seattle%2C%20WA%2098109%2C%20USA!5e0!3m2!1sen!2sin!4v1568816896410!5m2!1sen!2sin' width='100%' height='300px' frameborder='0' style='border:0;' allowfullscreen=''></iframe></div></div></div><div class='col-md-6 col-sm-12'><h4>Provider Descripation</h4><div class='border pt-20'><div class='img-logo'><p><img class='img-responsive' src='https://dev11.resourcestack.com/wp-content/uploads/2018/10/arcora_img.png' style='height:73px; width:150px;float: left;'>
      <span class='fa fa-print' style='float: right;'></span></p></div><div class='provider-content'>";
       $providername =  $practices["0"]['organizationName']["organizationName_Text"]["0"]["text"];
         if(is_array($practices["0"]['organizationName']["OrgDescription"])){
          $providershortdesc= $practices["0"]['organizationName']["OrgDescription"]["0"]["text"];
         }else{
          $providershortdesc= $practices["0"]['organizationName']["OrgDescription"];
         }
    $html.= "<h4>Provider Name</h4><p id='providernamefill'>".$providername."</p><h4>Short Descripation</h4><p id='providershortdescfill'>'".$providershortdesc."'</p><h4>Mission Statement </h4><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's </p></div><ul class='nav'><li> <a href='tel:800.443.4143'><i class='fa fa-phone'></i> 800.443.4143</a></li>
      <li><a href='mailto:contact@arcora.org'><i class='fa fa-envelope'></i> contact@arcora.org</a></li></ul><div class='text-center'><button type='button' id='".$id."'  class='custom-btn btn-success' onclick='assignprovider(this.id)'> Add </button></div></div></div></div>";    
    }else{ 
      $html =  "<div class='row'><div class='col-md-12'><span><center><strong><p style='color: red'>No Record found for this search</p></strong></center></span></div></div>";
    }
    //html changes

    return   $html;
}

function updateInterviewData(){
    $error = 0;
    if(!empty($_POST)){
        $interviewdata = $_POST;
        $interview_id  = $_POST['interview_id'];
        $email   = $_SESSION['userdata']['email'];
        $update = updateInterviewDetails($interviewdata,$interview_id,$email);
        if(!empty($update)){
            if($update['status'] == 'ok'){
                $error = '11';
            }else{
                $error = 1;
            }
        }else{
            $error = 3;
        }
    }else{

        $error = 2;
    }

    return $error;
}

function updateinterviewneeds()
{
  $error = 0;
    if(!empty($_POST)){

        $needdata = $_POST;
        $need_id  = $_POST['need_id'];
        $email   = $_SESSION['userdata']['email'];
        $update = updateInterviewNeedDetails($needdata,$need_id,$email);
        if(!empty($update)){
            if($update['status'] == 'ok'){
                $error = '11';
            }else{
                $error = 1;
            }
        }else{
            $error = 3;
        }
    }else{

        $error = 2;
    }

    return $error;
}

function updateInterviewObstacles()
{
  $error = 0;
    if(!empty($_POST)){

        $obstaclesdata = $_POST;
        //echo "<pre>";
        //print_r($obstaclesdata); die; 
        $obstacle_id  = $_POST['obstacle_id'];
        $email   = $_SESSION['userdata']['email'];
        $update = updateNeedObstaclesDetails($obstaclesdata,$obstacle_id,$email);
        if(!empty($update)){
            if($update['status'] == 'ok'){
                $error = '11';
            }else{
                $error = 1;
            }
        }else{
            $error = 3;
        }
    }else{

        $error = 2;
    }

    return $error;
}

function updateInterviewSolutions()
{
  $error = 0;
    if(!empty($_POST)){

        $solutiondata = $_POST;
        //echo "<pre>";
        //print_r($solutiondata); die; 
        $solution_id  = $_POST['solution_id'];
        $email   = $_SESSION['userdata']['email'];
        $update = updateObstacleSolutionDetails($solutiondata,$solution_id,$email);
        if(!empty($update)){
            if($update['status'] == 'ok'){
                $error = '11';
            }else{
                $error = 1;
            }
        }else{
            $error = 3;
        }
    }else{

        $error = 2;
    }

    return $error;
}

function removeInterviewData(){
    $error = 0;
    if(!empty($_POST)){
        $id  = $_POST['id'];
        $type  = $_POST['type'];
        $email   = $_SESSION['userdata']['email'];
        if($type == 'need'){
          $delete = deleteInterviewNeed($id,$email);
        }else if($type == 'solution'){
          $delete = deleteInterviewSolution($id,$email);
        }else if($type == 'obstacle'){
          $delete = deleteInterviewObstacle($id,$email);
        }
        
        if(!empty($delete)){
            if($delete['status'] == 'ok'){
                $error = '11';
            }else{
                $error = 1;
            }
        }else{
            $error = 3;
        }
    }else{
        $error = 2;
    }

    return $error;
}






?>

