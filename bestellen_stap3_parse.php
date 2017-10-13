<?php
ob_start();
session_start();

include("db_connect.php");

//var_dump ($_SESSION); 

	if ( 
        !isset($_POST["leverdatum"]) || trim($_POST["leverdatum"]) == '' OR
        !isset($_POST["levertijd"]) || trim($_POST["levertijd"]) == '')
		

		{
			

  
   		
		}

		var_dump($_POST); 

$med1 = $_POST["med1"];

var_dump($med1);

//---------------------------------------------------SELECT QUERY'S---------------------------------------------------------------
    
    $queryorderid = "SELECT max(`idorder`)  as orderid  FROM `order` 
                                      WHERE patient = '".$_SESSION  ['verzekeringsnummer']."'";

    $resultorderid = mysqli_query($connection, $queryorderid);

    $recordsorderid = mysqli_fetch_all($resultorderid, MYSQLI_ASSOC); 

        if ($med1 = "Vul hier uw medicijn in") 
        {
            echo "test";
        }else{
            
            $querymedicijnid1 = "SELECT idMedicijn, voorraad FROM `medicijn` 
                                      WHERE naam = '".$_POST["med1"]."'";
            $resultmedicijnid1 = mysqli_query($connection, $querymedicijnid1);

            $recordsmedicijnid1 = mysqli_fetch_all($resultmedicijnid1, MYSQLI_ASSOC); 
            
            

            foreach($recordsmedicijnid1 as $recordsmedicijnid1){
            }
            $aantal1 = $_POST["aantal1"];

            $huidigevoorraad = $recordsmedicijnid1['voorraad'];

            $nieuwevooraad = $huidigevoorraad - $aantal1;
                
            
            $query1 = "INSERT INTO `orderregel`(`medicijnid`,
										`orderid`,
										`aantal`)

                       VALUES 	  ('".$recordsmedicijnid1["idMedicijn"]."',
                                   '".$recordsorderid['orderid']."',
								   '".$_POST["aantal1"]."')";
            
            $result1 = mysqli_query($connection, $query1);
            
            
            $querynieuwevooraad1 = "UPDATE `medicijn`
                    SET                 `voorraad` = '".$nieuwevooraad."'
                    WHERE               `idMedicijn` = '".$recordsmedicijnid1["idMedicijn"]."'"; 


            $resultnieuwevooraad1 = mysqli_query($connection, $querynieuwevooraad1);

        }

        
    if ($med1 = "Vul hier uw medicijn in") 
        {
            echo "test";
        }else{
        
        $querymedicijnid2 = "SELECT idMedicijn, voorraad FROM `medicijn` 
                                      WHERE naam = '".$_POST["med2"]."'";
        $resultmedicijnid2 = mysqli_query($connection, $querymedicijnid2);

        $recordsmedicijnid2 = mysqli_fetch_all($resultmedicijnid2, MYSQLI_ASSOC); 
        
        
        foreach($recordsmedicijnid2 as $recordsmedicijnid2){
        }
        
        $aantal2 = $_POST["aantal2"];

        $huidigevoorraad = $recordsmedicijnid2['voorraad'];

        $nieuwevooraad = $huidigevoorraad - $aantal2;
        
        $query2 = "INSERT INTO `orderregel`(`medicijnid`,
										    `orderid`,
										    `aantal`)

			  VALUES 			  ('".$recordsmedicijnid2["idMedicijn"]."',
                                   '".$recordsorderid['orderid']."',
								   '".$_POST["aantal2"]."')";

								   
	$result2 = mysqli_query($connection, $query2);
        
    }
    

    
    

    $querymedicijnid3 = "SELECT idMedicijn, voorraad FROM `medicijn` 
                                      WHERE naam = '".$_POST["med3"]."'";

    $resultmedicijnid3 = mysqli_query($connection, $querymedicijnid3);

    $recordsmedicijnid3 = mysqli_fetch_all($resultmedicijnid3, MYSQLI_ASSOC); 


    $querymedicijnid4 = "SELECT idMedicijn, voorraad FROM `medicijn` 
                                      WHERE naam = '".$_POST["med4"]."'";

    $resultmedicijnid4 = mysqli_query($connection, $querymedicijnid4);

    $recordsmedicijnid4 = mysqli_fetch_all($resultmedicijnid4, MYSQLI_ASSOC); 


    $querymedicijnid5 = "SELECT idMedicijn, voorraad FROM `medicijn` 
                                      WHERE naam = '".$_POST["med5"]."'";

    $resultmedicijnid5 = mysqli_query($connection, $querymedicijnid5);

    $recordsmedicijnid5 = mysqli_fetch_all($resultmedicijnid5, MYSQLI_ASSOC); 


    $querymedicijnid6 = "SELECT idMedicijn, voorraad FROM `medicijn` 
                                      WHERE naam = '".$_POST["med6"]."'";

    $resultmedicijnid6 = mysqli_query($connection, $querymedicijnid6);

    $recordsmedicijnid6 = mysqli_fetch_all($resultmedicijnid6, MYSQLI_ASSOC); 


    $querymedicijnid7 = "SELECT idMedicijn, voorraad FROM `medicijn` 
                                      WHERE naam = '".$_POST["med7"]."'";

    $resultmedicijnid7 = mysqli_query($connection, $querymedicijnid7);

    $recordsmedicijnid7 = mysqli_fetch_all($resultmedicijnid7, MYSQLI_ASSOC); 


    $querymedicijnid8 = "SELECT idMedicijn, voorraad FROM `medicijn` 
                                      WHERE naam = '".$_POST["med8"]."'";

    $resultmedicijnid8 = mysqli_query($connection, $querymedicijnid8);

    $recordsmedicijnid8 = mysqli_fetch_all($resultmedicijnid8, MYSQLI_ASSOC); 


    $querymedicijnid9 = "SELECT idMedicijn, voorraad FROM `medicijn` 
                                      WHERE naam = '".$_POST["med9"]."'";

    $resultmedicijnid9 = mysqli_query($connection, $querymedicijnid9);

    $recordsmedicijnid9 = mysqli_fetch_all($resultmedicijnid9, MYSQLI_ASSOC); 


    $querymedicijnid10 = "SELECT idMedicijn, voorraad FROM `medicijn` 
                                      WHERE naam = '".$_POST["med10"]."'";

    $resultmedicijnid10 = mysqli_query($connection, $querymedicijnid10);

    $recordsmedicijnid10 = mysqli_fetch_all($resultmedicijnid10, MYSQLI_ASSOC); 

    


