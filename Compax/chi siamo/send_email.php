<?php
  // Includi la libreria di posta elettronica
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  
  require 'PHPMailer/src/Exception.php';
  require 'PHPMailer/src/PHPMailer.php';
  require 'PHPMailer/src/SMTP.php';

  // Recupera l'email dell'utente dal form
  $user_email = $_POST['email'];

  // Crea un'istanza della classe PHPMailer
  $mail = new PHPMailer();

  // Imposta il server SMTP per l'invio dell'email
  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'compaxsoftware@gmail.com';
  $mail->Password = 'compaxsoftware2022';
  $mail->SMTPSecure = 'tls';
  $mail->Port = 587;

  // Imposta il mittente e il destinatario dell'email
  $mail->setFrom('compaxsoftware@gmail.com', 'Compax Software');
  $mail->addAddress($user_email);

  // Imposta il contenuto dell'email
  $mail->isHTML(true);
  $mail->Subject = 'Benvenuto!';
  $mail->Body    = 'Grazie per esserti iscritto! Siamo felici di averti con noi.';
  $mail->AltBody = 'Grazie per esserti iscritto! Siamo felici di averti con noi.';

  // Invia l'email
  if(!$mail->send()) {
      echo 'L\'email non è stata inviata.';
      echo 'Mailer Error: ' . $mail->ErrorInfo;
  } else {
      echo 'Email inviata correttamente.';
  }
?>
