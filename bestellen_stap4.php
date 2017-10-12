<?php
    session_start();
	require("db_connect.php");

	$query = "SELECT * FROM `medicijn`";
 
	$result = mysqli_query($connection, $query);

	mysqli_close($connection);

  $recordsmedicijn = mysqli_fetch_all($result, MYSQLI_ASSOC);


?>
<!DOCTYPE html>
<html lang="en">
<head style="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<script type="text/javascript" src="http://services.iperfect.net/js/IP_generalLib.js"> 


</script>

<body>
    
    <div>
    <h1 style="text-align: center;">Uw bestelling is geplaatst</h1>
	<?php echo $recordsmedicijn; ?>
    </div>
	
	

    </div>
	<div style="text-align:center;">
	
	  </div>
  </div>
 <!--</table>-->
</div>
</body>
<br><br><br>
<footer>
    <?php include 'footer.php'; ?>
</footer>
</html>