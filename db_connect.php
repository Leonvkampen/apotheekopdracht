<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "apotheek";
	
	$connection = mysqli_connect($servername, $username, $password, $dbname) or die("Fout geen server-verbinding".mysqli_error($connection));
?>