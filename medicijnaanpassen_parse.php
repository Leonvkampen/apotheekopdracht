<?php
    session_start();
	//var_dump ($_POST);
    

	//var_dump($_POST);
	include("db_connect.php");

	if(!isset($_POST["naam"]) || trim($_POST["naam"]) == '' OR 
	   !isset($_POST["beschrijving"]) || trim($_POST["beschrijving"]) == '' OR 
	   !isset($_POST["voorraad"]) || trim($_POST["voorraad"]) == '' OR 
       !isset($_POST["maximalevoorraad"]) || trim($_POST["maximalevoorraad"]) == '')
    {
        echo "<font color='red' font size='100px'>U heeft een of meer velden niet ingevuld. Probeer het opnieuw.</font>";
		header("refresh:4; url=medicijnaanpassen2.php");
		exit;
    }

	$query = "UPDATE `medicijn`
	          SET                  `naam` = '".$_POST['naam']."',
								   `beschrijving` = '".$_POST['beschrijving']."',
								   `voorraad` = '".$_POST['voorraad']."',
                                   `maximalevoorraad` = '".$_POST['maximalevoorraad']."',
								   `ophalen` = '".$_POST['ophalen']."'
			  WHERE				   `idMedicijn` = '".$_POST['medicijnid']."'"; 

    //var_dump($query);

	$result = mysqli_query($connection, $query);

	if ( $result )
	{
		echo "<font color='red' font size='50px'>Uw gegevens zijn succesvol gewijzigt. U wordt doorgestuurd naar uw accountpagina.</font>";
		header("refresh:2; url=medicatie.php");
	}
	
	else
	{
		echo "<font color='red' font size='100px'>Er is iets fout gegaan.</font>";
		header("url=medicijnaanpassen2.php");
	}
//var_dump ($query);
?>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<link href="datetimepicker/sample in bootstrap v2/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<br><br><br>
<footer>
<?php include 'footer.php'; ?>
</footer>
</html>