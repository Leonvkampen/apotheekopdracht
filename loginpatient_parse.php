<?php
    session_start();

    $_SESSION['post-data'] = $_POST;

	include("db_connect.php");

    if ( empty($_POST["email"]) || empty($_POST["wachtwoord"]))
	{ 
		echo "U heeft uw password of emailadres niet ingevuld. Probeer het nogmaals";
		header("refresh:2; url=index.php?content=login.php");
	}
	else
	{
		$query_user = "SELECT	*
				  FROM		`user`
				  WHERE		`email`			= '".$_POST["email"]."';";

		$query_wachtwoord = "SELECT	*
				  FROM		`wachtwoord`
				  WHERE		`email`			= '".$_POST["email"]."'
				  AND		`wachtwoord`	= '".$_POST["wachtwoord"]."';";

		$query_rol = "SELECT	*
				  FROM		`user_rol`
				  WHERE		`email`			= '".$_POST["email"]."';";
				  
		$result_user = mysqli_query($connection, $query_user);

		$result_wachtwoord = mysqli_query($connection, $query_wachtwoord);

		$result_rol = mysqli_query($connection, $query_rol);

		if ( mysqli_num_rows($result_user) > 0 AND mysqli_num_rows($result_wachtwoord) > 0 AND mysqli_num_rows($result_rol) > 0)
		{
			// Meldt de gebruiker dat hij is ingelogd redirect naar homepage developer
			$record_user = mysqli_fetch_assoc($result_user);
			//var_dump($record_user);
			$_SESSION["email"] = $record_user["email"];
			$_SESSION["voornaam"] = $record_user["voornaam"];
			$_SESSION["tussenvoegsel"] = $record_user["tussenvoegsel"];
			$_SESSION["achternaam"] = $record_user["achternaam"];
			$_SESSION["telefoonnummer"] = $record_user["telefoonnummer"];
			$_SESSION["woonplaats"] = $record_user["woonplaats"];
			$_SESSION["adres"] = $record_user["adres"];
			$_SESSION["postcode"] = $record_user["postcode"];
			$_SESSION["geverifieerd"] = $record_user["geverifieerd"];

			$record_wachtwoord = mysqli_fetch_assoc($result_wachtwoord);
			//var_dump($record_wachtwoord);
			$_SESSION["email"] = $record_wachtwoord["email"];
			$_SESSION["wachtwoord"] = $record_wachtwoord["wachtwoord"];

			$record_rol = mysqli_fetch_assoc($result_rol);
			//var_dump($record_rol);
			$_SESSION["email"] = $record_rol["email"];
			$_SESSION["rolid"] = $record_rol["rolid"];

            switch ($_SESSION["geverifieerd"])
			{
                case "1": {
				     switch ($_SESSION["rolid"])
				     {
					 case "1":
						 header("location: klantinlog.php");
						 break;
					 case "2":
						 header("location: balieinlog.php");
						 break;
					 case "3":
					 	 header("location: eigenaarinlog.php");
					     break;
                     case "4":
					 	 header("location: filmleverencierinlog.php");
					     break;
			     	 }
				}
				case "0": {
					 	 echo "<font color='red' font size='100px'>U heeft uw account nog niet geverifieerd. Doe dat eerst voordat u inlogt.";
			             header("refresh:4; url=login.php");
		                 exit;
                }
			}
		}
		if(mysqli_num_rows($result_wachtwoord) < 1)
		{
	 	    echo "<font color='red' font size='100px'>Het door u ingevulde email en/of wachtwoord is niet bekend, log opnieuw in.";
			header("refresh:4; url=login.php");
			exit;
		}

		/*else
		{
			// Meldt de gebruiker dat hij een niet bestaand emailadres en wachtwoordcombinatie heeft gebruikt. Stuur hem door naar de login_form.php pagina
			$_SESSION['email'] = $record_user['email'];
			header("refresh:4; url=login.php");
		}*/
				  
		//echo $query; exit();
		// Maak contact met de server
		// Maak een query die op basis van email en password kijkt of het record bestaat
		// als het bestaat redirect naar de homepage van de developer
		// Als het niet bestaat melding account niet bekend probeer het opnieuw. Redirect naar
		// login_form
	}
	
	// Als een van de velden leeg is melden en redirecten naar login_form.php && (and)  || (or)
	// Als beide velden gevuld zijn melden we gaan verder.
?>