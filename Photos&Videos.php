<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="photos_videos.css">
    <link rel="stylesheet" href="header&footer.css">
    <link rel="stylesheet" href="media-query-homepage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Parisienne&family=WindSong&display=swap" rel="stylesheet">
    <title>Document</title>
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
    
if (isset($_SESSION['username']) && $_SESSION['username'] == "admin") {
    echo "<script>alert('You are the admin!');</script>";
    echo "<script>window.location.href='HomePage.php';</script>";
    exit; 
}
    ?>
    <main>
    <div class="photo">
        <div class="shkrimi">Wedding Photography & Videos</div>
    </div>
    <br><br><br>
    <div class="text"><p>Preserve the beauty of your wedding day with our expert photography and videography services. 
        From timeless photos to cinematic films, we offer various packages that cater to different preferences and budgets.
         Trust us to document your love story with creativity and care.</p></div>
    <h1 class="titulli2">Photography Prices</h1>
    <div class="shpjegim">
        <div>Find the ideal photography package that suits your wedding day.
             We offer flexible options ranging from intimate 2-hour sessions to complete 10-hour coverage.
             Every package includes full access to your edited images and an online gallery for easy viewing and sharing.</div>
        <div class="cmimi"><p>2 Hours Photography</p><br><p class="price">390$</p><input type="button" value="Add to list"></div>
        <div class="cmimi"><p>3 Hours Photography</p><br><p class="price">470$</p><input type="button" value="Add to list"></div>
        <div class="cmimi"><p>4 Hours Photography</p><br><p class="price">570$</p><input type="button" value="Add to list"></div>
        <div class="cmimi"><p>5 Hours Photography</p><br><p class="price">670$</p><input type="button" value="Add to list"></div>
        <div class="cmimi"><p>6 Hours Photography</p><br><p class="price">770$</p><input type="button" value="Add to list"></div>
        <div class="cmimi"><p>7 Hours Photography</p><br><p class="price">870$</p><input type="button" value="Add to list"></div>
        <div class="cmimi"><p>8 Hours Photography</p><br><p class="price">950$</p><input type="button" value="Add to list"></div>
        <div class="cmimi"><p>9 Hours Photography</p><br><p class="price">1050$</p><input type="button" value="Add to list"></div>
        <div class="cmimi"><p>10 Hours Photography</p><br><p class="price">1150$</p><input type="button" value="Add to list"></div>
        <div class="cmimi special"><p>Add an Extra Hour</p><br><p class="price">100$</p><input type="button" value="Add to list"></div>
        <div class="cmimi special"><p>Pre-Wedding Shoot</p><br><p class="price">350$</p><input type="button" value="Add to list"></div>
    </div>

    <div class="details">
        <h2>What's Included?</h2>
        <p>Each photography package comes with the following:</p>
        <ul>
            <li>A USB drive with all your edited images, including full printing rights and no watermarks.</li>
            <li>A dedicated Online Wedding Gallery to view, share, download, and print your photos.</li>
            <li>Full printing rights for all your images.</li>
            <li>All travel expenses covered within the USA.</li>
            <li>VAT included in the price.</li>
        </ul>
    </div>

    <h1 class="titulli2">Video Packages</h1>
   <div class="text"><p>Turn your wedding day into an unforgettable cinematic experience with our video packages. 
        Whether you're looking for a highlight film or a full-length feature, we offer three distinct options to suit your vision.
         Enjoy drone footage, social media teasers, and a full wedding video album to relive your day forever.</p></div>
    <div class="video">
        <div class="package">
            <p>The Highlights Film Package</p>
            <p class="price">1190$</p>
            <ul>
                <li>Up to 10 hours of filming (until a few songs after your First Dance)</li>
                <li>4-7 minute Wedding Highlights Film</li>
                <li>Delivered online and on USB</li>
                <li>1 Videographer</li>
                <li>Travel expenses included</li>
                <li>VAT included</li>
            </ul>
            <input type="button" value="Add to list">
        </div>
        <div class="package">
            <p>The Aerosmith Film Package</p>
            <p class="price">2390$</p>
            <ul>
                <li>Up to 10 hours of filming (until after your First Dance)</li>
                <li>Wedding Highlights Film (4-7 minutes capturing key moments)</li>
                <li>Full-length Feature Film with Ceremony, Speeches, and more</li>
                <li>Raw Footage for complete coverage</li>
                <li>Social Media Teaser Film for sharing</li>
                <li>Aerial/Drone Footage for extra cinematic shots</li>
                <li>Video Wedding Album</li>
                <li>Delivered online and on USB</li>
                <li>1 Videographer</li>
                <li>All travel and VAT included</li>
            </ul>
            <input type="button" value="Add to list">
        </div>
        <div class="package">
            <p>The At The Movies Film Package</p>
            <p class="price">1490$</p>
            <ul>
                <li>Up to 10 hours of filming (until after your First Dance)</li>
                <li>Wedding Highlights Film (4-7 minutes capturing key moments)</li>
                <li>Full Feature Film of key moments</li>
                <li>Video Wedding Album</li>
                <li>Delivered online and on USB</li>
                <li>1 Videographer</li>
                <li>All travel and VAT included</li>
                <li>150$ deposit required</li>
            </ul>
            <input type="button" value="Add to list">
        </div>
    </div>
    <h1 class="titulli2">Photo & Video Combo Package</h1>
    <div class="paketa_combo">
        <div class="package">
            <p>The Complete Memories Package</p>
            <p class="price">2990$</p>
            <ul>
                <li>Up to 8 hours of photography and videography coverage.</li>
                <li>All edited photos delivered on USB with full printing rights and no watermarks.</li>
                <li>A 4-7 minute Wedding Highlights Film.</li>
                <li>A full-length Feature Film including Ceremony, Speeches, and key moments.</li>
                <li>Drone/Aerial Footage for cinematic visuals (weather permitting).</li>
                <li>Pre-Wedding Consultation to discuss your preferences.</li>
                <li>All photos and films provided online and on USB.</li>
                <li>All travel expenses within the USA and VAT included.</li>
                <li>Guest, Groom and Bridal party arrivals</li>
            </ul>
            <input type="button" value="Add to list">
        </div>
    </div>
    <div class="myCart">
        <button id="saveCart">Save to Cart</button>
    </div>
    <h1 class="titulli2">Photos that we have taken</h1>
    <div class="fotot">
        <div class="inspirim"><img src="Photos&Video/foto2.jpg" alt="foto2"></div>
        <div class="inspirim"><img src="Photos&Video/foto3.jpg" alt="foto3"></div>
        <div class="inspirim"><img src="Photos&Video/foto4.jpg" alt="foto4"></div>
        <div class="inspirim"><img src="Photos&Video/foto5.jpg" alt="foto5"></div>
        <div class="inspirim"><img src="Photos&Video/foto6.jpg" alt="foto6"></div>
        <div class="inspirim"><img src="Photos&Video/foto7.jpg" alt="foto7"></div>
        <div class="inspirim"><img src="Photos&Video/foto8.jpg" alt="foto8"></div>
        <div class="inspirim"><img src="Photos&Video/foto9.jpg" alt="foto9"></div>
        <div class="inspirim"><img src="Photos&Video/foto10.jpg" alt="foto10"></div>
        <div class="inspirim"><img src="Photos&Video/foto11.jpg" alt="foto11"></div>
    </div>
    </main>
    <footer>
    <?php include_once 'footer.php'?>
    </footer>
    <script>
  

  const itemsSelektuara = []; 
  let idCounter = 200;
