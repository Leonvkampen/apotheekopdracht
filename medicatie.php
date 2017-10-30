<!DOCTYPE html>
<?php
session_start();

    include 'db_connect.php';

?>

<html lang="en">
<head style="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<link href="datetimepicker/sample in bootstrap v2/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">

</head>


<body>
    <?php include 'navbar_apotheker.php'; ?>
    <div>
    <h1 style="text-align: center;">Medicatie</h1>
    </div>

    </div>
	<div style="text-align:center;">

	 	<button onclick="location.href='./medicijnmaken.php'" type="button" style="width: 250px;"  class="button button1" > Medicatie Aanmaken </button>
        <br>
        <br>
        <button onclick="location.href='./medicijnaanpassen.php'" type="button" style="width: 250px;"  class="button button1" > Medicatie Wijzigen </button>
		<br>
        <br>
        <button onclick="location.href='./medicijnverwijderen.php'" type="button" style="width: 250px;"  class="button button1" > Medicatie Verwijderen </button>
		<br>
        <br>
        
	</div>
	
</body>
<br><br><br>
<footer>
    <?php include 'footer.php'; ?>
</footer>
<div style="text-align:right;">
		<button onclick="location.href='./apothekerhome.php'" type="button" style="width: 250px;"  class="button button1" > Terug </button>
	</div>
</html>
