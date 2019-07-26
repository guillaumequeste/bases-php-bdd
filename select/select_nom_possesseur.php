<?php
include '../config.php';

$reponse = $pdo->query('SELECT nom, possesseur FROM jeux WHERE possesseur=\'Patrick\'');

while ($donnees = $reponse->fetch())
{
	echo $donnees['nom'] . ' appartient à ' . $donnees['possesseur'] . '<br />';
}

$reponse->closeCursor();

?>