<?php 
session_start();
if (isset($_SESSION['username']) || $_SESSION['username']=="admin") {
echo "<script>alert('Welcome, admin!');</script>";
}else{
    header("Location: ../HomePage.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
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
                <td><a href='Edit.php?id=$perdoruesi[id]'>Edit</a></td> 
                <td><a href='Delete.php?id=$perdoruesi[id]'>Delete</a></td>
            </tr>
            ";
        }
        echo "<html><a href='../Signout.php'>SignOut</a></html>"
        ?>
    </table>
</body>
</html>
