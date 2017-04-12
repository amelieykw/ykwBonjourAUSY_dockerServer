<?php

	include("connect.php");

	try {
		// Table structure for table `contact`
		$sql_insert_table_contact = "INSERT INTO `contact` (`ContactId`, `Nom`, `Prenom`, `Fonction`, `TelMobile`, `email`, `SiteId`, `N1Id`, `N2Id`, `DateCreation`, `DateModification`) VALUES
(1, 'Muller', 'Anabelle', 1, '0667776585', 'anabellemuller@ausy.fr', 13, 2, 10, '2017-03-20 17:00:00', '2017-03-20 16:03:22'),
(2, 'Dubois', 'Emilie', 1, '0667877684', 'emiliedubois@ausy.fr', 13, 2, 10, '2017-03-20 17:00:00', '2017-03-20 16:04:06'),
(3, 'Durand', 'Agothe', 2, '0677064673', 'agothedurand@ausy.fr', 13, 2, 10, '2017-03-20 17:00:00', '2017-03-20 16:04:43')";

		$bdd->exec($sql_insert_table_contact);


		echo 'Bien insérer les données dans la table contact!';


	} catch (PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	}


	$bdd = null;
?>