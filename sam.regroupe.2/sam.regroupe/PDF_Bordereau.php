<?php
//include('facturePDF.php');

// recuperer les données utilisateur
// différencié entre la modif et la nouvelle création de facture
if (isset($_POST['cmd_modifie'])) {

	if ($_POST['cmd_modifie']==1) {

	$proprio_id = $_POST['proprio_id'];

	}
}

else {
	$proprio_id = $_SESSION['id'];
}

$reqq = $db->prepare('SELECT * FROM proprio WHERE proprio_id = :pro_id ');
$reqq->execute(array(
  	'pro_id' => $proprio_id
));
$donnees_2 = $reqq->fetch();

// #1 initialise les informations de base
//
// adresse de l'entreprise qui émet la facture
$adresse = "Services d'accueil pour meublés\nRue des plans 73450 VALLOIRE \n(+33) 04 79 59 22 72 \nsam-web.fr\n";
// adresse du client
$adresseClient ="";
$adresseClient .= $donnees_2["proprio_nom_prenom"];
$adresseClient .= "\n";
$adresseClient .= $donnees_2["proprio_adresse_1"];
$adresseClient .= "\n";
$adresseClient .= $donnees_2["proprio_adresse_2"];

if (isset($_POST['cmd_modifie'])) {
		$donnees_1["commande_ID"]="";
	if ($_POST['cmd_modifie']==1) {
		$donnees_1["commande_ID"]=$_POST["commande_ID"];
	}

}

else {

$reqq_1 = $db->prepare('SELECT max(commande_ID) AS commande_ID FROM commandes WHERE cmd_proprio_id = :pro_id ');
$reqq_1->execute(array(
	'pro_id' => $_SESSION['id']
));
$donnees_1 = $reqq_1->fetch();
}

// date d'aujourd'huit
$date_mnt = date("d/m/Y");



// initialise l'objet facturePDF
$pdf = new facturePDF($adresse, $adresseClient, "Prix en euros garantis pour la saison d'hiver 2019/18 et saison été 2019 taxe comprise \nSiret : 798 407 649 00010");
// défini le logo
$pdf->setLogo('PDF_logo.png');
// entete des produits

$pdf->productHeaderAddRow('Séjour', 90, 'L');
$pdf->productHeaderAddRow('Préstation', 40, 'C');
$pdf->productHeaderAddRow('Client / Durée du sejour', 50, 'R');
// entete des totaux
$pdf->totalHeaderAddRow(200, 'L');

// element personnalisé
$pdf->elementAdd('', 'traitEnteteProduit', 'content');
$pdf->elementAdd('', 'traitBas', 'footer');

// #2 Créer une facture
//
// numéro de facture, date, texte avant le numéro de page
// formater la date en jour/mois/année
			$rawdate_1 = htmlentities($_POST['date_debut']);
			$date_1 = date('d/m/Y', strtotime($rawdate_1));
			$rawdate_2 = htmlentities($_POST['date_fin']);
			$date_2 = date('d/m/Y', strtotime($rawdate_2));
$pdf->initFacture("Bordereau d'arrivé n° ".$donnees_1["commande_ID"]."\nPour le : ".$date_1, "Valloire le ".$date_mnt, "Bordereau d'arrivée ");
// produit

$Sejour="";
$Sejour.="Adresse: ";
$Sejour.=$donnees_2["propriete_adresse_1"]."\n".$donnees_2["propriete_adresse_2"]."\n".$donnees_2["propriete_pieces"].' Pièces, et '.$donnees_2["propriete_couchage"].' couchages';

$pdf->productAdd(array($Sejour, $_POST["Type_presta"]."\n".$_POST["Reception"] , $_POST["client"]."\nDu: ".$date_1."\nAu: ".$date_2));

if($_POST['drap_1']!=0) $pdf->productAdd(array('',"Drap simple: ".$_POST['drap_1']));
if($_POST['drap_2']!=0) $pdf->productAdd(array('','Drap double: '. $_POST['drap_2']));
if($_POST['couette_1']!=0) $pdf->productAdd(array('','Couette simple: ' .$_POST['couette_1']));
if($_POST['couette_2']!=0) $pdf->productAdd(array('','Couette double: ' .$_POST['couette_2']));
if($_POST['kit_bebe']!=0) $pdf->productAdd(array('','Kit bebe: ' .$_POST['kit_bebe']));
if($_POST['lit_bebe']!=0) $pdf->productAdd(array('','Lit bebe: ' .$_POST['lit_bebe']));
if($_POST['serviette']!=0) $pdf->productAdd(array('','Serviette: ' .$_POST['serviette']));
if($_POST['serviette_piscine']!=0) $pdf->productAdd(array('','Serviette de piscine: ' .$_POST['serviette_piscine']));
if($_POST['tapis_bain']!=0) $pdf->productAdd(array('','Tapis de bain: ' .$_POST['tapis_bain']));
if($_POST['torchon']!=0) $pdf->productAdd(array('','Torchon: ' .$_POST['torchon']));
if($_POST['hygiene']!=0) $pdf->productAdd(array('','Produit d\'hygiene: ' .$_POST['hygiene']));
if($_POST['entretien']!=0) $pdf->productAdd(array('','Produit d\'entretien: ' .$_POST['entretien']));
if($_POST['Menage_fin_prix']!=0) $pdf->productAdd(array('', 'Ménage fin de séjour'));
if($_POST['Commande_deg']!=0) $pdf->productAdd(array('', 'Ménage fin de séjour'));






// ligne des totaux
$pdf->totalAdd(array("Facture à regler par le locataire : ".$_POST['Locataire_prix']." euros. \nNous vous rappelons que les formalités se font à partir de 15 h jusqu'à 19 h.\nCe document est à présenter à l'arrivée.\nHoraire d'ouverture du SAM :\nHaute saison : 8h30 à 11h30 et 17h à 19h (sauf mercredi et dimanche après-midi)\nBasse saison : après-midi permanence téléphonique uniquement.\nSamedi : 8h à 12h30 et 14h 19h"));


// #3 Importe le gabarit
//
require('gabarit1_1.php');

// #4 Finalisation
// construit le PDF
$pdf->buildPDF();
// télécharge le fichier
$pdf->Output('PDF/Bordereaun_'.$donnees_1["commande_ID"].'_GRP'. $_SESSION["db_id"].'.pdf', 'F');

?>
