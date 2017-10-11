<?php
session_start();

include("db_connect.php");
 
var_dump($_GET); 

?>

<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

</body>
<?php

    

    $query = "INSERT INTO `order`                (`huisartsid`,
								                  `koerier`,
												  `Patient`,
								                  `Apotheek`)

			  VALUES 			                 ('".$_SESSION['huisartsid']."',
								                 '1',
												 '".$_GET['verzekeringsnummer']."',
								                 '1')";

$result = mysqli_query($connection, $query);

    header("location: bestellen_stap3.php");
						 break;
			

	

    
?>
<?php var_dump($query);  ?>
<br><br><br>
</html>
