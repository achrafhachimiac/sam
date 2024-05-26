 <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="css.css" />
		<link rel="stylesheet" href="jcarousel.css" />
		<link rel="stylesheet" type="text/css" href="style7.css" />
        <title>SAM</title>
		<title>SAM</title>
    </head>
	<body>
	
	<section class="documents">
	<form method="post" action="envoiecommande.php">
	<section>
	
    <img src="capture.PNG" class="sam_titre" style="width: 100%;> </br>
    
    </section>

    <p><h1 class="envoie"/>Bon de commande prestations</h1></p>


    <section class=orangedocu>

    Appartement : <input type="text" name="nompappart" required /><br>

    Propriétaire : <input type="text" name="nomproprio" required />





    </section>

    <br>
<?php include 'tableau2.php'; ?>

j'envoie un acompte <input type="radio" name="reglement" value="un acompte" checked >  j'envoie mon réglement en totalité <input type="radio" name="reglement" value="le réglement en totalité" > <br>





<br>
Remarques: <br>
<textarea name="message" rows="8" cols="80" required>
Ex : Arrivée de nuit, le dimanche, amis….

</textarea>

<br>
<br>
Si vous avez un code de réduction merci de l'indiquer ici : <input type="text" name="code">
<br>
<br>

vous voulez recevoir une copie de ce bon de commande ?<br>
indiquez votre adresse e-mail ici : <input type="email" name="mail">


<p class="envoie"> <input type="submit" value="valider ce bon de commande"/></p>
</form>
</section>





     </body>
	
</html>