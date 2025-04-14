<?php
// Define two numbers
$a = 10;
$b = 3;

// Arithmetic operations
$addition = $a + $b;        // Addition
$subtraction = $a - $b;     // Subtraction
$multiplication = $a * $b;  // Multiplication
$division = $a / $b;        // Division (floating-point)
$modulus = $a % $b;         // Modulus (remainder)
$exponentiation = $a ** $b; // Exponentiation (a^b)
$floor_division = intdiv($a, $b); // Floor Division (integer division)

// Display results
echo "Addition: $a + $b = $addition\n";
echo "<br/>";
echo "Subtraction: $a - $b = $subtraction\n";
echo "<br/>";
echo "Multiplication: $a * $b = $multiplication\n";
echo "<br/>";
echo "Division: $a / $b = $division\n";
echo "<br/>";
echo "Modulus: $a % $b = $modulus\n";
echo "<br/>";
echo "Exponentiation: $a ** $b = $exponentiation\n";
echo "<br/>";
echo "Floor Division: intdiv($a, $b) = $floor_division\n";
echo "<br/>";
?>
