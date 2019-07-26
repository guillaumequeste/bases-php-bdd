<?php
include '../config.php';

// 0 corrspond à la première entrée, ensuite j'en affiche 3
$reponse = $pdo->query('SELECT * FROM jeux LIMIT 0, 3');

while ($donnees = $reponse->fetch())
{
	echo $donnees['nom'] . '<br>';
}

$reponse->closeCursor();

?>