<?php
$pdo = new PDO("mysql:host=localhost;dbname=mysql", "root", "");

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['_method']) && $_POST['_method'] === 'DELETE') {
    if (!empty($_POST['id'])) {
        $id = $_POST['id'];

        // Check if user exists
        $stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$id]);
        $user = $stmt->fetch();

        if ($user) {
            // Delete user
            $deleteStmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
            $deleteStmt->execute([$id]);
            echo "User with ID $id has been deleted.";
        } else {
            echo "Error: User not found.";
        }
    } else {
        echo "Error: User ID is required.";
    }
} else {
    echo "Invalid request.";
}
?>
