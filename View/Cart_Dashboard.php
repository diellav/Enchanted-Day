<?php
include_once '../Database/Databaza.php';
include_once 'Databaza_Cart.php';
echo " <link rel='stylesheet' href='../Dashboard.css'>";

$db = new Databaza();
$connection = $db->getConnection();

$karta = new Databaza_Cart($connection);
$kartat = $karta->getAllFromCart();
echo "<html><a href='../Signout.php' id='signout'>SignOut</a></html>";
echo "<html><a href='Dashboard.php' id='contact'>View Users</a></html>";
echo "<html><a href='Contact.php' id='cart'>View Contact</a></html>"; 
echo "<html><a href='../lista_venues.php' id='cart'>View Venues</a></html>"; 


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
