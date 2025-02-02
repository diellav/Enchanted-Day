<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] != true) {
    echo "<script>
        alert('Please sign up or log in to access this page.');
        window.location.href = '../SignUp.php';
    </script>";
    exit;
}
$venueId = $_GET['id'];

include_once '../Database/Databaza.php';
include_once '../Database/VenuesDatabase.php';


$db = new Databaza();
$connection = $db->getConnection();

$venue = new VenuesDatabase($connection);

$venueEdit  = $venue->getVenueById($venueId);

if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $category = $_POST['category'];
    $location = $_POST['location'];
    $photo = $_POST['photo'];
    $link = $_POST['link'];

    $venue->updateVenue($id, $name, $category, $location, $photo, $link);

    header("location:lista_venues.php");
    exit;
}
?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Venue</title>
</head>
<body>
    <h3>Edit Venue</h3>
    <form action="" method="POST">
    <input type="text" name="id" value="<?php echo $venueEdit['id']; ?>"> <br> <br>
        <input type="text" name="name" value="<?php echo $venueEdit['name']; ?>"> <br> <br>
        <input type="text" name="category" value="<?php echo $venueEdit['category']; ?>"> <br> <br>
        <input type="text" name="location" value="<?php echo $venueEdit['location']; ?>"> <br> <br>
        <input type="text" name="photo" value="<?php echo $venueEdit['photo']; ?>"> <br> <br>
        <input type="text" name="link" value="<?php echo $venueEdit['link']; ?>"> <br> <br>
        <input type="submit" name="edit" value="Save Changes"> <br> <br>
    </form>
</body>
</html>
