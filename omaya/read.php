<?php
require 'config.php';




$sql = "SELECT * FROM notice";
$result = $con->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Notices</title>
</head>
<body>
    <h1>Notices</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Notice</th>
            <th>Date</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
        
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['notice'] . "</td>";
            echo "<td>" . $row['notice_date'] . "</td>";
            echo "<td><a href='edit_notice.php?id=" . $row['id'] . "'>Edit</a></td>";
            echo "<td><a href='delete_notice.php?id=" . $row['id'] . "'>Delete</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>

<?php

$con->close();
?>