//-------------------------------------------------------FOREACH STATEMENTS-------------------------------------------------------------  
    

foreach($recordsorderid as $recordsorderid){
       
}




foreach($recordsmedicijnid3 as $recordsmedicijnid3){
       
}

foreach($recordsmedicijnid4 as $recordsmedicijnid4){
       
}

foreach($recordsmedicijnid5 as $recordsmedicijnid5){
       
}

foreach($recordsmedicijnid6 as $recordsmedicijnid6){
       
}
foreach($recordsmedicijnid7 as $recordsmedicijnid7){
       
}

foreach($recordsmedicijnid8 as $recordsmedicijnid8){
       
}

foreach($recordsmedicijnid9 as $recordsmedicijnid9){
       
}

foreach($recordsmedicijnid10 as $recordsmedicijnid10){
       
}


//--------------------------------------------NIEUWE VOORAAD----------------------------------------------------------------------




$aantal3 = $_POST["aantal3"];

        $huidigevoorraad = $recordsmedicijnid3['voorraad'];

        $nieuwevooraad = $huidigevoorraad - $aantal3;

$aantal4 = $_POST["aantal4"];

        $huidigevoorraad = $recordsmedicijnid4['voorraad'];

        $nieuwevooraad = $huidigevoorraad - $aantal4;

$aantal5 = $_POST["aantal5"];

        $huidigevoorraad = $recordsmedicijnid5['voorraad'];

        $nieuwevooraad = $huidigevoorraad - $aantal5;

$aantal6 = $_POST["aantal6"];

        $huidigevoorraad = $recordsmedicijnid6['voorraad'];

        $nieuwevooraad = $huidigevoorraad - $aantal6;

$aantal7 = $_POST["aantal7"];

        $huidigevoorraad = $recordsmedicijnid7['voorraad'];

        $nieuwevooraad = $huidigevoorraad - $aantal7;

$aantal8 = $_POST["aantal8"];

        $huidigevoorraad = $recordsmedicijnid8['voorraad'];

        $nieuwevooraad = $huidigevoorraad - $aantal8;

