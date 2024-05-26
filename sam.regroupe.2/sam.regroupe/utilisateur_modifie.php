<?php


					echo 'SSSSSSSSSSSSSSS'.	$_SESSION['gproprio_id'];
		$update_done=0;
		$i=0;
		$pseudo_1=$_POST['pseudo'];
  		$erreur_enreg_2 = "";
		// verification du pseudo
		$query=$db->prepare('SELECT COUNT(*) AS nbr FROM proprio WHERE proprio_pseudo =:pseudo');
        $query->bindValue(':pseudo',$pseudo_1, PDO::PARAM_STR);
        $query->execute();
        $pseudo_free=($query->fetchColumn()==0)?1:0;
        $query->CloseCursor();
       /* if(!$pseudo_free  && $_POST['pseudo']!= )
        {
            $erreur_enreg_2 .= "Votre pseudo est déjà utilisé par un membre<br/>";
            $i++;
        }*/
        // Changement de secteur

		$req_4 = $db->prepare('SELECT * FROM proprio WHERE proprio_id =:gproprio_id');
		$req_4->execute(array(
		'gproprio_id' => $_SESSION['gproprio_id'],
		));
		$donnees_4 = $req_4->fetch();
		if (isset($_POST['password'])) {
			$pass= md5($_POST['password']);
		}
		else $pass=$donnees_4['proprio_mdp'];

		$adresse_1_1 = (isset($_POST['adresse_1_1'])) ? $_POST['adresse_1_1'] : "Aucun";

        if ($_POST['secteur']!=$donnees_4["proprio_secteur"]  && $update_done==0){
        	$update_done=1;
        	$db_name='c'.$_POST['secteur'].'sam';
        	echo'c'.$_POST['secteur'].'sam';
        	try {
        	$db_1 = new PDO('mysql:host=localhost;dbname='.$db_name, $db_user, $db_pass);
        	}
        	 catch (PDOException $e) {
    			echo 'Could not connect : ' . $e->getMessage();
			}
        	$req_2 = $db_1->prepare('INSERT INTO proprio (
        				proprio_pseudo,
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
      					proprio_secteur,
      					proprio_quartier,
      					proprio_saison,
      					proprio_paiement,
      					proprio_date_inscri)
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
      					:proprio_secteur,
      					:proprio_quartier,
      					:proprio_saison,
      					:proprio_paiement,
      					:proprio_date_inscri)');
    $req_2->bindValue(':proprio_pseudo', $_POST['pseudo'], PDO::PARAM_STR);
    $req_2->bindValue(':proprio_mdp', $pass, PDO::PARAM_STR);
    $req_2->bindValue(':proprio_nom_prenom', $_POST['nom'], PDO::PARAM_STR);
    $req_2->bindValue(':proprio_adresse_1', $_POST['adresse_1'], PDO::PARAM_STR);
    $req_2->bindValue(':propriete_adresse_1_1', $_POST['adresse_1_1'], PDO::PARAM_STR);
    $req_2->bindValue(':proprio_adresse_2', $_POST['adresse_2'], PDO::PARAM_STR);
    $req_2->bindValue(':proprio_tel', $_POST['telephone'], PDO::PARAM_STR);
    $req_2->bindValue(':proprio_email', $_POST['email'], PDO::PARAM_STR);
    $req_2->bindValue(':proprio_type', $_POST['situation'], PDO::PARAM_STR);
    $req_2->bindValue(':propriete_adresse_1', $_POST['adresse_loc_1'], PDO::PARAM_STR);
    $req_2->bindValue(':propriete_adresse_2', $_POST['adresse_loc_2'], PDO::PARAM_STR);
    $req_2->bindValue(':propriete_superficie', $_POST['superficie'], PDO::PARAM_INT);
    $req_2->bindValue(':propriete_pieces', $_POST['piece'], PDO::PARAM_INT);
    $req_2->bindValue(':propriete_couchage', $_POST['couchage'], PDO::PARAM_INT);
    $req_2->bindValue(':parking_type', $_POST['parkings'], PDO::PARAM_INT);
    $req_2->bindValue(':propriete_garage', $_POST['parking'], PDO::PARAM_STR);
    $req_2->bindValue(':proprio_secteur', $_POST['secteur'], PDO::PARAM_INT);
    $req_2->bindValue(':proprio_quartier', $_POST['quartier'], PDO::PARAM_INT);
    $req_2->bindValue(':proprio_saison', $_POST['duree'], PDO::PARAM_STR);
    $req_2->bindValue(':proprio_paiement', $_POST['reglement'], PDO::PARAM_STR);
    $req_2->bindValue(':proprio_date_inscri', $donnees_4["proprio_date_inscri"], PDO::PARAM_STR);
    $req_2->execute();

			$db_name_2='c'.$donnees_4["proprio_secteur"].'sam';

			try {
				$db_2 = new PDO('mysql:host=localhost;dbname='.$db_name_2, $db_user, $db_pass);}
			catch (PDOException $e) {
    			echo 'Could not connect : ' . $e->getMessage();
			}
			$req_2 = $db_2->prepare('DELETE FROM proprio WHERE proprio_id= :proprio_id');
			$req_2->execute(array('proprio_id' => $_SESSION['gproprio_id']));




        }


        //****************************

        if (strlen($pseudo_1) < 3 || strlen($pseudo_1) > 15 )
        {
            $erreur_enreg_2 .= "Votre pseudo est soit trop grand, soit trop petit<br/>";
            $i++;
        }
        if (md5($_POST['password'])!="d41d8cd98f00b204e9800998ecf8427e" && $i == 0 && $update_done==0) {
			$req = $db->prepare('UPDATE proprio SET
						proprio_pseudo= :proprio_pseudo,
						proprio_mdp= :proprio_mdp,
						proprio_nom_prenom= :proprio_nom_prenom,
						proprio_adresse_1= :proprio_adresse_1,
						propriete_adresse_1_1= :propriete_adresse_1_1,
						proprio_adresse_2= :proprio_adresse_2,
						proprio_tel= :proprio_tel,
       					proprio_email= :proprio_email,
       					proprio_type= :proprio_type,
       					propriete_adresse_1= :propriete_adresse_1,
       					propriete_adresse_2= :propriete_adresse_2,
       					propriete_superficie= :propriete_superficie,
       					propriete_pieces= :propriete_superficie,
       					propriete_couchage= :propriete_couchage,
      					parking_type= :parking_type,
      					propriete_garage= :propriete_garage,
      					proprio_secteur= :proprio_secteur,
						proprio_quartier= :proprio_quartier,
      					proprio_saison= :proprio_saison,
      					proprio_paiement= :proprio_paiement
      					 WHERE proprio_id = :proprio_id');
			$req->execute(array(
				':proprio_pseudo' => $_POST['pseudo'],
				':proprio_mdp' => $pass,
				':proprio_nom_prenom' => $_POST['nom'],
				':proprio_adresse_1' => $_POST['adresse_1'],
				':propriete_adresse_1_1' =>  $adresse_1_1,
				':proprio_adresse_2' => $_POST['adresse_2'],
				':proprio_tel' => $_POST['telephone'],
				':proprio_email' => $_POST['email'],
				':proprio_type' => $_POST['situation'],
				':propriete_adresse_1' => $_POST['adresse_loc_1'],
				':propriete_adresse_2' => $_POST['adresse_loc_2'],
				':propriete_superficie' => $_POST['superficie'],
				':propriete_pieces' => $_POST['piece'],
				':propriete_couchage' => $_POST['couchage'],
				':parking_type' => $_POST['parkings'],
				':propriete_garage' => $_POST['parking'],
				':proprio_secteur' =>  $_POST['secteur'],
				':proprio_quartier' =>  $_POST['quartier'],
				':proprio_saison' => $_POST['duree'],
				':proprio_paiement' => $_POST['reglement'],
				':proprio_id' => $_SESSION['gproprio_id']
				));


        }
        else if (!isset($_POST['date_regelement'])&& $i == 0 && $update_done==0) {

			$reqqq = $db->prepare('UPDATE proprio SET
						proprio_pseudo= :proprio_pseudo,
						proprio_nom_prenom= :proprio_nom_prenom,
						proprio_adresse_1= :proprio_adresse_1,
						propriete_adresse_1_1= :propriete_adresse_1_1,
						proprio_adresse_2= :proprio_adresse_2,
						proprio_tel= :proprio_tel,
       					proprio_email= :proprio_email,
       					proprio_type= :proprio_type,
       					propriete_adresse_1= :propriete_adresse_1,
       					propriete_adresse_2= :propriete_adresse_2,
       					propriete_superficie= :propriete_superficie,
       					propriete_pieces= :propriete_superficie,
       					propriete_couchage= :propriete_couchage,
      					parking_type= :parking_type,
      					propriete_garage= :propriete_garage,
      					proprio_secteur= :proprio_secteur,
						proprio_quartier= :proprio_quartier,
      					proprio_saison= :proprio_saison,
      					proprio_paiement= :proprio_paiement
      					 WHERE proprio_id = :proprio_id');
			$reqqq->execute(array(
				':proprio_pseudo' => $_POST['pseudo'],
				':proprio_nom_prenom' => $_POST['nom'],
				':proprio_adresse_1' => $_POST['adresse_1'],
				':propriete_adresse_1_1' =>  $adresse_1_1,
				':proprio_adresse_2' => $_POST['adresse_2'],
				':proprio_tel' => $_POST['telephone'],
				':proprio_email' => $_POST['email'],
				':proprio_type' => $_POST['situation'],
				':propriete_adresse_1' => $_POST['adresse_loc_1'],
				':propriete_adresse_2' => $_POST['adresse_loc_2'],
				':propriete_superficie' => $_POST['superficie'],
				':propriete_pieces' => $_POST['piece'],
				':propriete_couchage' => $_POST['couchage'],
				':parking_type' => $_POST['parkings'],
				':propriete_garage' => $_POST['parking'],
				':proprio_secteur' =>  $_POST['secteur'],
				':proprio_quartier' =>  $_POST['quartier'],
				':proprio_saison' => $_POST['duree'],
				':proprio_paiement' => $_POST['reglement'],
				':proprio_id' => $_SESSION['gproprio_id']
				));
			echo 'SSSSSSSSSSSSSSS'.	$_SESSION['gproprio_id'];

        }
        else if ($i == 0 && $update_done==0) {
			$req = $db->prepare('UPDATE proprio SET
						proprio_pseudo= :proprio_pseudo,
						proprio_nom_prenom= :proprio_nom_prenom,
						proprio_adresse_1= :proprio_adresse_1,
						propriete_adresse_1_1= :propriete_adresse_1_1,
						proprio_adresse_2= :proprio_adresse_2,
						proprio_tel= :proprio_tel,
       					proprio_email= :proprio_email,
       					proprio_type= :proprio_type,
       					propriete_adresse_1= :propriete_adresse_1,
       					propriete_adresse_2= :propriete_adresse_2,
       					propriete_superficie= :propriete_superficie,
       					propriete_pieces= :propriete_superficie,
       					propriete_couchage= :propriete_couchage,
      					parking_type= :parking_type,
      					propriete_garage= :propriete_garage,
      					proprio_secteur= :proprio_secteur,
						proprio_quartier= :proprio_quartier,
      					proprio_saison= :proprio_saison,
      					proprio_paiement= :proprio_paiement,
      					proprio_paiement_date= :proprio_paiement_date
      					 WHERE proprio_id = :proprio_id');
			$req->execute(array(
				':proprio_pseudo' => $_POST['pseudo'],
				':proprio_nom_prenom' => $_POST['nom'],
				':proprio_adresse_1' => $_POST['adresse_1'],
				':propriete_adresse_1_1' =>  $adresse_1_1,
				':proprio_adresse_2' => $_POST['adresse_2'],
				':proprio_tel' => $_POST['telephone'],
				':proprio_email' => $_POST['email'],
				':proprio_type' => $_POST['situation'],
				':propriete_adresse_1' => $_POST['adresse_loc_1'],
				':propriete_adresse_2' => $_POST['adresse_loc_2'],
				':propriete_superficie' => $_POST['superficie'],
				':propriete_pieces' => $_POST['piece'],
				':propriete_couchage' => $_POST['couchage'],
				':parking_type' => $_POST['parkings'],
				':propriete_garage' => $_POST['parking'],
				':proprio_secteur' =>  $_POST['secteur'],
				':proprio_quartier' =>  $_POST['quartier'],
				':proprio_saison' => $_POST['duree'],
				':proprio_paiement' => $_POST['reglement'],
				':proprio_paiement_date' => $_POST['date_regelement'],
				':proprio_id' => $_SESSION['gproprio_id']
				));
		}

	?>
