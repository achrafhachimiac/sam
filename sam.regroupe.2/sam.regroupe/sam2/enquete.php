<!DOCTYPE HTML>
<!--
	TXT by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>TXT by HTML5 UP</title>
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
					
						<li><a href="espace-proprietaires.php">Espace propriétaires</a></li>
					
					<li class="currentc"><a href="">Espace vacanciers</a></li>
					<li><a href="locations.php">nos locations</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="infos-pratiques.php">infos pratiques</a></li>
				</ul>
			</nav>

<div id="main-wrapperc">
				<div id="main" class="container">
					<div class="row">
						<div class="9u skel-cell-important">
							<div class="content content-left">
		



							

	






									<div >
				<div id="main" class="container">
					<div class="row">
						<div class="12u">
							<div class="content">
							
								<!-- Content -->
							        <?php
    if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "samsatisfaction") // Si le mot de passe est bon
    {
    // On affiche les codes
    ?>
	<section class=descvacanciers>
	Vous avez séjourné dans l'une de nos locations en gestion et nous souhaitons recueillir votre avis afin de mesurer la qualité de nos services et d'en prouver la nécessité auprès des différents acteurs socio-économiques.
	</section>
	

	<section class=descvacanciers>
	<p>
	<iframe src="https://docs.google.com/forms/d/1YQ7J3TPVX2pOh8AhBHLmlVucOHw5s5fX9pFnFT--Cao/viewform?embedded=true" width="1200" height="3000" frameborder="0" marginheight="0" marginwidth="0">Chargement en cours...</iframe>
	<p>
	<section>
	<?php
	}
    else // Sinon, on affiche un message d'erreur
    { ?>
       <section class=vacanciers> <p>Mot de passe incorrect</p> </section>
	  <?php
    } 
    ?>
	</section>
	</section>
								







				<!-- Copyright -->
					<div id="copyright">
						<ul class="menu">
							<li>&copy; sam-web.fr tout droits réservés Martin Francois-Charles</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
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