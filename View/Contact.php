<?php
include_once '../Database/Databaza.php';
include_once 'Databaza_kontakt.php';

$db = new Databaza();
$connection = $db->getConnection();

$kontakt = new Databaza_kontakt($connection);
$kontaktet = $kontakt->getAllUsers();

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
