<?php

	$name = $_POST["author"];
	$email = $_POST["email"];
	$website = $_POST["url"];
	$comment = $_POST["comment"];
	$date = time();
	
	if(!empty($name) && !empty($email) && !empty($comment)) {
    try  
    {  
       include('inc/connection.php');
       $conn = DB(); 
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    $cdata_record = [
        'name' => $name,
        'email' => $email,
        'website' => $number,
        'comment' => $message,
		'date' => $date,
            ];        
$sqlcomment = $conn->prepare("INSERT INTO comment (name,email,website,comment,date)VALUES ('$name','$email','$website','$comment','$date')");
    $qlcmnt = $sqlcomment->execute($cdata_record); 
	if ($qlcmnt) {
        $msg = "New record has been added successfully !";
     } else {
        $msg =  "Not Inserted";
     }	
    }  
    catch(PDOException $error)  
    {  
         $comment = $error->getMessage();  
    }
	
	$sqlcomment = $conn->prepare("INSERT INTO comment (name,email,website,comment,date)VALUES ('$name','$email','$website','$comment','$date')");
    $qlcmnt = $sqlcomment->execute();
	if ($qlcmnt) {
        $msg = "New record has been added successfully !";
     } else {
        $msg =  "Not Inserted";
     }
	  header("Location:thankyou.php");
} else {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}

?>