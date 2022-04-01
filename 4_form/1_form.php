<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Form</title>
  </head>
  <body>
    <h4>Dane użytkownika</h4>
    <form method="get">
      <input type="text" name="name" placeholder="Podaj imię"><br><br>
      <input type="text" name="surname" placeholder="Podaj imię"><br><br>
      <input type="submit" value="Zatwierdź">
    </form>
<?php
  if (!empty($_GET['name'])) {
    echo "Imię: ".$_GET['name']."<br>";
  }
 ?>
  </body>
</html>
