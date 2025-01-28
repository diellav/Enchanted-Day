<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="Beauty.css">
    <link rel="stylesheet" href="header&footer.css">
    <link rel="stylesheet" href="media-query-homepage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Parisienne&family=WindSong&display=swap" rel="stylesheet">
    <title>Beauty</title>
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
    ?>
    <main>
        <div class="txt"><h1 id="bb">Beauty</h1>The day you’ve dreamed of is here, filled with love, excitement, and the magic of new beginnings.
            Every moment, from the first glance to the vows shared, is a celebration of the journey you’ve taken together and the future you’ll build.
            It’s a day of joy, connection, and the reminder that love is the greatest adventure of all.
            Planning your wedding can be a magical journey when approached step by step.
            Begin more than a year ahead by setting your budget, creating a guest list, and choosing your dream venue and theme etc.</div>
             <br><br>
        <div class="container">
            <div class="box">
                <h2>+12 Months Before</h2>
                <ul>
                    <li>Set a budget</li>
                    <li>Create your guest list</li>
                    <li>Hire a wedding planner (if needed)</li>
                    <li>Book the venue</li>
                    <li>Choose a theme or style</li>
                    <li>Research vendors (caterers, photographers, etc.)</li>
                </ul>
            </div>
            <div class="box">
                <h2>9-12 Months Before</h2>
                <ul>
                    <li>Book Key Vendors</li>
                    <li>Choose the Wedding Party</li>
                    <li>Engagement Photos</li>
                    <li>Research Accommodations</li>
                </ul>
            </div>
    
            <div class="box">
                <h2>6-8 Months Before</h2>
                <ul>
                    <li>Send out save-the-date cards</li>
                    <li>Hire vendors (caterer, photographer, florist, etc.)</li>
                    <li>Shop for wedding attire</li>
                    <li>Plan the honeymoon</li>
                    <li>Create a wedding website</li>
                    <li>Book accommodations for out-of-town guests</li>
                </ul>
            </div>
    
            <div class="box">
                <h2>4-5 Months Before</h2>
                <ul>
                    <li>Finalize the menu</li>
                    <li>Order invitations</li>
                    <li>Shop for wedding party attire</li>
                    <li>Book hair and makeup artists</li>
                    <li>Schedule transportation</li>
                    <li>Plan the ceremony details</li>
                </ul>
            </div>
    
            <div class="box">
                <h2>2-3 Months Before</h2>
                <ul>
                    <li>Mail out invitations</li>
                    <li>Have a dress fitting</li>
                    <li>Write your vows</li>
                    <li>Confirm vendor details</li>
                    <li>Purchase wedding rings</li>
                    <li>Create a seating chart</li>
                </ul>
            </div>
    
            <div class="box">
                <h2>1 Month Before</h2>
                <ul>
                    <li>Confirm RSVPs</li>
                    <li>Provide final headcount to vendors</li>
                    <li>Pick up wedding attire</li>
                    <li>Prepare a wedding day timeline</li>
                    <li>Have a final venue walkthrough</li>
                    <li>Pack for the honeymoon</li>
                </ul>
            </div>
    
            <div class="box">
                <h2>1 Week Before</h2>
                <ul>
                    <li>Confirm all arrangements</li>
                    <li>Give the timeline to the wedding party</li>
                    <li>Prepare payment envelopes for vendors</li>
                    <li>Pack an emergency kit</li>
                    <li>Get a manicure and pedicure</li>
                    <li>Relax and enjoy some "me" time</li>
                </ul>
            </div>
        </div>
        <br><br><br>
        <h1 class="bb">Make-up packages</h1>
        <div class="beauty">
        <div class="package">
            <h3 class="name">The Bridal Radiance Package</h3>
            <p class="cmimi">$300-$400</p>
            <ul>
                <li>Includes: Full makeup application for the bride, including a flawless base, soft smokey eyes or natural glam, and a long-lasting lip color.</li>
                <li>Extras: Complimentary touch-up kit (lipstick, powder, mascara).</li>
                <li>Bonus: Trial session 2-4 weeks before the wedding.</li>
            </ul>
            <button class="butoni">Add to list</button>
        </div>

        <div class="package">
            <h3 class="name">Bridal Party Glam Package</h3>
            <p class="cmimi">$750-$1000(based on the number of people)</p>
            <ul>
                <li>Includes: Makeup for the bride and up to 4 bridesmaids or family members, with a choice of natural or bold looks.</li>
                <li>Extras: Complimentary mini touch-up kits for the bridal party.</li>
                <li>Bonus: Bridal makeup consultation to tailor the look.</li>
            </ul>
            <button class="butoni">Add to list</button>
        </div>

        <div class="package">
            <h3 class="name">Elegant Bridal Beauty Package</h3>
            <p class="cmimi">$600-$800</p>
            <ul>
                <li>Includes: Full bridal makeup and hairstyling, plus makeup for 1-2 bridesmaids.</li>
                <li>Extras: Skin prep session a week before the wedding.</li>
                <li>Bonus: Free trial for both makeup and hair.</li>
            </ul>
            <button class="butoni">Add to list</button>
        </div>

        <div class="package">
            <h3 class="name"> The VIP Bridal Experience Package</h3>
            <p class="cmimi">$1200-$1500</p>
            <ul>
                <li>Includes: Full makeup and hairstyling for the bride, plus makeup for up to 3 bridesmaids.</li>
                <li>Extras: Personalized beauty consultation, airbrush foundation, touch-up kits.</li>
                <li>Bonus: Early morning on-site services.</li>
            </ul>
            <button class="butoni">Add to list</button>
        </div>

        <div class="package">
            <h3 class="name">  Destination Wedding Glam Package</h3>
            <p class="cmimi">$400-$600</p>
            <ul>
                <li>Includes: Travel-friendly makeup application and hairstyling for the bride.</li>
                <li>Extras: Light, natural makeup with high-heat resistant products.</li>
                <li>Bonus: Mini beauty kit for touch-ups.</li>
            </ul>
            <button class="butoni">Add to list</button>
        </div>
    </div>
    <br><br><br>
    <h1 class="bb">Bridal Dresses</h1>
    <div class="inspo">
        <div class="fustana"><img src="Dresses/foto1.jpg" alt="f1"><input type="checkbox" id ="checkbox1"><p>Ethereal Elegance ~2600$</p></div>
        <div class="fustana"><img src="Dresses/foto4.jpg" alt="f4"><input type="checkbox" id ="checkbox2"><p>Delicate Grace ~1700$</p></div>
        <div class="fustana"><img src="Dresses/foto5.jpg" alt="f5"><input type="checkbox" id ="checkbox3"><p>Timeless Romance ~2500$</p></div>
        <div class="fustana"><img src="Dresses/foto6.jpg" alt="f6"><input type="checkbox" id ="checkbox4"><p>Romantic Whimsy ~1800$</p></div>
        <div class="fustana"><img src="Dresses/foto7.jpg" alt="f7"><input type="checkbox" id ="checkbox5"><p>Garden Dream ~2800$</p></div>
        <div class="fustana"><img src="Dresses/foto8.jpg" alt="f8"><input type="checkbox" id ="checkbox6"><p>Gilded Glamour ~2500$</p></div>
        <div class="fustana"><img src="Dresses/foto9.jpg" alt="f9"><input type="checkbox" id ="checkbox7"><p>Modern Muse ~1500$</p></div>
        <div class="fustana"><img src="Dresses/foto10.jpg" alt="f10"><input type="checkbox" id ="checkbox8"><p>Royal Grace ~3200$</p></div>
        <div class="fustana"><img src="Dresses/foto11.jpg" alt="f11"><input type="checkbox" id ="checkbox9"><p>Vintage Charm ~1200$</p></div>
        <div class="fustana"><img src="Dresses/foto13.jpg" alt="f13"><input type="checkbox" id ="checkbox10"><p>Dainty Delight ~750$</p></div>
    </div>
        <br><br><br>
        <h1 class="bb">Groom's Suits</h1>
        <div class="inspo">
            <div class="fustana"><img src="Dresses/foto14.jpg" alt="f1"><input type="checkbox" id ="checkbox11"><p>Crisp Classic ~300$</p></div>
            <div class="fustana"><img src="Dresses/foto15.jpg" alt="f4"><input type="checkbox" id ="checkbox12"><p>Simply Black ~400$</p></div>
            <div class="fustana"><img src="Dresses/foto16.jpg" alt="f5"><input type="checkbox" id ="checkbox13"><p>Relaxed Charm ~320$</p></div>
            <div class="fustana"><img src="Dresses/foto24.jpg" alt="f6"><input type="checkbox" id ="checkbox14"><p>Earthy Elegance ~340$</p></div>
            <div class="fustana"><img src="Dresses/foto18.jpg" alt="f7"><input type="checkbox" id ="checkbox15"><p>Modern Gray ~410$</p></div>
            <div class="fustana"><img src="Dresses/foto19.jpg" alt="f8"><input type="checkbox" id ="checkbox16"><p>Neutral Beige ~280$</p></div>
            <div class="fustana"><img src="Dresses/foto20.jpg" alt="f9"><input type="checkbox" id ="checkbox17"><p>Navy Neat ~330$</p></div>
            <div class="fustana"><img src="Dresses/foto21.jpg" alt="f10"><input type="checkbox" id ="checkbox18"><p>Timeless White ~420$</p></div>
            <div class="fustana"><img src="Dresses/foto22.jpg" alt="f11"><input type="checkbox" id ="checkbox19"><p>Rich Burgundy ~450$</p></div>
            <div class="fustana"><img src="Dresses/foto23.jpg" alt="f13"><input type="checkbox" id ="checkbox20"><p>Emerald Ease ~350$</p></div>
        </div>
        <br><br><br>
        <h1 class="bb">Bridesmaid's Dresses</h1>
        <div class="inspo">
            <div class="fustana"><img src="Dresses/foto25.jpg" alt="f1"><input type="checkbox" id ="checkbox21"><p>Sage Serenity ~200$ (per person)</p></div>
            <div class="fustana"><img src="Dresses/foto26.jpg" alt="f4"><input type="checkbox" id ="checkbox22"><p>Sunset Hues ~120$ (per person)</p></div>
            <div class="fustana"><img src="Dresses/foto27.jpg" alt="f5"><input type="checkbox" id ="checkbox23"><p>Peony Perfection ~150$ (per person)</p></div>
            <div class="fustana"><img src="Dresses/foto28.jpg" alt="f6"><input type="checkbox" id ="checkbox24"><p>Silk Wine ~180$ (per person)</p></div>
            <div class="fustana"><img src="Dresses/foto29.jpg" alt="f7"><input type="checkbox" id ="checkbox25"><p>Golden Sunshine ~100$ (per person)</p></div>
        </div>
        <br><br><br>
        <h1 class="bb">Groomsmen Attire</h1>
        <div class="inspo">
            <div class="fustana"><img src="Dresses/foto30.jpg" alt="f1"><input type="checkbox" id ="checkbox26"><p>Crisp Ivory ~180$ (per person)</p></div>
            <div class="fustana"><img src="Dresses/foto31.jpg" alt="f4"><input type="checkbox" id ="checkbox27"><p>Soft Taupe ~120$ (per person)</p></div>
            <div class="fustana"><img src="Dresses/foto33.jpg" alt="f5"><input type="checkbox" id ="checkbox28"><p>Rustic Earth ~150$ (per person)</p></div>
            <div class="fustana"><img src="Dresses/foto32.jpg" alt="f6"><input type="checkbox" id ="checkbox29"><p>Classic Sage ~190$ (per person)</p></div>
            <div class="fustana"><img src="Dresses/foto34.jpg" alt="f7"><input type="checkbox" id ="checkbox30"><p>Timeless Blue ~200$ (per person)</p></div>
        </div>

        
