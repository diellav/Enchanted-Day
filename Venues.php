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
    <style> 
    #edit{
        display:flex;
        width:fit-content;
        margin-top:40px;
        margin-left:5%;
        text-decoration:none;
        color:black;
        font-size:larger;
        border: 2px solid rgb(173, 173, 173);
        background-color:rgb(236, 234, 234);
        padding:0.5%;
        border-radius: 5px;
    }
   </style>
</head>
<body>
    <?php
    session_start();

    include_once 'header.php';
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

include_once 'Database/Databaza.php';
include_once 'Database/VenuesDatabase.php';
$db = new Databaza();
$connection = $db->getConnection();

$venues = new VenuesDatabase($connection);
$result=$venues->getVenues();

 if(isset($_SESSION['username']) && $_SESSION['username'] == "admin"){
            echo "<a href='shtimi_venues.php' id='edit'>Edit Venues +</a>";
        }
    if ($result) {
        $kategoria = '';
        echo "<div class='about_venue'><h1>Wedding Venues</h1><h4>
                Explore our handpicked selection of stunning hotels,
                exclusive estates, elegant venues, and fine dining restaurants perfect for your wedding celebration.</h4></div>";
            foreach ($result as $venue) {
            if ($kategoria !== $venue['category']) {
                if ($kategoria !== '') {
                    echo "</div><br><br>";
                }
                $kategoria = $venue['category'];
                echo "<h2 id='h2'>" .htmlspecialchars($kategoria). "</h2>";
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
    ?>

    <footer>
        <?php include_once 'footer.php'?>
    </footer>
</body>
</html>
