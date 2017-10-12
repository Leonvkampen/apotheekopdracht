<?php
    session_start();
	

	
	include("db_connect.php");

	
	$query = "UPDATE medicijn
	          SET                  `voorraad` = '".$_GET['maximalevoorraad']."'
			  WHERE 			   `idMedicijn` = '".$_GET['medicijnid']."'"; 



	$result = mysqli_query($connection, $query);

	
		header("location:voorraadaanpassen.php");
?>
