<?php
class Company {
    function getName() {
        echo "This is Honda Motors. ";
        return $this;
    }

    function getEmp() {
        echo "Honda has 30000 Employees. ";
        return $this;
    }

    function getTotalOffice() {
        echo "Honda has 200 Offices";
    }
}

$company = new Company();
$company->getName()->getEmp()->getTotalOffice();
?>
