<?php
class User {
    public $name = "Anil sidhu";
    private $age = 30;

    function __get($property){
        echo "$property property is not exist";
    }
}

$user = new User();
echo $user->name;       // Accesses public property → Output: Anil sidhu
echo "<br>";
echo $user->age;        // Tries to access private property → Triggers __get()
?>