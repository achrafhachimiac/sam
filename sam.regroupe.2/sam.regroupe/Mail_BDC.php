<?php
$mail_dest = $donnees_2["proprio_email"]; // Déclaration de l'adresse de destination.
include('PHPMailer/class.phpmailer.php');
	$mail = new PHPmailer();
	$mail->SetFrom('NOREPLY@sam-web.fr', 'contact sam');
	$mail->AddAddress($mail_dest,'contact sam');
	$mail->IsHTML(true);

	$mail->CharSet = 'UTF-8';
	$mail->AddReplyTo('NOREPLY@sam-web.fr');	
	$mail->Subject='Bon de commande n°: '.$donnees_1['commande_ID'];
	$mail->MsgHTML("<!DOCTYPE html>
<html><head><meta charset=\"utf-8\"></head><body><b>Madame, Monsieur,</b><br/><br/>Nous avons le plaisir de vous confirmer votre commande.<br/>Vous trouverai ci-joint votre bon de commande, vous pouvez également le télécharger sur votre éspace utilisateur.<br/>L'équipe du SAM vous remercie et vous souhaite un agréable séjour.<br/><br/>SAM Valloire,</body></html>");
	$mail->AddAttachment('PDF/Bordereaun_'.$donnees_1['commande_ID'].'.pdf', $name = 'Bon de commande numero:'.$donnees_1['commande_ID'].'.pdf',  $encoding = 'base64', $type = 'application/pdf');
	

	if(!$mail->Send()){
	 // echo $mail->ErrorInfo; 
	}
	else{	  
	 // echo 'Mail envoyé avec succès';
	}


//==========
?>
