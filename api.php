<?php

function adminLogin($email,$authToken)
{
	   $post = ['email' => $email];
	   $headers['Authorization'] = 'user-token: '.$authToken;  
	   $url = "https://dev7.resourcestack.com"; 
	   $curl_handle=curl_init();
	   curl_setopt($curl_handle,CURLOPT_URL,$url);
	   curl_setopt($curl_handle, CURLOPT_POST ,true);
	   curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $post);
	   curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	   curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
	   $buffer = curl_exec($curl_handle);
	   curl_close($curl_handle);
	   if (empty($buffer)){
	      print "Nothing returned from url.<p>";
	   }
	   else{
	  	  if(!empty($buffer)){
	  	  	$result = json_decode(json_encode(json_decode($buffer)), true);
	  	  	return $result;
	  	  }
	   }
}
function aboutUs($email,$authToken)
{
	   $post = ['email' => $email];
	   $headers['Authorization'] = 'user-token: '.$authToken;  
	   $url = API_URL.'get_about_us'; 
	   $curl_handle=curl_init();
	   curl_setopt($curl_handle,CURLOPT_URL,$url);
	   curl_setopt($curl_handle, CURLOPT_POST ,true);
	   curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $post);
	   curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	   curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
	   $buffer = curl_exec($curl_handle);
	   curl_close($curl_handle);
	   if (empty($buffer)){
	      print "Nothing returned from url.<p>";
	   }
	   else{
	  	  if(!empty($buffer)){
	  	  	$result = json_decode(json_encode(json_decode($buffer)), true);
	  	  	return $result;
	  	  }
	   }
}

function logo($email, $authToken)
{
	   $post = ['email' => $email];
	   $headers['Authorization'] = 'user-token: '.$authToken;  
	   $url = API_URL.'get_logo'; 
	   $curl_handle=curl_init();
	   curl_setopt($curl_handle,CURLOPT_URL,$url);
	   curl_setopt($curl_handle, CURLOPT_POST ,true);
	   curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $post);
	   curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	   curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
	   $buffer = curl_exec($curl_handle);
	   curl_close($curl_handle);
	   if (empty($buffer)){
	      print "Nothing returned from url.<p>";
	   }
	   else{
	  	  if(!empty($buffer)){
	  	  	$result = json_decode(json_encode(json_decode($buffer)), true);
	  	  	return $result;
	  	  }
	   }
}

function userprofiledetails($email)
{
	   $post = ['email' => $email];
	   $userauth = $_SESSION['userdata']['authentication_token'];
	   $headers['Content-length'] = '0';
       $headers['Content-type'] = 'application/json';
	   $headers['Authorization'] = 'user-token: '.$userauth;   
	   $url = API_URL.'user_profile'; 
	   $curl_handle=curl_init();
	   curl_setopt($curl_handle,CURLOPT_URL,$url);
	   curl_setopt($curl_handle, CURLOPT_POST ,true);
	   curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $post);
	   curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	   curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
	   $buffer = curl_exec($curl_handle);
	   curl_close($curl_handle);
	   if (empty($buffer)){
	      print "Nothing returned from url.<p>";
	   }
	   else{
	  	  if(!empty($buffer)){
	  	  	$result = json_decode(json_encode(json_decode($buffer)), true);
	  	  	return $result;
	  	  }
	   }
}

function terms($email)
{
	   $post = ['email' => $email];
	   $headers['Authorization'] = 'user-token: Do98w4b5bHTmpARtK8_V';  
	   $url = API_URL.'get_terms'; 
	   $curl_handle=curl_init();
	   curl_setopt($curl_handle,CURLOPT_URL,$url);
	   curl_setopt($curl_handle, CURLOPT_POST ,true);
	   curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $post);
	   curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	   curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
	   $buffer = curl_exec($curl_handle);
	   curl_close($curl_handle);
	   if (empty($buffer)){
	      print "Nothing returned from url.<p>";
	   }
	   else{
	  	  if(!empty($buffer)){
	  	  	$result = json_decode(json_encode(json_decode($buffer)), true);
	  	  	return $result;
	  	  }
	   }
}


function faqs($email)
{
	   $post = ['email' => $email];
	   $headers['Authorization'] = 'user-token: Do98w4b5bHTmpARtK8_V';  
	   $url = API_URL.'get_faq'; 
	   $curl_handle=curl_init();
	   curl_setopt($curl_handle,CURLOPT_URL,$url);
	   curl_setopt($curl_handle, CURLOPT_POST ,true);
	   curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $post);
	   curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	   curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
	   $buffer = curl_exec($curl_handle);
	   curl_close($curl_handle);
	   if (empty($buffer)){
	      print "Nothing returned from url.<p>";
	   }
	   else{
	  	  if(!empty($buffer)){
	  	  	$result = json_decode(json_encode(json_decode($buffer)), true);
	  	  	return $result;
	  	  }
	   }
}

function emailverification($email)
{
	   $post = ['email' => $email];
	   $url = API_URL.'verify'; 
	   $curl_handle=curl_init();
	   curl_setopt($curl_handle,CURLOPT_URL,$url);
	   curl_setopt($curl_handle, CURLOPT_POST ,true);
	   curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $post);
	   curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	   $buffer = curl_exec($curl_handle);
	   curl_close($curl_handle);
	   if (empty($buffer)){
	      print "Nothing returned from url.<p>";
	   }
	   else{
	  	  if(!empty($buffer)){
	  	  	$result = json_decode(json_encode(json_decode($buffer)), true);
	  	  	return $result;
	  	  }
	   }
}

function authentication($email,$password,$otp_attempt){
	  if(!empty($otp_attempt)){
            $post = [
	    'email' => $email,
	    'password' => $password,
	    'otp_attempt' => $otp_attempt
	   ];

	  }else{
	  	$post = [
	    'email' => $email,
	    'password' => $password
	    
	   ];
	  }
	   

	   $url = API_URL.'sessions'; 
	   $curl_handle=curl_init();
	   curl_setopt($curl_handle,CURLOPT_URL,$url);
	   curl_setopt($curl_handle, CURLOPT_POST ,true);
	   curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $post);
	   curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	   $buffer = curl_exec($curl_handle);
	   curl_close($curl_handle);
	   if (empty($buffer)){
	      print "Nothing returned from url.<p>";
	   }
	   else{
	  	  if(!empty($buffer)){
	  	  	$result = json_decode(json_encode(json_decode($buffer)), true);
	  	  	return $result;
	  	  }
	   }

}

function patientlist($email,$search){ 
	   $userauth = $_SESSION['userdata']['authentication_token'];
	   $headers['Content-length'] = '0';
       $headers['Content-type'] = 'application/json';
	   $headers['Authorization'] = 'user-token: '.$userauth;   
	   $post = array('email'=>$email,'search' => $search ); 
	   $curl_handle=curl_init();
	   curl_setopt($curl_handle,CURLOPT_URL,API_URL.'patients_list');
	   curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	   curl_setopt($curl_handle, CURLOPT_POST ,true);	  
	   curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $post);
	   curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
	   $buffer = curl_exec($curl_handle);
	   curl_close($curl_handle);
	   if (empty($buffer)){
	      print "Nothing returned from url.<p>";
	   }
	   else{
	  	  if(!empty($buffer)){
	  	  	$result = json_decode(json_encode(json_decode($buffer)), true);
	  	  	return $result;
	  	  }
	   }
}


function patientDetails($pid,$email){

	   $userauth = $_SESSION['userdata']['authentication_token'];
	   //$headers = array();
	   $headers['Content-length'] = '0';
       $headers['Content-type'] = 'application/json';
	   $headers['Authorization'] = 'user-token: '.$userauth;
       
	   $post = array('patient_id'=>$pid,'email'=>$email); 
	   $curl_handle=curl_init();
	   curl_setopt($curl_handle,CURLOPT_URL,API_URL.'patient_details');
	   curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	   curl_setopt($curl_handle, CURLOPT_POST ,true);	  
	   curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $post);
	   curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
	   $buffer = curl_exec($curl_handle);
	   curl_close($curl_handle);
	   if (empty($buffer)){
	      print "Nothing returned from url.<p>";
	   }
	   else{
	  	  if(!empty($buffer)){
	  	  	$result = json_decode(json_encode(json_decode($buffer)), true);
            return $result;
	  	  }
	   }

}

