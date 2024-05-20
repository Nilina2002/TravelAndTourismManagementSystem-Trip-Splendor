<!DOCTYPE html>
<html>
<head>
    <title>Notification Project</title>
    <link rel="stylesheet" href="notice.css">
    <style>
        .btn1,
        .btn2 {
            display: inline-block;
            padding: 8px 16px;
            margin-top: 10px;
            margin-right: 10px;
            font-size: 14px;
            border: 2px solid #000000; 
            background-color: white;
            color: #000000; 
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s, border-color 0.3s;
        }

        .btn1:hover,
        .btn2:hover {
            background-color: #032449; 
            color: white; 
        }

        .btn1 a,
        .btn2 a {
            text-decoration: none;
            color: inherit;
        }

        fieldset {
            border: 2px solid #f0f0f0;
            border-radius: 8px;
            padding: 10px;
            margin-bottom: 20px;
        }

        legend {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        input[type="submit"] {
    display: inline-block;
    margin-top: 20px;
    padding: 10px 20px;
    background-color: black;
    color: white;
    border: none;
    border-radius: 20px;
    text-align: center;
    text-decoration: none;
    cursor: pointer;
    transition: background-color 0.3s;
    
}

input[type="submit"]:hover {
    background-color: grey;
    color: black;
}

input[type="submit"]:active {
    background-color: black;
}



    </style>
</head>
<body>
    <script src="notice.js"></script>
    <div class="container">
        <div class="notificationContainer">
            <header>
                <div class="notificationHeade"> 
                    <h1>Notices</h1>
                    <span id="num-of-notif"></span>
                </div>
            </header>
            <main>
                <?php
                    require 'config.php';

                    $sql = "SELECT notice_id, notice, date_ AS notice_date FROM notice ORDER BY notice_id";
                    $result = $con->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $notice = isset($row['notice']) ? $row['notice'] : "";
                            $notice_date = isset($row['notice_date']) ? $row['notice_date'] : "";

                            echo "<fieldset>";
                            echo "<legend><b>$notice_date</b></legend>";
                            echo "<p>$notice</p>";
                            echo "<button class='btn1'><a href='update_form.php?notice_id=" . $row['notice_id'] . "'>Update</a></button>";
                            echo "<button class='btn2' onclick='confirmDelete(" . $row['notice_id'] . ")'><a href='delete_notice.php?notice_id=" .$row['notice_id'] . "'>Delete</a></button>";
                            echo "</fieldset>";
                        }
                    } else {
                        echo "<p>No notices found.</p>";
                    }
                    $con->close();
                ?>
                
                <div class="home-btn">
                <form method="get" action="../index.php">
                    <input type="submit" value="Home" >
                
                </form>
                </div>
                
            </main>
        </div>
    </div>
</body>
</html>

