<?php

include 'config.php';

$u_name = $_POST["name"]; //Full_Name
$u_Card =$_POST["Card"]; //Name_On_Card
$u_Mail =$_POST["Mail"]; //Email_Address
$u_Location =$_POST["Location"]; //Addresss
$u_pay =$_POST["pay"]; //Payment_Details
$u_Number =$_POST["Number"]; //Card_Number
$u_Year =$_POST["Year"]; //Exp_Year
$u_Amount =$_POST["Amount"]; //Enter_Amount


if(empty($u_name)||
empty($u_Card)||
empty($u_Mail)||
empty($u_Location)||
empty($u_pay)||
empty($u_Number)||
empty($u_Year)||
empty($u_Amount))

{
    echo "All required";
}
else
{
    $sql3="UPDATE booking SET `Name_On_Card`='$u_Card',
    `Email_Address`='$u_Mail',
    `Addresss`='$u_Location',
    `Payment_Details`='$u_pay',
    `Card_Number`='$u_Number',
    `Exp_Year`='$u_Year',
    `Enter_Amount`='$u_Amount'
    
    WHERE Full_Name='$u_name' ";

    if($con->query($sql3))
    {
        echo "Package Updated Successfully.";
    }
    else
    {
        echo "Not Updated.";
    }
}





?>