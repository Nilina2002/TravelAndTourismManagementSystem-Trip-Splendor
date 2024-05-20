<!--    Registration Number: IT23386518
        Name: A.J.Liyanagamage          -->

<?php
    require 'config.php';

    $p_ID = $_POST["pid"];
    $p_Name = $_POST["pname"];
    $p_Description = $_POST["pdescription"];
    $p_Duration = $_POST["pduration"];
    $s_Date = $_POST["sdate"];
    $e_Date = $_POST["edate"];
    $p_Availability = $_POST["pavailablity"];
    $p_Destinations = $_POST["pdestinations"];
    $p_Transportation = $_POST["ptransportation"];
    $p_Accomodations = $_POST["paccomodations"];
    $p_Meals = $_POST["pmeals"];
    $p_Activities = $_POST["pactivities"];
    $p_Inclusions = $_POST["pinclusions"];
    $p_Exclusions = $_POST["pexclusions"];

if(empty($p_ID)||
empty($p_Name)||
empty($p_Description)||
empty($p_Duration)||
empty($s_Date)||
empty($e_Date)||
empty($p_Availability)||
empty($p_Destinations)||
empty($p_Transportation)||
empty($p_Accomodations)||
empty($p_Meals)||
empty($p_Activities)||
empty($p_Inclusions)||
empty($p_Exclusions))
{
    echo "All required";
}
else
{
    $sql3="UPDATE packages SET `Package_Name`='$p_Name',
    `Description`='$p_Description',
    `Duration`='$p_Duration',
    `Start Date`='$s_Date',
    `End Date`='$e_Date',
    `Availability`='$p_Availability',
    `Destinations`='$p_Destinations',
    `Transportation`='$p_Transportation',
    `Accomodations`='$p_Accomodations',
    `Meals`='$p_Meals',
    `Activities`='$p_Activities',
    `Inclusions`='$p_Inclusions',
    `Exclusions`='$p_Exclusions' WHERE Package_ID='$p_ID' ";

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



    
    
    
    
    
    
    
    
    
    
    