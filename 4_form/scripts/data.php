<?php
  echo "<h4>Dane użytkownika</h4>";
  // echo $_POST['name'];
  // print_r($_POST);

  $error=0;
  if (!isset($_POST['gender'], $_POST['terms'])) {
    $error=1;
  }

  foreach ($_POST as $key => $value) {
    if (empty($value)) {
      $error=1;
    }
  }

  if ($error != 0) {
    echo "<script>history.back();</script>";
    exit();
  }



 ?>
