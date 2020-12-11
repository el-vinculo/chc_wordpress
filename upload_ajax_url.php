

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

$documents = array();
if(!empty($_POST) || !empty($_FILES)){
       // echo '<pre>'; print_r($_POST);die;
        if(!empty($_FILES)){
            $documents = $_FILES['edit_patient_document'];
        }else{
            $documents = array();
        }
        $referralTaskdata = $_POST;

        $task_id  = $_POST['task_id'];
        $email   = $_SESSION['userdata']['email'];
		
		/*$additional_fields    = !empty($_POST['additional'])?$_POST['additional']:'';
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
	   $referralTaskdata['task_additional_fields'] = $additional_fields_array; */ 
	  
        $update = updateReferralTask($referralTaskdata,$task_id,$email,$documents);

        if(!empty($update)){
            if($update['status'] == 'ok'){
                $error = '11';
            }else{
                $error = 1;
            }
        }else{
            $error = 11;
        }
    }else{

        $error = 2;
        //echo "gofalse"; die; 
    }

    echo  $error;


?>

