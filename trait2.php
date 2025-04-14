<?php

trait ParentCompany1 {
    function getEmp() {
        echo "Employee Count from ParentCompany1: 200<br/>";
    }
}

trait ParentCompany2 {
    function getEmp() {
        echo "Employee Count from ParentCompany2: 300<br/>";
    }
}

class Company {
    use ParentCompany1, ParentCompany2 {
        ParentCompany1::getEmp insteadof ParentCompany2; // Use getEmp from ParentCompany1
        ParentCompany2::getEmp as getEmpCompany2; // Alias getEmp from ParentCompany2 because it has the same name
    }
}

$c1 = new Company();
$c1->getEmp();           // Output: from ParentCompany1
$c1->getEmpCompany2();   // Output: from ParentCompany2

?>
