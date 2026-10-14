<?php
echo "Wybierz figurę:" . PHP_EOL;
echo "1 - sześcian" . PHP_EOL;
echo "2 - kula" . PHP_EOL;
echo "3-prostopadłościan" . PHP_EOL;

$wybor = (int) readline("twoj wybor:";
switch($wybor){
 case 1:
  $a = (float) readline("podaj bok szescianu");
  $obj = $a ** 3;
  break;
 case 2: 
  $r = (float) readline("podaj promien");
  $obj = (4/3) * pi() *$r ** 3;
  break;
 case 3:
  $a = (float) readline("dlugosc:");
  $b = (float) readline("wys:");
  $c = (float) readline("szer:");
  $obj = $a * $b * $c;
  break;


 default:
  echo "zly wybor";
  exit;
}
echo "objetosc wynosi: " . round($obj, 2) . "" . PHP_EOL
