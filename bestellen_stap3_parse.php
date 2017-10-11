<?php
ob_start();
session_start();

include("db_connect.php");

var_dump ($_SESSION); 

	if ( 
        !isset($_POST["med10"]) || trim($_POST["med10"]) == '')

		{
			

  
   		
		}


    $queryorderid = "SELECT max(`idorder`)  as orderid  FROM `order` 
                                      WHERE patient = '".$_SESSION  ['verzekeringsnummer']."'";

    $resultorderid = mysqli_query($connection, $queryorderid);

    $recordsorderid = mysqli_fetch_all($resultorderid, MYSQLI_ASSOC); 

var_dump ($queryorderid);
var_dump ($recordsorderid);

foreach($recordsorderid as $recordsorderid){
       
}
	 
	var_dump($_POST);
	$query = "INSERT INTO `orderregel`(`orderid`
										`aantal`,
										`med1`)

			  VALUES 			  ('".$recordsorderid['orderid']."',
								   '1',
								   '".$_POST["med10"]."')";

								   
	$result = mysqli_query($connection, $query);

var_dump($query);	
?>

<br><br><br>
</html>
