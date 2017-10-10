<?php
    session_start();

    $_SESSION['post-data'] = $_POST;

    var_dump($_POST);
	include("db_connect.php");

    if ( empty($_POST["email"]) || empty($_POST["wachtwoord"]) )
	{ 
		echo "U heeft een veld niet ingevuld. Probeer het nogmaals";
		header("refresh:2; url=index.php?content=loginapotheek.php");
	}
	else
	{
		$query_patient = "SELECT	*
				  FROM		`apotheek`
				  WHERE		`email`			= '".$_POST["email"]."';";
        
        $query_wachtwoord = "SELECT	*
				  FROM		`apotheek`
				  WHERE		`email`			= '".$_POST["email"]."'
				  AND		`wachtwoord`	= '".$_POST["wachtwoord"]."';";
		
				  
		$result_patient = mysqli_query($connection, $query_patient);
        
        $result_wachtwoord = mysqli_query($connection, $query_wachtwoord);


		if ( mysqli_num_rows($result_patient) > 0 AND mysqli_num_rows($result_wachtwoord) > 0 )
		{
	
			$record_user = mysqli_fetch_assoc($result_patient);
			var_dump($record_user);
			$_SESSION["Email"] = $record_user["Email"];
            
            $record_wachtwoord = mysqli_fetch_assoc($result_wachtwoord);
			var_dump($record_wachtwoord);
			$_SESSION["email"] = $record_wachtwoord["email"];
			$_SESSION["wachtwoord"] = $record_wachtwoord["wachtwoord"];
            
                 
	
						 header("location: apothekerhome.php");
						 break;
			
            
				   
				}
				
		

	
	}

if(mysqli_num_rows($result_wachtwoord) < 1)
		{
	 	    echo "<font color='red' font size='100px'>Het door u ingevulde email en/of wachtwoord is niet bekend, log opnieuw in.";
			header("refresh:4; url=loginapotheek.php");
			exit;
		}

?>