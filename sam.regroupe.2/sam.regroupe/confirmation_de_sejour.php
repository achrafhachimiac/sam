<?php

include('config.php');

$truc1 = "<tr><td>";
$truc2 = "</td><td>";
$truc3 = "</td></tr>";


if (!empty($_POST['participant2'])) {
  $ligne2 =  $truc1.$_POST['participant2'].$truc2.$_POST['age2'].$truc3;

  }

  if (!empty($_POST['participant3'])) {
  $ligne3 =  $truc1. $_POST['participant3'] . $truc2 . $_POST['age3'] . $truc3;

  }
  if (!empty($_POST['participant4'])) {
  $ligne4 =  $truc1. $_POST['participant4'] . $truc2 . $_POST['age4'] . $truc3;

  }
  if (!empty($_POST['participant5'])) {
  $ligne5 =  $truc1. $_POST['participant5'] . $truc2 . $_POST['age5'] . $truc3;

  }
  if (!empty($_POST['participant6'])) {
  $ligne6 =  $truc1. $_POST['participant6'] . $truc2 . $_POST['age6'] . $truc3;

  }
  if (!empty($_POST['participant7'])) {
  $ligne7 =  $truc1. $_POST['participant7'] . $truc2 . $_POST['age7'] . $truc3;

  }
  if (!empty($_POST['participant8'])) {
  $ligne8 =  $truc1. $_POST['participant8'] . $truc2 . $_POST['age8'] . $truc3;

  }






 $nombre = 8;
require('PHPMailer/class.phpmailer.php'); 
 
