<?php
	//function quote(){
		//$msg='';
		//if(isset($_POST['getquote'])){	
			$g_name = $_POST['g_name'];
			$g_cname = $_POST['g_cname'];
			$g_email= $_POST['g_email'];
			$g_number= $_POST['g_number'];
			$g_message= $_POST['g_message'];
			
			/* $data_records = [
			'name' => $g_name,
			'company' => $g_cname,
			'email' => $g_email,
			'phone' => $g_number,
			'project' => $g_message,
            ];        
		$g_sql = "INSERT INTO get_quote (name,company,email,phone,project) VALUES (:g_name,:g_cname,:g_email,:g_number,:g_message)";
		$conn->prepare($g_sql)->execute($data_records); */
			
			 $g_sql = $conn->prepare("INSERT INTO get_quote (name,company,email,phone,project) VALUES ('$g_name','$g_cname','$g_email','$g_number','$g_message')");
			$g_ql = $g_sql->execute();
			if ($g_ql) {
			$msg = "New record has been added successfully !";
			} else {
			$msg =  "Not Inserted";
			} 
		//}
		//}
?>