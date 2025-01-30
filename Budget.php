<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="header&footer.css">
    <link rel="stylesheet" href="media-query-homepage.css">
    <style> 
       body{
        margin:0px;
        padding:0px;
       }
.cart-container {
    width: 100%;
    margin: 0 auto;
    padding-top: 20px;
}

.cart-item {
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-bottom: 1px solid #ddd;
    padding: 15px 0;
    margin-bottom: 15px;
    width:90%;
    justify-self:center;
}

.cart-item img {
    width: 15%;
    height: 200px;
    object-fit: cover;
    margin-right: 20px;
}

.cart-item p {
    margin: 5px 0;
    font-size: larger;
    color:  rgb(26, 26, 26);
}
.remove {
    background-color: rgb(200, 197, 197);
    border: solid 2px;
    padding: 2px 10px;
    cursor: pointer;
    font-size: medium;
    border-radius: 5px;
}

@media (max-width: 768px) {
    .cart-item {
        flex-direction: column;
        align-items: center;
    }

    .cart-item img {
        width: 60%;
        height: auto;
        margin-right: 0;
        margin-bottom: 15px;
    }
    .cart-item p {
    align-self:flex-start;
    font-size:large;
}
.remove {
    font-size: small;
}
}
    </style>
</head>
<body>
<?php
include_once 'header.php';
include_once "Database/Databaza.php";
include_once "Cart.php";
session_start();


if (isset($_SESSION['username']) && $_SESSION['username'] == "admin") {
    echo "<script>alert('You are the admin!');</script>";
    echo "<script>window.location.href='HomePage.php';</script>";
    exit; 
}
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

$db = new Databaza();
$conn = $db->getConnection();
$user_id = $_SESSION['user_id']; 

$cart = new Cart($conn, $user_id);
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['remove_item_id'])) {
    $remove_item_id = $_POST['remove_item_id'];
    $cart->removeItem($remove_item_id);
    echo "<script>alert('Item removed from cart.');</script>";
    echo "<script>window.location.href='Budget.php';</script>";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['item_id']) && isset($_POST['item_name']) && isset($_POST['item_cost']) && isset($_POST['item_image'])) {
        $ids = $_POST['item_id'];
        $emrat = $_POST['item_name'];
        $cmimet = $_POST['item_cost'];
        $fotot = $_POST['item_image'];


        foreach ($ids as $i => $itemId) {
            $cart->addItem($itemId, $emrat[$i], $cmimet[$i], $fotot[$i]);
        }
        
        echo "<script>alert('Cart saved successfully!');</script>";
    } 
}
$items_mycart = $cart->getCartItems();


$totali = 0;
$guests=isset($_POST['guests']) ? (int)$_POST['guests'] : 1;
$bridesmaids=isset($_POST['bridesmaids']) ? (int)$_POST['bridesmaids'] : 1;
$groomsmen=isset($_POST['groomsmen']) ? (int)$_POST['groomsmen'] : 1;
if (count($items_mycart) > 0) {
    foreach ($items_mycart as $item) {
        $item_cost=$item['item_cost'];
        if( $item['item_name']=='Beef Luxury'||$item['item_name']=='Chicken Delights'||$item['item_name']=='Exquisite Seafood Menu'
        ||$item['item_name']=='Vegetarian & Vegan'||$item['item_name']=='International Cuisine' ){
           $item_cost*=$guests;
        }
        if( $item['item_name']=='Sage Serenity ~200$ (per person)'||$item['item_name']=='Sunset Hues ~120$ (per person)'||$item['item_name']=='Peony Perfection ~150$ (per person)'
        ||$item['item_name']=='Silk Wine ~180$ (per person)'||$item['item_name']=='Golden Sunshine ~100$ (per person)' ){
           $item_cost*=$bridesmaids;
        }
        if( $item['item_name']=='Crisp Ivory ~180$ (per person)'||$item['item_name']=='Soft Taupe ~120$ (per person)'||$item['item_name']=='Rustic Earth ~150$ (per person)'
        ||$item['item_name']=='Classic Sage ~190$ (per person)'||$item['item_name']=='Timeless Blue ~200$ (per person)' ){
           $item_cost*=$groomsmen;
        }
        $totali += $item_cost;
        echo "<div class='cart-item'>";
        echo "<img src='" . $item['item_image'] . "' alt='" . $item['item_name'] . "'>";
        echo "<p>" . $item['item_name'] . "</p>";
        echo "<p>Cost: $" . number_format($item_cost, 2) . "</p>";
        echo "<form method='post' action='Budget.php'>";
        echo "<input type='hidden' name='remove_item_id' value='" . $item['item_id'] . "'>";
        echo "<button type='submit' class='remove'>Remove</button>";
        echo "</form>";
        echo "</div>";
    }

    echo "<h2>Total Budget: $" . number_format($totali, 2) . "</h2>";
    echo "<form method='POST' action='Budget.php'>
<label for='guests'>Number of Guests:</label>
<input type='number' id='guests' name='guests' value='1' min='1' required><br>
<label for='guests'>Number of Bridesmaids:</label>
<input type='number' id='bridesmaids' name='bridesmaids' value='1' min='1'><br>
<label for='guests'>Number of Groomsmen:</label>
<input type='number' id='groomsmen' name='groomsmen' value='1' min='1'><br>
<button type='submit'>Update Total</button>
</form>
";
    echo "<button><a href='Payment.php'><h3>Pay Now</h3></a></button>";
} else {
    echo "<p>Your cart is empty.</p>";
}

?>
<footer>
    <?php include_once 'footer.php';?>
</footer>
</body>
</html>

