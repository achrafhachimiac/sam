<body>
<section class=session>
	
	
<p> Et Mme & Mr  ".$_POST['nom']."    , propriétaire 
Tél : ".$_POST['téléphone']. " <p>

<h1> Confirmation de séjour </h1>

<p> Nous avons  le plaisir de vous confirmer votre séjour, à votre arrivée vous serez accueilli par l’équipe du bureau d’accueil SAM (service d’accueil pour meublés).  Pour faciliter votre arrivée, nous vous conseillons de les contacter la semaine qui précède votre séjour.  <p>

<table>
   <tr>
       <th>SEJOUR</th>
       <th>LOCATION</th>
       <th>A REGLER sur place</th>
   </tr>
 
   <tr>
       <td style="border: 1px solid black;">du " .$_POST['debut']. " au " .$_POST['fin']. "</td>
       <td>APPT n° " .$_POST['numero']. " Résidence " .$_POST['residence']. "</br>
	   " .$_POST['piece']. " pièce " .$_POST['couchage']. " couchages
	   </td>
       <td>" .$_POST['solde']. "</td>
   </tr>
   <tr>
       <td></td>
       <td>PRESTATIONS :
" .$_POST['prestations']. "
</td>
       <td></td>
   </tr>
   
    <tr>
       <td></td>
       <td>TOTAL
</td>
       <td>" .$_POST['solde']. "</td>
   </tr>
   
  
</table>

</br>
</br>
</br>
</br>


<table>
   <tr>
       <th></th>
       <th>NOM DES PARTICIPANTS</th>
       <th></th>
   </tr>
 
   <tr>
       <td>ADULTES</td>
       <td>ENFANTS (- de 13 ans) </br>
	   </td>
       <td>Date de naissance</td>
   </tr>
   <tr>
       <td></td>
       <td>PRESTATIONS :
ex : location draps : 1 double, 2 simple $prestations
</td>
       <td></td>
   </tr>
   
    <tr>
       <td></td>
       <td>TOTAL
</td>
       <td>$TOTAL</td>
   </tr>
   
  
</table>


<p> Nous vous rappelons que les formalités se font à partir de 15 h jusqu’à 19 h.
Ce document est à présenter  à l’arrivée. </p>

<h2>Nous vous souhaitons à l’avance un agréable séjour</h2>





</section>









</body>