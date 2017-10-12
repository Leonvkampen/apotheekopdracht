<!DOCTYPE html>
<?php
session_start();

    include 'db_connect.php';

?>

<html lang="en">
<head style="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/style.css">

</head>


<body>
    
    <div>
    <h1 style="text-align: center;">Apothekerhome</h1>
    </div>

    </div>
	<div style="text-align:center;">

	 	<button onclick="location.href='./voorraadaanpassen.php'" type="button" style="width: 250px;"  class="button" > Voorraad aanpassen </button>
        <br>
        <br>
        <button onclick="location.href='./leveringenkoerier.php'" type="button" style="width: 250px;"  class="button" > Bestelling overzien </button>
	</div>
</body>
<br><br><br>
<footer>
    <?php include 'footer.php'; ?>
</footer>
</html>
