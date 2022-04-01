<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Form</title>
  </head>
  <body>
    <h4>Dane użytkownika</h4>
<?php
  if (isset($_SESSION['error'])) {
    echo $_SESSION['error'];
  }
 ?>
    <form action="./scripts/data.php" method="post">
      <input type="text" name="name" placeholder="Podaj imię"><br><br>
      <input type="text" name="surname" placeholder="Podaj nazwisko"><br><br>
      <select name="city">
        <option value="poznan">Poznań</option>
        <option value="gniezno">Gniezno</option>
      </select><br><br>
      <input type="radio" name="gender" value="man" checked>Mężczyzna
      <input type="radio" name="gender" value="woman">Kobieta<br><br>
      <input type="checkbox" name="terms"> Regulamin<br><br>
      <input type="submit" value="Zatwierdź">
    </form>
  </body>
</html>
