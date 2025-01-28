<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "weddingplanner";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Lidhja dështoi: " . $conn->connect_error);
}


$sql="CREATE TABLE venues (
    id INT AUTO_INCREMENT PRIMARY KEY,
    category VARCHAR(255) NOT NULL,
    name VARCHAR(255) NOT NULL,
    location VARCHAR(255) NOT NULL,
    photo VARCHAR(255),
    link VARCHAR(255)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table 'Venue' was created successfully";
} else {
    echo "Error while  creating table 'Venues'" . $conn->error;
}

$conn->close();
?>