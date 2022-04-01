<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sesja 1</title>
  </head>
  <body>
    <h4>Sesja 1</h4>
<?php
  session_start();
  $_SESSION['name'] = "Janusz";
  $_SESSION['surname'] = "Nowak";
 ?>
 <a href="./2_session.php">Sesja 2</a>
  </body>
</html>
