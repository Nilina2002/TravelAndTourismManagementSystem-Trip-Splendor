<!--    Registration Number: IT23386518
        Name: A.J.Liyanagamage          -->

<link rel="stylesheet" type="text/css" href="read.css">
<?php

//linking database connection
require 'config.php'; //config.php is the file which we made the connection 

//to read the data from the database we make a query, here we use the select query
//inside the select query we mention the columns of the database which we are going read in order
//table name is given to read the data
//$sql is a veriable to be used in inside the query 
//backtics (`) are used if there are spaces in the column names of the table in the database
$sql2="SELECT Package_ID,
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

//executing query as we executed in insert.php
//give what the connection is , query is a keyword , inside the brackets mentioning the query we used
//we are not using "if-else" here
//$con->query($sql) is the command
//another variable($result) is used for the command
$result=$con->query($sql2);

//now we use "if-else"
//checking if there are data in the database
//num_rows is pre-defined function

if($result->num_rows>0)
{
    //creating table
    //echo is used here to execute the html tags
    echo "<table border='1'>";
        echo "<th>Edit</th>";
        echo "<th>Remove</th>";
        echo "<th>Package_ID</th>";
        echo "<th>Package_Name</th>";
        echo "<th>Description</th>";
        echo "<th>Duration</th>";
        echo "<th>Start Date</th>";
        echo "<th>End Date</th>";
        echo "<th>Availability</th>";
        echo "<th>Destinations</th>";
        echo "<th>Transportation</th>";
        echo "<th>Accomodations</th>";
        echo "<th>Meals</th>";
        echo "<th>Activities</th>";
        echo "<th>Inclusions</th>";
        echo "<th>Exclusions</th>";

    //a loop is used to print data row by row
    //fetch associate function is used for the above task
    //there is a row in $row variable in everytime
    while($row=$result->fetch_assoc())
    {
        //table row
        echo "<tr>";
        echo "<td class='editcell'>
        <a href='editexisting.php' target='_blank'><input type='button' class='editclick' value='Edit'></a>
        </td>";
        echo "<td class='editcell'>
        <a href='confirmdelete.php' target='_blank'><input type='button' class='deleteclick' value='Remove'></a>
        </td>";
        
        echo "<td>".$row["Package_ID"]."</td>".
        "<td>".$row["Package_Name"]."</td>".
        "<td>".$row["Description"]."</td>".
        "<td>".$row["Duration"]."</td>".
        "<td>".$row["Start Date"]."</td>".
        "<td>".$row["End Date"]."</td>".
        "<td>".$row["Availability"]."</td>".
        "<td>".$row["Destinations"]."</td>".
        "<td>".$row["Transportation"]."</td>".
        "<td>".$row["Accomodations"]."</td>".
        "<td>".$row["Meals"]."</td>".
        "<td>".$row["Activities"]."</td>".
        "<td>".$row["Inclusions"]."</td>".
        "<td>".$row["Exclusions"]."</td>";   

    }

    echo "</table>";
}
else
{
    echo "No reults";
}

$con->close();

?>
