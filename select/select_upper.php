<?php
include '../config.php';

$reponse = $pdo->query('SELECT UPPER(nom) AS nom_maj FROM jeux');

while ($donnees = $reponse->fetch())
{
	echo $donnees['nom_maj'] . '<br />';
}

$reponse->closeCursor();

/* SELECT UPPER(nom) AS nom_maj, possesseur, console, prix FROM jeux
    On récupèrera alors les données suivantes :
    nom_maj            possesseur       console     prix
    SUPER MARIO BROS    Florent         NES         4
    SONIC               Patrick         Megadrive   2... */

/* SELECT LOWER(nom) AS nom_maj FROM jeux
    convertit en minuscules */

/* SELECT LENGTH(nom) AS longueur_nom FROM jeux
    compte le nombre de caractères */

/* SELECT ROUND(prix, 2) AS prix_arrondi FROM jeux
    arrondit un nombre décimal à 2 chiffres après la virgule */