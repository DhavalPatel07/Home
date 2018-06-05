<?php
$name=$_POST['name'];
$email=$_POST['email'];


$to      = $email;
$subject = 'the subject';
$message = 'hello';
$headers = 'From: onlyfortest0007@gmail.com' . "\r\n" .
    'Reply-To: onlyfortest0007@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
	
mail($to, $subject, $message, $headers);
?> 