function referralList($pid,$email){

	   $userauth = $_SESSION['userdata']['authentication_token'];
	   //$headers = array();
	   $headers['Content-length'] = '0';
       $headers['Content-type'] = 'application/json';
	   $headers['Authorization'] = 'user-token: '.$userauth;
       
	   $post = array('patient_id'=>$pid,'email'=>$email); 
	   $curl_handle=curl_init();
	   curl_setopt($curl_handle,CURLOPT_URL,API_URL.'rfl_list');
	   curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	   curl_setopt($curl_handle, CURLOPT_POST ,true);	  
	   curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $post);
	   curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
	   $buffer = curl_exec($curl_handle);
	   curl_close($curl_handle);
	   if (empty($buffer)){
	      print "Nothing returned from url.<p>";
	   }
	   else{
	  	  if(!empty($buffer)){
	  	  	$result = json_decode(json_encode(json_decode($buffer)), true);
            return $result;
	  	  }
	   }

}

function communicationList($pid,$email){

	   $userauth = $_SESSION['userdata']['authentication_token'];
	   //$headers = array();
	   $headers['Content-length'] = '0';
       $headers['Content-type'] = 'application/json';
	   $headers['Authorization'] = 'user-token: '.$userauth;
       
	   $post = array('patient_id'=>$pid,'email'=>$email); 
	   $curl_handle=curl_init();
	   curl_setopt($curl_handle,CURLOPT_URL,API_URL.'msg_tsk_list');
	   curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	   curl_setopt($curl_handle, CURLOPT_POST ,true);	  
	   curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $post);
	   curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
	   $buffer = curl_exec($curl_handle);
	   curl_close($curl_handle);
	   if (empty($buffer)){
	      print "Nothing returned from url.<p>";
	   }
	   else{
	  	  if(!empty($buffer)){
	  	  	$result = json_decode(json_encode(json_decode($buffer)), true);
	  	  	//echo "<pre>";
	  	  	//print_r($result); die; 
            return $result;
	  	  }
	   }

}

function taskList($refid,$email){
       
	   $userauth = $_SESSION['userdata']['authentication_token'];
	   //$headers = array();
	   $headers['Content-length'] = '0';
       $headers['Content-type'] = 'application/json';
	   $headers['Authorization'] = 'user-token: '.$userauth;
       
	   $post = array('referral_id'=>$refid,'email'=>$email); 
	   $curl_handle=curl_init();
	   curl_setopt($curl_handle,CURLOPT_URL,API_URL.'tsk_list');
	   curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	   curl_setopt($curl_handle, CURLOPT_POST ,true);	  
	   curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $post);
	   curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
	   $buffer = curl_exec($curl_handle);
	   curl_close($curl_handle);
	   if (empty($buffer)){
	      print "Nothing returned from url.<p>";
	   }
	   else{
	  	  if(!empty($buffer)){
	  	  	$result = json_decode(json_encode(json_decode($buffer)), true);
            return $result;
	  	  }
	   }

}

function updatePatientDetails($detaildata,$patient_id,$email)
{
        
       $userauth = $_SESSION['userdata']['authentication_token'];
       $first_name = ucfirst($detaildata['first_name']);
       $last_name  = $detaildata['last_name'];
       $dob        = date('Y-m-d',strtotime($detaildata['date_of_birth']));
       $gender     = $detaildata['gender'];
       $mobile     = $detaildata['patient_phone'];
       $contacttype = $detaildata['mode_of_contact'];
       $zipcode    = $detaildata['patient_zipcode'];
       $patientemail = $detaildata['patient_email'];
       $policyid = $detaildata['patient_coverage_id'];
       $healthcare_coverage = $detaildata['healthcare_coverage'];

       //echo $dob; 
       //echo "vikk"; die;

	   //$headers = array();
	   $headers['Content-length'] = '0';
       $headers['Content-type'] = 'application/json';
	   $headers['Authorization'] = 'user-token: '.$userauth;
       
	   $post = array('patient_id'=>$patient_id,'email'=>$email,'first_name'=>$first_name,'last_name'=>$last_name,'date_of_birth'=>$dob,'gender'=>$gender,'patient_phone'=>$mobile,'patient_email'=>$patientemail,'patient_zipcode'=>$zipcode,'healthcare_coverage'=>$healthcare_coverage,'patient_coverage_id'=>$policyid,'mode_of_contact'=>$contacttype); 
	   $curl_handle=curl_init();
	   curl_setopt($curl_handle,CURLOPT_URL,API_URL.'update_patient');
	   curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	   curl_setopt($curl_handle, CURLOPT_POST ,true);	  
	   curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $post);
	   curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
	   $buffer = curl_exec($curl_handle);
	   curl_close($curl_handle);
	   if (empty($buffer)){
	      print "Nothing returned from url.<p>";
	   }
	   else{
	  	  if(!empty($buffer)){
	  	  	$result = json_decode(json_encode(json_decode($buffer)), true);
	  	  	return $result;
	  	  }
	   }
}


function updateReferral($referraldata,$referral_id,$email)
{
        
       $userauth      = $_SESSION['userdata']['authentication_token'];
       $referral_name = $referraldata['ref_name'];
       $due_date      = $referraldata['ref_due_date'];
       $urgency       = $referraldata['ref_urgency'];
       $source        = $referraldata['ref_source'];
       $referral_description     = $referraldata['ref_desc'];
       $follow_up_date     = $referraldata['follow_up_date'];
       

	   //$headers = array();
	   $headers['Content-length'] = '0';
       $headers['Content-type'] = 'application/json';
	   $headers['Authorization'] = 'user-token: '.$userauth;
       
	   $post = array('referral_id'=>$referral_id,'email'=>$email,'referral_name'=>$referral_name,'due_date'=>$due_date,'urgency'=>$urgency,'source'=>$source,'referral_description'=>$referral_description,'follow_up_date'=>$follow_up_date); 
	   $curl_handle=curl_init();

	   curl_setopt($curl_handle,CURLOPT_URL,API_URL.'rfl_update');
	   curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	   curl_setopt($curl_handle, CURLOPT_POST ,true);	  
	   curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $post);
	   curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
	   $buffer = curl_exec($curl_handle);
	   curl_close($curl_handle);
	   if (empty($buffer)){
	      print "Nothing returned from url.<p>";
	   }
	   else{
	  	  if(!empty($buffer)){
	  	  	$result = json_decode(json_encode(json_decode($buffer)), true);
	  	  	return $result;
	  	  }
	   }
}

function savePatientReferral($postData,$patient_id,$patient_email)
{
	   $userauth      = $_SESSION['userdata']['authentication_token'];
       $referral_name = $postData['referral_name'];
       $due_date      = date('Y-m-d' ,strtotime($postData['due_date']));
       $urgency       = $postData['urgency'];
       $source        = $postData['source'];
       $referral_description     = $postData['referral_description'];
       if(!empty($postData['tasks'])){
       	  $tasks     = array();
          foreach ($postData['tasks'] as $taskkey => $taskvalue) {
         	$tasks[$taskkey]['task_type'] = $taskvalue['task_type'];
         	$tasks[$taskkey]['provider'] = $taskvalue['provider'];
         	$tasks[$taskkey]['task_owner'] = $taskvalue['task_owner'];
         	$tasks[$taskkey]['task_description'] = $taskvalue['task_description'];
         	$tasks[$taskkey]['task_deadline'] = date('Y-m-d',strtotime($taskvalue['task_deadline']));
         	$tasks[$taskkey]['task_status'] = $taskvalue['task_status'];
         }
       }else{
       	  $tasks     = "";
       }

       $post = array('patient_id'=>$patient_id,'email'=>$patient_email,'referral_name'=>$referral_name,'due_date'=>$due_date,'urgency'=>$urgency,'source'=>$source,'referral_description'=>$referral_description,'task'=>$tasks); 
	   $datastring =  json_encode($post); 
       //echo $datastring; die; 
       $headuserauth = "Authorization: user-token ".$userauth;
	  //$headers['Content-length']  = '1000';
       $headers['Content-type']    = 'Content-Type: application/json';
	   $headers['Authorization']   = 'user-token: '.$userauth;

	   $curl_handle=curl_init();

	   
	   curl_setopt($curl_handle,CURLOPT_URL,API_URL.'rfl_create');
	   curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
       curl_setopt($curl_handle, CURLOPT_CUSTOMREQUEST, "POST");
       curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $datastring);
       curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
       
	   $buffer = curl_exec($curl_handle);
	   curl_close($curl_handle);
	   if (empty($buffer)){
	      print "Nothing returned from url.<p>";
	   }
	   else{
	  	  if(!empty($buffer)){
	  	  	$result = json_decode(json_encode(json_decode($buffer)), true);
	  	  	
	  	  	return $result;
	  	  }
	   }
}

