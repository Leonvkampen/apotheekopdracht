<?php
ob_start();
session_start();

include("db_connect.php");


$aantalmedicijnen = "SELECT * FROM `order` WHERE idOrder = '".$_SESSION["orderid"]."'";

	if ( 
        !isset($_POST['leverdata']) || trim($_POST['leverdata']) == '')
		

		{
			
            header("refresh:2; url=geannuleerdebestelling.php");
        
        echo"<h1>U heeft een veld niet ingevult probeer het nogmaals</h1>";

  
   		
		}

else{
    
    


        $datetime = $_POST['leverdata'];
								
								$date = date('Y-m-d', strtotime($datetime));
								$time = date('G:i:00', strtotime($datetime));
		$nextday = date('Y-m-d',strtotime($date . "+1 days"));
    
    
        $querynieuwevooraad = "UPDATE `order`
                                SET                 `leverdatum` = '".$date."',
                                                    `levertijd`  = '".$time."',
                                                    `geannuleerd` = 0
                                WHERE               `idOrder` = '".$_SESSION["orderid"]."'";

    
        $resultnieuwevooraad = mysqli_query($connection, $querynieuwevooraad);
            
        
            echo "<h1>De rest van uw bestelling is succesvol veranderd</h1>";
        
         header("refresh:2; url=huisartshome.php");
    
    
}

		

    mysqli_close($connection);
?>



