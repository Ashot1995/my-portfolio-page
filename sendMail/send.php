<?php
$name=$_GET['name'];
$email= $_GET['email'];
$content = $_GET['content'];

$to = 'ashotgharakeshishyan@gmail.com';
$subject = $name;
$message = $content;
$headers = $email;
mail($to, $subject, $message, $headers);
header("Location: ../index.html");