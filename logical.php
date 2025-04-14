<?php
$x = true;
$y = false;

// AND operator (and)
echo "AND (and): ";
var_dump($x and $y); // False
echo "<br>";

// OR operator (or)
echo "OR (or): ";
var_dump($x or $y); // True
echo "<br>";

// XOR operator (xor)
echo "XOR (xor): ";
var_dump($x xor $y); // True (only one should be true)
echo "<br>";

// AND operator (&&)
echo "AND (&&): ";
var_dump($x && $y); // False
echo "<br>";

// OR operator (||)
echo "OR (||): ";
var_dump($x || $y); // True
echo "<br>";

// NOT operator (!)
echo "NOT (!): ";
var_dump(!$x); // False (negates $x)
echo "<br>";
?>
