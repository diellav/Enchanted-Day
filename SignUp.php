<?php
include_once 'Databaza.php';
include_once 'User.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new Databaza();
    $connection = $db->getConnection();
    $user = new User($connection);

    $name_surname = $_POST['Name_Surname'];
    $partner = $_POST['Partner_name_surname'];
    $email = $_POST['Email'];
    $phone = $_POST['Phone_number'];
    $username = $_POST['Username'];
    $password = $_POST['Password'];

    if ($user->signUp($name_surname, $partner, $email, $phone, $username, $password)) {
        header("Location: Log-in.php"); 
        exit;
    } else {
        echo "Error registering user!";
    }
    var_dump($connection);
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
                <input type="submit" value="Sign_Up" class="sub">
            </form>
            <br>
            <p>Remember me<input type="checkbox"></p>
        </div>
    </div>
    <script src="validimi_signup.js"></script>
</body>
</html>