<div class="container2">
    <h1 class="bb">Hairstyles</h1>
    <div class="hair"> 
        <div class="stili">
            <img src="Dresses/foto35.jpg" alt="Floral updo">
            <p>Floral updo<input type="radio" name="hair" ></p>     
        </div>
    <div class="stili">
        <img src="Dresses/foto36.jpg" alt="Classy bun">
         <p>Classy bun<input type="radio" name="hair"></p>
     </div>
     <div class="stili">
        <img src="Dresses/foto39.jpg" alt="Romantic Curls">
        <p>Romantic Curls<input type="radio" name="hair"></p>
    </div>
    <div class="stili">
        <img src="Dresses/foto38.jpg" alt="Half-up half-down">
        <p>Half-up half-down<input type="radio" name="hair"></p>
    </div>
    <div class="stili">
        <img src="Dresses/foto37.jpg" alt="Boho Braid">
         <p>Boho Braid<input type="radio" name="hair"></p>
    </div>
</div>
<br><br><br>
<h1 class="bb">Measurements</h1>
<div class="measurements">
<form action="">
    <div class="measure">
        <b>Bride's Measurements</b>
        <br><br>
        <p>Bust (cm):</p><input type="number" required>
        <p>Waist (cm):</p><input type="number" required>
        <p>Hips (cm):</p> <input type="number" required>
    </div>

    <div class="measure">
        <b>Groom's Measurements</b>
        <br><br>
        <p>Chest (cm):</p><input type="number" required>
        <p>Waist (cm):</p> <input type="number" required>
        <p>Hips (cm):</p> <input type="number" required>
    </div>

    <div class="measure">
        <b>Bridesmaids Measurements</b>
        <br><br>
        <p>Bust (cm):</p><input type="number" required>
        <p>Waist (cm):</p><input type="number" required>
        <p>Hips (cm):</p> <input type="number" required>
    </div>
    <div class="measure">
        <b>Groomsmen Measurements</b>
        <br><br>
        <p>Chest (cm):</p><input type="number" required>
        <p>Waist (cm):</p> <input type="number" required>
        <p>Hips (cm):</p> <input type="number" required>
    </div>

    <button type="submit">Submit Measurements</button>
