<?php
    session_start();
	

	//var_dump($_SESSION); 
	include("db_connect.php");
	$query = "SELECT * FROM `order`";
	
	$result = mysqli_query($connection, $query);
	//var_dump($result);
		
	//var_dump($_GET["levertijd"]);
	
	date_default_timezone_set("Europe/Amsterdam");
    $now = date("G:i");
    //var_dump($now);
    $begin = ('00:00');
    $end = ('13:30');
?>

<!DOCTYPE html>
<html lang="en">
<link   rel="stylesheet" type="text/css" href="style.css">
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
<form class="table" method="post" style="margin-left: 22%;" action="leveringstijdveranderen_parse.php">
    <table style="margin-left: 22%;">
			<tr>
				<td>
					Huidige leveringsdatum & tijd
					<input style="width: 100%" placeholder="nieuwe leveringstijd" value="<?= 'Bezorgt op: ', $_GET["leverdatum"] ,' om:', $_GET["levertijd"]; ?>"  readonly>
				</td>
			</tr>
			<tr>
			<br><br>
			</tr>
			
            <tr>
			<input type="hidden" name="orderid" id="nieuweorderid" value="<?= $_GET["orderid"] ?>">
                <td>Nieuwe leveringsdatum + tijd	
				<?php
                            if ($now >= $begin && $now <= $end)
                            {
                                echo "<div class='input-group date' id='nieuweleverdatumtijd'>
                                    <input type='text' style='align:center;' class='form-control' name='leverdata'/>
                                    <span style='width: 14%;  padding-left:15%;' class='input-group-addon'>
                                        <span style='width: 14%' class='glyphicon glyphicon-calendar'></span>
                                    </span>
                                </div>";
                            }
                            else
                            {
                                echo "<div class='input-group date' id='nieuweleverdatumtijd2'>
                                   <input type='text' style='align:center;' class='form-control' name='leverdata'/>
                                    <span style='width: 14%;  padding-left:15%;' class='input-group-addon'>
                                        <span style='width: 14%' class='glyphicon glyphicon-calendar'></span>
                                    </span>
                                </div>";
                            }
                            ?>
                               
                                <script type="text/javascript">
                                $(function () {
                                    var start = new Date();
                                    $('#nieuweleverdatumtijd').datetimepicker({
                                        startDate: start,
                                        format: "yyyy-mm-dd hh:ii:00",
                                        locale: 'ru',
                                        autoclose: true,
                                        hoursDisabled: '0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13,, 14, 21, 22, 23',
                                        minuteStep: 10
                                    });
                                });
                                </script>
                                <script type="text/javascript">
                                $(function () {
                                    var start = new Date();
                                    start.setDate(start.getDate() + 1);
                                    $('#nieuweleverdatumtijd2').datetimepicker({
                                        startDate: start,
                                        format: "yyyy-mm-dd hh:ii:00",
                                        locale: 'ru',
                                        autoclose: true,
                                        hoursDisabled: '0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 21, 22, 23',
                                        minuteStep: 10
                                    });
                                });
								
								
								
								
								
                                </script>
			</td>
			
        </tr>
		<tr>
		<td>
			<input style="width: 101%" type="submit" id="leveringsbutton" class="button button1" action="levertijdveranderen_parse.php" method="post"/>
           </td>
		</tr>
 <tr>
			<td>
			<button onclick="location.href='./leveringstijdveranderen.php'" type="button" style="width: 101%;"  class="button button1" > Terug </button>
			</td>
 </tr>
 </table>
</form> 
    
</div>
</body>
</html>