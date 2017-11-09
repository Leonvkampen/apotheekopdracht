<!DOCTYPE html>
<html lang="en">
<head style="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<link href="datetimepicker/sample in bootstrap v2/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">

</head>


<body>
    <?php  include 'navbar_apotheker.php'; ?>
    
    
      <h1 color="black" style="text-align: center;">Bestelling plaatsen</h1>
    
 </div>
	<form action="bestellen_stap1_check.php" method="post">
        
	<h1 color="black" style="text-align: center;"> Geef hier naam van de patient op </h1>
        <br>
		<br>
        <input style=" height: 30px; width: 500px; margin-left: 580px; text-align: center;" type="naam" placeholder="Voer hier de naam van de patient in" id="naam" name="naam"/>
	<div>
	</div>
	<div>
	<br><br><br><br>
        <button style="margin-left: 43%" type="submit" class="button button1" >Doorgaan met bestellen</button>
	  
  


</body>
<br><br><br>
<footer>
    <?php include 'footer.php'; ?>
</footer>
</html>