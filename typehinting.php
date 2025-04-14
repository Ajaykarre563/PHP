<?php
class Fruits {
    function getName(string|array $name) {
        print_r($name); // use print_r for arrays
    }
}

$f1 = new Fruits;
$f1->getName("apple"); // Outputs: apple
echo "<br/>";
$f1->getName(["apple", "banana"]); // Outputs: Array ( [0] => apple [1] => banana )
?>
