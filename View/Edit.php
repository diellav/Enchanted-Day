<?php
$userId = $_GET['id'];

include_once '../Database/Databaza.php';
include_once '../User.php';


$db = new Databaza();
$connection = $db->getConnection();

$user = new User($connection);

$userEdit  = $user->getUserById($userId);

if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $name = $_POST['Name_Surname'];
    $partner = $_POST['Partner_name_surname'];
    $email = $_POST['Email'];
    $phone = $_POST['Phone_number'];
    $username = $_POST['Username'];
    $password = $_POST['Password'];

    $user->updateUser($id, $name, $partner, $email, $phone, $username, $password);

    header("location:Dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>
    <h3>Edit User</h3>
    <form action="" method="POST">
    <input type="text" name="id" value="<?php echo $userEdit['id']; ?>"> <br> <br>
        <input type="text" name="Name_Surname" value="<?php echo $userEdit['Name_Surname']; ?>"> <br> <br>
        <input type="text" name="Partner_name_surname" value="<?php echo $userEdit['Partner_name_surname']; ?>"> <br> <br>
        <input type="text" name="Email" value="<?php echo $userEdit['Email']; ?>"> <br> <br>
        <input type="text" name="Phone_number" value="<?php echo $userEdit['Phone_number']; ?>"> <br> <br>
        <input type="text" name="Username" value="<?php echo $userEdit['Username']; ?>"> <br> <br>
        <input type="text" name="Password" value="<?php echo $userEdit['Password']; ?>"> <br> <br>
        <input type="submit" name="edit" value="Save Changes"> <br> <br>
    </form>
</body>
</html>
