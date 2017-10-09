<?php session_start(); 
    
    include 'db_connect.php';

    $select_user = "SELECT * FROM patient WHERE email = '{$_SESSION["Email"]}'";

    $result = mysqli_query($connection, $select_user);

    $row = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" type="text/css" href="css/style.css">
    
</head>
<body>
  
    <h1 style="text-align: center;">Accountgegevens aanpassen</h1>
<div>
<h3 style="text-align: center;">Voer alles in. Als u iets niet wilt wijzigen moet u uw huidige gegevens invoeren.</h3>
<form class="table" method="post" style="margin-left: 22%;" action="klantgevensaanpassen_wijzigen.php">
    <table style="margin-left: 22%;">
            <tr>
                <td>Geboorteplaats:			
                        <input style="width: 100%" type="text" class="form-control" name="geboorteplaats" id="geboorteplaats"  placeholder="Vul uw geboorteplaats in" value="<?= $row["geboorteplaats"] ?>"/>
                </td>
            </tr>
        
          <tr>
            <td>Naam:				
						<input style="width: 100%" type="text" class="form-control" name="Naam" id="Naam"  placeholder="Vul uw Naam in" value="<?= $row["Naam"] ?>"/>
			</td></tr>
        </tr>
          <tr>
            <td>Patientdata:				
						<input style="width: 100%" type="text" class="form-control" name="patientdata" id="patientdata"  placeholder="Vul uw patientdata in" value="<?= $row["patientdata"] ?>"/>
			</td></tr>
        </tr>
          <tr>
            <td>Adres: <div>				
						<input style="width: 100%" type="text" class="form-control" name="adres" id="adres"  placeholder="Vul uw adres in" value="<?= $row["adres"] ?>" />
			</td></tr>
    <tr>
            <td>Postcode: 			
						<input style="width: 100%" type="text" class="form-control" name="postcode" id="postcode" placeholder="Vul uw postcode in" value="<?= $row["postcode"] ?>"/>
			</td></tr>
        
        <tr>
            <td>
                <br><br>
            
                        <input style="width: 101%" type="submit" id="button2" class="button_account" action="accountgegevens_wijzigen_ingelogd_klant.php" method="post"/>
           </td>
        </tr>
    
        <tr>
            <td>
 <button onclick="location.href='./klantgegevens.php'" type="button" style="width: 101%;"  class="button" > Terug </button>
           </td>
        </tr>
    
    </table>
</form>
</div>
</body>
<br><br>
<footer>
    <?php include 'footer.php'; ?>
</footer>
</html>