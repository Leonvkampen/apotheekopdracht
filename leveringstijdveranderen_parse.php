<?php
    session_start();
	

	
	include("db_connect.php");

	
	$query = "UPDATE order
	          SET                  `levertijd` = '".$_POST['levertijd']."'"; 



	$result = mysqli_query($connection, $query);

	
		//header("location:leveringstijdveranderen_parse.php");
?>
