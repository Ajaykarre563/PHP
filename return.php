<?php
function add($a, $b) {
    return $a + $b; // Function stops here and returns result
    echo "This won't execute"; // This line will never run
}

$result = add(10, 20); // Calling the function
echo "Sum: " . $result; // Displaying the result
?>
