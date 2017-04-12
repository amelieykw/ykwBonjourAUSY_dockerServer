<?php

	include("connect.php");

	try {
		// Table structure for table `rendezvous`
		$sql_insert_table_rdv = "INSERT INTO `rendezvous` (`RDVId`, `Nom`, `Prenom`, `ContactId`, `HeurePrevu`, `HeurePriseEnCharge`, `TempsRetard`, `isValide`, `isRelance1`, `isRelanceBUD`, `isRelanceResp`, `isRelanceDA`, `DateCreation`, `DateModification`) VALUES
(1, 'Girard', 'Loïse', 1, '2017-03-21 14:30:00', NULL, NULL, 1, 1, 0, 0, 0, '2017-03-20 17:00:00', '2017-03-20 16:06:11'),
(2, 'Garnier', 'Fares', 2, '2017-03-21 15:15:00', NULL, NULL, 1, 1, 0, 0, 0, '2017-03-20 16:07:19', '2017-03-20 16:07:19'),
(3, 'Perrin', 'Aliénor', 3, '2017-03-21 15:30:00', NULL, NULL, 0, 1, 0, 0, 0, '2017-03-20 16:08:27', '2017-03-20 16:08:27'),
(4, 'Girard', 'Loïse', 1, '2017-03-21 16:30:00', NULL, NULL, 0, 1, 0, 0, 0, '2017-03-20 16:09:03', '2017-03-20 16:09:03'),
(5, 'Garnier', 'Fares', 2, '2017-03-21 17:15:00', NULL, NULL, 0, 0, 0, 0, 0, '2017-03-20 16:09:36', '2017-03-20 16:09:36'),
(6, 'Perrin', 'Aliénor', 3, '2017-03-21 17:30:00', NULL, NULL, 0, 0, 0, 0, 0, '2017-03-20 16:10:17', '2017-03-20 16:10:17')";

		$bdd->exec($sql_insert_table_rdv);


		echo 'Bien insérer les données dans la table rendezvous!';


	} catch (PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	}


	$bdd = null;
?>