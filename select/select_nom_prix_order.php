<?php
include '../config.php';

$reponse = $pdo->query('SELECT nom, prix FROM jeux ORDER BY prix DESC');

while ($donnees = $reponse->fetch())
{
	echo $donnees['nom'] . ' coûte ' . $donnees['prix'] . ' EUR<br />';
}

$reponse->closeCursor();

?>