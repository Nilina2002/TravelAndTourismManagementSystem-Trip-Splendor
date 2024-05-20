<?php

    require 'config.php';

    
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $tcity = $_POST["tcity"];
    $tcountry = $_POST["tcountry"];
    $tdob = $_POST["tdob"];
    $tpassportno = $_POST["tpassportno"];
    $temail = $_POST["temail"];
    $uname = $_POST["uname"];
    $pwd = $_POST["pwd"];

    $sql = "INSERT INTO traveller_data VALUES ('','$fname','$lname','$tcity','$tcountry','$tdob','$tpassportno','$temail')" ;
    $sql2 = "INSERT INTO userinfo VALUES ('$uname','$pwd')";

    if($con -> query($sql))
    {
        header("Location: index.php");
        
    }
    else{
        echo "Error".$con ->error;
    }

    if($con -> query($sql2))
    {
        header("Location: index.php");
        exit();
    }
    else{
        echo "Error".$con ->error;
    }

    $con ->close();
?>

