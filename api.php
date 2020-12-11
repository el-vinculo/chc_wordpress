<?php
function stripslashes_array($array)
{ 
	return is_array($array) ? array_map('stripslashes_array', $array) : stripslashes($array);
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
	   $userauth = $_SESSION['userdata']['authentication_token'];
	   $headers['Authorization'] = 'user-token: '.$userauth;  
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

// function assessmentlist($refid,$email){

// 	   $userauth = $_SESSION['userdata']['authentication_token'];
// 	   //$headers = array();
// 	   $headers['Content-length'] = '0';
//        $headers['Content-type'] = 'application/json';
// 	   $headers['Authorization'] = 'user-token: '.$userauth;
//        //$refid = '5db204ca5fd8db12b6474c62';
//        $refid = $refid;
// 	   $post = array('referral_id'=>$refid,'email'=>$email); 
// 	   $curl_handle=curl_init();
// 	   curl_setopt($curl_handle,CURLOPT_URL,API_URL.'rfl_assessments');
// 	   curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
// 	   curl_setopt($curl_handle, CURLOPT_POST ,true);	  
// 	   curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $post);
// 	   curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
// 	   $buffer = curl_exec($curl_handle);
// 	   curl_close($curl_handle);
// 	   if (empty($buffer)){
// 	      print "Nothing returned from url.<p>";
// 	   }
// 	   else{
// 	  	  if(!empty($buffer)){
// 	  	  	$result = json_decode(json_encode(json_decode($buffer)), true);
//             return $result;
// 	  	  }
// 	   }

// }

function assessmentlist($refid,$email){

	   $userauth = $_SESSION['userdata']['authentication_token'];
	   //$headers = array();
	   $headers['Content-length'] = '0';
       $headers['Content-type'] = 'application/json';
	   $headers['Authorization'] = 'user-token: '.$userauth;
       //$refid = '5db204ca5fd8db12b6474c62';
       $refid = $refid;
	   $post = array('referral_id'=>$refid,'email'=>$email); 
	   $curl_handle=curl_init();
	   curl_setopt($curl_handle,CURLOPT_URL,API_URL.'rfl_assessments');
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
        //echo "<pre>";
      //print_r($detaildata); die;
		$$detaildata = stripslashes_array($detaildata);
       $userauth = $_SESSION['userdata']['authentication_token'];
       $first_name = ucfirst($detaildata['first_name']);
       $last_name  = $detaildata['last_name'];
       $dob        = $detaildata['date_of_birth'];
       $gender     = $detaildata['gender'];
       $mobile     = $detaildata['patient_phone'];
       $contacttype = $detaildata['mode_of_contact'];
       $zipcode    = $detaildata['patient_zipcode'];
       $patientemail = $detaildata['patient_email'];
       $policyid = $detaildata['patient_coverage_id'];
       $healthcare_coverage = $detaildata['healthcare_coverage'];
       $client_consent = $detaildata['client_consent'];
       $emergency_contact_fName = $detaildata['emergency_contact_fName'];
       $emergency_contact_email = $detaildata['emergency_contact_email'];
       $emergency_contact_phone = $detaildata['emergency_contact_phone'];
       $primary_care_physician = $detaildata['primary_care_physician'];
        $additional_fields    = isset($detaildata['additional'])?$detaildata['additional']:'';
        $additional_keys    = isset($detaildata['additionalkeys'])?$detaildata['additionalkeys']:'';

       if((!empty($additional_fields) & is_array($additional_fields)) && (!empty($additional_keys) & is_array($additional_keys))){
          $additionalfields = array_filter($additional_fields);
          $additionalkeys = array_filter($additional_keys);
          	if(is_array($additionalkeys) && is_array($additionalfields)){
          		$additional_fields_array = array_combine($additionalkeys, $additionalfields);
          	}
         
       }else{
       	$additional_fields_array = '';
       }
	   $headuserauth = "Authorization: user-token ".$userauth;
       $headers['Content-type']    = 'Content-Type: application/json';
	   $headers['Authorization']   = 'user-token: '.$userauth;
       
	   
	   if(!empty($additional_fields_array)){
          $post = array('patient_id'=>$patient_id,'email'=>$email,'first_name'=>$first_name,'last_name'=>$last_name,'date_of_birth'=>$dob,'gender'=>$gender,'patient_phone'=>$mobile,'patient_email'=>$patientemail,'patient_zipcode'=>$zipcode,'healthcare_coverage'=>$healthcare_coverage,'patient_coverage_id'=>$policyid,'mode_of_contact'=>$contacttype,'client_consent'=>$client_consent,'emergency_contact_fName'=>$emergency_contact_fName,'emergency_contact_email'=>$emergency_contact_email,'emergency_contact_phone'=>$emergency_contact_phone,'primary_care_physician'=>$primary_care_physician,'caller_additional_fields'=>$additional_fields_array);
	   }else{
       	 $post = array('patient_id'=>$patient_id,'email'=>$email,'first_name'=>$first_name,'last_name'=>$last_name,'date_of_birth'=>$dob,'gender'=>$gender,'patient_phone'=>$mobile,'patient_email'=>$patientemail,'patient_zipcode'=>$zipcode,'healthcare_coverage'=>$healthcare_coverage,'patient_coverage_id'=>$policyid,'mode_of_contact'=>$contacttype,'client_consent'=>$client_consent,'emergency_contact_fName'=>$emergency_contact_fName,'emergency_contact_email'=>$emergency_contact_email,'emergency_contact_phone'=>$emergency_contact_phone,'primary_care_physician'=>$primary_care_physician);
	      
       }

 // echo '<pre>'; print_r($post); die;

	   $datastring = json_encode($post);
	   //echo $datastring; die; 
	   $curl_handle=curl_init();
	   curl_setopt($curl_handle,CURLOPT_URL,API_URL.'update_patient');
	   curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers); 
       curl_setopt($curl_handle, CURLOPT_CUSTOMREQUEST, "POST");
       curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $datastring);
       curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	   
	   $buffer = curl_exec($curl_handle);
	   curl_close($curl_handle);
	   
	   
	   //echo "<pre>";
     // print_r($buffer); die;
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
       $$referraldata = stripslashes_array($referraldata);
       $userauth      = $_SESSION['userdata']['authentication_token'];
       $referral_name = $referraldata['ref_name'];
       $due_date      = $referraldata['ref_due_date'];
       $urgency       = $referraldata['ref_urgency'];
       $source        = $referraldata['ref_source'];
       $referral_description     = $referraldata['ref_desc'];
       $follow_up_date     = $referraldata['follow_up_date'];
	   $ref_note  = $referraldata['ref_note'];
	 //  $ref_additional_fields = stripslashes_array($referraldata['ref_additional_fields']);
	 $ref_additional_fields = $referraldata['ref_additional_fields'];

       
