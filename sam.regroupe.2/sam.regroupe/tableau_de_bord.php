<?php 
include('config.php');

if($_POST){

	
	
	// Créer une nouvelle annonce
	
	if(empty($_GET['id_annonce'])){
		
		//if(strlen($_POST['nom_appart') <= 0)
		/*$infosfichier = pathinfo($_FILES['image_appart']['name']);
		$extension_img = strtolower($infosfichier['extension']);*/
		
	
		$req = $bdd->prepare('INSERT INTO annonces(nombre, nom, description, Localisation) VALUES(?,?,?,?)');
		$req->execute(array($_POST['numero_appart'],$_POST['nom_appart'],$_POST['description_appart'],$_POST['localisation']));
		
		move_uploaded_file($_FILES['image_appart']['tmp_name'], 'uploads/' . $bdd->lastInsertId());
		
		
	
	
	
		
	}



}


include('header.php');

?>

<h1>Poster une annonce :</h1>
<section class=appartements>
<form action="" method="post" enctype="multipart/form-data">

titre de l'annonce:<input type="text" name="nom_appart" required/></br>

capacité de l'appartement:<input type="text" name="numero_appart" required/>

<p>

	 <input type="radio" name="localisation" value="Valloire" id="4" checked="checked" /> <label for="oui">Valloire</label>
	<input type="radio" name="localisation" value="Valmeinier" id="6" /> <label for="non">Valmeinier</label>

</p>

<textarea name="description_appart" rows="8" cols="80">
description
</textarea>

<input  type="file" name="image_appart"    />


<input type="submit" value="envoyer" />

</form>
</section>



	<h1>Commandes de boulangerie :</h1>
	<?php 

		 include ('bdd.php'); $reponse = $bdd->query("SELECT * FROM pain ORDER BY date DESC ");
while ($donnees = $reponse->fetch()){
	?>
	

	
	<section class=appartements>
	
	<?php echo $donnees['nomnumero'] ?><br>
	commandé le <?php echo $donnees['date'] ?><br>
	souhaite être livré à <?php echo $donnees['matin'] ?> (attention livraison à J+1)
	
	<P>



		baguette <?php echo$donnees['Baguette'] ?> <br>
		baguette céréale <?php echo$donnees['Baguettecereales'] ?><br>
		Croissant <?php echo$donnees['Croissant'] ?><br>
		Pain choco <?php echo$donnees['Painchoco'] ?><br><br>
		total en €   <?php echo$donnees['total'] ?>


	
 	</p>
	<p class="dessous"></P>
	
	</section>
	<?php } ?>








</section> 



<?php
include('footer.php');
?>
