<html>
    <head>
        <meta charset="utf-8" />
	</head>



<body>
<section style="box-shadow: 6px 6px 0px black;border-radius: 10px;padding: 10px;width: 700px">
	
	
<p> Et Mme & Mr  ".$_POST['nom']."    , propriétaire 
Tél : ".$_POST['téléphone']. " <p>

<h1> Confirmation de séjour </h1>

<p> Nous avons  le plaisir de vous confirmer votre séjour, à votre arrivée vous serez accueilli par l’équipe du bureau d’accueil SAM (service d’accueil pour meublés).  Pour faciliter votre arrivée, nous vous conseillons de les contacter la semaine qui précède votre séjour.  <p>

<table style="border-collapse: collapse;width:100%;">
   <tr>
       <th>SEJOUR</th>
       <th>LOCATION</th>
       <th>A REGLER sur place</th>
   </tr>
 
   <tr>
       <td style="border: 1px solid black;">du " .$_POST['debut']. " au " .$_POST['fin']. "</td>
       <td style="border: 1px solid black;">APPT n° " .$_POST['numero']. " Résidence " .$_POST['residence']. "</br>
	   " .$_POST['piece']. " pièce " .$_POST['couchage']. " couchages
	   </td >
       <td style="border: 1px solid black;">" .$_POST['solde']. "</td>
   </tr>
   <tr>
       <td style="border: 1px solid black;"></td>
       <td style="border: 1px solid black;">PRESTATIONS :
" .$_POST['prestations']. "
</td>
       <td style="border: 1px solid black;"></td>
   </tr>
   
    <tr>
       <td style="border: 1px solid black;"></td>
       <td style="border: 1px solid black;">TOTAL
</td>
       <td style="border: 1px solid black;">" .$_POST['solde']. "</td>
   </tr>
   
  
</table>

</br>
</br>
</br>
</br>


<table style="border-collapse: collapse;width:100%;">
   <tr>
       <th></th>
       <th>NOM DES PARTICIPANTS</th>
       <th></th>
   </tr>
 
   <tr>
       <td style="border: 1px solid black;">ADULTES</td>
       <td style="border: 1px solid black;">ENFANTS (- de 13 ans) </br>
	   </td>
       <td style="border: 1px solid black;">Date de naissance</td>
   </tr>
   <tr>
       <td style="border: 1px solid black;"></td>
       <td style="border: 1px solid black;">PRESTATIONS :
ex : location draps : 1 double, 2 simple $prestations
</td>
       <td style="border: 1px solid black;"></td>
   </tr>
   
    <tr>
       <td style="border: 1px solid black;"></td>
       <td style="border: 1px solid black;">TOTAL
</td>
       <td style="border: 1px solid black;">$TOTAL</td>
   </tr>
   
  
</table>


<p> Nous vous rappelons que les formalités se font à partir de 15 h jusqu’à 19 h.
Ce document est à présenter  à l’arrivée. </p>

<h2>Nous vous souhaitons à l’avance un agréable séjour</h2>





</section>









</body>
</html>