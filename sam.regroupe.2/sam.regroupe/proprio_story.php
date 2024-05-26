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

				<?php
// Supprimer la commande annulée
				if ($_POST && isset($_POST['cmd_id_annule'])) {

					$req = $db->prepare('DELETE FROM commandes WHERE commande_ID = :cmd_id_annule');
					$req->execute(array(
						'cmd_id_annule' => $_POST['cmd_id_annule'],
						));

					}

// recharger les BD pour appliquer les changements précedent ( cmd annule....)
include("includes/identifiants.php");

//============================================
				?>
<!DOCTYPE HTML>
<!--
	TXT by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<?php


?>
<script src="http://cdn.datatables.net/plug-ins/1.10.16/sorting/date-eu.js"></script>
<script type="text/javascript">
	$(document).ready( function () {


  		$('#example1').DataTable( {
  			     columnDefs: [
       { type: 'date-eu', targets: 2 }
     ]

	 	 } );

	} );
</script>
<div id="main-wrapperb">
	<div id="main" class="container" style="width: 100%">
		<div class="row">
			<div class="col-9">
			<div class="row justify-content-md-center">
				<div class="col-12 col-md-auto">
					<h1>Historique de vos commandes :</h1>
				</div>
			</div>

				<table id="example1" class="table table-striped table-bordered results" cellspacing="0" width="100%">
				<caption class="title">Planning des commandes</caption>
				<thead>
					<tr class="table_head">
						<th>N°</th>
						<th>Type/Reception</th>
						<th>Date de début</th>
						<th>Locataire</th>
						<th>Commandes</th>
						<th>Prix</th>
						<th>facture locataire</th>
						<th>Télécharger</th>
						<th>Annuler</th>
					</tr>
				</thead>
				<tbody>
				<?php



				while ($row = mysqli_fetch_array($query_2))
				{
					$i=0;
					$reqq = $db->prepare('SELECT proprio_adresse_1, proprio_adresse_2 FROM proprio WHERE proprio_id = :pro_id ');
					$reqq->execute(array(
						'pro_id' => $row['cmd_proprio_id']
					));
					$donnees = $reqq->fetch();

					// Case commande :
					$commande_list="";
					//$commande_list .="Liste des produits commandés: </br>";
					if ($row['cmd_drap_1'] != "0") {
						$commande_list .= $row['cmd_drap_1']." Draps simples </br>";
					}
					else $i++;

					if ($row['cmd_drap_2'] != "0") {
						$commande_list .= $row['cmd_drap_2']." Draps doubles </br>";
					}
					else $i++;

					if ($row['cmd_couette_1'] != "0") {
						$commande_list .= $row['cmd_couette_1']." Couettes simples </br>";
					}
					else $i++;

					if ($row['cmd_couette_2'] != "0") {
						$commande_list .= $row['cmd_couette_2']." Couettes doubles </br>";
					}
					else $i++;

					if ($row['cmd_kit_bebe'] != "0") {
						$commande_list .= $row['cmd_kit_bebe']." Kit pour bebe </br>";
					}
					else $i++;

					if ($row['cmd_lit_bebe'] != "0") {
						$commande_list .= $row['cmd_lit_bebe']." lit pour bebe </br>";
					}
					else $i++;

					if ($row['cmd_srv'] != "0") {
						$commande_list .= $row['cmd_srv']." Serviettes </br>";
					}
					else $i++;

					if ($row['cmd_srv_piscine'] != "0") {
						$commande_list .= $row['cmd_srv_piscine']." Serviettes de piscine </br>";
					}
					else $i++;

					if ($row['cmd_tapis_bain'] != "0") {
						$commande_list .= $row['cmd_tapis_bain']." Tapis de bain </br>";
					}
					else $i++;

					if ($row['cmd_torchon'] != "0") {
						$commande_list .= $row['cmd_torchon']." Torchons </br>";
					}
					else $i++;

					if ($row['cmd_hygiene'] != "0") {
						$commande_list .= $row['cmd_hygiene']." Produits d'hygiene </br>";
					}
					else $i++;

					if ($row['cmd_entretien'] != "0") {
						$commande_list .= $row['cmd_entretien']." Produits d'entretien </br>";
					}
					else $i++;

					if ($i==12) {
						$commande_list .="Aucun";
					}


					echo '<tr>
							<td>'.$row['commande_ID'].'</td>
							<td>'.$row['cmd_presta'].'/'.$row['cmd_reception'].'</td>
							<td>'.date('d/m/Y', strtotime($row['cmd_debut'])).'</td>
							<td>'. $row['cmd_client'].'</td>
							<td>'.$commande_list.'</td>
							<td>'.$row['cmd_prix'].'</td>
							<td>'.$row['cmd_annexe'].'</td>
							<td>BDC: <a href=PDF/BDCn_'.$row['commande_ID'].'_GRP'. $_SESSION["db_id"].'.pdf onclick="window.open(this.href); return false;">Telecharger ici</a>
							<br/>Bodereau: <a href=PDF/Bordereaun_'.$row['commande_ID'].'_GRP'. $_SESSION["db_id"].'.pdf onclick="window.open(this.href); return false;">Telecharger ici</a>
							</td>';
					if (date("Y-m-d ") < $row['cmd_debut']) {
						echo
							'<td>
								<form method="POST" action="proprio_story.php">
								<input type="hidden" name="cmd_id_annule" value="'.htmlspecialchars($row['commande_ID']).'">
							    <button type="submit" class="btn btn-success">Annuler</button>
							    </form>
							</td>';

					}
					else echo '<td></td>';
					echo '</tr>';
				}


				?>
				</tbody>

			</table>

		</div>

		<div class="col-3">
			<?php include("includes/proprio_menu.php"); ?>
		</div>
		</div>
	</div>
</div>

<?php
include("includes/footer.php");
?>

<?php } ?>
