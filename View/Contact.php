<?php
session_start();
include_once '../Database/Databaza.php';
include_once '../Database/ContactDatabase.php';
echo " <link rel='stylesheet' href='../Dashboard.css'>";
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] != true) {
    echo "<script>
        alert('Please sign up or log in to access this page.');
        window.location.href = '../SignUp.php';
    </script>";
    exit;
}if (isset($_SESSION['username']) && $_SESSION['username']=="admin") {
    echo "<h2 style='italic'>Welcome, admin!</h2>";
    }else{
        header("Location: ../HomePage.php");
        exit();
    }
$db = new Databaza();
$connection = $db->getConnection();

$kontakt = new ContactDatabase($connection);
$kontaktet = $kontakt->getAllUsers();

echo "<html><a href='../Signout.php' id='signout'>SignOut</a></html>";
echo "<html><a href='Dashboard.php' id='contact'>View Users</a></html>";
echo "<html><a href='Cart_Dashboard.php' id='cart'>View Cart</a></html>"; 
echo "<html><a href='Payments_Dashboard.php' id='cart'>View Payments</a></html>"; 
echo "<html><a href='lista_venues.php' id='cart'>View Venues</a></html>"; 
echo "<html><a href='Venues_Dashboard.php' id='contact'>View Booked Venues</a></html>";
echo "<html><a href='Measurements_dashboard.php' id='contact'>View Measurements</a></html>";

echo "<table border='1'>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Surname</th>
    <th>Email</th>
    <th>Message</th>
</tr>";

foreach ($kontaktet as $perdoruesi) {
    echo 
    "
    <tr>
        <td>{$perdoruesi['id']}</td>
        <td>{$perdoruesi['name']}</td> 
        <td>{$perdoruesi['surname']}</td> 
        <td>{$perdoruesi['email']}</td> 
        <td>{$perdoruesi['message']}</td> 
    </tr>
    ";
}
echo "</table>";
?>
