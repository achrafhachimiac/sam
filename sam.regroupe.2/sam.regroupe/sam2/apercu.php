<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<link rel='stylesheet' href='http://www.sam-web.fr/css.css' />
        <title>SAM</title>
		<title>SAM</title>
    </head>
	
	<body>


<?php
ini_set("display_errors",0);error_reporting(0);

/*
      $prixprestation1=0;
      $prixprestation2=0;
      $prixprestation3=0;
      $prixprestation4=0;
      $prixprestation5=0;
      $prixprestation6=0;
      $prixprestation7=0;
      $prixprestation8=0;*/

        for ($i=1; $i<9; $i++) {
            if ($_POST['reglement'. $i]==null) {
              ${'inclu'.$i} = " (inclu) ";
              ${'facteur'.$i} = 0;}

            elseif ($_POST['reglement'. $i] != null) {
              ${'facteur'.$i} = 1;

            }
            }

      for ($i=1; $i<9; $i++) {

      ${'x'.$i}="x";

       if ($_POST['prestation'. $i]=="Nétoyage APPT -35m²") {
         ${'prixprestation'. $i}=50;
       }
       elseif ($_POST['prestation'. $i]=="Nettoyage APPT 35m² à 45m²") {
         ${'prixprestation'. $i}=65;       
       }
       elseif ($_POST['prestation'. $i]=="Nettoyage APPT +45m² (jusqu’à 8 couchages)") {
         ${'prixprestation'. $i}=80;
       }
       elseif ($_POST['prestation'. $i]=="Nettoyage APPT +45m² (plus de 8 couchages)") {
         ${'prixprestation'. $i}=120;
      }

       elseif ($_POST['prestation'. $i]=="KIT SERVIETTE (1 douche + 1 toilette)") {
         ${'prixprestation'. $i}=5;
       }
       elseif ($_POST['prestation'. $i]=="DRAPS simple") {
         ${'prixprestation'. $i}=7;
       } 
       elseif ($_POST['prestation'. $i]=="DRAPS double") {
         ${'prixprestation'. $i}=9;
       }
       elseif ($_POST['prestation'. $i]=="KIT BEBE") {
         ${'prixprestation'. $i}=25;
       }
       elseif ($_POST['prestation'. $i]=="Torchons x 2") {
         ${'prixprestation'. $i}=3;
       }
       elseif ($_POST['prestation'. $i]=="Tapis de bain") {
         ${'prixprestation'. $i}=2;
       }

       elseif ($_POST['prestation'. $i]=="KIT ENTRETIEN") {
         ${'prixprestation'. $i}=5;
       }
       elseif ($_POST['prestation'. $i]=="KIT HYGIENE") {
         ${'prixprestation'. $i}=5;
       }
       elseif ($_POST['prestation'. $i]=="PROTECTION MATELAS JETABLE SIMPLE") {
         ${'prixprestation'. $i}=3;
       }
       elseif ($_POST['prestation'. $i]=="PROTECTION MATELAS JETABLE DOUBLE") {
         ${'prixprestation'. $i}=3.5;
       }

       elseif (empty($_POST['prestation'. $i])){
          ${'x'. $i}=null;
          ${'inclu'.$i} = null;

       }

       
        }


       

      

        $quantite11=$_POST['quantite1'];
        $quantite22=$_POST['quantite2'];
        $quantite33=$_POST['quantite3'];
        $quantite44=$_POST['quantite4'];
        $quantite55=$_POST['quantite5'];
        $quantite66=$_POST['quantite6']; 
        $quantite77=$_POST['quantite7'];  
        $quantite88=$_POST['quantite8'];       
       

        
       
       



$total = $prixprestation1*$quantite11*$facteur1 + 
$prixprestation2*$quantite22*$facteur2 + 
$prixprestation3*$quantite33*$facteur3 + 
$prixprestation4*$quantite44*$facteur4 + 
$prixprestation5*$quantite55*$facteur5 + 
$prixprestation6*$quantite66*$facteur6 + 
$prixprestation7*$quantite77*$facteur7 + 
$prixprestation8*$quantite88*$facteur8 + 
$_POST['solde'];


