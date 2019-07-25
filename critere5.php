<?php
include 'config.php';

$reponse = $pdo->query("SELECT nom, possesseur, console, prix FROM jeux WHERE console='NES' OR console='GameCube' ORDER BY prix DESC LIMIT 0,10");

while ($donnees = $reponse->fetch())
{
	echo $donnees['nom'] . ' sur ' . $donnees['console'] . ' coûte ' . $donnees['prix'] . ' euros' . '<br>';
}

$reponse->closeCursor();

?>