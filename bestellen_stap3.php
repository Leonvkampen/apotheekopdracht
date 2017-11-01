<?php
    session_start();
	require("db_connect.php");

	$query = "SELECT * FROM `medicijn`";
 
	$result = mysqli_query($connection, $query);



    $verzekeringsnummer = $_GET['verzekeringsnummer'];
    $_SESSION["verzekeringsnummer"] = $verzekeringsnummer;


    $verzekeringsidd = $_SESSION["verzekeringsnummer"];
	
	date_default_timezone_set("Europe/Amsterdam");
    $now = date("G:i");
    //var_dump($now);
    $begin = ('00:00');
    $end = ('13:30');
	
	$order = "SELECT * FROM `order`";
	
	$result = mysqli_query($connection, $query);


?>
<!DOCTYPE html>
<html lang="en">
<head style="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
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
    <?php include 'navbar.php'; ?>
    <div>
    <h1 style="text-align: center;">Huisarts bestellen</h1>
    </div>

    </div>
	<div style="text-align:center;">
	<form id="bestellen" method="post" action="bestellen_stap3_parse.php" ;>
	
		
	<?php	
			
        
            $option = "";
            while( $row = mysqli_fetch_assoc($result) )
			{
                //var_dump($row);
				$option .= "<option value='".$row['idMedicijn']."'>".$row["naam"]."</option>";
			} //exit;
			
    ?>
        
            <p> Medicijn 1 & aantal </p>
            <select name="med1" type="med1" placeholder="Vul hier uw medicijn in">
                <option>Vul hier uw medicijn in</option>
                <?php echo $option; ?>
           
              </select>
        <input type="text" name="aantal1" id="aantal1" placeholder="Vul hier aantal in" value= "1" style="width:15%;"/>
            
            <p> Medicijn 2 & aantal</p>
            <select name="med2" type="med2">
			<option>Vul hier uw medicijn in</option>
                <?php echo $option; ?>
           
              </select>
        <input type="text" name="aantal2" id="aantal2" placeholder="Vul hier aantal in" value= "1" style="width:15%;"/>
            
			<p> Medicijn 3 & aantal</p>
            <select name="med3" type="med3">
			<option>Vul hier uw medicijn in</option>
                <?php echo $option; ?>
           
              </select>
        <input type="text" name="aantal3" id="aantal3" placeholder="Vul hier aantal in"  value= "1"style="width:15%;"/>
			  
			<p> Medicijn 4 & aantal</p>
            <select name="med4" type="med4">
			<option>Vul hier uw medicijn in</option>
                <?php echo $option; ?>
           
              </select>
        <input type="text" name="aantal4" id="aantal4" placeholder="Vul hier aantal in"  value= "1"style="width:15%;"/>
			  
			<p> Medicijn 5 & aantal</p>
            <select name="med5" type="med5">
			<option>Vul hier uw medicijn in</option>
                <?php echo $option; ?>
           
              </select>
        <input type="text" name="aantal5" id="aantal5" placeholder="Vul hier aantal in"  value= "1" style="width:15%;"/>
			  
			<p> Medicijn 6 & aantal</p>
            <select name="med6" type="med6">
			<option>Vul hier uw medicijn in</option>
                <?php echo $option; ?>
           
              </select>
        <input type="text" name="aantal6" id="aantal6" placeholder="Vul hier aantal in"  value= "1" style="width:15%;"/>
			  
			<p> Medicijn 7 & aantal</p>
            <select name="med7" type="med7">
			<option>Vul hier uw medicijn in</option>
                <?php echo $option; ?>
           
              </select>
        <input type="text" name="aantal7" id="aantal7" placeholder="Vul hier aantal in"  value= "1" style="width:15%;"/>
			  
			<p> Medicijn 8 & aantal</p>
            <select name="med8" type="med8">
			<option>Vul hier uw medicijn in</option>
                <?php echo $option; ?>
           
              </select>
        <input type="text" name="aantal8" id="aantal8" placeholder="Vul hier aantal in"  value= "1" style="width:15%;"/>
			  
			<p> Medicijn 9 & aantal</p>
            <select name="med9" type="med9">
			<option>Vul hier uw medicijn in</option>
                <?php echo $option; ?>
           
              </select>
        <input type="text" name="aantal9" id="aantal9" placeholder="Vul hier aantal in" value= "1" style="width:15%;"/>
			  
			<p> Medicijn 10 & aantal</p>
            <select name="med10" type="med10">
			<option>Vul hier uw medicijn in</option>
                <?php echo $option; ?>
           
              </select>
        <input type="text" name="aantal10" id="aantal10" placeholder="Vul hier aantal in" value= "1" style="width:15%;" max='3'/>
          
            
			<br><br><br>
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
                                        hoursDisabled: '0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13,, 14, 21, 22, 23',
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
								
        <!--<input type="date" min='0' class="form-control" name="leverdatum" id="leverdatum" style="width:15%;"/> 

            <p> levertijd </p>

        <input type="time" class="form-control" name="levertijd" id="levertijd" style="width:20%;"/>
		
		-->
		<br><br><br>

		<button type="submit" class="btn btn-danger" name="medicijnBestellen" class="button button1" id="medicijnBestellen" onClick="bestellen_stap3_parse.php">Bestellen</button>

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