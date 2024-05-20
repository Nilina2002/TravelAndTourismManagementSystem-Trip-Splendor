<?php
    require 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traveller Data</title>
    <style>
        body {
            background-image: url('background_image.jpg'); 
            background-size: cover;
            background-repeat: no-repeat;
            font-family: Arial, sans-serif;
        }
        table {
            margin: 0 auto;
            border-collapse: collapse;
            width: 80%; 
        }
        th, td {
            border: 1px solid #ddd; 
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
        a {
            text-decoration: none;
            color: blue;
        }
        a:hover {
            color: red;
        }
    </style>
</head>
<body>

<?php
    $sql = "SELECT Traveller_Id, F_Name, L_Name, City, Country, DOB, Passport_No, e_mail FROM Traveller_data";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $count = 0;
        while($row = $result->fetch_assoc()) {
            if ($count != 0) {
                echo "</table>";
            }
            echo "<h2>Section " . ($count + 1) . "</h2>";
            echo "<table>";
            echo "<tr><th>Traveller Id</th><th>First Name</th><th>Last Name</th><th>City</th><th>Country</th><th>DOB</th><th>Passport No</th><th>Email</th><th>Actions</th></tr>";
            echo "<tr>";
            echo "<td>".$row["Traveller_Id"]."</td>".
                 "<td>".$row["F_Name"]."</td>".
                 "<td>".$row["L_Name"]."</td>".
                 "<td>".$row["City"]."</td>".
                 "<td>".$row["Country"]."</td>".
                 "<td>".$row["DOB"]."</td>".
                 "<td>".$row["Passport_No"]."</td>".
                 "<td>".$row["e_mail"]."</td>";
            echo "<td><a href='updateForm.php?id=".$row["Traveller_Id"]."'>Update</a> | <a href='deleteForm.php?id=".$row["Traveller_Id"]."'>Delete</a></td>";
            echo "</tr>";
            $count++;
        }
        echo "</table>";
    } else {
        echo "No Results";
    }
    $con->close();
?>

</body>
</html>
