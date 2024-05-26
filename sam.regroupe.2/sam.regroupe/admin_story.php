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
//Annulation de la validité de commande

					if ($_POST && isset($_POST['cmd_id_annule'])) {

						$req = $db->prepare('UPDATE commandes SET cmd_valide = 0 WHERE commande_ID = :cmd_id_valide');
						$req->execute(array(
							'cmd_id_valide' => $_POST['cmd_id_annule'],
							));
							// Supprimer le bordereau d'arrive
							/* $base_directory = dirname(__FILE__);
							 $base_directory.='\PDF\\';

							if (file_exists($base_directory)){
					    if(unlink($base_directory)){
					       echo "File deleted";
					    	}
							}else{
							     echo "File is not exists";
							}
							*/

					}
//************************FIN*****************************

// Validation de la commande
					if ($_POST && isset($_POST['cmd_id_valide'])) {
						$req = $db->prepare('UPDATE commandes SET cmd_valide = 1 WHERE commande_ID = :cmd_id_valide');
						$req->execute(array(
							'cmd_id_valide' => $_POST['cmd_id_valide'],
							));
					}

//*************************************************************



//Suppression de la Commande

if ($_POST && isset($_POST['supprimer'])) {

	$req_archive = $db->prepare('INSERT INTO archives SELECT * FROM commandes WHERE commande_ID = :supprimer_id');
	$req_archive->execute(array(
			'supprimer_id' => $_POST['supprimer'],
			));


	$req = $db->prepare('DELETE FROM commandes WHERE commande_ID = :supprimer_id');
	$req->execute(array(
		'supprimer_id' => $_POST['supprimer'],
		));


}

//************************FIN*****************************


// recharger les BD pour appliquer les changements précedent ( cmd annule....)
include("includes/identifiants.php");

//************************FIN*****************************

?>
<script src="http://cdn.datatables.net/plug-ins/1.10.16/sorting/date-eu.js"></script>
<script type="text/javascript">
	$(document).ready( function () {

  		$('#example').DataTable( {
  			     columnDefs: [
       { type: 'date-eu', targets: 4 },

       { type: 'date-eu', targets: 3 }
     ]

	 	 } );

	} );
</script>
<div id="main-wrappera">
	<div id="main" class="container" style="width: 100%">
		<div class="row">
			<div class="col-9">
				<div class="row justify-content-md-center">
					<div class="col-12 col-md-auto">
						<h1>Historique des commandes :</h1>
					</div>
				</div>
				<div class="row justify-content-md-center">
					<div class="col-12">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered results" cellspacing="0" width="100%">
							<caption class="title">Planning des commandes</caption>
							<thead>
								<tr class="table_head">
									<th>N° </th>
									<th>Secteur</th>
									<th>Propriétaire</th>
									<th>Type/Reception</th>
									<th>Date de début/fin</th>
									<th>adresse</th>
									<th>Commandes</th>
									<th>Facture<br/>(Locataire+proprietaire)</th>
									<th>Bon de commande</th>
									<th>Gerer</th>
								</tr>
							</thead>
							<tbody>
							<?php




							while ($row = mysqli_fetch_array($query_1))
							{

								$i=0;
								$reqq = $db->prepare('SELECT propriete_adresse_1, propriete_adresse_2, proprio_nom_prenom, proprio_secteur FROM proprio WHERE proprio_id = :pro_id ');
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

								/*else {
									if($row['cmd_annexe']==1)
									$commande_list .= "a payer par le locataire";
									else if($row['cmd_entretien']==0)
									$commande_list .= "a payer par le proprietaire"	;
								}			*/

								$Secteur="";
								if($donnees['proprio_secteur']==1)$Secteur="Charbonnière";
								else if ($donnees['proprio_secteur']==2) $Secteur="Quartier patinoire / Clare";
								else if ($donnees['proprio_secteur']==3) $Secteur="Roches fleuries / Tigny";
								else if ($donnees['proprio_secteur']==4) $Secteur="Les extérieures";

								//Calclu du prix à payer par le proprio =(prix_totale - prix_Locataire)
								$prix_proprio= $row['cmd_prix'] - $row['cmd_annexe'];
								//****************

								echo '<tr>
										<td> N° '.$row['commande_ID'].'</td>
										<td>'.$Secteur.'</td>
										<td>'.$donnees['proprio_nom_prenom'].'</td>
										<td>'.$row['cmd_presta'].'/'.$row['cmd_reception'].'</td>
										<td>'.date('d/m/Y', strtotime($row['cmd_debut'])).'<br/>'.date('d/m/Y', strtotime($row['cmd_fin'])).'</td>
										<td>'. $donnees['propriete_adresse_1'] .' '.$donnees['propriete_adresse_2'] .'</td>
										<td>'.$commande_list.'</td>
										<td>  '
										.$row['cmd_annexe'].'+'
										.$prix_proprio.'<br/>='
										.$row['cmd_prix'].

										'</td>';


								echo'


										<td><a href=PDF/BDCn_'.$row['commande_ID'].'_GRP'. $_SESSION["db_id"].'.pdf onclick="window.open(this.href); return false;">Telecharger ici</a>
												<br/>Bodereau: <a href=PDF/Bordereaun_'.$row['commande_ID'].'_GRP'. $_SESSION["db_id"].'.pdf onclick="window.open(this.href); return false;">Telecharger ici</a>
												<br/>Bon d\'arrivé: <a href=PDF/Barrive_'.$row['commande_ID'].'_GRP'. $_SESSION["db_id"].'.pdf onclick="window.open(this.href); return false;">telecharger</a>
										</td>

										<td>';
							echo'
										<form method="POST" action="remarque.php">
											<input type="hidden" name="remarque" value="'.htmlspecialchars($row['commande_ID']).'">
											<button type="submit" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="'.$row['cmd_remarque'].'">Remarque</button>
										</form>';


										if ($row['cmd_valide']==1) {
										 	echo'<br/>
										 	<form method="POST" action="admin_story.php">
											<input type="hidden" name="cmd_id_annule" value="'.htmlspecialchars($row['commande_ID']).'">
										    <button type="submit" class="btn btn-warning">Annuler</button>
										    </form>';
										 }
										 else {
											 echo'<br/>
											 <form method="POST" action="admin_story.php">
											 <input type="hidden" name="cmd_id_valide" value="'.htmlspecialchars($row['commande_ID']).'">
												 <button type="submit" class="btn btn-success">Valider</button>
												 </form>';
										 }
										 echo'<br/>

										<form method="POST" action="admin_story.php">
										<input type="hidden" name="supprimer" value="'.htmlspecialchars($row['commande_ID']).'">
											<button type="submit" class="btn btn-danger" data-toggle="tooltip" data-placement="top">supprimer</button>
										</form>

										<br/>

									 <form method="POST" action="modification_commande.php">
									 <input type="hidden" name="modifié" value="'.htmlspecialchars($row['commande_ID']).'">
										 <button type="submit" class="btn btn-warning" data-toggle="tooltip" data-placement="top">modifié</button>
										 </form>

									</td>

									</tr>



									';
							}


							?>
							</tbody>

							</table>
						</div>
					</div>
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
