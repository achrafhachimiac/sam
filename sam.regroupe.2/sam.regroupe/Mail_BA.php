<?php
$mail_client_dest = $donnees_2["proprio_email"]; // Déclaration de l'adresse de destination.
	//include('PHPMailer/class.phpmailer.php');
	$mail_client = new PHPmailer();
	$mail_client->SetFrom('NOREPLY@sam-web.fr', 'contact sam');
	$mail_client->AddAddress($mail_client_dest,'contact sam');
	$mail_client->IsHTML(true);

	$mail_client->CharSet = 'UTF-8';
	$mail_client->AddReplyTo('NOREPLY@sam-web.fr');	
	$mail_client->Subject='Bordereau d`arrivée n: '.$donnees_1['commande_ID'];
	$mail_client->MsgHTML("<!DOCTYPE html>
<html><head><meta charset=\"utf-8\"></head><body><b>Madame, Monsieur,</b><br/><br/>Nous avons le plaisir de vous confirmer votre séjour, à votre arrivée vous serez accueillis par l'équipe du bureau d'accueil SAM (services d'accueil pour meublés).<br/>Pour faciliter votre arrivée, nous vous conseillons de les contacter la semaine qui précéde votre séjour, et de vous présenter avec le bordereau d'arrivée ci-joint.<br/>L'équipe du SAM vous remercie et vous souhaite un agréable séjour.<br/><br/>SAM Valloire<br/><br/>(Veilliez transférer ce mail à votre locataire)</body></html>");
	$mail_client->AddAttachment('PDF/Bordereaun_'.$donnees_1['commande_ID'].'.pdf', $name = 'Bordereau d\'arrive numero:'.$donnees_1['commande_ID'].'.pdf',  $encoding = 'base64', $type = 'application/pdf');
	

	if(!$mail_client->Send()){
	  echo $mail_client->ErrorInfo; 
	}
	else{	  
	 echo 'Mail envoyé avec succès';
	}


//==========
?>
