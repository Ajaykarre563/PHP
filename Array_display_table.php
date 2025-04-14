<?php
$users = [
    [1, "Anil", "Noida", "anil@test.com"],
    [2, "Sam", "Delhi", "sam@test.com"],
    [3, "Peter", "Gurgaon", "peter@test.com"]
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
    for ($i = 0; $i < count($users); $i++) {
        echo "<tr>";
        for ($j = 0; $j < count($users[$i]); $j++) {
            echo "<td>" . $users[$i][$j] . "</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
