<?php
    session_start();
	


  $date = $_GET["leverdatum"];
$date1 = str_replace('/', '-', $date);
$tomorrow = date('Y-m-d',strtotime($date1 . "+1 days"));

echo $tomorrow;





	include("db_connect.php");
	$query = "SELECT * FROM `order`";
	
	$result = mysqli_query($connection, $query);
	
?>

<!DOCTYPE html>
<html lang="en">
<link   rel="stylesheet" type="text/css" href="css/style.css">
<link href="datetimepicker/sample in bootstrap v2/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
  <script type="text/javascript" src="datetimepicker/sample in bootstrap v2/jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
  <script type="text/javascript" src="moment.js" charset="UTF-8"></script>
  <script type="text/javascript" src="datetimepicker/sample in bootstrap v2/bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="datetimepicker/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
  <script type="text/javascript" src="datetimepicker/js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>


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
						
                        <input name="leverdatum" id="nieuweleverdatum" style="width: 100%" type="text" placeholder="nieuwe leveringstijd" value="<?= $tomorrow ?>" readonly>
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