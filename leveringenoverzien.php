<?php
	session_start();
    include 'db_connect.php';
	
	$querymedicijn = "SELECT m.naam, ro.orderid, ro.aantal FROM `medicijn` as m, `orderregel` as ro WHERE ro.orderid = '".$_GET['idOrder']."' and ro.medicijnid = m.idMedicijn";
	
	$resultmedicijn = mysqli_query($connection, $querymedicijn);
	
	//var_dump($querymedicijn);

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
                <th>Medicijnen naam</th>
                <th>aantal</th>
                
			</tr>
		<?php
	       while( $row = mysqli_fetch_assoc($resultmedicijn) )
			{
				echo "<tr>
						<td><br>".$_GET["idOrder"]."</td>
						<td><br>".$row["naam"]."</td>
						<td><br>".$row["aantal"]."</td>
                        
                  
                        
					  </tr>";
			}
			
    
        
    mysqli_close($connection);
    
		?>
    
    </table>
    <div style="text-align:center;">

     <br>
     <button onclick="location.href='./leveringenkoerier.php'" type="button" style="width: 20%; float:right;"  class="button button1"  > Terug </button>
     <br>
    </div>

</body>
    <br>
    
<br><br>
<footer>
<?php include 'footer.php'; ?>
</footer>
</html>
