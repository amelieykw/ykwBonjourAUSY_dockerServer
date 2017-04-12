<?php
	
	include("connect.php");

	// On récupère tout le contenu de la table site
	$reponse = $bdd->query('SELECT * FROM rendezvous');
	// On affiche chaque entrée une à une
	$donnees = $reponse->fetchall();

	// Print JSON encode of the array.
	echo(json_encode($donnees));

	$reponse->closeCursor(); // Termine le traitement de la requête
?>