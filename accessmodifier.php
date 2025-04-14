<?php
class Person {
    public $name = "John";
    protected $age = 30;
    private $salary = 50000;

    public function showDetails() {
        echo "Name: $this->name, Age: $this->age, Salary: $this->salary";
    }
}

class Employee extends Person {
    public function showEmployeeAge() {
        echo "Age: $this->age"; // Allowed (protected)
    }
}

$person = new Person();
echo $person->name;         // ✅ public: accessible
// echo $person->age;       // ❌ protected: error
// echo $person->salary;    // ❌ private: error
echo "<br>";    

$person->showDetails();     // ✅ All visible within the class private
echo "<br>"; 
$emp = new Employee();
$emp->showEmployeeAge();    // ✅ Protected property accessed in subclass
?>
