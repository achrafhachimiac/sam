
<div class="col-xs-7 col-sm-10 col-sm-pull-10 sidebar-offcanvas" id="sidebar">
  <div class="list-group" id="admin_menu">
  	<?php  
		if (!isset($_SESSION['pseudo'])) {
			echo '<p> Vous devez vous <a href="espace-proprietaires.php">connecter</a> avant d\'acceder à votre espace proprietaire</p>';

		}
		else {
		
	?>      
    <a style="text-decoration:none" href="admin.php" class="list-group-item active">Administrateur<?php echo' Grp:'.$_SESSION['db_id'];?></a>
    <a href="admin.php" class="list-group-item">Planning des commandes</a>
    <a href="admin_utilisateurs.php" class="list-group-item">Gestion des utilisateurs</a>
    <a href="admin_story.php" class="list-group-item">Toutes les commandes</a>
    <?php
    echo'<a href="index.php?disconect=true" class="list-group-item">Déconnexion (Admin)</a>';
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

