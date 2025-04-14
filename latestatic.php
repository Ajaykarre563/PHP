<?php
class CountrySale {
    static public $totalSale = 1000;

    function getTotalSale() {
        echo static::$totalSale . "<br>";  // Late static binding to $totalSale
    }

    function getAreaName() {
        static::areaName();  // Late static binding to areaName()
    }

    static function areaName() {
        echo "India<br>";
    }
}

class CitySale extends CountrySale {
    static public $totalSale = 50;

    static function areaName() {
        echo "Noida<br>";
    }
}

// Create object of child class
$sale = new CitySale();
$sale->getTotalSale();   // Output: 50 (from CitySale)
$sale->getAreaName();    // Output: Noida (from CitySale)
?>
