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
include("includes/identifiants.php");
include("includes/fonctions.php");
include('menu_principale.php');
//include("../menu_principale.php");
?>


	
		<!-- Banner -->
<div id="main-wrappera" style="height: 100%" class="image_background">
	<div id="main" class="container">
		<div class="row justify-content-md-center" >
			<div class="col-md-4" id="opaque_background">		
			<!-- Content -->
			<div class="col-md-6 offset-md-3">
								<h1>Connexion:	</h1>
			</div>
				<form action="espace-proprietaires.php" method="post">
					<div class="form-group ">
						<label for="ID" class="col-sm-4 col-form-label">Identifiant</label>
							<div class="">
							<input type="text" name="pseudo" placeholder="identifiant" class="form-control" id="ID" />
						</div>
					</div>

					<div class="form-group ">
						<label for="PSW" class="col-sm-4 col-form-label">Mot de passe</label>
						<div class="">
							<input type="password" name="password" placeholder="Mot de passe" class="form-control " id="PSW" />
						</div>
					</div>

					<div class="form-inline" >
						<label for="Type_presta" class="col-sm-3 col-form-label" id="">Groupe</label> 
						<div class="col-9"> 
							<select class="form-control" name="Groupe" id="Groupe">
		   						<option value="1">1</option>
		    					<option value="2">2</option>
		    					<option value="3">3</option>
							</select>
						</div>
					</div>

					<div class="form-group ">
						<div class="col-md-12">
							<a href="enregistrement.php" >S'enregister !<br /> </a>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-6 offset-md-3">
							<input type="submit" value="Valider" class="btn btn-primary"/>
						</div>
					</div>
				</form>


			</div>
		</div>
	</div>
</div>

						
<?php
include("includes/footer.php");
?>