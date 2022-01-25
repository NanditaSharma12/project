<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "mastetnr_masters_data";
    $conn=mysqli_connect($servername,$username,$password,$dbname);
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
		else{
			echo " connection successful" ;
		}
?>


<?php 

if(isset($_POST['comment_submit'])){
	$name = $_POST["name"];
	$email = $_POST["email"];
	$website = $_POST["website"];
	$comment = $_POST["comment"];
	$sql = "INSERT INTO comment (name,email,website,comment)VALUES ('$name','$email','$website','$comment')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
	
}
/*echo $name;
	echo $email;
	echo $website;
	echo $comment;*/



?>

<form action="" method="post" name="comment_form">

<p>Name:</p>
<input type="text" name="name" id="comment_name"/>
<p>Email:</p>
<input type="text" name="email" id="email_name"/>
<p>Website:</p>
<input type="text" name="website" id="site_name"/>
<p>Comment:</p>
<input type="text" name="comment" id="comment"/>

<button type="submit" id="comment_submit" name="comment_submit" >Submit</button>

</form>
 