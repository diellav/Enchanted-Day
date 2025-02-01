<?php 
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] != true) {
    echo "<script>
        alert('Please sign up or log in to access this page.');
        window.location.href = '../SignUp.php';
    </script>";
    exit;
}

include_once '../Database/Databaza.php';
include_once '../Database/VenuesDatabase.php';
$db = new Databaza();
$connection = $db->getConnection();

$venues = new VenuesDatabase($connection);
$result=$venues->getVenues();

echo " <link rel='stylesheet' href='../Dashboard.css'>";

echo "<html><a href='../Signout.php' id='signout'>SignOut</a></html>";
echo "<html><a href='Dashboard.php' id='cart'>View Users</a></html>";
echo "<html><a href='Contact.php' id='contact'>View contact</a></html>";
echo "<html><a href='Payments_Dashboard.php' id='cart'>View Payments</a></html>"; 
echo "<html><a href='Venues_Dashboard.php' id='cart'>View Booked Venues</a></html>"; 
echo "<html><a href='Cart_Dashboard.php' id='cart'>View cart</a></html>";
echo "<html><a href='../shtimi_venues.php' id='cart'>Add venues</a></html>";
echo "<html><a href='Measurements_dashboard.php' id='contact'>View Measurements</a></html>";

echo "<h2>Venues list</h2>";
if ($result) {
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Category</th>
                <th>Name</th>
                <th>Location</th>
                <th>Photo</th>
                <th>Link</th>
            </tr>";
            foreach($result as $perdoruesi){
                echo 
                "
                <tr>
                    <td>$perdoruesi[id]</td>
                    <td>$perdoruesi[category]</td> 
                    <td>$perdoruesi[name]</td> 
                    <td>$perdoruesi[location]</td> 
                    <td>$perdoruesi[photo]</td> 
                    <td>$perdoruesi[link]</td> 
                </tr>
                ";}
    echo "</table>";
} else {
    echo "There are no venues!";
}
?>
