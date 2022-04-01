<?php
  $text = <<< TEXT
    WSB - Wyższa Szkoła
    Bankowa<br>
TEXT;
echo "$text<br>";

echo nl2br($text);

$lorem="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>";

echo $lorem;
echo wordwrap($lorem, 40, "<br>");
echo wordwrap($lorem, 40, "<hr>");
ob_clean();

$name1="Anna";
$name2="  Anna ";
echo "Ilość znaków w zmiennej \$name1: ".strlen($name1)."<br>";
echo "Ilość znaków w zmiennej \$name2: ".strlen($name2)."<br>";

echo strlen(ltrim($name2)); //5
echo strlen(rtrim($name2)); //6
echo strlen(trim($name2))."<br>"; //4

$name="jANUsz";
echo strtolower($name);
echo strtoupper($name);
$text="janUSz kOWalskI";
echo ucfirst($text);
echo ucwords($text);

echo ucwords(strtolower($text));

$x=1;
$y=1.0;

echo gettype($x); //integer
echo gettype($y); //double

if ($x==$y) {
  echo "równe";
}else {
  echo "różne";
}

if ($x===$y) {
  echo "identyczne<hr>";
}else {
  echo "nieidentyczne<hr>";
}

// substr
echo substr("Janusz", 2)."<br>"; //nusz
echo substr("Janusz", 2, 3)."<br>"; //nus
echo substr("Janusz", -2)."<br>"; //sz

// strpos
echo strpos("Janusz Kowalski", "a")."<br>"; //1

// str_replace
echo str_replace("a", " _***_ ", "Janusz Kowalski")."<br>";
echo str_replace(["a", "u"], " _***_ ", "Janusz Kowalski")."<br>";
echo str_replace(["a", "u"], ["A", "U"], "Janusz Kowalski")."<br>";

// mail jan@gmail.com => gmail.com
echo substr("jan@gmail.com", strpos("jan@gmail.com", "@")+1);
echo substr("agnieszka@wp.pl", strpos("agnieszka@wp.pl", "@")+1);
 ?>
