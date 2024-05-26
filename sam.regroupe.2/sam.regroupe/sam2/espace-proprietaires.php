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
					<li><a href="index.html">accueil</a></li>
					
						<li class="currentb"><a href="">Espace propriétaires</a></li>
					
					<li><a href="espaces-vacanciers.html">Espace vacanciers</a></li>
					<li><a href="locations.php">nos locations</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="infos-pratiques.php">infos pratiques</a></li>
				</ul>
			</nav>

<div id="main-wrapperb">
				<div id="main" class="container">
					<div class="row">
						<div class="9u skel-cell-important">
							<div class="content content-left">
							
								<!-- Content -->
						
									<article class="box page-content">

										<header>
											<h2>Propriétaires</h2>
											<p>Que pouvons nous faire pour vous ?</p>
					
										</header>

										<section>
											<span class="image featured"><img src="images/chalet-ski.jpg" alt="" /></span>
											<p>
											<p>
															Vous êtes propriétaires, loueurs de meublés professionnels ou non professionnels. Vous louez votre appartement et vous nous confiez l’accueil de vos locataires.
 </br></br>
Nous proposons aux loueurs des prestations  d’accueil à la carte répondant à vos souhaits ou ceux de vos hôtes :
</br></br>
TACHES DE RECEPTION :  Accueil à l'appartement et suivi administratif</br>
NETTOYAGE DES APPARTEMENTS : des retouches au ménage complet (tarif selon surface et au choix 3 formules)</br>
LOCATIONS DE LINGE : inclues dans les prestations de nettoyage ou à la demande (draps, serviettes,alèses et torchons)</br>
LES LOCATIONS D’EQUIPEMENTS : petit électroménager, puériculture (prêt gratuit pour les locataires de propriétaires en contrat)</br>
VENTES ANNEXES : produits d’entretien et d’hygiène</br>
</br>
En choisissant les services du SAM, vos clients bénéficient d’une présence permanente pendant toute la durée de leur séjour.</br>
</br>
Pour les loueurs professionnels,  des prestations spécifiques peuvent être proposées en fonction du nombre d’appartements confiés .</br>
Nous vous recevons sur rendez-vous hors des horaires d'ouverture au public afin de vous présenter notre activité.


															</p>
											</p>
										</section>

									</article>

							</div>
						</div>
						<div class="3u">
							<div class="sidebar">
							
								<!-- Sidebar -->
							
									<!-- Recent Posts -->




									<?php

										if($_POST){
														if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "accespro") // Si le mot de passe est bon
    {
    // On affiche les codes
    ?>
        <h1>Accès a vos documents:</h1>
        
		<p><strong> </strong></p> <a href="inscription_sam/BONDECOMMANDE.pdf"> Bon de commande </a> <br>
		<a href="bondecommande.php"> nouveau ! version interactive </a>
		
		<p><strong>	</strong></p> <a href="inscription_sam/Descriptifappartement.pdf"> Descriptif appartement  </a>
			
	
		
		<dl>
		<dt>Planing résérvation</dt>

		
	
		<dd><a href="inscription_sam/PlanningETE2015.pdf"> été 2015 </a></dd>
		<br>
		<dt> Tarifs propriétaires :</dt>

		<dd><a href="inscription_sam/Tarifs_prestations_propriétaires_été_2015.pdf"> Tarifs été 2015 </a></dd>
		<dd><a href="inscription_sam/tarifpropriétaireshiver1516.pdf"> Tarifs hiver 2015/16  </a></dd>

		
		<dt>Tarifs résidents :</dt>
		<dd><a href="inscription_sam/Tarifsprestationsresidentété.pdf">été 2015</a></dd>
        
		 
		 
		</dl>
        
        Cette page est réservée aux propriétaires du SAM. Elle vous permet de modifier votre dossier <br />
        SAM vous remercie.
        </p>
		</section>
		
		
		<section class="proprio">
	<a href="acces_sejour.php">Envoyer un bon de séjour </a>
	</section>
        <?php
    }
    elseif (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "mesdocuments") { ?>
    	 <h1>Accès a vos documents:</h1>
        
		<h1>Accès a vos documents:</h1>
        
		<p><strong> </strong></p> <a href="inscription_sam/BONDECOMMANDE.pdf"> Bon de commande </a> <br>
		<a href="bondecommande.php"> nouveau ! version interactive </a>
		
		<p><strong>	</strong></p> <a href="inscription_sam/Descriptifappartement.pdf"> Descriptif appartement  </a>
			
	
		
		<dl>
		<dt>Planing résérvation</dt>

		
	
		<dd><a href="inscription_sam/PlanningETE2015.pdf"> été 2015 </a></dd>
		<br>
		<dt> Tarifs propriétaires :</dt>

		<dd><a href="inscription_sam/Tarifs_prestations_propriétaires_été_2015.pdf"> Tarifs été 2015 </a></dd>
		<dd><a href="inscription_sam/tarifpropriétaireshiver1516.pdf"> Tarifs hiver 2015/16  </a></dd>

		
		<dt>Tarifs résidents :</dt>
		<dd><a href="inscription_sam/Tarifsprestationsresidentété.pdf">été 2015</a></dd>
        
		 
		 
		</dl>
        
        Cette page est réservée aux propriétaires du SAM. Elle vous permet de modifier votre dossier <br />
        SAM vous remercie.
        </p>
		</section>
		
		
		<section class="proprio">
	<a href="acces_sejour.php">Envoyer un bon de séjour </a>
	</section>
   <?php }
												        
														    else // Sinon, on affiche un message d'erreur
														    {
														        echo '<p>Mot de passe incorrect</p>';
														    }
												


											}

										else { ?>
										<section>
											<h2 class="major"><span>Espace propriétaires</span></h2>
											<ul class="divided">
												<li>
														Accès à vos documents !
														
													        <p>veuillez entrez votre code d'accés </p>
													        
															<form action="espace-proprietaires.php" method="post">
													            <p>
													            <input type="password" name="mot_de_passe" />
													            <input type="submit" value="Valider" />
													            </p>
													        </form>
												</li>
											</ul>
										</section>
										<?php } ?>

									

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
				<div class="row double">
					<div class="12u">



				<!-- Copyright -->
					<div id="copyright">
						<ul class="menu">
							<li>&copy; sam-web.fr tout droits réservés Martin Francois-Charles</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</div>

			</footer>

	</body>
</html>