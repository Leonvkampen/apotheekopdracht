<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css"></link>
</head>

<body>
 
    <h1 style="text-align: center;">Inloggen apotheek</h1>
<div class="form" style="margin-left:43.5%; text-align: center" >
    <div>

    <form id="login" class="table" method="post" action="loginapotheek_parse.php"  ;>
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
    <div style="text-align: center;">
        <button onclick="location.href='./index.php'" type="button" style="width: 250px;"  class="button" > Terug naar home </button>
        </div>
</body>
<br><br>
<footer>
    <?php include 'footer.php'; ?>
</footer>