// echo '<pre>'; print_r($ref_additional_fields);die;
	   //$headers = array();
	   $headers['Content-length'] = '0';
       $headers['Content-type'] = 'application/json';
	   $headers['Authorization'] = 'user-token: '.$userauth;

		if(!empty($ref_additional_fields))
		{
        //$post = $ref_additional_fields;
	$post = array('referral_id'=>$referral_id,'email'=>$email,'referral_name'=>$referral_name,'due_date'=>$due_date,'urgency'=>$urgency,'source'=>$source,'referral_description'=>$referral_description,'follow_up_date'=>$follow_up_date,'ref_note'=>$ref_note, 'ref_additional_fields' => json_encode($ref_additional_fields)); 
		}
		else{
			$post = array('referral_id'=>$referral_id,'email'=>$email,'referral_name'=>$referral_name,'due_date'=>$due_date,'urgency'=>$urgency,'source'=>$source,'referral_description'=>$referral_description,'follow_up_date'=>$follow_up_date,'ref_note'=>$ref_note); 
		}

		//$arr2 = (json_encode$ref_additional_fields);

		//$datastring=array_merge($post,$ref_additional_fields);
  
      //$datastring = json_encode($post);
		//	echo  var_dump(json_decode($datastring,true));;die;
		// print_r(json_decode($datastring,true));die;
		$curl_handle=curl_init();
	   curl_setopt($curl_handle,CURLOPT_URL,API_URL.'rfl_update');
	   curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
	   curl_setopt($curl_handle, CURLOPT_CUSTOMREQUEST, "POST");
	   curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $post);
	   curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);

	   $buffer = curl_exec($curl_handle);
	  // print_r($buffer);
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
	$postData = stripslashes_array($postData);
	   $userauth      = $_SESSION['userdata']['authentication_token'];
       $referral_name = $postData['referral_name'];
     //  $due_date      = $postData['due_date'];
       $urgency       = $postData['urgency'];
       $source        = $postData['source'];
       $referral_description     = $postData['description'];
	   $ref_note = $postData['ref_note'];
	  
	  
	   $followup_date = $postData['followup_date'];
	   
	   //$additional_fields    = !empty($postData['additional'])?$detaildata['additional']:'';
        //$additional_keys    = !empty($postData['additionalkeys'])?$detaildata['additionalkeys']:'';
		
		$additional_fields    =  $postData['additional'];
		$additional_keys   = $postData['additionalkeys'];
 
 
       if((!empty($additional_fields) & is_array($additional_fields)) && (!empty($additional_keys) & is_array($additional_keys))){
          $additionalfields = array_filter($additional_fields);
          $additionalkeys = array_filter($additional_keys);
          	if(is_array($additionalkeys) && is_array($additionalfields)){
          		$additional_fields_array = array_combine($additionalkeys, $additionalfields);
          	}
         
       }else{
       	$additional_fields_array = '';
       }
	   
	  
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
		if(!empty($additional_fields_array))
		{
			$post = array('patient_id'=>$patient_id,'email'=>$patient_email,'referral_name'=>$referral_name,'due_date'=>$due_date,'urgency'=>$urgency,'source'=>$source,'referral_description'=>$referral_description,'task'=>$tasks,'ref_note'=>$ref_note,'follow_up_date'=>$followup_date,'ref_additional_fields'=>json_encode($additional_fields_array)); 
		}
		else{
$post = array('patient_id'=>$patient_id,'email'=>$patient_email,'referral_name'=>$referral_name,'due_date'=>$due_date,'urgency'=>$urgency,'source'=>$source,'referral_description'=>$referral_description,'task'=>$tasks,'ref_note'=>$ref_note,'follow_up_date'=>$followup_date); 
		}
