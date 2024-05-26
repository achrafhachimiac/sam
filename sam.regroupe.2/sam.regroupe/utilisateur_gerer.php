<?php

	// $_POST['gproprio_id'] !== -1 pour que cette page ne s'affiche pas 2 fois de suite. apres ca bascule sur le tableau de gestion
if ($_POST['gproprio_id'] !== -1 ){
	$_SESSION['gproprio_id']=$_POST['gproprio_id'];
	// recuperationdes données concernant l'utilisateur
	$req_3 = $db->prepare('SELECT * FROM proprio WHERE proprio_id =:gproprio_id');
	$req_3->execute(array(
	'gproprio_id' => $_POST['gproprio_id'],
	));
	$donnees_3 = $req_3->fetch();
?>
<div id="main-wrapperb"  class="">
    <div id="main" class="container" style="width: 80%">
        <div class="row justify-content-md-center">
        	<div class="col-9">
			    <div class="formulaire_enregistrement">
			        <div class="row justify-content-md-center">
			            <div class="col-6">
			                <h1 class="inscription">Formulaire d'inscription: </h1> <br />
			            </div>
			        </div>
			    <form class="enregistrement" method="post" action="admin_utilisateurs.php" enctype="multipart/form-data">
			        <div class="row">
			            <div class="col-6">
			                <div class="card card-outline-secondary" style="padding-top: 1px;">
			                    <div class="card-header">
			                        <h3 class="mb-0">Identifiants : </h3>
			                    </div>
			                    <div class="card-body">
			                        <div class="fromgroup">
			                          <label for="pseudo">Pseudo :</label>  <input name="pseudo" type="text" id="pseudo" value="<?php echo htmlspecialchars($donnees_3['proprio_pseudo']); ?>" /> <br />
			                        </div>
			                        <div class="fromgroup">
			                          <label for="password">Mot de Passe :</label><input type="password" name="password" id="password" /><br />
			                        </div>
			                        <div class="fromgroup">
			                          <label for="confirm">Confirmer le mot de passe :</label><input type="password" name="confirm" id="confirm" />
			                        </div>

			                    </div>
			                </div>
			            </div>


			            <div class="col-6">
			                <div class="card card-outline-secondary" style="padding-top: 1px; padding-left: 1px;">
			                    <div class="card-header">
			                        <h3 class="mb-0">Contacts : </h3>
			                    </div>
			                    <div class="card-body">
			                        <div class="fromgroup1">
			                          <label for="Nom">Votre Nom et Prénom :</label><input type="text" name="nom" id="nom" value="<?php echo htmlspecialchars($donnees_3['proprio_nom_prenom']); ?>" /><br />
			                        </div>
			                        <div class="fromgroup1">
			                          <label for="email">Votre adresse Mail :</label><input type="email" name="email" id="email" value="<?php echo htmlspecialchars($donnees_3['proprio_email']); ?>"/><br />
			                        </div>
			                        <div class="fromgroup1">
			                            <label for="adresse">Votre adresse principale :</label><input type="text" name="adresse_1" id="adresse_1" value="<?php echo htmlspecialchars($donnees_3['proprio_adresse_1']); ?>" /><br />
			                        </div>
			                        <div class="fromgroup1">
			                            <label for="adresse">Complément d'adresse:</label><input type="text" name="adresse_1_1" id="adresse_1_1" value="<?php echo htmlspecialchars($donnees_3['propriete_adresse_1_1']); ?>" /><br />
			                        </div>
			                        <div class="fromgroup1">
			                            <label for="adresse">Code postale - Ville :</label><input type="text" name="adresse_2" id="adresse_2" value="<?php echo htmlspecialchars($donnees_3['proprio_adresse_2']); ?>" /><br />
			                        </div>
			                        <div class="fromgroup1">
			                          <label for="telephone">Votre numéro de téléphone :</label><input type="tel" name="telephone" value="<?php echo htmlspecialchars($donnees_3['proprio_tel']); ?>" /><br />
			                        </div>
			                        <div class="fromgroup">
			                            <label for="situation"> Veuillez indiquer votre situation : </label> <br />

			                            <?php
				                            if ($donnees_3['proprio_type']=="non_pro") {
				                            	echo'<input type="radio" name="situation" value="non_pro" id="non_pro" checked="checked"/> <label for="non_pro" class="inline">Propriétaire loueur non professionel</label><br />';
				                            }
				                            else echo'<input type="radio" name="situation" value="non_pro" id="non_pro" /> <label for="non_pro" class="inline">Propriétaire loueur non professionel</label><br />';

				                            if ($donnees_3['proprio_type']=="pro") {
				                            	echo'<input type="radio" name="situation" value="pro" id="pro" checked="checked"/> <label for="pro" class="inline">Propriètaire loueur professionel</label><br />';
				                            }
				                            else echo'<input type="radio" name="situation" value="pro" id="pro" /> <label for="pro" class="inline">Propriètaire loueur professionel</label><br />';

				                            if ($donnees_3['proprio_type']=="para") {
				                            	echo'<input type="radio" name="situation" value="para" id="para" checked="checked"/> <label for="para" class="inline">Régime de la para hôtellerie</label><br />';
				                            }
				                            else echo'<input type="radio" name="situation" value="para" id="para" /> <label for="para" class="inline">Régime de la para hôtellerie</label><br />';
			                            ?>
			                        </div>
			                    </div>
			                </div>
			            </div>
			        </div>

				    <div class="row ">
				        <div class="col-6">
				            <div class="card card-outline-secondary" style="padding-left: 1px;">
				                <div class="card-header">
				                    <h3 class="mb-0">Situation et designation des locaux mis en gestion :</h3>
				                </div>
				                <div class="card-body">
				                    <div class="fromgroup">
				                        <label for="localisation" >Adresse :</label><input type="text" name="adresse_loc_1" id="adresse_loc_1" placeholder="14 rue des vacances" value="<?php echo htmlspecialchars($donnees_3['propriete_adresse_1']); ?>"/>
				                    </div>
				                    <div class="fromgroup1">
				                        <label for="adresse">Code postale - Ville :</label><input type="text" name="adresse_loc_2" id="adresse_loc_2" value="<?php echo htmlspecialchars($donnees_3['propriete_adresse_2']); ?> "/><br />
				                    </div>

				                    <div class="fromgroup1">
				                        <label for="superficie">superficie en m² :</label><input type="number" name="superficie" id="superficie"  min="0" value="<?php echo htmlspecialchars($donnees_3['propriete_superficie']); ?>"/>
				                    </div>

				                    <div class="fromgroup1">
				                        <label for="couchage">Nombre de couchage :</label><input type="number" name="couchage" id="couchage" min="0" value="<?php echo htmlspecialchars($donnees_3['propriete_couchage']); ?>" />
				                    </div>

				                    <div class="fromgroup1">
				                        <label for="piece">Nombre de pièce :</label><input type="number" name="piece" id="piece" min="0" value="<?php echo htmlspecialchars($donnees_3['propriete_pieces']); ?>"/>
				                    </div>

				                    <div class="fromgroup">
				                        <label for="situation"> Parking : </label> <br />

				                     	<?php
				                            if ($donnees_3['parking_type']=="interieur") {
				                            	echo'<input type="radio" name="parkings" value="interieur" id="interieur" checked="checked"/> <label for="non_pro" class="inline">Interieur</label><br />';
				                            }
				                            else echo'<input type="radio" name="parkings" value="interieur" id="interieur" /> <label for="non_pro" class="inline">Interieur</label><br />';

				                            if ($donnees_3['parking_type']=="exterieur") {
				                            	echo'<input type="radio" name="parkings" value="exterieur" id="exterieur" checked="checked"/> <label for="pro" class="inline">Extérieur</label><br />';
				                            }
				                            else echo'<input type="radio" name="parkings" value="exterieur" id="exterieur" /> <label for="pro" class="inline">Extérieur</label><br />';

				                            if ($donnees_3['parking_type']=="aucun") {
				                            	echo'<input type="radio" name="parkings" value="aucun" id="aucun" checked="checked"/> <label for="para" class="inline">Aucune place de parking</label><br />';
				                            }
				                            else echo'<input type="radio" name="parkings" value="aucun" id="aucun"/> <label for="para" class="inline">Aucune place de parking</label><br />';
			                            ?>

				                    </div>
				                    <div class="fromgroup1">
				                        <label for="superficie">N° parking :</label><input type="text" name="parking" id="parking" value="<?php echo htmlspecialchars($donnees_3['propriete_garage']); ?>" />
				                    </div>
				                    <div class="fromgroup">
				                        <label for="situation"> Secteur : </label> <br />

				                     	<?php
				                     		$i=1;//iterateur

												$secteur_1="Valloire";
												$secteur_2="Valmeinier";
												$secteur_3="Aussois";


				                     		while ($i<=3)
											{

												if ($donnees_3['proprio_secteur']==$i) {
				                            	echo'<input type="radio" name="secteur" value="'.$i.'" id="'.$i.'" checked="checked"/> <label for="secteur" class="inline">'.utf8_encode(${"secteur_".$i}).'</label><br />';}
				                            	else echo'<input type="radio" name="secteur" value="'.$i.'" id="'.$i.'" /> <label for="secteur" class="inline">'.utf8_encode(${"secteur_".$i}).'</label><br />';
				                            	$i++;
				                            }
			                            ?>
				                    </div>
				                    <div class="fromgroup">
				                        <label for="situation"> Quartier : </label> <br />

				                     	<?php
				                     		$i=1;//iterateur
				                     		$q=0;//nombre de quartier
											if ($donnees_3['proprio_secteur']==1)
											{
												$q=4;
												$quartier_1="Charbonnieres";
												$quartier_2="Quartier patinoire";
												$quartier_3="Tigny";
												$quartier_4="Centre et Exterieurs";
											}
											if ($donnees_3['proprio_secteur']==2)
											{
												$q=2;
												$quartier_1="Chalet des Alpages ";
												$quartier_2="Exterieur";
											}
											if ($donnees_3['proprio_secteur']==3)
											{
												$q=1;
												$quartier_1="Quartier principal";
											}
				                     		while ($i<=$q)
											{

												if ($donnees_3['proprio_secteur']==$i) {
				                            	echo'<input type="radio" name="quartier" value="'.$i.'" id="'.$i.'" checked="checked"/> <label for="quartier" class="inline">'.utf8_encode(${"quartier_".$i}).'</label><br />';}
				                            	else echo'<input type="radio" name="quartier" value="'.$i.'" id="'.$i.'" /> <label for="quartier" class="inline">'.utf8_encode(${"quartier_".$i}).'</label><br />';
				                            	$i++;
				                            }
			                            ?>
				                    </div>

				                </div>
				            </div>
				        </div>

				        <div class="col-6">
				            <div class="card card-outline-secondary" style="padding-left: 1px;">
				                <div class="card-header">
				                    <h3 class="mb-0">Durée de renouvellement :</h3>
				                </div>
				                <div class="card-body">
				                    <div class="fromgroup">
				                        <label for="duree">Le present contrat est consenti pour : </label> <br />

				                     	<?php
				                            if ($donnees_3['proprio_saison']=="hiver") {
				                            	echo'<input type="radio" name="duree" value="hiver" id="hiver" checked="checked"/> <label for="hiver" class="inline">La saison d’hiver</label>';
				                            }
				                            else echo'<input type="radio" name="duree" value="hiver" id="hiver" /> <label for="hiver" class="inline">La saison d’hiver</label>';

				                            if ($donnees_3['proprio_saison']=="hiver_etee") {
				                            	echo'<input type="radio" name="duree" value="hiver_etee" id="hiver_etee" checked="checked"/> <label for="hiver_etee" class="inline">La saison d’hiver et d’été</label>';
				                            }
				                            else echo'<input type="radio" name="duree" value="hiver_etee" id="hiver_etee" /> <label for="hiver_etee" class="inline">La saison d’hiver et d’été</label>';

				                            if ($donnees_3['proprio_saison']=="annee") {
				                            	echo'<input type="radio" name="duree" value="hiver_etee" id="hiver_etee" checked="checked"/> <label for="hiver_etee" class="inline">A l’année</label>';
				                            }
				                            else echo'<input type="radio" name="duree" value="hiver_etee" id="hiver_etee" /> <label for="hiver_etee" class="inline">A l’année</label>'	;
			                            ?>
				                    </div>
				                </div>
				           </div>
				           <br />

				           <div class="card card-outline-secondary" style="padding-left: 1px;">
				                <div class="card-header">
				                    <h3 class="mb-0">Régelement :</h3>
				                </div>
				                <div class="card-body">
				                <div class="fromgroup">
				                    <label for="reglement"> Le montant des prestations est payable :</label><br />
			                     	<?php
			                            if ($donnees_3['proprio_paiement']=="chaque_presta") {
			                            	echo'<input type="radio" name="reglement" value="chaque_presta" id="chaque_presta" checked="checked"/> <label for="chaque_presta" class="inline">A chaque préstation</label><br />';
			                            }
			                            else echo'<input type="radio" name="reglement" value="chaque_presta" id="chaque_presta" /> <label for="chaque_presta" class="inline">A chaque préstation</label><br />';

			                            if ($donnees_3['proprio_paiement']=="fin_mois") {
			                            	echo'<input type="radio" name="reglement" value="fin_mois" id="fin_mois" checked="checked"/> <label for="fin_mois" class="inline">Chaque fin du mois</label><br />';
			                            }
			                            else echo'<input type="radio" name="reglement" value="fin_mois" id="fin_mois" /> <label for="fin_mois" class="inline">Chaque fin du mois</label><br />';

			                            if ($donnees_3['proprio_paiement']=="fin_saison") {
			                            	echo'<input type="radio" name="reglement" value="fin_saison" id="fin_saison" checked="checked"/> <label for="fin_saison" class="inline">en fin de saison</label><br />';
			                            }
			                            else echo'<input type="radio" name="reglement" value="fin_saison" id="fin_saison" /> <label for="fin_saison" class="inline">en fin de saison</label><br />'	;
		                            ?>
				                </div>
				                <div class="fromgroup">
				                	<?php
					                	if (is_null ($donnees_3['proprio_paiement_date'])) {
					                		echo'<label>Autre période: </label> <input type="text" id="date_regelement" /><br />';
					                	}
					                	else echo '<label>Autre période: </label> <input type="text" id="date_regelement" value="'.htmlspecialchars($donnees_3['proprio_paiement_date']).'"/><br />';

				                	?>
				                </div>
				                </div>
				            </div>
				        </div>
	       			</div>
	    		</div>

			    <br />
			    <div class="row justify-content-md-center">
			        <div class="col-12 col-md-auto">
			           <br />
								 <?php echo'
								 <input type="hidden" name="utilisateur_gere_ID" value="'.htmlspecialchars($_POST['gproprio_id']).'">
								 '; ?>
			           <p class="bouton_inscription"><input type="submit" value="Modifier" id="boutton_enregistrement" /></p>
			        </div>
			    </div>
			    </form>
			</div>
			<div class="col-3">
				<?php
					include('includes/admin_menu.php');
				?>
			</div>
		</div>
	</div>
</div>



<?php
	}
?>
