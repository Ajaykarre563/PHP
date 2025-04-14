<?php

trait parentCompany1 {
    function getTotalEmp() {
        echo 500;
    }

    function getTotalProject() {
        echo 35;
    }
}

trait parentCompany2 {
    function getTotalOffice() {
        echo 10;
    }
}

class Company {
    use parentCompany1;
    use parentCompany2;
}

// Create an object
$obj = new Company();

// Call trait methods
$obj->getTotalEmp();       // Output: 500
echo "<br>";
$obj->getTotalProject();   // Output: 35
echo "<br>";
$obj->getTotalOffice();    // Output: 10
