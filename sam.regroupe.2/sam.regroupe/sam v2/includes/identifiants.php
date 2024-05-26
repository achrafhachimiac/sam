<?php
	$db_pass = ''; // Password
	$db_user = 'root'; // Username
if (isset($_SESSION['db'])) {
	$db_name = $_SESSION['db'];




				 // Database Name

	$conn = mysqli_connect('localhost', $db_user, $db_pass, $db_name);
	if (!$conn) {
		die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
	}
	
	$date_now=date('Y-m-d');

	//===================================================================================================
	$sql = "SELECT * FROM commandes WHERE cmd_valide=0 AND cmd_debut >= '$date_now' ORDER BY cmd_debut";
	$query = mysqli_query($conn, $sql);
	//===================================================================================================




	//===================================================================================================
	$sql_1 = "SELECT * FROM commandes";
	$query_1 = mysqli_query($conn, $sql_1);
	//===================================================================================================


try
{
$db = new PDO('mysql:host=localhost;dbname='.$db_name, $db_user, $db_pass,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());

}



	//===================================================================================================
	if(isset($_SESSION['id'])){
		$Session_id=$_SESSION['id'];
	$sql_2 = "SELECT * FROM commandes WHERE cmd_proprio_id=$Session_id";
	$query_2 = mysqli_query($conn, $sql_2);}
	//==================================================================================================


	//===================================================================================================
	$sql_3 = "SELECT * FROM proprio";
	$query_3 = mysqli_query($conn, $sql_3);
	//===================================================================================================	

	if (!$query) {
		die ('SQL Error: ' . mysqli_error($conn));
	}

}
else echo'';
?>