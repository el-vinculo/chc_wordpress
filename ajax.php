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
        $id = $_POST['iid'];
        $practicesdata = serviceproviderslist($serachData);
        if(!empty($practicesdata['status'] == 'ok')){
             $practices = $practicesdata['provider_list'];
             echo "<pre>";
             print_r($practices); die;
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




function providerListHtml($practices,$id){ 

    $html = "<div id='listview' ><table class='table table-striped'><thead><tr><th>PRACTICE NAME</th><th>DISTANCE</th><th>HOURS</th><th>EMAIL</th><th>WEBSITE</th><th>SELECT</th></tr></thead><tbody id='commlistbody'>";
            if(!empty($practices)){ 
                foreach ($practices as $key => $value) { 
                    $distance = '';
                    if(!empty($value['distance'])){
                        $distance = $value['distance'];
                    }else{
                        $distance = '--';
                    } 

                    $hours = '';
                    if(strlen($value['Office_Hours']) > 50){
                        $string2 = substr($value['Office_Hours'], 0, 50);
                        $hours   = $string2.'...';
                    }else{
                        $hours = $value['Office_Hours'];
                    }

    $html.= "<tr><td>".$value['Name']."</td>
                 <td>".$distance."</td>
                 <td>".$hours."</td>
                 <td>".$value['Office_Email']."</td>
                 <td><i class='fa fa-globe' aria-hidden='true'></i></td>
                 <td><button class='btn-primary' id='".$value['Name']."' value='".$id."' onclick='assignprovider(this.id,this.value)' >Add</td></tr>";
            } }else { 

    $html.=  "<tr><td colspan='7' style='color: red'><center><p>No record found</p></center></td></tr>";                        
    } 
                                
    $html.= "</tbody></table></div><div class='row' id='mapview' style='display:none' ><div class='col-md-12'><div class='col-md-8'><div id='map' style='width: 705px; height: 100%;''></div></div><div class='col-md-4'><table class='table table-striped'><thead><tr><th>PRACTICE NAME</th><th>DISTANCE</th><th>SELECT</th></tr></thead><tbody>";
    if(!empty($practices)){ 
        $locarray = array();
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
    $html.= "<tr><td>".$value['Name']."</td>
                 <td>".$distance."</td>
                 <td><button class='btn-primary' id='".$value['Name']."' value='".$id."' onclick='assignprovider(this.id,this.value)' >Add</td></tr>";
            } }else { 
    $html.=  "<tr><td colspan='7' style='color: red'><center><p>No record found</p></center></td></tr>";                        
    }  
    $html.= "</tbody></table></div>";  
    ?>
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
        </script>

    <?php return   $html;
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

