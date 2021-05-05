<?php

require 'classSimpleMail.php';

$mail = new SimpleMail('smtp.gmail.com', 587, 'tls');
$mail->auth('fedi.naimi@esprit.tn', 'ba7bou7191fedi');

$mail->from('burt.johnson@hotmail.com', 'REY DEL MEXICO');
$mail->to('fadibrouse@gmail.com', 'John Smith');

$mail->subject = 'WELCOME';
$mail->message = '<WELCOME TO MAZAYA </h3>
                  <b>votre commande est en cours de traitement:</b> <a href="http://localhost/WEB-2A/view/front/afficherlignecommande.php">this is the link</a> ';

if ($mail->send())
	echo 'Mail sent successfully.';
else
	echo 'Error: ' . $mail->error;
