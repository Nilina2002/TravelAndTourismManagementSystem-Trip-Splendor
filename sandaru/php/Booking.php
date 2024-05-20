<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('bgimage-bookin/background.jpg'); 
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .container {
            max-width: 600px;
            margin: 100px auto;
            background-color: rgba(255, 255, 255, 0.8); 
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"], input[type="email"], input[type="number"], input[type="date"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        input[type="radio"] {
            margin-right: 5px;
        }
        input[type="submit"], .view-list-btn {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
            text-decoration: none;
        }
        input[type="submit"]:hover, .view-list-btn:hover {
            background-color: #0056b3;
        }
    </style>
    <script>
        function showSuccessMessage() {
            alert("Booking successful!");
        }
    </script>
</head>
<body>
    <div class="container">
        <h2>Booking Form</h2>
        <form action="details.php" method="POST" onsubmit="showSuccessMessage()">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="Card">Card:</label>
                <input type="text" id="Card" name="Card" required>
            </div>
            <div class="form-group">
                <label for="Mail">Email:</label>
                <input type="email" id="Mail" name="Mail" required>
            </div>
            <div class="form-group">
                <label for="Location">Location:</label>
                <input type="text" id="Location" name="Location" required>
            </div>
            <div class="form-group">
                <label for="pay">Payment Method:</label><br>
                <input type="radio" id="credit" name="pay" value="Credit Card" required>
                <label for="credit">Credit Card</label><br>
                <input type="radio" id="debit" name="pay" value="Debit Card">
                <label for="debit">Debit Card</label><br>
                <input type="radio" id="paypal" name="pay" value="PayPal">
                <label for="paypal">PayPal</label>
            </div>
            <div class="form-group">
                <label for="Number">Number:</label>
                <input type="text" id="Number" name="Number" required>
            </div>
            <div class="form-group">
                <label for="Year">Expiration Date:</label>
                <input type="date" id="Year" name="Year" required>
            </div>
            <div class="form-group">
                <label for="Amount">Amount:</label>
                <input type="number" id="Amount" name="Amount" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Submit" >
                
            </div>
        </form>
    </div>
</body>
</html>
