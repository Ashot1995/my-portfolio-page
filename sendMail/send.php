<?php
/**
 * Created by PhpStorm.
 * User: ashot
 * Date: 5/30/18
 * Time: 11:44 PM
 */


$name = $_POST["name"];
$mail = $_POST["mail"];
$desc = $_POST["description"];

ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
$from = ".'$mail.'";
$to = "ashotgharakeshishyan@gmail.com";
$subject = "$name";
$message = "$desc";
$headers = "From:" . $from;
mail($to,$subject,$message, $headers);
echo "The email message was sent.";
header('Location: ../index.html');

?>
