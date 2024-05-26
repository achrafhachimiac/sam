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
					<li><a href="locations.php">nos locations</a></li>
					<li  class="currente"><a href="contact.php">Contact</a></li>
					<li><a href="infos-pratiques.php">infos pratiques</a></li>
				</ul>
			</nav>
		


		<!-- Main -->
			<div id="main-wrappere">
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
											<h2>Des questions ?</h2>
											<p>Contactez nous !</p>											

										</header>

				                   <section>
											
											
<form method="post" action="envoie.php">
  
<p>
   Vous êtes ? : <br>
vacancier :<input type="radio" name="eta" value="vacancier" id="vacancier" checked="checked" />
propriétaire :<input type="radio" name="eta" value="proprietaire" id="proprietaire" /> 

</br>

Appartement n°: <input type="text" name=appart required/> 	Résidence : <input type="text" name=residence required/>

</br>
</br>
Votre demande:

<textarea name="message" rows="8" cols="80" required>
Votre message ici.
</textarea>

<input type="submit" value="envoyer à SAM Valloire" name="Valloire"/>
<input type="submit" value="envoyer à SAM Valmeinier" name="Valmeinier"/>

</p>
  
</form>

</section>




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
				<div class="row double">
					<div class="12u">

						<!-- Contact -->
							
					
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