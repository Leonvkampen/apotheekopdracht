<?php
    session_start();

    $_SESSION['post-data'] = $_POST;

   
	include("db_connect.php");

    if ( empty($_POST["Verzekeringsnummer"]) || empty($_POST["email"]) || empty($_POST["Geboorteplaats"]) )
	{ 
		echo "U heeft een veld niet ingevuld. Probeer het nogmaals";
		header("refresh:2; url=index.php?content=login.php");
	}
	else
	{
		$query_patient = "SELECT	*
				  FROM		`patient`
				  WHERE		`email`			= '".$_POST["email"]."';";
        
		
				  
		$result_patient = mysqli_query($connection, $query_patient);


		if ( mysqli_num_rows($result_patient) > 0 )
		{
			// Meldt de gebruiker dat hij is ingelogd redirect naar homepage developer
			$record_user = mysqli_fetch_assoc($result_patient);
			
			$_SESSION["Email"] = $record_user["Email"];
			$_SESSION["Verzekeringsnummer"] = $record_user["Verzekeringsnummer"];
			$_SESSION["geboorteplaats"] = $record_user["geboorteplaats"];
            $_SESSION["Naam"] = $record_user["Naam"];
            $_SESSION["patientdata"] = $record_user["patientdata"];
            $_SESSION["adres"] = $record_user["adres"];
            $_SESSION["postcode"] = $record_user["postcode"];
             header("location: klanthome.php");
						 break;
            
				   
				}
				
		

	
	}

?>