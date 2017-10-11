<?php
ob_start();
session_start();

include("db_connect.php");

	if ( isset($_POST["orderid"]) || trim($_POST["orderid"]) == '' OR
	    !isset($_POST["aantal"]) || trim($_POST["aantal"]) == '' OR
	    !isset($_POST["med1"]) || trim($_POST["med1"]) == '' OR
		!isset($_POST["med2"]) || trim($_POST["med2"]) == '' OR
		!isset($_POST["med3"]) || trim($_POST["med3"]) == '' OR
		!isset($_POST["med4"]) || trim($_POST["med4"]) == '' OR
		!isset($_POST["med5"]) || trim($_POST["med5"]) == '' OR
		!isset($_POST["med6"]) || trim($_POST["med6"]) == '' OR
		!isset($_POST["med7"]) || trim($_POST["med7"]) == '' OR
		!isset($_POST["med8"]) || trim($_POST["med8"]) == '' OR
		!isset($_POST["med9"]) || trim($_POST["med9"]) == '' OR
        !isset($_POST["med10"]) || trim($_POST["med10"]) == '')

		{
			

  
   		
		}
	
	var_dump($_POST);
	$query = "INSERT INTO `orderregel` (`orderid`
										`aantal`,
										`med1`,
										`med2`,
										`med3`,
										`med4`,
										`med5`,
										`med6`,
										`med7`,
										`med8`,
										`med9`,
										`med10`)

			  VALUES 			  ('".$_POST["orderid"]."',
								   '".$_POST["aantal"]."',
								   '".$_POST["med1"]."',
								   '".$_POST["med2"]."',
								   '".$_POST["med3"]."',
								   '".$_POST["med4"]."',
								   '".$_POST["med5"]."',
								   '".$_POST["med6"]."',
								   '".$_POST["med7"]."',
								   '".$_POST["med8"]."',
								   '".$_POST["med9"]."',
								   '".$_POST["med10"]."')";

								   
	$result = mysqli_query($connection, $query);
	
	
	
?>
<br><br><br>
</html>