$total2 =$prixprestation1*$quantite11*$facteur1  + 
$prixprestation2*$quantite22*$facteur2  + 
$prixprestation3*$quantite33*$facteur3  + 
$prixprestation4*$quantite44*$facteur4  + 
$prixprestation5*$quantite55*$facteur5  + 
$prixprestation6*$quantite66*$facteur6  + 
$prixprestation7*$quantite77*$facteur7  + 
$prixprestation8*$quantite88*$facteur8 ;

$truc1 = "<tr><td>";
$truc2 = "</td><td>";
$truc3 = "</td></tr>";


if (!empty($_POST['participant2'])) {
  $ligne2 =  $truc1.$_POST['participant2'].$truc2.$_POST['age2'].$truc3;

  }

  if (!empty($_POST['participant3'])) {
  $ligne3 =  $truc1. $_POST['participant3'] . $truc2 . $_POST['age3'] . $truc3;

  }
  if (!empty($_POST['participant4'])) {
  $ligne4 =  $truc1. $_POST['participant4'] . $truc2 . $_POST['age4'] . $truc3;

  }
  if (!empty($_POST['participant5'])) {
  $ligne5 =  $truc1. $_POST['participant5'] . $truc2 . $_POST['age5'] . $truc3;

  }
  if (!empty($_POST['participant6'])) {
  $ligne6 =  $truc1. $_POST['participant6'] . $truc2 . $_POST['age6'] . $truc3;

  }
  if (!empty($_POST['participant7'])) {
  $ligne7 =  $truc1. $_POST['participant7'] . $truc2 . $_POST['age7'] . $truc3;

  }
  if (!empty($_POST['participant8'])) {
  $ligne8 =  $truc1. $_POST['participant8'] . $truc2 . $_POST['age8'] . $truc3;

  }



