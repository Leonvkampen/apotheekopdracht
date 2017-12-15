<!DOCTYPE html>
<?php

	include 'db_connect.php';
	$query = "SELECT * FROM `medicijn`";
	
	$result = mysqli_query($connection, $query);
	
	

?>
<html lang="en">
<head style="">

<link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="datetimepicker/sample in bootstrap v2/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">

</head>


<body>
    <?php include 'navbar_huisarts.php'; ?>
	<button onclick="location.href='./index.php'" type="button" style="width: 250px; float:right;"  class="button button1" > Loguit </button>
    <div>
    <h1 style="text-align: center;">Voorraadaanpassen</h1>
    </div>

    <table width="300" height="200" border="1" cellpadding="1" cellspacing="1" align="center">
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
						<td>".$row["maximalevoorraad"]."</td>
                        <td>
							<a href='voorraadaanpassen_parse.php?medicijnid=".$row["idMedicijn"]."&maximalevoorraad=".$row["maximalevoorraad"]."'/>
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
	<div style="text-align:right;">
		<button onclick="location.href='./apothekerhome.php'" type="button" style="width: 250px;"  class="button button1" > Terug </button>
	</div>
</footer>
</html>