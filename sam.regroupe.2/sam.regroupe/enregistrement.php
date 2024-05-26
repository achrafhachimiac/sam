<?php
include("DEBUT.php");

session_start();
?>
<!DOCTYPE HTML>
<!--
    TXT by HTML5 UP
    html5up.net | @n33co
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<?php
include("menu_principale.php");
?>

<div id="main-wrapperb"  class="">
    <div id="main" class="container">
        <div class="row justify-content-md-center">

        <!-- formulaire d'enregistrement -->
        <?php
if (empty($_POST['pseudo'])) // Si  la variable est vide, on peut considérer qu'on est sur la page de formulaire
{?>
    <div class="formulaire_enregistrement">
        <div class="row justify-content-md-center">
            <div class="col-6">
                <h1 class="inscription">Formulaire d'inscription: </h1> <br />
            </div>
        </div>
    <form class="enregistrement" method="post" action="enregistrement.php" enctype="multipart/form-data">


        <div class="row">
            <div class="col-6">
                <div class="card card-outline-secondary" style="padding-top: 1px; padding-left: 1px;">
                    <div class="card-header">
                        <h3 class="mb-0">Identifiants : </h3>
                    </div>
                    <div class="card-body">
                        <div class="fromgroup">
                          <label for="pseudo">Pseudo :</label>  <input name="pseudo" type="text" id="pseudo" placeholder="Ex: Nom ou adresse mail"/> ( le pseudo doit contenir entre 3 et 15 caractères et va vous permettre d'accéder à votre compte )<br />
                        </div>
                        <div class="fromgroup">
                          <label for="password">Mot de Passe :</label><input type="password" name="password" id="password" />( Mot de passe de votre compte )<br />
                        </div>
                        <div class="fromgroup">
                          <label for="confirm">Confirmer le mot de passe :</label><input type="password" name="confirm" id="confirm" />
                        </div>

                        <div class="form-group">
                            <label for="Type_presta" class="col-3 col-form-label">Groupe :</label>
                            <div class="col-9">
                                <select class="form-control" name="Groupe" id="Groupe">
                                    <option value="1" selected="selected">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-6">
                <div class="card card-outline-secondary" style="padding-top: 1px; padding-left: 1px;">
                    <div class="card-header">
                        <h3 class="mb-0">Contacts : </h3>
                    </div>
                    <div class="card-body">
                        <div class="fromgroup1">
                          <label for="Nom">Votre Nom et Prénom :</label><input type="text" name="nom" id="nom" /><br />
                        </div>
                        <div class="fromgroup1">
                          <label for="email">Votre adresse Mail :</label><input type="email" name="email" id="email" /><br />
                        </div>
                        <div class="fromgroup1">
                            <label for="adresse">Votre adresse principale :</label><input type="text" name="adresse_1" id="adresse_1" placeholder="13 rue des vacances" /><br />
                        </div>
                        <div class="fromgroup1">
                            <label for="adresse">Complément d'adresse :</label><input type="text" name="adresse_1_1" id="adresse_1_1" placeholder="batiment R appt 55" /><br />
                        </div>
                        <div class="fromgroup1">
                            <label for="adresse">Code postale - Ville :</label><input type="text" name="adresse_2" id="adresse_2" placeholder="75000 - Paris" /><br />
                        </div>
                        <div class="fromgroup1">
                          <label for="telephone">Votre numéro de téléphone :</label><input type="tel" name="telephone" id="telephone" /><br />
                        </div>
                        <div class="fromgroup">
                            <label for="situation"> Veuillez indiquer votre situation : </label> <br />
                            <input type="radio" name="situation" value="non_pro" id="non_pro" /> <label for="non_pro" class="inline">Propriétaire loueur non professionel</label><br />
                            <input type="radio" name="situation" value="pro" id="pro" /> <label for="pro" class="inline">Propriètaire loueur professionel</label><br />
                            <input type="radio" name="situation" value="para" id="para" /> <label for="para" class="inline">Régime de la para hôtellerie</label><br />
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="row ">
        <div class="col-6">
            <div class="card card-outline-secondary" style="padding-left: 1px;">
                <div class="card-header">
                    <h3 class="mb-0">Situation et designation des locaux mis en gestion :</h3>
                </div>
                <div class="card-body">
                    <div class="fromgroup">
                        <label for="localisation" >Adresse :</label><input type="text" name="adresse_loc_1" id="adresse_loc_1" placeholder="14 rue des vacances" />
                        ( Veillez préciser votre adresse compléte avec eventuellement le numéro d'appartement )
                    </div>
                    <div class="fromgroup1">
                        <label for="adresse">Code postale - Ville :</label><input type="text" name="adresse_loc_2" id="adresse_loc_2" placeholder="75000 - Paris" /><br />
                    </div>

                    <div class="fromgroup1">
                        <label for="superficie">superficie en m² :</label><input type="number" name="superficie" id="superficie"  min="0"/>
                    </div>

                    <div class="fromgroup1">
                        <label for="superficie">Nombre de couchage :</label><input type="number" name="couchage" id="couchage" min="0"/>
                    </div>

                    <div class="fromgroup1">
                        <label for="superficie">Nombre de pièce :</label><input type="number" name="piece" id="piece" min="0"/>
                    </div>

                    <div class="fromgroup">
                        <label for="situation"> Parking : </label> <br />
                        <input type="radio" name="parkings" value="interieur" id="interieur" /> <label for="non_pro" class="inline">Interieur</label><br />
                        <input type="radio" name="parkings" value="extérieur" id="extérieur" /> <label for="pro" class="inline">Extérieur</label><br />
                        <input type="radio" name="parkings" value="aucun" id="aucun" checked="checked"/> <label for="para" class="inline">Aucune place de parking</label><br />
                    </div>
                    <div class="fromgroup1">
                        <label for="superficie">N° parking :</label><input type="text" name="parking" id="parking" value="0" />
                    </div>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="card card-outline-secondary" style="padding-left: 1px;">
                <div class="card-header">
                    <h3 class="mb-0">Durée de renouvellement :</h3>
                </div>
                <div class="card-body">
                    <div class="fromgroup">
                        <label for="duree">Le present contrat est consenti pour : </label> <br />
                        <input type="radio" name="duree" value="hiver" id="hiver" /> <label for="hiver" class="inline">La saison d’hiver</label>
                        <input type="radio" name="duree" value="hiver_etee" id="hiver_etee" /> <label for="hiver_etee" class="inline">La saison d’hiver et d’été</label>
                        <input type="radio" name="duree" value="annee" id="annee" /> <label for="hiver_etee" class="inline">A l’année</label>
                    </div>
                </div>
           </div>
           <br />

           <div class="card card-outline-secondary" style="padding-top: 1px; padding-left: 1px;">
                <div class="card-header">
                    <h3 class="mb-0">Régelement :</h3>
                </div>
                <div class="card-body">
                <div class="fromgroup">
                    <label for="reglement"> Le montant des prestations est payable :<br />
                    En partie, acompte 30 % à la commande et le solde:</label><br />

                    <input type="radio" name="reglement" value="chaque_presta" id="chaque_presta" /> <label for="chaque_presta" class="inline">A chaque préstation</label><br />
                    <input type="radio" name="reglement" value="fin_mois" id="fin_mois" /> <label for="fin_mois" class="inline">Chaque fin du mois</label><br />
                    <input type="radio" name="reglement" value="fin_saison" id="fin_saison" /> <label for="fin_saison" class="inline">en fin de saison</label><br />
                </div>
                <div class="fromgroup">
                    <label>Autre période: </label> <input type="text" value="Aucune" name="proprio_paiement_date" id="proprio_paiement_date" /><br />
                </div>
                </div>
            </div>
        </div>
        </div>
    </div>

    <br />
    <div class="row justify-content-md-center">
        <div class="col-12">
           <br />
           <p class="bouton_inscription"><input type="submit" value="S'inscrire" id="boutton_enregistrement" /></p>
        </div>
    </div>
    </form>
    </div>

    <?php

} //Fin de la partie formulaire

else //On est dans le cas traitement
{



    $i = 0;
    $i_errors = 0 ;
    $erreur_enreg = "Vous avez oublié les champs suivants:<br/>" ;
    $erreur_enreg_2 = "";
    $i_Verrors="";

    // on verifie si y'a pas de champs vide, on prend les valeurs sinon
    if(empty($_POST['pseudo'])){
        $erreur_enreg .="Pseudo<br/>";
        $i_errors++;
    }
    else $pseudo=$_POST['pseudo']; $i_Verrors.="Pseudo".$_POST['pseudo']."<br/>";

    if(empty($_POST['password'])){
        $erreur_enreg .="Mot de passe<br/>";
        $i_errors++;
    }
    else{
        $pass = md5($_POST['password']);
        $confirm = md5($_POST['confirm']);
        $i_Verrors.="pass".$_POST['password']."<br/>";

    }


    if(empty($_POST['nom'])){
        $erreur_enreg .="Nom prenom<br/>";
        $i_errors++;
    }
    else $nom = $_POST['nom']; $i_Verrors.="nom".$_POST['nom']."<br/>";


    if(empty($_POST['adresse_1'])){
        $erreur_enreg .="Votre adresse<br/>";
        $i_errors++;

    }
    else $adresse_1 = $_POST['adresse_1']; $i_Verrors.="adresse_1".$_POST['adresse_1']."<br/>";


    if(isset($_POST['adresse_1_1'])){
        $adresse_1_1 =$_POST['adresse_1_1'];

    }
    else $adresse_1_1 = " "; $i_Verrors.="adresse_1_1".$_POST['adresse_1_1']."<br/>";


    if(empty($_POST['adresse_2'])){
        $erreur_enreg .="Votre code postale et ville<br/>";
        $i_errors++;
    }
    else $adresse_2 = $_POST['adresse_2'];$i_Verrors.="adresse_2".$_POST['adresse_2']."<br/>";

    if(empty($_POST['telephone'])){
        $erreur_enreg .="telephone<br/>";
        $i_errors++;
    }
    else $telephone = $_POST['telephone']; $i_Verrors.="telephone".$_POST['telephone']."<br/>";


    if(empty($_POST['email'])){
          $erreur_enreg .="Email<br/>";
          $i_errors++;
    }
    else $email = $_POST['email'];$i_Verrors.="email".$_POST['email']."<br/>";


    if(empty($_POST['situation'])){
        $erreur_enreg .="Situation(Proprio_type)<br/>";
        $i_errors++;
    }
    else $situation = $_POST['situation']; $i_Verrors.="proprio_type".$_POST['situation']."<br/>";


    if(empty($_POST['adresse_loc_1'])){
        $erreur_enreg .="l'adresse du logement concerné<br/>";
        $i_errors++;
    }
    else $adresse_loc_1 = $_POST['adresse_loc_1']; $i_Verrors.="adresse_loc_1".$_POST['adresse_loc_1']."<br/>";


    if(empty($_POST['adresse_loc_2'])){
        $erreur_enreg .="le code postale et ville du logement concerné<br/>";
        $i_errors++;
    }
    else $adresse_loc_2 = $_POST['adresse_loc_2']; $i_Verrors.="adresse_loc_2".$_POST['adresse_loc_2']."<br/>";


    if(empty($_POST['superficie'])){
        $erreur_enreg .="Superficie<br/>";
        $i_errors++;
    }
    else $superficie = $_POST['superficie'];$i_Verrors.="superficie".$_POST['superficie']."<br/>";


    if(empty($_POST['piece'])){
        $erreur_enreg .="Le nombre de pièces<br/>";
        $i_errors++;
    }
    else$piece = $_POST['piece'];$i_Verrors.="piece".$_POST['piece']."<br/>";


    if(empty($_POST['couchage'])){
        $erreur_enreg .="Le nombre de couchages<br/>";
        $i_errors++;
    }
    else $couchage = $_POST['couchage'];$i_Verrors.="couchage".$_POST['couchage']."<br/>";


    if(empty($_POST['parkings'])){
        $erreur_enreg .="Parking Type<br/>";
        $i_errors++;
    }
    else $parking_type = $_POST['parkings'];$i_Verrors.="parking_type: ".$_POST['parkings']."<br/>";


    if(empty($_POST['parking'])){

        $parking = '0' ;
    }
    else $parking = $_POST['parking'];$i_Verrors.="parking".$_POST['parking']."<br/>";


    if(empty($_POST['duree'])){
        $erreur_enreg .="Durée de renouvellement (proprio_saison)<br/>";
        $i_errors++;
    }
    else  $duree = $_POST['duree'];$i_Verrors.="duree".$_POST['duree']."<br/>";


    if(empty($_POST['Groupe'])){
        $erreur_enreg .="Groupe (proprio_secteur)<br/>";
        $i_errors++;
    }
    else  $proprio_secteur = $_POST['Groupe'];$i_Verrors.="groupe".$_POST['Groupe']."<br/>";


    if(empty($_POST['reglement'])){
        $erreur_enreg .="Modalité de régelement<br/>";
        $i_errors++;
    }
    else $reglement = $_POST['reglement'];$i_Verrors.="reglement".$_POST['reglement']."<br/>";


    if(empty($_POST['proprio_paiement_date'])){
        $erreur_enreg .="Autre periode !<br/>";
        $i_errors++;
    }
    else $proprio_paiement_date = $_POST['proprio_paiement_date'];$i_Verrors.="proprio_paiement_date".$_POST['proprio_paiement_date']."<br/>";

    //la date d'inscription d'un proprio
     $proprio_date_inscri=date('Y-m-d H:i:s');
     $i_Verrors.="date_d'insciption".$proprio_date_inscri."<br/>";

    if($i_errors==0){

      //On charge la bonne base de donnée

      if (isset($_POST['Groupe'])) {

        $db_name="null";
        $_SESSION['db_id'] = "null";
        $_SESSION['db'] = "null";

        if ($_POST['Groupe']=='1') {
            $_SESSION['db_id'] = '1';
            $_SESSION['db'] = BDD_Grp1;
            $db_name=BDD_Grp1; // nom de la base de donnée

        }

        else if ($_POST['Groupe']=='2') {
          $_SESSION['db_id'] = '2';
            $_SESSION['db'] = BDD_Grp2;
            $db_name=BDD_Grp2; // nom de la base de donnée
        }

        else if ($_POST['Groupe']=='3') {
          $_SESSION['db_id'] = '3';
            $_SESSION['db'] = BDD_Grp3;
            $db_name=BDD_Grp3; // nom de la base de donnée
        }

      }
        // Récuperer la base de données séléctionnée selon le groupe
        include("includes/identifiants.php");
        //==========================================================



        //Vérification du pseudo
        $query=$db->prepare('SELECT COUNT(*) AS nbr FROM proprio WHERE proprio_pseudo =:pseudo');
        $query->bindValue(':pseudo',$pseudo, PDO::PARAM_STR);
        $query->execute();
        $pseudo_free=($query->fetchColumn()==0)?1:0;
        $query->CloseCursor();
        if(!$pseudo_free)
        {
            $erreur_enreg_2 .= "Votre pseudo est déjà utilisé par un membre<br/>";
            $i++;
        }

        if (strlen($pseudo) < 3 || strlen($pseudo) > 15)
        {
            $erreur_enreg_2 .= "Votre pseudo est soit trop grand, soit trop petit<br/>";
            $i++;
        }

        //Vérification du mdp
        if ($pass != $confirm )
        {
            $mdp_erreur = "Votre mot de passe et votre confirmation diffèrent<br/>";
            $i++;
        }
        //Vérification de l'adresse email

        //Il faut que l'adresse email n'ait jamais été utilisée
        $query=$db->prepare('SELECT COUNT(*) AS nbr FROM proprio WHERE proprio_email =:mail');
        $query->bindValue(':mail',$email, PDO::PARAM_STR);
        $query->execute();
        $mail_free=($query->fetchColumn()==0)?1:0;
        $query->CloseCursor();


        //On vérifie la forme maintenant
        if (!preg_match("#^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.[a-z]{2,4}$#", $email))
        {
            $erreur_enreg_2 = "Votre adresse E-Mail n'a pas un format valide<br/>";
            $i++;
        }

    }
 if ($i==0 && $i_errors==0)
   {
    ?>
    <script type="text/javascript">
        var AP = document.getElementById('main-wrapperb');
        AP.setAttribute('class', 'image_background');


    </script>
<div class="col-12" id="opaque_background">

    <div class="row justify-content-md-center">
        <div class="col-6">
            <h1>Inscription terminée : </h1>
        </div>
    </div>
    <div class="row justify-content-md-center" id="enregistrement_valide">
        <div class="col-6">
            <?php
                echo'<p>Bienvenue '.stripslashes(htmlspecialchars($_POST['pseudo'])).' vous êtes maintenant inscrit sur notre plateforme de réservation. <br/>';

                if(!$mail_free)
                {
                  echo'Attention: l\'adresse mail est déjà utilisée<br/>';

                }
// enlever les commentaire à la ligne suivante pour afficher les valeurs recu par le formulaire

                /*.$i_Verrors*/

//
                ;
                       // include('Contrat.php');
            ?>

            Cliquez <a href="./index.php">ici</a> pour revenir à la page d accueil.</p>
            <!--Contrat cliquez <?php// echo'<a href=PDF/Contrat_'.$_POST['nom'].'.pdf onclick="window.open(this.href); return false;">ici</a>' ?>.<br/>-->
        </div>
    </div>
</div>

   <?php


        $query=$db->prepare('INSERT INTO proprio (proprio_pseudo,
         proprio_mdp,
        proprio_nom_prenom,
        proprio_adresse_1,
        propriete_adresse_1_1,
        proprio_adresse_2,
        proprio_tel,
        proprio_email,
        proprio_type,
        propriete_adresse_1,
        propriete_adresse_2,
        propriete_superficie,
        propriete_pieces,
        propriete_couchage,
        parking_type,
        propriete_garage,
        proprio_saison,
        proprio_secteur,
        proprio_paiement,
        proprio_date_inscri,
        proprio_paiement_date)
        VALUES (:proprio_pseudo,
        :proprio_mdp,
        :proprio_nom_prenom,
        :proprio_adresse_1,
        :propriete_adresse_1_1,
        :proprio_adresse_2,
        :proprio_tel,
        :proprio_email,
        :proprio_type,
        :propriete_adresse_1,
        :propriete_adresse_2,
        :propriete_superficie,
        :propriete_pieces,
        :propriete_couchage,
        :parking_type,
        :propriete_garage,
        :proprio_saison,
        :proprio_secteur,
        :proprio_paiement,
        :proprio_date_inscri,
        :proprio_paiement_date)');
    $query->bindValue(':proprio_pseudo', $pseudo, PDO::PARAM_STR);
    $query->bindValue(':proprio_mdp', $pass, PDO::PARAM_STR);
    $query->bindValue(':proprio_nom_prenom', $nom, PDO::PARAM_STR);
    $query->bindValue(':proprio_adresse_1', $adresse_1, PDO::PARAM_STR);
    $query->bindValue(':propriete_adresse_1_1', $adresse_1_1, PDO::PARAM_STR);
    $query->bindValue(':proprio_adresse_2', $adresse_2, PDO::PARAM_STR);
    $query->bindValue(':proprio_tel', $telephone, PDO::PARAM_STR);
    $query->bindValue(':proprio_email', $email, PDO::PARAM_STR);
    $query->bindValue(':proprio_type', $situation, PDO::PARAM_STR);
    $query->bindValue(':propriete_adresse_1', $adresse_loc_1, PDO::PARAM_STR);
    $query->bindValue(':propriete_adresse_2', $adresse_loc_2, PDO::PARAM_STR);
    $query->bindValue(':propriete_superficie', $superficie, PDO::PARAM_INT);
    $query->bindValue(':propriete_pieces', $piece, PDO::PARAM_INT);
    $query->bindValue(':propriete_couchage', $couchage, PDO::PARAM_INT);
    $query->bindValue(':parking_type', $parking_type, PDO::PARAM_INT);
    $query->bindValue(':propriete_garage', $parking, PDO::PARAM_STR);
    $query->bindValue(':proprio_saison', $duree, PDO::PARAM_STR);
    $query->bindValue(':proprio_secteur', $proprio_secteur, PDO::PARAM_STR);
    $query->bindValue(':proprio_paiement', $reglement, PDO::PARAM_STR);
    $query->bindValue(':proprio_date_inscri', $proprio_date_inscri, PDO::PARAM_STR);
    $query->bindValue(':proprio_paiement_date', $proprio_paiement_date, PDO::PARAM_STR);
    try {
$query->execute();
}
catch (Exception $e) {
echo $e->getMessage();
}
catch (InvalidArgumentException $e) {
echo $e->getMessage();
}


    //Et on définit les variables de sessions
        $_SESSION['pseudo'] = $pseudo;
        $_SESSION['id'] = $db->lastInsertId(); ;

        $query->CloseCursor();
    }
    else
    {
        $total=$i+$i_errors;

        echo'<div class="inscription_interrompue"><h1>Inscription interrompue : </h1>';
        echo'<p>Une ou plusieurs erreurs se sont produites pendant l incription</p>';
        echo'<p>'.$total.' erreur(s)'.$i_Verrors.'</p>';
       if($i_errors!=0) echo'<p>'.$erreur_enreg.'</p>';
       if ($i!=0) {
            echo'<p>'.$erreur_enreg_2.'</p>';
        }


        echo'<p>Cliquez <a href="enregistrement.php">ici</a> pour recommencer</p></div>';
    }
}
?>

</div>
</div>
</div>
</div>





        <!-- Footer -->

            <footer id="footer" class="container">
                <div class="row justify-content-md-center">
                    <div class="col-12">

                <!-- Copyright -->
                    <div id="copyright">
                        <ul class="menu">
                            <li>&copy; sam-web.fr tous droits réservés Martin Francois-Charles</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                        </ul>
                    </div>

            </footer>




<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    </body>
</html>
