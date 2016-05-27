<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }

$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];

// Create the email and send the message
$to = 'tanzzunft@gmail.com;abian.baumgartner@gmail.com';
$email_subject = "Giessiefäscht Kontakt Formular:  $name";
$email_body = "Neue Nachricht.\n\n"."Details:\n\nName: $name\n\nEmail: $email_address\n\Nachricht:\n$message";
$headers = "From: noreply@giessifäscht.ch\n";
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
return true;
?>