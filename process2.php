<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    if (isset($_POST['name'])) {
        echo "User name is " . $_POST['name'] . "<br>";
        echo "User email is " . $_POST['email'] . "<br>";
        echo "User password is " . $_POST['password'] . "<br>";
        
        // Check if skills are selected
        if (isset($_POST['skills'])) {
            echo "User skills are " . implode(", ", $_POST['skills']) . "<br>";
        } else {
            echo "User skills are not selected.<br>";
        }
        
       
        // Check if city is selected
        echo "User city is " . $_POST['city'] . "<br>";


    }
}
?>
