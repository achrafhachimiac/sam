<?php
include('facturePDF.php');

class PDF extends FPDF
{
      // Page header
  function Header()
    {
        if ($this->page == 1)
          {
          $this->Image('PDF_logo.png', 10, 6);
            // Arial bold 15
          $this->SetFont('Arial','B',15);
          // Move to the right
          $this->Cell(80);
          // Title
          $this->Cell(0,10,'Company', 0, 0,'R');
          // Line break
          $this->Ln(40);
          }
    }
}
// recuperer les données utilisateur


// #1 initialise les informations de base
//
// adresse de l'entreprise qui émet la facture
$adresse = "Services d'accueil pour meublés\nRue des plans 73450 VALLOIRE \n(+33) 04 79 59 22 72 \nsam-web.fr\n";
// adresse du client
$adresseClient ="";
$adresseClient .= $_POST['nom'];
$adresseClient .= "\n";
$adresseClient .= $_POST['adresse_1'];
$adresseClient .= "\n";
$adresseClient .= $_POST['adresse_2'];

$date_mnt = date("d/m/Y");


	$pdf = new facturePDF($adresse, $adresseClient, "Services d'acceuil pour meublés. Siret : 798 407 649 00010");
	$pdf->AliasNbPages();
	$pdf->initFacture("Contrat d'engagement ", "Valloire le ".$date_mnt, "Contrat d'engagement ");
// initialise l'objet facturePDF
// défini le logo
$pdf->setLogo('PDF_logo.png');
// entete des produits

// entete des totaux
$pdf->totalHeaderAddRow(200, 'L');
// element personnalisé

// #2 Créer une facture
//
// numéro de facture, date, texte avant le numéro de page
// formater la date en jour/mois/année


// produit

$partie_1="Entre les soussignés\nM ".$_POST['nom']." Propriétaire\nAdreesse prncipale: ".$_POST['adresse_1']." ".$_POST['adresse_2'].". Tél: ".$_POST['telephone']."\nAdresse eléctronique: ".$_POST['email'].".\nMadame Nadine Gallas, représentante l'entreprise SAM Artisan.\nIl est arrêté et convenu :\nLe propriétaire du bien désigné ci-dessous s'engage à confier l'accueil de ses locataires vacanciers au prestataire.\n";
	if($_POST['situation']=="non_pro") $partie_1 .="Propriétaire loueur non professionel";
	elseif ($_POST['situation']=="pro") {$partie_1 .="Propriètaire loueur professionel";}
	elseif ($_POST['situation']=="para") {$partie_1 .="Régime de la para hôtellerie";}
$t_partie_2="SITUATION ET DESIGNATION DES LOCAUX MIS EN GESTION\n";
$partie_2="Adresse : ".$_POST['adresse_loc_1']." ".$_POST['adresse_loc_2']."\nSuperficie: ".$_POST['superficie']." m². Nombre de couchages : ".$_POST['couchage']." nombre de pièces :".$_POST['piece'].
		"\nGarage: ".$_POST['parking']." ".$_POST['parkings'].".\nTel que ces locaux existent et tels que le prestataire les accepte pour les avoir vus et visités.\n" ;
$t_partie_3="DESTINATION EXCLUSIVE DU CONTRAT :\n";
$partie_3="Le prestataire exerce exclusivement dans la mission de mise à disposition du bien dans le cadre de location saisonnière touristique de court et moyen séjour. Les services proposés ne font l'objet d'aucune autorisation ou réglementation particulière. L'entreprise n'intervient pas dans la mise en oeuvre du contrat de location.
Les prestations proposées répondent aux critères de la para hôtellerie tel que le défini l'article 261 d 4° du CGI. Il est proposé le nettoyage de l'appartement selon différentes formules, la location de linge de maison et l'accueil des locataires avec le suivi administratif.
Le choix des différentes prestations par le propriétaire est à la carte.";

$t_partie_4="DUREE ET RENOUVELLEMENT\n";
$partie_4="Le présent contrat est consenti pour :\n";
	if($_POST['duree']=="hiver") $partie_4 .="La saison d'hiver\n";
	elseif ($_POST['duree']=="hiver_etee") {$partie_4 .="La saison d'hiver et d'été\n";}
	elseif ($_POST['duree']=="annee") {$partie_4 .="L'année\n";}
