<?php

require 'config.php';

$pid = $_POST["pID"];

$sql = "DELETE FROM booking_c WHERE Payment_ID = '$pid'"; 

if($con->query($sql)) 
{
    echo "Deleted Successfully"; 
}
else
{
    echo "Not Success"; 
}

?>

<!-- N.N.Ranawana
IT23229952 -->