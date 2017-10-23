<?php
    session_start();
	
    var_dump($_POST['levertijd']);
	
	include("db_connect.php");
<<<<<<< HEAD
	
	
	$query = "UPDATE `order`
	          SET                  `levertijd` = '".$_POST['levertijd']."'
			  WHERE                `idOrder` = '".$_POST['orderid']."'";


	$result = mysqli_query($connection, $query);
	var_dump($query);
	
	
=======
    
	
	/*$query = "UPDATE order
	          SET                  `levertijd` = '".$_POST['levertijd']."'"; 



	$result = mysqli_query($connection, $query);*/
>>>>>>> 0e7bce18f25de3b0f21b648ad20edf0dc854116f

	
		header("location:klanthome.php");
?>
