<?php   
date_default_timezone_set("Asia/Kolkata");
session_start(); 
include('../inc/connection.php');
$message = "";  
try  
 {
  $conn = DB(); 
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

 if(isset($_SESSION["name"]))
  { 
	$username = $_SESSION['name'];
	$userid = $_SESSION["user_id"];
	$uip=$_SERVER['REMOTE_ADDR'];
	$logout = time();
	$date = date('d-m-Y');
	if($_SERVER['REMOTE_ADDR'] == '115.242.237.62'):
	$data = [
		'userid' => $userid,
		'logout' => $logout,
		'uip' => $uip,	
		'date' => $date,
		];
	$sql = "update attendance set logout = :logout where user_id = :userid and ip_address = :uip and date = :date";
	$conn->prepare($sql)->execute($data);	 
	endif;
	}  
 }
catch(PDOException $error)  
 {  
    $message = $error->getMessage();  
 }
 session_destroy(); 
 header("location:signin.php");  
 ?>  