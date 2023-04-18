 <?php
 if ($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_POST['action']) && $_POST['action'] == 'send_mail') {
  $to = "cedricbatina2021@gmail.com"; // replace with your own email address
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $headers = "From: $name <$email>" . "\r\n" .
   "Reply-To: $email" . "\r\n" .
   "X-Mailer: PHP/" . phpversion();

  $mail_body = "Name: $name\n" .
   "Email: $email\n" .
   "Subject: $subject\n" .
   "Message: $message\n";

  if (mail($to, $subject, $mail_body, $headers)) {
   echo "Merci pour votre message et de l'intérêt porté à notre travail. Nous revenons vers vous dans les meilleurs délais. Vous pouvez aussi nous contacter par téléphone au +33 7 48 48 49 02 ou par mail @rtfulbatinacreativestudios@gmail.com";
  } else {
   echo
   "Il y a eu un problème pour envoyer le message, merci de réessayer. Erreur: {$mail->ErrorInfo}";
  }
 }
 ?>