<?php
    session_start();
	
	
	include("db_connect.php");
	
	
	if(!isset($_POST["naam"]) || trim($_POST["naam"]) == '' OR 
	   !isset($_POST["verzekeringsnummer"]) || trim($_POST["verzekeringsnummer"]) == '' OR
	   !isset($_POST["Email"]) || trim($_POST["Email"]) == '' OR 
	   !isset($_POST["geboorteplaats"]) || trim($_POST["geboorteplaats"]) == '' OR 
	   !isset($_POST["adres"]) || trim($_POST["adres"]) == '' OR 
	   !isset($_POST["postcode"]) || trim($_POST["postcode"]) == '')
	   
    {
        echo "<font color='red' font size='100px'>U heeft een of meer velden niet ingevuld. Probeer het opnieuw.</font>";
		header("refresh:4; url=klantaanmaken.php");
		exit;
    }

	
    //voor als er een veld leeg is

	$query = "INSERT INTO `patient` (`naam`,
								   `verzekeringsnummer`,
								   `Email`,
								   `geboorteplaats`,
								   `adres`,
								   `postcode`)

			  VALUES 			  ('".$_POST["naam"]."',
								   '".$_POST["verzekeringsnummer"]."',
								   '".$_POST["Email"]."',
								   '".$_POST["geboorteplaats"]."',
								   '".$_POST["adres"]."',
								   '".$_POST["postcode"]."')";

	$result = mysqli_query($connection, $query);

	header("refresh:2; url=huisartshome.php");

?>
<html>
	<br><br><br>
<footer>
<?php include 'footer.php'; ?>
</footer>
</html>