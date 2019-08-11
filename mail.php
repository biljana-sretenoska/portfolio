<?php 
$email = $_POST['name'];
$message = $_POST['message'];
$formcontent = "From: $name \n Message: $message";
$recipient = "biljanasretenoska@yahoo.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent,$mailheader) or die("Error!");










?>