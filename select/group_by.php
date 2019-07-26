<?php
include '../config.php';

$reponse = $pdo->query('SELECT AVG(prix) AS prix_moyen, console FROM jeux GROUP BY console');

while ($donnees = $reponse->fetch())
{
	echo $donnees['prix_moyen'] . ' - ' . $donnees['console'] . '<br>';
}

$reponse->closeCursor();
