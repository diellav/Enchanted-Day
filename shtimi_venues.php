<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "weddingplanner";
   
   
   $conn = new mysqli($servername, $username, $password, $dbname);
   
   
   if ($conn->connect_error) {
       die("Lidhja dështoi: " . $conn->connect_error);
   }


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $category=$_POST['category'];
        $location = $_POST['location'];
        $photo = $_POST['photo'];
        $link = $_POST['link'];
    
      
        $stmt = $conn->prepare("INSERT INTO venues (name,category, location, photo, link) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $name, $category,$location, $photo, $link);
    
        if ($stmt->execute()) {
            echo "Venue added successfully<a href='lista_venues.php'>Add venues</a>";
        } else {
            echo "Error!" . $stmt->error;
        }
    
        $stmt->close();
    }
    $conn->close();
    ?>
    
    <!DOCTYPE html>
    <html lang="sq">
    <head>
        <meta charset="UTF-8">
        <title>Add Venues</title>
    </head>
    <body>
        <h2>Add a new venue:</h2>
        <form method="POST" action="shtimi_venues.php">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required><br><br>
    
            <label for="category">Category:</label>
            <input type="text" name="category" id="category" required><br><br>

            <label for="location">Location:</label>
            <input type="text" name="location" id="location" required><br><br>
    
            <label for="photo">Photo:</label>
            <input type="text" name="photo" id="photo"><br><br>
    
            <label for="link">Page link:</label>
            <input type="text" name="link" id="link"><br><br>
    
            <button type="submit">Add Venue</button>
        </form>
    </body>
    </html>
    