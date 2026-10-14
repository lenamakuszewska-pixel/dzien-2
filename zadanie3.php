<?php
$plik = "przyklad.txt";
file_put_contents($plik, "Pierwsza linia tekstu\n");
file_put_contents($plik, "Dopisany tekst\n", FILE_APPEND);
$tresc = file_get_contents($plik);
echo $tresc;

exec("ls -lah", $wynik, $kod);
foreach ($wynik as $i => $linia) {
    echo $i . ": " . $linia . PHP_EOL;
}
