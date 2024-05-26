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
					<li><a href="espaces-vacanciers.php">Espace vacanciers</a></li>
					<li><a href="locations.php">nos locations</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li  class="current"><a href="infos-pratiques.php">infos pratiques</a></li>
					<li><a href="Nconnexion.php">Connexion</a></li>
				</ul>
			</nav>
		


		<!-- Main -->
			<div id="main-wrapperf">
				<div id="main" class="container">
					<div class="row double">
						<div class="12u">
							

	






									<div >
				<div id="main" class="container">
					<div class="row">
						<div class="12u">
							<div class="content">
							
								<!-- Content -->
						
									<article class="box page-content">

										<header>
											<h2>ou nous trouver ?</h2>
																				

										</header>

				                   <section style="text-align:center;">
											
											
<iframe src="https://www.google.com/maps/embed?pb=!1m25!1m12!1m3!1d1406.4710412130416!2d6.430584115980531!3d45.16802268601636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m10!1i0!3e2!4m3!3m2!1d45.168450199999995!2d6.4317116!4m3!3m2!1d45.168454399999995!2d6.4317888!5e0!3m2!1sfr!2sfr!4v1408351874681" width="800" height="600" frameborder="0" style="border:0"></iframe>

</section>


Bureau ouvert en saison (hiver/été) 
Contact par téléphone, mail ou sur rendez-vous en inter-saison.




															</p>
										</section>

									</article>

							</div>
						</div>
					</div>




					</div>
				</div>
			</div>

		<!-- Footer -->
			<footer id="footer" class="container">
				<div class="row double">
					<div class="12u">

						<!-- About -->
							<section>
								<h2 class="major"><span>Contact par courrier ou téléphone: </span></h2>
								<p>
Contact par courrier ou téléphone: 
</br>
</br>
Services d'Accueil pour Meublés</br>
rue des plans </br>
73450 Valloire</br>
</br>
tel: 0479592272
</p>
							</section>

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


<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
$(document).ready(function() {
$('img.beaufort').error(function() {
$(this).attr({
src: 'visuel_non_disponible.jpg',
alt: "Visuel pour le moment indisponible",
style:'width: 100px;opacity: 0.5;'
});
});
});
</script>

