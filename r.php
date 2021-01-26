<?php
	$name = $POST['name'];
	$surname = $POST['surname'];
	$email = $POST['email'];
	$phone = $POST['phone'];
	$message = $POST['message'];
	
	$email_from = 'rishavkhiladi768@gmail.com';
	
	$email_subject = "New Form Submisssion";
	
	$email_body = "User Name : $name.\n".
					"User Mail : $email.\n".
						"User Message : $message.\n".
							"User Phone : $phone.\n";
	
	$to = "rishavkhiladi768@gmail.com";
	
	$headers = "From : $email_from \r\n";
	$headers = "Reply-to : $email\r\n";
	
	mail($to,$email_subject,$email_body,$headers);
	
	header("Loacation : index.html");
?>
	
	
	
	
	