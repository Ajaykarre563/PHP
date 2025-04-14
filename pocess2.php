<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && $_POST['_method'] === 'DELETE') {
    $id = $_POST['id'];
    echo "User with ID $id has been deleted.";
} else {
    echo "Invalid request.";
}
?>
