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
	<button onclick="location.href='./index.php'" type="button" style="width: 250px; float:right;"  class="button button1" > Loguit </button>
	<Br>
	<br>
	<br>
    <div>
    <h1 style="text-align: center;">Apothekerhome</h1>
    </div>

    </div>
	<div style="text-align:center;">

	 	<button onclick="location.href='./voorraadaanpassen.php'" type="button" style="width: 250px;"  class="button button1" > Voorraad aanpassen </button>
        <br>
        <br>
        <button onclick="location.href='./leveringenkoerier.php'" type="button" style="width: 250px;"  class="button button1" > Bestelling overzien </button>
		<br>
        <br>
        <button onclick="location.href='./medicatie.php'" type="button" style="width: 250px;"  class="button button1" > Medicatie </button>
		<br>
        <br>
		<button onclick="location.href='./commentarenklantapotheker.php'" type="button" style="width: 250px;"  class="button button1" > commentaren </button>
	</div>
</body>
<br><br><br>
<footer>
    <?php include 'footer.php'; ?>
</footer>
</html>
