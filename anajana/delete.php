<!--    Registration Number: IT23386518
        Name: A.J.Liyanagamage          -->

<?php
require 'config.php';

// Checking if the form data is submitted and the ID is provided.
if(!empty($_POST["pid"])) {
    $ID = $_POST["pid"];

    // Executing the DELETE query
    $sql4 = "DELETE FROM packages WHERE Package_ID='$ID'";
    if ($con->query($sql4)) {
        // Here, checking if any rows were affected.
        if ($con->affected_rows > 0) {
            echo "Package deleted Successfully.";
        } else {
            echo "Not a valid ID.";
        }
    } else {
        echo "Not Success!";
    }
} else {
    //if not enter an ID
    echo "No ID provided.";
}

?>