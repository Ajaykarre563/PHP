<?php
// Parent class
class UserAuth {
    function login($userType){
        echo "$userType logged in";
    }
}

// Child class 1
class Students extends UserAuth {
    function getName(){
        echo "anil";
    }
}

// Child class 2
class Teacher extends UserAuth {
    function getSkill(){
        echo "DSA";
    }
}

// Creating object of Students class
$s1 = new Students();
echo "<br>";
$s1->login("Student"); // Output: Student logged in
echo "<br>";
$s1->getName();        // Output: anil

$t1 = new Teacher();
echo "<br>";
$t1->login("Teacher"); // Output: Teacher logged in
echo "<br>";
$t1->getSkill();       // Output: DSA
?>

