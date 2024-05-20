<?php

require 'config.php';



$uname = $_POST["uname"];
$pwd = $_POST["pwd"];


$sql = "SELECT * FROM userinfo WHERE username='$uname' AND password='$pwd'";
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
    <link rel="stylesheet" href="userLogincss.css">
    </head>
    <body>
        <br><br>
        <button onclick="proceedToView()">Proceed to home page</button>
        
        
            
        
    </body>

</html>