<?php session_start(); 
    
    include 'db_connect.php';

    $query = "SELECT * FROM `medicijn` where idMedicijn = '".$_GET["idMedicijn"]."'";

    $result = mysqli_query($connection, $query);

    $record = mysqli_fetch_assoc($result);


?>


<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="datetimepicker/sample in bootstrap v2/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>
	<?php  include 'navbar_apotheker.php'; ?>
    <h1 color="black" style="text-align: center;">medicijn aanpassen</h1>
<div>
<h3  style="text-align: center;">Voer alles in. Als u iets niet wilt wijzigen moet u uw huidige gegevens invoeren.</h3>
<form class="table" method="post" style="margin-left: 22%;" action="medicijnaanpassen_parse.php">
    <table style="margin-left: 10%;">
            <tr>
				<input style="width: 100%" type="hidden" class="form-control" name="medicijnid" id="medicijnid" value="<?= $record["idMedicijn"] ?>"/>
                <td>Medicijn naam:<br>			
                        <input style="width: 80%" type="text" class="form-control" name="naam" id="naam"  placeholder="Vul een naam in" value="<?= $record["naam"] ?>"/>
                </td>
            </tr>
        
          <tr>
            <td>Medicatie Beschrijving:<br>					
						<input style="width: 80%" type="text" class="form-control" name="beschrijving" id="beschrijving"  placeholder="Vul uw beschrijving in" value="<?= $record["beschrijving"] ?>"/>
			</td></tr>
        </tr>
          <tr>
            <td>Medicatie Voorraad:	<br>				
						<input style="width: 80%" type="text" class="form-control" name="voorraad" id="voorraad"  placeholder="Vul uw voorraad in" value="<?= $record["voorraad"] ?>"/>
			</td></tr>
        </tr>
          <tr>
            <td>Medicijn Maximale Aantal: <br>					
						<input style="width: 80%" type="text" class="form-control" name="maximalevoorraad" id="maximalevoorraad"  placeholder="Vul uw maximale voorraad in" value="<?= $record["maximalevoorraad"] ?>" />
			</td></tr>
        <tr>
            <td>ophalen 	<br>	
                 <input style="width: 100%" type="hidden" class="form-control" name="ophalen" id="ophalen"  placeholder="ophalen" value="nee" />
						<input style="width: 80%" type="checkbox" class="form-control" name="ophalen" id="ophalen"  placeholder="ophalen" value="ja" />
               
			</td></tr>
        <tr>
            <td>
                <br><br>
            
                        <input style="width: 101%" type="submit" id="button2" class="button button1" action="medicijnaanpassen_parse.php" method="post"/>
           </td>
        </tr>
    
        <tr>
            <td>

           </td>
        </tr>
		
    </table>
</form>

</div>
		
</body>


<button onclick="location.href='./medicijnaanpassen.php'" type="button" style="width: 20%; float:right;"  class="button button1" > Terug </button>
<br>
<br><br>
<footer>
    <?php include 'footer.php'; ?>
</footer>
		 
</html>