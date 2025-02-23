<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header&footer.css">
    <link rel="stylesheet" href="media-query-homepage.css"> 
    <link rel="stylesheet" href="catering&cakes.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Parisienne&family=WindSong&display=swap" rel="stylesheet">
    <title>Catering_and_Cakes</title>
    <style> 
    #saveCart{
        display:flex;
        width:fit-content;
        margin-top:40px;
        margin-left:5%;
        margin-bottom:40px;
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

        <div class="about"><h1>Catering & Cakes</h1><h4>
            This page highlights top catering services and exquisite wedding cakes to elevate your special day.
             Explore our menu options crafted to meet your preferences and dietary needs.
              Or browse a variety of cake designs, from elegant tiered
             creations to modern styles. Let us help make every bite as memorable 
             as the celebration itself.</h4></div>

             <p id="cater">Catering</p>
             <div class="catering">
                
                
    <div class="container">
            <img src="Catering&Cakes_photos/beef-menu.jpg" alt="Beef Menu">
            <div class="pershkrim">
            <div class="title"><p p class='name'><b>Beef Luxury</b></p><p>Add to List<input type="checkbox" id ="checkbox1"></p></div>
            <p>Indulge in a variety of expertly prepared beef dishes, 
            crafted to bring richness and elegance to your wedding celebration.</p>
            <div class="desc">
                
            <ul>
                <li type="none">Appetizers: </li>
                <br>
                <li>Bruschetta with Tomato, Basil, and Olive Oil</li>
                <li>Mini Caprese Skewers</li> 
            </ul> 
                
            <ul>
                <li type="none">Main Courses:</li>
                <br>
                <li>Slow-Cooked Beef Brisket</li>
                <li>Grilled Filet Mignon with Red Wine Sauce</li>
                <li>Classic Beef Stroganoff</li>
            </ul>
                
            <ul>
                <li type="none">Sides:</li>
                <br>
                <li>Garlic Mashed Potatoes</li>
                <li>Grilled Seasonal Vegetables</li>
                <li>Herb Butter Dinner Rolls</li>
            </ul> 
            
            <ul>
                <li type="none">Alcoholic Drinks: </li>
                <br>
                <li>Red Wine (Cabernet, Merlot)</li>
                <li>Whiskey Cocktails</li>
                <li>Beer (Craft or Classic)</li>
            </ul>
               
            <ul>
                <li type="none">Non-Alcoholic Drinks</li>
                <br>
                <li>Sparkling Water with Lime</li>
                <li>Iced Tea or Lemonade</li>
                <li>Mocktails</li>
            </ul>
            <ul><h3><p class="price">Price per person: 55$</p></h3>
            <textarea name="Customize" id="textarea">Add details</textarea>
            </ul>
            </div>
        </div>
        </div>
    </div>
        <hr>



    <div class="container">
                <img src="Catering&Cakes_photos/chicken-delights.jpg" alt="Chicken Menu">
                <div class="pershkrim">
                <div class="title"><p class='name'><b>Chicken Delights</b></p><p>Add to List<input type="checkbox" id ="checkbox2"></p></div>
                <p>Indulge in a selection of premium chicken dishes crafted to suit every taste and elevate your wedding dining experience.</p>
                <div class="desc">
                    
            <ul>
                <li type="none">Appetizers: </li>
                <br>
                <li>Avocado and Mango Salsa with Chips</li>
                <li>Mini Chicken Spring Rolls</li>
            </ul> 
                
            <ul>
                <li type="none">Main Courses:</li>
                <br>
                <li>Herb-Crusted Roast Chicken with Garlic Butter Sauce</li>
                <li>Grilled Lemon Chicken with Fresh Herbs</li>
                <li>Creamy Chicken Alfredo Pasta</li>
            </ul>
            <ul>
                <li type="none">Sides:</li>
                <br>
                <li> Roasted Garlic Parmesan Potatoes</li>
                <li>Steamed Seasonal Vegetables</li>
                <li>Fluffy Buttered Rice</li>
            </ul> 
                
            <ul>
                <li type="none">Alcoholic Drinks: </li>
                <br>
                <li>  White Wine (Chardonnay, Sauvignon Blanc)</li>
                <li> Classic Cocktails (e.g., Mojitos)</li>
                <li> Light Beer</li>
            </ul>
            <ul>
                <li type="none">Non-Alcoholic Drinks</li>
                <br>
                <li>Sparkling Lemon Ginger Fizz</li>
                <li>Freshly Brewed Iced Tea</li>
                <li>Fruity Mocktail Blend</li>
            </ul>
            <ul><h3><p class="price">Price per person: 65$</p></h3>
                <textarea name="Customize" id="textarea">Add details</textarea>
                </ul>
             </div>
            </div>
            </div>
        </div>
                 <hr>

        <div class="container">
            <img src="Catering&Cakes_photos/seafood.jpg" alt="Seafood menu">
            <div class="pershkrim">
            <div class="title"><p p class='name'><b>Exquisite Seafood Menu</b></p><p>Add to List<input type="checkbox" id ="checkbox3"></p></div>
            <p>Indulge in a selection of premium chicken dishes crafted to suit every taste and elevate your wedding dining experience.</p>
            <div class="desc">
                        
            <ul>
                <li type="none">Appetizers: </li>
                <br>
                <li>Sweet Potato Bites with Guacamole</li>
                <li>Mini Quiches (Spinach, Ham, or Cheese)</li>
            </ul> 
                    
    
            <ul>
                <li type="none">Main Courses:</li>
                <br>
                <li>Grilled Salmon Fillet </li>
                <li>Seared Scallops </li>
                <li>Seafood Paella</li>
            </ul>

            <ul>
                <li type="none">Sides:</li>
                <br>
                <li>Wild Rice Pilaf</li>
                <li>Steamed Asparagus</li>
                <li>Citrus Kale Salad</li>
            </ul> 
                    
            <ul>
                <li type="none">Alcoholic Drinks: </li>
                <br>
                <li> Sparkling Wine (Prosecco or Champagne)</li>
                <li>  White Wine Pairings</li>
                <li> Light Cocktails</li>
            </ul>

            <ul>
                <li type="none">Non-Alcoholic Drinks</li>
                <br>
                <li>Cucumber Mint Lemonade  </li>
                <li>Virgin Mojitos </li>
                <li>Iced Peach Tea </li>
            </ul>
            <ul><h3><p class="price">Price per person: 80$</p></h3>
                <textarea name="Customize" id="textarea">Add details</textarea>
                </ul>
        </div>
        </div>
        </div>
    </div>
        <hr>



    <div class="container">
                    <img src="Catering&Cakes_photos/vegetarian.jpg" alt="Vegetarian Menu">
                    <div class="pershkrim">
                    <div class="title"><p p class='name'><b>Vegetarian & Vegan</b></p><p>Add to List<input type="checkbox" id ="checkbox4"></p></div>
                    <p>Delight in our plant-based menu, featuring vibrant appetizers, hearty mains, fresh sides, and artisanal drinks.</p>
                    <div class="desc">
                        
            <ul>
                <li type="none">Appetizers: </li>
                <br>
                <li>Stuffed Mushrooms with Spinach and Vegan Cheese</li>
                <li>Mini Bruschetta with Tomato and Basil</li>
            </ul> 
                    
    
            <ul>
                <li type="none">Main Courses:</li>
                <br>
                <li>Grilled Eggplant Steaks with Balsamic Glaze</li>
                <li>Stuffed Bell Peppers with Quinoa and Veggies</li>
                <li>Vegan Mushroom Risotto</li>
            </ul>

            <ul>
                <li type="none">Sides:</li>
                <br>
                <li>Garlic Mashed Potatoes with Almond Milk</li>
                <li>Roasted Brussel Sprouts</li>
                <li>Mixed Greens with Lemon-Tahini Dressing</li>
            </ul> 
                    
            <ul>
                <li type="none">Alcoholic Drinks: </li>
                <br>
                <li>Sparkling Wine</li>
                <li>Vegan Red and White Wine Pairings</li>
                <li>Herb-Infused Cocktails </li>
            </ul>

            <ul>
                <li type="none">Non-Alcoholic Drinks</li>
                <br>
                <li>Freshly Pressed Green Juice</li>
                <li>Lavender Lemonade</li>
                <li>Spiced Chai Iced Tea</li>
            </ul>
            <ul><h3><p class="price">Price per person: 50$</p></h3>
                <textarea name="Customize" id="textarea">Add details</textarea>
                </ul>
        </div>
        </div>
        </div>
    </div>
        <hr>   

    
        <div class="container">
            <img src="Catering&Cakes_photos/international.jpg" alt="Vegetarian Menu">
            <div class="pershkrim">
            <div class="title"><p p class='name'><b>International Cuisine</b></p><p>Add to List<input type="checkbox" id ="checkbox5"></p></div>
            <p>Embark on a global culinary journey with an international wedding menu inspired by diverse cuisines to celebrate love and culture.</p>
            <div class="desc">
                
            <ul>
                <li type="none">Appetizers: </li>
                <br>
                <li>Bruschetta (Italian) </li>  
                <li> Samosas (Indian)</li>
                <li>Beff/Chicken Tacos (Mexican)</li>
                <li>Sushi Rolls (Japanese)</li>
            </ul> 
                    

            <ul>
                <li type="none">Main Courses:</li>
                <br>
                <li>Beef Wellington (British)</li>
                <li>Pad Thai (Thai)</li>
                <li>Tagine with Vegetables (Moroccan)</li>
                <li>Paella (Spanish)</li>
            </ul>

            <ul>
                <li type="none">Sides:</li>
                <br>
                <li>Ratatouille (French)</li>
                <li>Pita Bread with Hummus (Middle Eastern)</li>
                <li>Kimchi (Korean)</li>
            </ul> 
                    
            <ul>
                <li type="none">Alcoholic Drinks: </li>
                <br>
                <li>Sangria (Spanish)</li>
                <li>Prosecco (Italian)</li>
                <li>Margaritas (Mexican)</li>
            </ul>

            <ul>
                <li type="none">Non-Alcoholic Drinks</li>
                <br>
                <li>Chai Tea (Indian)</li>
                <li>Horchata (Mexican)</li>
                <li>Iced Jasmine Tea (Chinese)</li>
            </ul>
            <ul><h3><p class="price">Price per person: 70$</p></h3>
                <textarea name="Customize" id="textarea">Add details</textarea>
                </ul>
