<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css"></link>
<link href="datetimepicker/sample in bootstrap v2/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>

<body>
	<?php include 'navbar.php'; ?>
    <h1 style="text-align: center;">Inloggen patient</h1>
<div class="form" style="margin-left:43.5%; text-align: center" >
    <div>

    <form id="login" class="table" method="post" action="loginpatient_parse.php";>
    <table>
        <tr>
      <br>
            <td>Verzekeringsnummer<br><hr></td></tr>
              <tr><td><input type="text" name="Verzekeringsnummer"></td></tr>

        <tr>
            <td>E-mail<br><hr></td></tr>
              <tr><td><input type="email" name="email"></td>
        </tr>
        <tr>
            <td>Geboorteplaats<br><hr></td></tr>
              <tr><td><input type="text" name="Geboorteplaats"></td>
        </tr>
        <tr>
            <td>
            <div style="margin-top:30px;"><input type="submit" name="inloggen" value="Inloggen" class="button button1"></div></td>
        </tr>
    </table>
</form>
</div>
  </div>
     <div style="text-align: center;">
        <button onclick="location.href='./index.php'" type="button" style="width: 250px;"  class="button button1" > Terug naar home </button>
        </div>
</body>
<br><br>
<footer>
    <?php include 'footer.php'; ?>
</footer>
