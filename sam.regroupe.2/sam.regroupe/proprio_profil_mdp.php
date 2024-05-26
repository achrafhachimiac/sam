<?php
include("DEBUT.php");
?>
<!DOCTYPE HTML>
<!--
	TXT by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<?php
session_start();
include("includes/fonctions.php");
include('menu_principale.php');
//include("../menu_principale.php");
?>

	
		<!-- Banner -->
<div id="main-wrappera">
				<div id="main" class="container">
					<div class="row">
						<div class="9u skel-cell-important">
							<div class="content content-left">
							
								<!-- Content -->
						
<?php

	echo '<div class="div_mdp">';
	echo '<form class="formulaire_mdp" method="post" action="proprio_profil_mdp.php" enctype="multipart/form-data">

	<fieldset><legend>Changer votre mot de passe:</legend>
	
		<label for="ancien_mdp">Ancien mot de passe :</label>  <input name="ancien_mdp" type="password" id="ancien_mdp" /> (le pseudo doit contenir entre 3 et 15 caractères)<br />
		<label for="nouveau_mdp">Mot de Passe :</label><input name="nouveau_mdp" type="password" id="nouveau_mdp" /><br />
		
	</fieldset>';
	
	?>



											


									</article>

							</div>
						</div>
<?php include('includes/proprio_menu.php'); ?>




						

						
		<!-- Footer -->
						
			<footer id="footer" class="container">
				<div class="row double">
					<div class="12u">
						
				<!-- Copyright -->
					<div id="copyright">
						<ul class="menu">
							<li>&copy; sam-web.fr tous droits réservés Martin Francois-Charles</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</div>

			</footer>




<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

	</body>
</html>