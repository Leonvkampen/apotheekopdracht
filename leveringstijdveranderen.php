<?php
    session_start();
	$verzekeringsnummer = $_SESSION["Verzekeringsnummer"];
	$patientnaam = $_SESSION["Naam"];
    include 'db_connect.php';
	

	$queryverzekeringsnummer = "SELECT	*
				  FROM		`patient`
				  WHERE		`verzekeringsnummer`			= '".$verzekeringsnummer."';";

    $resultverzekeringsnummer = mysqli_query($connection, $queryverzekeringsnummer);
	
	$querylevertijd = "SELECT	*
				  FROM		`order`";

    $resultlevertijd = mysqli_query($connection, $querylevertijd);
	var_dump($querylevertijd);

	
	$querypatientnaam = "SELECT	*
				  FROM		`patient`
				  WHERE		`naam`			= '".$patientnaam."';";

    $resultpatientnaam = mysqli_query($connection, $querypatientnaam);
var_dump($querypatientnaam);



	$queryorderid = "SELECT o.idOrder, o.levertijd, o.leverdatum
					 FROM `order` as o, `patient` as p 
					 WHERE p.Verzekeringsnummer = '".$verzekeringsnummer."' and p.Verzekeringsnummer = o.patient";
					 
	$resultorderid = mysqli_query($connection, $queryorderid);
	
	var_dump($queryorderid);

$timezone = date_default_timezone_set('Europe/Amsterdam');
$date = date('H:i:s');


if ($date > '13:30:00' )
{
	header("location:telaat.php");
}
else
{
	
}
?>

<!DOCTYPE html>
<html lang="en">
<link   rel="stylesheet" type="text/css" href="style.css">


</head>

<body>

    
       <h1 style="text-align: center;">Leveringstijd aanpassen</h1>
  

<table width="300" border="1" cellpadding="1" cellspacing="1" align="center"  >
<tr>
				<th>orderID</th>
				<th>Verzkeringsnummer</th>
                <th>Naam</th>
                <th>levertijd</th>
                <th>leverdatum</th>
                
			</tr>
<?php
	       while( $row = mysqli_fetch_assoc($resultorderid) )
			{
				echo "<tr>
						<td><br>".$row["idOrder"]."</td>
						<td>".$verzekeringsnummer."</td>
						<td>".$patientnaam."</td>
						<td>".$row["levertijd"]."</td>
						<td>".$row["leverdatum"]."</td>
						<td>
							<a href='leveringstijdveranderen2.php?levertijd=".$row["levertijd"]."&leverdatum=".$row["leverdatum"]."&orderid=".$row["idOrder"]."'/>
				            <img src='icons/drop.png' alt='levertijd aanpassen'>
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
