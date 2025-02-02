<?php
include_once 'Database/Databaza.php';
include_once 'Database/ContactDatabase.php';

session_start();
if ($_SERVER['REQUEST_METHOD']=='POST') {
    $db = new Databaza();
    $connection = $db->getConnection();
    $contact = new ContactDatabase($connection);
   
    if (!$connection) {
        echo "<script>console.log('Database not connected');</script>";
    }

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    if ($contact->contact($name, $surname, $email, $message)) {
        echo "<script>alert('Message sent successfully!');</script>";
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
    <title>Contact_Us</title>
    <link rel="stylesheet" href="styleContact.css">
    <link rel="stylesheet" href="header&footer.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Parisienne&family=WindSong&display=swap" rel="stylesheet">
</head>
<body>
<header>
        <?php include_once 'header.php'?>
    </header>

    <?php


    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] != true) {
        echo "<script>
            alert('Please sign up or log in to access this page.');
            window.location.href = 'SignUp.php';
        </script>";
        exit;
    }
    else {
        echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
        username=document.getElementById('signup');
            username.textContent='".$_SESSION['username']."';});
        </script>";
    }
    
if (!isset($_SESSION['username']) && $_SESSION['username'] == "admin") {
    echo "<script>alert('You are the admin!');</script>";
    echo "<script>window.location.href='HomePage.php';</script>";
    exit; 
}
    ?>
    <div class="contactUs">
        <div class="fotoback">
            <div class="shadow"></div>
            <div class="shkrimi">
                <h1>Contact Us</h1>
                <p>We would love to hear from you! Feel free to get in touch with us for your dream wedding.</p>
                <div class="info">
                    <p><strong>Location:</strong>32, Avenue ve New York
                        321994 New York</p>
                        <p><strong>Email:</strong> <a href="">enchantyourday@gmail.com</a></p>
                        <p><strong>Phone:</strong> +(1) 123-456-7899</p>
                </div>
                <form class="forma" method="POST" action="ContactUs.php" id="form">
                    <input type="text"  id= "name" name="name" placeholder="Your First Name" required>
                    <input type="text" id= "surname" name="surname" placeholder="Your Last Name" required>
                    <input type="email" id= "email" name="email" placeholder="Your Email" required>
                    <textarea  id= "message" name="message" placeholder="Your Message" required></textarea>
                    <button type="submit">Send Message</button>
                </form>
            </div>
        </div>
    </div>

    <footer>
    <?php include_once 'footer.php'?>
    </footer>
    <script src="validimi_i_contact.js"></script>
</body>
</html>