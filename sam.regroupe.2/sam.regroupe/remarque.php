<?php
include("DEBUT.php");
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
	$req = $db->prepare('SELECT cmd_remarque FROM commandes WHERE commande_ID = :cmd_id_valide');
	$req->execute(array(
		'cmd_id_valide' => $_POST['remarque'],
		));
	$donnees_4 = $req->fetch();

?>
<div id="main-wrappera">
	<div id="main" class="container" style="width: 100%">
		<div class="row ">
			<div class="col-9">
				<div class="row justify-content-md-center">	
					<div class="col-12 col-md-auto">
						<h1>Informations complémentaires de la commande :</h1>
					</div>
				</div>
				<form class="enregistrement" method="post" action="admin.php" enctype="multipart/form-data">
				<div class="row justify-content-md-center">
					<div class="col-9">
						<?php
						echo '<input type="hidden" name="remarque" value="'.htmlspecialchars($_POST['remarque']).'">';
						?>
						<label for="remarque_1">Remarque :</label><br />
						<textarea name="remarque_1" id="remarque_1" rows="2"><?php echo htmlspecialchars($donnees_4['cmd_remarque']); ?></textarea>		
					</div>		
				</div>
				<div class="row justify-content-md-center">
					<div class="col-4">
						<input type="submit" value="Valider" id="boutton_enregistrement" />
						
					</div>
				</div>
				</form>						
			</div>

		<div class="col-3">
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