<?php
	$name=$_POST['isim'];
	$visitor_email=$_POST['email'];
	$message=$_POST['mesaj'];


	$email_from='dnzcnsonmez52@gmail.com';
	
	$email_subject="Yeni Form ";

	$email_body="User Name: $name.\n".
						"User Email: $visitor_email.\n".
						   "User Message: $message.\n";

	$to= "dnzcnsonmez52@gmail.com";
	
	$headers="From: $email_from\r\n";

	$headers = "Reply-To: $visitor_email\r\n";

	mail($to,$email_subject,$email_body,$headers);

	header("location: index.html");


?>