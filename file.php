<form action="" method="post">
        <input type="text" placeholder="Enter file name" name="filename" required />
        <br><br>
        <textarea name="content" placeholder="Enter file content" rows="5" cols="30" required></textarea>
        <br><br>
        <button type="submit" name="create">Create File</button>
    </form>

<?php
if (isset($_POST['create'])) {
    $filename = $_POST['filename'];
    $content = $_POST['content'];

    // Create directory if it doesn't exist
    $directory = "file/"; 

    if (!is_dir($directory)) {
        mkdir($directory, 0777, true); // Create directory with full permissions
    }

    $fileName = $directory . $filename . ".txt";

    // Check if file already exists
    if (file_exists($fileName)) {
        echo "File already exists!";
    } else {
        $file = fopen($fileName, "w") or die("Unable to create file");
        fwrite($file, $content);
        fclose($file);
        echo "File created successfully!";
    }
}
?>