function saveReferralTask($postData,$patient_id,$patient_email,$documents)
{
	   $userauth      = $_SESSION['userdata']['authentication_token'];
       $referral_id = $postData['referral_id'];
       $task_type       = $postData['task_type']; 
       $task_status        = $postData['task_status'];
       $task_owner        = $postData['task_owner'];
       $provider        = $postData['provider'];
       $task_description     = $postData['task_description'];
       $task_deadline      = date('Y-m-d' ,strtotime($postData['task_deadline']));

	   $headers['Content-length'] = '0';
       $headers['Content-type'] = 'application/json';
	   $headers['Authorization'] = 'user-token: '.$userauth;
       
       if(!empty($documents)){
       	 if(!empty($documents['tmp_name']) && !empty($documents['name'])){
			$tmpfile = $documents['tmp_name'];
			$filename = basename($documents['name']);
			$patientdocument = curl_file_create($tmpfile, $documents['image']['type'], $filename);
       	}else{
       		$patientdocument = "";
       	  
       	}
       }
	  
       
	   $post = array('referral_id'=>$referral_id,'email'=>$patient_email,'task_type'=>$task_type,'task_status'=>$task_status,'task_owner'=>$task_owner,'provider'=>$provider,'task_description'=>$task_description,'task_deadline'=>$task_deadline,'patient_document'=>$patientdocument); 
	   //$datastring =  json_encode($post); die;
	   $curl_handle=curl_init();
	   curl_setopt($curl_handle,CURLOPT_URL,API_URL.'tsk_create');
	   curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	   curl_setopt($curl_handle, CURLOPT_POST ,true);	  
	   curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $post);
	   curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
	   $buffer = curl_exec($curl_handle); 
	   curl_close($curl_handle);
	   if (empty($buffer)){
	      print "Nothing returned from url.<p>";
	   }
	   else{
	  	  if(!empty($buffer)){
	  	  	$result = json_decode(json_encode(json_decode($buffer)), true);
	  	  	return $result;
	  	  }
	   }
}

function messagesList($patient_id,$taskid,$email){

	   $userauth = $_SESSION['userdata']['authentication_token'];
	   $headers['Content-length'] = '0';
       $headers['Content-type'] = 'application/json';
	   $headers['Authorization'] = 'user-token: '.$userauth;
	   $post = array('patient_id'=>$patient_id,'task_id'=>$taskid,'email'=>$email); 
	   $curl_handle=curl_init();
	   curl_setopt($curl_handle,CURLOPT_URL,API_URL.'msg_list');
	   curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	   curl_setopt($curl_handle, CURLOPT_POST ,true);	  
	   curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $post);
	   curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
	   $buffer = curl_exec($curl_handle);
	   curl_close($curl_handle);
	   if (empty($buffer)){
	      print "Nothing returned from url.<p>";
	   }
	   else{
	  	  if(!empty($buffer)){
	  	  	$result = json_decode(json_encode(json_decode($buffer)), true);
            return $result;
	  	  }
	   }

}


function savePatinets($patientData,$email){
	   $userauth      = $_SESSION['userdata']['authentication_token'];
       $first_name = ucfirst($patientData['first_name']);
       $last_name       = $patientData['last_name']; 
       $patient_email        = $patientData['patient_email'];
       $patient_phone        = $patientData['patient_phone'];
       $patient_coverage_id        = $patientData['patient_coverage_id'];
       $healthcare_coverage     = $patientData['healthcare_coverage'];
       $patient_zipcode     = $patientData['patient_zipcode'];
       $mode_of_contact     = $patientData['mode_of_contact'];
       $date_of_birth      = date('Y-m-d' ,strtotime($patientData['date_of_birth']));
	   $headers['Content-length'] = '0';
       $headers['Content-type'] = 'application/json';
	   $headers['Authorization'] = 'user-token: '.$userauth;
       
	   $post = array('email'=>$email,'first_name'=>$first_name,'last_name'=>$last_name,'patient_email'=>$patient_email,'patient_phone'=>$patient_phone,'patient_coverage_id'=>$patient_coverage_id,'healthcare_coverage'=>$healthcare_coverage,'patient_zipcode'=>$patient_zipcode,'date_of_birth'=>$date_of_birth,'mode_of_contact'=>$mode_of_contact); 

	   $curl_handle=curl_init();
	   curl_setopt($curl_handle,CURLOPT_URL,API_URL.'create_patient');
	   curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	   curl_setopt($curl_handle, CURLOPT_POST ,true);	  
	   curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $post);
	   curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
	   $buffer = curl_exec($curl_handle); 
	   curl_close($curl_handle);
	   if (empty($buffer)){
	      print "Nothing returned from url.<p>";
	   }
	   else{
	  	  if(!empty($buffer)){
	  	  	$result = json_decode(json_encode(json_decode($buffer)), true);
	  	  	return $result;
	  	  }
	   }
}

function updateuserprofile($profiledata){
	   $userauth      = $_SESSION['userdata']['authentication_token'];
       $headers['Content-length'] = '0';
       $headers['Content-type'] = 'application/json';
	   $headers['Authorization'] = 'user-token: '.$userauth;       
	   $post = array('name'=>$profiledata['fname'],'email'=>$profiledata['email'],'phone_number'=>$profiledata['phonenumber'],'admin'=>$profiledata['admin'],'active'=>$profiledata['active'],'otp_required_for_login'=>$profiledata['otp_required_for_login']);
	  // echo "<pre>";
	  // print_r($post); die; 

	   $curl_handle=curl_init();
	   curl_setopt($curl_handle,CURLOPT_URL,API_URL.'edit_profile');
	   curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	   curl_setopt($curl_handle, CURLOPT_POST ,true);	  
	   curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $post);
	   curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
	   $buffer = curl_exec($curl_handle); 
	   curl_close($curl_handle);
	   if (empty($buffer)){
	      print "Nothing returned from url.<p>";
	   }
	   else{
	  	  if(!empty($buffer)){
	  	  	$result = json_decode(json_encode(json_decode($buffer)), true);
	  	  
	  	  	return $result;
	  	  }
	   }
}


function notesList($patient_id,$email){

	   $userauth = $_SESSION['userdata']['authentication_token'];
	   $headers['Content-length'] = '0';
       $headers['Content-type'] = 'application/json';
	   $headers['Authorization'] = 'user-token: '.$userauth;
	   $post = array('patient_id'=>$patient_id,'email'=>$email); 
	   $curl_handle=curl_init();
	   curl_setopt($curl_handle,CURLOPT_URL,API_URL.'notes_list');
	   curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	   curl_setopt($curl_handle, CURLOPT_POST ,true);	  
	   curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $post);
	   curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
	   $buffer = curl_exec($curl_handle);
	   curl_close($curl_handle);
	   if (empty($buffer)){
	      print "Nothing returned from url.<p>";
	   }
	   else{
	  	  if(!empty($buffer)){
	  	  	$result = json_decode(json_encode(json_decode($buffer)), true);
            return $result;
	  	  }
	   }

}