$aantal9 = $_POST["aantal9"];

        $huidigevoorraad = $recordsmedicijnid9['voorraad'];

        $nieuwevooraad = $huidigevoorraad - $aantal9;

$aantal10 = $_POST["aantal10"];

        $huidigevoorraad = $recordsmedicijnid10['voorraad'];

        $nieuwevooraad = $huidigevoorraad - $aantal10   ;

var_dump($aantal10);

//--------------------------------------------------INSERT QUERY'S-----------------------------------------------------------	
					
				
	

								   
	
   
	
	$query3 = "INSERT INTO `orderregel`(`medicijnid`,
										`orderid`,
										`aantal`)

			  VALUES 			  ('".$recordsmedicijnid3["idMedicijn"]."',
                                   '".$recordsorderid['orderid']."',
								  '".$_POST["aantal3"]."')";

								   
	$result3 = mysqli_query($connection, $query3);
	
	$query4 = "INSERT INTO `orderregel`(`medicijnid`,
										`orderid`,
										`aantal`)

			  VALUES 			  ('".$recordsmedicijnid4["idMedicijn"]."',
                                   '".$recordsorderid['orderid']."',
								   '".$_POST["aantal4"]."')";

								   
	$result4 = mysqli_query($connection, $query4);
	
	$query5 = "INSERT INTO `orderregel`(`medicijnid`,
										`orderid`,
										`aantal`)

			  VALUES 			  ('".$recordsmedicijnid5["idMedicijn"]."',
                                   '".$recordsorderid['orderid']."',
								   '".$_POST["aantal5"]."')";

								   
	$result5 = mysqli_query($connection, $query5);
	
	$query6 = "INSERT INTO `orderregel`(`medicijnid`,
										`orderid`,
										`aantal`)

			  VALUES 			  ('".$recordsmedicijnid6["idMedicijn"]."',
                                   '".$recordsorderid['orderid']."',
								   '".$_POST["aantal6"]."')";

								   
	$result6 = mysqli_query($connection, $query6);
	
	$query7 = "INSERT INTO `orderregel`(`medicijnid`,
										`orderid`,
										`aantal`)

			  VALUES 			  ('".$recordsmedicijnid7["idMedicijn"]."',
                                   '".$recordsorderid['orderid']."',
								   '".$_POST["aantal7"]."')";

								   
	$result7 = mysqli_query($connection, $query7);
	
	$query8 = "INSERT INTO `orderregel`(`medicijnid`,
										`orderid`,
										`aantal`)

			  VALUES 			  ('".$recordsmedicijnid8["idMedicijn"]."',
                                   '".$recordsorderid['orderid']."',
								   '".$_POST["aantal8"]."')";

								   
	$result8 = mysqli_query($connection, $query8);
	
	$query9 = "INSERT INTO `orderregel`(`medicijnid`,
										`orderid`,
										`aantal`)

			  VALUES 			  ('".$recordsmedicijnid9["idMedicijn"]."',
                                   '".$recordsorderid['orderid']."',
								   '".$_POST["aantal9"]."')";

								   
	$result9 = mysqli_query($connection, $query9);
	
	$query10 = "INSERT INTO `orderregel`(`medicijnid`,
										`orderid`,
										`aantal`)

			  VALUES 			  ('".$recordsmedicijnid10["idMedicijn"]."',
                                   '".$recordsorderid['orderid']."',
								   '".$_POST["aantal10"]."')";

								   
	$result10 = mysqli_query($connection, $query10);


//--------------------------------------------UPDATE QUERY'S -----------------------------------------------------------------
	
	$leverdatum = "UPDATE `order`
                    SET                 `leverdatum` = '".$_POST['leverdatum']."',
                                        `levertijd` = '".$_POST['levertijd']."'
                    WHERE                `idOrder` = '".$recordsorderid['orderid']."'"; 


    $resultlevering = mysqli_query($connection, $leverdatum);


    
    //var_dump($querynieuwevooraad);
      
//--------------------------------------------CONNECTIONQUERY-----------------------------------------------------------------
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
  

    
    
   
     
    
<br><
</body>
<br><br>
<footer>
<?php include 'footer.php'; ?>
</footer>
    
</html>




