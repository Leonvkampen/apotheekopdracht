<?php
    session_start();
	

	
	include("db_connect.php");
	$query = "SELECT * FROM `order`";
	
	$result = mysqli_query($connection, $query);
	
?>

<!DOCTYPE html>
<html lang="en">
<link   rel="stylesheet" type="text/css" href="css/style.css">



</head>

<body>
<div>
<form class="table" method="post" style="margin-left: 22%;" action="leverdatumveranderen_parse.php">
    <table style="margin-left: 22%;">
			<tr>
				<td>
					Huidige leverdatum
					<input style="width: 100%" placeholder="nieuwe leveringstijd" value="<?= $_GET["leverdatum"] ?>" readonly>
				</td>
			</tr>
			<tr>
			<br><br>
			</tr>
			
            <tr>
			<input type="hidden" name="orderid" id="orderid" value="<?= $_GET["orderid"] ?>">
                <td>Nieuwe leverdatum	
						
                        <input name="leverdatum" id="nieuweleverdatum" style="width: 100%" type="time" placeholder="nieuwe leveringstijd" value="">
                <br><br>
            
                        <input style="width: 101%" type="submit" id="leveringsbutton" class="button_account" action="leverdatumveranderen_parse.php" method="post"/>
           </td>
        </tr>
		</table>
		</form>
		
		<br><br><br><br><br>
 <table style="margin-left: 36%; width: 25%">
 <tr>
			<td>
			<button onclick="location.href='./leverdatumveranderen.php'" type="button" style="width: 101%;"  class="button" > Terug </button>
			</td>
 </tr>
 </table>   
    
</div>
</body>
</html>