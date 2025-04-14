<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if all form fields are set
        if (isset($_POST['user_name']) && isset($_POST['user_password']) && 
            isset($_POST['user_email']) && isset($_POST['user_address'])) {

            // Sanitize inputs to prevent security issues
            $user_name = htmlspecialchars($_POST['user_name']);
            $user_password = htmlspecialchars($_POST['user_password']); // Should be hashed in real applications
            $user_email = htmlspecialchars($_POST['user_email']);
            $user_address = htmlspecialchars($_POST['user_address']);

            // Display the submitted data
            echo "<h2>Received Data:</h2>";
            echo "User Name: " . $user_name . "<br>";
            echo "Email: " . $user_email . "<br>";
            echo "Address: " . $user_address . "<br>";
        } else {
            echo "All fields are required!";
        }
    } else {
        echo "Invalid request method!";
    }
?>
