<?php

echo "Podaj swój rok urodzenia: ";
$rok_urodzenia = (int) readline('Podaj rok urodzenia');
$wiek = (int) date('Y') - $rok;

echo "Masz aktualnie lat: " . $wiek . PHP_EOL;

$imie = readline("Imię:");
$nazwisko = readline("Nazwisko:");

$miesiac = (int) readline('podaj miesiąc(liczbowo):');
$dzien = (int) readline('podaj dzień:');

$pesel = "";
if ($rok >= 2000){
 $pesel = ($rok % 100) . ($miesiac + 20) . str_pad($dzien, 2, "0", STR_PAD_LEFT);
} else{
 $pesel = ($rok % 100) . $miesiac . $dzien;
}

$rand = rand(0,9999);
$pesel = $pesel . $rand;
$pesel = $pesel . sumaKontrolna($pesel);
function sumaKontrolna(string $pesel){
 $wagi = [1, 3, 7, 9, 1, 3, 7, 9, 1, 3];
 $suma = 0;
 for ($i = 0; $i < 10; $i++){
  $suma += (int) $pesel[$i] * $wagi[$i];
 }
 return(10-($suma % 10) % 10);
}
echo "Twój nowy pesel to: " . $pesel;
