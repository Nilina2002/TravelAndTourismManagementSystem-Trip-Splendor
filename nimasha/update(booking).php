<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TripSplendor</title>
    <style>
        body {
            background-image: url('images/background.jpg'); /* replace 'background.jpg' with your image file path */
            background-size: cover;
            background-position: center;
            font-family: 'Poppins', sans-serif;
        }

        .container {
            width: 50%;
            margin: auto;
            padding: 20px;
            background-color: #68D2E8; 
            border-radius: 10px; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
            
            background-size: cover;
            background-position: center;
        }

        form {
            text-align: center; 
        }

        input[type="text"],
        input[type="number"],
        input[type="date"],
        select {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 20%;
            background-color: #4CAF50; 
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 5px; 
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s; 
        }

        input[type="submit"]:hover {
            background-color: #45a049; 
            
        }

        h3 {
            color: #333; 
        }

        img {
            display: inline-block;
            vertical-align: middle;
            margin: 0 5px; 
        }

        
        select {
            appearance: none; 
            background-image: url('arrow-icon.png'); 
            background-repeat: no-repeat;
            background-position: right 10px center;
            background-size: 15px;
        }
    </style>
</head>
<body>

<div class="container">
    <h3>Update Booking Forms</h3>
    <form method="post" action="update.php">
        Payment ID:
        <input type="text" placeholder="Enter an available payment id" name="pID"><br> 
        Full name:
        <input type="text" name="fname" placeholder="Enter name"><br>
        Email:
        <input type="text" name="cemail" placeholder="Enter email"><br>
        Address:
        <input type="text" name="caddress" placeholder="Enter address"><br>

        Type:
        <select name="t_Transportation">
            <option> Choose the type of transportation..</option>
            <option>Airline service</option>
            <option>Jeep</option>
            <option>Car</option>
            <option>Van</option>
            <option>Motor bike</option>
            <option>Bicycle</option>
        </select>

        <h3>Payment</h3>

        Accepted Card
        <img src="images.png" width="100">
        <img src="Card.jpg" width="50">
        <br><br>

        Card number:
        <input type="number" name="cnumber" placeholder="Enter card number"><br>
        Exp date:
        <input type="date" name="cexpdate" placeholder="Enter month"><br>
        cvv:
        <input type="number" name="ccvv" placeholder="cvv"><br>

        <input type="submit" value="Update">
    </form>
</div>

</body>
</html>

<!-- N.N.Ranawana
IT23229952 -->