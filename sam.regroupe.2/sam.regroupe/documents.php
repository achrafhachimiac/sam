<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="css.css" />
		<link rel="stylesheet" type="text/css" href="style7.css" />
        <title>SAM</title>
		<title>SAM</title>
    </head>
	</body>
	
	
	<header class="titre">
   SAM Services d'accueil pour meublés
	</header>
	
	
	<aside class=agaucheproprio>
	
	<span class=txt>Le suivi de votre dossier :</span><img class="valloire" src="valloire1.jpg" />
	
	</aside>
	
	
	
	<p></p>
	
	<br />
	
	
<?php include("menus.php"); ?>
	<section class=proprio>
	        <?php
    if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "accespro") // Si le mot de passe est bon
    {
    // On affiche les codes
    ?>
        <h1>Accès a vos documents:</h1>
        
		<p><strong> </strong></p> <a href="inscription_sam/BONDECOMMANDE.pdf"> Bon de commande </a> <br>
		<a href="bondecommande.php"> nouveau ! version interactive </a>
		
		<p><strong>	</strong></p> <a href="inscription_sam/Descriptifappartement.pdf"> Descriptif appartement  </a>
			
		<p><strong>	 </strong></p> <a href="inscription_sam/ETATDELIEUX.pdf">Etat des lieux </a>
		
		<dl>
		<dt>Planing résérvation</dt>

		
	
		<dd><a href="inscription_sam/planning_hiver_14.pdf"> Hiver 2014 </a></dd>
		<br>
		<dt> Tarifs propriétaires :</dt>
		<dd><a href="inscription_sam/tarif_propriétaires_hiver_1516.pdf"> Tarifs hiver 2015/16  </a></dd>
		
		<dt>Tarifs résidents :</dt>
		<dd><a href="inscription_sam/Tarifsprestationsresidents1415.pdf">Tarifs hiver 2014/15</a></dd>
        
		 
		 
		</dl>
        
        Cette page est réservée aux propriétaires du SAM. Elle vous permet de modifier votre dossier <br />
        SAM vous remercie.
        </p>
		</section>
		
		
		<section class="proprio">
	<a href="acces_sejour.php">Envoyer un bon de séjour </a>
	</section>
        <?php
    }
    elseif (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "mesdocuments") { ?>
    	 <h1>Accès a vos documents:</h1>
        
		<p><strong> </strong></p> <a href="docvalme/BONDECOMMANDE.pdf"> Bon de commande </a> <br>
		<a href="bondecommande.php"> nouveau ! version interactive </a> 
		
		<p><strong>	</strong></p> <a href="docvalme/Descriptifappartement.pdf"> Descriptif appartement  </a>
			
		<p><strong>	 </strong></p> <a href="docvalme/ETATDESLIEUX.pdf">Etat des lieux </a>
		
		<dl>
		<dt>Planing résérvation</dt>

		
	
		<dd><a href="docvalme/planninghiver14.pdf"> Hiver 2014 </a></dd>
		<br>
		<dt> Tarifs propriétaires :</dt>
		<dd><a href="docvalme/Tarifsprestationspropriétaires1415.pdf"> Tarifs hiver 2014/15  </a></dd>
		
		<dt>Tarifs résidents :</dt>
		<dd><a href="docvalme/TarifsprestationsresidentsValmeinier.pdf">Tarifs hiver 2014/15</a></dd>
        
		 
		 
		</dl>
        
        Cette page est réservée aux propriétaires du SAM. Elle vous permet de modifier votre dossier <br />
        SAM vous remercie.
        </p>
    </section>
        		<section class="proprio">
	<a href="acces_sejour.php">Envoyer un bon de séjour </a>
	</section>
   <?php }


    else // Sinon, on affiche un message d'erreur
    {
        echo '<p>Mot de passe incorrect</p>';
    }
    ?>
	</section>
	
	
	

	
	
	<footer>
    Martin Francois-Charles 2013
	</footer>
	
	
	
	
	
    </body>
	
</html>