</form>
</div>
<div class="myCart">
    <button id="saveCart">Save to Cart</button>
</div>
    </main>
    <footer>
    <?php include_once 'footer.php'?>
    </footer>
    <script> 
     document.getElementById('saveCart').addEventListener('click', function () {
    const itemsSelektuara = [];

    document.querySelectorAll('.package').forEach(divPaketes => {
        const button = divPaketes.querySelector('.butoni');
        if (button) {
            const emripaketes = divPaketes.querySelector('h3').innerText;
            const cmimipaketes = parseFloat(divPaketes.querySelector('.cmimi').innerText.replace('$', '').replace('-', '').trim());
            const pershkrimi = divPaketes.querySelector('ul').innerText;
            const imazhi = "image-path-placeholder"; 
            itemsSelektuara.push({
                name: emripaketes,
                cost: cmimipaketes,
                description: pershkrimi,
                image: imazhi
            });
        }
    });

    document.querySelectorAll('.inspo input[type="checkbox"]:checked').forEach(checkbox => {
        const id = checkbox.id.replace('checkbox', '');
        const name = checkbox.parentElement.querySelector('p').innerText;
        const cost = parseFloat(checkbox.parentElement.querySelector('p').innerText.split('~')[1].replace('$', '').trim());
        const image = checkbox.parentElement.querySelector('img').src;

        itemsSelektuara.push({ id, name, cost, image });
    });

    const floket = document.querySelector('input[name="hair"]:checked');
    if (floket) {
        const floketcontain = floket.closest('.stili');
        const floketemri = floketcontain.querySelector('p').innerText;
        const floketimazhi = floketcontain.querySelector('img').src;

        const hairId = `hair-${Array.from(document.querySelectorAll('input[name="hair"]')).indexOf(floket)}`;

        itemsSelektuara.push({
            id: hairId,
            name: floketemri,
            cost: 0, 
            image: floketimazhi
        });
    }

    if (itemsSelektuara.length > 0) {
        const form = document.createElement('form');
        form.method = 'POST';
        form.action = 'Budget.php';

        itemsSelektuara.forEach(item => {
            const inputId = document.createElement('input');
            inputId.type = 'hidden';
            inputId.name = 'item_id[]';
            inputId.value = item.id || '';
            form.appendChild(inputId);

            const inputName = document.createElement('input');
            inputName.type = 'hidden';
            inputName.name = 'item_name[]';
            inputName.value = item.name;
            form.appendChild(inputName);

            const inputCost = document.createElement('input');
            inputCost.type = 'hidden';
            inputCost.name = 'item_cost[]';
            inputCost.value = item.cost;
            form.appendChild(inputCost);

            const inputImage = document.createElement('input');
            inputImage.type = 'hidden';
            inputImage.name = 'item_image[]';
            inputImage.value = item.image;
            form.appendChild(inputImage);
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
