<?php
include '../config.php';

$reponse = $pdo->query('SELECT * FROM jeux WHERE possesseur=\'Florent\' AND prix < 20');

while ($donnees = $reponse->fetch())
{
	echo $donnees['nom'] . ' appartient à ' . $donnees['possesseur'] . ' et coûte moins de 20 euros.' . '<br />';
}

$reponse->closeCursor();

?>