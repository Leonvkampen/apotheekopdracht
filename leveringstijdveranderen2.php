<?php
    session_start();
	

	var_dump($_SESSION); 
	include("db_connect.php");
	$query = "SELECT * FROM `order`";
	
	$result = mysqli_query($connection, $query);
	var_dump($result);
	
	  /*$levertijd = $_SESSION["levertijd"];
	  $_SESSION["levertijd"] = $nieuwelevertijd;
		//header("location:leveringstijdveranderen_parse.php");*/
		
		
        $levertijd = $_GET['levertijd'];
        var_dump($levertijd);
?>

<!DOCTYPE html>
<html lang="en">
<link   rel="stylesheet" type="text/css" href="css/style.css">


</head>

<body>
<form class="table" method="post" style="margin-left: 22%;" action="leveringstijdveranderen_parse.php">
    <table style="margin-left: 22%;">
            <tr>
                <td>Nieuwe leveringstijd			
                        <input style="width: 100%" type="time" placeholder="nieuwe leveringstijd" value="<?= $_GET["levertijd"] ?>">
                <br><br>
            
                        <input style="width: 101%" type="submit" id="leveringsbutton" class="button_account" action="leveringstijdveranderen_parse.php" method="post"/>
           </td>
        </tr>
		
        <tr>
            <td>
 <button onclick="location.href='./leveringstijdveranderen.php'" type="button" style="width: 101%;"  class="button" > Terug </button>
           </td>
        </tr>
    
    </table>
</form>
</body>
</html>