<?php
include("DEBUT.php");

session_start();
if (!isset($_SESSION['pseudo'])) {
include("err_connexion.php");}
else if ($_SESSION['pseudo']!="admin")
{
	include("err_connexion.php");
}
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

	include("includes/identifiants.php");
	include("includes/fonctions.php");
	include('menu_principale.php');


	//Cas de gestion d'un utilisateur:
if ($_POST && isset($_POST['gproprio_id'])) {
include("utilisateur_gerer.php");
}
else

{
	if ($_POST && isset($_POST['utilisateur_gere_ID'])) {
	include("utilisateur_modifie.php");
}


// recharger les BD pour appliquer les changements précedent ( gestion utilisateurs...)
include("includes/identifiants.php");

//============================================
?>
<script type="text/javascript">
	$(document).ready( function () {

  		$('#example').DataTable( {


			"order": []
	 	 } );

	} );
</script>
<div id="main-wrappera">
	<div id="main" class="container" style="width: 100%">
		<div class="row">
			<div class="col-9">
				<div class="row justify-content-md-center">
					<div class="col-12 col-md-auto">
						<h1>Gestion des utilisateurs :</h1>
					</div>
				</div>
				<div class="table-responsive">
					<table id="example" class="table table-striped table-bordered results" cellspacing="0" width="100%">
					<caption class="title">Planning des commandes</caption>
					<thead>
						<tr class="table_head">
							<th>N°</th>
							<th>Propriétaire</th>
							<th>Adresse</th>
							<th>Email</th>
							<th>Telephone</th>
							<th>adresse propriété</th>
							<th>Superficie/ Piéces/ couchages</th>
							<th>Parking</th>
							<th>Saison / Paiement</th>
							<th>Date d'inscription</th>
							<th>Gerer</th>
						</tr>
					</thead>
					<tbody>
					<?php

					while ($row = mysqli_fetch_array($query_3))
					{


						echo '<tr>
								<td> N° '.$row['proprio_ID'].'</td>
								<td>'.$row['proprio_nom_prenom'].'</td>
								<td>'.$row['proprio_adresse_1'].' '.$row['proprio_adresse_2'].'</td>
								<td>'.$row['proprio_email'].'</td>
								<td>'.$row['proprio_tel'].'</td>
								<td>'. $row['propriete_adresse_1'] .' '.$row['propriete_adresse_2'] .'</td>
								<td>'.$row['propriete_superficie'] .'/'.$row['propriete_pieces'] .'/'.$row['propriete_couchage'] .'</td>
								<td>'.$row['parking_type'].' : '.$row['propriete_garage'].'</td>
								<td>'.$row['proprio_saison'].' / '.$row['proprio_paiement'].'</td>
								<td>'.$row['proprio_date_inscri'].'</td>
								<td>
									<form method="POST" action="admin_utilisateurs.php">
									<input type="hidden" name="gproprio_id" value="'.htmlspecialchars($row['proprio_ID']).'">
								    <button type="submit" class="btn btn-success">Gerer</button>
								    </form>
								</td>
							</tr>';
					}


					?>
					</tbody>

				</table>
			</div>
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
}
}
include("includes/footer.php");
?>
