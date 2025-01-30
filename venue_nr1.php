<?php
include_once 'Database/Databaza.php';
include_once 'BookingDatabase.php';

session_start();
if ($_SERVER['REQUEST_METHOD']=='POST') {
    $db = new Databaza();
    $connection = $db->getConnection();
    $book = new BookingDatabase($connection);
   
    if (!$connection) {
        echo "<script>console.log('Database not connected');</script>";
    }

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $event_date = $_POST['event_date'];
    $guest_number = $_POST['guest_number'];
    $additional_details = $_POST['additional_details'];
    $venue=$_SESSION['venue'];
    if ($book->book($first_name, $last_name, $email, $event_date, $guest_number,$additional_details)) {
        echo "<script>alert('Venue booked successfully!');</script>";
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
    <title>Document</title>
    <link rel="stylesheet" href="header&footer.css">
    <link rel="stylesheet" href="venue_nr1.css">
    <link rel="stylesheet" href="media-query-homepage.css">
</head>
<body>
<header>
        <?php include_once 'header.php'?>
    </header>

    <?php

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
    
if (isset($_SESSION['username']) && $_SESSION['username'] == "admin") {
    echo "<script>alert('You are the admin!');</script>";
    echo "<script>window.location.href='HomePage.php';</script>";
    exit; 
}
    ?>



    <main>
        <div id="titulli">
            <p> Brooklyn Winery </p>
            <?php $_SESSION['venue']='Brooklyn Winery' ;?>
            <p id="adresa">61 Guernsey St, Brooklyn, NY 11222, United States</p>
         </div>
        <div id="slideshow">
            <div class="slide" id="slides1">
                <img src="Venue photos/brooklyn-winery.jpg" alt="Venue 1" class="fotot_veqanta">
                <img src="Venue photos/brooklyn-winery6.jpg" alt="Venue 2" class="fotot_veqanta">
                <img src="Venue photos/brooklyn-winery7.jpg" alt="Venue 3" class="fotot_veqanta">
            </div>
            <div class="slide" id="slides2">
                <img src="Venue photos/brooklyn-winery5.jpg" alt="Venue 4" class="fotot_veqanta">
                <img src="Venue photos/brooklyn-winery4.jpg" alt="Venue 5" class="fotot_veqanta">
                <img src="Venue photos/brooklyn-winery3.jpg" alt="Venue 6" class="fotot_veqanta">
            </div>
        <button class="butoni" id="pas" onclick="nderro(1)">&#10094;</button>
            <button  class="butoni" id="para" onclick="nderro(-1)">&#10094;</button>
        </div>

<div class="detaje">
    <div class="pershkrimi">
        <h3> About Brooklyn Winery </h3>
        <p>
        This boutique urban winery is set in the heart of Williamsburg,
        one of the borough's most vibrant and creative neighborhoods. 
        Winemaker Conor McCormack works tirelessly to produce our premium 
        small batch wines, combining the quality of tradition with the freedom
        of innovation. Tour the winery to learn about how our wines are produced,
        then settle into the wine bar and savor our artisanal wines—some of which are 
        exclusively available on tap—while indulging in our seasonal menu. For those looking
        to commemorate a special occasion, we also function as a private event venue, featuring
        full-service weddings with wine crafted on-site, exquisite cuisine, and the beautiful winery 
        as a backdrop.
        </p>
        <p>An amazing ambiance and backdrop for your next events, client entertaining, and an amazing and unique wedding ambiance
            Our venue features chic accents and lush backdrops, like our signature living plant wall. Multiple skylights throughout 
            the event space provide natural lighting and an airy, open feel. You and your partner will also enjoy the privacy of our wedding suite,
                a room all your own, to relax and enjoy a few blissful moments together.
            Brooklyn Winery's space accommodates up to 300 people for a wedding with ceremony, cocktail hour, dinner and dancing.
                Reserved entirely for you and your guests.
        </p>
        </div>


        <div class="harta">
            <iframe id='map'src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12095.022565274568
            !2d-73.9528715!3d40.7233955!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2595c3d65a71d%3A0xcb96162146bd1c88!2sBrooklyn%20Winery!5e0!3m2!1sen!2s!4v1733581874828!5m2!1sen!2s" 
            width="400" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <p>Working hours: 11AM - 1AM</p>
            <p>Days: Monday-Saturday</p>
            <p>http://www.bkwinery.com/</p>
            <p>+13477631506</p>
        </div>
    </div>

    <div class="detaje_tjera">
        <div class="vendi">
            <p><i><b>Guest capacity:</b> </i>
                from 200- 300 people.</p>
            <p> <i><b>Venue type: </b></i>
                Restaurant, Hotel and Rooftop Ambience</p>
            <p><i><b>Venue setting: </b></i>
                Covered Outdoor
                Indoor
                Outdoor</p>
                <ul>
            <i><b>Details:</b></i> 
             <li>Ceremony Area</li>
             <li>Dressing Room</li>
               <li> Handicap Accessible</li>
                <li>Indoor Event Space</li>
                <li>Reception Area</li>
                <li>Wireless Internet</li>
                <li>Covered Outdoors Space</li>
                <li>Liability Insurance</li>
                <li>On-Site Accommodations</li>
                <li>Outdoor Event Space</li></ul>
        </div>
        <div class="vendi">
            <p><i><b>Rating :</b> </i>
                4.8 / 5.</p>
            <p> <i><b>Venue capacity: </b></i>
                <p>Max - 300 guests</p>
            <p><i><b>Price: </b></i>
          <p> Up to 200 guests:    9,800 $ </p>
            <p>Up to 300 guests:  10,800 $</p></p>
        </div>
        <div class="booking">
            <h3>Book Your Venue</h3>
            <form action="venue_nr1.php#form" method="POST" class="regjistrimi" id="form">
                <input type="text" id="first_name" name="first_name" placeholder="First Name" required>
                <input type="text" id="last_name" name="last_name" placeholder="Last Name" required>
                <input type="email" id="email" name="email" placeholder="Email Address" required>
                <input type="date" id="event_date" name="event_date" required>
                <input type="number" id="guest_number" name="guest_number" placeholder="Number of Guests"  required>
                <textarea id="additional_details" name="additional_details" placeholder="Write additional details here..."></textarea>
                <button type="submit" class="button">Book Now</button>
            </form>
        </div>
    </div>

    <div class="reviews">
        <h3><i>Reviews: </i></h3>
        <h3>4.8 out of 5<img src="Fotot/star.png"></h3>
        <div class="review_individuale" id="e_para">
            <p id="emri"><img src="Fotot/profile.png" alt=""> SusieQte, Cheshire, UK</p>
           <p>            
            Amazing experience, <b>5 / 5</b></p>
            <p>My husband and I had an amazing experience at the Brooklyn Winery - great food, superb service from Max, with excellent recommendations for the wines. Can definitely recommend this place.</p>
           <p> Written May 8, 2024</p>
        </div>
        <div class="review_individuale">
            <p id="emri"><img src="Fotot/profile.png" alt="">
                HenryNYC, New York City</p>
                 <p>Neighborhood Winery with Foods, <b>4 / 5</b></p>
            <p>Excellent atmosphere with nice outdoor seating in a very Brooklyn neighborhood on a street with little automobile traffic. 
                They do make their own wines with a few varieties.
                 Food choices are decent but limited. We were there on a weeknight, services are attentive but a bit slow. This is not a place for you 
                 if you are in a rush. The absolutely best is the neighborhood feeling. You sense it and you feel it.</p>
           <p> Written September 26, 2021</p>
        </div>
        <div class="review_individuale">
            <p id="emri"><img src="Fotot/profile.png" alt="">
                Rich C, New Milford, NJ</p>
                 <p>A Taste of Brooklyn At the Brooklyn Winery <b>5 / 5</b></p>
            <p>My son was married at the winery and they created a beautiful ceremony. The family style dinner was very good. 
                The staff went out of their way to make everyone happy and comfortable. It was an interesting venue for this type of occasion..</p>
           <p> Written May 7, 2018</p>
        </div>
        <div class="review_individuale">
            <p id="emri"><img src="Fotot/profile.png" alt="">
                Barbara W , Boston, MAS</p>
                 <p>Wedding at the winery <b>5 / 5</b></p>
                    We attended a wedding at the Brooklyn Winery and had a wonderful experience.
                    The food and wine were great! The winery made a very pretty setting for both the 
                    ceremony and reception. <p></p>
                 <p> Written June 22, 2017</p>
        </div>
    
        
    </div>
    </main>



    <footer>
    <?php include_once 'footer.php'?>
    </footer>
    <script src="validimi_i_bookingVenue.js"></script>
</body>
<script>
    let aktual = 0;
    const slides = document.getElementsByClassName("slide");
    
    function nderro(rradha) {
        slides[aktual].classList.remove("activ");
        aktual += rradha;
 
        if (aktual >= slides.length) {
         aktual = 0;
        } else if (aktual < 0) {
         aktual = slides.length - 1;
        }
    
        slides[aktual].classList.add("activ");
    }
    window.onload = () => {
        slides[aktual].classList.add("activ");
    };
     </script>
</html>