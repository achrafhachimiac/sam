<?php
include('facturePDF.php');

// recuperer les données utilisateur

$reqq = $db->prepare('SELECT * FROM commandes WHERE commande_ID = :pro_id ');
$reqq->execute(array(
	'pro_id' => $_POST['cmd_id_arrive']
));
$donnees_6 = $reqq->fetch();

$reqq = $db->prepare('SELECT * FROM proprio WHERE proprio_id = :pro_id ');
$reqq->execute(array(
	'pro_id' => $donnees_6['cmd_proprio_id']
));
$donnees_7 = $reqq->fetch();

// #1 initialise les informations de base
//
// adresse de l'entreprise qui émet la facture
$adresse = "Services d'accueil pour meublés\nRue des plans 73450 VALLOIRE \n(+33) 04 79 59 22 72 \nsam-web.fr\n";
// adresse du client
$adresseClient ="";
$adresseClient .= $_POST['nom'];
$adresseClient .= "\n";
$adresseClient .= $donnees_7["propriete_adresse_1"];
$adresseClient .= "\n";
$adresseClient .= $donnees_7["propriete_adresse_2"];


// date d'aujourd'huit
$date_mnt = date("d/m/Y");



// initialise l'objet facturePDF
$pdf = new facturePDF($adresse, $adresseClient, "Prix en euros garantis pour la saison d'hiver 2019/18 et saison été 2019 taxe comprise \nSiret : 798 407 649 00010");
// défini le logo
$pdf->setLogo('PDF_logo.png');
// entete des produits

$pdf->productHeaderAddRow('Produit', 100, 'L');
$pdf->productHeaderAddRow('Prix TTC', 35, 'R');

// entete des totaux
$pdf->totalHeaderAddRow(200, 'L');

// element personnalisé
$pdf->elementAdd('', 'traitEnteteProduit', 'content');
$pdf->elementAdd('', 'traitBas', 'footer');

// #2 Créer une facture
//
// numéro de facture, date, texte avant le numéro de page
// formater la date en jour/mois/année
			$rawdate_1 = htmlentities($_POST['date_A']);
			$date_1 = date('d/m/Y H:i', strtotime($rawdate_1));
			$rawdate_2 = htmlentities($_POST['date_S']);
			$date_2 = date('d/m/Y H:i', strtotime($rawdate_2));
$pdf->initFacture("Bon d'arrivé n° ".$_POST['cmd_id_arrive']."\nArrive le : ".$date_1."\nSortie le : ".$date_1, "Valloire le ".$date_mnt, "Bordereau d'arrivée ");
// produit


if($_POST['produit_11']!=="") $pdf->productAdd(array($_POST['produit_11'],$_POST['produit_1']));
if($_POST['produit_22']!=="") $pdf->productAdd(array($_POST['produit_22'],$_POST['produit_2']));
if($_POST['produit_33']!=="") $pdf->productAdd(array($_POST['produit_33'],$_POST['produit_3']));
if($_POST['produit_44']!=="") $pdf->productAdd(array($_POST['produit_44'],$_POST['produit_4']));
$total=$_POST['produit_1']+$_POST['produit_2']+$_POST['produit_3']+$_POST['produit_4'];




// ligne des totaux
$pdf->totalAdd(array("Total payé: ".$total.".\n".$_POST['remarque'] ));


// #3 Importe le gabarit
//
require('gabarit1_arrive.php');

// #4 Finalisation
// construit le PDF
$pdf->buildPDF();
// télécharge le fichier
$pdf->Output('PDF/Barrive_'.$_POST['cmd_id_arrive'].'_GRP'. $_SESSION["db_id"].'.pdf', 'F');

?>
