<!DOCTYPE html>
<html lang="en">
<head style="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<link href="datetimepicker/sample in bootstrap v2/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>


<body>
    <?php include 'navbar_apotheker.php'; ?>
    <div>
    <h1 style="text-align: center;">Maak hier een medicijn aan</h1>
    </div>
    
    <div class="form" style="margin-left:43.5%; text-align: center">
	<form id="medicijnmaken" class="table" method="post" action="medicijnmaken_parse.php"  ;>
	<table>
        <tr>
      <br>
            <td>Medicatie naam<br></td></tr>
              <tr><td><input type="naam" name="naam"></td></tr>

        <tr>
            <td>Medicatie Omschrijving<br></td></tr>
              <tr><td><input type="omschrijving" name="omschrijving"></td>
        </tr>
		<tr>
            <td>Medicatie aantal<br></td></tr>
              <tr><td><input type="aantal" name="aantal"></td>
        </tr>
		<tr>
            <td>Medicatie Maximale aantal<br></td></tr>
              <tr><td><input type="maximaleaantal" name="maximaleaantal"></td>
        </tr>
        <tr>
            <td>
            <div style="margin-top:30px;"><input type="submit" name="medicijnmaken" value="Medicijn Aanmaken" class="button button1"></div></td>
        </tr>
    </table>
	</form>
			<button onclick="location.href='./medicatie.php'" type="button" style="width: 250px; float: right;"  class="button button1" > Terug </button>
	</div>
</body>
<br><br><br>
<footer>

</footer>
</html>
