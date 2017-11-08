<?php
ob_start();
session_start();

include("db_connect.php");


$aantalmedicijnen = "SELECT voorraad FROM `medicijn` WHERE naam = '".$_POST["med1"]."'";


	if ( 
        !isset($_POST["leverdatum"]) || trim($_POST["leverdatum"]) == '' OR
        !isset($_POST["levertijd"]) || trim($_POST["levertijd"]) == '')
		

		{
			

  
   		
		}

		



        $datetime = $_POST['leverdata'];
								
								$date = date('Y-m-d', strtotime($datetime));
								$time = date('G:i:00', strtotime($datetime));
		$nextday = date('Y-m-d',strtotime($date . "+1 days"));


        function insert_order($connection, $second = false, $date, $time) {
        
            if ($second == false) {
                
            
             $query = "INSERT INTO `order`        (`leverdatum`,
                                                  `levertijd`,
                                                  `huisartsid`,
								                  `koerier`,
												  `Patient`,
								                  `Apotheek`,
                                                  `geannuleerd`)

			  VALUES 			                 ('".$date."',
												 '".$time."',
                                                  '".$_SESSION['huisartsid']."',
								                 '1',
												 '".$_SESSION['verzekeringsnummer']."',
								                 '1',
                                                 '0')";

            mysqli_query($connection, $query);
            
            $orderId = mysqli_insert_id($connection);
        
            insert_orderline($orderId, $connection, false, $date, $time);
               
                
                } elseif ($second == true) {
                
                
                
                    $query = "INSERT INTO `order`(`leverdatum`,
                                                  `levertijd`,
                                                  `huisartsid`,
								                  `koerier`,
												  `Patient`,
								                  `Apotheek`,
                                                  `geannuleerd`)

			  VALUES 			                 ('".$date."',
												 '".$time."',
                                                  '".$_SESSION['huisartsid']."',
								                 '1',
												 '".$_SESSION['verzekeringsnummer']."',
								                 '1',
                                                 '1')";

            mysqli_query($connection, $query);
            
            $orderIdSecond = mysqli_insert_id($connection);
                insert_orderline($orderIdSecond, $connection, true, $date, $time);
               
            }
            
            
            
        
            
        }

        function insert_orderline($orderId, $connection, $second = false, $date, $time) {
                
             foreach($_POST as $key => $val) {
                if (strpos($key, 'med') !== false) {
                    $aantalKey = str_replace('med', 'aantal', $key) ;
                        
                                //queries
                 	$querymedicijnid = "SELECT voorraad FROM `medicijn`
														WHERE idMedicijn = '$val'";
														
					$resultmedicijnid = mysqli_query($connection, $querymedicijnid);
					
					$recordmedicijnid = mysqli_fetch_all($resultmedicijnid, MYSQLI_ASSOC);
                    
					
					
                    
                    if  ($_POST[$key] == "Vul hier uw medicijn in")
                    {
                       
                        
                    }else if ($second == false )
                    {
                     
                        
                       
                      

                    $huidigevoorraad = $recordmedicijnid[0]['voorraad'];

                    $nieuwevooraad = $huidigevoorraad - $_POST[$aantalKey];
                        
                   
				
                    if(  $nieuwevooraad < '5' ){
							   echo "1 van uw opgegeven medicijnen is niet op vooraad deze order is nu geannuleerd u kunt deze activeren vanuit de homepagina";
                        
                      
                        insert_order($connection, true, $date, $time);
							
					 }else{
                         $query1 = "INSERT INTO `orderregel`(`medicijnid`,
                                                    `orderid`,
                                                    `aantal`)

                                   VALUES 	  ('".$val."',
                                               '".$orderId."',
                                               '".$_POST[$aantalKey]."')";

                    mysqli_query($connection, $query1);

                  
                    $querynieuwevooraad = "UPDATE `medicijn`
                                SET                 `voorraad` = '".$nieuwevooraad."'
                                WHERE               `idMedicijn` = '$val'";


                    $resultnieuwevooraad = mysqli_query($connection, $querynieuwevooraad);
                      
                    }
                    }
                        
                    
                    
                    else  {
                        
                    $huidigevoorraad = $recordmedicijnid[0]['voorraad'];

                    $nieuwevooraad = $huidigevoorraad - $_POST[$aantalKey];
                        
                        
                         if (  $nieuwevooraad < '5' ){
                        
                      $query1 = "INSERT INTO `orderregel`(`medicijnid`,
                                                    `orderid`,
                                                    `aantal`)

                                   VALUES 	  ('".$val."',
                                               '".$orderId."',
                                               '".$_POST[$aantalKey]."')";

                    mysqli_query($connection, $query1);

                  
                    }
                    }

                }
            }
        }
        
        insert_order($connection, false, $date, $time);



	
	
	
	

    mysqli_close($connection);
?>


<!DOCTYPE html>
<html lang="en">
<link   rel="stylesheet" type="text/css" href="css/style.css">


</head>
<body>

    
       <h1 style="text-align: center;">Uw bestelling is geplaatst </h1>
  
<?php
   
 header("refresh:5; url=huisartshome.php");


?>
    
    
   
     

  
<br>   
<br>

</body>
<br><br>
<footer>
<?php include 'footer.php'; ?>
</footer>
    
</html>




