<form action="" method="post">
    <input type="text" name="user" placeholder="enter user name" />
    <br />
    <br />
    <button name="button" value="set">Set Cookies</button>
    <br />
    <br />
    <button name="button" value="display">Display Cookies</button>
    <br />
    <br />
    <button name="button" value="delete">Delete Cookies</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['button'] == 'set') {
        // Set a cookie for 1 hour
        setcookie("user", $_POST['user'], time() + 3600, "/");
        echo "Cookie is set!";
    }

    if ($_POST['button'] == 'display') {
        // Display the cookie if it exists
        if (isset($_COOKIE['user'])) {
            echo "Stored Cookie Value: " . $_COOKIE['user'];
        } else {
            echo "No cookie found!";
        }
    }

    if ($_POST['button'] == 'delete') {
        // Delete the cookie
        if (isset($_COOKIE['user'])) {
            setcookie("user", "", time() - 3600, "/"); // Set expiration time in the past
            echo "Cookie has been deleted!";
        } else {
            echo "No cookie to delete!";
        }
    }
}
?>
