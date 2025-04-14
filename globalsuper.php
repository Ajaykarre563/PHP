<?php
// 1. $_GLOBALS Example
$a = 30;

function display() {
    echo "<pre>";
    print_r($GLOBALS); // Outputs all global variables
    echo "<pre>";
}

display();
?>
