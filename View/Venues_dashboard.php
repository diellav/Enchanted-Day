<?php
include_once '../Database/Databaza.php';
include_once 'Databaza_Booking_Venue.php';
echo " <link rel='stylesheet' href='../Dashboard.css'>";

$db = new Databaza();
$connection = $db->getConnection();

$venue = new Databaza_Booking_Venue($connection);
$venues = $venue->getAllFromBookVenues();
echo "<html><a href='../Signout.php' id='signout'>SignOut</a></html>";
echo "<html><a href='Dashboard.php' id='contact'>View Users</a></html>";
echo "<html><a href='Contact.php' id='cart'>View Contact</a></html>"; 
echo "<html><a href='Cart_Dashboard.php' id='cart'>View Cart</a></html>"; 
echo "<html><a href='../lista_venues.php' id='cart'>View Venues</a></html>"; 



echo "<table border='1'>
<tr>
    <th>id</th>
    <th>first_name</th>
    <th>last_name</th>
    <th>event_date</th>
    <th>guest_number</th>
    <th>additional_details</th>
    <th>user_id</th>
    <th>venue</th>
</tr>";

foreach ($venues as $perdoruesi) {
    echo 
    "
    <tr>
        <td>{$perdoruesi['id']}</td>
        <td>{$perdoruesi['first_name']}</td> 
        <td>{$perdoruesi['last_name']}</td> 
        <td>{$perdoruesi['event_date']}</td> 
        <td>{$perdoruesi['guest_number']}</td> 
        <td>{$perdoruesi['additional_details']}</td> 
        <td>{$perdoruesi['user_id']}</td> 
        <td>{$perdoruesi['venue']}</td> 
    </tr>
    ";
}
echo "</table>";
?>
