<?php
session_start();
?>
<!DOCTYPE HTML>
<!--
	TXT by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>SAM</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="homepage">

		<!-- Header -->
			<header id="header">
				<div class="logo container">
					<div>
<img src="capture.PNG" class="sam_titre"/>
					</div>
				</div>
			</header>

		<!-- Nav -->
			<nav id="nav" class="skel-layers-fixed">
				<ul>
					<li><a href="index.php">accueil</a></li>
					<?php
					if (isset($_SESSION['pseudo']) && $_SESSION['pseudo']=='admin') {
						echo ' <li><a href="admin.php">Espace propriétaires</a> </li>';

					}

					elseif (isset($_SESSION['pseudo'])) {
						echo ' <li><a href="proprio.php">Espace propriétaires</a> </li>';
					}
					else echo '<li><a href="espace-proprietaires.php">Espace propriétaire</a></li>';
					?>
					<li class="currentc"><a href="">Espace vacanciers</a></li>
					<li><a href="locations.php">nos locations</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="infos-pratiques.php">infos pratiques</a></li>
					<li><a href="Nconnexion.php">Connexion</a></li>
				</ul>
			</nav>

<div id="main-wrapperc">
				<div id="main" class="container">
					<div class="row">
						<div class="9u skel-cell-important">
							<div class="content content-left">
							
								<!-- Content -->
						
																		<article class="box page-content">

										<header>
											<h2>Votre relais avec votre loueur</h2>
											
											<ul class="meta">
										</header>

										<section>
											<span class="image featured"><img src="images/Vue-de-Valloire.jpeg" alt="Vue-de-Valloire" /></span>
											<p>
												Vous avez trouvé l’appartement pour  vos vacances, nous sommes présents sur place pour vous accueillir et vous accompagner tout au long de votre séjour.
Pour compléter votre location, vous trouverez  auprès de nous :
<ul>
 <li>SERVICE D'ACCUEIL : ACCUEIL DES VACANCIERS (suivi administratif des arrivées et départs) </li>
 <li>LE MENAGE DE FIN DE SEJOUR : tarif en fonction de la surface de l’appartement</li>
<li> LES LOCATIONS DE LINGE : draps, serviettes, tapis de bain et torchons</li>
<li>LES LOCATIONS D’EQUIPEMENTS : petit électroménager, puériculture</li>
<li>VENTES ANNEXES : produits d’entretien et d’hygiène</li>

</ul>

un lieu d'information et d'écoute à disposition.
											</p>
										</section>
										
										<section>
											<h3>Horaires : </h3>
											<p>
												Dimanche : 8h30 -> 11h</br>
											Lundi : 8h30 -> 10h30 & 17h ->19h</br>
											Mardi : 8h30 -> 10h30 & 17h ->19h</br>
									        Mercredi : fermé</br>
											Jeudi : 8h30 -> 10h30 & 17h ->19h</br>
											Vendredi : 8h30 -> 10h30 & 17h ->19h</br>
												</p>
										</section>

										<section>
											<h3>Votre arrivée: </h3>
											<p>
												Samedi : 15h -> 19h </br>

												Pour les arrivées hors de ces horaires téléphonez pour connaitre la démarche pour récuperer vos clés
											</p>
										</section>
																				<section>
											<h3>Votre départ: </h3>
											<p>
												Samedi : 7h30 -> 10h </br>

											Nous vous rejoingons dans l'appartement à l'heure du rendez-vous que vous avez choisie  pour le contrôle. </br>
											pour les départs anticipés ou de nuit, le signaler au bureau d'accueil pour la collecte des clefs.
											</p>
										
											<h3>autre </h3>
											<p>
													Tous les propriétaires sont habilités à éditer des factures et des attestations de séjour (CE, Cnas, Caf...).
											</p>
										</section>


										</section>

												<h3><b>SAM vous souhaite un agréable séjour à Valloire.
												Et espère vous revoir.</b></h3>



										<section>

									</article>

							</div>
						</div>
						<div class="3u">
							<div class="sidebar">
							
								<!-- Sidebar -->
							
									<!-- Recent Posts -->
										<section>
											<h2 class="major"><span>Espace vacanciers</span></h2>
											<ul class="divided">
												<li>
														Accès à l'enquète de satisfaction !
														
													        <p>veuillez entrez votre code d'accés </p>
													        
																	<form action="enquete.php" method="post">
														            <p>
														            <input type="password" name="mot_de_passe" />
														            <input type="submit" value="Valider" class="bouton">
														            </p>
														        </form>
												</li>
											</ul>




										</section>
										<section>
											<h2 class="major"><span>Commande de boulangerie</span></h2>

											 Livraison à l'appartement de 7 h 30 à 9 h pour les résidences de La clarée, les choseaux et Le clos des étoiles.

											<form method="post" action="pain.php">


												Nom/numéro d'appartement :  <input type="text" name="nom" />
												Heure de livraison souhaitée : <input type="text" name="matin" />


											<table >


											   <tr>
											       <th></th>
											       <th>PU</th>
											       <th>Quantité</th>
											   </tr>
											   <tr>
											       <td>Baguette</td>
											       <td>0.90</td>
											       <td><input type="number" name="baguette" class="nombre"style ="width: 40px;"/></td>
											   </tr>
											   <tr>
											       <td>Baguette céréales</td>
											       <td>1.10</td>
											       <td><input type="number" name="baguettecere" class="nombre" style="width: 40px;"/></td>
											   </tr>
											    <tr>
											       <td>Croissant</td>
											       <td>1.00</td>
											       <td><input type="number" name="croissant" class="nombre" style="width: 40px;"/></td>
											   </tr>
											    <tr>
											       <td>Pain chocolat</td>
											       <td>1.10</td>
											       <td><input type="number" name="painchoco" class="nombre" style="width: 40px;"/></td>
											   </tr>
											</table>

											<input type="submit" value="commander" class="bouton" >
										</form>


										</section>	

									

							</div>
						</div>
					</div>
					<div class="row double">
						<div class="12u">

							
		<!-- Footer -->
			<footer id="footer" class="container">
				<div class="row double">
					<div class="12u">



						
							
					
					</div>
				</div>

				<!-- Copyright -->
					<div id="copyright">
						<ul class="menu">
							<li>&copy; sam-web.fr tous droits réservés Martin Francois-Charles</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</div>

			</footer>

	</body>
</html>