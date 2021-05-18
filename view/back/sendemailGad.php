<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $name = $_POST['nom'];
  $email = $_POST['email'];
  $message = "Bienvenue dans notre equipe. Nous sommes heureux de travailler avec vous :)";

  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'abdelkader.daghrour@esprit.tn'; // Gmail address which you want to use as SMTP server
    $mail->Password = '191JMT2184'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('abdelkader.daghrour@esprit.tn'); // Gmail address which you used as SMTP server
    $mail->addAddress($email ); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)
    
    $mail->isHTML(true);
    $mail->Subject = 'Bienvenue';
    $mail->Body = "<h3>Name : $name <br>Email: $email <br>Message : $message <br> Cordialement.</h3> ";

    $mail->send();
    $alert = '<div class="alert-success">
                 <span>Merci de faire partie de notre equipe des chefs.</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}
?>
