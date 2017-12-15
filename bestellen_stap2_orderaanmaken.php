<?php
session_start();

include("db_connect.php");
 

        $verzekeringsnummer = $_GET['verzekeringsnummer'];
		$_SESSION["verzekeringsnummer"] = $verzekeringsnummer;



?>

<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

</body>
<?php

  /*  

    $query = "INSERT INTO `order`                (`huisartsid`,
								                  `koerier`,
												  `Patient`,
								                  `Apotheek`)

			  VALUES 			                 ('".$_SESSION['huisartsid']."',
								                 '1',
												 '".$_GET['verzekeringsnummer']."',
								                 '1')";

    $result = mysqli_query($connection, $query);

    $queryorderid = "SELECT `idorder` FROM `order` 
                                      WHERE patient = '".$_GET['verzekeringsnummer']."'";

    $resultorderid = mysqli_query($connection, $queryorderid);

    $recordsorderid = mysqli_fetch_all($resultorderid, MYSQLI_ASSOC); 
    */
   header("location: bestellen_stap3.php");
					 break;
			

	

    
?>

<br><br><br>
</html>
