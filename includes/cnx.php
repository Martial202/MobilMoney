<?php

$user = 'root';
$pass = '';
$dsn='mysql:host=localhost; dbname=MobilMoney';
try {
$cnx = new PDO($dsn,$user,$pass);
} catch (Exception $e) {
	die('Erreur '.$e->getMessage());
}

?>