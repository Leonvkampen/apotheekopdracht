<?php
ob_start();
session_start();

include("db_connect.php");
//var_dump($_SESSION);
/*insert_order($val, $arr);

function insert_order($val, $arr, $bool = false) {
    insert_order();
}*/

//var_dump ($_SESSION); 

	if ( 
        !isset($_POST["leverdatum"]) || trim($_POST["leverdatum"]) == '' OR
        !isset($_POST["levertijd"]) || trim($_POST["levertijd"]) == '')
		

		{
			

  
   		
		}

		//var_dump($_POST); 


	//------------------------------------------------MED POSTS--------------------------------------------------------------------

        function insert_order($connection, $second = false) {
        
            if ($second == false) {
                
            
             $query = "INSERT INTO `order`        (`leverdatum`,
                                                  `levertijd`,
                                                  `huisartsid`,
								                  `koerier`,
												  `Patient`,
								                  `Apotheek`,
                                                  `geannuleerd`)

			  VALUES 			                 ('".$_POST['leverdatum']."',
                                                  '".$_POST['levertijd']."',
                                                  '".$_SESSION['huisartsid']."',
								                 '1',
												 '".$_SESSION['verzekeringsnummer']."',
								                 '1',
                                                 '0')";

            mysqli_query($connection, $query);
            
            $orderId = mysqli_insert_id($connection);
        
            insert_orderline($orderId, $connection);
               
                
                } else {
                
                
                
                    $query = "INSERT INTO `order`(`leverdatum`,
                                                  `levertijd`,
                                                  `huisartsid`,
								                  `koerier`,
												  `Patient`,
								                  `Apotheek`,
                                                  `geannuleerd`)

			  VALUES 			                 ('".$_POST['leverdatum']."',
                                                  '".$_POST['levertijd']."',
                                                  '".$_SESSION['huisartsid']."',
								                 '1',
												 '".$_SESSION['verzekeringsnummer']."',
								                 '1',
                                                 '1')";

            mysqli_query($connection, $query);
            
            $orderIdSecond = mysqli_insert_id($connection);
                insert_orderline($orderIdSecond, $connection, true);
               //var_dump($orderIdSecond, $connection, true); 
            }
            
            
            
        
            
        }

        function insert_orderline($orderId, $connection, $third = false) {
                
             foreach($_POST as $key => $val) {
                if (strpos($key, 'med') !== false) {
                    $aantalKey = str_replace('med', 'aantal', $key) ;
                        
                                //queries
                       
                    $querymedicijnid = "SELECT voorraad FROM `medicijn` 
                                                          WHERE idMedicijn = '$val'";
                    $resultmedicijnid = mysqli_query($connection, $querymedicijnid);

                    $recordsmedicijnid = mysqli_fetch_all($resultmedicijnid, MYSQLI_ASSOC);
                        
                          // var_dump($recordsmedicijnid);
                    
                    if  ($_POST[$key] == "Vul hier uw medicijn in")
                    {
                        
                        
                    }elseif ($third == false || $recordsmedicijnid[0]['voorraad'] < '5' )
                    {
                        
                    echo "Dit medicijn is niet in voorraadrd";
                        
                        insert_order($connection, true);
                        
                    } elseif ($third == true) {
                        echo "Dtestsetsetestestests";
                    }
                    else{

                    $huidigevoorraad = $recordsmedicijnid[0]['voorraad'];

                    $nieuwevooraad = $huidigevoorraad - $_POST[$aantalKey];

                    var_dump($nieuwevooraad);
                        
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
            }
        }

        insert_order($connection);



    mysqli_close($connection);
?>


<!DOCTYPE html>
<html lang="en">
<link   rel="stylesheet" type="text/css" href="css/style.css">


</head>
<body>
<?php
    

        //var_dump ($recordsvooraadmedicijn);
        
    exit;
    
 header("refresh:2; url=huisartshome.php");


    
	

?>
    
       <h1 style="text-align: center;">Uw bestelling is geplaatst </h1>
  

    
    
   
     
k    
<br><
</body>
<br><br>
<footer>
<?php include 'footer.php'; ?>
</footer>
    
</html>




