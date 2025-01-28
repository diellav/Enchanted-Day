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
