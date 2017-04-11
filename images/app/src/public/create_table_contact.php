<?php

	include("connect.php");

	try {
		// Indexes for table `contact`
		$sql_create_table_contact = "CREATE TABLE contact (
			ContactId int(11) NOT NULL, 
			Nom varchar(32) NOT NULL, 
			Prenom varchar(32) NOT NULL, 
			Fonction int(11) NOT NULL, 
			TelMobile varchar(20) NOT NULL, 
			email varchar(32) NOT NULL, 
			SiteId int(11) NOT NULL, 
			N1Id int(11) NOT NULL, 
			N2Id int(11) NOT NULL, 
			DateCreation datetime NOT NULL,
			DateModification timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP) ENGINE=InnoDB DEFAULT CHARSET=latin1";
			
		$bdd->exec($sql_create_table_contact);


		$sql_add_primary_key_contact = "ALTER TABLE `contact` ADD PRIMARY KEY (`ContactId`)";
		$bdd->exec($sql_add_primary_key_contact);


		$sql_auto_increment_contact = "ALTER TABLE `contact` MODIFY `ContactId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4";
		$bdd->exec($sql_auto_increment_contact);


		$sql_add_foreign_key_contact = "ALTER TABLE `contact`
		  ADD CONSTRAINT `contact_ibfk_1` FOREIGN KEY (`SiteId`) REFERENCES `site` (`SiteId`),
		  ADD CONSTRAINT `contact_ibfk_2` FOREIGN KEY (`N1Id`) REFERENCES `site` (`SiteId`),
		  ADD CONSTRAINT `contact_ibfk_3` FOREIGN KEY (`N2Id`) REFERENCES `site` (`SiteId`)";
  		$bdd->exec($sql_add_foreign_key_contact);


		echo 'Bien créer la table contact!';


	} catch (PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	}


	$bdd = null;
?>