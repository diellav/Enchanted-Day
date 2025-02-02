<?php
session_start();

include_once 'Database/Databaza.php';
include_once 'Database/Payment.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new Databaza();
    $connection = $db->getConnection();
    $payment = new Payment($connection);

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
    if (!$connection) {
        echo "<script>console.log('Database failed!');</script>";
    } else {
        echo "<script>console.log('Database connected successfully!');</script>";
    }   

    $name_surname = $_POST['Name_Surname'];
    $method = $_POST['Method'];
    $card_number = $_POST['Card_number'];
    $expiration_year = $_POST['Expiration_year'];
    $security_Code = $_POST['Security_Code'];
    $address = $_POST['Address'];

    
    if (!isset($_SESSION['user_id'])) {
        echo "<script>alert('User session not set. Please log in first.');</script>";
        exit;
    }
    $userId = $_SESSION['user_id'];
    $paymentResult = $payment->pay($name_surname, $method, $card_number, $expiration_year, $security_Code, $address, $userId);
    if ( $paymentResult===true) {
        echo "<script>alert('Payment successful!');  window.location.href = 'Budget.php';</script>";
        exit;
    }else{
        echo "<script>alert('Error processing payment! Please try again later.');</script>";
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
        <img src="Fotot/Payment.jpg" alt="login">
    </div>
    <div class="login">
        <div class="container">
            <p class="txt">Add card details</p>
            <form action="Pay.php" id="form" method ="POST">
                <input type="text" name="Name_Surname" placeholder="Name and Surname"  class="inputi" id="emri">
                <label for="method">Choose payment method</label>
               <div class="radio-group">
    <label><input type="radio" name="Method" value="Card"> Card</label>
    <label><input type="radio" name="Method" value="PayPal"> PayPal</label>
</div>
                <input type="text" name="Card_number" placeholder="Card number"  class="inputi" id="cardNumb">
                <input type="number" name="Expiration_year" placeholder="Expiration year"  class="inputi" id="exp">
                <input type="number" name="Security_Code" placeholder="Security code"  class="inputi" id="security">
                <input type="text" name="Address" placeholder="Address"  class="inputi" id="address">
                <input type="submit" name="formaEsubmitit" value="Confirm payment" class="sub">
            </form>
            <br>
        <a href="Budget.php" id = "log">Cancel Payment</a>
        </div>
    </div>
   <script src="validimi_payment.js"></script>
</body>
</html>
