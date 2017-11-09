
<?php
	session_start();
	include 'db_connect.php';

	

$timezone = date_default_timezone_set('Europe/Amsterdam');
$date = date('H:i:s');
/*
if ($date < '12:28:00' )
{
	echo "Hello";
}
else
{
	echo "goodbye";
}

echo $date;
*/


?>
<!DOCTYPE html>
<html lang="en">
<head style="">
<link type="text/css" rel="stylesheet" href="style.css">



</head>


<body>
	<?php include 'navbar.php'; ?>
	<br>
    <div>
		<button onclick="location.href='./index.php'" type="button" style="width: 250px; float:right;"  class="button button1" > Uitloggen </button>
		<br>
		<br>
	</div>
    <div>
	<br>
    <h1 class="h1" style="margin-left:20px;">Klanthome</h1>
    </div>
	<br>
    </div>
	<div style="text-align:center;">



	 	<button onclick="location.href='./klantgegevens.php'" type="button" style="width: 250px;"  class="button button1" > Klantgegevens </button>
        <br>
        <br>
        <button onclick="location.href='./leveringstijdveranderen_doorstuur.php'" type="button" style="width: 250px;"  class="button button1" > Leveringstijd veranderen </button>
		<br>
        <br>

        <!--<button onclick="location.href='./login.php'" type="button" style="width: 250px;"  class="button button1" > Agenda site </button> -->
	</div>
	
	
	
</body>

<br><br><br>
<footer>
    <?php include 'footer.php'; ?>
</footer>
	
</html>
