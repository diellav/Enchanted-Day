<?php
include_once "Database/Databaza.php";
include_once "Cart.php";
session_start();

// Kontrollo nëse përdoruesi është administrator dhe ndalo qasjen
if (!isset($_SESSION['username']) || $_SESSION['username'] == "admin") {
    echo "<script>alert('You are the admin!');</script>";
    echo "<script>window.location.href='HomePage.php';</script>";
    exit;  // Shtuar exit për t'u siguruar që kodi ndalet këtu
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
    } else {
        echo "No items selected!";
    }
}
$items_mycart = $cart->getCartItems();

if (count($items_mycart) > 0) {
    foreach ($items_mycart as $item) {
        echo "<div class='cart-item'>";
        echo "<img src='" . $item['item_image'] . "' alt='" . $item['item_name'] . "'>";
        echo "<p>" . $item['item_name'] . "</p>";
        echo "<p>Cost: $" . $item['item_cost'] . "</p>";
        echo "<form method='post' action='Budget.php'>";
        echo "<input type='hidden' name='remove_item_id' value='" . $item['item_id'] . "'>";
        echo "<button type='submit'>Remove</button>";
        echo "</form>";
        echo "</div>";
    }
} else {
    echo "<p>Your cart is empty.</p>";
}
?>
