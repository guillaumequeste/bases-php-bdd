<?php
include '../config.php';

// Les variables telles que$nomet$possesseurdoivent avoir été définies précédemment. Généralement, on récupèrera des variables de$_POST(issues d'un formulaire) pour insérer une entrée dans la base de données.
$req = $pdo->prepare('INSERT INTO jeux(nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES(:nom, :possesseur, :console, :prix, :nbre_joueurs_max, :commentaires)');
$req->execute(array(
	'nom' => $nom,
	'possesseur' => $possesseur,
	'console' => $console,
	'prix' => $prix,
	'nbre_joueurs_max' => $nbre_joueurs_max,
	'commentaires' => $commentaires
	));

echo 'Le jeu a bien été ajouté !';
?>
