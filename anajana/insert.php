<!--    Registration Number: IT23386518
        Name: A.J.Liyanagamage          -->

<?php
require 'config.php'; //linking config.php with insert.php

//catching the data comes form createnew.php

//$package_ID=$_POST["pid"];
$package_Name=$_POST["pname"];
$package_Description=$_POST["pdescription"];
$package_Duration=$_POST["pduration"];
$start_Date=$_POST["sdate"];
$end_Date=$_POST["edate"];
$package_Availability = isset($_POST['availability']) && $_POST['availability'] == 'Yes' ? 'Yes' : 'No';
$package_Destinations=$_POST["pdestinations"];
$package_Transportation=$_POST["ptransportation"];
$package_Accomodations=$_POST["paccomodations"];
$package_Meals=$_POST["pmeals"];
$package_Activities=$_POST["pactivities"];
$package_Inclusions=$_POST["pinclusions"];
$package_Exclusions=$_POST["pexclusions"];


//sending the caught data to the database(packages table)
$sql="INSERT INTO packages VALUES ('',
                            '$package_Name',
                            '$package_Description',
                            '$package_Duration',
                            '$start_Date',
                            '$end_Date',
                            '$package_Availability',
                            '$package_Destinations',
                            '$package_Transportation',
                            '$package_Accomodations',
                            '$package_Meals',
                            '$package_Activities',
                            '$package_Inclusions',
                            '$package_Exclusions'
                            )";

//checking whether the data insereted or not with the config.php
if($con->query($sql)){

    echo "Package Added Successfully"; //displaying an output if there is no error 
}
else{
    echo "Error".$con->error; //displaying an output if there is an error and the error type
}

$con ->close();

?>