<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hashing password
    $email = htmlspecialchars($_POST['email']);

    echo "User Registered Successfully!<br>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Password (hashed): " . $password; // Display hashed password (for debugging only)
}
?>
