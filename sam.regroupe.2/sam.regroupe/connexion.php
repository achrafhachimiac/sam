<?php 



include("bdd.php"); 



// Hachage du mot de passe
$pass_hache = sha1($_POST['pass']);

echo $pass_hache;

$nom = $_POST['nom'];

// Vérification des identifiants
$req = $bdd->prepare('SELECT nom FROM membres WHERE nom = :nomm AND mdp = :passs');
$req->execute(array(
    'nomm' => $nom,
    'passs' => $pass_hache));

$resultat = $req->fetch();

if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    session_start();
    $_SESSION['id'] = $resultat['id'];
    $_SESSION['pseudo'] = $pseudo;

 setcookie('pass', $pass_hache, time() + 24*3600); 
 setcookie('pseudo', $pseudo, time() + 24*3600);
echo $_COOKIE['pseudo'].$_COOKIE['pass'];


    echo 'Vous êtes connecté !';
}

?>
<a href="espace_proprietaires.php">gdffcg</a>