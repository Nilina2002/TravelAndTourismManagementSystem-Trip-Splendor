<!--IT23368248 s.m.dissanayaka-->
<?php
require 'config.php';

$name = $_POST["name"];
$Card =$_POST["Card"];
$Mail =$_POST["Mail"];
$Location =$_POST["Location"];
$pay =$_POST["pay"];
$Number =$_POST["Number"];
$Year =$_POST["Year"];
$Amount =$_POST["Amount"];


$Hotel= "INSERT INTO booking 
 VALUE ('$name','$Card','$Mail','$Location','$pay','$Number','$Year','$Amount')";

echo $Hotel;
if($con->query($Hotel)){
    header('location:../../index.php');
}


?>