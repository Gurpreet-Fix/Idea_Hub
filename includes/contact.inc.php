<?php
if (isset($_POST['submit'])){
	$name= $_POST['name'];
	$emailfrom=$_POST['mail'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];

	
	$to="gurpreetrai1126@gmail.com";
	
	$headers="Form: ".$mailfrom;
	$txt ="You have recieved an E-mail from ".$name.".\n\n".$message;
	
	mail($to, $subject, $txt, $headers);
	header("Location: ../contact.php?mail=sent");
}else{
	header("Location: ../contact.php?mail=failed");
	exit();
}
