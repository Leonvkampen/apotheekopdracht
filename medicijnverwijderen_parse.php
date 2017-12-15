
<?php

session_start();

include 'db_connect.php';

$deletemedicijn = "DELETE FROM `medicijn`
				WHERE `idMedicijn` = '".$_GET['idMedicijn']."'";

$resultmedicijn = mysqli_query($connection, $deletemedicijn);






header('Location: medicatie.php');
?>



