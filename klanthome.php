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
    <h1 style="text-align: center;">Klanthome</h1>
    </div>

    </div>
	<div style="text-align:center;">

	 	<button onclick="location.href='./klantgegevens.php'" type="button" style="width: 250px;"  class="button" > Klantgegevens </button>
        <br>
        <br>
        <button onclick="location.href='./leveringstijdveranderen_doorstuur.php'" type="button" style="width: 250px;"  class="button" > Leveringstijd veranderen </button>
        <br>
        <br>
		<button onclick="location.href='./leverdatumveranderen.php'" type="button" style="width: 250px;"  class="button" > Leverdatum veranderen </button>
        <br>
        <br>
        <button onclick="location.href='./login.php'" type="button" style="width: 250px;"  class="button" > Agenda site </button>
	</div>
</body>
<br><br><br>
<footer>
    <?php include 'footer.php'; ?>
</footer>
</html>
