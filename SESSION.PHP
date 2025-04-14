<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sessions</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="user" placeholder="Enter user name" />
        <br /><br />
        <button name="button" value="set">Set Session</button>
        <br /><br />
        <button name="button" value="get">Get Session</button>
        <br /><br />
        <button name="button" value="delete">Delete Session</button>
    </form>
</body>
</html>

<?php
session_start(); // Start the session

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['button'] == 'set') {
        // Set session variable
        $_SESSION["user"] = $_POST['user'];
        echo "Session is set for user: " . $_SESSION["user"];
    }

    if ($_POST['button'] == 'get') {
        // Display session variable
        if (isset($_SESSION["user"])) {
            echo "Stored Session Value: " . $_SESSION["user"];
        } else {
            echo "No session found!";
        }
    }

    if ($_POST['button'] == 'delete') {
        // Destroy the session
        session_unset();  // Unset all session variables
        session_destroy(); // Destroy the session
        echo "Session has been deleted!";
    }
}
?>
