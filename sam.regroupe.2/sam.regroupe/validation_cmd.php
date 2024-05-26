<?php
// A corriger ****
	/*
	Ajouter l'ancinne à la nouvelle remarque
	Solution: Afficher la première remarque dans le texte
	*/
//***********************

session_start();
if (!isset($_SESSION['pseudo'])) {
include("err_connexion.php");}
else{
		include("includes/identifiants.php");
	include("includes/fonctions.php");
	include('menu_principale.php');
?>
<!DOCTYPE HTML>
<!--
	TXT by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<html>

<?php
	$req = $db->prepare('SELECT * FROM commandes WHERE commande_ID = :cmd_id_valide');
	$req->execute(array(
		'cmd_id_valide' => $_POST['cmd_id_valide'],
		));
	$donnees_5 = $req->fetch();

?>
<div id="main-wrappera">
	<div id="main" class="container" style="width: 100%">
		<div class="row ">
			<div class="col-md-8 ml-md-auto">
				<div class="row justify-content-md-center">
					<div class="col-md-10 ml-md-auto" style="    padding-bottom: 4em;">
						<h1>Informations complémentaires de la commande :</h1>
					</div>
				</div>
				<form class="enregistrement" method="post" action="admin.php" enctype="multipart/form-data">
					<!--Numero de la commande -->
					<?php
					echo'<input type="hidden" name="cmd_id_arrive" value="'.htmlspecialchars($_POST['cmd_id_valide']).'">';
					?>
					<!-- ================================================ -->

				<div class="form-grp row" id="date_A_div">
					<br />
					<label for="Reception" class="col-3 col-form-label">Nom prénom du client :</label>
					<div class="col-7">
						<input type="text" name="nom" id="zero_padding_left">
					</div>
				</div>
				<div class="row justify-content-md-center">
					<div class="col-6">
						<div class="form-grp row" id="date_A_div">
							<label class="col-4 col-form-label" id="zero_padding_left">date et heure d'arrivée:</label>
							<div class="col-8" id="zero_padding_left">
								<input type="datetime-local" name="date_A" id="date_A">
							</div>
						</div>
					</div>
					<div class="col-6">
						<div class="form-grp row" id="date_A_div">
							<label class="col-4 col-form-label" id="zero_padding_left">date de sortie:</label>
							<div class="col-8" id="zero_padding_left">
								<input type="date" name="date_S" id="date_S">
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<h2>Produits commandés :</h2>
				</div>

				<div class="form-grp row" id="date_A_div">
					<br />
					<label for="Reception" class="col-2 col-form-label">Produit :</label>
					<div class="col-4">
						<input type="text" name="produit_11" id="zero_padding_left">
					</div>
					<label for="Reception" class="col-1 col-form-label">Prix :</label>
					<div class="col-3">
						<input type="number" value="0"  min="0" name="produit_1" id="zero_padding_left">
					</div>
				</div>

				<div class="form-grp row" id="date_A_div">
					<br />
					<label for="Reception" class="col-2 col-form-label">Produit :</label>
					<div class="col-4">
						<input type="text" name="produit_22" id="zero_padding_left">
					</div>
					<label for="Reception" class="col-1 col-form-label">Prix :</label>
					<div class="col-3">
						<input type="number" value="0"  min="0" name="produit_2" id="zero_padding_left">
					</div>
				</div>

				<div class="form-grp row" id="date_A_div">
					<br />
					<label for="Reception" class="col-2 col-form-label">Produit :</label>
					<div class="col-4">
						<input type="text" name="produit_33" id="zero_padding_left">
					</div>
					<label for="Reception" class="col-1 col-form-label">Prix :</label>
					<div class="col-3">
						<input type="number" value="0"  min="0" name="produit_3" id="zero_padding_left">
					</div>
				</div>

				<div class="form-grp row" id="date_A_div">
					<br />
					<label for="Reception" class="col-2 col-form-label">Produit :</label>
					<div class="col-4">
						<input type="text" name="produit_44" id="zero_padding_left">
					</div>
					<label for="Reception" class="col-1 col-form-label">Prix :</label>
					<div class="col-3">
						<input type="number" value="0"  min="0" name="produit_4" id="zero_padding_left">
					</div>
				</div>

				<div class="form-grp row" id="date_A_div">
					<div class="col-12">
						<p>
						<label for="remarque">Informations complémentaire :</label><br />
						<textarea name="remarque" id="remarque" rows="2"></textarea>
						</p>
					</div>
				</div>


				<div class="row justify-content-md-center">
					<div class="col-4">
						<input type="submit" value="Valider" id="boutton_enregistrement" />

					</div>
				</div>
				</form>
			</div>

		<div class="col-md-3 ml-md-auto">
			<?php
			include("includes/admin_menu.php")
			?>
		</div>
		</div>
	</div>
</div>

<?php
include("includes/footer.php");
?>

<?php } ?>
