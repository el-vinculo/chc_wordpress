

<?php
session_start();
error_reporting(1);
//$filename =  __DIR__.'ajax.php';
require_once('wp-config.php'); 
require_once('api.php');
//


$documents = array();
if(!empty($_POST) || !empty($_FILES)){
        
        if(!empty($_FILES)){
            $documents = $_FILES['edit_patient_document'];
        }else{
            $documents = array();
        }
        $referralTaskdata = $_POST;
        $task_id  = $_POST['task_id'];
        $email   = $_SESSION['userdata']['email'];
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

