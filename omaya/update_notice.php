<?php
require 'config.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $notice_id = $_POST["notice_id"];
    $updated_notice = $_POST["notice"];
    $updated_date = $_POST["date"];

    
    $sql = "UPDATE notice SET notice = '$updated_notice', date_ = '$updated_date' WHERE notice_id = '$notice_id'";
    if ($con->query($sql)) {
        
        header("Location: display_data.php");
        exit();
    } else {
        echo "Error: " . $con->error;
    }
}

$con->close();
?>
