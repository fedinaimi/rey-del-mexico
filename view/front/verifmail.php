<?php
require 'SimpleMail-master/classSimpleMail.php';
function verifmail($to)
{
$m= $to;

$mail = new SimpleMail('smtp.gmail.com', 587, 'tls');
$mail->auth('fedi.naimi@esprit.tn', 'ba7bou7191fedi');

$mail->from('burt.johnson@hotmail.com', 'REYDELMEXICO');
$mail->to('fadibrouse@gmail.com', 'fedi naimi');
$hash=md5(rand(0,500));

$mail->subject = 'WELCOME';
$mail->message = '<WELCOME rey del mexico </h3>
                  <b>Click this <a href="http://localhost/WEB-2A/view/front/afficherlignecommande.php">link</a></b> ';

if ($mail->send())
{
  return true;
	echo 'Mail sent successfully.';
}
else
{
  return false;
	echo 'Error: ' . $mail->error;
}
}
?>
