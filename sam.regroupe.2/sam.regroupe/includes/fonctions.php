<?php
if (!function_exists('erreur')) {
    function erreur($err='')
    {
       $mess=($err!='')? $err:'Une erreur inconnue s\'est produite';
       exit('<p>'.$mess.'</p>
       <p>Cliquez <a href="./index.php">ici</a> pour revenir à la page d\'accueil</p></div></body></html>');
    }
}


if (!function_exists('DefineDBB_Grps')) {

  function DefineDBB_Grps($POST)
  {

    if (isset($POST['Groupe'])) {

      if ($POST['Groupe']=='1') {
          $_SESSION['db_id'] = '1';
          $_SESSION['db'] = BDD_Grp1;
          $db_name=BDD_Grp1; // nom de la base de donnée
          echo "BDD_Grp1 SET Done!";
      }

      else if ($POST['Groupe']=='2') {
        $_SESSION['db_id'] = '2';
          $_SESSION['db'] = BDD_Grp2;
          $db_name=BDD_Grp2; // nom de la base de donnée
      }

      else if ($POST['Groupe']=='3') {
        $_SESSION['db_id'] = '3';
          $_SESSION['db'] = BDD_Grp3;
          $db_name=BDD_Grp3; // nom de la base de donnée
      }

    }
    else {
      $db_name=BDD_Grp1;
    }
    return $db_name;
  }
}

?>
