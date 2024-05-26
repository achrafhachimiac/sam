<?php
require('facturePDF.php');

// recuperer les données utilisateur

$reqq = $db->prepare('SELECT * FROM proprio WHERE proprio_id = :pro_id ');
$reqq->execute(array(
	'pro_id' => $_SESSION['id']
));
$donnees = $reqq->fetch();

// #1 initialise les informations de base
//
// adresse de l'entreprise qui émet la facture
$adresse = "Services d’accueil pour meublés\nRue des plans 73450 VALLOIRE \n(+33) 04 79 59 22 72 \nsam-web.fr\n";
// adresse du client
$adresseClient = $donnees["proprio_nom_prenom"];
$adresseClient .= "\n";
$adresseClient = $donnees["proprio_adresse_1"];
$adresseClient .= "\n";
$adresseClient = $donnees["proprio_adresse_2"];


$reqq_1 = $db->prepare('SELECT max(commande_ID) FROM commandes WHERE cmd_proprio_id = :pro_id ');
$reqq_1->execute(array(
	'pro_id' => $_SESSION['id']
));
$donnees_1 = $reqq->fetch();

// date d'aujourd'huit
$date_mnt = date("d/m/Y");



// initialise l'objet facturePDF
$pdf = new facturePDF($adresse, $adresseClient, "Prix en €uros garantis pour la saison d’hiver 2019/18 et saison été 2019 taxe comprise \nSiret : 798 407 649 00010");
// défini le logo
$pdf->setLogo('PDF_logo.png');
// entete des produits
$pdf->productHeaderAddRow('Produit', 75, 'L');
$pdf->productHeaderAddRow('Prix HT', 25, 'C');
$pdf->productHeaderAddRow('QTE', 15, 'C');
$pdf->productHeaderAddRow('Prix HT', 25, 'R');
// entete des totaux
$pdf->totalHeaderAddRow(40, 'L');
$pdf->totalHeaderAddRow(30, 'R');
// element personnalisé
$pdf->elementAdd('', 'traitEnteteProduit', 'content');
$pdf->elementAdd('', 'traitBas', 'footer');

// #2 Créer une facture
//
// numéro de facture, date, texte avant le numéro de page
$pdf->initFacture("Facture n° ".$donnees_1["commande_ID"], "Valloire le ".$date_mnt, "Bon de commande ");
// produit
if (condition) {
	# code...
}

$pdf->productAdd(array($_POST['Type_presta'], $_POST['Type_presta_prix'], '1', $_POST['Type_presta_prix']));


if(isset($_POST['drap_1'])) $pdf->productAdd(array('Drap simple', '8', $_POST['drap_1'], $_POST['drap_1']*8));
if(isset($_POST['drap_2'])) $pdf->productAdd(array('Drap double', '10', $_POST['drap_1'], $_POST['drap_1']*10));
if(isset($_POST['couette_1'])) $pdf->productAdd(array('Couette simple', '10', $_POST['couette_1'], $_POST['couette_1']*10));
if(isset($_POST['couette_2'])) $pdf->productAdd(array('Couette double', '13', $_POST['couette_2'], $_POST['couette_2']*13));
if(isset($_POST['kit_bebe'])) $pdf->productAdd(array('Kit bébé', '10', $_POST['kit_bebe'], $_POST['kit_bebe']*10));
if(isset($_POST['lit_bebe'])) $pdf->productAdd(array('Lit bébé', '10', $_POST['lit_bebe'], $_POST['lit_bebe']*10));
if(isset($_POST['Serviette'])) $pdf->productAdd(array('Serviette', '6', $_POST['Serviette'], $_POST['Serviette']*6));
if(isset($_POST['serviette_piscine'])) $pdf->productAdd(array('serviette piscine', '4', $_POST['serviette_piscine'], $_POST['serviette_piscine']*4));
if(isset($_POST['tapis_bain'])) $pdf->productAdd(array('tapis bain', '2', $_POST['tapis_bain'], $_POST['tapis_bain']*2));
if(isset($_POST['torchon'])) $pdf->productAdd(array('torchon', '3', $_POST['torchon'], $_POST['torchon']*3));
if(isset($_POST['hygiene'])) $pdf->productAdd(array('hygiene', '7', $_POST['hygiene'], $_POST['hygiene']*7));
if(isset($_POST['entretien'])) $pdf->productAdd(array('entretien', '7', $_POST['entretien'], $_POST['entretien']*7));




// ligne des totaux
$pdf->totalAdd(array('Total HT',  $_POST['prix_totale']));
$pdf->totalAdd(array('TVA', $_POST['prix_totale']*0.2));
$pdf->totalAdd(array('Total TTC', $_POST['prix_totale']*1.2));

// #3 Importe le gabarit
//
require('gabarit1.php');

// #4 Finalisation
// construit le PDF
$pdf->buildPDF();
// télécharge le fichier
$pdf->Output('Bon de commande n° '.$donnees_1["commande_ID"].'.pdf', 'I');
?>