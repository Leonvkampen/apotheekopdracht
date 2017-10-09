<?php
    session_start();

    $_SESSION['post-data'] = $_POST;

    var_dump($_POST);
	include("db_connect.php");

    if ( empty($_POST["Verzekeringsnummer"]) || empty($_POST["email"]) || empty($_POST["Geboorteplaats"]) )
	{ 
		echo "U heeft een veld niet ingevuld. Probeer het nogmaals";
		header("refresh:20000000; url=index.php?content=login.php");
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
			var_dump($record_user);
			$_SESSION["Email"] = $record_user["Email"];
			$_SESSION["Verzekeringsnummer"] = $record_user["Verzekeringsnummer"];
			$_SESSION["geboorteplaats"] = $record_user["geboorteplaats"];

             header("location: klanthome.php");
						 break;
            
				   
				}
				
		

	
	}

?>