<?php
    session_start();
	
    var_dump($_POST['levertijd']);
	
	include("db_connect.php");
    
	
	/*$query = "UPDATE order
	          SET                  `levertijd` = '".$_POST['levertijd']."'"; 



	$result = mysqli_query($connection, $query);*/

	
		//header("location:leveringstijdveranderen_parse.php");
?>
