<?php
ob_start();
session_start();

include("db_connect.php");

	if(!isset($_POST["medicijnpicker"]) || trim($_POST["medicijnpicker"]) == '' OR
       !isset($_POST["medicijnpicker"]) || trim($_POST["medicijnpicker"]) == '' OR
	   !isset($_POST["medicijnpicker"]) || trim($_POST["medicijnpicker"]) == '' OR
	   !isset($_POST["medicijnpicker"]) || trim($_POST["medicijnpicker"]) == '' OR
	   !isset($_POST["medicijnpicker"]) || trim($_POST["medicijnpicker"]) == '' )


	{
	   echo "<font color='red' font size='100px'>U heeft een of meer velden niet ingevuld. Probeer het opnieuw.</font>";
		header("refresh:4; url=bestellen.php");
		exit;
    }

	
    //voor als er een veld leeg is

	$query = "INSERT INTO `medicijn` (`medicijn`)

			  VALUES 			  ('".$_POST["medicijn"]."')";

	$result = mysqli_query($connection, $query);
		var_dump($result);
?>
<br><br><br>
</html>
