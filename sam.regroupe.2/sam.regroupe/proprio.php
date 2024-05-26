<?php
include("DEBUT.php");
session_start();	
if (!isset($_SESSION['pseudo'])) {
include("Nconnexion.php");}
else{
?>
<!DOCTYPE HTML>
<!--
	TXT by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<?php
include("includes/fonctions.php");
include("menu_principale.php");
?>

		<!-- Banner -->
<div id="main-wrappera">
	<div id="main" class="container">
		<div class="row">
			<div class="col-8">
				<div class="content content-left">
							
				<!-- Content -->
	
				<article class="box page-content">
					<header>
						<h2>Propriétaires</h2>
						<p>Que pouvons nous faire pour vous ?</p>
					</header>
					<section class="bannerCopie">

						
						<p >

						Vous êtes propriétaires, loueurs de meublés professionnels ou non professionnels. Vous louez votre appartement et vous nous confiez l’accueil de vos locataires.</br></br>
						Nous proposons aux loueurs des prestations  d’accueil à la carte répondant à vos souhaits ou ceux de vos hôtes :</br></br>
						TACHES DE RECEPTION :  Accueil à l'appartement et suivi administratif</br>
						NETTOYAGE DES APPARTEMENTS : des retouches au ménage complet (tarif selon surface et au choix 4 formules)</br>
						LOCATIONS DE LINGE : inclues dans les prestations de nettoyage ou à la demande (draps, serviettes,alèses et torchons)</br>
						LES LOCATIONS D’EQUIPEMENTS :  Petit électroménager (prêt gratuit pour les locataires de propriétaire en contrat), puériculture (lit parapluie, chaise haute, baignoire, matelas à langer...).</br>
						VENTES ANNEXES : produits d’entretien et d’hygiène</br></br>
						En choisissant les services du SAM, vos clients bénéficient d’une présence permanente pendant toute la durée de leur séjour.</br></br>
						Pour les loueurs professionnels,  des prestations spécifiques peuvent être proposées en fonction du nombre d’appartements confiés .</br>
						Nous vous recevons sur rendez-vous hors des horaires d'ouverture au public afin de vous présenter notre activité.
						</p>
					</section>
				</article>

				</div>
			</div>
			<div class="col-4">
				<?php include("includes/proprio_menu.php"); ?>
			</div>
		</div>
	</div>
</div>						
<?php
include("includes/footer.php");
}
?>
