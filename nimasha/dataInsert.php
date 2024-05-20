<?php

    require 'config.php';

    $Payment_ID = $_POST["pID"];
    $fullName = $_POST["fname"];
    $email = $_POST["cemail"];
    $Address = $_POST["caddress"];
    $transp = $_POST["t_Transportation"];
    $card_number = $_POST["cnumber"];
    $exp_date = $_POST["cexpdate"];
    $_cvv = $_POST["ccvv"];

    $sql= "INSERT INTO booking_c VALUES ('$Payment_ID','$fullName','$email','$Address','$transp','$card_number','$exp_date','$_cvv')";

    if($con->query($sql))
    {
        echo"Insert successful";
    }
    else
    {
        echo"Error".$con->error;
    }

    $con -> close();

    ?>

    <html>
        <head>
        <style>
        .home-btn {
            text-align: center;
            margin-top: 20px; /* Optional: Adjust the margin as needed */
        }
        .home-btn form {
            display: inline-block;
        }
        .home-btn input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50; /* Green */
            color: white;
            border: none;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 8px;
        }
        .home-btn input[type="submit"]:hover {
            background-color: #45a049; /* Darker Green */
        }
    </style>
        </head>
        <body>
        <div class="home-btn">
                <form method="get" action="../index.php">
                    <input type="submit" value="Home" >
                
                </form>
                </div> 
        </body>
    </html>

    <!-- N.N.Ranawana
IT23229952 -->