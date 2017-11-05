<?php
    session_start();
    include 'db_connect.php';


	$querypatient = "SELECT o.idOrder, p.verzekeringsnummer, p.Naam, p.adres, p.postcode, o.leverdatum, o.levertijd, p.email, o.commentaar FROM `order` as o, `patient` as p 
                     WHERE p.verzekeringsnummer = o.patient";

    $resultpatient = mysqli_query($connection, $querypatient);


?>

<!DOCTYPE html>
<html lang="en">
<link   rel="stylesheet" type="text/css" href="style.css">
<link href="datetimepicker/sample in bootstrap v2/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">

</head>
<body>

    
       <h1 style="text-align: center;">Leveringen</h1>
  

<table width="300" border="1" cellpadding="1" cellspacing="1" align="center"  >
<tr>
				<th>orderID</th>
				<th>Verzkeringsnummer</th>
                <th>Naam</th>
                <th>leverdatum</th>
                <th>levertijd</th>
                <th>Adres</th>
                <th align="center">Postcode</th>
                <th align="center">Niet thuis?</th>
                <th>Identiteitsbewijs (BSN Nummer)</th>   
				
				<th>Commentaar</th>
				
                </tr>
		<?php
	       while( $row = mysqli_fetch_assoc($resultpatient) )
			{
				echo "<tr>
						<td>".$row["idOrder"]."</td>
						<td>".$row["verzekeringsnummer"]."</td>
						<td>".$row["Naam"]."</td>
						<td>".$row["leverdatum"]."</td>
						<td>".$row["levertijd"]."</td>
                        <td>".$row["adres"]."</td>
                        <td>".$row["postcode"]."</td>
						<td>
							<a href='emailnietthuis.php?email=".$row["email"]."&naam=".$row["Naam"]."&orderid=".$row["idOrder"]."'/>
				            <img src='icons/drop.png' alt='vervallen'>
							</a>
                        </td>
                        <td><input type=text </td>
						<br><br>
						<form id='commentaar' method='post' action='commentaar.php' ;>
						<td>
						 <input type='text' name='commentaar' id='commentaar' placeholder='vul hier uw commentaar in' value=".$row["commentaar"].">
						 <input type='hidden' name='idOrder' id='idOrder' value=".$row["idOrder"].">
						 <input type='hidden' name='naam' id='naam' value=".$row["Naam"].">
						
						<button type='submit' name='commentaarsturen' id='commentaarsturen' class='button button1' onClick='commentaar.php'>Commentaar versturen</button>
						</form>
					  </tr>";
			}
			
    
        
    mysqli_close($connection);
    
		?>
    
    </table>
    <div style="text-align:center;">

     <br>
     <button onclick="location.href='./koerierhome.php'" type="button" style="width: 20%;"  class="button button1"  > Terug </button>
     <br>
    </div>

</body>
    <br>
    
<br><br>
<footer>
<?php include 'footer.php'; ?>
</footer>
</html>
