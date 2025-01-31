
<?php
include_once 'Database/Databaza.php';
include_once 'User.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db = new Databaza();
    $conn = $db->getConnection();
    $user = new User($conn);


    $username =trim ($_POST['username']);
    $new_password = trim($_POST['new_password']);
    $confirm_password = trim($_POST['confirm_password']);



    if ($new_password !== $confirm_password) {
        echo "Passwords do not match!";
        exit;
    }

    try {
        $query = "SELECT id FROM user WHERE Username = :username";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        
        $userData = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if (!$userData) {
        echo "<script>alert('Username does not exist');</script>";
        exit;
    }

       

        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
        $update_query = "UPDATE user SET Password = :password WHERE Username = :username";
        $update_stmt = $conn->prepare($update_query);
        $update_stmt->bindParam(':password', $hashed_password);
        $update_stmt->bindParam(':username', $username);

        if ($update_stmt->execute()) {
            echo "<script>alert(' Password updated successfully! ');</script>";
            header("Location: Log-in.php");
            exit;
        } else {
            echo "<script>alert(' Failed to update password!');</script>";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgotten Password</title>
    <link rel="stylesheet" href="forgotten-pass.css">
    <link rel="stylesheet" href="media_Log-In.css">

</head>
<body>
    <div class="foto">
        <img src="Fotot/Foto-Login.jpg" alt="login">
    </div>
    <div class="login">
        <div class="container">
            <p class="txt">Change Password</p>
            <form action="Forgotten-psw.php" id="form" method="POST">
                <input type="text" name="username" placeholder="Username" required class="inputi" id="user">
                <input type="password" name="new_password" placeholder="New Password" required class="inputi" id="new">
                <input type="password" name="confirm_password" placeholder="Confirm Password" required class="inputi" id="confirm">
                <input type="submit" value="Save new Password and Login" class="sub">
            </form>
        </div>
    </div>
    <script src="validimi_forgottenpass.js"></script>
</body>
</html>