function savePatientNotes($notesData,$patient_id,$email){
       $userauth      =      $_SESSION['userdata']['authentication_token'];
       $notestext     =    $notesData['notestext'];
	   $headers['Content-length'] = '0';
       $headers['Content-type'] = 'application/json';
	   $headers['Authorization'] = 'user-token: '.$userauth;      
	   $post = array('email'=>$email,'patient_id'=>$patient_id,'text'=>$notestext); 
	   $curl_handle=curl_init();
	   curl_setopt($curl_handle,CURLOPT_URL,API_URL.'note_create');
	   curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	   curl_setopt($curl_handle, CURLOPT_POST ,true);	  
	   curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $post);
	   curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
	   $buffer = curl_exec($curl_handle); 
	   curl_close($curl_handle);
	   if (empty($buffer)){
	      print "Nothing returned from url.<p>";
	   }
	   else{
	  	  if(!empty($buffer)){
	  	  	$result = json_decode(json_encode(json_decode($buffer)), true); 
	  	  	return $result;
	  	  }
	   }
}


function msgsend($msgData,$patient_id,$email){
	   $userauth       =    $_SESSION['userdata']['authentication_token'];
       $task_id        =    $msgData['task_id'];
       $sender_id      =    '5ae782585fd8db064ba82114';
       $recipient_id   =    $msgData['recipient_id'];
       $recipient_type =    $msgData['recipient_type'];
       $comm_subject   =    $msgData['comm_subject'];
       $comm_message   =    $msgData['comm_message'];
	   $headers['Content-length'] = '0';
       $headers['Content-type'] = 'application/json';
	   $headers['Authorization'] = 'user-token: '.$userauth;      
	   $post = array('email'=>$email,'recipient_id'=>$patient_id,'task_id'=>$task_id,'sender_id'=>$sender_id,'recipient_type'=>$recipient_type,'comm_subject'=>$comm_subject,'comm_message'=>$comm_message); 
	   $curl_handle=curl_init();
	   curl_setopt($curl_handle,CURLOPT_URL,API_URL.'msg_send');
	   curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	   curl_setopt($curl_handle, CURLOPT_POST ,true);	  
	   curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $post);
	   curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
	   $buffer = curl_exec($curl_handle); 
	   curl_close($curl_handle);
	   if (empty($buffer)){
	      print "Nothing returned from url.<p>";
	   }
	   else{
	  	  if(!empty($buffer)){
	  	  	$result = json_decode(json_encode(json_decode($buffer)), true); 
	  	  	return $result;
	  	  }
	   }
}

function serviceproviderslist($search){
	   $userauth = $_SESSION['userdata']['authentication_token'];
	   $headers['Content-length'] = '0';
       $headers['Content-type'] = 'application/json';
	   $headers['Authorization'] = 'user-token: '.$userauth;
	   //$post = array('patient_id'=>$patient_id,'email'=>$email);
	    /* if(!empty($search['population']) || !empty($search['location']) || !empty($search['services_type']) || !empty($search['location_type'])){*/
	    	//echo "<pre>";
	    	//print_r($search);
	    if(empty($search['location']) && empty($search['population']) &&  empty($search['services_type'])){
	    	echo "iffcondition";
	    	$radiusarray = array('value' => 'WA', 'type' => 'State');
            //$radiusarray = array('conditional' => '','value' => "98168");
            $postsearch['GeoScope']  = $radiusarray;
            $postsearch['application_name']  = "default";
            $datastring = json_encode($postsearch);
	    }else if(!empty($search['location']) || !empty($search['population']) ||  !empty($search['services_type'])){
	    	echo "elsecondition";
	   	    $postsearch = array();
	   	    if(!empty($search['population'])){
	   	    	$populationarray = array('conditional' => 'OR','value' => array("P_".$search['population']));
	   	    	$postsearch['population']  = $populationarray;
	   	    }   

	   	    if(!empty($search['services_type'])){
                $providerarray = array("type" => "group", "conditional" => "OR",'value' => array("S_".$search['services_type']));
                $postsearch['services_type']  = $providerarray;
	   	    }

	   	    /*if(!empty($search['services_type'])){
	   	    	if($search['services_type'] == 'Extractions'){
	   	    		$extractnsarray = array('type' => 'Dropdown','value' => 'Limited Extractions');
	   	    		$postsearch['Extractions']  = $extractnsarray;
	   	    	}elseif($search['services_type'] == 'Orthodontics'){
                    $orthoarray = array('type' => 'Dropdown','value' => 'Appointment Only');
	   	    		$postsearch['Orthodontics']  = $orthoarray;
	   	    	}elseif($search['services_type'] == 'Dentures'){
	   	    		$denturesarray = array('type' => 'Dropdown','value' => 'Appointment Only');
	   	    		$postsearch['Dentures']  = $denturesarray;
	   	    	}

	   	    }*/

	   	    //if(!empty($search['location'])){
	   	   
	   	    	$radiusarray = array('value' => 'WA', 'type' => 'State');
                $postsearch['GeoScope']  = $radiusarray;
                $postsearch['application_name']  = "default";
	   	   // }


	   	    
            $post = $postsearch;
            $datastring = json_encode($post);
	   	    /*$post =  array (
                   'Billing_Zip/Postal_Code' => $zipcodearray,
                   'Name' => $providerarray
                );*/

             
	   }else{

	   /*	$radiusarray = array('conditional' => '','value' => "20170");
        $postsearch['GeoScope']  = $radiusarray;
        $datastring = json_encode($postsearch);*/
        $datastring = '{}';
	   /* $post =  array (
                   'Billing_Zip/Postal_Code' => array ('type' => 'zipcode','value' => '99203' ),
                   'ABCD' => array ( 'type' => 'Dropdown','value' => '1')
                );
	    $datastring = json_encode($post);*/
	   }
	   
	 // echo $datastring;  
	   $serviceproviderAPIURL = 'https://aokx9crg6l.execute-api.us-west-2.amazonaws.com/post_hash'; 
	   $curl_handle=curl_init();
	   curl_setopt($curl_handle,CURLOPT_URL,$serviceproviderAPIURL);
	   curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	   curl_setopt($curl_handle, CURLOPT_POST ,true);	  
	   curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $datastring);
	   curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
	   $buffer = curl_exec($curl_handle);
	   curl_close($curl_handle);
	   if (empty($buffer)){
	      print "Nothing returned from url.<p>";
	   }
	   else{
	  	  if(!empty($buffer)){
	  	  	$result = json_decode(json_encode(json_decode($buffer)), true);
	  	  	//echo "<pre>";
	  	  	//print_r($result); die; 
            return $result;
	  	  }
	   }
}

function updateReferralTask($referralTaskdata,$task_id,$email,$documents)
{

       $userauth      = $_SESSION['userdata']['authentication_token'];
       $task_type = $referralTaskdata['task_type'];
       $task_description      = $referralTaskdata['task_description'];
       $task_status       = $referralTaskdata['task_status'];
       $task_provider        = $referralTaskdata['task_provider'];
       $task_owner     = $referralTaskdata['task_owner'];
       $task_deadline     = date('Y-m-d',strtotime($referralTaskdata['task_deadline']));
       
       

       if(!empty($documents)){
       	 if(!empty($documents['tmp_name']) && !empty($documents['name'])){
			$tmpfile = $documents['tmp_name'];
			$filename = basename($documents['name']);
			$patientdocument = curl_file_create($tmpfile, $documents['image']['type'], $filename);
       	}else{
       		$patientdocument = "";
       	  
       	}
       }




	   //$headers = array();
	   $headers['Content-length'] = '0';
       $headers['Content-type'] = 'application/json';
	   $headers['Authorization'] = 'user-token: '.$userauth;
       

	   $post = array('task_id'=>$task_id,'email'=>$email,'task_type'=>$task_type,'task_description'=>$task_description,'task_status'=>$task_status,'provider'=>$task_provider,'task_owner'=>$task_owner,'task_deadline'=>$task_deadline,'patient_document'=>$patientdocument); 
       
       //print_r($post); die;
	   $curl_handle=curl_init();
	   curl_setopt($curl_handle,CURLOPT_URL,API_URL.'tsk_update');
	   curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	   curl_setopt($curl_handle, CURLOPT_POST ,true);	  
	   curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $post);
	   curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
	   $buffer = curl_exec($curl_handle);
	   curl_close($curl_handle);
	   if (empty($buffer)){
	      print "Nothing returned from url.<p>";
	   }
	   else{
	  	  if(!empty($buffer)){
	  	  	$result = json_decode(json_encode(json_decode($buffer)), true);
	  	  	return $result;
	  	  }
	   }
}

