<?php 
require("include/connect.php");
require("include/function.php");

	$firstname = mysql_real_escape_string($_POST['firstname']);
	$lastname = mysql_real_escape_string($_POST['lastname']);
	$phone = mysql_real_escape_string($_POST['phone']);
	$email = mysql_real_escape_string($_POST['email']);
	$message = mysql_real_escape_string($_POST['message']);
		if (empty($firstname) && empty($lastname) && empty($phone) && empty($email)  && empty($message)) {
			backTo("index.php");
		}else {
			$sql = mysql_query("INSERT INTO register (firstname, lastname, phone, email, message)
			VALUES ('$firstname','$lastname','$phone','$email','$message')");
		}
		if($sql) {
			backTo("index.php");
		}
mysql_close();
	
 ?>