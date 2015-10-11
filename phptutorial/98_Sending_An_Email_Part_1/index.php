<?php
$to = 'alex@phpacademy.org'
$subject = 'This is an email.';
$body = 'This is a test email\n\nHope you got it.';
$headers = 'From: someone@phpacademy.org';

if(mail($to, $subject, $body, $headers)){
	echo 'Email has been sent to '.$to;
}else{
	echo 'There was an error sending the email.';
}
?>