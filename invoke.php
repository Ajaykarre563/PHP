<?php 
class Calculator {
    public function __invoke($a, $b) {
        return $a + $b;
    }
}

$add = new Calculator();
echo $add(10, 20);  // Output: 30
?>
