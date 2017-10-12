<?php
ob_start();
session_start();

include("db_connect.php");

var_dump ($_SESSION); 

	if ( 
        !isset($_POST["leverdatum"]) || trim($_POST["leverdatum"]) == '' OR
        !isset($_POST["levertijd"]) || trim($_POST["levertijd"]) == '')
		

		{
			

  
   		
		}

		var_dump($_POST); 

    $queryorderid = "SELECT max(`idorder`)  as orderid  FROM `order` 
                                      WHERE patient = '".$_SESSION  ['verzekeringsnummer']."'";

    $resultorderid = mysqli_query($connection, $queryorderid);

    $recordsorderid = mysqli_fetch_all($resultorderid, MYSQLI_ASSOC); 

var_dump ($queryorderid);
var_dump ($recordsorderid);

    $querymedicijnid1 = "SELECT idMedicijn FROM `medicijn` 
                                      WHERE naam = '".$_POST["med1"]."'";

    $resultmedicijnid1 = mysqli_query($connection, $querymedicijnid1);

    $recordsmedicijnid1 = mysqli_fetch_all($resultmedicijnid1, MYSQLI_ASSOC); 

    
    $querymedicijnid2 = "SELECT idMedicijn FROM `medicijn` 
                                      WHERE naam = '".$_POST["med2"]."'";

    $resultmedicijnid2 = mysqli_query($connection, $querymedicijnid2);

    $recordsmedicijnid2 = mysqli_fetch_all($resultmedicijnid2, MYSQLI_ASSOC); 


    /* $querymedicijnid3 = "SELECT idMedicijn FROM `medicijn` 
                                      WHERE naam = '".$_POST["med3"]."'";

    $resultmedicijnid3 = mysqli_query($connection, $querymedicijnid3);

    $recordsmedicijnid3 = mysqli_fetch_all($resultmedicijnid3, MYSQLI_ASSOC); 


    $querymedicijnid = "SELECT idMedicijn FROM `medicijn` 
                                      WHERE naam = '".$_POST["med1"]."'";

    $resultmedicijnid = mysqli_query($connection, $querymedicijnid);

    $recordsmedicijnid = mysqli_fetch_all($resultmedicijnid, MYSQLI_ASSOC); 


    $querymedicijnid = "SELECT idMedicijn FROM `medicijn` 
                                      WHERE naam = '".$_POST["med1"]."'";

    $resultmedicijnid = mysqli_query($connection, $querymedicijnid);

    $recordsmedicijnid = mysqli_fetch_all($resultmedicijnid, MYSQLI_ASSOC); 


    $querymedicijnid = "SELECT idMedicijn FROM `medicijn` 
                                      WHERE naam = '".$_POST["med1"]."'";

    $resultmedicijnid = mysqli_query($connection, $querymedicijnid);

    $recordsmedicijnid = mysqli_fetch_all($resultmedicijnid, MYSQLI_ASSOC); 


    $querymedicijnid = "SELECT idMedicijn FROM `medicijn` 
                                      WHERE naam = '".$_POST["med1"]."'";

    $resultmedicijnid = mysqli_query($connection, $querymedicijnid);

    $recordsmedicijnid = mysqli_fetch_all($resultmedicijnid, MYSQLI_ASSOC); 


    $querymedicijnid = "SELECT idMedicijn FROM `medicijn` 
                                      WHERE naam = '".$_POST["med1"]."'";

    $resultmedicijnid = mysqli_query($connection, $querymedicijnid);

    $recordsmedicijnid = mysqli_fetch_all($resultmedicijnid, MYSQLI_ASSOC); 


    $querymedicijnid = "SELECT idMedicijn FROM `medicijn` 
                                      WHERE naam = '".$_POST["med1"]."'";

    $resultmedicijnid = mysqli_query($connection, $querymedicijnid);

    $recordsmedicijnid = mysqli_fetch_all($resultmedicijnid, MYSQLI_ASSOC); 


    $querymedicijnid = "SELECT idMedicijn FROM `medicijn` 
                                      WHERE naam = '".$_POST["med1"]."'";

    $resultmedicijnid = mysqli_query($connection, $querymedicijnid);

    $recordsmedicijnid = mysqli_fetch_all($resultmedicijnid, MYSQLI_ASSOC); 


    $querymedicijnid = "SELECT idMedicijn FROM `medicijn` 
                                      WHERE naam = '".$_POST["med1"]."'";

    $resultmedicijnid = mysqli_query($connection, $querymedicijnid);

    $recordsmedicijnid = mysqli_fetch_all($resultmedicijnid, MYSQLI_ASSOC); */
    

foreach($recordsorderid as $recordsorderid){
       
}

foreach($recordsmedicijnid1 as $recordsmedicijnid1){
       
}

foreach($recordsmedicijnid2 as $recordsmedicijnid2){
       
}
	 
	/* $leverdatum = "INSERT INTO `order` (`leverdatum`,
										`levertijd`)	
	
					VALUES			('".$_POST['levertijd']."',
									 '".$_POST["leversdatum"]."')";
					*/
				
	$query1 = "INSERT INTO `orderregel`(`medicijnid`,
										`orderid`,
										`aantal`)

			  VALUES 			  ('".$recordsmedicijnid1["idMedicijn"]."',
                                   '".$recordsorderid['orderid']."',
								   '1')";

								   
	$result1 = mysqli_query($connection, $query1);

    	$query2 = "INSERT INTO `orderregel`(`medicijnid`,
										`orderid`,
										`aantal`)

			  VALUES 			  ('".$recordsmedicijnid2["idMedicijn"]."',
                                   '".$recordsorderid['orderid']."',
								   '1')";

								   
	$result2 = mysqli_query($connection, $query2);


var_dump($query2);	
?>

<br><br><br>
</html>
