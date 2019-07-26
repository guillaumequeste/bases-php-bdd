<?php
include '../config.php';

$reponse = $pdo->query('SELECT AVG(prix) AS prix_moyen, console FROM jeux GROUP BY console HAVING prix_moyen <= 10');

while ($donnees = $reponse->fetch())
{
	echo $donnees['prix_moyen'] . ' - ' . $donnees['console'] . '<br>';
}

$reponse->closeCursor();

/* SELECT AVG(prix) AS prix_moyen, console FROM jeux WHERE possesseur='Patrick' GROUP BY console HAVING prix_moyen <= 10
    Je ne comprends pas la différence entreWHEREetHAVING. Les deux permettent de filtrer, non ?
    Oui, mais pas au même moment.WHEREagit en premier, avant le groupement des données, tandis queHAVINGagit en second, après le groupement des données. On peut d'ailleurs très bien combiner les deux, regardez l'exemple suivant */