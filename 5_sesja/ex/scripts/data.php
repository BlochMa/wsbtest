<?php
  session_start();
  echo "<h4>Dane użytkownika</h4>";
  // echo $_POST['name'];
  // print_r($_POST);

  $error=0;
  if (!isset($_POST['gender'], $_POST['terms'])) {
    if (!isset($_POST['terms'])) {
      $_SESSION['error'] = "Zatwierdź regulamin";
    }
    if (!isset($_POST['gender'])) {
      $_SESSION['error'] = "Zaznacz płeć";
    }
    $error=1;
  }

  foreach ($_POST as $key => $value) {
    if (empty($value)) {
      $error=1;
      $_SESSION['error'] = "Wypełnij wszystkie dane";
    }
  }

  if ($error != 0) {
    echo "<script>history.back();</script>";
    exit();
  }

echo "<br>Dane przed poprawą:</br>";
foreach ($_POST as $key => $value) {
  echo "$value<br>";
}

echo "<br>Dane po poprawie:</br>";
foreach ($_POST as $key => $value) {
  if ($key != "terms") {
    if ($key == "gender") {
      switch ($value) {
        case 'man':
          echo "Mężczyzna";
          break;
        case 'woman':
          echo "Kobieta";
          break;
        default:
          echo "-";
          break;
      }
    }else{
      echo substr(ucfirst(strtolower(trim($value))), 0, 10)."<br>";
    }
  }
}

 ?>
