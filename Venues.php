<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enchanted Day</title>
    <link rel="stylesheet" href="venues.css">
    <link rel="stylesheet" href="header&footer.css">
    <link rel="stylesheet" href="media-query-homepage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Parisienne&family=WindSong&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <?php include_once 'header.php'?>
    </header>

    <?php
    session_start();

    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] != true) {
        echo "<script>
            alert('Please sign up or log in to access this page.');
            window.location.href = 'SignUp.php';
        </script>";
        exit;
    }
    else {
        echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
        username=document.getElementById('signup');
            username.textContent='".$_SESSION['username']."';});
        </script>";
    }

    if (!isset($_SESSION['username']) || $_SESSION['username'] == "admin") {
        echo "<script>alert('You are the admin!');</script>";
        echo "<script>window.location.href='HomePage.php';</script>";
        exit; 
    }

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "weddingplanner";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM venues";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $kategoria = '';
        
        echo "<div class='about_venue'><h1>Wedding Venues</h1><h4>
                Explore our handpicked selection of stunning hotels,
                exclusive estates, elegant venues, and fine dining restaurants perfect for your wedding celebration.</h4></div>";
        while ($venue = $result->fetch_assoc()) {
            if ($kategoria !== $venue['category']) {
                if ($kategoria !== '') {
                    echo "</div><br><br>";
                }
                $kategoria = $venue['category'];
                echo "<h2 id='h2'>" . $kategoria. "</h2>";
                echo "<div class='container2'>";
            }

            echo "<div class='venue'>";
            echo "<img src='" . htmlspecialchars($venue['photo']) . "' alt='" . htmlspecialchars($venue['name']) . "'>";
            echo "<a href='" . $venue['link'] . "'>";            
            echo "<p>" . $venue['name']. "</p>";
            echo "<p>" . $venue['location']. "</p>";
            echo "</a></div>";
        }
        echo "</div>";
    } else {
        echo "No venues found.";
    }

    $conn->close();
    ?>

    <footer>
        <?php include_once 'footer.php'?>
    </footer>
</body>
</html>
