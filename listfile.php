<?php
$path="file"; // Define the folder path
$items=scandir($path); // Get the list of files and directories
$items= array_diff($items,array(".","..")); // Remove unnecessary elements

foreach($items as $item){ // Loop through each file
    echo "<a href='./file/$item'>$item</a>"; // Create a clickable link
    echo "<br/>"; // Add a line break for better display
}
?>
