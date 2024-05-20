<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Details</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('images/background.jpg'); 
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .container {
            width: 80%;
            margin: 50px auto; 
            background-color: rgba(255, 255, 255, 0.8); 
            border-radius: 10px; 
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); 
            padding: 20px;
        }
        h2 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
            color: #333; 
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1); 
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2; 
        }
        
        .home-btn {
            text-align: center;
            margin-top: 20px; /* Optional: Adjust the margin as needed */
        }
        .home-btn form {
            display: inline-block;
        }
        .home-btn input[type="submit"] {
            padding: 10px 20px;
            background-color: #6a4a3a; 
            color: white;
            border: none;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 8px;
        }
        .home-btn input[type="submit"]:hover {
            background-color: #45a049;
        }
    
    </style>
</head>
<body>
    <div class="container">
        <h2>Payment Details</h2>
        <?php
        require 'config.php';

        $sql = "SELECT Payment_ID, F_name, email, Address, Transportation, Card_Number, exp_date, cvv FROM booking_c";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>Payment ID</th><th>First Name</th><th>Email</th><th>Address</th><th>Transportation</th><th>Card Number</th><th>Expiry Date</th><th>CVV</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["Payment_ID"]."</td>"."<td>".$row["F_name"]."</td>"."<td>".$row["email"]."</td>"."<td>".$row["Address"]."</td>"."<td>".$row["Transportation"]."</td>"."<td>".$row["Card_Number"]."</td>"."<td>".$row["exp_date"]."</td>"."<td>".$row["cvv"]."</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "No Results";
        }

        $con->close();
        ?>
    </div>

    <div class="home-btn">
                <form method="get" action="../nimasha/update(booking).php">
                    <input type="submit" value="Update" >
                
                </form>
    </div>
    <div class="home-btn">
                <form method="get" action="../nimasha/delete(booking).php">
                    <input type="submit" value="Delete" >
                
                </form>
    </div>
</body>
</html>

<!-- N.N.Ranawana
IT23229952 -->