function reply($message,$commid,$email){
	   $userauth       =    $_SESSION['userdata']['authentication_token'];
	   $headers['Content-length'] = '0';
       $headers['Content-type'] = 'application/json';
	   $headers['Authorization'] = 'user-token: '.$userauth;      
	   $post = array('email'=>$email,'comm_id'=>$commid,'message'=>$message); 
	   $curl_handle=curl_init();
	   curl_setopt($curl_handle,CURLOPT_URL,API_URL.'msg_send');
	   curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	   curl_setopt($curl_handle, CURLOPT_POST ,true);	  
	   curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $post);
	   curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
	   $buffer = curl_exec($curl_handle); 
	   curl_close($curl_handle);
	   if (empty($buffer)){
	      print "Nothing returned from url.<p>";
	   }
	   else{
	  	  if(!empty($buffer)){
	  	  	$result = json_decode(json_encode(json_decode($buffer)), true); 
	  	  	return $result;
	  	  }
	   }
}

function ownerlist($email){ 
	   $userauth = $_SESSION['userdata']['authentication_token'];
	   $headers['Content-length'] = '0';
       $headers['Content-type'] = 'application/json';
	   $headers['Authorization'] = 'user-token: '.$userauth;   
	   $post = array('email'=>$email); 
	   $curl_handle=curl_init();
	   curl_setopt($curl_handle,CURLOPT_URL,API_URL.'get_all_users');
	   curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	   curl_setopt($curl_handle, CURLOPT_POST ,true);	  
	   curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $post);
	   curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
	   $buffer = curl_exec($curl_handle);
	   curl_close($curl_handle);
	   if (empty($buffer)){
	      print "Nothing returned from url.<p>";
	   }
	   else{
	  	  if(!empty($buffer)){
	  	  	$result = json_decode(json_encode(json_decode($buffer)), true);
	  	  	return $result;
	  	  }
	   }
}


function taskstatus($email){ 
	   $userauth = $_SESSION['userdata']['authentication_token'];
	   $headers['Content-length'] = '0';
       $headers['Content-type'] = 'application/json';
	   $headers['Authorization'] = 'user-token: '.$userauth;   
	   $post = array('email'=>$email); 
	   $curl_handle=curl_init();
	   curl_setopt($curl_handle,CURLOPT_URL,API_URL.'tsk_status');
	   curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	   curl_setopt($curl_handle, CURLOPT_POST ,true);	  
	   curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $post);
	   curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
	   $buffer = curl_exec($curl_handle);
	   curl_close($curl_handle);
	   if (empty($buffer)){
	      print "Nothing returned from url.<p>";
	   }
	   else{
	  	  if(!empty($buffer)){
	  	  	$result = json_decode(json_encode(json_decode($buffer)), true);
	  	  	return $result;
	  	  }
	   }
}

function mytasks($email){ 
	   $userauth = $_SESSION['userdata']['authentication_token'];
	   $headers['Content-length'] = '0';
       $headers['Content-type'] = 'application/json';
	   $headers['Authorization'] = 'user-token: '.$userauth;   
	   $post = array('email'=>$email); 
	   $curl_handle=curl_init();
	   curl_setopt($curl_handle,CURLOPT_URL,API_URL.'tsk_dashboard');
	   curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	   curl_setopt($curl_handle, CURLOPT_POST ,true);	  
	   curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $post);
	   curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
	   $buffer = curl_exec($curl_handle);
	   curl_close($curl_handle);
	   if (empty($buffer)){
	      print "Nothing returned from url.<p>";
	   }
	   else{
	  	  if(!empty($buffer)){
	  	  	$result = json_decode(json_encode(json_decode($buffer)), true);
	  	  	return $result;
	  	  }
	   }
}


function inbox($email){ 
	   $userauth = $_SESSION['userdata']['authentication_token'];
	   $headers['Content-length'] = '0';
       $headers['Content-type'] = 'application/json';
	   $headers['Authorization'] = 'user-token: '.$userauth;   
	   $post = array('email'=>$email); 
	   $curl_handle=curl_init();
	   curl_setopt($curl_handle,CURLOPT_URL,API_URL.'msg_dashboard');
	   curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	   curl_setopt($curl_handle, CURLOPT_POST ,true);	  
	   curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $post);
	   curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
	   $buffer = curl_exec($curl_handle);
	   curl_close($curl_handle);
	   if (empty($buffer)){
	      print "Nothing returned from url.<p>";
	   }
	   else{
	  	  if(!empty($buffer)){
	  	  	$result = json_decode(json_encode(json_decode($buffer)), true);
	  	  	return $result;
	  	  }
	   }
}

function notification($email){ 
	   $userauth = $_SESSION['userdata']['authentication_token'];
	   $headers['Content-length'] = '0';
       $headers['Content-type'] = 'application/json';
	   $headers['Authorization'] = 'user-token: '.$userauth;   
	   $post = array('email'=>$email); 
	   $curl_handle=curl_init();
	   curl_setopt($curl_handle,CURLOPT_URL,API_URL.'dashboard_notifications');
	   curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	   curl_setopt($curl_handle, CURLOPT_POST ,true);	  
	   curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $post);
	   curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
	   $buffer = curl_exec($curl_handle);
	   curl_close($curl_handle);
	   if (empty($buffer)){
	      print "Nothing returned from url.<p>";
	   }
	   else{
	  	  if(!empty($buffer)){
	  	  	$result = json_decode(json_encode(json_decode($buffer)), true);
	  	  	return $result;
	  	  }
	   }
}

function referralDasboard($email){ 
	   $userauth = $_SESSION['userdata']['authentication_token'];
	   $headers['Content-length'] = '0';
       $headers['Content-type'] = 'application/json';
	   $headers['Authorization'] = 'user-token: '.$userauth;   
	   $post = array('email'=>$email); 
	   $curl_handle=curl_init();
	   curl_setopt($curl_handle,CURLOPT_URL,API_URL.'rfl_dashboard');
	   curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	   curl_setopt($curl_handle, CURLOPT_POST ,true);	  
	   curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $post);
	   curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
	   $buffer = curl_exec($curl_handle);
	   curl_close($curl_handle);
	   if (empty($buffer)){
	      print "Nothing returned from url.<p>";
	   }
	   else{
	  	  if(!empty($buffer)){
	  	  	$result = json_decode(json_encode(json_decode($buffer)), true);
	  	  	return $result;
	  	  }
	   }
}


function patientdocuments($email,$patient_id){
	   $userauth = $_SESSION['userdata']['authentication_token'];
	   $headers['Content-length'] = '0';
	   $headers['Content-type'] = 'application/json';
	   $headers['Authorization'] = 'user-token: '.$userauth;
	   $post = array('patient_id'=>$patient_id,'email'=>$email); 
	   $curl_handle=curl_init();
	   curl_setopt($curl_handle,CURLOPT_URL,API_URL.'patient_document');
	   curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	   curl_setopt($curl_handle, CURLOPT_POST ,true);	  
	   curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $post);
	   curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
	   $buffer = curl_exec($curl_handle);
	   curl_close($curl_handle);
	   if (empty($buffer)){
	      print "Nothing returned from url.<p>";
	   }
	   else{
	  	  if(!empty($buffer)){
	  	  	$result = json_decode(json_encode(json_decode($buffer)), true);
	        return $result;
	  	  }
	   }
}


function gettaskdetails($email,$task_id){ 
	   $userauth = $_SESSION['userdata']['authentication_token'];
	   $headers['Content-length'] = '0';
       $headers['Content-type'] = 'application/json';
	   $headers['Authorization'] = 'user-token: '.$userauth;   
	   $post = array('email'=>$email,'task_id'=>$task_id); 
	   $curl_handle=curl_init();
	   curl_setopt($curl_handle,CURLOPT_URL,API_URL.'tsk_get');
	   curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	   curl_setopt($curl_handle, CURLOPT_POST ,true);	  
	   curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $post);
	   curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
	   $buffer = curl_exec($curl_handle);
	   curl_close($curl_handle);
	   if (empty($buffer)){
	      print "Nothing returned from url.<p>";
	   }
	   else{
	  	  if(!empty($buffer)){
	  	  	$result = json_decode(json_encode(json_decode($buffer)), true);
	  	  	return $result;
	  	  }
	   }
}

