<?php
    session_start();
	

	//var_dump($_POST);
	include("db_connect.php");

	$select_user_email = ("SELECT `Email` FROM `patient` WHERE `Email` = '{$_SESSION["Email"]}'"); 
	$negative_user_result = mysqli_query($connection, $select_user_email);

	if(mysqli_num_rows($negative_user_result) < 0)
	{
	    echo "<font color='red' font size='100px'>Er gaat iets mis.</font>";
		header("refresh:4; url=klantgevensaanpassen_wijzigen.php");
		exit;
	}

	$select_user = "SELECT * FROM patient WHERE email = '{$_SESSION["Email"]}'";

    $result = mysqli_query($connection, $select_user);

    $row = mysqli_fetch_assoc($result);

	if(!isset($_POST["geboorteplaats"]) || trim($_POST["geboorteplaats"]) == '' OR 
	   !isset($_POST["Naam"]) || trim($_POST["Naam"]) == '' OR 
	   !isset($_POST["patientdata"]) || trim($_POST["patientdata"]) == '' OR 
       !isset($_POST["adres"]) || trim($_POST["adres"]) == '' OR 
	   !isset($_POST["postcode"]) || trim($_POST["postcode"]) == '')
    {
        echo "<font color='red' font size='100px'>U heeft een of meer velden niet ingevuld. Probeer het opnieuw.</font>";
		header("refresh:4; url=klantgevensaanpassen_wijzigen.php");
		exit;
    }

	$query = "UPDATE patient
	          SET                  `geboorteplaats` = '".$_POST['geboorteplaats']."',
								   `Naam` = '".$_POST['Naam']."',
								   `patientdata` = '".$_POST['patientdata']."',
								   `adres` = '".$_POST['adres']."',
								   `postcode` = '".$_POST['postcode']."'
			  WHERE                `Email` = '".$_SESSION['Email']."'"; 

    //var_dump($query);

	$result = mysqli_query($connection, $query);

	if ( $result )
	{
		echo "<font color='red' font size='100px'>Uw gegevens zijn succesvol gewijzigt. U wordt doorgestuurd naar de accountpagina.</font>";
		header("refresh:6; url=klantgegevens.php");
	}
	
	else
	{
		echo "<font color='red' font size='100px'>Er is iets fout gegaan.</font>";
		header("url=klantgevensaanpassen_wijzigen.php");
	}
?>
<html>
	<br><br><br>
<footer>
<?php include 'footer.php'; ?>
</footer>
</html>