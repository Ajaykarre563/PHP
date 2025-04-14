<?php
class Properties {
    public $name = "anil sidhu";  // Property

    function getName() {
        echo $this->name;
    }

    function updateName($name) {
        $this->name = $name;
    }
}

// Create an object
$p1 = new Properties();

// Update property value using method
$p1->updateName("adi");

// Get the updated property value
$p1->getName();  // Output: adi
?>
