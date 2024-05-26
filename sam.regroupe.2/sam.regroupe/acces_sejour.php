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


   	<label>Taxe de séjour à encaisser sur place : OUI
	<input type="radio" name="taxe" value="CONFORT+">
	</label>
    <label>NON
	<input type="radio" name="taxe" value="CONFORT">
	</label>
<br><br>

  
 
   <INPUT type="checkbox" name="choix1" value="€ à l'ordre du propriétaire" > SOLDE : <input type="number" name="solde">€  réglé au proriétaire le <input type="date" name="date_solde" />  </br></br>
   <INPUT type="checkbox" name="choix2" value="€ déposée au proriétaire"> CAUTION : <input type="number" name="caution" /> à l'ordre du propriétaire </br></br>
   </br>
   
   
   Formule d'accueil :
   <p>
   	<label>CONFORT+ :
	<input type="radio" name="formule" value="CONFORT+">
	</label>
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
<p>inscrivez tous les participants du séjour.</p>
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


adresse mail du destinataire*:<input type="email" name="mail" /> <br>
votre adresse mail (si vous souhaitez recevoir une copie du message) :<input type="email" name="mail2" />
   
               <input type="submit" value="générer un bordereau d'arrivée" />
			
   
 
</p>
 

<input type="HIDDEN" value="la clarée" name="test">

</form>

 <p class="asterix">*champs obligatoire </p>

</section>
	
	

	
	

	
	
	<footer>
    Martin Francois-Charles 2013
	</footer>
	
	
	
	
	
    </body>
	
</html>