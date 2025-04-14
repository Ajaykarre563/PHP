<?php
$fruits = ["Apple", "Banana", "Mango"];

unset($fruits[1]);  // Removes "Banana"
print_r($fruits);
echo "<br>";  // Line break for better readability

$fruits = array_values($fruits);  // Reindex the array
print_r($fruits);
?>
