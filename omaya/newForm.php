<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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

        input[type="text"],
        textarea,
        input[type="date"],
        input[type="submit"],
        input[type="reset"] {
            margin-bottom: 10px;
            padding: 8px;
            width: 100%;
            box-sizing: border-box;
        }

        input[type="submit"],
        input[type="reset"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<script src="notice.js"></script>
    <div class="container">
        <h2 style="text-align: center;">Notices</h2>
        <fieldset>
            <legend><b>Add Notice</b></legend>
            <form method="post" action="insert.php">
                Notice ID: <input type="text" name="notice_id" disabled><br> 
                Notice: <textarea name="nnotice"></textarea><br>
                Date: <input type="date" name="ndate"><br>
                <input type="submit" onclick="return confirmSubmit()"> <input type="reset">
            </form>
        </fieldset>
    </div>

</body>
</html>
