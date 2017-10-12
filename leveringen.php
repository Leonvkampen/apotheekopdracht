<?php
    session_start();
    include 'db_connect.php';
	
	$query = "SELECT * FROM `order`";
	$woonplaats = "SELECT * FROM `patient`";
	
	$query = "SELECT `verzekeringsnummer` FROM `patient` as p, `order` as o WHERE `idOrder` = "

?>

<!DOCTYPE html>
<html lang="en">
<link   rel="stylesheet" type="text/css" href="css/style.css">


</head>
<body>
<?php
    

		
        
		
				  
		$result = mysqli_query($connection, $query);
		
		
				  
        
        
        
 
        
    
    
 

    
	mysqli_close($connection);

?>
    
       <h1 style="text-align: center;">Leveringen</h1>
  

<table width="300" border="1" cellpadding="1" cellspacing="1" align="center">
<tr>
				<th>Verzekeringsnummer</th>
				<th>Naam</th>
                <th></th>
			</tr>
		<?php
	       while( $row = mysqli_fetch_assoc($result) )
			{
				echo "<tr>
						<td>".$row["Verzekeringsnummer"]."</td>
						<td>".$row["Naam"]."</td>
						<td>".$row[""]."</td>
                        <td>
							<a href='bestellen_stap2_orderaanmaken.php?verzekeringsnummer=".$row["Verzekeringsnummer"]."'/>
				            <img src='icons/drop.png' alt='Receptaanmaken'>
							</a>
                        </td>
                        
					  </tr>";
			}
			
    
        
    
    
		?>
    
    
   
     
    

</body>
<br><br>
<footer>
<?php include 'footer.php'; ?>
</footer>
</html>
