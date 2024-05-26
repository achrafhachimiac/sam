<?php
 
require('PHPMailer/class.phpmailer.php'); 
 
$mail = new PHPMailer();

 
// Expéditeur
$mail->SetFrom($_POST['mail'], 'contact sam');
// Destinataire

if (isset($_POST['Valloire'])) {
	$mail->AddAddress('servicesdaccueilpourmeubles@gmail.com', 'contact sam');
}
elseif (isset($_POST['Valmeinier'])) {
	$mail->AddAddress('valmeinier@sam-web.fr', 'contact sam');
}
elseif (isset($_POST['Aussois'])) {
	$mail->AddAddress('aussois@sam-web.fr', 'contact sam');
}

// Objet
$mail->Subject = 'formulaire de contact';
 
// Votre message
$mail->MsgHTML("
<p>".$_POST['eta']." </br>
numéro d'appartement :".$_POST['appart']."
</br>résidence :".$_POST['residence']."  </br></p>
".nl2br($_POST['message'])." 
");
 
// Envoi du mail avec gestion des erreurs
if(!$mail->Send()) {
  header('Location: probleme.php');
} else {
  header('Location: envoye.php');
} 
 
?>