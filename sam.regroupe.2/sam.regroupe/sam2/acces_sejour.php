<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="css.css" />
		<link rel="stylesheet" type="text/css" href="style7.css" />
        <title>SAM</title>
		<title>SAM</title>
    </head>
	<body>
	
	
	<header class="titre">
    SAM Services d'accueil pour meublés
	</header>
	
	
	<aside class=agaucheproprio>
	
	<span class=txt>Accueille vos locataires avec plaisir </span><img class="valloire" src="valloire1.jpg" />
	
	</aside>
		<p></p>
	
	<br />
	
	
<?php include("menus.php"); ?>
	
<section class=descproprio>


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
	
	

	
	

	
	
	<footer>
    Martin Francois-Charles 2013
	</footer>
	
	
	
	
	
    </body>
	
</html>