<?php

	include("connect.php");

	try {
		// Table structure for table `administrateur`
		$sql_create_table_administrateurs = "CREATE TABLE administrateur (
			AdminId int(11) NOT NULL, 
			Nom varchar(32) NOT NULL, 
			Prenom varchar(32) NOT NULL, 
			Email varchar(128), 
			TelMobile varchar(20) NOT NULL, 
			login varchar(32) NOT NULL, 
			password varchar(32) NOT NULL, 
			Site int(11) NOT NULL, 
			isSuperAdmin Boolean NOT NULL DEFAULT '0', 
			DateCreation datetime NOT NULL, 
			DateModification timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP) ENGINE=InnoDB DEFAULT CHARSET=latin1";
		$bdd->exec($sql_create_table_administrateurs);


		$sql_add_primary_key_admin = "ALTER TABLE `administrateur` ADD PRIMARY KEY (`AdminId`)";
		$bdd->exec($sql_add_primary_key_admin);


		$sql_auto_increment_admin = "ALTER TABLE `administrateur` MODIFY `AdminId` int(11) NOT NULL AUTO_INCREMENT";
		$bdd->exec($sql_auto_increment_admin);

		echo 'Bien créer la table administrateur!';


	} catch (PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	}


	$bdd = null;
?>