function gettaskledgerdetails($email,$task_id){ 
	   $userauth = $_SESSION['userdata']['authentication_token'];
	   $headers['Content-length'] = '0';
       $headers['Content-type'] = 'application/json';
	   $headers['Authorization'] = 'user-token: '.$userauth;   
	   $task_id = '5c1d203c5fd8db2471ba0dcd';
	   $post = array('email'=>$email,'task_id'=>$task_id); 
	   $curl_handle=curl_init();
	   curl_setopt($curl_handle,CURLOPT_URL,API_URL.'ledg_details');
	   curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	   curl_setopt($curl_handle, CURLOPT_POST ,true);	  
	   curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $post);
	   curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
	   $buffer = curl_exec($curl_handle);
	   curl_close($curl_handle);
	   if (empty($buffer)){
	      print "Nothing returned from url.<p>";
	   }
	   else{
	  	  if(!empty($buffer)){
	  	  	$result = json_decode(json_encode(json_decode($buffer)), true);
	  	  	
	  	  	return $result;
	  	  }
	   }
}


function getreferraldetails($email,$ref_id){ 
	   $userauth = $_SESSION['userdata']['authentication_token'];
	   $headers['Content-length'] = '0';
       $headers['Content-type'] = 'application/json';
	   $headers['Authorization'] = 'user-token: '.$userauth;   
	   $post = array('email'=>$email,'referral_id'=>$ref_id); 
	   $curl_handle=curl_init();
	   curl_setopt($curl_handle,CURLOPT_URL,API_URL.'rfl_get');
	   curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	   curl_setopt($curl_handle, CURLOPT_POST ,true);	  
	   curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $post);
	   curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
	   $buffer = curl_exec($curl_handle);
	   curl_close($curl_handle);
	   if (empty($buffer)){
	      print "Nothing returned from url.<p>";
	   }
	   else{
	  	  if(!empty($buffer)){
	  	  	$result = json_decode(json_encode(json_decode($buffer)), true);
	  	  	return $result;
	  	  }
	   }
}

function clientsList(){ 
	   $userauth = $_SESSION['userdata']['authentication_token'];
	  // echo $userauth; die; 
	   $headers['Content-length'] = '0';
       $headers['Content-type'] = 'application/json';
	   $headers['Authorization'] = 'user-token: '.$userauth;   
	   $curl_handle=curl_init();
	   curl_setopt($curl_handle,CURLOPT_URL,API_URL.'client_list');
	   curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	   curl_setopt($curl_handle, CURLOPT_POST ,false);	  
	   curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
	   $buffer = curl_exec($curl_handle);
	   curl_close($curl_handle);
	   if (empty($buffer)){
	      print "Nothing returned from url.<p>";
	   }
	   else{
	  	  if(!empty($buffer)){
	  	  	$result = json_decode(json_encode(json_decode($buffer)), true);
	  	  	return $result;
	  	  }
	   }
}

function sendrfltask($taskdata,$email)
{
	   $userauth = $_SESSION['userdata']['authentication_token'];
       $task_id     = $taskdata['task_id'];
       $referred_application_id     = $taskdata['referred_application_id'];

	   //$headers = array();
	   $headers['Content-length'] = '0';
       $headers['Content-type'] = 'application/json';
	   $headers['Authorization'] = 'user-token: '.$userauth;
       
	   $post = array('task_id'=>$task_id,'email'=>$email,'referred_application_id'=>$referred_application_id); 
	   $curl_handle=curl_init();
	   curl_setopt($curl_handle,CURLOPT_URL,API_URL.'rfl_send');
	   curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	   curl_setopt($curl_handle, CURLOPT_POST ,true);	  
	   curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $post);
	   curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
	   $buffer = curl_exec($curl_handle);
	   curl_close($curl_handle);
	   if (empty($buffer)){
	     // print "Nothing returned from url.<p>";
	      return false;
	   }
	   else{
	  	  if(!empty($buffer)){
	  	  	$result = json_decode(json_encode(json_decode($buffer)), true);
	  	  	return $result;
	  	  }
	   }
}


function incomingReferral($email,$application_id){ 
	   $userauth = $_SESSION['userdata']['authentication_token'];
	   $headers['Content-length'] = '0';
       $headers['Content-type'] = 'application/json';
	   $headers['Authorization'] = 'user-token: '.$userauth;   
	   $post = array('email'=>$email,'application_id'=>$application_id); 
	   $curl_handle=curl_init();
	   curl_setopt($curl_handle,CURLOPT_URL,API_URL.'rfl_in');
	   curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	   curl_setopt($curl_handle, CURLOPT_POST ,true);	  
	   curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $post);
	   curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
	   $buffer = curl_exec($curl_handle);
	   curl_close($curl_handle);
	   if (empty($buffer)){
	      print "Nothing returned from url.<p>";
	   }
	   else{
	  	  if(!empty($buffer)){
	  	  	$result = json_decode(json_encode(json_decode($buffer)), true);
	  	  	return $result;
	  	  }
	   }
}



function outgoingReferral($email,$application_id){ 
	   $userauth = $_SESSION['userdata']['authentication_token'];
	   $headers['Content-length'] = '0';
       $headers['Content-type'] = 'application/json';
	   $headers['Authorization'] = 'user-token: '.$userauth;   
	   $post = array('email'=>$email,'application_id'=>$application_id); 
	   $curl_handle=curl_init();
	   curl_setopt($curl_handle,CURLOPT_URL,API_URL.'rfl_out');
	   curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	   curl_setopt($curl_handle, CURLOPT_POST ,true);	  
	   curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $post);
	   curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
	   $buffer = curl_exec($curl_handle);
	   curl_close($curl_handle);
	   if (empty($buffer)){
	      print "Nothing returned from url.<p>";
	   }
	   else{
	  	  if(!empty($buffer)){
	  	  	$result = json_decode(json_encode(json_decode($buffer)), true);
	  	  	return $result;
	  	  }
	   }
}

function acceptreferral($referral,$email)
{
	$userauth = $_SESSION['userdata']['authentication_token'];
    $task_id     = $referral['task_id'];
    $external_application_id     = $referral['external_application_id'];
    
	//$headers = array();
	$headers['Content-length'] = '0';
	$headers['Content-type'] = 'application/json';
	$headers['Authorization'] = 'user-token: '.$userauth;
	   
	$post = array('task_id'=>$task_id,'email'=>$email,'external_application_id'=>$external_application_id); 
    $curl_handle=curl_init();
    curl_setopt($curl_handle,CURLOPT_URL,API_URL.'send_patient');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl_handle, CURLOPT_POST ,true);	  
    curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $post);
    curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);
    if (empty($buffer)){
      return false;
    }
    else{
  	  if(!empty($buffer)){
  	  	$result = json_decode(json_encode(json_decode($buffer)), true);
  	  	return $result;
  	  }
    }
}

function rejectionferral($referral,$email)
{
	$userauth = $_SESSION['userdata']['authentication_token'];
    $task_id     = $referral['task_id'];
    $external_application_id     = $referral['external_application_id'];
    $request_reject_reason     = $referral['request_reject_reason'];
    
	//$headers = array();
	$headers['Content-length'] = '0';
	$headers['Content-type'] = 'application/json';
	$headers['Authorization'] = 'user-token: '.$userauth;
	   
	$post = array('task_id'=>$task_id,'email'=>$email,'external_application_id'=>$external_application_id,'request_reject_reason'=>$request_reject_reason); 
	    //  echo "<pre>";
        //print_r($post); die;
    $curl_handle=curl_init();
    curl_setopt($curl_handle,CURLOPT_URL,API_URL.'reject_request');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl_handle, CURLOPT_POST ,true);	  
    curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $post);
    curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);
    if (empty($buffer)){
      return false;
    }
    else{
  	  if(!empty($buffer)){
  	  	$result = json_decode(json_encode(json_decode($buffer)), true);
  	  	return $result;
  	  }
    }
}



