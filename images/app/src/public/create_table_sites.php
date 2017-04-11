<?php

	include("connect.php");

	try {
		// Table structure for table `site`
		$sql_create_table_site = "CREATE TABLE site (
			SiteId int(11) NOT NULL, 
			Libelle varchar(64) NOT NULL, 
			BudEmail varchar(32) DEFAULT NULL, 
			BudMobile varchar(20) DEFAULT NULL, 
			RespEmail varchar(32) DEFAULT NULL, 
			RespMobile varchar(20) DEFAULT NULL, 
			DaMobile varchar(32) DEFAULT NULL, 
			DaEmail varchar(20) DEFAULT NULL, 
			DateCreation datetime NOT NULL, 
			DateModification timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP) ENGINE=InnoDB DEFAULT CHARSET=latin1";

		$bdd->exec($sql_create_table_site);


		$sql_add_primary_key_site = "ALTER TABLE `site` ADD PRIMARY KEY (`SiteId`)";
		$bdd->exec($sql_add_primary_key_site);


		$sql_auto_increment_site = "ALTER TABLE `site` MODIFY `SiteId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20";
		$bdd->exec($sql_auto_increment_site);


		echo 'Bien créer la table site!';


	} catch (PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	}


	$bdd = null;
?>