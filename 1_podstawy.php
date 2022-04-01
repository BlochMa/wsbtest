<?php
  $name="Janusz";
  echo "Imię: $name<br>";
  echo 'Imię: $name<br>';

// heredoc
$surname="Nowak";
$city="Poznań";
echo <<< E
  Imię i nazwisko: $name $surname<br>
  Miasto: $city<hr>
E;
// nowdoc
echo <<< 'E'
  Imię i nazwisko: $name $surname<br>
  Miasto: $city<hr>
E;
