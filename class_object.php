<?php
class MathOperations {
    public $val = 30; // Property

    function sum($a, $b) {
        echo $a + $b + $this->val;
    }
    function mul($a, $b) {
        echo $a * $b;
    }
}


$maths = new MathOperations();
$maths->sum(20, 30);      // Outputs: 50
echo "<br/>";
$maths->sum(100, 200);    // Outputs: 300

$maths1 = new MathOperations();
echo "<br/>";
$maths1->sum(1000, 2000); // Outputs: 3000
echo "<br/>";
$maths1->mul(5,6); 
?>
