<?php 
session_start();
if (isset($_SESSION['username']) || $_SESSION['username']=="admin") {
echo "<h2 style='italic'>Welcome, admin!</h2>";
}else{
    header("Location: ../HomePage.php");
    exit();
}
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] != true) {
    echo "<script>
        alert('Please sign up or log in to access this page.');
        window.location.href = '../SignUp.php';
    </script>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="../Dashboard.css">
    <title>Document</title>
</head>
<body>
    <table border="1">
     
        <tr>
            <th>ID</th>
            <th>Name and Surname</th>
            <th>Partner name and surname</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Username</th>
            <th>Password</th>
            <th>Edit</th> 
            <th>Delete</th> 
        </tr>
        <?php 
        include_once '../Database/Databaza.php';
        include_once '../User.php';

        $db = new Databaza();
        $connection = $db->getConnection();
        $user = new User($connection);

        $users = $user->getAllUsers(); 
        foreach($users as $perdoruesi){
            echo 
            "
            <tr>
                <td>$perdoruesi[id]</td>
                <td>$perdoruesi[Name_Surname]</td> 
                <td>$perdoruesi[Partner_name_surname]</td> 
                <td>$perdoruesi[Email]</td> 
                <td>$perdoruesi[Phone_number]</td> 
                <td>$perdoruesi[Username]</td> 
                <td>$perdoruesi[Password]</td> 
                <td><a href='Edit.php?id=$perdoruesi[id]' id='edit'>Edit</a></td> 
                <td><a href='Delete.php?id=$perdoruesi[id]' id='delete'>Delete</a></td>
            </tr>
            ";
        }
        echo "<html><a href='../Signout.php' id='signout'>SignOut</a></html>";
        echo "<html><a href='Contact.php' id='contact'>View contact</a></html>";
        echo "<html><a href='Payments_Dashboard.php' id='cart'>View Payments</a></html>"; 
        echo "<html><a href='Cart_Dashboard.php' id='cart'>View cart</a></html>";
        echo "<html><a href='lista_venues.php' id='cart'>View Venues</a></html>"; 
        echo "<html><a href='Venues_Dashboard.php' id='contact'>View Booked Venues</a></html>";
        echo "<html><a href='Measurements_dashboard.php' id='contact'>View Measurements</a></html>";

        ?>
    </table>

</body>
</html>
