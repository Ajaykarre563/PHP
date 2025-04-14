<?php 
class User {
    private $name;

    function __set($property, $value){
        // these function is used to set the value of private property
        // if property is not exist then it will be called
        
        echo "$property property can not set with $value value";
    }
}

$user = new User();
$user->name = "Anil sidhu";  // Triggers __set()
?>
