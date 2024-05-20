<!--    Registration Number: IT23386518
        Name: A.J.Liyanagamage          -->

<html>
    <title>Edit Existing Package</title>
<head>
    <link rel="stylesheet" type="text/css" href="editexisting.css">

    <script>
        function toggleAvailability(checkbox) {
            var otherCheckbox = checkbox === document.getElementById('yesAvailability') ? document.getElementById('noAvailability') : document.getElementById('yesAvailability');
            otherCheckbox.checked = !checkbox.checked;
        }
    </script>

</head>
<body>

<img src="images/ali-maah-zyOeEm4NsPM-unsplash.jpg" class="watermark" alt=" ">

<fieldset>
		<legend></legend>
		<form method="post" action="update.php">

        <h1 class="formtop">Update the Package Details</h1><br>

        <!-- 1 -->
        Package_ID: <input type="int" name="pid"><br>

        <!-- 2 -->
        Package Name: <input type="text" name="pname" ><br>

        <!-- 3 -->
        Description: <input type="text" name="pdescription" ><br>

        <!-- 4 -->
        Duration: <input type="text" name="pduration" ><br>

        <!-- 5 -->
        Start Date: <input type="date" name="sdate" ><br>

        <!-- 6 -->
        End Date: <input type="date" name="edate" ><br> 

        <!-- 7 -->
        Availability: 
        
        <label><input type="checkbox" unchecked="checked" value="Yes" name="pavailablity" id="yesAvailability" onclick="toggleAvailability(this)">Yes</label>
        <label><input type="checkbox" checked="checked" value="No" name="pavailablity" id="noAvailability" onclick="toggleAvailability(this)">No</label><br><br>

        <!-- 8 -->
        Destinations: <input type="text" name="pdestinations" ><br>

        <!-- 9 -->
        Transportation: <input type="text" name="ptransportation" ><br>

        <!-- 10 -->
        Accomodations: <input type="text" name="paccomodations" ><br>

        <!-- 11 -->
        Meals: <input type="text" name="pmeals" ><br>

        <!-- 12 -->
        Activities: <input type="text" name="pactivities" ><br>

        <!-- 13 -->
        Inclusions: <input type="text" name="pinclusions"><br>

        <!-- 14 -->
        Exclusions: <input type="text" name="pexclusions"><br>
        
        <input type="submit" value="Save"><br>
		<input type="reset">
		
		</form>

    </fieldset>
</body>	
</html>