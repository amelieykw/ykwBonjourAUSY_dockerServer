<?php

	include("connect.php");

	try {
		// Table structure for table `rendezvous`
		$sql_create_table_rdv = "CREATE TABLE rendezvous (
			RDVId int(11) NOT NULL, 
			Nom varchar(32) NOT NULL, 
			Prenom varchar(32) NOT NULL, 
			ContactId int(11), 
			HeurePrevu datetime NOT NULL, 
			HeurePriseEnCharge datetime, 
			TempsRetard datetime , 
			isValide Boolean NOT NULL DEFAULT '0', 
			isRelance1 Boolean NOT NULL DEFAULT '0', 
			isRelanceBUD Boolean NOT NULL DEFAULT '0', 
			isRelanceResp Boolean NOT NULL DEFAULT '0', 
			isRelanceDA Boolean NOT NULL DEFAULT '0', 
			DateCreation datetime NOT NULL, 
			DateModification datetime NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=latin1";
			
		$bdd->exec($sql_create_table_rdv);


		$sql_add_primary_key_rdv = "ALTER TABLE `rendezvous` ADD PRIMARY KEY (`RDVId`)";
		$bdd->exec($sql_add_primary_key_rdv);


		$sql_auto_increment_rdv = "ALTER TABLE `rendezvous` MODIFY `RDVId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7";
		$bdd->exec($sql_auto_increment_rdv);


		$sql_add_foreign_key_rdv = "ALTER TABLE `rendezvous` ADD CONSTRAINT `rendezvous_ibfk_1` FOREIGN KEY (`ContactId`) REFERENCES `contact` (`ContactId`)";
		$bdd->exec($sql_add_foreign_key_rdv);


		echo 'Bien créer la table contact!';


	} catch (PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	}


	$bdd = null;
?>