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
	
	
	<aside class=agauchevacanciers>
	
	<span class=txt2>Votre relais avec votre loueur</span><img class="valloire" src="get.jpg" />
	
	</aside>
	
	
	
	<p></p>
	
	<br />
	
	
<?php include("menus.php"); ?>

<section class=descvacanciers>

Votre réservation a bien été prise en compte merci !

</section> 


<?php 
$i = 1 ;

		 include ('bdd.php'); $reponse = $bdd->query("SELECT * FROM resapain");
while ($donnees = $reponse->fetch()){
	?>
	
	
	
		<?php ${'pain'. $i} =$donnees['quantite']; 
		$i = $i+1;

		echo ${'pain'. $i};



		?>
 
	
	
	
	<?php } 





$pain = $_POST['pain'] ;
$paincereales = $_POST['paincereales'] ;
$croissant = $_POST['croissant'] ;
$painchoco = $_POST['painchoco'] ;





include ('bdd.php'); $reponse = $bdd->query("UPDATE resapain SET quantite= $pain+$pain1 WHERE type='pain'");
include ('bdd.php'); $reponse = $bdd->query("UPDATE resapain SET quantite= $paincereales+$pain2 WHERE type='paincereales'");
include ('bdd.php'); $reponse = $bdd->query("UPDATE resapain SET quantite= $croissant+$pain3 WHERE type='croissant'");
include ('bdd.php'); $reponse = $bdd->query("UPDATE resapain SET quantite= $painchoco+$pain4 WHERE type='painchocolat'");
//include ('bdd.php'); $reponse = $bdd->query("SELECT * FROM annonces WHERE nombre='$tri' AND Localisation='$loca'");




?>



	<footer>
    Martin François-Charles 2013
	</footer>
	


</body>
</html>