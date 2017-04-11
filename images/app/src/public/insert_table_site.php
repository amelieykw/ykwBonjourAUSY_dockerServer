<?php

	include("connect.php");

	try {
		// Table structure for table `site`
		$sql_insert_table_site = "
		INSERT INTO `site` (`SiteId`, `Libelle`, `BudEmail`, `BudMobile`, `RespEmail`, `RespMobile`, `DaMobile`, `DaEmail`, `DateCreation`, `DateModification`) VALUES
(1, 'Sèvre', NULL, NULL, NULL, NULL, NULL, NULL, '2017-03-20 17:00:00', '2017-03-20 15:57:45'),
(2, 'Aix-en-provence', NULL, NULL, NULL, NULL, NULL, NULL, '2017-03-20 17:00:00', '2017-03-20 15:58:34'),
(3, 'Bordeaux', NULL, NULL, NULL, NULL, NULL, NULL, '2017-03-20 17:00:00', '2017-03-20 15:58:34'),
(4, 'Brest', NULL, NULL, NULL, NULL, NULL, NULL, '2017-03-20 17:00:00', '2017-03-20 15:59:02'),
(5, 'Cherbourg', NULL, NULL, NULL, NULL, NULL, NULL, '2017-03-20 17:00:00', '2017-03-20 15:59:02'),
(6, 'Grenoble', NULL, NULL, NULL, NULL, NULL, NULL, '2017-03-20 17:00:00', '2017-03-20 15:59:32'),
(7, 'Lannion', NULL, NULL, NULL, NULL, NULL, NULL, '2017-03-20 17:00:00', '2017-03-20 15:59:32'),
(8, 'Le mans', NULL, NULL, NULL, NULL, NULL, NULL, '2017-03-20 17:00:00', '2017-03-20 16:00:00'),
(9, 'Lille', NULL, NULL, NULL, NULL, NULL, NULL, '2017-03-20 17:00:00', '2017-03-20 16:00:00'),
(10, 'Lyon', NULL, NULL, NULL, NULL, NULL, NULL, '2017-03-20 17:00:00', '2017-03-20 16:00:24'),
(11, 'Montpellier', NULL, NULL, NULL, NULL, NULL, NULL, '2017-03-20 17:00:00', '2017-03-20 16:00:24'),
(12, 'Nantes', NULL, NULL, NULL, NULL, NULL, NULL, '2017-03-20 17:00:00', '2017-03-20 16:00:48'),
(13, 'Niort', NULL, NULL, NULL, NULL, NULL, NULL, '2017-03-20 17:00:00', '2017-03-20 16:00:48'),
(14, 'Orléans', NULL, NULL, NULL, NULL, NULL, NULL, '2017-03-20 17:00:00', '2017-03-20 16:01:17'),
(15, 'Pierrelatte', NULL, NULL, NULL, NULL, NULL, NULL, '2017-03-20 17:00:00', '2017-03-20 16:01:17'),
(16, 'Rennes', NULL, NULL, NULL, NULL, NULL, NULL, '2017-03-20 17:00:00', '2017-03-20 16:01:48'),
(17, 'Strasbourg', NULL, NULL, NULL, NULL, NULL, NULL, '2017-03-20 17:00:00', '2017-03-20 16:01:48'),
(18, 'Toulouse', NULL, NULL, NULL, NULL, NULL, NULL, '2017-03-20 17:00:00', '2017-03-20 16:02:15'),
(19, 'Tours', NULL, NULL, NULL, NULL, NULL, NULL, '2017-03-20 17:00:00', '2017-03-20 16:02:15')";

		$bdd->exec($sql_insert_table_site);


		echo 'Bien insérer les données dans la table site!';


	} catch (PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	}


	$bdd = null;
?>