<?php
    session_start();
    $nam = $_SESSION["naam"];
    include 'db_connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="style.css">
<link href="datetimepicker/sample in bootstrap v2/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">

</head>


<body>
    <?php  include 'navbar_apotheker.php'; ?>
<?php
    

		$query = "SELECT	*
				  FROM		`patient`
				  WHERE		`naam`			= '".$nam."';";
        
		
				  
		$result = mysqli_query($connection, $query);
        
        
	mysqli_close($connection);

?>
    
       <h1 style="text-align: center;">Bestelling plaatsen</h1>
  

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
                        <td>
							<a href='bestellen_stap3.php?verzekeringsnummer=".$row["Verzekeringsnummer"]."'/>
				            <img src='icons/drop.png' alt='Receptaanmaken'>
							</a>
                        </td>
                        
					  </tr>";
			}
		?>
</table>   
    
   
     
    

</body>
<br><br>
<footer>
<?php include 'footer.php'; ?>
</footer>
</html>
