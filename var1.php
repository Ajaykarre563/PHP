<?php
// 1. String
$name = "John Doe";
echo "String: " . $name . "<br/>";

// 2. Integer
$age = 30;
echo "Integer: " . $age . "<br/>";

// 3. Float (or Double)
$salary = 45000.50;
echo "Float: " . $salary . "<br/>";

// 4. Boolean
$isEmployed = true;
echo "Boolean: " . ($isEmployed ? 'true' : 'false') . "<br/>";

// 5. Array
$colors = array("red", "green", "blue");
foreach ($colors as $color) {
    echo $color . "<br/>";
}

// 6. Object
class Car {
    public $brand;
    
    public function setBrand($brand) {
        $this->brand = $brand;
    }
    
    public function getBrand() {
        return $this->brand;
    }
}

$myCar = new Car();
$myCar->setBrand("Honda");
echo "Car Brand: " . $myCar->getBrand();
echo "<br/>";

// 7. NULL
$unknown = NULL;
echo "NULL: " . var_export($unknown, true) . "<br/>";


?>