<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
<?php 
    include 'db_connect.php';
?>
  
    <h1 style="text-align: center;">Gegevens</h1>
<div class="form" style="margin-left: 25%; height:50%;">
    <form id="klantgegevens" class="table" method="post" style="margin-left: 22%;">
    <table>
        <?php
            $query_user = "SELECT * FROM patient WHERE email = '{$_SESSION["Email"]}'";

            $result = mysqli_query($connection, $query_user);

            $row = mysqli_fetch_assoc($result);
        ?>
        <tr>
            <td>Verzekeringsnummer: <strong><?= $row["Verzekeringsnummer"] ?></strong></td>
        </tr>
          <tr>
            <td>Geboorteplaats: <strong><?= $row["geboorteplaats"] ?></strong></td>
        </tr>
         <tr>
            <td>Email: <strong><?= $row["Email"] ?></strong></td>
        </tr>
          <tr>
            <td>Naam: <strong><?= $row["Naam"] ?></strong></td>
        </tr>
          <tr>
            <td>Patientdata: <strong><?= $row["patientdata"] ?></strong></td>
        </tr>
          <tr>
            <td>Adres: <strong><?= $row["adres"] ?></strong></td>
        </tr>
          <tr>
            <td>Postcode: <strong><?= $row["postcode"] ?></strong></td>
        </tr>
          
        <tr>
            <td>
            <div>
        <br>
        <br>
	 	<button onclick="location.href='./klantgevensaanpassen.php'" type="button" style="width: 250px;"  class="button" > Klant gegevens aanpassen </button>
                <br>
                <button onclick="location.href='./klanthome.php'" type="button" style="width: 250px;"  class="button" > Terug naar home </button>
        <br>
	</div>
            </td>
        </tr>
    </table>
</form>
</div>
  </div>
</body>
<br><br>
<footer>
<?php include 'footer.php'; ?>
</footer>
</html>

