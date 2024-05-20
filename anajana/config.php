<!--    Registration Number: IT23386518
        Name: A.J.Liyanagamage          -->

<?php
// to create connection using sql querry 
//4 parameters inside the brackets "server name","username","password","database_name" )
$con = new mysqli("localhost","root","","trip.splendor"); //root is the default user name, $con is the variable

//the use "if" condition to check the connection is successful or not.
if($con ->connect_error)
{
    die("Connection failed".$con ->connect_error); //removing connection if there is an error, and showing what the error is.
}
else{
    // echo "Connection is Successful."; //getting output if connection is success.
}

?>