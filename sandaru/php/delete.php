<!--IT23368248 s.m.dissanayaka-->

<?php
require 'config.php';

if(!empty($_POST["name"])) {
    $NAME = $_POST["name"];
   
    $sql4 = "DELETE FROM booking WHERE Full_Name='$NAME'";
    if ($con->query($sql4)) {
        
        if ($con->affected_rows > 0) {
            echo "Booking deleted Successfully.";
        } else {
            echo "Not a valid Name.";
        }
    } else {
        echo "Not Success!";
    }
} else {
    
    echo "No Name provided.";
}

?>