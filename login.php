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

    <form id="login" class="table" method="post" action="login_parse.php"  ;>
    <table>
        <tr>
      <br>
            <td>Email<br><hr></td></tr>
              <tr><td><input type="email" name="email"></td></tr>

        <tr>
            <td>Wachtwoord<br><hr></td></tr>
              <tr><td><input type="password" name="wachtwoord"></td>
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
