<?php
$name = "anil sidhu";
$age = 29;

// echo "My name is anil sidhu $name";  // Incorrect: Repeats the name
echo 'My name is anil sidhu '.$name;  // Correct: Concatenation
echo "<br>";

// Correct way to concatenate variables inside single quotes
// echo 'My name is '.$name.' and my age is '.$age;

$str = "Hello How are you ";
$str1 = "My name is anil sidhu";
$str .= $str1; // Concatenation using .= operator
echo "<br>";
echo $str;
?>
