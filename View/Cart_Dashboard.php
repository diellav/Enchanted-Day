<?php
session_start();
include_once '../Database/Databaza.php';
include_once '../Database/Cart.php';
echo " <link rel='stylesheet' href='../Dashboard.css'>";
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] != true) {
    echo "<script>
        alert('Please sign up or log in to access this page.');
        window.location.href = 'SignUp.php';
    </script>";
    exit;
}
$db = new Databaza();
$connection = $db->getConnection();
$userId = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

$karta = new Cart($connection,$userId);
$kartat = $karta->getAllFromCart();
echo "<html><a href='../Signout.php' id='signout'>SignOut</a></html>";
echo "<html><a href='Dashboard.php' id='contact'>View Users</a></html>";
echo "<html><a href='Contact.php' id='cart'>View Contact</a></html>"; 
echo "<html><a href='Payments_Dashboard.php' id='cart'>View Payments</a></html>"; 
echo "<html><a href='lista_venues.php' id='cart'>View Venues</a></html>"; 
echo "<html><a href='Venues_Dashboard.php' id='contact'>View Booked Venues</a></html>";
echo "<html><a href='Measurements_dashboard.php' id='contact'>View Measurements</a></html>";

echo "<table border='1'>
<tr>
    <th>id</th>
    <th>item_id</th>
    <th>item_name</th>
    <th>item_cost</th>
    <th>user_id</th>
    <th>added_at</th>
    <th>item_image</th>
</tr>";

foreach ($kartat as $perdoruesi) {
    echo 
    "
    <tr>
        <td>{$perdoruesi['id']}</td>
        <td>{$perdoruesi['item_id']}</td> 
        <td>{$perdoruesi['item_name']}</td> 
        <td>{$perdoruesi['item_cost']}</td> 
        <td>{$perdoruesi['user_id']}</td> 
        <td>{$perdoruesi['added_at']}</td> 
        <td>{$perdoruesi['item_image']}</td> 
    </tr>
    ";
}
echo "</table>";
?>
