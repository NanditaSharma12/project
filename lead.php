<?php
//echo "<script>console.log('gone');</script>";
//die;
$message="";
$name = $_POST['name'];
$email= $_POST['email'];
$code= $_POST['code'];
$number= $_POST['phone'];
$mob= $code.'-'.$number;
$service= $_POST['service'];
$message= $_POST['message'];

if(!empty($name)) {
    try  
    {  
        include('inc/connection.php');

        $conn = DB(); 
       
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    $data_record = [
        'name' => $name,
        'email' => $email,
        'phone' => $mob,
        'service'=> $service,
        'message' => $message,
        
            ];        
$sql = "INSERT INTO leads (name,email,phone,service,message) VALUES (:name,:email,:phone,:service,:message)";
$conn->prepare($sql)->execute($data_record);  
echo'success';
//header("Location:thankyou.php");     
    }  
    catch(PDOException $error)  
    {  
         $message = $error->getMessage();  
    }
}
else{
  //  header("location:service-landing.php");
}

?>