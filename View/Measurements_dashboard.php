<?php
session_start();
include_once '../Database/Databaza.php';
include_once '../Database/MeasureDatabase.php';
echo " <link rel='stylesheet' href='../Dashboard.css'>";
    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] != true) {
        echo "<script>
            alert('Please sign up or log in to access this page.');
            window.location.href = '../SignUp.php';
        </script>";
        exit;
    }
if (isset($_SESSION['username']) && $_SESSION['username']=="admin") {
echo "<h2 style='italic'>Welcome, admin!</h2>";
}else{
    header("Location: ../HomePage.php");
    exit();
}
$db = new Databaza();
$connection = $db->getConnection();

$measure = new MeasureDatabase($connection);
$measurements = $measure->getAllFromMeasurements();
echo "<html><a href='../Signout.php' id='signout'>SignOut</a></html>";
echo "<html><a href='Dashboard.php' id='contact'>View Users</a></html>";
echo "<html><a href='Contact.php' id='cart'>View Contact</a></html>"; 
echo "<html><a href='Payments_Dashboard.php' id='cart'>View Payments</a></html>"; 
echo "<html><a href='Cart_Dashboard.php' id='cart'>View Cart</a></html>"; 
echo "<html><a href='lista_venues.php' id='cart'>View Venues</a></html>"; 
echo "<html><a href='Venues_dashboard.php' id='cart'>View Booked Venues</a></html>"; 

echo "<table border='1'>
<tr>
    <th>id</th>
    <th>userId</th>
    <th>bride_bust</th>
    <th>bride_waists</th>
    <th>bride_hips</th>
    <th>groom_chest</th>
    <th>groom_waist</th>
    <th>groom_hips</th>
    <th>bridesmaids_bust</th>
    <th>bridesmaids_waist</th>
    <th>bridesmaids_hips</th>
    <th>groomsmen_chest</th>
    <th>groomsmen_waist</th>
    <th>groomsmen_hips</th>
</tr>";

foreach ($measurements as $perdoruesi) {
    echo 
    "
    <tr>
        <td>{$perdoruesi['id']}</td>
        <td>{$perdoruesi['userId']}</td> 
        <td>{$perdoruesi['bride_bust']}</td> 
        <td>{$perdoruesi['bride_waist']}</td> 
        <td>{$perdoruesi['bride_hips']}</td> 
        <td>{$perdoruesi['groom_chest']}</td> 
        <td>{$perdoruesi['groom_waist']}</td> 
        <td>{$perdoruesi['groom_hips']}</td> 
        <td>{$perdoruesi['bridesmaids_bust']}</td> 
        <td>{$perdoruesi['bridesmaids_waist']}</td> 
        <td>{$perdoruesi['bridesmaids_hips']}</td> 
        <td>{$perdoruesi['groomsmen_chest']}</td> 
        <td>{$perdoruesi['groomsmen_waist']}</td> 
        <td>{$perdoruesi['groomsmen_hips']}</td> 
    </tr>
    ";
}
echo "</table>";
?>
