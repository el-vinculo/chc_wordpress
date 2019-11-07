<?php

/**
 * Template Name: Download
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.get
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage healthcare
*/

?>

<?php
session_start();
error_reporting(1);
//$filename =  __DIR__.'ajax.php';
require_once('wp-config.php'); 
require_once('api.php');
//
if(!empty($_GET['path'])){
$host = 'https://dev7.resourcestack.com';
$filepath = $_GET['path'];
//echo "vikk"; $filepath; die; 
$download_path = $host.$filepath;
 
$file_to_download = $download_path;
$filesize =  $_GET['size'];
//echo $filesize; die;

header("Expires: 0");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache"); 
header("Content-Type: application/force-download");
header("Content-length: ".$filesize);
header('Content-disposition: attachment; filename='.basename($file_to_download));
readfile($file_to_download);
exit;

}else{
  echo "Sorry !! file path missing ";
}


?>

