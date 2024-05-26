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
	//On charge la bonne base de donnée


	if (isset($_POST['Groupe'])) {

		$db_name="null";
		$_SESSION['db_id'] = "null";
		$_SESSION['db'] = "null";

		if ($_POST['Groupe']=='1') {
				$_SESSION['db_id'] = '1';
				$_SESSION['db'] = BDD_Grp1;
				$db_name=BDD_Grp1; // nom de la base de donnée

		}

		else if ($_POST['Groupe']=='2') {
			$_SESSION['db_id'] = '2';
				$_SESSION['db'] = BDD_Grp2;
				$db_name=BDD_Grp2; // nom de la base de donnée
		}

		else if ($_POST['Groupe']=='3') {
			$_SESSION['db_id'] = '3';
				$_SESSION['db'] = BDD_Grp3;
				$db_name=BDD_Grp3; // nom de la base de donnée
		}

	}
		// Récuperer la base de données séléctionnée selon le groupe
		include("includes/identifiants.php");
		//==========================================================


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

// Validartion de la commande et impression du bon d'arrivé


					if ($_POST && isset($_POST['cmd_id_arrive'])) {

						$req = $db->prepare('UPDATE commandes SET cmd_valide = 1 WHERE commande_ID = :cmd_id_valide');
						$req->execute(array(
							'cmd_id_valide' => $_POST['cmd_id_arrive'],
							));
					include("PDF_arrive.php");
					}

//Modification des Remarques

					if ($_POST && isset($_POST['remarque_1'])) {
						$req = $db->prepare('UPDATE commandes SET cmd_remarque = :remarque WHERE commande_ID = :cmd_id_valide');
						$req->execute(array(
							'remarque' => $_POST['remarque_1'],
							'cmd_id_valide' => $_POST['remarque'],
							));

					}

// Gestion des bouttons valider

					if ($_POST && isset($_POST['cmd_id_valide_presta'])) {
						$reqq_1 = $db->prepare('SELECT cmd_presta_valide FROM commandes WHERE commande_ID = :cmd_id_valide');
						$reqq_1->execute(array(
							'cmd_id_valide' => $_POST['cmd_id_valide_presta']
						));
						$donnees_1 = $reqq_1->fetch();
						if($donnees_1['cmd_presta_valide']==0){
						$req = $db->prepare('UPDATE commandes SET cmd_presta_valide = 1 WHERE commande_ID = :cmd_id_valide_presta');
						$req->execute(array(
							'cmd_id_valide_presta' => $_POST['cmd_id_valide_presta'],
							));}

						else {
							$req = $db->prepare('UPDATE commandes SET cmd_presta_valide = 0 WHERE commande_ID = :cmd_id_valide_presta');
							$req->execute(array(
							'cmd_id_valide_presta' => $_POST['cmd_id_valide_presta'],
							));}
					}

// ***********

// recharger les BD pour appliquer les changements précedent ( cmd annule....)
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
					<div class="row justify-content-md-center">
						<div class="col-12 col-md-auto">
							<h1>Planning des commandes :</h1>
						</div>
					</div>
				</div>
					<?php if ($_POST && isset($_POST['cmd_id_arrive'])) {?>

				<div class="row justify-content-md-center">
						<div class="col-6">
							L'arrivé a bien été validée. Vous pouvez telecharger le Bon d'arrivé <?php echo'<a href=PDF/Barrive_'.$_POST['cmd_id_arrive'].'_GRP'. $_SESSION["db_id"].'.pdf onclick="window.open(this.href); return false;">ici</a>' ?>.<br/>

						</div>

					</div><?php }?>

					<div class="table-responsive">
						<table id="example" class="table table-striped table-bordered results" cellspacing="0" width="100%">
						<caption class="title">Planning des commandes</caption>
						<thead>
							<tr class="table_head">
								<th>N°</th>
								<th>Secteur</th>
								<th>Type/Reception</th>
								<th>Date de début/fin</th>
								<th>Locataire</th>
								<th>adresse</th>
								<th>Commandes</th>
								<th>Remarque</th>
								<th>valider la préstation</th>
								<th>valider l'acceuil</th>
							</tr>
						</thead>
						<tbody>
						<?php




						while ($row = mysqli_fetch_array($query))
						{

							$i=0;
							$reqq = $db->prepare('SELECT propriete_adresse_1, propriete_adresse_2, proprio_secteur FROM proprio WHERE proprio_id = :pro_id ');
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

							if ($row['cmd_mena_fin_prix'] != "0") {
								$commande_list .= " Ménage fin de semaine : ".$row['cmd_mena_fin_prix']." E</br>";
							}
							else $i++;

							if ($row['cmd_deg'] != "0") {
								$commande_list .= " Degraissage : ".$row['cmd_deg']." E</br>";
							}
							else $i++;

							if ($i==14) {
								$commande_list .="Aucun";
							}
							else {
								if($row['cmd_annexe']==0)
								$commande_list .= '<span style="text-decoration: underline; font-weight: bold;">a payer par le proprietaire</span> ';
								else if($row['cmd_annexe']!=0)
								$commande_list .= '<span style="text-decoration: underline; font-weight: bold;">a payer par le locataire</span>'	;
							}
							$Secteur="";
							if($donnees['proprio_secteur']==1)$Secteur="Charbonnière";
							else if ($donnees['proprio_secteur']==2) $Secteur="Quartier patinoire / Clare";
							else if ($donnees['proprio_secteur']==3) $Secteur="Roches fleuries / Tigny";
							else if ($donnees['proprio_secteur']==4) $Secteur="Les extérieures";
							$remarque="";
							$remarque.=htmlspecialchars($row['cmd_remarque']);

							echo '<tr>
									<td>'.$row['commande_ID'].'</td>
									<td>'.$Secteur.'</td>
									<td>'.$row['cmd_presta'].'/'.$row['cmd_reception'].'</td>
									<td><u>'.date('d/m/Y', strtotime($row['cmd_debut'])).'</u><br/>'.date('d/m/Y', strtotime($row['cmd_fin'])).'</td>
									<td>'. $row['cmd_client'].'</td>
									<td>'. $donnees['propriete_adresse_1'] .' '.$donnees['propriete_adresse_2'] .'</td>
									<td>'.$commande_list.'</td>
									<td>
										<form method="POST" action="remarque.php">
										<input type="hidden" name="remarque" value="'.htmlspecialchars($row['commande_ID']).'">
									    <button type="submit" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="'.$row['cmd_remarque'].'">Infos</button>
									    </form>
									</td>
									<td>';
									if ($row['cmd_presta_valide']==0) {
									 	echo'
									 	<form method="POST" action="admin.php">
										<input type="hidden" name="cmd_id_valide_presta" value="'.htmlspecialchars($row['commande_ID']).'">
									    <button type="submit" class="btn btn-success">Valider</button>
									    </form>';
									 }
									 else if ($row['cmd_presta_valide']==1) {
									 	echo'
									 	<form method="POST" action="admin.php">
										<input type="hidden" name="cmd_id_valide_presta" value="'.htmlspecialchars($row['commande_ID']).'">
									    <button type="submit" class="btn btn-warning">Annuler</button>
									    </form>';
									 }
							echo '
									</td>
									<td>
									 	<form method="POST" action="validation_cmd.php">
										<input type="hidden" name="cmd_id_valide" value="'.htmlspecialchars($row['commande_ID']).'">
									    <button type="submit" class="btn btn-success">Valider</button>
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
include("includes/footer.php");
?>

<?php } ?>
