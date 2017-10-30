<?php
    session_start();
    include 'db_connect.php';


	$querypatient = "SELECT o.idOrder, p.verzekeringsnummer, p.Naam, p.adres, p.postcode FROM `order` as o, `patient` as p
                     WHERE p.verzekeringsnummer = o.patient";

    $resultpatient = mysqli_query($connection, $querypatient);

	
?>

<!DOCTYPE html>
<html lang="en">
<link   rel="stylesheet" type="text/css" href="style.css">
<link href="datetimepicker/sample in bootstrap v2/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">

</head>
<body>
	<?php  include 'navbar_apotheker.php'; ?>
    
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
                        <td>
							<a href='leveringenoverzien.php?idOrder=".$row["idOrder"]."&naam=".$row["Naam"]."'/>
				            <img src='icons/drop.png' alt='Bestellingen overzien'>
							</a>
                        </td>
                  
                        
					  </tr>";
			}
			
    
        
    mysqli_close($connection);
    
		?>
    
    </table>
	
    <div style="text-align:center;">

     <br>
	 <br>
     <button onclick="location.href='./apothekerhome.php'" type="button" style="width: 20%; float:right;"  class="button button1"  > Terug </button>
    
    </div>

</body>
    <br>
    
<br><br>
<footer>
<?php include 'footer.php'; ?>
</footer>
</html>
