<?php

# LOOPS

$x = 0;

while($x <= 100){
  echo "The number into WHILE is $x <br>";
  $x+=10;
}

echo "<br> - - - - - - - <br>";

$y = 1;

do {
  echo "The number into DO-WHILE is $y <br>";
  $y++;
} while ($y<=5);

echo "<br> - - - - - - - <br>";

for($i=0;$i<=9;$i++){
    echo "The number into FOR is $i <br>";
}

echo "<br> - - - - - - - <br>";

$cars = array("BMW","Renault","Ford","Jaguar","Toyota","Mercedes");

// Recorre el array completo sin necesidad de tantos pasos

foreach($cars as $a){
    echo "The car into FOREACH is  $a <br>";
}

echo "<br> - - - - - - - <br>";

$kmCars = array("BMW"=>"140","Renault"=>"10","Ford"=>"40","Jaguar"=>"460","Toyota"=>"0","Mercedes"=>"360");

foreach ($kmCars as $car => $km){
    echo "Car into FOREACH is $car and km is $km <br>";
}

echo "<br> - - - - - - - <br>";

for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x (using break)<br>";
}

for ($x = 0; $x < 6; $x++) {
  if ($x == 4) {
    continue; // omite el valor 4 (omite la condicion)
  }
  echo "The number is: $x (using continue)<br>";
}


?>