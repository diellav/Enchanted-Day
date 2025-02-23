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

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enchanted Day</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="header&footer.css">
    <link rel="stylesheet" href="media-query-homepage.css">
    <link rel="stylesheet" href="sliderHomePage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Parisienne&family=WindSong&display=swap" rel="stylesheet">
</head>
<body>
    <header>
       <?php include_once 'header.php'; ?>
    </header>
    <main>
        <div class="hyrja">
            <div class="teksti">
                <p id="welcome">Welcome to Enchanted Day...</p><p id="description"> Where your wedding dreams come to life with elegance and ease.
                    We believe every love story is unique, and so should be the day that celebrates it.</p>
                 
            </div>
        </div>

        <div class="container2">
            <div class="kuti"><a href="#"><p id="dizajn-sh">Services</p> <p>We offer services including  catering, photography, florists, decor and entertainment  </p></a></div>
            <div class="kuti"><a href="#"><p id="dizajn-sh">Planning tools</p><p>We will help you with your budget, guest list and seating chart and task  management</p></a></div>
            <div class="kuti"><a href="Venues.html"><p id="dizajn-sh">Venues</p> <p>You can choose between venues in the theme you want and pick the vendor that best suits you </p></a></div>
            <div class="kuti"><a href="#"><p id="dizajn-sh">Extra</p><p>Organize your honeymoon, bachelorette and bachelor party, showers and more  </p></a></div>
        </div>


        <div class="about">
            <p> "From the smallest details to your grandest dreams, we’re here to turn your vision into unforgettable moments. 
            Let us craft a day as magical as your love filled with beauty, joy, and lasting memories."</p>
        <blockquote  id="kuota">from the Enchanted Team.</blockquote ></div>
            <br><br><br>
            <br>
            
     <div id="slideshow">
            <div class="slide">
            <div class="darker"></div>
                <img name="mySlide" id="slides">
                <div class="mesazhi">
                  <p id="o1"> Celebrate Love, Stress-Free</p>
                   <p>Focus on making memories while we handle the rest. 
                    Our expert team ensures your special day is as seamless as it is beautiful.</p>
                </div>
            </div>
     </div>
     <br><br><br><br><br><br>
        <div class="t1"><h2>Most popular venues & vendors </h2></div>
        <div class="success">
            <div class="stories"><a href="venue_nr1.php"><img src="Venue photos/city7.jpg"><p>Brooklyn Winery</p><p>Brooklyn, NY</p></a></div>
            <div class="stories"><a href="#"><img src="Venue photos/city2.jpg"><p>Sound River Studios</p><p>Long Island, NY</p></a></div>
            <div class="stories"><a href="#"><img src="Venue photos/garden5.jpg"><p>Primrose Garden</p><p>Roswell, GA </p></a></div>
            <div class="stories"><a href="#"><img src="Venue photos/beach7.jpg"><p>King Kamehameha Kona Resort</p><p>Kailua Kona, Hawaii</p></div>
            <div class="stories"><a href="#"><img src="Venue photos/garden7.jpg"><p>The Foundry</p><p>Long Island City, NY</p></a></div>

        </div>
        <br><br><br>
        <br><br><br>
        <div class="vija">
        <div class="t1"><h2>Explore</h2></div>
        <br> 
        <div class="explore">
            <div class="shtesa"><a href="Venues.php"><img src="Fotot/arch.png" alt="arch"><p>Venues</p></a></div>
            <div class="shtesa"><a href="Catering&Cakes.php"><img src="Fotot/utensils.png" alt="food"><p>Catering & Cakes</p></a></div>
            <div class="shtesa"><a href="Photos&Videos.php"><img src="Fotot/camera.png" alt="photo"><p>Photo & Video</p></a></div>
            <div class="shtesa"><a href="Decorating.php"><img src="Fotot/decoration-flower.png" alt="decor"><p>Decoration</p></a></div>
            <div class="shtesa"><a href="Beauty.php"><img src="Fotot/sparkles.png" alt="beauty"><p>Beauty</p></a></div>
            <div class="shtesa"><a href="Budget.php"><img src="Fotot/checklist-task-budget.png" alt="decor"><p>Budget</p></a></div>
        </div>
        </div>


        <br>
        <div class="t1"><h2>Guide</h2></div>
        <div class="success">
            <div class="artikuj"><a href="Guide_nr1.php"><img src="Fotot/budget guide.gif" alt="foto7"><p class="pershkrimi">Wedding Budgeting Made Simple: Tips to Save Big</p></a></div>
            <div class="artikuj"><a href="#"><img src="Fotot/venue-guide.jpg" alt="foto6"><p class="pershkrimi">From Ballrooms to Gardens: A Comprehensive Venue Guide</p></a></div>
            <div class="artikuj"><a href="#"><img src="Fotot/seating-guide.jpg" alt="foto8"><p class="pershkrimi">Stress-Free Wedding Seating: Tips and Tricks</p></a></div>
            <div class="artikuj"><a href="#"><img src="Fotot/dresses-guide.jpg" alt="foto17"><p class="pershkrimi">Say Yes to the Dress: A Bride's Style Companion</p></a></div>
            <div class="artikuj"><a href="#"><img src="Fotot/Foto4.jpg" alt="foto18"><p  class="pershkrimi">Rings That Shine: The Best Guide to Wedding Bands</p></a></div>
        </div>
        </div>


    </main>


    <footer>
     <?php include_once 'footer.php'?>
  
    </footer>



        <script>
            var i=0;
            var imgArray=["Fotot/foto23.jpg",
                    "Fotot/foto25.jpg"  ,
                    "Fotot/foto8.jpg" ,
                    "Fotot/foto26.jpg", 
                    "Fotot/foto21.jpg"];

            function change(){
                document.getElementById('slides').src=imgArray[i];
                if(i<imgArray.length-1){
                    i++;
                }else{
                    i=0;
                }
                setTimeout("change()", 2800);
            }
            document.body.addEventListener('load', change());
        </script>
</body>
</html>
