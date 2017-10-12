<!DOCTYPE html>
<?php

	include 'db_connect.php';
	$query = "SELECT * FROM `medicijn`";
	
	$result = mysqli_query($connection, $query);
	
	

?>
<html lang="en">
<head style="">
    
      <link rel="stylesheet" type="text/css" href="css/style.css">
    
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/style.css">

</head>


<body>
    
    <div>
    <h1 style="text-align: center;">Voorraadaanpassen</h1>
    </div>

    <table width="300" border="1" cellpadding="1" cellspacing="1" align="center">
<tr>
				<th>medicijn</th>
				<th>voorraad</th>
                <th>Maximale voorraad</th>
                <th></th>
			</tr>
		<?php
	       while( $row = mysqli_fetch_assoc($result) )
			{
				echo "<tr>
						<td>".$row["naam"]."</td>
						<td>".$row["voorraad"]."</td>
						<td>".$row["maximale voorraad"]."</td>
                        <td>
							<a href='voorraadaanpassen_parse.php?medicijnid=".$row["idMedicijn"]."&maximalevoorraad=".$row["maximale voorraad"]."'/>
				            <img src='icons/drop.png' alt='Voorraad bijvullen'>
							</a>
                        </td>
                        
					  </tr>";
			}
			
    
        
    
    
		?>
</table>  
</body>
<br><br><br>
<footer>
    <?php include 'footer.php'; ?>
</footer>
</html>