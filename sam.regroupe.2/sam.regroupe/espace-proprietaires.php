<?php
include("DEBUT.php");
session_start();

include("includes\identifiants.php");
include("menu_principale.php");
?>
<!DOCTYPE HTML>
<!--
	TXT by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>


<?php
		if (!isset($_SESSION['pseudo']) && !isset($_POST['pseudo'])  ){
?>


	<div id="main-wrapperb" >
		<div id="main" class="container">
			<div class="row">


				<div class="col-8">
					<div class="content content-left">
						<article class="box page-content">
							<header>
								<h2>Propriétaires</h2>
								<p>Que pouvons nous faire pour vous ?</p>
							</header>
							<section>
								<span class="image featured"><img src="images/bannerCopie.jpg" alt="" /></span>
								<p>
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
					<div class="row">
						<section class="menu_ident">
							<h2 class="major" id="major_nopad"><span>Espace propriétaires :</span></h2>
								<div class="row justify-content-md-center">
									<div class="col-10">
										<p> Accès à votre compte ! <br/>
										veuillez entrer votre identifiant et mot de passe:
										</p>
									</div>
								</div>
								<form action="espace-proprietaires.php" method="post">
									<div class="form-group ">
										<label for="ID" class="col-sm-9 col-form-label">Identifiant :</label>
	  								<div class="col-sm-8 col-md-auto">
											<input type="text" name="pseudo" placeholder="identifiant" class="form-control" id="ID" />
										</div>
									</div>
									<div class="form-group ">
										<label for="PSW" class="col-sm-9 col-form-label">Mot de passe :</label>
										<div class="col-sm-8 col-md-auto">
											<input type="password" name="password" placeholder="Mot de passe" class="form-control " id="PSW" />
										</div>
									</div>
									<div class="form-inline">
										<label for="Type_presta" class="col-3 col-form-label">Groupe :</label>
										<select class="form-control" name="Groupe" id="Groupe">
						   				<option value="1" selected="selected">1</option>
						    			<option value="2">2</option>
						    			<option value="3">3</option>
										</select>
									</div>
									<div class="form-group ">
										<div class="offset-sm-3 col-sm-10">
											<a href="enregistrement.php" >S'enregister !<br /> </a>
										</div>
									</div>
									<div class="form-group row">
	 									<div class="offset-sm-2 col-sm-10">
											<input type="submit" value="Valider" class="btn btn-primary"/>
										</div>
									</div>
								</form>
							</section>
						</div>
					<?php
					}
					else
					{?>
					<div id="main-wrappera" style="height: 100%">
						<div id="main" class="container">
							<div class="row">
									<div class="col-8">
										<div class="content content-left">
										<!-- Content -->
											<article class="box page-content">
												<header>
													<h2>Propriétaires</h2>
													<p>Bienvenue dans votre nouvel éspace propriétaire. </p>
												</header>
												<section>
													<span class="image featured"><img src="images/bannerCopie.jpg" alt="" /></span>
													<p>
													Ici, vous pouvez gerer vos réservation, commander de nouvelles préstations et aussi gerer votre profil.<br/>
													L'équipe SAM vous souhaite la bienvenue et reste à votre entière disposion pour plus d'information.

													</p>
												</section>
											</article>
										</div>
									</div>
								<div class="col-4">
						<?php

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
							echo "";


							if (isset($_POST['pseudo'])){


								$message='';
								if ((empty($_POST['pseudo']) || empty($_POST['password']) )&& !isset($_SESSION['pseudo'])) //Oublie d'un champ
								{
									$message = '<p>une erreur s\'est produite pendant votre identification.
									Vous devez remplir tous les champs</p>
									<p>Cliquez <a href="espace-proprietaires.php">ici</a> pour revenir</p>';
								}
								else  //On check le mot de passe
								{

										$db_init = new PDO('mysql:host=localhost;dbname='.$db_name, $db_user, $db_pass,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

									$query=$db_init->prepare('SELECT proprio_id, proprio_mdp, proprio_nom_prenom, proprio_pseudo FROM proprio WHERE proprio_pseudo = :pseudo');
									$query->bindValue(':pseudo',$_POST['pseudo'], PDO::PARAM_STR);
									$query->execute();
									$data=$query->fetch();

										if (($data['proprio_mdp'] == md5($_POST['password']))) // Acces OK !
										{
											$_SESSION['pseudo'] = $data['proprio_pseudo'];
											$_SESSION['id'] = $data['proprio_id'];
											$_COOKIE['pseudo'] = $_SESSION['pseudo'];
											if($_SESSION['pseudo']=="admin")
											{
												$message = '<div class="col-12" id="opaque_background_a"><h2>Authentification avec succès !</h2><p>Bienvenue '.$data['proprio_nom_prenom'].', vous pouvez accéder à votre espace d\'administration !</p>
												<p>
												<div class="row">
												<div class="col-md-3 offset-md-3">
												<a class="btn btn-warning" href="admin.php" role="button">Admin</a>
												</div>
												</div>
												</p>
												</div>';
											}
											else if ($_SESSION['pseudo']!="admin")
											{
												$message = '<div class="col-12" id="opaque_background_p"><h2>Authentification avec succès !</h2><p>Bienvenue '.$data['proprio_nom_prenom'].', vous pouvez accéder à votre espace de réservation !</p>
												<p>
												<div class="row">
												<div class="col-md-3 offset-md-1">
												<a class="btn btn-success" href="proprio.php" role="button">Accéder au compte</a>
												</div>
												</div>
												</p>
												</div>';

											}

										}
										else // Acces pas OK !
										{
											$message = '<p>Une erreur s\'est produite
											pendant votre identification.<br /> Le mot de passe ou le pseudo
											entré n\'est pas correcte.</p><p>Cliquez <a href="Nconnexion.php">ici</a>
											pour vous reconnecter
											<br />';
										}
							}


							$query->CloseCursor();
						}



						else if (isset($_SESSION['pseudo']))
						{
				      $db_init = new PDO('mysql:host=localhost;dbname='.$db_name, $db_user, $db_pass,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
							$query=$db_init->prepare('SELECT proprio_id, proprio_mdp, proprio_nom_prenom, proprio_pseudo FROM proprio WHERE proprio_pseudo = :pseudo');
							$query->bindValue(':pseudo',$_SESSION['pseudo'], PDO::PARAM_STR);
							$query->execute();
							$data=$query->fetch();
							/*if (isset($_SESSION['pseudo'])) {
								$_COOKIE['pseudo'] = $_SESSION['pseudo'];
								$_SESSION['id'] = $data['proprio_id'];
							}*/

					        	if($_SESSION['pseudo']=="admin")
					        	{
					        		$message = '<div class="col-12" id="opaque_background_a"><p>Bienvenue '.$data['proprio_nom_prenom'].', vous pouvez accéder à votre espace d\'administration !</p>
						        	<p>
						        	<div class="row">
						        	<div class="col-md-3 offset-md-3">
						        	<a class="btn btn-warning" href="admin.php" role="button">Admin</a>
						        	</div>
						        	</div>
						        	</p>
						        	</div>';
					        	}
					        	else
					        	{
					        		$message = '<div class="col-12" id="opaque_background_p"><p>Bienvenue '.$data['proprio_nom_prenom'].', vous pouvez accéder à votre espace de réservation !</p>
						        	<p>
						        	<div class="row">
						        	<div class="col-md-3 offset-md-1">
						        	<a class="btn btn-success" href="proprio.php" role="button">Accéder au compte</a>
						        	</div>
						        	</div>
						        	</p>
						        	</div>';
					        	}
							$query->CloseCursor();

						}
						echo $message;
					}
					?>

				</nav>
			</div>
		</div>
	</div>
</div>

	<!-- Footer -->
<footer id="footer" class="container">
	<div class="row">
		<div class="12u">

	<!-- Copyright -->
			<div id="copyright">
				<ul class="menu">
					<li>&copy; sam-web.fr tous droits réservés Martin Francois-Charles</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
				</ul>
			</div>
		</div>
	</div>

</footer>


	</body>
</html>
