<?php
include_once 'Database/Databaza.php';
include_once 'User.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new Databaza();
    $connection = $db->getConnection();
    $user = new User($connection);

if (!isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === false) {
    header("Location: SignUp.php"); 
    exit;
}
    if (!$connection) {
        echo "<script>console.log('Database failed successfully!');</script>";
    } else {
        echo "<script>console.log('Database connected successfully!');</script>";
    }   

 
    if (empty($_POST['Name_Surname']) || empty($_POST['Partner_name_surname']) || empty($_POST['Email']) ||
            empty($_POST['Phone_number']) || empty($_POST['Username']) || empty($_POST['Password'])) {
                echo "<script>alert('Fill all fields.');</script>";
    } else {
    
    $name_surname = $_POST['Name_Surname'];
    $partner = $_POST['Partner_name_surname'];
    $email = $_POST['Email'];
    $phone = $_POST['Phone_number'];
    $username = $_POST['Username'];
    $password = $_POST['Password'];

    $id = $username . rand(100, 999);

    $signUpResult = $user->signUp($id, $name_surname, $partner, $email, $phone, $username, $password);
    if ( $signUpResult===true) {
        header("Location: Log-in.php"); 
        exit;
    } else if( $signUpResult==="Username already exists") {
        echo "<script>alert('Username already exists');</script>";
    } else if( $signUpResult==="Email already exists") {
        echo "<script>alert('Email already exists');</script>";
    }else{
        echo "<script>alert('Error registering user! Please try again later.');</script>";
    }

        }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style-signup.css">
    <link rel="stylesheet" href="media_Log-In.css">
</head>
<body>
    <div class="foto">
        <img src="Fotot/Foto-Login.jpg" alt="login">
    </div>
    <div class="login">
        <div class="container">
            <p class="txt">Sign Up to Enchanted</p>
            <form action="SignUp.php" id="form" method ="POST">
                <input type="text" name="Name_Surname" placeholder="Name and Surname" required class="inputi" id="emri">
                <input type="text" name="Partner_name_surname" placeholder="Partner name and surname" required class="inputi" id="emriPartner">
                <input type="text" name="Email" placeholder="Email" required class="inputi" id="email">
                <input type="tel" name="Phone_number" placeholder="Phone number" required class="inputi" id="tel">
                <input type="text" name="Username" placeholder="Username" required class="inputi" id="user">
                <input type="password" name="Password" placeholder="Password" required class="inputi" id="pass">
                <input type="submit" name="formaEsubmitit" value="Sign_Up" class="sub">
            </form>
            <br>
            <p>Remember me<input type="checkbox"></p>
            
           <p>Already an  User?<a href="Log-in.php" id = "log">LogIn</a></p>
        </div>
    </div>
    <script src="validimi_signup.js"></script>
</body>
</html>
