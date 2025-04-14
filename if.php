<?php
$age = 10;          // Variable $age is assigned a value of 10
$name = "Anil";     // Variable $name is assigned a string value "Anil"

if ($age < 18) {    // Checks if age is less than 18
    echo "Display Kids content";  // Prints message if condition is true
}

echo "<br/>";  // Adds a line break in HTML output

if ($name == "Anil") {  // Checks if $name is "Anil"
    echo "<h1>Welcome, Anil Sidhu</h1>";  // Prints a welcome message in H1 heading
}

echo "Other";  // This will always be printed because it is outside the if conditions
?>