</div>
</div>
</div>
</div>
<hr>  




<div class="container2">
    <p id="cater">Cakes</p>
    <p>Select the flavors, fillings, designs and tiers to create your perfect wedding cake!</p>
    <h2>Flavours: </h2>
    <div class="tortat"> 
        <div class="cake">
            <img src="Catering&Cakes_photos/chocolatecake.jpg" alt="Chocolate cake">
            <p class="name">Chocolate</p><p class="price">55$</p><input type="checkbox" id="checkbox6">   
        </div>
    <div class="cake">
        <img src="Catering&Cakes_photos/vanillacake.jpg" alt="Vanilla cake">
        <p class="name">Vanilla</p><p class="price">50$</p><input type="checkbox" id="checkbox7">
     </div>
    <div class="cake">
        <img src="Catering&Cakes_photos/redvelvetcake.jpg" alt="Red Velvet cake">
        <p class="name">Red Velvet</p><p class="price">60$</p><input type="checkbox" id="checkbox8">
    </div>
    <div class="cake">
        <img src="Catering&Cakes_photos/hazelnutcake.jpg" alt="Hazelnut cake">
        <p class="name">Hazelnut</p><p class="price">55$</p><input type="checkbox" id="checkbox9">
    </div>
    <div class="cake">
        <img src="Catering&Cakes_photos/lemoncake.jpg" alt="Lemon cake">
        <p class="name">Lemon</p><p class="price">60$</p><input type="checkbox" id="checkbox10">
    </div>
