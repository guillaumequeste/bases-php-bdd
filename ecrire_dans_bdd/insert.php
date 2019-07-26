<?php
include '../config.php';

// On ajoute une entrée dans la table jeux_video
$pdo->exec('INSERT INTO jeux(nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES(\'Battlefield 1942\', \'Patrick\', \'PC\', 45, 50, \'2nde guerre mondiale\')');

echo 'Le jeu a bien été ajouté !';
?>