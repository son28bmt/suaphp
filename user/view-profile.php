<?php
    $mysqli = new mysqli("localhost", "root", "", "register");
    $sql = "SELECT * FROM user";
    $result = $mysqli->query($sql);
?>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Email</th>
        <th>Other Columns...</th>
    </tr>
    <?php
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['username'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        // Add more columns as needed
        echo "</tr>";
    }
    ?>
</table>
