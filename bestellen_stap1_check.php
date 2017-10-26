<?php
    session_start();

    include 'db_connect.php';

    if ( empty($_POST["naam"]) )
	{ 
		echo "U heeft geen patient ingevult probeer het nogmaals";
		header("refresh:2; url=index.php?content=bestellen_stap1.php");
	}
	else
	{
       
        $naam = $_POST["naam"];
		$_SESSION["naam"] = $naam;
       
        
        header("location: bestellen_stap1_parse.php");
		
        
        
			}
        
    ?>
    

    
    
   
     
    