document.querySelectorAll('div input[type="button"]').forEach(button => { 
    button.addEventListener('click', function() {
        const prindi = this.closest('div'); 
        const emri = prindi.querySelector('p').innerText.trim(); 
        const cmimi = parseFloat(prindi.querySelector('.price').innerText.replace('$', '').trim()); 
        const id = idCounter++;
        const imazhi = 'Fotot/wedding_camera.jpg'; 

        itemsSelektuara.push({ id: id, name: emri, cost: cmimi ,image:imazhi});
        console.log('Item added:', { id: id, name: emri, cost: cmimi,image:imazhi });
    });
});

document.getElementById('saveCart').addEventListener('click', function() {
    console.log('Cart items:', itemsSelektuara);
    if (itemsSelektuara.length > 0) {
        const form = document.createElement('form');
        form.method = 'POST';
        form.action = 'Budget.php';

        itemsSelektuara.forEach(item => {
            const inputiId = document.createElement('input');
            inputiId.type = 'hidden';
            inputiId.name = 'item_id[]';
            inputiId.value = item.id;
            form.appendChild(inputiId);

            const inputiEmri = document.createElement('input');
            inputiEmri.type = 'hidden';
            inputiEmri.name = 'item_name[]';
            inputiEmri.value = item.name;
            form.appendChild(inputiEmri);

            const inputiCmimi = document.createElement('input');
            inputiCmimi.type = 'hidden';
            inputiCmimi.name = 'item_cost[]';
            inputiCmimi.value = item.cost;
            form.appendChild(inputiCmimi);

            const inputiFoto = document.createElement('input');
            inputiFoto.type = 'hidden';
            inputiFoto.name = 'item_image[]';
            inputiFoto.value = item.image;
            form.appendChild(inputiFoto);
        });
        document.body.appendChild(form);
        form.submit();
    } else {
        alert('Please select at least one item!');
    }
});

         </script>
</body>
</html>