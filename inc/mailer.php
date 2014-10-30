<?php

$to = 'jim@polarbeardesign.net';
$citizen_email = $_POST['citizen_email'];
$subject = $_POST['email_subject'];
$message = $_POST['message'];
$headers = 'From:';
$headers .= $citizen_email;
$headers .= "\r\n";
mail($to, $subject, $message, $headers);


?>