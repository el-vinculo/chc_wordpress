<?php
session_start();
error_reporting(1);
//$filename =  __DIR__.'ajax.php';
require_once('wp-config.php');
require_once('api.php');
//
/*function stripslashes_array($array)
{ 
	return is_array($array) ? array_map('stripslashes_array', $array) : stripslashes($array);
}*/

$function_name=$_POST['funtion'];

$res=call_user_func($function_name);
echo $res;


function sendtaskapp(){
    $error = 0;
    if(!empty($_POST)){
        $communicationdata = $_POST;
       /* echo "<pre>";
        print_r($communicationdata);die;*/

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

function saveRefSolTask(){
    $error = 0;
    if(!empty($_POST)){
        $documents = '';
        $postData = $_POST;
        $postData['task_type'] =  '';
        $postData['task_status'] =  '';
        $postData['task_owner'] =  '';
        $postData['task_deadline'] =  '';
        $patient_id = $postData['patient_id'];
        $patient_email   = $_SESSION['userdata']['email'];
        $save = saveReferralTask($postData,$patient_id,$patient_email,$documents);
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



function referralAssessments() {
		$referral_id 	= $_POST['referral_id'];
		$email		= $_POST['email'];
    $assessments = interviewDetailsTest($referral_id,$email);
    $detailsData  = $assessments['details_array'];
    $assessmentHtml = assessmentsHtmlTable($detailsData, $referral_id);
    echo  $assessmentHtml;
}

function assessmentsHtmlTable($assessmentList, $referral_id)
{
	$html = "<table><tbody id='taskbody'><input type='hidden' id='assementrefiid' value='".$referral_id."'>";
        if(!empty($assessmentList)){
            foreach ($assessmentList as $assessmentkey => $assessmentvalue) {
                $taskiid =  $taskvalue['task_id'];
           $html.= "<tr><td id='refneedtitle-".$assessmentvalue['need_id']."'>".$assessmentvalue['need_title']."</td>
                 <td id='reftaskprovider-".$assessmentvalue['need_id']."'>".$assessmentvalue['need_description']."</td>
                 <td id='reftaskowner-".$assessmentvalue['need_id']."'>".$assessmentvalue['need_note']."</td>
                 <td id='reftaskdesc-".$assessmentvalue['need_id']."'>".$assessmentvalue['need_urgency']."</td>
                 <td id='reftaskdeadline-".$assessmentvalue['need_id']."'>".date('d-m-Y',strtotime($assessmentvalue['need_status']))."</td>

            </tr>";
	    } }else {

    $html.=  "<tr><td colspan='7' style='color: red'><center><p>No Assesment Found</p></center></td></tr>";
    }
	return   $html;
}

function taskHtmlTable($taskList,$referral_id)
{

	$html = "<table><tbody id='taskbody'><input type='hidden' id='taskrefiid' value='".$referral_id."'>";
            if(!empty($taskList)){
                foreach ($taskList as $taskkey => $taskvalue) {
                $taskiid = 	$taskvalue['task_id'];
				
				 if(date('m-d-Y',strtotime($taskvalue['task_deadline'])) == '01-01-1970'){
					  $taskdeadline =  '--';
				 }
				 else{
					 $taskdeadline =  date('m-d-Y',strtotime($taskvalue['task_deadline']));
				 }
    $html.= "<tr><td id='reftasktype-".$taskvalue['task_id']."'>".$taskvalue['task_type']."</td>
                 <td id='reftaskprovider-".$taskvalue['task_id']."'>".$taskvalue['provider']."</td>
                 <td id='reftaskowner-".$taskvalue['task_id']."'>".$taskvalue['task_owner']."</td>
                 <td id='reftaskdesc-".$taskvalue['task_id']."'>".$taskvalue['task_description']."</td>
                 <td id='reftaskdeadline-".$taskvalue['task_id']."'>".$taskdeadline."</td>
                 <td id='reftaskstatus-".$taskvalue['task_id']."'>".$taskvalue['task_status']."</td>
                 <td><button class='btn-primary button-all' id='".$taskvalue['task_id']."' data-toggle='modal'  data-target='#myTaskModal' onclick='getPatientRefTask(this.id)' ><i class='fa fa-pencil' aria-hidden='true' ></i></button></td>
                 <td>";

                 if($taskvalue['transferable']=== true){

                $html.= "<button class='btn-primary button-all' id='".$taskvalue['task_id']."' data-toggle='modal'  data-target='#myTransferModal' onclick='getTransferTaskdetails(this.id)''  ><img src='".site_url()."/wp-content/themes/healthcare/images/transfer-icon.png'></button>";
            } else{
            	$html.= "<button class='btn-primary button-all disable-grey' disabled id='".$taskvalue['task_id']."' data-toggle='modal'  data-target='#myTransferModal' onclick='getTransferTaskdetails(this.id)''  > <img src='".site_url()."/wp-content/themes/healthcare/images/transfer-icon.png'></button>";
            }   
              if($taskvalue['transferable']=== true){
               $html.="<button class='btn-primary button-all' data-toggle='modal' data-target='#inviteModal' onclick='getTaskId(\"$taskvalue[task_id]\")'><img src='".site_url()."/wp-content/themes/healthcare/images/invite-icon.png'></button>";
			  }else{
				   $html.="<button class='btn-primary button-all disable-grey' disabled ><img src='".site_url()."/wp-content/themes/healthcare/images/invite-icon.png'></button>";	
			  }
                $html.="<button class='btn-primary button-all' id='".$taskvalue['task_id']."' data-toggle='modal'  data-target='#myLedgerModal' onclick='getledgerdetails(this.id)''  ><img src='".site_url()."/wp-content/themes/healthcare/images/history-icon.png'></button>";

			 if($taskvalue['transferable']=== false && $taskvalue['transfer_status'] == "Pending"){  
			    $html.="<button class='btn-primary btn-request'  onclick='revertTask(\"$taskvalue[task_id]\")'><img src='".get_template_directory_uri()."/images/revert.png'></button>";
			   }
			   else{
				   $html.="<button class='btn-primary button-all disable-grey' disabled ><img src='".get_template_directory_uri()."/images/revert.png'></button>";			   
			   }
			   $html .="<textarea style='display:none;' id='task_additional-".$taskvalue['task_id']."'>". json_encode($taskvalue['task_additional_fields'])."</textarea>";
			   $html .="<input type='hidden' value='".$taskvalue['task_note']."' id='tasknote-".$taskvalue['task_id']."'>";
			   $html.=  "</td></tr>";
            } }else {

    $html.=  "<tr><td colspan='7' style='color: red'><center><p>No Task Added</p></center></td></tr>";
    }

    $html.= "</tbody></table>";
    return   $html;
}

function updatePatientReferrals(){
    $error = 0;
    if(!empty($_POST)){
		
		//$referraldata = stripslashes_array($_POST);
        $referraldata = $_POST;

		//echo '<pre>'; print_r($referraldata);die;
        $referral_id  = $_POST['ref_id'];
		$ref_additional_fields  = $_POST['ref_additional_fields'];
        $email   = $_SESSION['userdata']['email'];
		
		$additional_fields    = !empty($_POST['additional'])?$_POST['additional']:'';
        $additional_keys    = !empty($_POST['additionalkeys'])?$_POST['additionalkeys']:'';

       if((!empty($additional_fields) & is_array($additional_fields)) && (!empty($additional_keys) & is_array($additional_keys))){
          $additionalfields = array_filter($additional_fields);
          $additionalkeys = array_filter($additional_keys);
          	if(is_array($additionalkeys) && is_array($additionalfields)){
          		$additional_fields_array = array_combine($additionalkeys, $additionalfields);
          	}
         
       }else{
       	$additional_fields_array = '';
       }
	   
	   $referraldata['ref_additional_fields'] = $additional_fields_array;
	   
	   unset($referraldata['additionalkeys']);
	    unset($referraldata['additional']);
	  // echo '<pre>'; print_r($referraldata);die;
	   
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
                 <td><button class='btn-primary button-all' data-toggle='modal'  data-target='#myModal' onclick='showReferral('".$refvalue[referral_id]."')'><i class='fa fa-pencil' aria-hidden='true'></i></button></td>

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



function ledgertaskdeatillist(){
    if(!empty($_POST)){
        //$patient_id = $_POST['patient_id'];
        $task_id = $_POST['task_id'];
        $email       = $_POST['email'];
        $ledgers = gettaskledgerdetails($email,$task_id);

        //print_r($ledgers);
        if(!empty($ledgers)) {
           if($ledgers['status'] == 'ok'){
           	  $ledgerslist = $ledgers['ledger_details'];
            // echo "<pre>";
            // print_r($ledgerslist); die;
               //$messagelist  = array_reverse($messages['comm_data']);
               //rsort($messagelist);
           }

        }else{
            $ledgerslist = array();
        }

        $msgHtml = ledgerHtml($ledgerslist);
		
        return $msgHtml;
    }
}


function ledgerHtml($ledgerslist){

 //echo "<pre>";
   //print_r($ledgerslist);

   if(!empty($ledgerslist)){

     $html = "<table class='table table-striped table-bordered' id='externaltabledata'><thead>
            <tr><th colspan='4'>Internal</th></tr><tr><th>Date of Change</th><th>Field Name</th>
            <th>New Value</th><th>Old Value</th></tr></thead><tbody>";

    if(!empty($ledgerslist['internal_record_array'])){
        foreach ($ledgerslist['internal_record_array'] as $internalledkey => $internalledvalue) {
    if(!empty($internalledvalue['changes']) && (!empty($internalledvalue['created_at']))){

       foreach($internalledvalue['changes'] as $key=>$value) {

            if($internalledvalue['changes'][$key]['task_type']!='') {

           $html.= "<tr><td>".$internalledvalue['created_at']."</td><td>Task Type</td><td>".$internalledvalue['changes'][$key+1]['task_type']."</td><td>".$internalledvalue['changes'][$key]['task_type']."</td></tr>";
       }


           if($internalledvalue['changes'][$key]['task_status']!='') {

           $html.=  "<tr><td>".$internalledvalue['created_at']."</td><td>Task Status</td><td>".$internalledvalue['changes'][$key+1]['task_status']."</td><td>".$internalledvalue['changes'][$key]['task_status']."</td></tr>";
         }

            if($internalledvalue['changes'][$key]['task_owner']!='') {

             $html.="<tr><td>".$internalledvalue['created_at']."</td><td>Task Owner</td><td>".$internalledvalue['changes'][$key+1]['task_owner']."</td><td>".$internalledvalue['changes'][$key]['task_owner']."</td></tr>";

          }

          if($internalledvalue['changes'][$key]['provider']!='') {

            $html.="<tr><td>".$internalledvalue['created_at']."</td><td>Provider</td>".$internalledvalue['changes'][$key+1]['provider']."<td></td><td>".$internalledvalue['changes'][$key]['provider']."</td></tr>";

          }


            if($internalledvalue['changes'][$key]['task_deadline']!='') {
            $html.="<tr><td>".$internalledvalue['created_at']."</td><td>Task Deadline</td><td>".$internalledvalue['changes'][$key+1]['task_deadline']."</td><td>".$internalledvalue['changes'][$key]['task_deadline']."</td></tr>";
          }

          if($internalledvalue['changes'][$key]['task_description']!='') {

            $html.="<tr><td>".$internalledvalue['created_at']."</td><td>Task Description</td><td>".$internalledvalue['changes'][$key+1]['task_description']."</td><td>".$internalledvalue['changes'][$key]['task_description']."</td></tr>";

          }

          if($internalledvalue['changes'][$key]['patient_document']!='') {

            $html.="<tr><td>".$internalledvalue['created_at']."</td><td>Patient Document</td><td>".$internalledvalue['changes']['1']['patient_document']."</td><td>".$internalledvalue['changes'][$key+1]['patient_document']."</td></tr>";

          }

           

           }
		   
    }
    } $html.="</tbody></table>";} 
	
	else{
    $html.=  "<table><tr><td colspan='4'>no record found </td></tr></table>";
    }

    $html.= "<table class='table table-striped table-bordered' id='11	'><thead>
            <tr><th colspan='4'>External</th></tr><tr><th>Date of Change</th><th>Field Name</th>
            <th>New Value</th><th>Old Value</th></tr><tbody>";

    if(!empty($ledgerslist['external_record_array'])){
        foreach ($ledgerslist['external_record_array'] as $externalledkey => $externalledvalue) {  if(!empty($externalledvalue['changes'])){

         foreach($externalledvalue['changes'] as $key=>$value){

            if($externalledvalue['changes'][$key]['task_type']!='') {

            $html.="<tr><td>".$externalledvalue['created_at']."</td><td>Task Type</td><td>".$externalledvalue['changes'][$key+1]['task_type']."</td><td>".$externalledvalue['changes'][$key]['task_type']."</td></tr>";

          }

           if($externalledvalue['changes'][$key]['task_status']!='') {

            $html.="<tr><td>".$externalledvalue['created_at']."</td><td>Task Status</td><td>".$externalledvalue['changes'][$key+1]['task_status']."</td><td>".$externalledvalue['changes'][$key]['task_status']."</td></tr>";
          }

           if($externalledvalue['changes'][$key]['task_owner']!='') {

            $html.="<tr><td>".$externalledvalue['created_at']."</td><td>Task Owner</td><td>".$externalledvalue['changes'][$key+1]['task_owner']."</td><td>".$externalledvalue['changes'][$key]['task_owner']."</td></tr>";

          }

          if($externalledvalue['changes'][$key]['provider']!='') {
            $html.="<tr><td>".$externalledvalue['created_at']."</td><td>Provider</td>".$externalledvalue['changes'][$key+1]['provider']."<td></td><td>".$externalledvalue['changes'][$key]['provider']."</td></tr>";
          }

          if($externalledvalue['changes'][$key]['task_deadline']!='') {
            $html.="<tr><td>".$externalledvalue['created_at']."</td><td>Task Deadline</td><td>".$externalledvalue['changes'][$key+1]['task_deadline']."</td><td>".$externalledvalue['changes'][$key]['task_deadline']."</td></tr>";
          }

         if($externalledvalue['changes'][$key]['task_description']!='') {
            $html.="<tr><td>".$externalledvalue['created_at']."</td><td>Task Description</td><td>".$externalledvalue['changes'][$key+1]['task_description']."</td><td>".$externalledvalue['changes'][$key]['task_description']."</td></tr>";
          }

          if($externalledvalue['changes'][$key]['patient_document']!='') {

            $html.="<tr><td>".$externalledvalue['created_at']."</td><td>Patient Document</td><td>".$externalledvalue['changes'][$key+1]['patient_document']."</td><td>".$externalledvalue['changes'][$key]['patient_document']."</td></tr>";

          }
          $html.="</tbody></thead></table>";

        }
   } } } else{
    $html.=  "<tr><td colspan='4'>no record found </td></tr>";
    }

    }else{
    	$html.=  "
    	<thead><tr><td colspan='4'>

       <p style='font-size: 16px;'>No detail found </p></td></tr></thead></table>
   ";
    }


    return   $html;
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
                 <td><button class='btn-primary button-all' id='".$commvalue['task_id']."' data-toggle='modal'  data-target='#myCommMsgModal' onclick='getcommicationmessage(this.id)'><i class='fa fa-angle-double-right' aria-hidden='true'></td></tr>";
            } }else {

    $html.=  "<tr><td colspan='4' style='color: red'><center><p>No Msg Added</p></center></td></tr>";
    }

    $html.= "</tbody></table>";
    return   $html;
}

function sendmeassagetosender(){
    $error = 0;
    if(!empty($_POST)){
        //$communicationdata = $_POST;
		$communicationdata = stripslashes_array($_POST);
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
        //echo "<pre>";

        $email   = $_SESSION['userdata']['email'];
        $save = saveinterviewdetails($interviewdata,$email);
        if(!empty($save)){
            if($save['status'] == 'ok'){
                $error = '11';
                $interview_id = $save['interview_id'];
                $referral_id = $save['referral_id'];

            }else{
                $error = 1;
                $interview_id = '';
                $referral_id = '';
            }
        }else{
            $error = 3;
            $interview_id = '';
            $referral_id = '';
        }
    }else{

        $error = 2;
        $interview_id = '';
        $referral_id = '';
    }

    $response['error'] = $error;
    $response['interview_id'] = $interview_id;
    $response['referral_id'] = $referral_id;

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
    	//echo "<pre>";
    	//print_r($save); die;
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
/*    echo "<pre>";
    print_r($_POST);
     print_r($_FILES); die;*/
    $error = 0;
    if(!empty($_POST)){
     $referralTaskdata = stripslashes_array($_POST);	
      //  $referralTaskdata = $_POST;
        $task_id  = $_POST['task_id'];
        $email   = $_SESSION['userdata']['email'];
		
		//echo "<pre>"; print_r($referralTaskdata);die;
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

function inviteOrg(){
    $error = 0;
    if(!empty($_POST)){
		//echo '<pre>'; print_r($_POST); die;
        $task_id  = $_POST['task_id'];
        $email   = $_POST['email'];
        $name   = $_POST['name'];
        $application_url   = $_POST['application_url'];
        $homepage_url   = $_POST['homepage_url'];
        $invite = inviteOrganization($name,$email,$application_url,$task_id,$homepage_url);
        if(!empty($invite)){
            if($invite['status'] == 'ok'){
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


function inviteNewOrg(){
    $error = 0;
    if(!empty($_POST)){
		//echo '<pre>'; print_r($_POST); die;
        $email  = $_POST['email'];
        $org_url   = $_POST['org_url'];
        $org_name   = $_POST['org_name'];
        $invite = invite_new_provider($email,$org_url,$org_name);
        if(!empty($invite)){
            if($invite['status'] == 'ok'){
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
       /* if(!empty($serachData['zipcode'])){
          $serachData = array();
        }else{
          $serachData = $_POST;
        }*/

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
				$result = array('message'=>$accept['message'],'error'=>$error);
            }else{
                $error = 1;
				$result = array('message'=>$accept['message'],'error'=>$error);
            }
        }else{
            $error = 3;
			$result = array('message'=>$accept['message'],'error'=>$error);
        }
    }else{
 
        $error = 2;
		$result = array('message'=>$accept['message'],'error'=>$error);
    }

    echo  json_encode($result);exit;
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
//echo '<pre>';print_r($practices);die;
    if(!empty($practices)){
    $html = "<div class='row'><div class='border col-md-6 col-sm-12'><h4>Search Results <b>{".count($practices)."}</b></h4><div class='border row'><div class='col-sm-12'><div style='height: 370px; overflow-y: scroll;'><table class='margin-bt'><thead><tr><th></th><th></th></tr>";
    if(!empty($practices)){
     foreach ($practices as $practiceskey => $practicesvalue) {
     $name =  $practicesvalue['OrganizationName']["OrganizationName"]["0"]["Text"];
     $shortdesc= $practicesvalue["Programs"]["ProgramDescriptionDisplay"];
    if($shortdesc==''){
               $shortdesc= $practicesvalue['Programs']["ProgramDescription"]["0"]["Text"];
         }
     $programName= $practicesvalue["Programs"]["ProgramName"];

         $programName= $practicesvalue["Programs"]["ProgramName"];
         $services="";
         $popolations="";
         foreach($practicesvalue['Programs'] as $key=>$val){
          $arr=explode("_",$key);
          if($arr[0]=="S" && $val=="TRUE"){
            $services .= $arr[1]." ,";
          }
          if($arr[0]=="P" && $val=="TRUE"){
            $popolations.=$arr[1]." ,";
          }

         }

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
             $addressRaw='<li><i class="fa fa-map-marker"></i>'.$mainOffice.'</li><br>';

            foreach($val['POCs'] as $pockey=>$pocval){

              $officePhone= $pocval['poc']['OfficePhone'];
              $OfficeEmail= $pocval['poc']['Email'];
              $contactName= $pocval['poc']['Name'];

              $addressRaw.='<li id="contactName"> <i class="fa fa-user"></i>'.$contactName.'</li>
              <li id="officePhone"> <a href="tel:'.$officePhone.'"><i class="fa fa-phone"></i>'.$officePhone.'</a></li>
              <li id="OfficeEmail"><a href="mailto:'.$OfficeEmail.'"><i class="fa fa-envelope"></i>'.$OfficeEmail.'</a></li>';

              $addressRaw.="<br>";

            }

          } else{
            $addressRaw="";
          }

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

    $html.= "<tr>
    <td><b>Organization Name: </b> ".$name." <br><b>Program Name: </b>".$programName."<br><br></td>
<td><button type='button' data-name='".$name."' data-shortdesc='".htmlentities($shortdesc)."' data-programName='".$programName."' data-populationDesc='".$populationDesc."' data-servicesTags='".$servicesTags."' data-serviceAreaDesc='".$serviceAreaDesc."' data-population='".rtrim($popolations, ',')."' data-services='".rtrim($services, ',')."' data-mainOffice='".htmlentities($addressRaw)."' data-quickLink='".$quickLink."' data-contactPage='".$contactPage."' data-homePageUrl='".$homePageUrl."' data-programPageUrl='".$programPageUrl."' style=' display: block; padding: 10px; text-align: center; color: #fff; line-height: 21px; margin-right: 10px;' onclick='showdetails(this)' class='custom-btn btn-primary button-all'> Show Detail</button></td>
    </tr>";
    }}
    $html.= "</thead></table></div></div><div class='col-sm-12'> </div></div></div><div class='border col-md-6 col-sm-12 pt-set'>
<div class='row'><div class='col-md-9'>

<h4>Organization Name</h4><p id='providernamefill'>".$name."</p></div>

    <div class='text-right col-md-3'>
	<button type='button' id='".$id."'  class='custom-btn btn-primary button-all'  onclick='assignprovider(this.id)'> Add Task</button>
    </div>

    <div class='provider-content'>";
      
       $quickLink= $practices[0]["Programs"]["QuickConnectWebPage"];
        if (filter_var($quickLink, FILTER_VALIDATE_URL)){
          $qhref= "href='".$quickLink."'";
		  $qhref_style= '';
         } else{
          $qhref='';
		   $qhref_style= 'style="opacity:0.2;"';
         }
       $contactPage= $practices[0]["Programs"]["ContactWebPage"];
       if (filter_var($contactPage, FILTER_VALIDATE_URL)){
          $chref= "href='".$contactPage."'";
		  $chref_style= '';
         } else{
          $chref='';
		   $chref_style= 'style="opacity:0.2;"';
         }
       $homePageUrl= $practices[0]['OrganizationName']['HomePageURL'];
       if (filter_var($homePageUrl, FILTER_VALIDATE_URL)){
          $hhref= "href='".$homePageUrl."'";
		  $hhref_style= '';
         } else{
          $hhref='';
		  $hhref_style= 'style="opacity:0.2;"';
         }
       $programPageUrl= $practices[0]['Programs']['ProgramWebPage'];
        if (filter_var($programPageUrl, FILTER_VALIDATE_URL)){
          $phref= "href='".$programPageUrl."'";
		  $phref_style= '';
         } else{
          $phref='';
		   $phref_style= 'style="opacity:0.2;"';
         }


       $providername =  $practices["0"]['OrganizationName']["OrganizationName"]["0"]["Text"];
       $programName= $practices[0]["Programs"]["ProgramName"];
       $providershortdesc= $practices[0]["Programs"]["ProgramDescriptionDisplay"];
       if($providershortdesc==''){
       	       $providershortdesc= $practices[0]["Programs"]["ProgramDescription"][0]["Text"];
       }
       $$populationDesc= $practices[0]['Programs']["PopulationDescriptionDisplay"];
         if($populationDesc==''){
          $populationDesc= $practices[0]['Programs']["PopulationDescription"][0]["Text"];
         }
       $servicesTags= $practices[0]["Programs"]["ServiceTags"];
       $serviceAreaDesc=$practices[0]["Programs"]["ServiceAreaDescriptionDisplay"];
        if($serviceAreaDesc==''){
          $serviceAreaDesc=$practices[0]["Programs"]["ServiceAreaDescription"][0]["Text"];
        }
       $services="";
       $popolations="";
         foreach($practices["0"]['Programs'] as $key=>$val){
          $arr=explode("_",$key);
          if($arr[0]=="S" && $val=="TRUE"){
            $services .= $arr[1]." ,";
          }
          if($arr[0]=="P" && $val=="TRUE"){
            $popolations.=$arr[1]." ,";
          }

         }

    $html.= "<div class='tab' role='tabpanel'>
    <ul class='nav nav-tabs menu-tabs' role='tablist'>
    <li role='presentation' ><a id='quickLink' ".$qhref." target='_blank'".$qhref_style." class='button-all'>Quick Links</a></li>
                    <li role='presentation'><a ".$phref." id='programPageUrl' ".$phref_style." aria-controls='profile' target='_blank' class='button-all'>Program Page</a></li>
                    <li role='presentation'><a ".$hhref." id='homePageUrl' ".$hhref_style." aria-controls='messages' target='_blank' class='button-all'>Home Page</a></li>
                    <li role='presentation' ><a ".$chref." id='contactPage' ".$chref_style." aria-controls='messages' target='_blank' class='button-all'>Contact Page</a></li>
                    <li role='presentation' ><a    style='opacity: 0.2; ' aria-controls='messages' class='button-all'>Other Page</a></li>
    </ul>
     <div class='tab-content tabs'>
     <div role='tabpanel' class='tab-pane fade in active' id='Section1'>
                         <div class='provider-content'>

                          <h4>Program Name</h4>
      <p id='programName'>".$programName."</p>
      <h4>Program Description</h4>
      <p id='providershortdescfill'>".$providershortdesc."</p>
      <h4>Populations </h4>
      <p id='population'>".rtrim($popolations, ',')."</p>
      <h4>Population Description</h4>
      <p id='populationDesc'>".$populationDesc."</p>
         <h4>Services </h4>
      <p id='services'>".rtrim($services, ',')."</p>
       <h4>Service Area Description</h4>
       <p id='serviceAreaDesc'>".$serviceAreaDesc."</p>
        <h4>Tags </h4>
      <p id='servicesTags'>".$servicesTags."</p>

       <h3 style='margin-bottom: 0px;'>Address</h3>

    <ul class='nav nav-set' id='mainOffice'>";

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


     $html.="<li> <i class='fa fa-map-marker'></i>".$mainOffice."</li>";

     foreach($val['POCs'] as $pockey=>$pocval){
              $officePhone= $pocval['poc']['OfficePhone'];
              $OfficeEmail= $pocval['poc']['Email'];
              $contactName= $pocval['poc']['Name'];
       $html.="<li id='contactName'> <i class='fa fa-user'></i>".$contactName."</li>
      <li id='officePhone'> <a href='tel:".$officePhone."'><i class='fa fa-phone'></i>".$officePhone."</a></li>
      <li id='OfficeEmail'><a href='mailto:".$OfficeEmail."'><i class='fa fa-envelope'></i>".$OfficeEmail."</a></li>";
      }
            }

          }
         }

    $html.="</ul>
          </div>

      </div>

     </div>

    </div>
</div></div></div>";
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

function revertTask(){
	
	$error = 0;
    if(!empty($_POST)){

        $taskdata = $_POST;
        //echo "<pre>";
        //print_r($taskdata); die;
        $task_id  = $_POST['task_id'];
        $email   = $_SESSION['userdata']['email'];
        $update = updateTasktoRevert($task_id,$email);
		//print_r($update); die;
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






?>
