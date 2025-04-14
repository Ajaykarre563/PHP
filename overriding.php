<?php
class Teacher {
    public $city = "delhi"; // overriding the Property
    public function nextExam() {
        echo "next exam is maths";
    }

    public function age() {
        echo "my age is 40";
    }
}

class Student extends Teacher {
    public $city = "noida"; // Overriding the property
    public function age() {
        echo "my age is 20";
    }
}

$st1 = new Student();
$st1->age();
echo "<br>";
echo $st1->city; // Output: noida
?>