<?php 
if(!empty($_POST['status'])){
$status = $_POST['status'];
$id = $_POST['id'];

include('../inc/connection.php');
$conn = DB(); 
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
$sql = $conn->prepare("UPDATE task SET status='$status' WHERE id='$id'");
$sql->execute();
echo $count = $sql->rowCount();
}


?>