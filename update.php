<?php
require 'config.php';

$id = $_POST["tid"];
$F_Name = $_POST["fname"];
$L_Name = $_POST["lname"];
$City = $_POST["tcity"];
$Country = $_POST["tcountry"];
$DOB = $_POST["tdob"];
$Passport_No = $_POST["tpassportNo"];
$e_mail = $_POST["temail"];

$stmt = $con->prepare("UPDATE Traveller_data SET F_Name = ?, L_Name = ?, City = ?, Country = ?, DOB = ?, Passport_No = ?, e_mail = ? WHERE Traveller_Id = ?");
$stmt->bind_param("sssssssi", $F_Name, $L_Name, $City, $Country, $DOB, $Passport_No, $e_mail, $id);
$stmt->execute();
$stmt->close();

header("Location: read.php");
exit();
?>
