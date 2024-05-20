<!--    Registration Number: IT23386518
        Name: A.J.Liyanagamage          -->

<html>
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Travel Packages</title>
    
    <link rel="stylesheet" type="text/css" href="viewpackages.css">

</head>
<body>
    <img src="images/ali-maah-zyOeEm4NsPM-unsplash.jpg" class="watermark" alt=" ">
    <h1 class="header">Available Travel Packages</h1>

    <?php
    require 'config.php'; 

    $sql2 = "SELECT Package_ID,
    Package_Name,
    Description,
    Duration,
    `Start Date`,
    `End Date`,
    Availability,
    Destinations,
    Transportation,
    Accomodations,
    Meals,
    Activities,
    Inclusions,
    Exclusions FROM packages";

    $result = $con->query($sql2);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            
            echo "<div class='package'>";
            echo "<h2>". $row["Package_Name"] . "</h2>";
            echo "<table>"; 
            
            echo "<tr><td><strong>Package ID:</strong></td><td>" . $row["Package_ID"] . "</td></tr>";
            echo "<tr><td><strong>Description:</strong></td><td>" . $row["Description"] . "</td></tr>";
            echo "<tr><td><strong>Duration:</strong></td><td>" . $row["Duration"] . "</td></tr>";
            echo "<tr><td><strong>Start Date:</strong></td><td>" . $row["Start Date"] . "</td></tr>";
            echo "<tr><td><strong>End Date:</strong></td><td>" . $row["End Date"] . "</td></tr>";
            echo "<tr><td><strong>Availability:</strong></td><td>" . $row["Availability"] . "</td></tr>";
            echo "<tr><td><strong>Destinations:</strong></td><td>" . $row["Destinations"] . "</td></tr>";
            echo "<tr><td><strong>Transportation:</strong></td><td>" . $row["Transportation"] . "</td></tr>";
            echo "<tr><td><strong>Accomodations:</strong></td><td>" . $row["Accomodations"] . "</td></tr>";
            echo "<tr><td><strong>Meals:</strong></td><td>" . $row["Meals"] . "</td></tr>";
            echo "<tr><td><strong>Activities:</strong></td><td>" . $row["Activities"] . "</td></tr>";
            echo "<tr><td><strong>Inclusions:</strong></td><td>" . $row["Inclusions"] . "</td></tr>";
            echo "<tr><td><strong>Exclusions:</strong></td><td>" . $row["Exclusions"] . "</td></tr>";
            echo "</table>"; 
            echo "</div>";
        }
    } else {
        echo "No packages are available.";
    }
    $con->close();
    ?>
</body>
</html>