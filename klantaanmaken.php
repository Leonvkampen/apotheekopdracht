<!DOCTYPE html>
<html lang="en">
<head style="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/style.css">

</head>


<body>
    
    <div>
    <h1 style="text-align: center;">Maak hier uw patiënt aan</h1>
    </div>
    
    <div class="form" style="margin-left:43.5%; text-align: center">
	<form id="klantaanmaken" class="table" method="post" action="klantaanmaken_parse.php"  ;>
	<table>
        <tr>
      <br>
            <td>Patiënt naam<br><hr></td></tr>
              <tr><td><input type="naam" name="naam"></td></tr>

        <tr>
            <td>Verzekeringsnummer<br><hr></td></tr>
              <tr><td><input type="verzekeringsnummer" name="verzekeringsnummer"></td>
        </tr>
		<tr>
            <td>E-Mail<br><hr></td></tr>
              <tr><td><input type="Email" name="Email"></td>
        </tr>
		<tr>
            <td>geboorteplaats<br><hr></td></tr>
              <tr><td><input type="geboorteplaats" name="geboorteplaats"></td>
        </tr>
		<tr>
            <td>adres<br><hr></td></tr>
              <tr><td><input type="adres" name="adres"></td>
        </tr>
		<tr>
            <td>postcode<br><hr></td></tr>
              <tr><td><input type="postcode" name="postcode"></td>
        </tr>
        <tr>
            <td>
            <div style="margin-top:30px;"><input type="submit" name="klantaanmaken" value="Patiënt Aanmaken"></div></td>
        </tr>
    </table>
	</form>
	</div>
</body>
<br><br><br>
<footer>

</footer>
</html>
