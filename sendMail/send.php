<?php
/**
 * Created by PhpStorm.
 * User: ashot
 * Date: 5/30/18
 * Time: 11:44 PM
 */


$name = $_GET["name"];
$mail = $_GET["mail"];
$desc = $_GET["description"];

//$aa = fopen("newfile7.txt","a");
//$txt =" ----".$name."- ---$mail-------$desc----\n";
//fwrite($aa,$txt);
//fclose($aa);

$to = 'ashotgharakeshishyan@gmail.com';
$subject = $name;
$message = $desc;
$headers = $mail;
mail($to, $subject, $message, $headers);