// echo '<pre>'; print_r($post);die;
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
//echo '<pre>'; print_r($postData);
		
		$postData = stripslashes_array($postData);
		//echo '<pre>'; print_r($postData);
	   $userauth      = $_SESSION['userdata']['authentication_token'];
	   $task_type       = $postData['task_type']; 
       $solution_id = $postData['solution_id'];
       $referral_id = $postData['referral_id'];
       
       $task_status        = $postData['task_status'];
       $task_owner        = $postData['task_owner'];
       $provider        = $postData['provider'];
       $task_description     = $postData['task_description'];
	   $task_additional_fields = $postData['task_additional_fields'];
	   $task_note = $postData['task_note'];
      // $task_deadline      = date('Y-m-d' ,strtotime($postData['task_deadline']));
	  
	  $additional_fields    = !empty($postData['additional'])?$postData['additional']:'';
        $additional_keys    = !empty($postData['additionalkeys'])?$postData['additionalkeys']:'';
		//$additional_fields    = $postData['additional'];
		//$additional_keys  $postData['additionalkeys'];
       if((!empty($additional_fields) & is_array($additional_fields)) && (!empty($additional_keys) & is_array($additional_keys))){
          $additionalfields = array_filter($additional_fields);
          $additionalkeys = array_filter($additional_keys);
          	if(is_array($additionalkeys) && is_array($additionalfields)){
          		$additional_fields_array = array_combine($additionalkeys, $additionalfields);
          	}
         
       }else{
       	$additional_fields_array = '';
       }
	   

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

       if(!empty($additional_fields_array))
		{ 
	   $post = array('solution_id'=>$solution_id,'referral_id'=>$referral_id,'email'=>$patient_email,'task_type'=>$task_type,'task_status'=>$task_status,'task_owner'=>$task_owner,'provider'=>$provider,'task_description'=>$task_description,'task_deadline'=>$task_deadline,'patient_document'=>$patientdocument,'task_additional_fields'=>json_encode($additional_fields_array),'task_note'=>$task_note); 
	   }
		else{
			 
		$post = array('solution_id'=>$solution_id,'referral_id'=>$referral_id,'email'=>$patient_email,'task_type'=>$task_type,'task_status'=>$task_status,'task_owner'=>$task_owner,'provider'=>$provider,'task_description'=>$task_description,'task_deadline'=>$task_deadline,'patient_document'=>$patientdocument,'task_note'=>$task_note); 
		}
		
		//echo '<pre>'; print_r($post);die;
		
	   $curl_handle=curl_init();
	   curl_setopt($curl_handle,CURLOPT_URL,API_URL.'tsk_create');
	   curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	   curl_setopt($curl_handle, CURLOPT_POST ,true);	  
	   curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $post);
	   curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
	   $buffer = curl_exec($curl_handle); 
