<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <link rel="stylesheet" href="loginform.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <hr>
    <h2>User Login</h2>
    <hr>
    <form action="userLogin.php" method="post">
        <label for="adminid">Username:</label><br>
        <input type="text" id="adminid" name="uname"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="pwd"><br><br>
        <input type="submit" value="Login">
        
    </form>

    <div style="text-align: center; margin-top: 15px;">
    <button style="padding: 10px 20px; background-color: #3498db; color: white; border: none; cursor: pointer;" onclick="window.location.href = 'index.php';">Return to HomePage</button>
    <div style="text-align: center; margin-top: 15px;">
    <button style="padding: 10px 20px; background-color: #3498db; color: white; border: none; cursor: pointer;" onclick="window.location.href = 'adminloginform.php';">Login as Admin</button>
</div>



</body>
</html>