$partie_4.="Il se renouvellera ensuite par tacite reconduction pour les mêmes périodes. La prise d'effet est effective à la signature du contrat à défaut dès la saison désignée à venir.";
$t_partie_5="REGLEMENT\n";
$partie_5="Le montant des prestations est payable :\nEn partie, acompte 30 % à la commande et le solde\n";

	if($_POST['reglement']=="chaque_presta") $partie_4 .="A chaque préstation\n";
	elseif ($_POST['reglement']=="fin_mois") {$partie_4 .="Chaque fin du mois\n";}
	elseif ($_POST['reglement']=="fin_saison") {$partie_4 .="En fin de saison\n";}
	elseif (isset($_POST['date_regelement'])) {$partie_4 .="".$_POST['date_regelement']."\n";}
$partie_5.="Escompte de 1,5 % pour tout règlement effectué en totalité à la commande.\nPar chèque ou espèces.";

$t_partie_6="OBLIGATIONS DU PROPRIETAIRE: \n";
$partie_6="Le propriétaire ou son représentant est tenu des obligations générales suivantes :\nDe délivrer un logement répondant aux critères des classements des locations saisonnières et conforme à l'usage d'habitation en villégiature.\nDe s'engager à faire les réparations nécessaires pour maintenir les locaux et les équipements en bon état d'usage\nDe s'engager à se déclarer auprès des services fiscaux comme loueur de meublé.\nDe s'engager à souscrire une assurance locative pour son bien\nDe faire part de ses besoins en prestation dès la confirmation du contrat de location avec son locataire au plus tard 72 heures avant l'arrivée des clients\nDe transmettre les coordonnées du prestataire au locataire grâce au bon de réservation\nDe fournir les pièces annexes\n";

$t_partie_7="OBLIGATIONS DU PRESTATAIRE \n";
$partie_7="Fournir son immatriculation auprès de la chambre des métiers\nDe souscrire une assurance responsabilité civile pour son activité professionnelle\nS'engage à faire part au propriétaire des besoins en entretien nécessaires\nA effectuer les prestations dans leur totalité comme convenu\nD'assurer un rôle de conseil et d'information pour toute la durée du séjour du locataire\n";


$t_partie_8="CLAUSES PARTICULIERES \n";
$partie_8="Dans le cas de modification des prestations en cours de période, un avenant au contrat pourra être fait avec une facturation conjointe.\nPour les loueurs professionnels, des contrats spécifiques sont négociables.\nEn cas d'annulation un montant forfaitaire de 15 €uros sera retenu.\nDans le cadre des prestations de l'entreprise désignée, le propriétaire lui autorise les photographies de son appartement pour son propre usage.\n";

$t_partie_9="CLAUSE RESOLUTOIRE \n";
$partie_9="Il est expressément convenu qu'à défaut de paiement, de vente du bien ou de cas de force majeure, le présent contrat sera résilié de plein droit.";

$t_partie_10="PIECES JOINTES \n";
$partie_10="-Tarifs propriétaires\n- Tarifs résidents\n- Clés (3 jeux)\nFait à Valloire (en deux exemplaires) le ".$date_mnt." ";

$total="";
$total.=$partie_1.$t_partie_2.$partie_2.$t_partie_3.$partie_3.$t_partie_4.$partie_4.$t_partie_5.$partie_5.$t_partie_6.$partie_6.$t_partie_7.$partie_7.$t_partie_8.$partie_8.$t_partie_9.$partie_9.$t_partie_10.$partie_10;
$pdf->totalAdd(array($total));
/*$pdf->totalAdd(array($t_partie_2));
$pdf->totalAdd(array($partie_2));
$pdf->totalAdd(array($t_partie_3));
$pdf->totalAdd(array($partie_3));
$pdf->totalAdd(array($t_partie_4));
$pdf->totalAdd(array($partie_4));
$pdf->totalAdd(array($t_partie_5));
$pdf->totalAdd(array($partie_5));
$pdf->totalAdd(array($t_partie_6));
$pdf->totalAdd(array($partie_6));
$pdf->totalAdd(array($t_partie_7));
$pdf->totalAdd(array($partie_7));
$pdf->totalAdd(array($t_partie_8));
$pdf->totalAdd(array($partie_8));
$pdf->totalAdd(array($t_partie_9));
$pdf->totalAdd(array($partie_9));
$pdf->totalAdd(array($t_partie_10));
$pdf->totalAdd(array($partie_10));*/
// ligne des totaux


// #3 Importe le gabarit
//
require('gabarit_contrat.php');

// #4 Finalisation
// construit le PDF
$pdf->buildPDF();
// télécharge le fichier
$pdf->Output('PDF/Contrat_'.$_POST['nom'].'.pdf', 'F');

?>