<?php
    session_start();
	require("db_connect.php");

	$query = "SELECT * FROM `medicijn`";
 
	$result = mysqli_query($connection, $query);


    $orderid = $_GET['orderid'];
    $_SESSION["orderid"] = $orderid;
   

	
	date_default_timezone_set("Europe/Amsterdam");
    $now = date("G:i");
    
    $begin = ('00:00');
    $end = ('13:30');
	
	$order = "SELECT * FROM `order`";
	
	$result = mysqli_query($connection, $query);
?>
<html lang="en">
<link rel="stylesheet" type="text/css" href="style.css">
<link href="datetimepicker/sample in bootstrap v2/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="datetimepicker/sample in bootstrap v2/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
  <script type="text/javascript" src="datetimepicker/sample in bootstrap v2/jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
  <script type="text/javascript" src="moment.js" charset="UTF-8"></script>
  <script type="text/javascript" src="datetimepicker/sample in bootstrap v2/bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="datetimepicker/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
  <script type="text/javascript" src="datetimepicker/js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>


 
</head>


		


</script>

<body>
    <?php include 'navbar_huisarts.php'; ?>
	<button onclick="location.href='./index.php'" type="button" style="width: 250px; float:right;"  class="button button1" > Loguit </button>
    
    <div>
    <h1 style="text-align: center;">Geannuleerde bestelling tijd veranderen</h1>
    </div>

    </div>
	<div style="text-align:center;">
	<form id="bestellen" method="post" action="geannuleerdebestelling_plaatsen_parse.php" ;>
	
	
            <p> Leverdatum </p>
			
                            <?php
                            if ($now >= $begin && $now <= $end)
                            {
                                echo "<div class='input-group date' id='datetimepicker1'>
                                    <input type='text' style='align:center;' class='form-control' name='leverdata'/>
                                    <span style='width: 14%;  padding-left:15%;' class='input-group-addon'>
                                        <span style='width: 14%' class='glyphicon glyphicon-calendar'></span>
                                    </span>
                                </div>";
                            }
                            else
                            {
                                echo "<div class='input-group date' id='datetimepicker2'>
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
                                    $('#datetimepicker1').datetimepicker({
                                        startDate: start,
                                        format: "yyyy-mm-dd hh:ii:00",
                                        locale: 'ru',
                                        autoclose: true,
                                        hoursDisabled: '0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 21, 22, 23',
                                        minuteStep: 10
                                    });
                                });
                                </script>
                                <script type="text/javascript">
                                $(function () {
                                    var start = new Date();
                                    start.setDate(start.getDate() + 1);
                                    $('#datetimepicker2').datetimepicker({
                                        startDate: start,
                                        format: "yyyy-mm-dd hh:ii:00",
                                        locale: 'ru',
                                        autoclose: true,
                                        hoursDisabled: '0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 21, 22, 23',
                                        minuteStep: 10
                                    });
                                });
								
								
								
								
								
                                </script>
								
        
	
		<br><br><br>
		<button type="submit" class="button button1" name="Bestellen" id="Bestellen" onClick="geannuleerdebestelling_plaatsen_parse.php">Doorsturen</button>
      </form>
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