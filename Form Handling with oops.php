<?php
// Define the class
class User {
    function getName($name) {
        echo "User name is $name";
    }
}

// Check if form is submitted
if (isset($_POST['user'])) {
    // Sanitize input
    $name = htmlspecialchars($_POST['user']);

    // Create object and call class function
    $user = new User();
    $user->getName($name);
}
?>

<!-- HTML Form -->
<form action="" method="post">
    <input type="text" name="user" placeholder="Enter User Name" required>
    <br><br>
    <button type="submit">Click</button>
</form>
