<?php
class Samochod {
    public $masa;
    public $dataprzegladu;
    public $marka;
    public $kolor;
    public $tablicarejestracyjna;
    public $punktykarne;
    
   public function __construct($masa, $dataprzegladu, $marka, $kolor, $tablica)
   {
     $this ->masa = $masa;
     $this ->dataprzegladu = $dataprzegladu;
     $this ->marka = $marka;
     $this ->kolor = $kolor;
     $this ->tablicarejestracyjna = $tablicarejestracyjna;
     $this ->punktykarne = 0;
    }
   }
    public function dodajPunktyKarne($punkty)
    { 
      $this ->punktykarne += $punkty;
    }
    public function czyDopuszczonyDoRuchu()
    {
     if (
         $this->masa < 3500 &&
         $this->dataprzegladu > date("Y-m-d") &&
         $this->punktykarne < 20
        ){
         return true;
    }else { return false;
    }
    }
$vw = new Samochod(1500, "2027-05-10", "vw", "Czarny", "CT 12345");
$mercedes = new Samochod(2200, "2027-06-15", "mercedes", "biały", "DW54321");
$bmw = new Samochod(2550, "2027-09-23", "bmw", "szary", "PP98765");
$vw -> dodajPunktyKarne(5);
$vw-> dodajPunktyKarne(10);

$dop = $vw->czyDopuszczonyDoRuchu();
 if ($dop) {
   echo "tak";
 } else {
    echo "nie";
 }
