<?php

$g_name = $g_cname = $g_email = $g_phone = $g_message ="";

$g_name = $_POST['g_name'];
$g_cname = $_POST['g_cname'];
$g_email= $_POST['g_email'];
$g_phone= $_POST['g_number'];
$g_message= $_POST['g_message'];
		if(!empty($g_name)) {
		try  
		{  
        include('inc/connection.php');
        $conn = DB(); 
       
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
		 $data_records = [
			'name' => $g_name,
			'company' => $g_cname,
			'email' => $g_email,
			'phone' => $g_phone,
			'project' => $g_message,
            ];        
		$g_sql = "INSERT INTO get_quote (name,company,email,phone,project) VALUES (:name,:company,:email,:phone,:project)";
		$conn->prepare($g_sql)->execute($data_records); 
		echo'success';
		 // header("Location:thankyou.php");
		}  
    catch(PDOException $error)  
    {  
         $message = $error->getMessage();  
    }

} else {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
?>







