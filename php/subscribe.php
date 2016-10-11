<?php
// Correspond au form de la page Index

$firstname = htmlentities($_POST['first_name'], ENT_QUOTES);
$lastname = htmlentities($_POST['last_name'], ENT_QUOTES);
$email = htmlentities($_POST['news_mail'], ENT_QUOTES);


// içi pour changer email du destinaire
$to = 'contact@echopen.org';
$subject = ($sub != '') ? $sub : 'newsletter inscription';

$message = '<strong>first Name : </strong>'.$firstname.'<br/><br/>';
$message .= '<strong>last Name : </strong>'.$lastname.'<br/><br/>';
$message .= '<strong>email : </strong>'.$email.'<br>';


$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <'.$email.'>' . "\r\n";

mail($to,$subject,$message,$headers);

echo 1;