<?php
include 'config.php';

$reponse = $pdo->query('SELECT nom FROM jeux');

while ($donnees = $reponse->fetch())
{
	echo $donnees['nom'] . '<br />';
}

$reponse->closeCursor();