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
	
	
	
<?php include("bdd.php"); ?>
<?php include("menus.php"); ?>
	
	
	<?php 

	try {
		
	
// Vérification de la validité des informations

// Hachage du mot de passe
   $pass_hache = sha1($_POST['mot_de_passe']);
   $nom = $_POST['nom'];
   $mail = $_POST['mail'];

// Insertion
	$req = $bdd->prepare('INSERT INTO membres(nom, mail, date_inscr, mdp) VALUES(:pseudo, :email,CURDATE(), :pass )');
	$req->execute(array(
	'pseudo' => $nom,
	'pass' => $pass_hache,
	'email' => $mail));


} catch (Exception $e) {
	die('Erreur : ' . $e->getMessage());
		}


	?>


	
	
	<footer>
    Martin François-Charles 2013
	</footer>
	
	
	
	
	
    </body>
	
</html>