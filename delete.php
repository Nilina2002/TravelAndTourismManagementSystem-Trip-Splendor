<?php
    require 'config.php';

    $travID = $_POST["tid"];
    $sql = "DELETE FROM traveller_data WHERE Traveller_Id='$travID'" ;

    if($con -> query($sql))
    {
        header("Location: read.php");
        exit();
    }else{
        echo "Not deleted";
    }


    

?>