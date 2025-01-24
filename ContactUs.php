<?php
include_once 'Databaza.php';
include_once 'ContactDatabase.php';

session_start();
if ($_SERVER['REQUEST_METHOD']=='POST') {
    $db = new Databaza();
    $connection = $db->getConnection();
    $contact = new ContactDatabase($connection);
   
    if (!$connection) {
        echo "<script>console.log('Database not connected');</script>";
    }

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    if ($contact->contact($name, $surname, $email, $message)) {
        echo "<script>alert('Message sent successfully!');</script>";
    } 
    else{
        echo "<script>alert('" . $_SESSION['error'] . "');</script>";
        
    }
   
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact_Us</title>
    <link rel="stylesheet" href="styleContact.css">
    <link rel="stylesheet" href="header&footer.css">
</head>
<body>
    <header>
        <div class="container1">
            <div class="titulli">
                <h1>Enchanted Day</h1>
            </div>

            <div class="navigation">
                <a href="HomePage.html">Home</a>
                <div class="dropdown">
                    <a href="#">Services</a>
                    <div class="permbajtja">
                        <a href="Venues.html">Venues</a>
                        <a href="Catering&Cakes.html">Catering & Cakes</a>
                        <a href="Photos&Videos.html">Photo & Video</a>
                        <a href="Decorating.html">Decoration</a>
                        <a href="Beauty.html">Beauty</a>
                    </div>
                </div>
                <div class="dropdown">
                    <a href="#">Planner</a>
                    <div class="permbajtja">
                        <a href="#">Budget</a>
                        <a href="#">Guest List</a>
                    </div>
                </div>
                <a href="ContactUs.html">Contact Us</a>
                <a href="Log-in.html">Log in</a>

                <form action="/search" method="get" class="search">
                    <input type="text" name="search" placeholder="Search..." class="inputi">
                    <button type="submit"><img src="Fotot/search.png" ></button>
                </form>
            </div>
        </div>
    </header>
    <div class="contactUs">
        <div class="fotoback">
            <div class="shadow"></div>
            <div class="shkrimi">
                <h1>Contact Us</h1>
                <p>We would love to hear from you! Feel free to get in touch with us for your dream wedding.</p>
                <div class="info">
                    <p><strong>Location:</strong>32, Avenue ve New York
                        321994 New York</p>
                        <p><strong>Email:</strong> <a href="">enchantyourday@gmail.com</a></p>
                        <p><strong>Phone:</strong> +(1) 123-456-7899</p>
                </div>
                <form class="forma" method="POST" action="ContactUs.php" id="form">
                    <input type="text"  id= "name" name="name" placeholder="Your First Name" required>
                    <input type="text" id= "surname" name="surname" placeholder="Your Last Name" required>
                    <input type="email" id= "email" name="email" placeholder="Your Email" required>
                    <textarea  id= "message" name="message" placeholder="Your Message" required></textarea>
                    <button type="submit">Send Message</button>
                </form>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer">

            <div class="follow">
            <h1>Enchant your special day.</h1>
                <div class="social">
            <a href="#"><img src="Fotot/black-instagram-icon.png"></a>    
             <a href="#"><img src="Fotot/facebook-app-round-icon.png"></a>    
             <a href="#"><img src="Fotot/x-social-media-logo-icon.png"></a>    
             <a href="#"><img src="Fotot/pinterest-round-icon.png"></a> 
             <a href="#"><img src="Fotot/tiktok-icon.png"></a> </div>

            <h2 class="fundi">Contact Us : <a href="#">enchantyourday@gmail.com</a></h1> 
            </div>

        </div>

        <div id="vije">
        <hr class="line"></div> 
    <div class="end">
        <div class="permbledhja">
            <h2>Services</h2>
            <a href="Venues.html">Venues</a>
            <a href="Catering&Cakes.html">Catering & Cakes</a>
            <a href="Photos&Videos.html">Photo & Video</a>
            <a href="Decorating.html">Decoration</a>
            <a href="Beauty.html">Beauty</a>
        </div>

        <div class="permbledhja">
            <h2>Planner</h2>
            <a href="#">Budget</a>
            <a href="#">Guest List</a>
        </div>


        <div class="permbledhja">
            <h2>Follow us:</h2>
            <a href="https://www.instagram.com/">Instagram</a>
            <a href="https://www.facebook.com/">Facebook</a>
            <a href="https://x.com">X</a>
            <a href="https://www.pinterest.com">Pinterest</a>
            <a href="https://www.tiktok.com">TikTok</a>
        </div>

        <div class="tt">
            <h1 id="enchant">Enchanted Day</h1>
            <p id="trademarks">© 2024 Enchanted Day. All rights reserved. Website photography courtesy of our talented partners. Enchanted Day™, the Enchanted logo, and related marks are trademarks and service marks of Enchanted Day Inc. in the USA and beyond.
                Crafted with care and creativity to make your moments magical.</p>
        </div>
        
    </div>

  
    </footer>
    <script src="validimi_i_contact.js"></script>
</body>
</html>