<?php

require 'config.php';



$adminid = $_POST['adminid'];
$password = $_POST['password'];


$sql = "SELECT * FROM admin WHERE admin_Id='$adminid' AND password='$password'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    
    echo "Login successful!";
} else {
   
    echo "Invalid admin ID or password";
}

$con->close();
?>

<html>
    <head>
    <script src="script.js"></script>
    <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f0f0f0;
            }
            button {
                padding: 10px 20px;
                font-size: 16px;
                color: white;
                background-color: #007BFF;
                border: none;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }
            button:hover {
                background-color: #0056b3;
            }
        </style>
    </head>
    <body>
        <br><br>
        <button onclick="proceedToView()">Proceed to home page</button>
        <button onclick="goToAdminPage()">Go to Admin Page</button>
        
            
        
    </body>

</html>