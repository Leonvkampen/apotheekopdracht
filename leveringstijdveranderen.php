<?php
    session_start();
	$verzekeringsnummer = $_SESSION["Verzekeringsnummer"];
	$patientnaam = $_SESSION["Naam"];
    include 'db_connect.php';
	

	$queryverzekeringsnummer = "SELECT	*
				  FROM		`patient`
				  WHERE		`verzekeringsnummer`			= '".$verzekeringsnummer."';";

    $resultverzekeringsnummer = mysqli_query($connection, $queryverzekeringsnummer);
	
	$queryleverdatum = "SELECT	*
				  FROM		`order`";

    $resultleverdatum = mysqli_query($connection, $queryleverdatum);
	var_dump($queryleverdatum);

	
	$querypatientnaam = "SELECT	*
				  FROM		`patient`
				  WHERE		`naam`			= '".$patientnaam."';";

    $resultpatientnaam = mysqli_query($connection, $querypatientnaam);
var_dump($querypatientnaam);



	$queryorderid = "SELECT o.idOrder, o.leverdatum
					 FROM `order` as o, `patient` as p 
					 WHERE p.Verzekeringsnummer = '".$verzekeringsnummer."' and p.Verzekeringsnummer = o.patient;";
					 
	$resultorderid = mysqli_query($connection, $queryorderid);
	
	var_dump($queryorderid);
?>

<!DOCTYPE html>
<html lang="en">
<link   rel="stylesheet" type="text/css" href="css/style.css">


</head>

<body>

    
       <h1 style="text-align: center;">Leveringsdatum aanpassen</h1>
  

<table width="300" border="1" cellpadding="1" cellspacing="1" align="center"  >
<tr>
				<th>orderID</th>
				<th>Verzkeringsnummer</th>
                <th>Naam</th>
                <th>leverdatum</th>
                
			</tr>
<?php
	       while( $row = mysqli_fetch_assoc($resultorderid) )
			{
				echo "<tr>
						<td><br>".$row["idOrder"]."</td>
						<td>".$verzekeringsnummer."</td>
						<td>".$patientnaam."</td>
						<td>".$row["leverdatum"]."</td>
						<td>
							<a href='leveringstijdveranderen_parse.php?leverdatum=".$row["leverdatum"]."&orderid=".$row["idOrder"]."'/>
				            <img src='icons/drop.png' alt='leverdatum aanpassen'>
							</a>
                        </td>
                        <br><br>
                        
					  </tr>";
					  
			
			}
mysqli_close($connection);
			
?>
    
    </table>
    <div style="text-align:center;">

     <br>
     <button onclick="location.href='./apothekerhome.php'" type="button" style="width: 20%;"  class="button"  > Terug </button>
     <br>
    </div>

</body>
    <br>
    
<br><br>
<footer>
<?php include 'footer.php'; ?>
</footer>
</html>
