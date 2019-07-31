<?php
include '../config.php';

$pdo->exec("UPDATE jeux SET prix = '10', nbre_joueurs_max = '32' WHERE nom = 'Battlefield 1942'");

echo 'Le jeu a bien été modifié !';

// UPDATE jeux_video SET possesseur = 'Florent' WHERE possesseur = 'Michel'
// Dans la tablejeux_video, modifier toutes les entrées dont le champ possesseur est égal à Michel, et le remplacer par Florent

?>