$mail = new PHPMailer();

 
// Expéditeur
$mail->SetFrom('NOREPLY@sam-web.fr', 'contact sam');
// Destinataire
$mail->AddAddress($_POST['mail'],'contact sam');
$mail->addAddress($_POST['mail2'], 'contact sam');
$mail->addAddress('servicesdaccueilpourmeubles@gmail.com', 'contact sam');
$mail->CharSet = 'UTF-8';
$mail->IsHTML(true);
//servicesdaccueilpourmeubles@gmail.com
// Objet
$mail->Subject = 'confirmation de séjour';
// Votre message
$mail->MsgHTML("
<!DOCTYPE html>

<html>
<head>
        <meta charset=\"utf-8\">
</head>

    

	
<body>
<section class=\"session\">
	
	
<IMG SRC='http://sam-web.fr/capture' TITLE='sam'><div style= \"float:right\">Rue des plans <br> 73450 Valloire <br> tel: 04 79 59 22 72</div>
	
<p>Nom de la réservation : " . $_POST['nom'] . "   <br>
Tél : " . $_POST['telephone'] . " <p>

propriétaire de l'appartement : " . $_POST['nomproprio'] . "

<h1> Bordereau d'arrivée </h1>

<p> Nous avons  le plaisir de vous confirmer votre séjour, à votre arrivée vous serez accueillis par l'équipe du bureau d'accueil SAM (services d'accueil pour meublés).  Pour faciliter votre arrivée, nous vous conseillons de les contacter la semaine qui précéde votre séjour.  <p>

<table border=\"1\" div style=\"width:100%;\">
  <tr>
       <th>SEJOUR</th>
       <th>LOCATION</th>
       <th>A REGLER sur place</th>
   </tr>
 
   <tr>
       

       
   </tr>
   <tr>
       <td>APPT n° " . $_POST['numero'] . " Résidence " . ($_POST['residence']) . "</br>
     " . $_POST['piece'] . " piéces " . $_POST['couchage'] . " couchages<br> <br> du <h3>du " . $_POST['debut'] . " au " . $_POST['fin'] . "</h3></td>
       <td>PRESTATIONS :<br>
"
.$_POST['quantite1'].$_POST['prestation1'].$_POST['inclu1']."<br>"
.$_POST['quantite2'].$_POST['prestation2'].$_POST['inclu2']."<br>"
.$_POST['quantite3'].$_POST['prestation3'].$_POST['inclu3']."<br>"
.$_POST['quantite4'].$_POST['prestation4'].$_POST['inclu4']."<br>"
.$_POST['quantite5'].$_POST['prestation5'].$_POST['inclu5']."<br>"
.$_POST['quantite6'].$_POST['prestation6'].$_POST['inclu6']."<br>"
.$_POST['quantite7'].$_POST['prestation7'].$_POST['inclu7']."<br>"
.$_POST['quantite8'].$_POST['prestation8'].$_POST['inclu8']."<br>



</td>
       <td>"

       .$_POST['prixprestation1'].$_POST['x1'].$_POST['quantite1'].$_POST['inclu1']."<br>"
       .$_POST['prixprestation2'].$_POST['x2'].$_POST['quantite2'].$_POST['inclu2']."<br>"
       .$_POST['prixprestation3'].$_POST['x3'].$_POST['quantite3'].$_POST['inclu3']."<br>"
       .$_POST['prixprestation4'].$_POST['x4'].$_POST['quantite4'].$_POST['inclu4']."<br>"
       .$_POST['prixprestation5'].$_POST['x5'].$_POST['quantite5'].$_POST['inclu5']."<br>"
       .$_POST['prixprestation6'].$_POST['x6'].$_POST['quantite6'].$_POST['inclu6']."<br>"
       .$_POST['prixprestation7'].$_POST['x7'].$_POST['quantite7'].$_POST['inclu7']."<br>"
       .$_POST['prixprestation8'].$_POST['x8'].$_POST['quantite8'].$_POST['inclu8']."

       TOTAL :" . $_POST['total'] . "
   </tr>
   
   
  
   
  
</table>

</br>
</br>


<strong>formule: " . $_POST['formule'] . "</strong>

</br>
</br>




<table border=\"1\" style=\"width:100%;\">
   <tr>
       <th>NOM DES PARTICIPANTS</th>
       <th>Date de naissance</th>
       
   <tr>
  <td>" . $_POST['participant1'] . "</td>
  
   <td>" . $_POST['age1'] . "</td>

 ".$ligne2
 .$ligne3
 .$ligne4
 .$ligne5
 .$ligne6
 .$ligne7
 .$ligne8.
 "


   

   
  
</table>
<br>
SOLDE :" . $_POST['solde'] . "" . $_POST['choix1'] . "" . $_POST['date_solde'] . "
<br>
CAUTION :" . $_POST['caution'] . "" . $_POST['choix2'] . "</strong>
<br>


<p> Nous vous rappelons que les formalités se font à partir de 15 h jusqu'à  19 h.
Ce document est à présenter  à l'arrivée. </p>

<P>Horaire d'ouverture du SAM :<br>
Haute saison : 8h30 à 11h30 et  17h à 19h (sauf mercredi et dimanche après-midi)<br>
Basse saison : après-midi permanence téléphonique uniquement.<br>
Samedi : 8h à 12h30 et 14h 19h </p>


<p>Attention<br>
Pensez à localiser le bureau ou votre location afin d'éviter de nous appeler longuement pour vous orienter</p>

<h2>Nous vous souhaitons à l'avance un agréable séjour</h2>





</section>









");
 
// Envoi du mail avec gestion des erreurs
if(!$mail->Send()) {
  header('Location: probleme.php');
} else {
  header('Location: envoye.php');
} 
 


$req = $bdd->prepare('INSERT INTO bonsejour(sejour,proprio, arrivee, crea) VALUES(?,?,?,?)');
$req->execute(array("
<!DOCTYPE html>

<html>
<head>
        <meta charset=\"utf-8\">
</head>

    

  
<body>
<section class=\"session\">
  
  
<IMG SRC='http://sam-web.fr/capture' TITLE='sam'><div style= \"float:right\">Rue des plans <br> 73450 Valloire <br> tel: 04 79 59 22 72</div>
  
<p>à Mme & Mr  " . $_POST['nom'] . "   <br>
Tél : " . $_POST['telephone'] . " <p>

propriétaire de l'appartement : " . $_POST['nomproprio'] . "

<h1> Bordereau d'arrivée </h1>

<p> Nous avons  le plaisir de vous confirmer votre séjour, à votre arrivée vous serez accueillis par l'équipe du bureau d'accueil SAM (services d'accueil pour meublés).  Pour faciliter votre arrivée, nous vous conseillons de les contacter la semaine qui précéde votre séjour.  <p>

<table border=\"1\" div style=\"width:100%;\">
     <tr>
       <th>SEJOUR</th>
       <th>LOCATION</th>
       <th>A REGLER sur place</th>
   </tr>
 
   <tr>
       

       
   </tr>
   <tr>
       <td>APPT n° " . $_POST['numero'] . " Résidence " . ($_POST['residence']) . "</br>
     " . $_POST['piece'] . " piéces " . $_POST['couchage'] . " couchages<br> <br> <h3>du " . $_POST['debut'] . " au " . $_POST['fin'] . "</h3></td>
       <td>PRESTATIONS :<br>
"
.$_POST['quantite1'].$_POST['prestation1'].$_POST['inclu1']."<br>"
.$_POST['quantite2'].$_POST['prestation2'].$_POST['inclu2']."<br>"
.$_POST['quantite3'].$_POST['prestation3'].$_POST['inclu3']."<br>"
.$_POST['quantite4'].$_POST['prestation4'].$_POST['inclu4']."<br>"
.$_POST['quantite5'].$_POST['prestation5'].$_POST['inclu5']."<br>"
.$_POST['quantite6'].$_POST['prestation6'].$_POST['inclu6']."<br>"
.$_POST['quantite7'].$_POST['prestation7'].$_POST['inclu7']."<br>"
.$_POST['quantite8'].$_POST['prestation8'].$_POST['inclu8']."<br>



</td>
       <td>"

       .$_POST['prixprestation1'].$_POST['x1'].$_POST['quantite1'].$_POST['inclu1']."<br>"
       .$_POST['prixprestation2'].$_POST['x2'].$_POST['quantite2'].$_POST['inclu2']."<br>"
       .$_POST['prixprestation3'].$_POST['x3'].$_POST['quantite3'].$_POST['inclu3']."<br>"
       .$_POST['prixprestation4'].$_POST['x4'].$_POST['quantite4'].$_POST['inclu4']."<br>"
       .$_POST['prixprestation5'].$_POST['x5'].$_POST['quantite5'].$_POST['inclu5']."<br>"
       .$_POST['prixprestation6'].$_POST['x6'].$_POST['quantite6'].$_POST['inclu6']."<br>"
       .$_POST['prixprestation7'].$_POST['x7'].$_POST['quantite7'].$_POST['inclu7']."<br>"
       .$_POST['prixprestation8'].$_POST['x8'].$_POST['quantite8'].$_POST['inclu8']."<br>


       " . $_POST['total'] . "
   </tr>
   
   
  
</table>

</br>
</br>


<strong>formule: " . $_POST['formule'] . "</strong>

</br>
</br>




<table border=\"1\" style=\"width:100%;\">
   <tr>
       <th>NOM DES PARTICIPANTS</th>
       <th>Date de naissance</th>
       
   <tr>
  <td>" . $_POST['participant1'] . "</td>
  
   <td>" . $_POST['age1'] . "</td>

 ".$ligne2
 .$ligne3
 .$ligne4
 .$ligne5
 .$ligne6
 .$ligne7
 .$ligne8.
 "


   

   
  
</table>
<br>
SOLDE :" . $_POST['solde'] . "" . $_POST['choix1'] . "" . $_POST['date_solde'] . "
<br>
CAUTION :" . $_POST['caution'] . "" . $_POST['choix2'] . "</strong>
<br>



<p> Nous vous rappelons que les formalités se font à partir de 15 h jusqu'à  19 h.
Ce document est à présenter  à l'arrivée. </p>

<P>Horaire d'ouverture du SAM :<br>
Haute saison : 8h30 à 11h30 et  17h à 19h (sauf mercredi et dimanche après-midi)<br>
Basse saison : après-midi permanence téléphonique uniquement.<br>
Samedi : 8h à 12h30 et 14h 19h </p>


<p>Attention<br>
Pensez à localiser le bureau ou votre location afin d'éviter de nous appeler longuement pour vous orienter</p>

<h2>Nous vous souhaitons à l'avance un agréable séjour</h2>





</section>









",$_POST['nomproprio'],$_POST['debut'],date("F j, Y, g:i a"),));