//echo $buffer;die;
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
	
		$patientData = stripslashes_array($patientData);
	   $userauth      = $_SESSION['userdata']['authentication_token'];
       $first_name = ucfirst($patientData['first_name']);
       $last_name       = $patientData['last_name']; 
       $patient_email        = $patientData['patient_email'];
       $patient_phone        = $patientData['patient_phone'];
       $patient_coverage_id        = $patientData['patient_coverage_id'];
       $healthcare_coverage     = $patientData['healthcare_coverage'];
       $patient_zipcode     = $patientData['patient_zipcode'];
       $mode_of_contact     = $patientData['mode_of_contact'];
       $primary_care_physician     = $patientData['primary_care_physician'];
       $emergency_contact_fName     = $patientData['emergency_contact_fName'];
       $emergency_contact_phone     = $patientData['emergency_contact_phone'];
       $emergency_contact_email     = $patientData['emergency_contact_email'];
       $client_consent     = $patientData['client_consent'];
       $mode_of_contact     = $patientData['mode_of_contact'];
       $date_of_birth      = $patientData['date_of_birth'];
	   //echo $date_of_birth ;die;
	   //$headers['Content-length'] = '0';
       //$headers['Content-type'] = 'application/json';
	   //$headers['Authorization'] = 'user-token: '.$userauth;
	   //$post = array('email'=>$email,'first_name'=>$first_name,'last_name'=>$last_name,'patient_email'=>$patient_email,'patient_phone'=>$patient_phone,'patient_coverage_id'=>$patient_coverage_id,'healthcare_coverage'=>$healthcare_coverage,'patient_zipcode'=>$patient_zipcode,'date_of_birth'=>$date_of_birth,'mode_of_contact'=>$mode_of_contact,'primary_care_physician'=>$primary_care_physician,'emergency_contact_fName'=>$emergency_contact_fName,'emergency_contact_phone'=>$emergency_contact_phone,'client_consent'=>$client_consent,'emergency_contact_email'=>$emergency_contact_email); 
        
		$additional_fields    = isset($patientData['additional'])?$patientData['additional']:'';
        $additional_keys    = isset($patientData['additionalkeys'])?$patientData['additionalkeys']:'';

       if((!empty($additional_fields) & is_array($additional_fields)) && (!empty($additional_keys) & is_array($additional_keys))){
          $additionalfields = array_filter($additional_fields);
          $additionalkeys = array_filter($additional_keys);
          	if(is_array($additionalkeys) && is_array($additionalfields)){
          		$additional_fields_array = array_combine($additionalkeys, $additionalfields);
          	}
         
       }else{
       	$additional_fields_array = '';
       }
	   $headuserauth = "Authorization: user-token ".$userauth;
       $headers['Content-type']    = 'Content-Type: application/json';
	   $headers['Authorization']   = 'user-token: '.$userauth;
       
	   
	   if(!empty($additional_fields_array)){
         // $post = array('patient_id'=>$patient_id,'email'=>$email,'first_name'=>$first_name,'last_name'=>$last_name,'date_of_birth'=>$dob,'gender'=>$gender,'patient_phone'=>$mobile,'patient_email'=>$patientemail,'patient_zipcode'=>$zipcode,'healthcare_coverage'=>$healthcare_coverage,'patient_coverage_id'=>$policyid,'mode_of_contact'=>$contacttype,'client_consent'=>$client_consent,'emergency_contact_fName'=>$emergency_contact_fName,'emergency_contact_email'=>$emergency_contact_email,'emergency_contact_phone'=>$emergency_contact_phone,'primary_care_physician'=>$primary_care_physician,'caller_additional_fields'=>$additional_fields_array);
	      $post = array('email'=>$email,'first_name'=>$first_name,'last_name'=>$last_name,'patient_email'=>$patient_email,'patient_phone'=>$patient_phone,'patient_coverage_id'=>$patient_coverage_id,'healthcare_coverage'=>$healthcare_coverage,'patient_zipcode'=>$patient_zipcode,'date_of_birth'=>$date_of_birth,'mode_of_contact'=>$mode_of_contact,'primary_care_physician'=>$primary_care_physician,'emergency_contact_fName'=>$emergency_contact_fName,'emergency_contact_phone'=>$emergency_contact_phone,'client_consent'=>$client_consent,'emergency_contact_email'=>$emergency_contact_email,'caller_additional_fields'=>$additional_fields_array); 
	   }else{
           $post = array('email'=>$email,'first_name'=>$first_name,'last_name'=>$last_name,'patient_email'=>$patient_email,'patient_phone'=>$patient_phone,'patient_coverage_id'=>$patient_coverage_id,'healthcare_coverage'=>$healthcare_coverage,'patient_zipcode'=>$patient_zipcode,'date_of_birth'=>$date_of_birth,'mode_of_contact'=>$mode_of_contact,'primary_care_physician'=>$primary_care_physician,'emergency_contact_fName'=>$emergency_contact_fName,'emergency_contact_phone'=>$emergency_contact_phone,'client_consent'=>$client_consent,'emergency_contact_email'=>$emergency_contact_email);    
       }

	   $datastring = json_encode($post);
		
		
	   $curl_handle=curl_init();
	   curl_setopt($curl_handle,CURLOPT_URL,API_URL.'create_patient');
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
	  	  	return $result;
	  	  }
	   }
}

