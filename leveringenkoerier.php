<?php
    session_start();
    include 'db_connect.php';


	$querypatient = "SELECT o.idOrder, p.verzekeringsnummer, p.Naam, p.adres, p.postcode FROM `order` as o, `patient` as p 
                     WHERE p.verzekeringsnummer = o.patient";

    $resultpatient = mysqli_query($connection, $querypatient);


?>

<!DOCTYPE html>
<html lang="en">
<link   rel="stylesheet" type="text/css" href="css/style.css">


</head>
<body>

    
       <h1 style="text-align: center;">Leveringen van de koerier</h1>
  

<table width="300" border="1" cellpadding="1" cellspacing="1" align="center"  >
<tr>
				<th>orderID</th>
				<th>Verzkeringsnummer</th>
                <th>Naam</th>
                <th>Adres</th>
                <th align="center">Postcode</th>
                
			</tr>
		<?php
	       while( $row = mysqli_fetch_assoc($resultpatient) )
			{
				echo "<tr>
						<td><br>".$row["idOrder"]."</td>
						<td>".$row["verzekeringsnummer"]."</td>
						<td>".$row["Naam"]."</td>
                        <td>".$row["adres"]."</td>
                        <td>".$row["postcode"]."</td>
                  
                        
					  </tr>";
			}
			
    
        
    mysqli_close($connection);
    
		?>
    
    </table>
    <div style="text-align:center;">

     <br>
     <button onclick="location.href='./koerierhome.php'" type="button" style="width: 20%;"  class="button"  > Terug </button>
     <br>
    </div>

</body>
    <br>
    
<br><br>
<footer>
<?php include 'footer.php'; ?>
</footer>
</html>