</div>

<h2>Fillings </h2>
<div class="filling">
    <div class="fill">
        <img src="Catering&Cakes_photos/caramel.jpg" alt="Salted Caramel filling">
        <p class="name">Salted Caramel</p><p class="price">40$</p><input type="checkbox" id="checkbox11">
    </div>
    <div class="fill">
        <img src="Catering&Cakes_photos/chocolate_filling.jpg" alt="Chocolate filling">
        <p class="name">Chocolate</p><p class="price">45$</p><input type="checkbox" id="checkbox12">
    </div>
    <div class="fill">
        <img src="Catering&Cakes_photos/fruits.jpg" alt="Fruits filling">
        <p class="name">Fruits</p><p class="price">30$</p><input type="checkbox" id="checkbox13">
    </div>
    <div class="fill">
        <img src="Catering&Cakes_photos/buttercream.jpg" alt="Buttercream filling">
        <p class="name">Buttercream</p><p class="price">40$</p><input type="checkbox" id="checkbox14">
    </div>
    <div class="fill">
        <img src="Catering&Cakes_photos/lemon.jpg" alt="Lemon custard filling">
        <p class="name">Lemon custard</p><p class="price">55$</p><input type="checkbox" id="checkbox15">
    </div>
    <div class="fill">
        <img src="Catering&Cakes_photos/swiss.jpg" alt="Meringue filling">
        <p class="name">Meringue</p><p>60$</p><input type="checkbox" id="checkbox16">
    </div>
