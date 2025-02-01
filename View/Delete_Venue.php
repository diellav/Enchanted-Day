<?php
$venueId = $_GET['id']; 

include_once '../Database/Databaza.php';
include_once '../Database/VenuesDatabase.php';

$db = new Databaza();
$connection = $db->getConnection();

$venue = new VenuesDatabase($connection);

$venue->deleteVenue($venueId);

header("location:lista_venues.php");
exit();
?>
