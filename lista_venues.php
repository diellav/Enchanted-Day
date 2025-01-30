<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "weddingplanner";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Lidhja dështoi: " . $conn->connect_error);
}



$sql = "SELECT * FROM venues";
$result = $conn->query($sql);

echo " <link rel='stylesheet' href='Dashboard.css'>";

echo "<html><a href='../Signout.php' id='signout'>SignOut</a></html>";
echo "<html><a href='Dashboard.php' id='cart'>View Users</a></html>";
echo "<html><a href='Contact.php' id='contact'>View contact</a></html>";
echo "<html><a href='Payments_Dashboard.php' id='cart'>View Payments</a></html>"; 
echo "<html><a href='Venues_Dashboard.php' id='cart'>View Booked Venues</a></html>"; 
echo "<html><a href='View/Cart_Dashboard.php' id='cart'>View cart</a></html>";
echo "<html><a href='shtimi_venues.php' id='cart'>Add venues</a></html>";

echo "<h2>Venues list</h2>";
if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Category</th>
                <th>Name</th>
                <th>Location</th>
                <th>Photo</th>
                <th>Link</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['category'] . "</td>
                <td>" . $row['name'] . "</td>
                <td>" . $row['location'] . "</td>
                <td>" . $row['photo'] . "</td>
                <td>" . $row['link'] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "There are no venues!";
}

$conn->close();
?>
