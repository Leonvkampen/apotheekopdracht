<?php
    session_start();
	require("db_connect.php");

	$query = "SELECT * FROM `order` where geannuleerd = '1'";
 
	$result = mysqli_query($connection, $query);

	mysqli_close($connection);



?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="style.css">
<link href="datetimepicker/sample in bootstrap v2/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">

</head>
<body>
       <?php include 'navbar_huisarts.php'; ?>
	<button onclick="location.href='./index.php'" type="button" style="width: 250px; float:right;"  class="button button1" > Loguit </button>
	<Br>
	<br>
	<br>
    
    <div>
    <h1 style="text-align: center;">Uw bestelling is geplaatst</h1>
        <table width="300" border="1" cellpadding="1" cellspacing="1" align="center"  >
        <tr>
        <th>OrderID</th>
        <th>Tijd van bestelling</th>
        <th></th>
			</tr>
		<?php
	       while( $row = mysqli_fetch_assoc($result) )
			{
				echo "<tr>
						<td>".$row["idOrder"]."</td>
						<td>".$row["huidigedatum"]."</td>
                        <td>
							<a href='geannuleerdebestelling_plaatsen.php?orderid=".$row["idOrder"]."'/>
				            <img src='icons/drop.png' alt='Recept plaatsen'>
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