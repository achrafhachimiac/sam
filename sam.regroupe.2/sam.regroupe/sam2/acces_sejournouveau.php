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
											
											<p>envoyer un bon de séjour</p>
					
										</header>

<form method="post" action="apercu.php">
<p>

   Nom du propriétaire  <input type="text" name="nomproprio" required class="form"/>* </br></br>
   à Mr et Mme :        <input type="text" name="nom" required class="form"/>* </br></br>
   Téléphone :        <input type="tel" name="telephone" class="form" required/>*</br></br>
   SEJOUR du :          <input type="date" name="debut" required/> au :<input type="date" name="fin" required class="form"/>* <br></br>
   APPT n°:            <input type="text" name="numero" required class="form"/>* </br></br>
   Résidence :          <input type="text" name="residence" required class="form"/>* </br></br>
   Nombre de pièces :    <input type="number" name="piece" required class="form"/>* </br></br>
   Nombre de Couchages :<input type="number" name="couchage" required class="form"/>* </br></br>
   PRESTATIONS:<br>



<?php include 'tableau.php'; ?>



<br><br>






 
   SOLDE à régler sur place : <input type="number" name="solde" required class="form"/>* </br></br>
   Montant de la caution : <input type="number" name="caution" required class="form"/>* </br></br>
   </br>
   
   
   Formule d'accueil :
   <p>
    <label>CONFORT :
	<input type="radio" name="formule" value="CONFORT">
	</label>
	<label>CHARME :
	<input type="radio" name="formule" value="CHARME">
	</label>
	<label>PRESTIGE :
	<input type="radio" name="formule" value="PRESTIGE">
	</label>
	<label>LITS FAITS :
	<input type="radio" name="formule" value="LITS FAITS">
	</label>*
	</p>
   
   
   NOM DES PARTICIPANTS:
<p>inscrivez tous les participants du séjour !</p>
(remplissez autant de cases que de participants)<br>

<input type="text" name="participant1" required/><input type="date" name="age1"/>*  </br>
<input type="text" name="participant2" /><input type="date" name="age2"/>  </br>
<input type="text" name="participant3" /><input type="date" name="age3"/>  </br>
<input type="text" name="participant4" /><input type="date" name="age4"/>  </br>
<input type="text" name="participant5" /><input type="date" name="age5"/>  </br>
<input type="text" name="participant6" /><input type="date" name="age6"/>  </br>
<input type="text" name="participant7" /><input type="date" name="age7"/>  </br>
<input type="text" name="participant8" /><input type="date" name="age8"/>  </br>
   

<br>
<br>


adresse mail du destinataire*:<input type="email" name="mail" />
   
               <input type="submit" value="générer un bon de séjour" />
			
   
 
</p>
 

<input type="HIDDEN" value="la clarée" name="test">

</form>

 <p class="asterix">*champs obligatoire (si vous ne voulez pas rentrer d'information ne mettez rien dans le champs)</p>

</section>













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