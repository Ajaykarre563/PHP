<?php
$user = [
    "name" => "anil",
    "age" => 30,
    "email" => "abc@test.com"
];

// Check if it's an array
if (is_array($user)) {
    echo "This is an array <br>";
} else {
    echo "This is not an array <br>";
}

// Count elements in the array
echo "Array count: " . count($user) . "<br>";

// Remove an element (Note: Using keys here as it's an associative array)
unset($user["email"]);
print_r($user);
echo "<br>";

// Add new elements
$user["city"] = "Delhi";
$user["country"] = "India";
print_r($user);
echo "<br>";

// Get array keys
print_r(array_keys($user));
echo "<br>";

// Get array values
print_r(array_values($user));
echo "<br>";

// Merge two arrays
$extra_data = ["gender" => "male", "occupation" => "developer"];
$merged_data = array_merge($user, $extra_data);
print_r($merged_data);
echo "<br>";

// Convert array to string
echo implode(", ", array_values($user)) . "<br>";

// Explode a string into an array
$str = "hello, how are you, anil";
print_r(explode(",", $str));
echo "<br>";

// Unique values in an indexed array
$values = ["apple", "banana", "apple", "orange"];
$unique_values = array_unique($values);
print_r($unique_values);
echo "<br>";

// Push and pop from an indexed array
$fruits = ["apple", "banana"];
array_push($fruits, "mango");
print_r($fruits);
echo "<br>";
array_pop($fruits);
print_r($fruits);
echo "<br>";

// Shift and unshift
array_unshift($fruits, "grapes");
print_r($fruits);
echo "<br>";
array_shift($fruits);
print_r($fruits);
echo "<br>";

// Sorting arrays
$numbers = [4, 2, 8, 1];
sort($numbers);
print_r($numbers);
echo "<br>";

// Reverse sorting
rsort($numbers);
print_r($numbers);
echo "<br>";

// Associative array sorting by values
asort($user);
print_r($user);
echo "<br>";

// Sorting by keys
ksort($user);
print_r($user);
echo "<br>";

// Checking if a key exists
if (array_key_exists("name", $user)) {
    echo "Key 'name' exists in the array <br>";
}

// Checking if a value exists
if (in_array("Delhi", $user)) {
    echo "Value 'Delhi' exists in the array <br>";
}

// Flipping keys and values
$flipped = array_flip($user);
print_r($flipped);
echo "<br>";
?>