function interviewslist($email)
{
	$userauth = $_SESSION['userdata']['authentication_token'];
	$headers['Content-length'] = '0';
    $headers['Content-type'] = 'application/json';
	$headers['Authorization'] = 'user-token: '.$userauth;   
	$post = array('email'=>$email ); 
    $curl_handle=curl_init();
    curl_setopt($curl_handle,CURLOPT_URL,API_URL.'int_list');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl_handle, CURLOPT_POST ,true);	  
    curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $post);
    curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);
	if (empty($buffer)){
	      print "Nothing returned from url.<p>";
	}
	else{
	  	if(!empty($buffer)){
	  	  	$result = json_decode(json_encode(json_decode($buffer)), true);
	  	  	return $result;
	  	}
	   }
}

function saveinterviewdetails($interviewdata,$email)
{
	$userauth         =          $_SESSION['userdata']['authentication_token'];
	$caller_firstname     =      $interviewdata['caller_first_name'];
	$caller_lastname     =      $interviewdata['caller_last_name'];
	$caller_dob     =      $interviewdata['caller_dob'];
	$headers['Content-length'] = '0';
	$headers['Content-type'] =   'application/json';
	$headers['Authorization'] =  'user-token: '.$userauth;      
	$post = array('email'=>$email,'caller_first_name'=>$caller_firstname,'caller_last_name'=>$caller_lastname,'caller_dob'=>$caller_dob); 
	$curl_handle=curl_init();
	curl_setopt($curl_handle,CURLOPT_URL,API_URL.'int_create');
	curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl_handle, CURLOPT_POST ,true);	  
	curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $post);
	curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
	$buffer = curl_exec($curl_handle); 
	curl_close($curl_handle);
	if (empty($buffer)){
	  print "Nothing returned from url.<p>";
	}
	else{
		if(!empty($buffer)){
			$result = json_decode(json_encode(json_decode($buffer)), true); 
			return $result;
		}
	}
}


function saveinterviewneedsdata($needdata,$email)
{
	$userauth         =          $_SESSION['userdata']['authentication_token'];
	$need_title     =      $needdata['need_title'];
	$interview_id     =      $needdata['interview_id'];
	$headers['Content-length'] = '0';
	$headers['Content-type'] =   'application/json';
	$headers['Authorization'] =  'user-token: '.$userauth;      
	$post = array('email'=>$email,'need_title'=>$need_title,'interview_id'=>$interview_id); 
	$curl_handle=curl_init();
	curl_setopt($curl_handle,CURLOPT_URL,API_URL.'need_create');
	curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl_handle, CURLOPT_POST ,true);	  
	curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $post);
	curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
	$buffer = curl_exec($curl_handle); 
	curl_close($curl_handle);
	if (empty($buffer)){
	  print "Nothing returned from url.<p>";
	}
	else{
		if(!empty($buffer)){
			$result = json_decode(json_encode(json_decode($buffer)), true); 
			return $result;
		}
	}
}

function saveinterviewobstaclesdata($obstaclesdata,$email)
{
	$userauth         =          $_SESSION['userdata']['authentication_token'];
	$obstacle_title     =      $obstaclesdata['obstacle_title'];
	$obstacle_description     =      $obstaclesdata['obstacle_description'];
	$need_id     =      $obstaclesdata['need_id'];
	$headers['Content-length'] = '0';
	$headers['Content-type'] =   'application/json';
	$headers['Authorization'] =  'user-token: '.$userauth;      
	$post = array('email'=>$email,'obstacle_title'=>$obstacle_title,'obstacle_description'=>$obstacle_description,'need_id'=>$need_id); 
	$curl_handle=curl_init();
	curl_setopt($curl_handle,CURLOPT_URL,API_URL.'obstacle_create');
	curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl_handle, CURLOPT_POST ,true);	  
	curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $post);
	curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
	$buffer = curl_exec($curl_handle); 
	curl_close($curl_handle);
	if (empty($buffer)){
	  print "Nothing returned from url.<p>";
	}
	else{
		if(!empty($buffer)){
			$result = json_decode(json_encode(json_decode($buffer)), true); 
			return $result;
		}
	}
}


function saveinterviewsolutiondata($solutiondata,$email)
{
	$userauth         =          $_SESSION['userdata']['authentication_token'];
	$solution_title     =      $solutiondata['solution_title'];
	$solution_description     =      $solutiondata['solution_description'];
	$obstacle_id     =      $solutiondata['obstacle_id'];
	$headers['Content-length'] = '0';
	$headers['Content-type'] =   'application/json';
	$headers['Authorization'] =  'user-token: '.$userauth;      
	$post = array('email'=>$email,'solution_title'=>$solution_title,'solution_description'=>$solution_description,'obstacle_id'=>$obstacle_id); 
	$curl_handle=curl_init();
	curl_setopt($curl_handle,CURLOPT_URL,API_URL.'sol_create');
	curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl_handle, CURLOPT_POST ,true);	  
	curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $post);
	curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
	$buffer = curl_exec($curl_handle); 
	curl_close($curl_handle);
	if (empty($buffer)){
	  print "Nothing returned from url.<p>";
	}
	else{
		if(!empty($buffer)){
			$result = json_decode(json_encode(json_decode($buffer)), true); 
			return $result;
		}
	}
}

function interviewDetails($iid,$email){

	   $userauth = $_SESSION['userdata']['authentication_token'];
	   //$headers = array();
	   $headers['Content-length'] = '0';
       $headers['Content-type'] = 'application/json';
	   $headers['Authorization'] = 'user-token: '.$userauth;
       
	   $post = array('interview_id'=>$iid,'email'=>$email); 
	   $curl_handle=curl_init();
	   curl_setopt($curl_handle,CURLOPT_URL,API_URL.'int_details');
	   curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	   curl_setopt($curl_handle, CURLOPT_POST ,true);	  
	   curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $post);
	   curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
	   $buffer = curl_exec($curl_handle);
	   curl_close($curl_handle);
	   if (empty($buffer)){
	      print "Nothing returned from url.<p>";
	   }
	   else{
	  	  if(!empty($buffer)){
	  	  	$result = json_decode(json_encode(json_decode($buffer)), true);
            return $result;
	  	  }
	   }

}


function updateInterviewDetails($interviewdata,$interview_id,$email)
{
        
       $userauth = $_SESSION['userdata']['authentication_token'];
       $first_name = $interviewdata['caller_first_name'];
       $last_name  = $interviewdata['caller_last_name'];
       $dob        = date('Y-m-d',strtotime($interviewdata['caller_dob']));
       $address     = $interviewdata['caller_address'];
       $zipcode     = $interviewdata['caller_zipcode'];
       $state = $interviewdata['caller_state'];
       $additional_fields    = $interviewdata['caller_additional_fields'];
       $additional_keys    = $interviewdata['caller_additional_keys'];

       if((!empty($additional_fields) & is_array($additional_fields)) && (!empty($additional_keys) & is_array($additional_keys))){
          $additionalfields = array_filter($additional_fields);
          $additionalkeys = array_filter($additional_keys);
          	if(is_array($additionalkeys) && is_array($additionalfields)){
          		$additional_fields_array = array_combine($additionalkeys, $additionalfields);
          	}
         
       }else{
       	//echo "vikram"; die;
       	$additional_fields_array = '';
       }

	   //$headers = array();
	    $headuserauth = "Authorization: user-token ".$userauth;
	  //$headers['Content-length']  = '1000';
       $headers['Content-type']    = 'Content-Type: application/json';
	   $headers['Authorization']   = 'user-token: '.$userauth;
	   
       
       if(!empty($additional_fields_array)){
          $post = array('interview_id'=>$interview_id,'email'=>$email,'caller_first_name'=>$first_name,'caller_last_name'=>$last_name,'caller_dob'=>$dob,'caller_address'=>$address,'caller_zipcode'=>$zipcode,'caller_state'=>$state,'caller_additional_fields'=>$additional_fields_array); 
       }else{
       	 $post = array('interview_id'=>$interview_id,'email'=>$email,'caller_first_name'=>$first_name,'caller_last_name'=>$last_name,'caller_dob'=>$dob,'caller_address'=>$address,'caller_zipcode'=>$zipcode,'caller_state'=>$state); 
	      
       }
	  
       $datastring = json_encode($post);
	   //echo $datastring; die; 
	   $curl_handle=curl_init();
	   curl_setopt($curl_handle,CURLOPT_URL,API_URL.'int_update');
	   curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers); 
       curl_setopt($curl_handle, CURLOPT_CUSTOMREQUEST, "POST");
       curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $datastring);
       curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	   
	   $buffer = curl_exec($curl_handle);
	   curl_close($curl_handle);

	   
	   if (empty($buffer)){
	      print "Nothing returned from url.<p>";
	   }
	   else{
	  	  if(!empty($buffer)){
	  	  	$result = json_decode(json_encode(json_decode($buffer)), true);
	  	  	return $result;
	  	  }
	   }
}

