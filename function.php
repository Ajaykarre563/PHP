<?php
function dummy() {
    echo "<h1>User Details</h1>";
}

function displayUserDetails() {
    dummy();
    echo "User name is Anil";
    echo "<br/>";
    echo "User age is 27";
    echo "<br/>";
    echo "User email id is anil@test.com";
    echo "<hr/>";
}

// Calling the function twice
displayUserDetails();
displayUserDetails();
?>
