<?php
include 'config.php';

$pdo->exec("DELETE FROM jeux WHERE nom='Battlefield 1942'");

echo 'Le jeu a bien été supprimé !';