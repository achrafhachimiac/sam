<?php
 
require('phpmailer/class.phpmailer.php'); 
 
$mail = new PHPMailer();
$mail->Host = 'smtp.domaine.fr';
$mail->SMTPAuth   = false;
$mail->Port = 25; // Par défaut
 
// Expéditeur
$mail->SetFrom('NOREPLY@sam-web.fr', 'contact sam');
// Destinataire
$mail->AddAddress('franchipro@gmail.com', 'contact sam');
// Objet
$mail->Subject = 'formulaire de contact';
 
// Votre message
$mail->MsgHTML("
".$_POST['eta']." </br>
".$_POST['appart']."
".$_POST['residence']."  </br>
".$_POST['message']." 
");
 
// Envoi du mail avec gestion des erreurs
if(!$mail->Send()) {
  echo 'Erreur : ' . $mail->ErrorInfo;
} else {
  echo 'Message envoyé !';
} 
 
?>