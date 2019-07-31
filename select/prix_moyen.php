<?php
include '../config.php';

$reponse = $pdo->query('SELECT AVG(prix) AS prix_moyen FROM jeux');

$donnees = $reponse->fetch();
echo $donnees['prix_moyen'];

$reponse->closeCursor();

/* SELECT AVG(prix) AS prix_moyen FROM jeux WHERE possesseur='Patrick'
    fonction d'agrégat avec filtre */

/* SELECT SUM(prix) AS prix_total FROM jeux WHERE possesseur='Patrick'
    La fonction SUM permet d'additionner toutes les valeurs d'un champ. Ainsi, on pourrait connaître la valeur totale des jeux appartenant à Patrick */

/* SELECT MAX(prix) AS prix_max FROM jeux
    Cette fonction analyse un champ et retourne la valeur maximale trouvée. Pour obtenir le prix du jeu le plus cher */

/* SELECT MIN(prix) AS prix_min FROM jeux
    De même, on peut obtenir le prix du jeu le moins cher */

/* SELECT COUNT(*) AS nbjeux FROM jeux
    La fonction COUNT permet de compter le nombre d'entrées. Elle est très intéressante mais plus complexe. On peut en effet l'utiliser de plusieurs façons différentes. Ici utilisation la plus courante. On obtient ainsi le nombre total de jeux dans la table. */

/* SELECT COUNT(*) AS nbjeux FROM jeux WHERE possesseur='Florent'
    On peut bien entendu filtrer avec une clause WHERE, pour obtenir le nombre de jeux appartenant à Florent, si, pour un jeu, le nombre de joueurs max n'est pas défini (nbre_joueurs_max = NULL), celui-ci n'est pas compté */

/* SELECT COUNT(DISTINCT possesseur) AS nbpossesseurs FROM jeux_video
    Enfin, il est possible de compter le nombre de valeurs distinctes sur un champ précis. Par exemple dans la colonne possesseur, Florent apparaît plusieurs fois, Patrick aussi, etc. Mais combien y a-t-il de personnes différentes dans la table ? On peut le savoir en utilisant le mot-clé DISTINCT devant le nom du champ à analyser, comme ceci */