function updateuserprofile($profiledata){
	$$profiledata =  stripslashes_array($profiledata);
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
	//print_r($search);die;
	   $userauth = $_SESSION['userdata']['authentication_token'];
	   $headers['Content-length'] = '0';
       $headers['Content-type'] = 'application/json';
	   $headers['Authorization'] = 'user-token: '.$userauth;
	   //$post = array('patient_id'=>$patient_id,'email'=>$email);
	    /* if(!empty($search['population']) || !empty($search['location']) || !empty($search['services_type']) || !empty($search['location_type'])){*/
	    	//echo "<pre>";
	    	//print_r($search);

	    	if(!empty($search['tags'])){
	   	   
                $postsearch['tags']  = explode(",",$search['tags']);
                
	   	    }
	    if(empty($search['location']) && empty($search['population']) &&  empty($search['services_type']) && empty($search['provider_name'])){
	    	//echo "iffcondition";
	    	//$radiusarray = array('value' => 'WA', 'type' => 'State');
            //$radiusarray = array('conditional' => '','value' => "98168");
           // $postsearch['GeoScope']  = $radiusarray;
            $postsearch['application_name']  = "default";
            $datastring = json_encode($postsearch);
	    }else if(!empty($search['location']) || !empty($search['population']) ||  !empty($search['services_type']) || !empty($search['provider_name'])){
	    	//echo "elsecondition";
	   	    $postsearch = array();
	   	    if(!empty($search['population'])){
	   	    	foreach ($search['population'] as $populatioarraykey => $populatioarraykevalue) {
	   	    		$newpopulatioaaray[] = "P_".$populatioarraykevalue;
	   	    	}
	   	    	$populationarray = array('conditional' => 'OR','value' => $newpopulatioaaray);
	   	    	$postsearch['population']  = $populationarray;
	   	    }   

	   	    if(!empty($search['services_type'])){
	   	    	foreach ($search['services_type'] as $servicearraykey => $servicearraykevalue) {
	   	    		$newserviceaaray[] = "S_".$servicearraykevalue;
	   	    	}

                $providerarray = array("type" => "group", "conditional" => "OR",'value' => $newserviceaaray);
                $postsearch['services']  = $providerarray;
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



	   	    if(!empty($search['location']) || !empty($search['location_type'])){
					if(($search['location_type'] == 'Virtual') || ($search['location_type'] == 'National')){
						$radiusarray = array('value' => $search['location_type'], 'type' => 'Scope');
					}
					else{
						$radiusarray = array('value' => $search['location'], 'type' => $search['location_type']);
					}
                $postsearch['GeoScope']  = $radiusarray;
                
	   	    }

	   	    

	   	     if(!empty($search['provider_name']) ){
	   	   
	   	    	//$radiusarray = array('value' => $search['location'], 'type' => 'State');
                $postsearch['name']  = $search['provider_name'];
                
	   	    }
		    
	    	    if(!empty($search['tags'])){
                	$postsearch['tags']  = explode(",",$search['tags']);
	   	    }


	   	    $postsearch['application_name']  = "default";
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

	   //echo $search['location'];
	   //echo $search['location_type'];
	  //echo $datastring;die;
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
	$referralTaskdata = stripslashes_array($referralTaskdata);
       $userauth      = $_SESSION['userdata']['authentication_token'];
       $task_type = $referralTaskdata['task_type'];
       $task_description      = $referralTaskdata['task_description'];
       $task_status       = $referralTaskdata['task_status'];
       $task_provider        = $referralTaskdata['task_provider'];
       $task_owner     = $referralTaskdata['task_owner'];
       $task_deadline     = $referralTaskdata['task_deadline'];
	   $task_note = $referralTaskdata['task_note'];
       
       if(!empty($documents)){
       	 if(!empty($documents['tmp_name']) && !empty($documents['name'])){
			$tmpfile = $documents['tmp_name'];
			$filename = basename($documents['name']);
			$patientdocument = curl_file_create($tmpfile, $documents['image']['type'], $filename);
       	}else{
       		$patientdocument = "";
       	  
       	}
       }
 

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
	   unset($referralTaskdata['additionalkeys']);
	    unset($referralTaskdata['additional']);
	
 //echo '<pre>'; print_r($referralTaskdata);die;
	  
	   //$headers = array();
	   $headers['Content-length'] = '0';
       $headers['Content-type'] = 'application/json';
	   $headers['Authorization'] = 'user-token: '.$userauth;
       
if(!empty($additional_fields_array))
{

	   $post = array('task_id'=>$task_id,'email'=>$email,'task_type'=>$task_type,'task_description'=>$task_description,'task_status'=>$task_status,'provider'=>$task_provider,'task_owner'=>$task_owner,'task_deadline'=>$task_deadline,'patient_document'=>$patientdocument,'task_note'=>$task_note,'task_additional_fields'=>json_encode($additional_fields_array)); 
}
else
{
 $post = array('task_id'=>$task_id,'email'=>$email,'task_type'=>$task_type,'task_description'=>$task_description,'task_status'=>$task_status,'provider'=>$task_provider,'task_owner'=>$task_owner,'task_deadline'=>$task_deadline,'patient_document'=>$patientdocument,'task_note'=>$task_note); 
}
       //echo '<pre>'; print_r($post);die;
	   $curl_handle=curl_init();
	   curl_setopt($curl_handle,CURLOPT_URL,API_URL.'tsk_update');
	   curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	   curl_setopt($curl_handle, CURLOPT_POST ,true);	  
	   curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $post);
	   curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
	   $buffer = curl_exec($curl_handle);
//echo $buffer;die;
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
	  // $task_id = '5c1d203c5fd8db2471ba0dcd';
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
	$need_description     =      $needdata['need_description'];
	$interview_id     =      $needdata['interview_id'];
	$referral_id     =      $needdata['referral_id'];
	$headers['Content-length'] = '0';
	$headers['Content-type'] =   'application/json';
	$headers['Authorization'] =  'user-token: '.$userauth;      
	$post = array('email'=>$email,'need_title'=>$need_title,'need_description'=>$need_description,'interview_id'=>$interview_id,'referral_id'=>$referral_id); 
	//echo "<pre>";
	//print_r($post); die;
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
                        //print_r("Hello" + $buffer);
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
       
	   $post = array('interview_id'=>$iid,'referral_id'=>$iid,'email'=>$email); 
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

// BEGIN SAMEER 10292019
function interviewDetailsTest($iid,$email){

	   $userauth = $_SESSION['userdata']['authentication_token'];
	   //$headers = array();
	   $headers['Content-length'] = '0';
       $headers['Content-type'] = 'application/json';
	   $headers['Authorization'] = 'user-token: '.$userauth;
       
	   $post = array('interview_id'=>$iid,'referral_id'=>$iid,'email'=>$email); 
	   $curl_handle=curl_init();
	   curl_setopt($curl_handle,CURLOPT_URL,API_URL.'int_details_test');
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
// END SAMEER

function updateInterviewDetails($interviewdata,$interview_id,$email)
{
        //echo json_encode($interviewdata);exit;
       $userauth = $_SESSION['userdata']['authentication_token'];
       $first_name = $interviewdata['caller_first_name'];
       $last_name  = isset($interviewdata['caller_last_name'])?$interviewdata['caller_last_name']:'';
       $dob        = date('Y-m-d',strtotime($interviewdata['caller_dob']));
       $address     = isset($interviewdata['caller_address'])?$interviewdata['caller_address']:'';
       $zipcode     = isset($interviewdata['caller_zipcode'])?$interviewdata['caller_zipcode']:'';
       $state = isset($interviewdata['caller_state'])?$interviewdata['caller_state']:'';
       $additional_fields    = isset($interviewdata['caller_additional_fields'])?$interviewdata['caller_additional_fields']:'';
       $additional_keys    = isset($interviewdata['caller_additional_keys'])?$interviewdata['caller_additional_keys']:'';

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


function applicationVersion($email, $authToken)
{
       $headers['Content-length'] = '0';
       $headers['Content-type'] = 'application/json';
       $headers['Authorization'] = 'user-token: '.$authToken;   
	   $post = array('email'=>$email); 
	   $url = API_URL.'app_version'; 
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

function chcAuth($email, $originURL)
{
	   $post = ['userEmail' => $email,'originURL'=>$originURL];
	   $headers['Authorization'] = 'user-token: '.$authToken;  
	   $url = API_URL."chcAuthentication"; 
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

function chcAuthNextStep($email)
{
	   $post = ['googleOauthLogin' => 'true','email'=> $email];  
	   $url = API_URL."sessions"; 
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


function inviteOrganization($name,$email,$application_url,$task_id,$homepage_url)
{

       $userauth = $_SESSION['userdata']['authentication_token'];
	   $headers['Content-length'] = '0';
       $headers['Content-type'] = 'application/json';
	   $headers['Authorization'] = 'user-token: '.$userauth;
	  
	 $post = array('task_id'=>$task_id,'user_email'=>$email,'name'=>$name,'application_url'=>$application_url,'email'=>$_SESSION['userdata']['email']); 
       
	   $curl_handle=curl_init();
	   curl_setopt($curl_handle,CURLOPT_URL,API_URL.'org_invite');
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

function invite_new_provider($email,$org_url,$org_name)
{

       $userauth = $_SESSION['userdata']['authentication_token'];
	   $headers['Content-length'] = '0';
       $headers['Content-type'] = 'application/json';
	   $headers['Authorization'] = 'user-token: '.$userauth;
	  
	 $post = array('email'=>$email,'org_url'=>$org_url,'org_name'=>$org_name); 
	 
       
	   $curl_handle=curl_init();
	   curl_setopt($curl_handle,CURLOPT_URL,API_URL.'invite_new_provider');
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

function getTheme($email, $authToken)
{
	   $post = ['email' => $email];
	   $headers['Authorization'] = 'user-token: '.$authToken;  
	   $url = API_URL.'get_theme'; 
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


function getPatientsReport($email, $authToken,$duration='',$date_filter='')
{
	   $post = ['email' => $email,'duration'=>$duration,'date_filter'=>$date_filter];
	   $headers['Authorization'] = 'user-token: '.$authToken;  
	   $url = API_URL.'clients_created_by_a_navigator'; 
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
 
function getAssessments($email, $authToken,$duration='',$date_filter=''){
	   $post = ['email' => $email,'duration'=>$duration,'date_filter'=>$date_filter];
	   $headers['Authorization'] = 'user-token: '.$authToken;  
	   $url = API_URL.'assessment_created_by_a_navigator'; 
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


function getTaskTransfered($email, $authToken,$duration='',$date_filter=''){
	   $post = ['email' => $email,'duration'=>$duration,'date_filter'=>$date_filter];
	   $headers['Authorization'] = 'user-token: '.$authToken;  
	   $url = API_URL.'task_transferred_by_navigator'; 
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


function getRefferalAccepted($email, $authToken,$duration='',$date_filter=''){
	   $post = ['email' => $email,'duration'=>$duration,'date_filter'=>$date_filter];
	   $headers['Authorization'] = 'user-token: '.$authToken;  
	   $url = API_URL.'requests_accepted_by_navigator'; 
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

function updateTasktoRevert($task_id,$email){
	   
	   $post = array('task_id' => $task_id,'email'=>$email);
	   //$headers['Content-length'] = '0';
       //$headers['Content-type'] = 'application/json';
	   $userauth = $_SESSION['userdata']['authentication_token'];
	   $headers['Authorization'] = 'user-token: '.$userauth;   
	   $url = API_URL.'revert_request'; 
	   $curl_handle=curl_init();
	   curl_setopt($curl_handle,CURLOPT_URL,$url);
	   curl_setopt($curl_handle, CURLOPT_POST ,true);
	   curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $post);
	   curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
	   curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
	   $buffer = curl_exec($curl_handle);
	   //print_r( $buffer);exit;
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


function forgotPassword($email)
{
	   $post = ['email'=> $email];  
	   $url = API_URL."forgot_password";
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


?>
