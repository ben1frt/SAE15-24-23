<?php
/*connexion à la base de données avec message d'erreur si connexion impossible*/
try {
	$bd = new PDO ("mysql:host=localhost;dbname=wc902563"/*nom de la base*/,"root"/*identifiant,"wc9025637cfb"mot de passe de la base*/);
	$bd->exec('SET NAMES utf8');
	
} catch (Exception $e) {
	die ("Erreur: Connexion à la base impossible");
}
?>