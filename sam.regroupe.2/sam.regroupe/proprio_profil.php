<?php
include("DEBUT.php");
session_start();
if (!isset($_SESSION['pseudo'])) {
include("err_connexion.php");}
else{
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

	$reqq = $db->prepare('SELECT proprio_mdp FROM proprio WHERE proprio_id = :pro_id ');
	$reqq->execute(array(
		'pro_id' => $_SESSION['id']
	));
	$donnees = $reqq->fetch();
?>


<div id="main-wrapperb">
	<div id="main" class="container" style="width:55%;">
		<div class="row">
			<div class="col-8">
				<div class="row justify-content-md-center">
					<div class="col-12 col-md-auto">
						<h1>Gestion du compte :</h1>
					</div>
				</div>
				<form action="proprio_profil.php" method="post">
					<div class="row ">
	          <div class="col-12 ">
	            <div class="card card-outline-secondary" style="padding-top:1px;  padding-left:1px;">
	                <div class="card-header" id="card-header">
	                    <h3 class="mb-0">Changements de mot de passe : </h3>
	                </div>
	                <div class="card-body" id="card-body">
										<div class="row justify-content-md-center">
											<div class="col-12">
		                    <div class="fromgroup row" id="psw_div">
		            		  		<label for="password" class="col-3 col-form-label" id="zero_padding">Nouveau mot de passe :</label><input type="password" name="password" id="password" class="col-8 zero_padding"/><br />
		                    </div>
		                    <div class="fromgroup row" id="confirm_div">
		            		  <label for="confirm" class="col-3 col-form-label" id="zero_padding">Confirmer le mot de passe :</label><input type="password" name="confirm" id="confirm" class="col-8 zero_padding"/>
		                    </div>
		                    <div class="fromgroup row" >
		            		  <label for="pseudo" class="col-3 col-form-label" id="zero_padding">Acien mot de passe :</label>  <input name="pseudo" type="text" id="pseudo" class="col-8 zero_padding" /> <br />
		                    </div>

		<?php
		if (isset($_POST['password']) && $donnees['proprio_mdp']==md5($_POST['pseudo'])) {

		$psw = md5($_POST['password']);

		$req = $db->prepare('UPDATE proprio SET proprio_mdp = :new_psw WHERE proprio_id = :proprio_id');
		$req->execute(array(
		'new_psw' => $psw,
		'proprio_id' => $_SESSION['id'],
		));
		echo '<p> Votre mot de passe a bien été changé. </p>';

		}
		else if(isset($_POST['pseudo'])){echo "<p> Le mot de passe renseigné est incorrect. </p>";}
		?>

		                </div>
									</div>
								</div>
	                 <div class="row justify-content-md-center" id="form-center">
										 <div class="col-8 col-md-auto">
											 <p class="bouton_commande"><input type="submit" value="Valider" disabled="disabled" id="submit"/></p>
										 </div>
									 </div>
	           			</div>
	            	</div>
	        		</div>
	    			</div>
					</form>

											<script type="text/javascript">

											var card_header = document.querySelector("#card-body");

									        card_header.addEventListener("change", function(){
									        	compare_psw();

									        }, false);






									        function compare_psw(){

									        	var password = document.getElementById("password").value;
									        	var confirm = document.getElementById("confirm").value;


									        	var  password_= document.getElementById('password');
									        	var confirm_  = document.getElementById('confirm');

									            var psw_div = document.getElementById('psw_div');
									            var confirm_div = document.getElementById('confirm_div');


        										if ( ( $("#password").val() ) && ( $("#confirm").val() ) ){

									        		if ( password.localeCompare(confirm)==0) {


									        			psw_div.setAttribute('class', 'fromgroup row has-success');
									        			confirm_div.setAttribute('class', 'fromgroup row has-success');

									        			password_.setAttribute('class' , 'col-8  zero_padding form-control form-control-success');
									        			confirm_.setAttribute('class', 'col-8 zero_padding form-control form-control-success');

									        			document.getElementById("submit").removeAttribute("disabled");
									        		}



									        		else {

									        			psw_div.setAttribute('class', 'fromgroup row has-danger');
									        			confirm_div.setAttribute('class', 'fromgroup row has-danger');

									        			password_.setAttribute('class' , 'col-8 zero_padding form-control form-control-danger');
									        			confirm_.setAttribute('class', 'col-8 zero_padding form-control form-control-danger');
									        			$("#submit").attr("disabled", "disabled");
									        		}



									        	}

									        }
										</script>



			<div class="col-4">
				<?php include('includes/proprio_menu.php'); ?>
			</div>
		</div>
	</div>
</div>

<?php
include("includes/footer.php");
?>

<?php } ?>
