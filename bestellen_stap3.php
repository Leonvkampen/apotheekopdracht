<?php
    session_start();
	require("db_connect.php");

	$query = "SELECT * FROM `medicijn`";
 
	$result = mysqli_query($connection, $query);

	mysqli_close($connection);

    $verzekeringsidd = $_SESSION["verzekeringsnummer"];


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
				$option .= "<option>".$row["naam"]."</option>";
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
			<option value="">Vul hier uw medicijn in</option>
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
        <input type="text" name="aantal10" id="aantal10" placeholder="Vul hier aantal in" value= "1" style="width:15%;"/>
          
            
			<br><br><br>
            <p> Leverdatum </p>

        <input type="date" class="form-control" name="leverdatum" id="leverdatum" style="width:15%;"/>

            <p> levertijd </p>

        <input type="time" class="form-control" name="levertijd" id="levertijd" style="width:15%;"/>

		
		<br><br><br>
		<button type="submit" class="btn btn-danger" name="medicijnBestellen" id="medicijnBestellen" onClick="bestellen_stap3_parse.php">Bestellen</button>
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