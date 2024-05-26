<?php 

include("bdd.php"); 


$total =0;

	
	// Créer une nouvelle annonce
	
		
		//if(strlen($_POST['nom_appart') <= 0)
		/*$infosfichier = pathinfo($_FILES['image_appart']['name']);
		$extension_img = strtolower($infosfichier['extension']);*/
		

   $nom = $_POST['nom'];
  // $quand = $_POST['quand'];
   $baguette =  $_POST['baguette'];
   $Baguettecereales = $_POST['baguettecere'];
   $Croissant =  $_POST['croissant'];
   $Painchoco = $_POST['painchoco'];
   $total = 1*$baguette+1.15*$Baguettecereales+1*$Croissant+1.10*$Painchoco;
   $matin = $_POST['matin'];
   





	try {
		
		
	$req = $bdd->prepare('INSERT INTO pain(nomnumero, matin, Baguette, Baguettecereales, Croissant, Painchoco, total, date ) VALUES(:pseudo,:matin, :baguette, :Baguettecereales, :Croissant, :Painchoco, :total, CURDATE())');
	$req->execute(array(
	'pseudo' =>$nom,
	'matin' =>$matin,
 	'baguette' => $baguette,
	'Baguettecereales' => $Baguettecereales,
	'Croissant' => $Croissant,
	'Painchoco' => $Painchoco,
	'total' => $total));
	

	
	
	} catch (Exception $e) {
	die('Erreur : ' . $e->getMessage());
		}
		



	/*$req = $bdd->prepare('INSERT INTO pain(nomnumero, Baguette, Baguettecereales, Croissant, Painchoco, total, date ) VALUES(1,2,3,4,5,6,CURDATE())');
	$req->execute();*/


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
							
								<!-- Content -->
						
																		<article class="box page-content">

										<h2>Votre demande a bien été enregistrée</h2>
										<h3>Merci</h3>
<?php
   echo $nom;
  // echo $quand;
   echo $baguette;
   echo $Baguettecereales;
   echo $Croissant;
   echo $Painchoco;
   echo $total;
   echo $matin;

   ?>
				<!-- Copyright -->
					<div id="copyright">
						<ul class="menu">
							<li>&copy; sam-web.fr tous droits réservés Martin Francois-Charles</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</div>

			</footer>

	</body>
</html>