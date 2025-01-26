<?php
$userId = $_GET['id']; 

include_once '../Database/Databaza.php';
include_once '../User.php';

$db = new Databaza();
$connection = $db->getConnection();

$user = new User($connection);

$user->deleteUser($userId);

header("location:Dashboard.php");
exit();
?>
