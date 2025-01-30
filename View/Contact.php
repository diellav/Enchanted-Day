<?php
include_once '../Database/Databaza.php';
include_once 'Databaza_kontakt.php';
echo " <link rel='stylesheet' href='../Dashboard.css'>";

$db = new Databaza();
$connection = $db->getConnection();

$kontakt = new Databaza_kontakt($connection);
$kontaktet = $kontakt->getAllUsers();

echo "<html><a href='../Signout.php' id='signout'>SignOut</a></html>";
echo "<html><a href='Dashboard.php' id='contact'>View Users</a></html>";
echo "<html><a href='Cart_Dashboard.php' id='cart'>View Cart</a></html>"; 
echo "<html><a href='Payments_Dashboard.php' id='cart'>View Payments</a></html>"; 
echo "<html><a href='../lista_venues.php' id='cart'>View Venues</a></html>"; 
echo "<html><a href='Venues_Dashboard.php' id='contact'>View Booked Venues</a></html>";

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
