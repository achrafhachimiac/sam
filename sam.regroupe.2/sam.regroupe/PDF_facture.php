<?php
require('facturePDF.php');

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
	if ($_POST['cmd_modifie']==1) {
		$donnees_1["commande_ID"]="";
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

$pdf->productHeaderAddRow('Produit', 75, 'L');
$pdf->productHeaderAddRow('Prix u TTC', 25, 'C');
$pdf->productHeaderAddRow('QTE', 15, 'C');
$pdf->productHeaderAddRow('Prix TTC', 25, 'R');
// entete des totaux
$pdf->totalHeaderAddRow(40, 'L');
$pdf->totalHeaderAddRow(30, 'R');
// element personnalisé
$pdf->elementAdd('', 'traitEnteteProduit', 'content');
$pdf->elementAdd('', 'traitBas', 'footer');

// #2 Créer une facture
//
// numéro de facture, date, texte avant le numéro de page
// formater la date en jour/mois/année
			$rawdate_1 = htmlentities($_POST['date_debut']);
			$date_1 = date('d/m/Y', strtotime($rawdate_1));
$pdf->initFacture("Bon de commande n° ".$donnees_1["commande_ID"]."\nPour le : ".$date_1, "Valloire le ".$date_mnt, "Bon de commande ");
// produit

$pdf->productAdd(array('Type de préstation: '.$_POST['Type_presta'], $_POST['Type_presta_prix'], '1', $_POST['Type_presta_prix']));
$pdf->productAdd(array('Réception au: '.$_POST['Reception'], $_POST['Reception_prix'], '1', $_POST['Reception_prix']));


if($_POST['drap_1']!=0) $pdf->productAdd(array('Drap simple', '10', $_POST['drap_1'], $_POST['drap_1']*10));
if($_POST['drap_2']!=0) $pdf->productAdd(array('Drap double', '12', $_POST['drap_2'], $_POST['drap_2']*12));
if($_POST['couette_1']!=0) $pdf->productAdd(array('Couette simple', '13', $_POST['couette_1'], $_POST['couette_1']*13));
if($_POST['couette_2']!=0) $pdf->productAdd(array('Couette double', '16', $_POST['couette_2'], $_POST['couette_2']*16));
if($_POST['kit_bebe']!=0) $pdf->productAdd(array('Kit bébé', '35', $_POST['kit_bebe'], $_POST['kit_bebe']*35));
if($_POST['lit_bebe']!=0) $pdf->productAdd(array('Lit bébé', '12', $_POST['lit_bebe'], $_POST['lit_bebe']*12));
if($_POST['serviette']!=0) $pdf->productAdd(array('Serviette', '6', $_POST['serviette'], $_POST['serviette']*6));
if($_POST['serviette_piscine']!=0) $pdf->productAdd(array('Serviette piscine', '4', $_POST['serviette_piscine'], $_POST['serviette_piscine']*4));
if($_POST['tapis_bain']!=0) $pdf->productAdd(array('Tapis bain', '2', $_POST['tapis_bain'], $_POST['tapis_bain']*2));
if($_POST['torchon']!=0) $pdf->productAdd(array('Torchons', '3', $_POST['torchon'], $_POST['torchon']*3));
if($_POST['hygiene']!=0) $pdf->productAdd(array('Hygiene', '7', $_POST['hygiene'], $_POST['hygiene']*7));
if($_POST['entretien']!=0) $pdf->productAdd(array('Entretien', '7', $_POST['entretien'], $_POST['entretien']*7));
if($_POST['Menage_fin_prix']!=0) $pdf->productAdd(array('Ménage fin de séjour', 'X', '1', $_POST['Menage_fin_prix']));
if($_POST['Commande_deg']!=0) $pdf->productAdd(array('Degraissage', 'X', '1', $_POST['Commande_deg']));





// ligne des totaux
$pdf->totalAdd(array('Total HT',  $_POST['prix_totale']));
$pdf->totalAdd(array('TVA', $_POST['prix_totale']*0.25));
$pdf->totalAdd(array('Total TTC', $_POST['prix_totale']*1.25));
$pdf->totalAdd(array('à payer par le locataire', $_POST['Locataire_prix']));

// #3 Importe le gabarit
//
require('gabarit1.php');

// #4 Finalisation
// construit le PDF
$pdf->buildPDF();
// télécharge le fichier
$pdf->Output('PDF/BDCn_'.$donnees_1["commande_ID"].'_GRP'. $_SESSION["db_id"].'.pdf', 'F');

?>
