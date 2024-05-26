<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="css.css" />
		<link rel="stylesheet" type="text/css" href="style7.css" />
        <title>SAM</title>
		<title>SAM</title>
    </head>
	</body>
	
	
	<header class="titre">
    SAM Services d'accueil pour meublés
	</header>
	
	
	<aside class=agaucheproprio>
	
	<span class=txt>Tous les services et prestations que vos locataires ont besoin</span><img class="valloire" src="get.jpg" />
	
	</aside>
	
	

	
	<br/>
	
	
	
	
<?php include("menus.php"); ?>
	
	
	
	

	<section class=descproprio>


		formulaire d'inscription

		<form action="inscrit.php" method="post">

			 <p>nom:<input type="text" name="nom" class="form" required/></p>
			 <p>adresse mail :<input type="mail" name="mail" class="form" required/></p>

			 <p>mot de passe<input type="password" name="mot_de_passe" class="form" required/></p>
			 <p>répétez ce mot de passe<input type="password" name="mot_de_passe2" class="form" required/></p>
			 
			 <P> entrez votre code d'accès :<input type="password" name="code" class="form" required/></p>


			 <input type="submit" value="Valider" />
	
		</form>
	</section>
	
	
	<footer>
    Martin François-Charles 2013
	</footer>
	
	
	
	
	
    </body>
	
</html>