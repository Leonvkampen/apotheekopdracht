<?php
    session_start();
	

	//var_dump($_SESSION); 
	include("db_connect.php");
	$query = "SELECT * FROM `order`";
	
	$result = mysqli_query($connection, $query);
	//var_dump($result);
	
	  /*$levertijd = $_SESSION["levertijd"];
	  $_SESSION["levertijd"] = $nieuwelevertijd;
		//header("location:leveringstijdveranderen_parse.php");*/
		
		
        $levertijd = $_GET['levertijd'];
        //var_dump($levertijd);
?>

<!DOCTYPE html>
<html lang="en">
<link   rel="stylesheet" type="text/css" href="css/style.css">


</head>

<body>
    
    <div>
<form id="levertijveranderen" style="margin-left: 22%;" method="post" action="leveringstijdveranderen_parse.php">
    <table style="margin-left: 22%;">

            <tr>
            
                <td>Nieuwe leveringstijd
                        <input type="hidden" value="<?= $_GET["orderid"] ?>">
                        <input style="width: 100%" type="time" name="levertijd" id="levertijd" placeholder="nieuwe leveringstijd" value="<?= $_GET["levertijd"] ?>">
                <br><br>

                       <button type="submit" class="btn btn-danger" name="levertijdveranderen" id="medicijnBestellen" onClick="leveringstijdveranderen_parse.php">Verzenden</button>
     
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