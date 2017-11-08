<?php
    session_start();
	require("db_connect.php");

	$query = "SELECT * FROM `order` where geannuleerd = '1'";
 
	$result = mysqli_query($connection, $query);

	mysqli_close($connection);



?>
<!DOCTYPE html>
<html lang="en">
<head style="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
    
    <div>
    <h1 style="text-align: center;">Uw bestelling is geplaatst</h1>
        <table width="300" border="1" cellpadding="1" cellspacing="1" align="center"  >
        <tr>
        <th>OrderID</th>
        <th>Tijd van bestelling</th>
			</tr>
		<?php
	       while( $row = mysqli_fetch_assoc($result) )
			{
				echo "<tr>
						<td>".$row["idOrder"]."</td>
						<td>".$row["huidigedatum"]."</td>
                        <td>
							<a href='bestellen_stap3.php?verzekeringsnummer=".$row["idOrder"]."'/>
				            <img src='icons/drop.png' alt='Receptaanmaken'>
							</a>
                        </td>
                        
					  </tr>";
			}
		?>
        </table>
    </div>
</body>
<br><br><br>
<footer>
    <?php include 'footer.php'; ?>
</footer>
</html>