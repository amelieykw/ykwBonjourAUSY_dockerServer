<?php
	include("../connect.php");

   	if( $_POST["newRDV"] ) {

   		$newRDV = $_POST["newRDV"];

   		echo "newRDV = ".newRDV;

        exit();
   	}
?>