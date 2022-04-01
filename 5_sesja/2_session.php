<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sesja 2</title>
  </head>
  <body>
    <h4>Sesja 2</h4>
<?php
  echo $_SESSION['name'];
  echo $_SESSION['surname'];
  unset($_SESSION['surname']);
  echo "<br>Identyfikator sesji: ".session_id();
 ?>
 <br><a href="./3_session.php">Sesja 3</a>
  </body>
</html>
