<?php
	session_start();
	include 'db_connect.php';
	
	$querycommentaar = "SELECT o.idOrder, p.verzekeringsnummer, p.Naam, p.adres, p.postcode, o.leverdatum, o.levertijd, p.email, o.commentaar FROM `order` as o, `patient` as p 
                     WHERE p.verzekeringsnummer = o.patient";

    $resultcommentaar = mysqli_query($connection, $querycommentaar);
	
	


?>

<!DOCTYPE html>
<html lang="en">
<link   rel="stylesheet" type="text/css" href="css/style.css">
<link href="datetimepicker/sample in bootstrap v2/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">

</head>
<body>

    
       <h1 style="text-align: center;">Leveringen</h1>
  
<table width="300" border="1" cellpadding="1" cellspacing="1" align="center"  >
<tr>
				<th>orderID</th>
				<th>Verzkeringsnummer</th>
                <th>Naam</th>
				<th>Commentaar</th>
				
                </tr>
		<?php
	       while( $row = mysqli_fetch_assoc($resultpatient) )
			{
				echo "<tr>
						<td>".$row["idOrder"]."</td>
						<td>".$row["verzekeringsnummer"]."</td>
						<td>".$row["Naam"]."</td>
						<td>".$row["commentaar"]."</td>
						
					  </tr>";
			}
			
    
        
    mysqli_close($connection);
    
		?>
    
    </table>
    <div style="text-align:center;">

     <br>
     <button onclick="location.href='./apothekerhome.php'" type="button" style="width: 20%;"  class="button button1"  > Terug </button>
     <br>
    </div>

</body>