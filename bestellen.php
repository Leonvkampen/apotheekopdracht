<?php
    
	require("db_connect.php");

	$query = "SELECT * FROM `medicijn`";
 
	$result = mysqli_query($connection, $query);

	mysqli_close($connection);

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
	<form id="bestellen" method="post" action="bestellen_parse.php" ;>
	
		
	<?php	
        
            $option = "";
            while( $row = mysqli_fetch_assoc($result) )
			{
                //var_dump($row);
				$option .= "<option>".$row["naam"]."</option>";
			} //exit;
        
            ?>
            <p> Medicijn 1 </p>
            <select>
                <?php echo $option; ?>
           
              </select>
            
                <p> Medicijn 1 </p>
            <select>
                <?php echo $option; ?>
           
              </select>
            
          
            
		<br><br><br>
		<button type="submit" class="btn btn-danger" name="medicijnBestellen" id="medicijnBestellen" onClick="bestellen_parse.php">Bestellen</button>
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