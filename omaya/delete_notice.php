<?php
require 'config.php';


if (isset($_GET['notice_id'])) {
    $notice_id = $_GET['notice_id'];

    
    $sql = "DELETE FROM notice WHERE notice_id = $notice_id";
    if ($con->query($sql)) {
        
        header("Location: display_data.php");
        exit();
    } else {
        echo "Error: " . $con->error;
    }
} else {
    echo "Notice ID not provided.";
}

$con->close();
?>
