<?php
    session_start();
	

	//var_dump($_SESSION); 
	include("db_connect.php");
	$query = "SELECT * FROM `order`";
	
	$result = mysqli_query($connection, $query);
	//var_dump($result);
		
	//var_dump($_GET["levertijd"]);
	
	
?>

<!DOCTYPE html>
<html lang="en">
<link   rel="stylesheet" type="text/css" href="css/style.css">



</head>

<body>
<div>
<form class="table" method="post" style="margin-left: 22%;" action="leveringstijdveranderen_parse.php">
    <table style="margin-left: 22%;">
			<tr>
				<td>
					Huidige leveringstijd
					<input style="width: 100%" placeholder="nieuwe leveringstijd" value="<?= $_GET["levertijd"] ?>" readonly>
				</td>
			</tr>
			<tr>
			<br><br>
			</tr>
			
            <tr>
			<input type="hidden" name="orderid" id="nieuweorderid" value="<?= $_GET["orderid"] ?>">
                <td>Nieuwe leveringstijd	
						
                        <input name="levertijd" id="nieuwelevertijd" style="width: 100%" type="time" placeholder="nieuwe leveringstijd" value="">
                <br><br>
            
                        <input style="width: 101%" type="submit" id="leveringsbutton" class="button_account" action="leveringstijdveranderen_parse.php" method="post"/>
           </td>
        </tr>
		</table>
		</form>
		
		<br><br><br><br><br>
 <table style="margin-left: 36%; width: 25%">
 <tr>
			<td>
			<button onclick="location.href='./leveringstijdveranderen.php'" type="button" style="width: 101%;"  class="button" > Terug </button>
			</td>
 </tr>
 </table>   
    
</div>
</body>
</html>