<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" type="text/css" href="css/style.css">
    
</head>
<body>
  
    <h1 style="text-align: center;">Accountgegevens aanpassen</h1>
<div>
<h3 style="text-align: center;">Voer alles in. Als u iets niet wilt wijzigen moet u uw huidige gegevens invoeren.</h3>
<form class="table" method="post" style="margin-left: 22%;" action="accountgegevens_wijzigen_ingelogd_klant.php">
    <table style="margin-left: 22%;">
        <tr>
            <td>Voornaam:			
						<input style="width: 100%" type="text" class="form-control" name="voornaam" id="voornaam"  placeholder="Vul uw voornaam in"/>
			</td>
        </tr>
            <tr>
                <td>Tussenvoegsel:			
                        <input style="width: 100%" type="text" class="form-control" name="tussenvoegsel" id="tussenvoegsel"  placeholder="Vul uw tussenvoegsel in"/>
                </td>
            </tr>
        <tr>
            <td>Achternaam:			
						<input style="width: 100%" type="text" class="form-control" name="achternaam" id="achternaam"  placeholder="Vul uw achternaam in"/>
			</td>
        </tr>
          <tr>
            <td>Woonplaats:				
						<input style="width: 100%" type="text" class="form-control" name="woonplaats" id="woonplaats"  placeholder="Vul uw woonplaats in"/>
			</td></tr>
        </tr>
          <tr>
            <td>Postcode:				
						<input style="width: 100%" type="text" class="form-control" name="postcode" id="postcode"  placeholder="Vul uw postcode in"/>
			</td></tr>
        </tr>
          <tr>
            <td>Adres: <div>				
						<input style="width: 100%" type="text" class="form-control" name="adres" id="adres"  placeholder="Vul uw adres in" />
			</td></tr>
        </tr>
          <tr>
            <td>Telefoonnummer: 			
						<input style="width: 100%" type="text" class="form-control" name="telefoonnummer" id="telefoonnummer"              placeholder="Vul uw telefoonnummer in"/>
			</td></tr>
        
        <tr>
            <td>
            
                        <input style="width: 101%" type="submit" id="button2" class="button_account" action="accountgegevens_wijzigen_ingelogd_klant.php" method="post"/>
           </td>
        </tr>
    
        <tr>
            <td>
            <br><br>
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