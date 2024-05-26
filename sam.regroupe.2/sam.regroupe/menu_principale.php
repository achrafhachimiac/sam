<!DOCTYPE HTML>
<?php
	include("includes/constants.php");
	include("includes/fonctions.php");
?>
<head>
	<title>SAM</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->

    <link rel="stylesheet" href="owlcarousel/docs.theme.min.css">

    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="/owlcarousel/owl.theme.default.min.css">

	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/style-desktop.css" />
	<link rel="stylesheet" href="owlcarousel/owl.carousel.css">
	<link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
	<link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
		<!-- Tableau de recherche -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">


	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="owlcarousel/owl.carousel.js"></script>
	<script src="owlcarousel/owl.carousel.min.js"></script>
	<script src="owlcarousel/owl.perso.js"></script>
	<script src="js/jquery.dropotron.min.js"></script>
	<script src="js/skel.min.js"></script>

	<script src="js/skel-layers.min.js"></script>
	<script src="js/init.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<!-- Tableau de recherche -->

	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

	<!-- Entrée date commande-->

	 <script src="https://cdn.jsdelivr.net/gh/atatanasov/gijgo@1.8.0/dist/combined/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/gh/atatanasov/gijgo@1.8.0/dist/combined/css/gijgo.min.css" rel="stylesheet" type="text/css" />



	<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->

</head>

<body class="homepage">

<!-- Header -->
	<div class="row" id="logo_perso">
		<header id="header">
			<div id="logo container" class="container">
				<div>
					<img src="capture.PNG" class="sam_titre"/>
				</div>
			</div>
		</header>
	</div>

<!-- Nav -->
	<nav id="nav" class="skel-layers-fixed">
		<ul>

			<?php
			$current_page=$_SERVER['PHP_SELF'];
			if (strpos($current_page, 'index')) {
				echo'<li class="current"><a href="index.php">accueil</a></li>';
			}
			else
			 echo'<li><a href="index.php">accueil</a></li>';
			?>


			<?php
			if (strpos($current_page, 'proprio.php') || strpos($current_page, 'espace-proprietaires') || strpos($current_page, 'proprio_profil') || strpos($current_page, 'proprio_resa') || strpos($current_page, 'proprio_story')  || strpos($current_page, 'proprio_profil')) {
				if (isset($_SESSION['pseudo']) && $_SESSION['pseudo']=='admin') {
					echo ' <li class="currentb"><a href="admin.php">Espace propriétaires</a> </li>';

				}

				elseif (isset($_SESSION['pseudo'])) {
					echo ' <li class="currentb"><a href="proprio.php">Espace propriétaires</a> </li>';
				}
				else echo '<li class="currentb"><a href="espace-proprietaires.php">Espace propriétaires</a> </li>';
			}
			else {
				if (isset($_SESSION['pseudo']) && $_SESSION['pseudo']=='admin') {
					echo ' <li><a href="admin.php">Espace propriétaires  </a> </li>';

				}

				elseif (isset($_SESSION['pseudo'])) {
					echo ' <li><a href="proprio.php">Espace propriétaires </a> </li>';
				}
				else echo '<li><a href="espace-proprietaires.php">Espace propriétaire</a></li>';

				}
			?>
			<li><a href="espaces-vacanciers.php">Espace vacanciers</a></li>
			<li><a href="locations.php">nos locations</a></li>
			<li><a href="contact.php">Contact</a></li>
			<li><a href="infos-pratiques.php">infos pratiques</a></li>

			<?php

						if (strpos($current_page, 'Nconnexion')) {
				echo'<li class="currentb"><a href="index.php">Connexion</a></li>';
			}
			else
			 echo'<li><a href="Nconnexion.php">Connexion</a></li>';
			?>



		</ul>
	</nav>

		<!-- Banner -->
