<?php
require 'config.php';

$id = $_GET["id"];

$stmt = $con->prepare("SELECT F_Name, L_Name, City, Country, DOB, Passport_No, e_mail FROM Traveller_data WHERE Traveller_Id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->bind_result($F_Name, $L_Name, $City, $Country, $DOB, $Passport_No, $e_mail);
$stmt->fetch();
$stmt->close();
?>

<link rel="stylesheet" href="updateForm.css">
<script src="script.js"></script>
<form action="update.php" method="POST">
    <input type="hidden" name="tid" value="<?php echo $id; ?>">
    First Name: <input type="text" name="fname" value="<?php echo $F_Name; ?>"><br>

    Last Name: <input type="text" name="lname" value="<?php echo $L_Name; ?>"><br>

    City: <input type="text" name="tcity" value="<?php echo $City; ?>"><br>

    Country: <input type="text" name="tcountry" value="<?php echo $Country; ?>"><br>

    Date of Birth: <input type="text" name="tdob" value="<?php echo $DOB; ?>"><br>

    Passport No: <input type="text" name="tpassportNo" value="<?php echo $Passport_No; ?>"><br>
    
    Email: <input type="text" name="temail" value="<?php echo $e_mail; ?>"><br>
    <input type="submit" value="Update" onclick="showAlert()">
</form>
