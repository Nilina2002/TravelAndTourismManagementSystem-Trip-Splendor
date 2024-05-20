<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Notice</title>
    <link rel="stylesheet" href="update.css"> 
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #032449;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            max-width: 400px;
            width: 100%;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        legend {
            font-weight: bold;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

       
        textarea,
        input[type="date"],
        input[type="submit"] {
            margin-bottom: 10px;
            padding: 8px;
            width: 100%;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #45a049;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-bottom: 10px;
            padding: 8px;
            width: 100%;
            box-sizing: border-box;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
    
</head>
<body>
    <script src="notice.js"></script>
    <div class="container">
        <h1>Update Notice</h1>
        <?php
        
        require 'config.php';

        
        $notice_id = $_GET['notice_id'];
        $sql = "SELECT notice, date_ AS notice_date FROM notice WHERE notice_id = $notice_id";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $notice = $row['notice'];
            $notice_date = $row['notice_date'];
        } else {
            echo "Notice not found.";
           
        }

        
        $con->close();
        ?>
        <form action="update_notice.php" method="post" onsubmit="return confirmUpdate()">
            <input type="hidden" name="notice_id" value="<?php echo $notice_id; ?>">
            <label for="notice">Notice:</label><br>
            <textarea id="notice" name="notice" rows="4" cols="50"><?php echo isset($notice) ? $notice : ''; ?></textarea><br>
            <label for="date">Date:</label><br>
            <input type="date" id="date" name="date" value="<?php echo isset($notice_date) ? $notice_date : ''; ?>"><br><br>
            <input type="submit"  value="Update">
        </form>
    </div>
</body>
</html>
