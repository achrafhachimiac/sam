<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include("DEBUT.php");
session_start();
if (!isset($_SESSION['pseudo'])) {
include("err_connexion.php");}
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
//include("../menu_principale.php");


if ($_POST && isset($_POST['modifié'])) {
  $commande_ID=$_POST['modifié'];

$req_3 = $db->prepare('SELECT * FROM commandes WHERE commande_ID =:commande_ID');
$req_3->execute(array(
'commande_ID' => $_POST['modifié'],
));
$donnees_3 = $req_3->fetch();

?>
		<!-- Banner -->
<div id="main-wrapperb">
	<div id="main" class="container">
		<div class="row">
			<div class="col-8">
			<!-- Content -->
			<?php
			$doublon_date=0;
			if(isset($_POST['date_debut'])){

				while ($row = mysqli_fetch_array($query_2))
						{
							if ($_POST['date_debut']==$row['cmd_debut']) {
								$doublon_date=1;
							}
						}

			}

 ?>

			<form class="form-horizontal formulaire_mdp" method="post" action="modification_commande.php" enctype="multipart/form-data" id="formulaire_mdp">
				<div id="div_cmd_1" class="div_cmd_1">
					<div class="row justify-content-md-center">
						<div class="col-12 col-md-auto">
							<h1>Bon de commande: <?php if($doublon_date==1) echo '<br/>Un doublon de date a été détecté veillez réessayer';  ?></h1>
						</div>
					</div>

					<div class="row">

						<div class="col-12" id="From_contour">
							<div class="row">
								<div class="col-12">
									<div class="form-group row">
										<label for="Type_presta" class="control-label col-sm-3" style="padding-left: 0;"style="padding-left: 0;">Type de préstation :</label>
										<div class="col-sm-9" >
											<select class="form-control" name="Type_presta" id="presta">
                        <?php
                        if ($donnees_3[cmd_presta]=='Confort')
                        echo'
						   						<option value="Confort" selected>Confort</option>
						    					<option value="Confort+">Confort +</option>
						    					<option value="Charme">Charme</option>
						    					<option value="Prestige">Prestige</option>
						    					<option value="Aucune">Aucune</option>';
                      elseif ($donnees_3[cmd_presta]=='Confort+') {
                        echo'
                          <option value="Confort" >Confort</option>
                          <option value="Confort+" selected>Confort +</option>
                          <option value="Charme">Charme</option>
                          <option value="Prestige">Prestige</option>
                          <option value="Aucune">Aucune</option>';
                      }
                      elseif ($donnees_3[cmd_presta]=='chamre') {
                        echo'
                          <option value="Confort" >Confort</option>
                          <option value="Confort+" >Confort +</option>
                          <option value="Charme" selected>Charme</option>
                          <option value="Prestige">Prestige</option>
                          <option value="Aucune">Aucune</option>';
                      }
                      elseif ($donnees_3[cmd_presta]=='Prestige') {
                        echo'
                          <option value="Confort" >Confort</option>
                          <option value="Confort+" >Confort +</option>
                          <option value="Charme">Charme</option>
                          <option value="Prestige" selected>Prestige</option>
                          <option value="Aucune">Aucune</option>';
                      }
                      elseif ($donnees_3[cmd_presta]=='Aucune') {
                        echo'
                          <option value="Confort" >Confort</option>
                          <option value="Confort+" >Confort +</option>
                          <option value="Charme">Charme</option>
                          <option value="Prestige">Prestige</option>
                          <option value="Aucune" selected>Aucune</option>';
                      }
                          ?>
											</select>
										</div>
									</div>
									<div class="form-group row">
										<label for="Reception" class="control-label col-sm-3"style="padding-left: 0;">Réception :</label>
										<div class="col-sm-9">
											<select class="form-control" name="Reception" id="Reception">
                        <?php
                        if ($donnees_3[cmd_reception]=='location'){
                        echo'
						   						<option value="location" selected>A la location</option>
						    					<option value="bureau">Au bureau +</option>
						    					<option value="residence">En résidence</option>
						    					<option value="Aucune">Aucune</option>';

                        }
                        elseif ($donnees_3[cmd_reception]=='bureau') {
                          echo'
                            <option value="location" >A la location</option>
                            <option value="bureau" selected>Au bureau +</option>
                            <option value="residence">En résidence</option>
                            <option value="Aucune">Aucune</option>';
                        }
                        elseif ($donnees_3[cmd_reception]=='residence') {
                          echo'
                            <option value="location" >A la location</option>
                            <option value="bureau">Au bureau +</option>
                            <option value="residence" selected>En résidence</option>
                            <option value="Aucune">Aucune</option>';
                        }
                        elseif ($donnees_3[cmd_reception]=='Aucune') {
                          echo'
                            <option value="location" >A la location</option>
                            <option value="bureau">Au bureau +</option>
                            <option value="residence">En résidence</option>
                            <option value="Aucune" selected>Aucune</option>';
                        }


                          ?>

											</select>
										</div>
									</div>
									<div class="form-group row">

										<div class="form-inline col-6" id="date_A_div" style="padding-left: 0;">
											<label class="col-4 col-form-label" id="zero_padding_left" style="padding-left: 0;">date d'arrivée:</label>
											<div class="col-8" id="zero_padding_left">
												<input type="date" name="date_debut" id="date_debut" value="<?php echo htmlspecialchars($donnees_3['cmd_debut']); ?>"/>
											</div>
										</div>



										<div class="form-inline col-6" id="date_F_div">
											<label class="col-4 col-form-label" id="zero_padding_left">date de départ:</label>
											<div class="col-8" id="zero_padding_left">
												<input type="date" name="date_fin" id="date_fin" value="<?php echo htmlspecialchars($donnees_3['cmd_fin']); ?>"/>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="row justify-content-md-center">
								<div class="col-12 col-md-auto">
									<h2>Commandes annexes</h2>
								</div>
							</div>
							<div class="row">
								<!--<div id="owl-demo" class="owl-carousel owl-theme">-->

									<div class="col-3 item">
										<div class="div_cmd_image">
											<img src="drap_1.png" alt="Un drap"/>
										</div>
										<div class="div_cmd_legend">
											<label for="drap_1">Drap simple</label><input type="number"   min="0" name="drap_1" id="drap_1" data-prix="10"/ value="<?php echo htmlspecialchars($donnees_3['cmd_drap_1']); ?>"/>
										</div>
									</div>

									<div class="col-3 item">

										<div class="div_cmd_image">
											<img src="drap_1.png" alt="Un drap"/>
										</div>
										<div class="div_cmd_legend">
											<label for="drap_1">Drap double</label><input type="number"  min="0" name="drap_2" id="drap_2" data-prix="12"/ value="<?php echo htmlspecialchars($donnees_3['cmd_drap_2']); ?>"/>
										</div>
									</div>

									<div class="col-3 item">
											<div class="div_cmd_image">
												<img src="couette_1.png" alt="Une couette"/>
											</div>
											<div class="div_cmd_legend">
												<label for="couette_1">Couette simple</label><input type="number"   min="0" name="couette_1" id="couette_1" data-prix="13"/ value="<?php echo htmlspecialchars($donnees_3['cmd_couette_1']); ?>"/>
											</div>
									</div>

									<div class="col-3 item">
											<div class="div_cmd_image">
												<img src="couette_2.png" alt="Une couette"/>
											</div>
											<div class="div_cmd_legend">
												<label for="couette_2">Couette double</label><input type="number"  min="0" name="couette_2" id="couette_2" data-prix="16" value="<?php echo htmlspecialchars($donnees_3['cmd_couette_2']); ?>"/>
											</div>

									</div>
								</div>
							<div class="row">
								<div class="col-3 item">
										<div class="div_cmd_image">
											<img src="kit_bebe.png" alt="Kit bebe"/>
										</div>
										<div class="div_cmd_legend">
											<label for="kit_bebe">Kit bebe </label><br />	<input type="number"   min="0" name="kit_bebe" id="kit_bebe" data-prix="35" value="<?php echo htmlspecialchars($donnees_3['cmd_kit_bebe']); ?>"/>
										</div>
								</div>

								<div class="col-3 item">
										<div class="div_cmd_image">
											<img src="lit_bebe.png" alt="Lit pour bebe"/>
										</div>
										<div class="div_cmd_legend">
											<label for="lit_bebe">Lit pour bebe</label><input type="number"   min="0" name="lit_bebe" id="lit_bebe" data-prix="12" value="<?php echo htmlspecialchars($donnees_3['cmd_lit_bebe']); ?>"/>
										</div>

								</div>
								<div class="col-3 item">
										<div class="div_cmd_image">
											<img src="serviette.png" alt="serviette"/>
										</div>
										<div class="div_cmd_legend">
											<label for="serviette">Serviette</label><input type="number"  min="0" name="serviette" id="serviette" data-prix="6" value="<?php echo htmlspecialchars($donnees_3['cmd_srv']); ?>"/>
										</div>

								</div>

								<div class="col-3 item">

										<div class="div_cmd_image">
											<img src="serviette_piscine.png" alt="Serviette piscine"/>
										</div>
										<div class="div_cmd_legend">
											<label for="serviette_piscine">Serviette piscine</label><input type="number"  min="0" name="serviette_piscine" id="serviette_piscine" data-prix="4" value="<?php echo htmlspecialchars($donnees_3['cmd_srv_piscine']); ?>"/>
										</div>

								</div>

							</div>
							<div class="row">


								<div class="col-3 item">

										<div class="div_cmd_image">
											<img src="tapis_bain.png" alt="Tapis de bain"/>
										</div>
										<div class="div_cmd_legend">
											<label for="tapis_bain">Tapis de bain</label><input type="number"   min="0" name="tapis_bain" id="tapis_bain" data-prix="2" value="<?php echo htmlspecialchars($donnees_3['cmd_tapis_bain']); ?>" />
										</div>

								</div>

								<div class="col-3 item">

										<div class="div_cmd_image">
											<img src="torchon.png" alt="torchon"/>
										</div>
										<div class="div_cmd_legend">
											<label for="torchon">Torchons (x2)</label><input type="number"   min="0" name="torchon" id="torchon" data-prix="3" value="<?php echo htmlspecialchars($donnees_3['cmd_torchon']); ?>" />
										</div>

								</div>

								<div class="col-3 item">

										<div class="div_cmd_image">
											<img src="hygiene.png" alt="Produits d'hygiene"/>
										</div>
										<div class="div_cmd_legend">
											<label for="hygiene">Produit d'hygiene</label><input type="number"   min="0" name="hygiene" id="hygiene" data-prix="7" value="<?php echo htmlspecialchars($donnees_3['cmd_hygiene']); ?>" />
										</div>

								</div>

								<div class="col-3 item">

									<div class="div_cmd_image">
										<img src="entretien.png" alt="Produits d'entretien"/>
									</div>
									<div class="div_cmd_legend">
										<label for="entretien">Produit d'entretien</label><input type="number"  min="0" name="entretien" id="entretien" data-prix="7" value="<?php echo htmlspecialchars($donnees_3['cmd_entretien']); ?>" />
									</div>
								</div>
							</div>


						<div class="row" id="cmd_men_fin">
							<div class="col-6">
								<p> Ménage de fin de séjour:<br />
							</div>
							<div class="col-3">

						        <div class="form-grp">
						        	<label class="custom-control custom-radio">
                        <?php if ($donnees_3['cmd_mena_fin_prix']!=0) {
                          echo'<input type="radio" name="cmd_men_fin"  value="1" id="Oui" class="custom-control-input" checked="checked" />';

                        }
                        else {
                          echo'<input type="radio" name="cmd_men_fin"  value="1" id="Oui" class="custom-control-input" />';  // code...
                        }?>

						     			<span class="custom-control-indicator"></span>
						     			<span class="custom-control-description">Oui</span>
						     		</label>
						      	</div>
						      </div>
						    <div class="col-3">
						      	<div class="form-grp">
						      		<label class="custom-control custom-radio">
                      <?php if ($donnees_3['cmd_mena_fin_prix']==0) {
                        echo'<input type="radio" name="cmd_men_fin"  value="0" id="Non" class="custom-control-input" checked="checked"/>';
                      }
                      else {
                        echo'<input type="radio" name="cmd_men_fin"  value="0" id="Non" class="custom-control-input"/>';
                      }?>
						     			<span class="custom-control-indicator"></span>
						     			<span class="custom-control-description">Non</span>
						     		</label>
						     	</div>
						    </div></p>
						</div>



						<div class="row" id="cmd_annexe">
							<div class="col-6">
								<p> Paiement des commandes annexes (ménage de fin de séjour inclu) par:<br />
							</div>
							<div class="col-3">
						        <div class="form-grp">
						        	<label class="custom-control custom-radio">
                        <?php
                        if ($donnees_3['cmd_annexe']==0) {
                        echo '<input type="radio" name="cmd_annexe"  value="0" id="proprio" class="custom-control-input" checked="checked"/>';
                        }
                        else {
                        echo'<input type="radio" name="cmd_annexe"  value="0" id="proprio" class="custom-control-input" />';
                        }
                        ?>
						     			<span class="custom-control-indicator"></span>
						     			<span class="custom-control-description">Moi-même</span>
						     		</label>
						      	</div>
						    </div>
						    <div class="col-3">
						      	<div class="form-grp">
						      		<label class="custom-control custom-radio">
                        <?php
                        if ($donnees_3['cmd_annexe']!=0) {
                          echo '<input type="radio" name="cmd_annexe"  value="1" id="locataire" class="custom-control-input" checked="checked"/>';
                        }
                        else {
                          echo '<input type="radio" name="cmd_annexe"  value="1" id="locataire" class="custom-control-input" />';
                        }
                        ?>

						     			<span class="custom-control-indicator"></span>
						     			<span class="custom-control-description">Le locataire</span>
						     		</label>
						     	</div>
						    </div></p>
						</div>

						<div class="row" id="cmd_fonct" style="margin-top: -5em;">
							<div class="col-6">
								<p> Degraissage:<br />
							</div>
							<div class="col-3">
						        <div class="form-grp">
						        	<label class="custom-control custom-radio">
                        <?php
                        if ($donnees_3['cmd_deg']!=0) {
                          echo '<input type="radio" name="cmd_fonct"  value="1" id="Deg" class="custom-control-input" checked="checked"/>';
                        }
                        else {
                          echo '<input type="radio" name="cmd_fonct"  value="1" id="Deg" class="custom-control-input" />';
                        }
                        ?>
						     			<span class="custom-control-indicator"></span>
						     			<span class="custom-control-description">Oui</span>
						     		</label>
						      	</div>
						      </div>
						    <div class="col-3">
						      	<div class="form-grp">
						      		<label class="custom-control custom-radio">
                        <?php
                        if ($donnees_3['cmd_deg']==0) {
                          echo '<input type="radio" name="cmd_fonct"  value="0" id="PasDeg" class="custom-control-input" checked="checked"/>';
                        }
                        else {
                          echo '<input type="radio" name="cmd_fonct"  value="0" id="PasDeg" class="custom-control-input" />';
                        }
                        ?>
						     			<span class="custom-control-indicator"></span>
						     			<span class="custom-control-description">Non</span>
						     		</label>
						     	</div>
						    </div></p>
						</div>




							<!--Variable créer pour récuperer le prix de la presta et la réception lorsqu'on génère le pdf // et pour récupérer les calcules javascript en php -->

							<input type="hidden" id="Type_presta_prix" name="Type_presta_prix" value="" />
							<input type="hidden" id="Menage_fin_prix" name="Menage_fin_prix" value="" />
							<input type="hidden" id="Reception_prix" name="Reception_prix" value="" />
							<input type="hidden" id="Locataire_prix" name="Locataire_prix" value="" />
							<input type="hidden" id="Commande_deg" name="Commande_deg" value="" />
              <input type="hidden" id="commande_ID" name="commande_ID" value="<?php echo htmlspecialchars($commande_ID); ?>" />
              <input type="hidden" id="proprio_id" name="proprio_id" value="<?php echo htmlspecialchars($donnees_3["cmd_proprio_id"]); ?>" />
              <input type="hidden" id="cmd_modifie" name="cmd_modifie" value="1" />



							<!-- ==================================================================================== -->
							<section class="section_prix">
							<div class="row justify-content-md-center">
								<div class="col-12 col-md-auto">
									<span id ="span_prix" class="span_prix"> Prix:</span>
									<input type="hidden" id= "prix_totale" name="prix_totale" value="0" />
									<input type="hidden" id= "prix_totale_tva" name="prix_totale_tva" value="0" />

									<!-- Recuperer la superficie et le nombre de couchage pour calculer le prix dans le script suivant -->

									<?php

									$req = $db->prepare('SELECT propriete_superficie, propriete_couchage FROM proprio WHERE proprio_id = ? ');
									$req->execute(array($_SESSION['id']));
									$donnees = $req->fetch();
									$proprio_superficie=$donnees['propriete_superficie'];
									$proprio_couchage=$donnees['propriete_couchage'];







									?>

									<script type="text/javascript">
										// Validation de la date
								        $('#datepicker').datepicker({
								            uiLibrary: 'bootstrap4'
								        });

								        var valdiation = 0 ;

								        var div_cmd_1 = document.querySelector("#div_cmd_1");

								        div_cmd_1.addEventListener("change", function(){
								        	compare_dates();
								        	calcul_prix();

								        }, false);






								        function compare_dates(){

								        	var date_debut = new Date(document.getElementById("date_debut").value);
								        	var date_fin = new Date(document.getElementById("date_fin").value);

								        	var debut = document.getElementById('date_debut');
								        	var fin  = document.getElementById('date_fin');

								            var debut_div = document.getElementById('date_A_div');
								            var fin_div = document.getElementById('date_F_div');


											if ( ( $("#date_debut").val() ) && ( $("#date_fin").val() ) ){
												var d = new Date();
 													d.setDate(d.getDate()-1);



								        		if (date_debut >= date_fin || d > date_debut) {

								        			debut_div.setAttribute('class', 'form-inline col-6 has-danger');
								        			fin_div.setAttribute('class', 'form-inline col-6 has-danger');

								        			debut.setAttribute('class' , 'form-control form-control-danger');
								        			fin.setAttribute('class', 'form-control form-control-danger');
								        			$("#submit").attr("disabled", "disabled");
								        		}

								        		else {

								        			debut_div.setAttribute('class', 'form-inline col-6 has-success');
								        			fin_div.setAttribute('class', 'form-inline col-6 has-success');

								        			debut.setAttribute('class' , 'form-control form-control-success');
								        			fin.setAttribute('class', 'form-control form-control-success');
								        			document.getElementById("submit").removeAttribute("disabled");


								        		}
								        	}

								        }



										// calcul du prix totale
										var prix = 0 ;
										var drap_1 = document.getElementById('drap_1'),
											drap_2 = document.getElementById('drap_2'),
											couette_1 = document.getElementById('couette_1'),
											couette_2 = document.getElementById('couette_2'),
											kit_bebe = document.getElementById('kit_bebe'),
											lit_bebe = document.getElementById('lit_bebe'),
											serviette = document.getElementById('serviette'),
											serviette_piscine = document.getElementById('serviette_piscine'),
											tapis_bain = document.getElementById('tapis_bain'),
											torchon = document.getElementById('torchon'),
											hygiene = document.getElementById('hygiene'),
											entretien = document.getElementById('entretien'),
											type_depresta =document.getElementById('presta'),
											reception =document.getElementById('Reception'),
											Type_presta_prix=document.getElementById('Type_presta_prix'),
											Reception_prix=document.getElementById('Reception_prix'),
											menage_fin=document.getElementById('cmd_men_fin'),
											menage_fin_prix=document.getElementById('Menage_fin_prix'),
											Locataire_prix=document.getElementById('Locataire_prix')
											Commande_deg=document.getElementById('Commande_deg');






										var sup='<?PHP echo $proprio_superficie;?>'
										var couchage='<?PHP echo $proprio_couchage;?>'


										var span_prix = document.getElementById('span_prix');


											function calcul_prix(){
												prix_T=0;
												prix_P= 0;
												prix_R= 0;
												prix_A=0;
												prix_MF=0;
												prix_L=0;
												prix_D=0;
												//Integration du prix de la préstation choisie selon les caractéristiques de la propriété
												if (type_depresta.value=='Confort' ) {
													if (sup < 35) {
														prix_P=32;
													}
													else if (sup >= 35 && sup <= 45) {
														prix_P=37;
													}
													else if (sup > 45 && couchage <= 8){
														prix_P=43;
													}
													else if (sup > 45 && couchage > 8){
														prix_P=49;
													}
												}
												if (type_depresta.value=='Confort+' ) {
													if (sup < 35) {
														prix_P=75;
													}
													else if (sup >= 35 && sup <= 45) {
														prix_P=105;
													}
													else if (sup > 45 && couchage <= 8){
														prix_P=129;
													}
													else if (sup > 45 && couchage > 8){
														prix_P=150;
													}

												}

												if (type_depresta.value=='Charme' ) {
													if (sup < 35) {
														prix_P=38;
													}
													else if (sup >= 35 && sup <= 45) {
														prix_P=45;
													}
													else if (sup > 45 && couchage <= 8){
														prix_P=49;
													}
													else if (sup > 45 && couchage > 8){
														prix_P=58;
													}

												}

												if (type_depresta.value=='Prestige' ) {
													if (sup < 35) {
														prix_P=88;
													}
													else if (sup >= 35 && sup <= 45) {
														prix_P=117;
													}
													else if (sup > 45 && couchage <= 8){
														prix_P=150;
													}
													else if (sup > 45 && couchage > 8){
														prix_P=170;
													}

												}
												else if (type_depresta.value=='Aucune' ) {
													prix_P=0;
												}
												// prix Reception



												// recupère le prix de la présta:

													Type_presta_prix.setAttribute('value' , prix_P);




												if (reception.value=='location') {
													prix_R=42;
													Reception_prix.setAttribute('value' , 42);
												}

												if (reception.value=='bureau') {
													prix_R=32;
													Reception_prix.setAttribute('value' , 32);
												}

												if (reception.value=='residence') {
													prix_R=36;
													Reception_prix.setAttribute('value' , 36);
												}

												if (reception.value=='Aucune') {
													prix_R=0;
													Reception_prix.setAttribute('value' , 0);
												}


												//Reception_prix.setAttribute('value' , prix);

												if (drap_1.value!==undefined)
												prix_A=Number(drap_1.getAttribute("data-prix"))*Number(drap_1.value)+prix_A;
												//else drap_1.value ='0';
												if (drap_2.value!==undefined)
												prix_A=Number(drap_2.getAttribute("data-prix"))*Number(drap_2.value)+prix_A;
												if (couette_1.value!==undefined)
												prix_A=Number(couette_1.getAttribute("data-prix"))*Number(couette_1.value)+prix_A;

												if (couette_2.value!==undefined)
												prix_A=Number(couette_2.getAttribute("data-prix"))*Number(couette_2.value)+prix_A;

												if (kit_bebe.value!==undefined)
												prix_A=Number(kit_bebe.getAttribute("data-prix"))*Number(kit_bebe.value)+prix_A;

												if (lit_bebe.value!==undefined)
												prix_A=Number(lit_bebe.getAttribute("data-prix"))*Number(lit_bebe.value)+prix_A;

												if (serviette.value!==undefined)
												prix_A=Number(serviette.getAttribute("data-prix"))*Number(serviette.value)+prix_A;

												if (serviette_piscine.value!==undefined)
												prix_A=Number(serviette_piscine.getAttribute("data-prix"))*Number(serviette_piscine.value)+prix_A;

												if (tapis_bain.value!==undefined)
												prix_A=Number(tapis_bain.getAttribute("data-prix"))*Number(tapis_bain.value)+prix_A;

												if (torchon.value!==undefined)
												prix_A=Number(torchon.getAttribute("data-prix"))*Number(torchon.value)+prix_A;

												if (hygiene.value!==undefined)
												prix_A=Number(hygiene.getAttribute("data-prix"))*Number(hygiene.value)+prix_A;

												if (entretien.value!==undefined)
												prix_A=Number(entretien.getAttribute("data-prix"))*Number(entretien.value)+prix_A;

												// Calcul prix ménage fin de séjour




												if (document.getElementById('Oui').checked) {
													if (sup < 25) {
														prix_MF=45;
													}
													else if (sup >= 25 && sup < 35) {
														prix_MF=55;
													}
													else if (sup >= 35 && sup <= 45){
														prix_MF=75;
													}
													else if (sup > 45 && couchage <= 8){
														prix_MF=92;
													}
													else if (sup > 45 && couchage > 8){
														prix_MF=135;
													}
												}
												else prix_MF=0;

												if (document.getElementById('Deg').checked) {
													if (sup < 35) {
														prix_D=110;
													}
													else if (sup >= 35 && sup < 45) {
														prix_D=140;
													}
													else if (sup >= 45 && sup <= 65){
														prix_D=190;
													}
													else if (sup > 65){
														prix_D=230;
													}
												}
												else prix_D=0;


												// prix totale = somme de toute les presta
												// Si Locataire_prix(=cmd_annexe) = 0 le proprio paie tout sinon le loc paie cette somme

												prix_T=prix_R+prix_P+prix_A+prix_MF+prix_D;
												prix_Loc=0;
												prix_proprio=0;


												document.getElementById('Commande_deg').value = prix_D;
												document.getElementById('prix_totale_tva').value = prix_T;
												document.getElementById('Menage_fin_prix').value = prix_MF;
												document.getElementById('prix_totale').value = prix_T*(0.8);
												if (document.getElementById('locataire').checked){
													prix_Loc=prix_A+prix_MF;
													prix_proprio=prix_R+prix_P+prix_D;
													document.getElementById('Locataire_prix').value = prix_Loc;
													span_prix.innerHTML= "Prix des annexes: " +prix_Loc+" euros <br/> Prix total TTC: "+prix_T+" euros<br/>Net à payer: "+prix_proprio ;
												}
												else if (document.getElementById('proprio').checked) {
													prix_Loc=0;
													prix_proprio=prix_T;
													document.getElementById('Locataire_prix').value = prix_Loc;
													span_prix.innerHTML= "Prix total: " +prix_T+" euros";



												}
												//*********************************************************
											}
									</script>
								</div>
							</div>
								</section>

					<div class="row">
						<div class="col-12">
							<p>
							<label for="remarque">Remarque :</label><br />
   							<textarea name="remarque" id="remarque" rows="2" ><?php echo htmlspecialchars($donnees_3['cmd_remarque']); ?></textarea>
   							</p>
   						</div>
					</div>

					<div class="row">
						<div class="col-4">
							<label for="email">Nom et prénom du locataire :</label>
   						</div>
						<div class="col-8">
							<input type="text" name="client" id="client" value="<?php echo htmlspecialchars($donnees_3['cmd_client']); ?>"/><br />
   						</div>
					</div>

					<div class="row">
						<div class="col-4">
							<label for="email">Numéro de téléphone du locataire :</label>
   						</div>
						<div class="col-8">
							<input type="text" name="cmd_client_tel" id="cmd_client_tel" value="<?php echo htmlspecialchars($donnees_3['cmd_client_tel']); ?>"/><br />
   						</div>
					</div>

					<div class="row">
						<div class="col-6">
							<p> Veuillez indiquer votre mode de paiement:<br />
						</div>
						<div class="col-6">
					        <div class="form-grp">
					        	<label class="custom-control custom-radio">
                      <?php
                      if ($donnees_3['cmd_paiement']=='acompte') {
                        echo '<input type="radio" name="mode_paiment" value="acompte" id="acompte" class="custom-control-input" checked="checked"/>';
                      }
                      else {
                        echo '<input type="radio" name="mode_paiment" value="acompte" id="acompte" class="custom-control-input" />';
                      }
                      ?>
					     			<span class="custom-control-indicator"></span>
					     			<span class="custom-control-description">J'envoie un acompte de 30%</span>
					     		</label>
					      	</div>

					      	<div class="form-grp">
					      		<label class="custom-control custom-radio">
                      <?php
                      if ($donnees_3['cmd_paiement']=='reglement_totale') {
                        echo '<input type="radio" name="mode_paiment" value="reglement_totale" id="reglement_totale" class="custom-control-input" checked="checked"/>';
                      }
                      else {
                        echo '<input type="radio" name="mode_paiment" value="reglement_totale" id="reglement_totale" class="custom-control-input" />';
                      }
                      ?>

					     			<span class="custom-control-indicator"></span>
					     			<span class="custom-control-description">j'envoie mon reglement en totalité</span>
					     		</label>
					     	</div>
					    </div></p>
					</div>

					<section class="section_prix">
						<div class="row justify-content-md-center" id="form-center">
							<div class="col-8 col-md-auto">
								<p class="bouton_commande"><input type="submit" value="Valider" disabled="disabled" id="submit"/></p>
							</div>
						</div>
					</section>
				</div>

		</form>



		</div>

	</div>
  </div>
		<?php }
		else{




			?>
			<?php
			$rawdate_1 = htmlentities($_POST['date_debut']);
			$date_1 = date('Y-m-d', strtotime($rawdate_1));
			$rawdate_2 = htmlentities($_POST['date_fin']);
			$date_2 = date('Y-m-d', strtotime($rawdate_2));
			$prix_totale= $_POST['prix_totale_tva'];

			$Type_presta = (isset($_POST['Type_presta'])) ? $_POST['Type_presta'] : 0;

			$Reception = (isset($_POST['Reception'])) ? $_POST['Reception'] : 0;


			$date_debut = (isset($_POST['date_debut'])) ? $date_1 : 0;


			$date_fin = (isset($_POST['date_fin'])) ? $date_2 : 0;


			$drap_1 = (isset($_POST['drap_1'])) ? $_POST['drap_1'] : 0;


			$drap_2 = (isset($_POST['drap_2'])) ? $_POST['drap_2'] : 0;


			$couette_1 = (isset($_POST['couette_1'])) ? $_POST['couette_1'] : 0;


			$couette_2 = (isset($_POST['couette_2'])) ? $_POST['couette_2'] : 0;


			$kit_bebe = (isset($_POST['kit_bebe'])) ? $_POST['kit_bebe'] : 0;


			$lit_bebe = (isset($_POST['lit_bebe'])) ? $_POST['lit_bebe'] : 0;


			$Serviette = (isset($_POST['serviette'])) ? $_POST['serviette'] : 0;


			$serviette_piscine = (isset($_POST['serviette_piscine'])) ? $_POST['serviette_piscine'] : 0;


			$tapis_bain = (isset($_POST['tapis_bain'])) ? $_POST['tapis_bain'] : 0;

			$torchon = (isset($_POST['torchon'])) ? $_POST['torchon'] : 0;


			$hygiene = (isset($_POST['hygiene'])) ? $_POST['hygiene'] : 0;

			$entretien = (isset($_POST['entretien'])) ? $_POST['entretien'] : 0;

			$cmd_mena_fin_prix = (isset($_POST['Menage_fin_prix'])) ? $_POST['Menage_fin_prix'] : 0;

			$cmd_deg = (isset($_POST['Commande_deg'])) ? $_POST['Commande_deg'] : 0;

			$cmd_client = (isset($_POST['client'])) ? $_POST['client'] : 'non rensegne';

			$cmd_client_tel = (isset($_POST['cmd_client_tel'])) ? $_POST['cmd_client_tel'] : 'non rensegné';

			$paiement = (isset($_POST['mode_paiment'])) ? $_POST['mode_paiment'] : ' ';

			$cmd_annexe = (isset($_POST['Locataire_prix'])) ? $_POST['Locataire_prix'] : 0;

			//$cmd_annexe = (isset($_POST['cmd_annexe'])) ? $_POST['cmd_annexe'] : 0;
//Recupération de l'identifiant de la Commande_deg
$commande_ID=$_POST['commande_ID'];

//FIN de la recup
			$remarque = (isset($_POST['remarque'])) ? $_POST['remarque'] : ' ';
			$proprio_id=$_SESSION['id'];
	        $query=$db->prepare('UPDATE commandes SET
            cmd_debut =:cmd_debut,
             cmd_fin=:cmd_fin,
              cmd_presta=:cmd_presta,
              cmd_reception=:cmd_reception,
                cmd_drap_1=:cmd_drap_1,
                 cmd_drap_2=:cmd_drap_2,
                 cmd_couette_1=:cmd_couette_1,
                  cmd_couette_2=:cmd_couette_2,
                   cmd_kit_bebe=:cmd_kit_bebe,
                    cmd_lit_bebe=:cmd_lit_bebe,
                     cmd_srv=:cmd_srv,
	        	cmd_srv_piscine=:cmd_srv_piscine,
             cmd_tapis_bain=:cmd_tapis_bain,
              cmd_torchon=:cmd_torchon,
               cmd_hygiene=:cmd_hygiene,
               cmd_entretien=:cmd_entretien,
                cmd_mena_fin_prix=:cmd_mena_fin_prix,
                cmd_deg=:cmd_deg,
                  cmd_client=:cmd_client,
                   cmd_client_tel=:cmd_client_tel,
                    cmd_remarque=:cmd_remarque,
                     cmd_paiement=:cmd_paiement,
                      cmd_annexe=:cmd_annexe,
                       cmd_prix=:cmd_prix
                         WHERE  commande_ID =:commande_ID ');

			$query->bindValue(':cmd_debut', $date_1, PDO::PARAM_STR);
			$query->bindValue(':cmd_fin', $date_2, PDO::PARAM_STR);
			$query->bindValue(':cmd_presta', $Type_presta, PDO::PARAM_STR);
			$query->bindValue(':cmd_reception', $Reception, PDO::PARAM_STR);
			$query->bindValue(':cmd_drap_1', $drap_1, PDO::PARAM_INT);
			$query->bindValue(':cmd_drap_2', $drap_2, PDO::PARAM_INT);
			$query->bindValue(':cmd_couette_1', $couette_1, PDO::PARAM_INT);
			$query->bindValue(':cmd_couette_2', $couette_2, PDO::PARAM_INT);
			$query->bindValue(':cmd_kit_bebe', $kit_bebe, PDO::PARAM_INT);
			$query->bindValue(':cmd_lit_bebe', $lit_bebe, PDO::PARAM_INT);
			$query->bindValue(':cmd_srv', $Serviette, PDO::PARAM_INT);
			$query->bindValue(':cmd_srv_piscine', $serviette_piscine, PDO::PARAM_INT);
			$query->bindValue(':cmd_tapis_bain', $tapis_bain, PDO::PARAM_INT);
			$query->bindValue(':cmd_torchon', $torchon, PDO::PARAM_INT);
			$query->bindValue(':cmd_hygiene', $hygiene, PDO::PARAM_INT);
			$query->bindValue(':cmd_entretien', $entretien, PDO::PARAM_INT);
			$query->bindValue(':cmd_mena_fin_prix', $cmd_mena_fin_prix, PDO::PARAM_INT);
			$query->bindValue(':cmd_deg', $cmd_deg, PDO::PARAM_INT);
			$query->bindValue(':cmd_client', $cmd_client, PDO::PARAM_STR);
			$query->bindValue(':cmd_client_tel', $cmd_client_tel, PDO::PARAM_STR);
			$query->bindValue(':cmd_remarque', $remarque, PDO::PARAM_STR);
			$query->bindValue(':cmd_paiement', $paiement, PDO::PARAM_STR);
			$query->bindValue(':cmd_annexe', $cmd_annexe, PDO::PARAM_STR);
			$query->bindValue(':cmd_prix', $prix_totale, PDO::PARAM_INT);
      $query->bindValue(':commande_ID', $commande_ID, PDO::PARAM_INT);
		  $query->execute();


			?>
    <div class="row">
      <div class="col-md-6 mx-auto">


			<div class="cmd_valide">
					<?php

          // Supression des anciens documents

          $Bordereau = "PDF/Bordereaun_".$commande_ID."_GRP".$_SESSION['db_id'].".pdf";
          $BDC= "PDF/BDCn_".$commande_ID."_GRP".$_SESSION['db_id'].".pdf";
          // Use unlink() function to delete a file
          if (!unlink($Bordereau)) {
              echo ("$Bordereau cannot be deleted due to an error");
          }
          else {
              //echo ("$Bordereau has been deleted");
          }

          if (!unlink($BDC)) {
              echo ("$BDC cannot be deleted due to an error");
          }
          else {
            //  echo ("$BDC has been deleted");
          }

          // FIN SUPPRESSION
          sleep(3);
					include("PDF_facture.php");
					include("PDF_Bordereau.php");
					include("Mail_BDC.php");
					include("Mail_BA.php");
					?>
				<h1>Commande modifiée:</h1></br>
				<p>
					Votre commande a bien été modifé, Vous pouvez télécharger votre bon de commande en cliquant <?php echo'<a href=PDF/BDCn_'.$donnees_1["commande_ID"].'_GRP'. $_SESSION["db_id"].'.pdf onclick="window.open(this.href); return false;">ici</a>' ?>.<br/>
					Votre bordereau d'arrivée est disponible <?php echo'<a href=PDF/Bordereaun_'.$donnees_1["commande_ID"].'_GRP'. $_SESSION["db_id"].'.pdf onclick="window.open(this.href); return false;">ici</a>' ?>.<br/>
					Un mail avec votre borderau d'arrivée vous a été enoyer. Pensez a verifier votre courrier indésirable.<br/>
					Cliquez <a href="admin_story.php">ici</a> pour revenir à l'espace administrateur.

				</p>

			</div>
    </div>

			<?php
			}
			?>
						<div class="col-4">
				<?php include('includes/admin_menu.php'); ?>
			</div>
</div>

</div>
</div>


<?php
include("includes/footer.php");
?>
<?php } ?>
