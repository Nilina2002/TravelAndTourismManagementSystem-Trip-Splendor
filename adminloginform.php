<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <link rel="stylesheet" href="loginform.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <hr>
    <h2>Admin Login</h2>
    <hr>
    <form action="adminlogin.php" method="post">
        <label for="adminid">Admin ID:</label><br>
        <input type="text" id="adminid" name="adminid"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Login">
        
    </form>

    <div style="text-align: center; margin-top: 15px;">
    <button style="padding: 10px 20px; background-color: #3498db; color: white; border: none; cursor: pointer;" onclick="window.location.href = 'index.php';">Return to HomePage</button>
</div>


</body>
</html>
