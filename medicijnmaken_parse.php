<?php
    session_start();
	
	
	include("db_connect.php");
	
	
	if(!isset($_POST["naam"]) || trim($_POST["naam"]) == '' OR 
	   !isset($_POST["omschrijving"]) || trim($_POST["omschrijving"]) == '' OR
	   !isset($_POST["aantal"]) || trim($_POST["aantal"]) == '' OR 
	   !isset($_POST["maximaleaantal"]) || trim($_POST["maximaleaantal"]) == '')
	   
    {
        echo "<font color='red' font size='100px'>U heeft een of meer velden niet ingevuld. Probeer het opnieuw.</font>";
		header("refresh:4; url=medicijnmaken.php");
		exit;
    }

    //voor als er een veld leeg is

	$query = "INSERT INTO `medicijn` (`naam`,
								   `beschrijving`,
								   `voorraad`,
                                   `maximalevoorraad`,
								   `ophalen`)

			  VALUES 			  ('".$_POST["naam"]."',
								   '".$_POST["omschrijving"]."',
								   '".$_POST["aantal"]."',
                                   '".$_POST["maximaleaantal"]."',
								   '".$_POST["ophalen"]."')";


	echo "Het medicijn is aangemaakt!";
	$result = mysqli_query($connection, $query);
	header("refresh:2; url=medicatie.php");

?>
<html>
	<br><br><br>
<footer>
<?php include 'footer.php'; ?>
</footer>
</html>