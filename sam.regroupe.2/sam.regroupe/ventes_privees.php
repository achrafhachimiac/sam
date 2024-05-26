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
	
	
	<aside class=agaucheloc>
	
	<span class=txt2>Nos locations en gestion</span><img class="valloire" src="get.jpg" />
	
	</aside>
	
	
	
	<p></p>
	
	<br />
	
	
<?php include("menus.php"); 

?>
	  
	  
	  <section class=appartements>




	 
	  <form method="post" action="ventes_privees.php">

	  		 <p>Choisir une station :</p>
	  		 <p>

	 <input type="radio" name="localisation" value="Valloire" id="4" checked="checked" /> <label for="oui">Valloire</label>
	<input type="radio" name="localisation" value="Valmeinier" id="6" /> <label for="non">Valmeinier</label>
	</p> 
 <p>indiquez la capacité de l'appartement :</p> 
				
		<p>
    		<input type="radio" name="perso" value="4" id="4" checked="checked" /> <label for="oui">4 personnes</label>
			<input type="radio" name="perso" value="6" id="6" /> <label for="non">6 personnes</label>
			<input type="radio" name="perso" value="8" id="8" /> <label for="non">8 personnes</label></br>
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

		
	


	
	
	
	
	
	<footer>
    Martin Francois-Charles 2013
	</footer>
	
	<?php // $reponse->closeCursor(); : on s'en fou de ça?> 
	
	
	
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