<?php
session_start();
include_once 'Database/Databaza.php';
include_once 'User.php';
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
if ($_SERVER['REQUEST_METHOD']=='POST') {
    $db = new Databaza();
    $connection = $db->getConnection();
    $user = new User($connection);
   
    if (!$connection) {
        echo "<script>console.log('Database not connected');</script>";
    }

    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($user->login($username, $password)) {
        $_SESSION['logged_in'] = true; 
        $_SESSION['username'] = $username;
        if ($username == "admin") {
            $_SESSION['admin'] = true;
        }
            header("Location: HomePage.php"); 
            exit();
    } 
    else{
        echo "<script>alert('" . $_SESSION['error'] . "');</script>";
        
    }
   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="style_login.css">
    <link rel="stylesheet" href="media_Log-In.css">     
</head>
<body>
    <div class="foto">
        <img src="Fotot/Foto-Login.jpg" alt="login">
    </div>
    <div class="login">
        <div class="container">
            <p class="txt">Log In to Enchanted</p>
            <form action="Log-in.php" method="POST" id="form">
                <input type="text" name="username" placeholder="Username"required class="inputi" id="user">
                <input type="password" name="password" placeholder="Password" required class="inputi"  id="pass">
                <input type="submit" value="Login" class="sub">
            </form>
            <br>
            <p>Remember me<input type="checkbox"></p>
            <div class="signup">
            <a href="Forgotten-psw.php"><p>Forgotten password?</p></a>
            </div>
        </div>
    </div>
    
   <script src="validimi_i_login.js"></script>
</body>
</html>