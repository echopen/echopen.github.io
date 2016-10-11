<?php
// correspond au form de la page Contact

$email = htmlentities($_POST['con_mail'], ENT_QUOTES);
$name = htmlentities($_POST['con_name'], ENT_QUOTES);
$suj = htmlentities($_POST['sujet'], ENT_QUOTES);
$mess = htmlentities($_POST['con_message'], ENT_QUOTES);

// içi pour changer email du destinaire
$to = 'contact@echopen.org';
$subject = ($sub != '') ? $sub : 'test de contact echopen';

$message = '<strong>Name : </strong>'.$name.'<br/><br/>';
$message .= '<strong>Email : </strong>'.$email.'<br/><br/>';
$message .= '<strong>Subject : </strong>'.$suj.'<br><strong>Message:</strong>'.$mess.'<br/><br/>';


$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <'.$email.'>' . "\r\n";

mail($to,$subject,$message,$headers);

echo 1;