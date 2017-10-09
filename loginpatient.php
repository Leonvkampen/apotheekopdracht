<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css"></link>
</head>

<body>
 
    <h1 style="text-align: center;">Inloggen</h1>
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
            <div style="margin-top:30px;"><input type="submit" name="inloggen" value="Inloggen"></div></td>
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
