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

    <form id="login" class="table" method="post" action="loginpatient_parse"  ;>
    <table>
        <tr>
      <br>
            <td>Verzekeringsnummer<br><hr></td></tr>
              <tr><td><input type="text" name="email"></td></tr>

        <tr>
            <td>E-mail<br><hr></td></tr>
              <tr><td><input type="email" name="wachtwoord"></td>
        </tr>
        <tr>
            <td>Geboortedatum<br><hr></td></tr>
              <tr><td><input type="date" name="wachtwoord"></td>
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
