 <?php
$name = $_POST['name'];
$email= $_POST['email'];
$number= $_POST['phone'];
$message= $_POST['message'];
if(!empty($name) && !empty($email) && !empty($message)) {
    try  
    {  
       include('inc/connection.php');
       $conn = DB(); 
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    $data_record = [
        'name' => $name,
        'email' => $email,
        'phone' => $number,
        'message' => $message,
            ];        
$sql = "INSERT INTO contact_user (name,email,phone,message) VALUES (:name,:email,:phone,:message)";
$conn->prepare($sql)->execute($data_record);        
    }  
    catch(PDOException $error)  
    {  
         $message = $error->getMessage();  
    }
    $to = "info@masterinfotech.com";
    $subject = "Mail From MasterInfotech";
    $txt = "Name: " . $name . "\r\n Email: " . $email . "\r\n Phone number: ". $number . "\r\n Message: " . $message;
    $headers = "From: info@masterinfotech.com" . "\r\n" . "CC:  @masterinfotech.com";
    mail($to, $subject, $txt, $headers);
    header("Location:thankyou.php");
} else {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}


