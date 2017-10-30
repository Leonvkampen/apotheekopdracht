<?php
	
	
	
    session_start();
	
    var_dump($_POST['levertijd']);
	
	include("db_connect.php");
	
								$datetime = $_POST['leverdata'];
								
								$date = date('Y-m-d', strtotime($datetime));
								$time = date('G:i:00', strtotime($datetime));
	
	$query = "UPDATE `order`
	          SET                  `levertijd` = '".$time."',
								   `leverdatum` = '".$date."'
			  WHERE                `idOrder` = '".$_POST['orderid']."'";


	$result = mysqli_query($connection, $query);
	var_dump($query);
	
	


	
		header("location:klanthome.php");
?>
