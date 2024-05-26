<?php
include('config.php');

for ($i=1; $i<9; $i++) {

      ${'x'.$i}="x";

       if ($_POST['prestation'. $i]=="Ménage confort appt -35m²") {
         ${'prixprestation'. $i}=32;
       }
       elseif ($_POST['prestation'. $i]=="Ménage confort+ appt -35m²") {
         ${'prixprestation'. $i}=75;
       }
       elseif ($_POST['prestation'. $i]=="ménage charme appt -35m²") {
         ${'prixprestation'. $i}=38;       
       }
       elseif ($_POST['prestation'. $i]=="ménage prestige appt -35m²") {
         ${'prixprestation'. $i}=88;
       }
       elseif ($_POST['prestation'. $i]=="Ménage confort appt 35 à 45 m²") {
         ${'prixprestation'. $i}=37;
      }
      elseif ($_POST['prestation'. $i]=="Ménage confort+ appt 35 à 45 m²") {
         ${'prixprestation'. $i}=106;
      }

       elseif ($_POST['prestation'. $i]=="ménage charme appt 35 à 45 m²") {
         ${'prixprestation'. $i}=45;
       }
       elseif ($_POST['prestation'. $i]=="ménage prestige appt 35 à 45 m²") {
         ${'prixprestation'. $i}=117;
       } 
       elseif ($_POST['prestation'. $i]=="Ménage confort appt + de 45 m² Jusqu’à 8 couchages") {
         ${'prixprestation'. $i}=43;
       } 
       elseif ($_POST['prestation'. $i]=="Ménage confort+ appt + de 45 m² Jusqu’à 8 couchages") {
         ${'prixprestation'. $i}=129;
       }
       elseif ($_POST['prestation'. $i]=="ménage charme appt + de 45 m² Jusqu’à 8 couchages") {
         ${'prixprestation'. $i}=49;
       }
       elseif ($_POST['prestation'. $i]=="ménage prestige appt + de 45 m² Jusqu’à 8 couchages") {
         ${'prixprestation'. $i}=130;
       }
       elseif ($_POST['prestation'. $i]=="Ménage confort appt + de 45 m² plus de 8 couchages") {
         ${'prixprestation'. $i}=49;
       }
       elseif ($_POST['prestation'. $i]=="Ménage confort+ appt + de 45 m² plus de 8 couchages") {
         ${'prixprestation'. $i}=150;
       }

       elseif ($_POST['prestation'. $i]=="ménage charme appt + de 45 m² plus de 8 couchages") {
         ${'prixprestation'. $i}=58;
       }
       elseif ($_POST['prestation'. $i]=="ménage prestige appt + de 45 m² plus de 8 couchages") {
         ${'prixprestation'. $i}=170;
       }
       elseif ($_POST['prestation'. $i]=="réception à la location") {
         ${'prixprestation'. $i}=40;
       }
       elseif ($_POST['prestation'. $i]=="réception au bureau") {
         ${'prixprestation'. $i}=32;
       }
       elseif ($_POST['prestation'. $i]=="réception en résidence") {
         ${'prixprestation'. $i}=35;
       }
       elseif ($_POST['prestation'. $i]=="torchon") {
         ${'prixprestation'. $i}=3;
       }
       elseif ($_POST['prestation'. $i]=="lit bebe") {
         ${'prixprestation'. $i}=10;
       }
      elseif ($_POST['prestation'. $i]=="kit bebe") {
         ${'prixprestation'. $i}=25;
       }
       elseif ($_POST['prestation'. $i]=="location de draps simple") {
         ${'prixprestation'. $i}=8;
       }
        elseif ($_POST['prestation'. $i]=="location de draps double") {
         ${'prixprestation'. $i}=10;
       }
        elseif ($_POST['prestation'. $i]=="location de serviettes") {
         ${'prixprestation'. $i}=6;
       }
        elseif ($_POST['prestation'. $i]=="produits d'hygiènes") {
         ${'prixprestation'. $i}=7;
       }
        elseif ($_POST['prestation'. $i]=="produits d'entretien") {
         ${'prixprestation'. $i}=7;
       }
               elseif ($_POST['prestation'. $i]=="couette simple") {
         ${'prixprestation'. $i}=10;
       }
               elseif ($_POST['prestation'. $i]=="couette double") {
         ${'prixprestation'. $i}=13;
       }
               elseif ($_POST['prestation'. $i]=="piscine") {
         ${'prixprestation'. $i}=4;
       }
               elseif ($_POST['prestation'. $i]=="bain") {
         ${'prixprestation'. $i}=2;
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


$total = $prixprestation1*$quantite11 + 
$prixprestation2*$quantite22 + 
$prixprestation3*$quantite33 + 
$prixprestation4*$quantite44 + 
$prixprestation5*$quantite55 + 
$prixprestation6*$quantite66 + 
$prixprestation7*$quantite77 + 
$prixprestation8*$quantite88;

require('PHPMailer/class.phpmailer.php'); 
 
$mail = new PHPMailer();

 
// Expéditeur
$mail->SetFrom('NOREPLY@sam-web.fr', 'contact sam');
// Destinataire

$mail->AddAddress('servicesdaccueilpourmeubles@gmail.com', 'contact sam');
$mail->AddCC($_POST['mail']);
$mail->CharSet = 'UTF-8';
$mail->IsHTML(true);
//servicesdaccueilpourmeubles@gmail.com
// Objet
$mail->Subject = 'Bon de commande';
// Votre message
$mail->MsgHTML(


	"<!DOCTYPE html>

<html>
<head>
        <meta charset=\"utf-8\">
</head>

    

	
<body>

SAM vous remercie d'utiliser la fonction bon de commande <br>

appartement :" . $_POST['nompappart'] . " <br>
nom :" . $_POST['nomproprio'] . " 


<table border=\"1\" div style=\"width:100%;\">
   <tr>
       <th>prestation</th>
       <th>quantitée</th>
       <th>date(s)</th>
       <th>prix</th>
   </tr>
   <tr>
   <td>" . $_POST['prestation1'] . "</td>
   <td>" . $_POST['quantite1'] . "</td>
   <td>" . $_POST['date1'] . "</td>
   <td>  ".$prixprestation1." </td>
	</tr>

	   </tr>
   <tr>
   <td>" . $_POST['prestation2'] . "</td>
   <td>" . $_POST['quantite2'] . "</td>
   <td>" . $_POST['date2'] . "</td>
   <td>  ".$prixprestation2."  </td>
	</tr>
	   </tr>
   <tr>
   <td>" . $_POST['prestation3'] . "</td>
   <td>" . $_POST['quantite3'] . "</td>
   <td>" . $_POST['date3'] . "</td>
   <td>  ".$prixprestation3." </td>
	</tr>
	   </tr>
   <tr>
   <td>" . $_POST['prestation4'] . "</td>
   <td>" . $_POST['quantite4'] . "</td>
   <td>" . $_POST['date4'] . "</td>
   <td> ".$prixprestation4."  </td>
	</tr>
	   </tr>
   <tr>
   <td>" . $_POST['prestation5'] . "</td>
   <td>" . $_POST['quantite5'] . "</td>
   <td>" . $_POST['date5'] . "</td>
   <td> ".$prixprestation5." </td>
	</tr>
	   </tr>
   <tr>
   <td>" . $_POST['prestation6'] . "</td>
   <td>" . $_POST['quantite6'] . "</td>
   <td>" . $_POST['date6'] . "</td>
   <td> ".$prixprestation6." </td>
	</tr>
	   </tr>
   <tr>
   <td>" . $_POST['prestation7'] . "</td>
   <td>" . $_POST['quantite7'] . "</td>
   <td>" . $_POST['date7'] . "</td>
   <td>  ".$prixprestation7." </td>
	</tr>
	   </tr>
   <tr>
   <td>" . $_POST['prestation8'] . "</td>
   <td>" . $_POST['quantite8'] . "</td>
   <td>" . $_POST['date8'] . "</td>
   <td>  ".$prixprestation8." </td>
	</tr>
  </table>
<h2> total:".$total."€</h2>

envoie de :". $_POST['reglement']."<br>


remarques: ". $_POST['message']."

code de réduction: ". $_POST['code']."



</body>


");
 
// Envoi du mail avec gestion des erreurs
if(!$mail->Send()) {
  header('Location: probleme.php');
} else {
  header('Location: envoye.php');
} 
 



 $req = $bdd->prepare('INSERT INTO boncommande(proprio, bon_de_commande, date) VALUES(?,?,?)');
$req->execute(array($_POST['nomproprio'],"
<!DOCTYPE html>

<html>
<head>
        <meta charset=\"utf-8\">
</head>

    

  
<body>



appartement :" . $_POST['nompappart'] . " 
nom client :" . $_POST['nomproprio'] . " 


<table border=\"1\" div style=\"width:100%;\">
   <tr>
       <th>prestation</th>
       <th>quantitée</th>
       <th>date(s)</th>
       <th>prix</th>
   </tr>
   <tr>
   <td>" . $_POST['prestation1'] . "</td>
   <td>" . $_POST['quantite1'] . "</td>
   <td>" . $_POST['date1'] . "</td>
   <td>  ".$prixprestation1." </td>
  </tr>

     </tr>
   <tr>
   <td>" . $_POST['prestation2'] . "</td>
   <td>" . $_POST['quantite2'] . "</td>
   <td>" . $_POST['date2'] . "</td>
   <td>  ".$prixprestation2."  </td>
  </tr>
     </tr>
   <tr>
   <td>" . $_POST['prestation3'] . "</td>
   <td>" . $_POST['quantite3'] . "</td>
   <td>" . $_POST['date3'] . "</td>
   <td>  ".$prixprestation3." </td>
  </tr>
     </tr>
   <tr>
   <td>" . $_POST['prestation4'] . "</td>
   <td>" . $_POST['quantite4'] . "</td>
   <td>" . $_POST['date4'] . "</td>
   <td> ".$prixprestation4."  </td>
  </tr>
     </tr>
   <tr>
   <td>" . $_POST['prestation5'] . "</td>
   <td>" . $_POST['quantite5'] . "</td>
   <td>" . $_POST['date5'] . "</td>
   <td> ".$prixprestation5." </td>
  </tr>
     </tr>
   <tr>
   <td>" . $_POST['prestation6'] . "</td>
   <td>" . $_POST['quantite6'] . "</td>
   <td>" . $_POST['date6'] . "</td>
   <td> ".$prixprestation6." </td>
  </tr>
     </tr>
   <tr>
   <td>" . $_POST['prestation7'] . "</td>
   <td>" . $_POST['quantite7'] . "</td>
   <td>" . $_POST['date7'] . "</td>
   <td>  ".$prixprestation7." </td>
  </tr>
     </tr>
   <tr>
   <td>" . $_POST['prestation8'] . "</td>
   <td>" . $_POST['quantite8'] . "</td>
   <td>" . $_POST['date8'] . "</td>
   <td>  ".$prixprestation8." </td>
  </tr>
  </table>
<h2> total:".$total."€</h2>

envoie de :". $_POST['reglement']."<br>


remarques: ". $_POST['message']."<br>

code de réduction: ". $_POST['code']." <br><br>

à bientot sur sam-web.fr



</body>


",date("F j, Y, g:i a"),));