
<div class="col-xs-7 col-sm-10 col-sm-pull-10 sidebar-offcanvas" id="sidebar">
  <div class="list-group">
  	<?php  
		if (!isset($_SESSION['pseudo'])) {
			echo '<p> Vous devez vous <a href="espace-proprietaires.php">connecter</a> '.$_SESSION['pseudo'].'  avant d\'acceder à votre espace proprietaire</p>';

		}
		else {
		
	?>      
    <a style="text-decoration:none" href="espace-proprietaires.php" class="list-group-item active">Espace propriètaire</a>
    <a href="proprio_profil.php" class="list-group-item">Gestion Profil</a>
    <a href="proprio_resa.php" class="list-group-item">Commander une préstation</a>
    <a href="proprio_story.php" class="list-group-item">Mes commande</a>
    <?php
    echo'<a href="index.php?disconect=true" class="list-group-item">Déconnexion ('.strtoupper($_SESSION['pseudo']).')</a>';
	}
  	?>
  </div>
</div><!--/.sidebar-offcanvas-->
<script type="text/javascript">
	$(document).ready(function () {
	  $('[data-toggle="offcanvas"]').click(function () {
	    $('.row-offcanvas').toggleClass('active')
	  });
	});

</script>

