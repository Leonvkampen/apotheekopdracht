<?php
ob_start();
session_start();

include("db_connect.php");

	if ( isset($_POST["med1"]) || trim($_POST["med1"]) == '' OR
        !isset($_POST["med2"]) || trim($_POST["med2"]) == '')

	var_dump($_POST);
	{
	   echo "<font color='red' font size='100px'>U heeft een of meer velden niet ingevuld. Probeer het opnieuw.</font>";
		header("refresh:4; url=bestellen.php");
		exit;
    }

	


	$query = "INSERT INTO `medicijn` (`medicijn`)

			  VALUES 			  ('".$_POST["medicijn"]."')";

	$result = mysqli_query($connection, $query);
		var_dump($result);
?>
<br><br><br>
</html>
