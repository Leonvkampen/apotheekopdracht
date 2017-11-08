<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head style="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<link href="datetimepicker/sample in bootstrap v2/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">

</head>


<body>
    <?php include 'navbar_huisarts.php'; ?>
	<button onclick="location.href='./index.php'" type="button" style="width: 250px; float:right;"  class="button button1" > Loguit </button>
	<Br>
	<br>
	<br>
    <div>
    <h1 style="text-align: center;">Huisartshome</h1>
    </div>

    </div>
	<div style="text-align:center;">

	 	<button onclick="location.href='./klantaanmaken.php'" type="button" style="width: 250px;"  class="button button1" > Patient aanmaken </button>
        <br>
        <br>
        <button onclick="location.href='./bestellen_stap1.php'" type="button" style="width: 250px;"  class="button button1" > Bestelling plaatsen </button>
		<br>
        <br>
        <button onclick="location.href='./commentarenklant.php'" type="button" style="width: 250px;"  class="button button1" > commentaren         </button>
        <br>
        <br>
        <button onclick="location.href='./geannuleerdebestelling.php'" type="button" style="width: 250px;"  class="button button1" >geannuleerde bestellingen</button>
        
	</div>
</body>
<br><br><br>
<footer>
    <?php include 'footer.php'; ?>
</footer>
</html>
