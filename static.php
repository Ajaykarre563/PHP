<?php
class Honda {
    static public $countryName = "Japan";

    static function companyName() {
        echo "Honda";
    }
}

Honda::companyName();    // Calls the static method
echo "<br>";
echo Honda::$countryName; // Accesses the static property
?>