function updateInterviewNeedDetails($needdata,$need_id,$email)
{
	 $userauth = $_SESSION['userdata']['authentication_token'];
       $title = $needdata['need_title'];
       $desc  = $needdata['need_description'];
       $notes        = $needdata['need_notes'];
       $urgency     = $needdata['need_urgency'];
       $status = $needdata['need_status'];

	   //$headers = array();
	   $headers['Content-length'] = '0';
       $headers['Content-type'] = 'application/json';
	   $headers['Authorization'] = 'user-token: '.$userauth;
       
	   $post = array('need_id'=>$need_id,'email'=>$email,'need_title'=>$title,'need_description'=>$desc,'need_notes'=>$notes,'need_urgency'=>$urgency,'need_status'=>$status); 
	   $curl_handle=curl_init();
	   curl_setopt($curl_handle,CURLOPT_URL,API_URL.'need_update');
	   curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	   curl_setopt($curl_handle, CURLOPT_POST ,true);	  
	   curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $post);
	   curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
	   $buffer = curl_exec($curl_handle);
	   curl_close($curl_handle);
	   if (empty($buffer)){
	      print "Nothing returned from url.<p>";
	   }
	   else{
	  	  if(!empty($buffer)){
	  	  	$result = json_decode(json_encode(json_decode($buffer)), true);
	  	  	return $result;
	  	  }
	   }
}


function updateNeedObstaclesDetails($obstacledata,$obstacle_id,$email)
{
	$userauth  =   $_SESSION['userdata']['authentication_token'];
	$title     =   $obstacledata['obstacle_title'];
	$desc      =   $obstacledata['obstacle_description'];
	$notes     =   $obstacledata['obstacle_notes'];
	$urgency   =   $obstacledata['obstacle_urgency'];
	$status    =   $obstacledata['obstacle_status'];

    //$headers = array();
    $headers['Content-length'] = '0';
    $headers['Content-type'] = 'application/json';
    $headers['Authorization'] = 'user-token: '.$userauth;
       
	$post = array('obstacle_id'=>$obstacle_id,'email'=>$email,'obstacle_title'=>$title,'obstacle_description'=>$desc,'obstacle_notes'=>$notes,'obstacle_urgency'=>$urgency,'obstacle_status'=>$status); 
	   $curl_handle=curl_init();
	   curl_setopt($curl_handle,CURLOPT_URL,API_URL.'obstacle_update');
	   curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	   curl_setopt($curl_handle, CURLOPT_POST ,true);	  
	   curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $post);
	   curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
	   $buffer = curl_exec($curl_handle);
	   curl_close($curl_handle);
	   if (empty($buffer)){
	      print "Nothing returned from url.<p>";
	   }
	   else{
	  	  if(!empty($buffer)){
	  	  	$result = json_decode(json_encode(json_decode($buffer)), true);
	  	  	return $result;
	  	  }
	   }
}


function updateObstacleSolutionDetails($solutiondata,$solution_id,$email)
{
	$userauth  =   $_SESSION['userdata']['authentication_token'];
	$title     =   $solutiondata['solution_title'];
	$desc      =   $solutiondata['solution_description'];
	$provider     =   $solutiondata['solution_provider'];
    //$headers = array();
    $headers['Content-length'] = '0';
    $headers['Content-type'] = 'application/json';
    $headers['Authorization'] = 'user-token: '.$userauth;
     
	$post = array('solution_id'=>$solution_id,'email'=>$email,'solution_title'=>$title,'solution_description'=>$desc,'solution_provider'=>$provider); 
    $curl_handle=curl_init();
	curl_setopt($curl_handle,CURLOPT_URL,API_URL.'sol_update');
	curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl_handle, CURLOPT_POST ,true);	  
	curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $post);
	curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
	$buffer = curl_exec($curl_handle);

	curl_close($curl_handle);
    if (empty($buffer)){
      print "Nothing returned from url.<p>";
    }
    else{
  	  if(!empty($buffer)){
  	  	$result = json_decode(json_encode(json_decode($buffer)), true);
  	  	return $result;
  	  }
    }
}


function getstates(){
	global $wpdb;
	$table_name = 'wp_states';
    $results = $wpdb->get_results( "SELECT * FROM $table_name");
    $myArray = json_decode(json_encode($results), true);
    $states = array_column($myArray,'Name','Code' );
   return  $states;
}


function deleteInterviewSolution($solution_id,$email)
{
	$userauth  =   $_SESSION['userdata']['authentication_token'];
    $headers['Content-length'] = '0';
    $headers['Content-type'] = 'application/json';
    $headers['Authorization'] = 'user-token: '.$userauth;
     
	$post = array('solution_id'=>$solution_id,'email'=>$email); 
    $curl_handle=curl_init();
	curl_setopt($curl_handle,CURLOPT_URL,API_URL.'sol_remove');
	curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl_handle, CURLOPT_POST ,true);	  
	curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $post);
	curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
	$buffer = curl_exec($curl_handle);
	echo $buffer; die; 
	curl_close($curl_handle);
    if (empty($buffer)){
      print "Nothing returned from url.<p>";
    }
    else{
  	  if(!empty($buffer)){
  	  	$result = json_decode(json_encode(json_decode($buffer)), true);
  	  	return $result;
  	  }
    }
}

function deleteInterviewObstacle($obstacle_id,$email)
{
	$userauth  =   $_SESSION['userdata']['authentication_token'];
    $headers['Content-length'] = '0';
    $headers['Content-type'] = 'application/json';
    $headers['Authorization'] = 'user-token: '.$userauth;
     
	$post = array('obstacle_id'=>$obstacle_id,'email'=>$email); 
    $curl_handle=curl_init();
	curl_setopt($curl_handle,CURLOPT_URL,API_URL.'obstacle_remove');
	curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl_handle, CURLOPT_POST ,true);	  
	curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $post);
	curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
	$buffer = curl_exec($curl_handle);
	curl_close($curl_handle);
    if (empty($buffer)){
      print "Nothing returned from url.<p>";
    }
    else{
  	  if(!empty($buffer)){
  	  	$result = json_decode(json_encode(json_decode($buffer)), true);
  	  	return $result;
  	  }
    }
}

function deleteInterviewNeed($need_id,$email)
{
	$userauth  =   $_SESSION['userdata']['authentication_token'];
    $headers['Content-length'] = '0';
    $headers['Content-type'] = 'application/json';
    $headers['Authorization'] = 'user-token: '.$userauth;
     
	$post = array('need_id'=>$need_id,'email'=>$email); 
    $curl_handle=curl_init();
	curl_setopt($curl_handle,CURLOPT_URL,API_URL.'need_remove');
	curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl_handle, CURLOPT_POST ,true);	  
	curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $post);
	curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
	$buffer = curl_exec($curl_handle);
	curl_close($curl_handle);
    if (empty($buffer)){
      print "Nothing returned from url.<p>";
    }
    else{
  	  if(!empty($buffer)){
  	  	$result = json_decode(json_encode(json_decode($buffer)), true);
  	  	return $result;
  	  }
    }
}






?>