</div>

    <h2>Cake size</h2>

    <div class="tiers">
        <div class="tier"><p class="name">Two tiers </p><p class="price">40$</p><input type="checkbox" id="checkbox17"></div>
        <div class="tier"><p class="name">Three tiers</p> <p class="price">70$</p><input type="checkbox" id="checkbox18"></div>
        <div class="tier"><p class="name">Four tiers </p><p class="price">110$</p><input type="checkbox" id="checkbox19"></div>
        <div class="tier"><p class="name">Five tiers </p> <p class="price">150$</p><input type="checkbox" id="checkbox20"></div>
        <div class="tier"><p class="name">6+ tiers</p> <p class="price">200$</p><input type="checkbox" id="checkbox21"></div>
   </div>
<br><br>
   <h2>Design </h2>
   <div class="design">
    <div class="tortat"> 
    <div class="cake">
        <img src="Catering&Cakes_photos/elegantcake.jpg" alt="Modern Bliss">
        <p class="name">Modern Bliss</p><p class="price">60$</p><input type="checkbox" id="checkbox22">     
    </div>
    <div class="cake">
        <img src="Catering&Cakes_photos/vintagecake.jpg"alt="Vintage royalty">
        <p class="name">Royalty </p><p class="price">75$</p><input type="checkbox" id="checkbox23">
     </div>
    <div class="cake">
        <img src="Catering&Cakes_photos/white floral.jpg" alt="Classic White">
        <p class="name">Classic White</p> <p class="price">40$</p><input type="checkbox" id="checkbox24">
    </div>
    <div class="cake">
        <img src="Catering&Cakes_photos/traditionalcake.jpg" alt="Classic Pink">
        <p class="name">Classic Pink </p><p class="price">55$</p><input type="checkbox" id="checkbox25">
    </div>
    <div class="cake">
        <img src="Catering&Cakes_photos/pinkrosecake.jpg" alt="Rose Dream">
        <p class="name">Rose Dream </p><p class="price">70$</p><input type="checkbox" id="checkbox26">
    </div>
    <div class="cake">
        <img src="Catering&Cakes_photos/elegant2.jpg" alt="Elegance">
        <p class="name">Elegance</p> <p class="price">60$</p><input type="checkbox" id="checkbox27">
    </div>
    </div>

   </div>


</div>
<div class="myCart">
    <button id="saveCart" type="button">Save to Cart</button>
</div>
    </main>
    

    <footer>
    <?php include_once 'footer.php'?>
    </footer>
    <script>
 
        document.getElementById('saveCart').addEventListener('click', function () {
            const itemsSelektuara = []; 
            const checkboxes = document.querySelectorAll('input[type="checkbox"]:checked'); 
        
            checkboxes.forEach(checkbox => {
                const id = checkbox.id.replace('checkbox', '');
                const prindi = checkbox.closest('.cake') || checkbox.closest('.fill') || checkbox.closest('.tier') || checkbox.closest('.container');
            
                if (prindi) {
                    const emri = prindi.querySelector('p.name') ? prindi.querySelector('p.name').innerText : '';
                    const cmimi = prindi.querySelector('p.price') ? parseFloat(prindi.querySelector('p.price').innerText.replace('Price per person:', '').replace('$', '').trim()): 0; 
                    const foto = prindi.querySelector('img')  ? prindi.querySelector('img').src : 'Fotot/cake_logo.jpg';

                    if (emri && cmimi > 0) {
                        itemsSelektuara.push({ id: id, name: emri, cost: cmimi, image: foto });
                    }
                }
            });
        

            if (itemsSelektuara.length > 0) {
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = 'Budget.php';
        
                itemsSelektuara.forEach(item => {
                    const inputId = document.createElement('input');
                    inputId.type = 'hidden';
                    inputId.name = 'item_id[]';
                    inputId.value = item.id;
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