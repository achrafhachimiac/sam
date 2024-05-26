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
					
					<li><a href="espaces-vacanciers.html">Espace vacanciers</a></li>
					<li  class="currentd"><a href="locations.php">nos locations</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="infos-pratiques.php">infos pratiques</a></li>
				</ul>
			</nav>
		


		<!-- Main -->
			<div id="main-wrapperd">
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
											<h2>nos locations</h2>
											

										</header>

				                   <section>
											
											

	  <form method="post" action="locations.php">


	  	 <p>indiquez la Localisation de votre appartement :</p>
	  		 <p>

	 Valloire<input type="radio" name="localisation" value="Valloire" id="4" checked="checked" /> 
	Valmeinier <input type="radio" name="localisation" value="Valmeinier" id="6" /> 
	</p> 

	<p>indiquez la capacité de l'appartement</p> 
				
		<p>
    		4 personnes       :<input type="radio" name="perso" value="4" id="4" checked="checked" /> 
			6 personnes       :<input type="radio" name="perso" value="6" id="6" /> 
			8 personnes       :<input type="radio" name="perso" value="8" id="8" /> 
			<input type="submit" value="valider" />
		</p>
 
		</form>
	  
	  </section>
	  
	  

	
<?php

if($_POST){


$tri = $_POST['perso'];
		$loca = $_POST['localisation'];
	  include ('bdd.php'); $reponse = $bdd->query("SELECT * FROM annonces WHERE nombre='$tri' AND Localisation='$loca'");
while ($donnees = $reponse->fetch()){
	?>
	
	
	
	<section class=appartements>
	
	<?php echo $donnees['nom'] ?>
	
	<P>


		<figure tabindex="1" contenteditable="true">
		<img src="uploads/<?php echo $donnees['num']?>" style="max-width:120px; max-height:100px" class="beaufort" alt="image flottante" />
		<figcaption contenteditable="false">cliquer pour zoomer</figcaption>
		</figure>


		<?php echo$donnees['description'] ?>
	
 	</p>
	<p class="dessous"></P>
	
	</section>
	<?php }} ?>




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
								<h2 class="major"><span>Pourquoi SAM?</span></h2>
								<p>
									Les locations SAM se négocient directement <strong>de vacancier à propriétaire</strong>, ce qui vous permet de bénificier du meilleur prix et d'un contact direct avec votre loueur.
						
								</p>
							</section>

					</div>
				</div>
				<div class="row double">
					<div class="12u">

						
					
					</div>
				</div>

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