<?php
session_start();
   
   if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] != true) {
    echo "<script>
        alert('Please sign up or log in to access this page.');
        window.location.href = 'SignUp.php';
    </script>";
    exit;
}
include_once 'Database/Databaza.php';
include_once 'Database/VenuesDatabase.php';
   $db = new Databaza();
   $connection = $db->getConnection();
   
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $category=$_POST['category'];
        $location = $_POST['location'];
        $photo = $_POST['photo'];
        $link = $_POST['link'];
    
        $venue = new VenuesDatabase($connection);
        $venues = $venue->addVenue($name, $category, $location, $photo, $link);
        
        echo $venues;
    }
    ?>
    
    <!DOCTYPE html>
    <html lang="sq">
    <head>
        <meta charset="UTF-8">
        <title>Add Venues</title>
    </head>
    <body>
        <h2>Add a new venue:</h2>
        <form method="POST" action="shtimi_venues.php">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required><br><br>
    
            <label for="category">Category:</label>
            <input type="text" name="category" id="category" required><br><br>

            <label for="location">Location:</label>
            <input type="text" name="location" id="location" required><br><br>
    
            <label for="photo">Photo:</label>
            <input type="text" name="photo" id="photo" required><br><br>
    
            <label for="link">Page link:</label>
            <input type="text" name="link" id="link"><br><br>
    
            <button type="submit">Add Venue</button>
            <br><br>
            <a href="Venues.php">Go to Venues</a>
        </form>
    </body>
    </html>
    