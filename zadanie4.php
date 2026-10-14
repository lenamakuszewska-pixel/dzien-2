<?php

class Samochod {
    public $waga;
    public $data_przegladu;
    public $marka;
    public $kolor;
    public $tablica_rejestracyjna;
    public $punkty_karne = 0;

    public function dodajPunkty($punkty) {
        $this->punkty_karne += $punkty;
    }

    public function czyDopuszczonyDoRuchu() {
        $dzisiaj = date('Y-m-d');
        if ($this->waga < 3500 && $this->data_przegladu > $dzisiaj) {
            return "Dopuszczony do ruchu";
        } else {
            return "Niedopuszczony do ruchu";
        }
    }
}

$vw = new Samochod();
$vw->waga = 1300;
$vw->data_przegladu = "2027-05-10";
$vw->kolor = "czerwony";
$vw->tablica_rejestracyjna = "CB12345";
$vw->dodajPunkty(5);

$bmw = new Samochod();
$bmw->waga = 1500;
$bmw->data_przegladu = "2025-01-01";
$bmw->kolor = "czarny";
$bmw->tablica_rejestracyjna = "CB67890";

$mercedes = new Samochod();
$mercedes->waga = 4000;
$mercedes->data_przegladu = "2027-11-20";
$mercedes->kolor = "srebrny";
$mercedes->tablica_rejestracyjna = "CB11111";

echo "VW: " . $vw->czyDopuszczonyDoRuchu() . "\n";
echo "BMW: " . $bmw->czyDopuszczonyDoRuchu() . "\n";
echo "Mercedes: " . $mercedes->czyDopuszczonyDoRuchu() . "\n";
?>
