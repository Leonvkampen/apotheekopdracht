<?php
    session_start();
    include 'db_connect.php';


	$querymedicijn = "SELECT idMedicijn, naam, beschrijving, voorraad, maximalevoorraad FROM `medicijn`";

    $resultmedicijn = mysqli_query($connection, $querymedicijn);
	


	
?>

<!DOCTYPE html>
<html lang="en">
<link   rel="stylesheet" type="text/css" href="style.css">
<link href="datetimepicker/sample in bootstrap v2/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">

</head>
<body>
	<?php  include 'navbar_apotheker.php'; ?>
    
       <h1 style="text-align: center;">Medicatie Wijzigen</h1>
  

<table width="300" border="1" cellpadding="1" cellspacing="1" align="center"  >
<tr>
				<th>Medicatie naam</th>
				<th>Medicatie Beschrijving</th>
                <th>Medicatie Voorraad</th>
                <th>Medicatie Maximale Voorraad</th>
                
			</tr>
		<?php
	       while( $row = mysqli_fetch_assoc($resultmedicijn) )
			{
				echo "<tr>
						<td><br>".$row["naam"]."</td>
						<td>".$row["beschrijving"]."</td>
						<td>".$row["voorraad"]."</td>
                        <td>".$row["maximalevoorraad"]."</td>
                        <td>
							<a href='medicijnaanpassen2.php?&medicijnid=".$row["idMedicijn"]."naam=".$row["naam"]."&beschrijving=".$row["beschrijving"]."&voorraad=".$row["voorraad"]."&maximalevoorraad=".$row["maximalevoorraad"]."'/>
				            <img src='icons/drop.png' alt='Medicijn aanpassen'>
							</a>
                        </td>
                  
                        
					  </tr>";
			}
			
    
        
    mysqli_close($connection);
    
		?>
    
    </table>
    <div style="text-align:center;">

     <br>
     <button onclick="location.href='./medicatie.php'" type="button" style="width: 20%;"  class="button button1"  > Terug </button>
     <br>
    </div>

</body>
    <br>
    
<br><br>
<footer>
<?php include 'footer.php'; ?>
</footer>
</html>
