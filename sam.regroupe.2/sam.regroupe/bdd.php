<?php
try
{
	//$bdd = new PDO('mysql:host=localhost;dbname=db502217813', 'root', '');
    $bdd = new PDO('mysql:host=db502217813.db.1and1.com;dbname=db502217813', 'dbo502217813', 'xw92zaE');
	
	}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>