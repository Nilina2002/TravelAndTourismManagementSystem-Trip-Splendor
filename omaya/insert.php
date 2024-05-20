<?php
require 'config.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $notice_id = $_POST["notice_id"]; 
    $notice = $_POST["nnotice"]; 
    $noticeDate = $_POST["ndate"];

  
    $sql = "INSERT INTO notice (notice, date_) VALUES ('$notice', '$noticeDate')";
    if ($con->query($sql)) {
        
        header("Location: display_data.php?notice=$notice&date=$noticeDate");
        exit();
    } else {
        echo "Error: " . $con->error;
    }
}

$con->close();
?>
