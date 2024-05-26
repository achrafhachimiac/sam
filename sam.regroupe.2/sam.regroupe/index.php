<?php

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

  if (isset($_GET['disconect']) && $_GET['disconect']) {

    session_destroy();
    if (isset($_SESSION['pseudo'])){
    	unset($_SESSION['pseudo']);



    }
  }
?>
<?php
include("includes/fonctions.php");
include("menu_principale.php");
?>
		<!-- Banner -->

<!-- Deconnexion -->


<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="images/banner400.jpg" alt="First slide" style="width:100%;">
      	<div class="carousel-caption d-none d-md-block">
  				
					<h2>Bienvenue chez SAM</h2>
					<p>Le service d'accueil pour meublés</p>
				
 		 </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="images/banner401.jpg" alt="Second slide" style="width:100%;">
            	<div class="carousel-caption d-none d-md-block">
  				
					<h2>Bienvenue chez SAM</h2>
					<p>Le service d'accueil pour meublés</p>
				
 		 </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="images/banner402.jpg" alt="Third slide" style="width:100%;">
            	<div class="carousel-caption d-none d-md-block">
  				
					<h2>Bienvenue chez SAM</h2>
					<p>Le service d'accueil pour meublés</p>
				
 		 </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



		<!-- Main -->
			<div id="main-wrapper">
				<div id="main" class="container">
					<div class="row double">
						<div class="12u">
							
							<!-- Highlight -->
								<section class="box highlight">

									<header>
										<h2>SAM</h2>
										<p>Nous basons la mise en pratique de nos services sur des convictions fortes :</p>
									</header>
									<p>









											<ul>
	
	<li> Mettre notre expérience et nos qualités à votre service</li>
	<li> Permettre à chacun d’avoir une perception concrète des services rendus</li>
	<li> Organiser un service de proximité pour les résidents</li>
	<li> Développer une organisation orientée vers la satisfaction des clients</li>
	<li> Insuffler à tous les mêmes valeurs et les mêmes objectifs</li>
	
	
	</ul>
	
	<strong>Propriétaires et locataires sachez bénéficier de notre enthousiasme </strong>
									</p>
								</section>

						</div>
					</div>
					<div class="row double">
						<div class="12u">

							<!-- Features -->
								<section class="box features">
									<h2 class="major"><span>Description</span></h2>
									<div>
										<div class="row">
											<div class="3u">
												
												<!-- Feature -->
													<section class="box feature">
														<a href="#" class="image featured"><img src="images/acceuil.JPG" alt="" /></a>
														<h3><a href="#">Dès aujourd'hui</a></h3>
														<p>
															Nous lançons le service d’accueil de demain
														</p>
													</section>
										
											</div>
											<div class="3u">
												
												<!-- Feature -->
													<section class="box feature">
														<a href="#" class="image featured"><img src="images/097.jpg" alt="" /></a>
														<h3><a href="#">La référence</a></h3>
														<p>
															Notre vocation, être la référence pour tous
														</p>
													</section>
										
											</div>
											<div class="3u">
												
												<!-- Feature -->
													<section class="box feature">
														<a href="#" class="image featured"><img src="images/matin.JPG" alt="" /></a>
														<h3><a href="#">Maitrise</a></h3>
														<p>
															Assurer la maîtrise de toutes les tâches d’une réception
														</p>
													</section>
										
											</div>
											<div class="3u">
												
												<!-- Feature -->
													<section class="box feature">
														<a href="#" class="image featured"><img src="images/dej.JPG" alt="" /></a>
														<h3><a href="#">répondre aux attentes de chacun</a></h3>
														
													</section>
										
											</div>
										</div>

									</div>
								</section>

						</div>
					</div>



									<div >
				<div id="main" class="container">
					<div class="row">
						<div class="12u">
							<div class="content">
							
								<!-- Content -->
						
									<article class="box page-content">

										<header>
											<h2>Qui sommes nous</h2>
											<p>En quelques lignes</p>

										</header>

										<section>
											<span class="image featured"><img src="images/chalet.jpg" alt="" /></span>
											<p>
																Notre entreprise est issue de la volonté de mettre à disposition des loueurs de meublés un service d’accueil complet permettant la prise en charge des locataires pendant leur séjour. 

A partir de cette idée, par la dynamique du nombre croissant de propriétaires se libérant des dispositifs de défiscalisation, après un bail commercial, nous proposons une alternative pour que le bien reste un atout économique. 

Aujourd’hui, nous sommes le premier bureau d’accueil, nous intégrons notre démarche dans l’esprit de l’accueil d’une station village. 
Nous voulons conserver l’accueil personnalisé et valoriser les locations entre particuliers.
															</p>
										</section>

									</article>

							</div>
						</div>
					</div>




					</div>
				</div>
			</div>

<?php
include("includes/footer.php");
?>