echo ("
<html>
    

	
<body>

<section class=\"session\">
	
	
	
<IMG SRC='http://sam-web.fr/capture' TITLE='sam'><div style= \"float:right\">Rue des plans <br> 73450 Valloire <br> tel: 04 79 59 22 72</div>
	
<p>à Mme & Mr  " . $_POST['nom'] . "   <br>
Tél : " . $_POST['telephone'] . " <p>

propriétaire de l'appartement : " . $_POST['nomproprio'] . "

<h1> Bordereau d'arrivée </h1>

<p> Nous avons  le plaisir de vous confirmer votre séjour, à votre arrivée vous serez accueillis par l'équipe du bureau d'accueil SAM (service d'accueil pour meublés).  Pour faciliter votre arrivée, nous vous conseillons de les contacter la semaine qui précéde votre séjour.  <p>

<table border=\"1\">
   <tr>
       <th>SEJOUR</th>
       <th>LOCATION</th>
       <th>A REGLER sur place</th>
   </tr>
 
   <tr>
       <td>du " . $_POST['debut'] . " au " . $_POST['fin'] . "</td>
       <td>APPT n° " . $_POST['numero'] . " Résidence " . ($_POST['residence']) . "</br>
	   " . $_POST['piece'] . " piéces " . $_POST['couchage'] . " couchages
	   </td>
       <td>" . $_POST['solde'] . "€</td>
   </tr>
   <tr>
       <td></td>
       <td>PRESTATIONS :<br>
"
.$quantite11.$_POST['prestation1'].$inclu1."<br>"
.$quantite22.$_POST['prestation2'].$inclu2."<br>"
.$quantite33.$_POST['prestation3'].$inclu3."<br>"
.$quantite44.$_POST['prestation4'].$inclu4."<br>"
.$quantite55.$_POST['prestation5'].$inclu5."<br>"
.$quantite66.$_POST['prestation6'].$inclu6."<br>"
.$quantite77.$_POST['prestation7'].$inclu7."<br>"
.$quantite88.$_POST['prestation8'].$inclu8."<br>



</td>
       <td>"

       .$prixprestation1.$x1.$quantite11.$inclu1."<br>"
       .$prixprestation2.$x2.$quantite22.$inclu2."<br>"
       .$prixprestation3.$x3.$quantite33.$inclu3."<br>"
       .$prixprestation4.$x4.$quantite44.$inclu4."<br>"
       .$prixprestation5.$x5.$quantite55.$inclu5."<br>"
       .$prixprestation6.$x6.$quantite66.$inclu6."<br>"
       .$prixprestation7.$x7.$quantite77.$inclu7."<br>"
       .$prixprestation8.$x8.$quantite88.$inclu8."<br>"
       .$total2."€

   </tr>
   
    <tr>
       <td></td>
       <td>TOTAL </td>

       




       <td>
       ".$total."€</td>
          
   </tr>
   
  
</table>

</br>
</br>


<strong>formule: " . $_POST['formule'] . "</strong>

</br>
</br>




<table border=\"1\">
   <tr>
       <th>NOM DES PARTICIPANTS</th>
       <th>Date de naissance</th>
       
   <tr>
  <td>" . $_POST['participant1'] . "</td>
  
   <td>" . ($_POST['age1']) . "</td>
   </tr>
   
 ".$ligne2
 .$ligne3
 .$ligne4
 .$ligne5
 .$ligne6
 .$ligne7
 .$ligne8.
 "

   

   
  
</table>
<br>
<strong>montant de la caution :" . $_POST['caution'] . "€</strong>
<br>

<p> Nous vous rappelons que les formalités se font à partir de 15 h jusqu'à  19 h.
Ce document est à présenter  à l'arrivée. </p>

<h2>Nous vous souhaitons à l'avance un agréable séjour</h2>





</section>









");
?>


<form method="post" action="confirmation_de_sejour.php">
    
    <input type="HIDDEN" value="<?php echo($_POST['nom']);?>" name="nom">
    <input type="HIDDEN" value="<?php echo($_POST['telephone']);?>" name="telephone">
    <input type="HIDDEN" value="<?php echo($_POST['debut']);?>" name="debut">
    <input type="HIDDEN" value="<?php echo($_POST['fin']);?>" name="fin">
    <input type="HIDDEN" value="<?php echo($_POST['numero']);?>" name="numero">
    <input type="HIDDEN" value="<?php echo($_POST['residence']);?>" name="residence">
    <input type="HIDDEN" value="<?php echo($_POST['piece']);?>" name="piece">
    <input type="HIDDEN" value="<?php echo($_POST['couchage']);?>" name="couchage">
    <?php //<input type="HIDDEN" value=<?php echo($_POST['prestations']); name="prestations"?>
    <input type="HIDDEN" value="<?php echo($_POST['solde']);?>" name="solde">
    <input type="HIDDEN" value="<?php echo($_POST['participant1']);?>" name="participant1">
    <input type="HIDDEN" value="<?php echo($_POST['participant2']);?>" name="participant2">
    <input type="HIDDEN" value="<?php echo($_POST['participant3']);?>" name="participant3">
    <input type="HIDDEN" value="<?php echo($_POST['participant4']);?>" name="participant4">
    <input type="HIDDEN" value="<?php echo($_POST['participant5']);?>" name="participant5">
    <input type="HIDDEN" value="<?php echo($_POST['participant6']);?>" name="participant6">
    <input type="HIDDEN" value="<?php echo($_POST['participant7']);?>" name="participant7">
    <input type="HIDDEN" value="<?php echo($_POST['participant8']);?>" name="participant8">
    <input type="HIDDEN" value="<?php echo($_POST['age1']);?>" name="age1">
    <input type="HIDDEN" value="<?php echo($_POST['age2']);?>" name="age2">
    <input type="HIDDEN" value="<?php echo($_POST['age3']);?>" name="age3">
    <input type="HIDDEN" value="<?php echo($_POST['age4']);?>" name="age4">
    <input type="HIDDEN" value="<?php echo($_POST['age5']);?>" name="age5">
    <input type="HIDDEN" value="<?php echo($_POST['age6']);?>" name="age6">
    <input type="HIDDEN" value="<?php echo($_POST['age7']);?>" name="age7">
    <input type="HIDDEN" value="<?php echo($_POST['age8']);?>" name="age8">
    <input type="HIDDEN" value="<?php echo($_POST['mail']);?>" name="mail">
    <input type="HIDDEN" value="<?php echo($_POST['formule']);?>" name="formule">
	  <input type="HIDDEN" value="<?php echo($_POST['caution']);?>" name="caution"> 
    <input type="HIDDEN" value="<?php echo($_POST['solde']);?>" name="solde">  
    <input type="HIDDEN" value="<?php echo($_POST['prestation1']);?>" name="prestation1">
    <input type="HIDDEN" value="<?php echo($_POST['prestation2']);?>" name="prestation2">
    <input type="HIDDEN" value="<?php echo($_POST['prestation3']);?>" name="prestation3">
    <input type="HIDDEN" value="<?php echo($_POST['prestation4']);?>" name="prestation4">
    <input type="HIDDEN" value="<?php echo($_POST['prestation5']);?>" name="prestation5">
    <input type="HIDDEN" value="<?php echo($_POST['prestation6']);?>" name="prestation6">
    <input type="HIDDEN" value="<?php echo($_POST['prestation7']);?>" name="prestation7">
    <input type="HIDDEN" value="<?php echo($_POST['prestation8']);?>" name="prestation8">



    <input type="HIDDEN" value=<?php echo($prixprestation1);?> name="prixprestation1">
    <input type="HIDDEN" value=<?php echo($prixprestation2);?> name="prixprestation2">
    <input type="HIDDEN" value=<?php echo($prixprestation3);?> name="prixprestation3">
    <input type="HIDDEN" value=<?php echo($prixprestation4);?> name="prixprestation4">
    <input type="HIDDEN" value=<?php echo($prixprestation5);?> name="prixprestation5">
    <input type="HIDDEN" value=<?php echo($prixprestation6);?> name="prixprestation6">
    <input type="HIDDEN" value=<?php echo($prixprestation7);?> name="prixprestation7">
    <input type="HIDDEN" value=<?php echo($prixprestation8);?> name="prixprestation8">
    
    <input type="HIDDEN" value=<?php echo($total);?> name="total">
    <input type="HIDDEN" value=<?php echo($_POST['quantite1']);?> name="quantite1">
    <input type="HIDDEN" value=<?php echo($_POST['quantite2']);?> name="quantite2">
    <input type="HIDDEN" value=<?php echo($_POST['quantite3']);?> name="quantite3">
    <input type="HIDDEN" value=<?php echo($_POST['quantite4']);?> name="quantite4">
    <input type="HIDDEN" value=<?php echo($_POST['quantite5']);?> name="quantite5">
    <input type="HIDDEN" value=<?php echo($_POST['quantite6']);?> name="quantite6">
    <input type="HIDDEN" value=<?php echo($_POST['quantite7']);?> name="quantite7">
    <input type="HIDDEN" value=<?php echo($_POST['quantite8']);?> name="quantite8">
    <input type="HIDDEN" value=<?php echo($_POST['nomproprio']);?> name="nomproprio">



    <input type="HIDDEN" value=<?php echo($x1);?> name="x1">
    <input type="HIDDEN" value=<?php echo($x2);?> name="x2">
    <input type="HIDDEN" value=<?php echo($x3);?> name="x3">
    <input type="HIDDEN" value=<?php echo($x4);?> name="x4">
    <input type="HIDDEN" value=<?php echo($x5);?> name="x5">
    <input type="HIDDEN" value=<?php echo($x6);?> name="x6">
    <input type="HIDDEN" value=<?php echo($x7);?> name="x7">
    <input type="HIDDEN" value=<?php echo($x8);?> name="x8">

    <input type="HIDDEN" value=<?php echo($inclu1);?> name="inclu1">
    <input type="HIDDEN" value=<?php echo($inclu2);?> name="inclu2">
    <input type="HIDDEN" value=<?php echo($inclu3);?> name="inclu3">
    <input type="HIDDEN" value=<?php echo($inclu4);?> name="inclu4">
    <input type="HIDDEN" value=<?php echo($inclu5);?> name="inclu5">
    <input type="HIDDEN" value=<?php echo($inclu6);?> name="inclu6">
    <input type="HIDDEN" value=<?php echo($inclu7);?> name="inclu7">
    <input type="HIDDEN" value=<?php echo($inclu8);?> name="inclu8">
    
    
    
 





    <p class="envoie"> <input type="submit" value="valider l'envoi de ce bon de séjour"/></p>
    
</form>




 

</body>
</html>