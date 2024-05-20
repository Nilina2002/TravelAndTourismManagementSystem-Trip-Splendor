
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TripSplendor</title>
    <style>
        body {
            background-image: url('images/background.jpg');
            background-size: cover;
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        .container {
            width: 50%;
            margin: 100px auto;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.5);
        }

        h3 {
            text-align: center;
        }

        form {
            text-align: center;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }

        input[type="submit"] {
            width: 30%;
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        img {
            display: block;
            margin: 0 auto;
        }
        input[type="email"]{
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }
        
    </style>
</head>
<body>
<script src="formValidation.js"></script>
    <div class="container">

        <h3>Booking Form</h3> 

        <form method="post" action="dataInsert.php">

            Payment ID: 
            <input type="text" placeholder="Enter payment id" name="pID">
                        
            Full name:
            <input type="text" name="fname" placeholder="Enter name">

            Email:
            <input type="email" name="cemail" placeholder="Enter email">

            Address:
            <input type="text" name="caddress" placeholder="Enter address">

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

            Card number:
            <input type="number" name="cnumber" placeholder="Enter card number">

            Exp date:
            <input type="date" name="cexpdate" placeholder="Enter month"><br>

            CVV: 
            <input type="number" name="ccvv" placeholder="CVV">

            <input type="submit" value="Proceed to Checkout">
        </form>

        
        
    </div>

</body>
</html>

<!-- N.N Ranawana
NIT23229952 -->