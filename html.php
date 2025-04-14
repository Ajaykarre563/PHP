<?php
// Defining a variable for color
$h2_color = "red";

// Using echo to print HTML elements
echo "<h1 style='color:green'>php with html</h1>";  // Prints an H1 heading with green color
echo "<h3 style='color:blue'>php with html</h3>";   // Prints an H3 heading with blue color
?>

<?php
// Defining a variable to store the name
$name = "Ajay Karrre";

// Using echo with concatenation to include a variable inside an HTML tag
echo "<h1 style='color:orange'>MY name is " . $name . "</h1>";  
// Outputs: <h1 style="color:orange">MY name is Ajay Karre</h1>
?>

<!-- Using PHP inside HTML -->
<h1 style="color:red">
    My real name is <?php echo $name; ?>  
    <!-- Embeds the PHP variable directly into HTML -->
</h1>

<!-- Using PHP echo within HTML tags -->
<h2 style="color:green"><?php echo "this is h2 tag"; ?></h2>  
<!-- Prints: <h2 style="color:green">this is h2 tag</h2> -->

<h2 style="color:green"><?php echo $name; ?></h2>  
<!-- Prints: <h2 style="color:green">Ajay Karre</h2> -->

<h2 style="color:orange">my name is <?php echo $name; ?></h2>  
<!-- Prints: <h2 style="color:orange">my name is Ajay Karre</h2> -->
