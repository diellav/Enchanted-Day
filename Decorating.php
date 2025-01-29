<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Decorating_style.css">
    <link rel="stylesheet" href="header&footer.css">
    <link rel="stylesheet" href="media-query-homepage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Parisienne&family=WindSong&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="mediaDecor.css">
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
        <div class="inspiration"><h2>Decorating inspiration</h2></div>
        <div id="slideshow">
            <div class="slide" id="slides1">
                <div class="dekore"><img src="DecorationPhotos/foto1.jpg" alt="f1"><p>Timeless Memories</p></div>
                <div class="dekore"><img src="DecorationPhotos/foto2.jpg" alt="f2"><p>Elegance Envisioned</p></div>
                <div class="dekore"><img src="DecorationPhotos/foto3.jpg" alt="f3"><p>Blooming Grace</p></div>
                <div class="dekore"><img src="DecorationPhotos/foto4.jpg" alt="f4"><p>Pearl Shore </p></div>
                <div class="dekore"><img src="DecorationPhotos/foto9.jpg" alt="f6"><p>Golden Moments</p></div>
            </div>
            <div class="slide" id="slides2">
            <div class="dekore"><img src="DecorationPhotos/foto6.jpg" alt="f5"><p>Floral Elegance</p></div>
            <div class="dekore"><img src="DecorationPhotos/foto9.jpg" alt="f6"><p>Golden Moments</p></div>
            <div class="dekore"><img src="DecorationPhotos/foto17.jpg" alt="f7"><p>Forest Elegance</p></div>
            <div class="dekore"><img src="DecorationPhotos/decoration_2.jpg" alt="f7"><p>Elegant Invites</p></div>
            <div class="dekore"><img src="DecorationPhotos/decoration_1.jpg" alt="f7"><p>Table Bliss</p></div>
            </div>
        <button class="butoni" id="pas" onclick="nderro(1)">&#10094;</button>
            <button  class="butoni" id="para" onclick="nderro(-1)">&#10094;</button>
        </div>
       
        <div class="inspiration"><h2>Flowers & Archway</h2></div>
    <div class="in">
        <div class="dekore"><img src="DecorationPhotos/foto42.jpg" alt="f8"><input type="checkbox" id ="checkbox1"><p>Garden Grace</p><p>150</p></div>
        <div class="dekore"><img src="DecorationPhotos/foto43.jpg" alt="f9"><input type="checkbox" id ="checkbox2"><p>Rosewood Memories</p><p>180</p></div>
        <div class="dekore"><img src="DecorationPhotos/foto44.jpg" alt="f10"><input type="checkbox" id ="checkbox3"><p>Eternal Blossom</p><p>350</p></div>
        <div class="dekore"><img src="DecorationPhotos/foto45.jpg" alt="f11"><input type="checkbox" id ="checkbox4"><p>Petal Perfect </p><p>100</p></div>
        <div class="dekore"><img src="DecorationPhotos/foto46.jpg" alt="f12"><input type="checkbox" id ="checkbox5"><p>Amour in Bloom</p><p>290</p></div>
        <div class="dekore"><img src="DecorationPhotos/foto47.jpg" alt="f13"><input type="checkbox" id ="checkbox6"><p>Rose Quartz </p><p>2300</p></div>
        <div class="dekore"><img src="DecorationPhotos/foto48.jpg" alt="f14"><input type="checkbox" id ="checkbox7"><p>Ethereal Blooms</p><p>500</p></div>
        <div class="dekore"><img src="DecorationPhotos/foto49.jpg" alt="f14"><input type="checkbox" id ="checkbox8"><p>Bloom Royale</p><p>450</p></div>
        <div class="dekore"><img src="DecorationPhotos/foto50.jpg" alt="f14"><input type="checkbox" id ="checkbox9"><p>Chrysanthemum Charm</p><p>250</p></div>
        <div class="dekore"><img src="DecorationPhotos/foto51.jpg" alt="f14"><input type="checkbox" id ="checkbox10"><p>Blossom Aura</p><p>250</p></div>
    </div>
        <div class="inspiration"><h2>Couple Table</h2></div>
    <div class="in">
        <div class="dekore"><img src="DecorationPhotos/foto10.jpg" alt="f24"><input type="checkbox" id ="checkbox11"><p>Harmony </p><p>450</p></div>
        <div class="dekore"><img src="DecorationPhotos/foto11.jpg" alt="f24"><input type="checkbox" id ="checkbox12"><p>Wildflower</p><p>550</p></div>
        <div class="dekore"><img src="DecorationPhotos/foto32.jpg" alt="f24"><input type="checkbox" id ="checkbox13"><p>Cherished Hearts</p><p>600</p></div>
        <div class="dekore"><img src="DecorationPhotos/foto33.jpg" alt="f24"><input type="checkbox" id ="checkbox14"><p>Together in Bloom</p><p>450</p></div>
        <div class="dekore"><img src="DecorationPhotos/foto34.jpg" alt="f24"><input type="checkbox" id ="checkbox15"><p>Enchanted Duo Decor</p><p>420</p></div>
    </div>
    <div class="inspiration"><h2>Dinnerware</h2></div>
    <div class="in">
        <div class="dekore"><img src="DecorationPhotos/foto36.jpg" alt="f8"><input type="checkbox" id ="checkbox16"><p>Aurora Gold</p><p>50</p></div>
        <div class="dekore"><img src="DecorationPhotos/foto37.jpg" alt="f9"><input type="checkbox" id ="checkbox17"><p>Golden Luxe</p><p>90</p></div>
        <div class="dekore"><img src="DecorationPhotos/foto38.jpg" alt="f10"><input type="checkbox" id ="checkbox18"><p>Golden Radiance</p><p>150</p></div>
        <div class="dekore"><img src="DecorationPhotos/foto40.jpg" alt="f12"><input type="checkbox" id ="checkbox19"><p>Moonlit Silver</p><p>80</p></div>
        <div class="dekore"><img src="DecorationPhotos/foto41.jpg" alt="f13"><input type="checkbox" id ="checkbox20"><p>Majestic Gold</p><p>70</p></div>
    </div>
    <div class="inspiration"><h2>Details</h2></div>
    <div class="in">
        <div class="dekore"><img src="DecorationPhotos/foto5.jpg" alt="f8"><input type="checkbox" id ="checkbox21"><p>Costumed mirror</p><p>120</p></div>
        <div class="dekore"><img src="DecorationPhotos/foto7.jpg" alt="f9"><input type="checkbox" id ="checkbox22"><p>Costumed glass</p><p>90</p></div>
        <div class="dekore"><img src="DecorationPhotos/foto8.jpg" alt="f10"><input type="checkbox" id ="checkbox23"><p>Costumed mirror</p><p>250</p></div>
        <div class="dekore"><img src="DecorationPhotos/foto12.jpg" alt="f11"><input type="checkbox" id ="checkbox24"><p>Wedding bar</p><p>250</p></div>
        <div class="dekore"><img src="DecorationPhotos/foto13.jpg" alt="f12"><input type="checkbox" id ="checkbox25"><p>Mirror seating chart</p><p>50</p></div>
        <div class="dekore"><img src="DecorationPhotos/foto14.jpg" alt="f13"><input type="checkbox" id ="checkbox26"><p>Wedding gifts</p><p>60</p></div>
        <div class="dekore"><img src="DecorationPhotos/foto15.jpg" alt="f14"><input type="checkbox" id ="checkbox27"><p>Wedding gifts</p><p>50</p></div>
        <div class="dekore"><img src="DecorationPhotos/foto16.jpg" alt="f15"><input type="checkbox" id ="checkbox28"><p>Sparkles</p><p>30</p></div>
        <div class="dekore"><img src="DecorationPhotos/foto18.jpg" alt="f16"><input type="checkbox" id ="checkbox29"><p>Love songs</p><p>70</p></div>
    </div>
    <div class="inspiration"><h2>Backyard Wedding</h2></div>
    <div class="in">
        <div class="dekore"><img src="DecorationPhotos/foto19.jpg" alt="f17"><input type="checkbox" id ="checkbox30"><p>Secret Garden Memories</p><p>300</p></div>
        <div class="dekore"><img src="DecorationPhotos/foto20.jpg" alt="f18"><input type="checkbox" id ="checkbox31"><p>Woodland Whispers</p><p>450</p></div>
        <div class="dekore"><img src="DecorationPhotos/foto28.jpg" alt="f18"><input type="checkbox" id ="checkbox32"><p>Rustic Elegance</p><p>500</p></div>
        <div class="dekore"><img src="DecorationPhotos/foto29.jpg" alt="f18"><input type="checkbox" id ="checkbox33"><p>Lush Love Decor</p><p>450</p></div>
        <div class="dekore"><img src="DecorationPhotos/foto30.jpg" alt="f18"><input type="checkbox" id ="checkbox34"><p>Vows Under the Trees</p><p>550</p></div>
    </div>

    <div class="inspiration"><h2>Traditional Weddings</h2></div>
    <div class="in">
        <div class="dekore"><img src="DecorationPhotos/foto21.jpg" alt="f19"><input type="checkbox" id ="checkbox35"><p>Oriental Elegance</p><p>650</p></div>
        <div class="dekore"><img src="DecorationPhotos/foto22.jpg" alt="f20"><input type="checkbox" id ="checkbox36"><p>Traditional Turban</p><p>450</p></div>
        <div class="dekore"><img src="DecorationPhotos/foto23.jpg" alt="f21"><input type="checkbox" id ="checkbox37"><p>Ubuntu Love </p><p>750</p></div>
        <div class="dekore"><img src="DecorationPhotos/foto24.jpg" alt="f22"><input type="checkbox" id ="checkbox38"><p>Romance Under the Matryoshka</p><p>350</p></div>
        <div class="dekore"><img src="DecorationPhotos/foto25.jpg" alt="f23"><input type="checkbox" id ="checkbox39"><p>Sakura Serenity</p><p>550</p></div>
    </div>

    <div class="myCart">
        <button id="saveCart">Save to Cart</button>
    </div>
    </main>
    <footer>
    <?php include_once 'footer.php'?> 
    </footer>
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

     
    document.getElementById('saveCart').addEventListener('click', function() {
    const itemsSelektuara = [];
    const checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
    checkboxes.forEach(checkbox => {
        const id = checkbox.id.replace('checkbox', '');
        const emri = checkbox.parentElement.querySelector('p').innerText;
        const cmimi = parseFloat(checkbox.parentElement.querySelector('p:last-child').innerText.replace('Cost: $', ''));
        const foto = checkbox.parentElement.querySelector('img').src;

        itemsSelektuara.push({ id: id, name: emri, cost: cmimi, image: foto });
    });

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
        alert('Please select at least one item!.');
    }
});
         </script>
</body>
</html>