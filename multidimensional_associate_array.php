<?php
$users = [
    "user1" => ["id" => 1, "name" => "Anil", "city" => "Noida", "email" => "anil@test.com"],
    "user2" => ["id" => 2, "name" => "Sam", "city" => "Delhi", "email" => "sam@test.com"],
    "user3" => ["id" => 3, "name" => "Peter", "city" => "Gurgaon", "email" => "peter@test.com"]
];
?>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>City</th>
        <th>Email</th>
    </tr>
    <?php
    foreach ($users as $user) {
        echo "<tr>";
        echo "<td>" . $user["id"] . "</td>";
        echo "<td>" . $user["name"] . "</td>";
        echo "<td>" . $user["city"] . "</td>";
        echo "<td>" . $user["email"] . "</td>";
        echo "</tr>";
    }
    ?>
</table>
