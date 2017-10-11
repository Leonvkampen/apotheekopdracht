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
        
            <p> Medicijn 1 </p>
            <select name="med1" type="med1">
                <?php echo $option; ?>
           
              </select>
            
            <p> Medicijn 2 </p>
            <select name="med2" type="med2">
                <?php echo $option; ?>
           
              </select>
            
			<p> Medicijn 3 </p>
            <select name="med3" type="med3">
                <?php echo $option; ?>
           
              </select>
			  
			<p> Medicijn 4 </p>
            <select name="med4" type="med4">
                <?php echo $option; ?>
           
              </select>
			  
			<p> Medicijn 5 </p>
            <select name="med5" type="med5">
                <?php echo $option; ?>
           
              </select>
			  
			<p> Medicijn 6 </p>
            <select name="med6" type="med6">
                <?php echo $option; ?>
           
              </select>
			  
			<p> Medicijn 7 </p>
            <select name="med7" type="med7">
                <?php echo $option; ?>
           
              </select>
			  
			<p> Medicijn 8 </p>
            <select name="med8" type="med8">
                <?php echo $option; ?>
           
              </select>
			  
			<p> Medicijn 9 </p>
            <select name="med9" type="med9">
                <?php echo $option; ?>
           
              </select>
			  
			<p> Medicijn 10 </p>
            <select name="med10" type="med10">
                <?php echo $option; ?>
           
              </select>
          
            
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