<?php
$name=$_POST['name'];
$email= $_POST['email'];
$content = $_POST['content'];

$to = 'ashotgharakeshishyan@gmail.com';
$subject = $name;
$message = $content;
$headers = $email;
mail($to, $subject, $message, $headers);
header("Location: ../index.html");