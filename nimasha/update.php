<?php

require 'config.php';

$paymentID=$_POST["pID"];
$fullname=$_POST["fname"];
$email=$_POST["cemail"];
$address=$_POST["caddress"];
$transportation=$_POST["t_Transportation"];
$cardNumber=$_POST["cnumber"];
$expDate=$_POST["cexpdate"];
$Cvv=$_POST["ccvv"];

if(empty($paymentID) || empty($fullname) || empty($email) || empty($address) || empty($transportation) || empty($cardNumber) || empty($expDate) || empty($Cvv))
{
    echo "All boxes must be filled";
}
else
{
    
    $sql = "UPDATE booking_c SET F_name='$fullname', email='$email', Address='$address', Transportation='$transportation', Card_Number='$cardNumber', exp_date='$expDate', cvv='$Cvv' WHERE Payment_ID='$paymentID'";

    if($con->query($sql))
    {
        echo "Updated";
    }
    else
    {
        echo "Not updated";
    }
}

   
?>

<!-- N.N.Ranawana
IT23229952 -->







