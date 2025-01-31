<?php
session_start();
include_once '../Database/Databaza.php';
include_once '../Database/Payment.php';
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

$karta = new Payment($connection);
$kartat = $karta->getAllFromPay();
echo "<html><a href='../Signout.php' id='signout'>SignOut</a></html>";
echo "<html><a href='Dashboard.php' id='contact'>View Users</a></html>";
echo "<html><a href='Contact.php' id='cart'>View Contact</a></html>"; 
echo "<html><a href='Cart_Dashboard.php' id='cart'>View Cart</a></html>"; 
echo "<html><a href='lista_venues.php' id='cart'>View Venues</a></html>"; 
echo "<html><a href='Venues_Dashboard.php' id='contact'>View Booked Venues</a></html>";
echo "<html><a href='Measurements_dashboard.php' id='contact'>View Measurements</a></html>";

echo "<table border='1'>
<tr>
    <th>id</th>
    <th>name_surname</th>
    <th>method</th>
    <th>card_number</th>
    <th>expiration_year</th>
    <th>security_Code</th>
    <th>address</th>
    <th>total</th>
    <th>userId</th>
</tr>";

foreach ($kartat as $perdoruesi) {
    echo 
    "
    <tr>
        <td>{$perdoruesi['id']}</td>
        <td>{$perdoruesi['name_surname']}</td> 
        <td>{$perdoruesi['method']}</td> 
        <td>{$perdoruesi['card_number']}</td> 
        <td>{$perdoruesi['expiration_year']}</td> 
        <td>{$perdoruesi['security_Code']}</td> 
        <td>{$perdoruesi['address']}</td> 
        <td>{$perdoruesi['total']}</td> 
        <td>{$perdoruesi['userId']}</td> 
    </tr>
    ";
}
echo "</table>";
?>
