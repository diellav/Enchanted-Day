<?php
include_once "Database/Databaza.php";
session_start();

if (!isset($_SESSION['username']) || $_SESSION['username']=="admin") {
echo "<script>alert('You are the admin!');</script>";
echo"<script>window.location.href='HomePage.php';</script>;";
}
$db = new Databaza();
$conn = $db->getConnection();
$user_id = $_SESSION['user_id']; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['item_id']) && isset($_POST['item_name']) && isset($_POST['item_cost']) && isset($_POST['item_image'])) {
        $ids = $_POST['item_id'];
        $emrat = $_POST['item_name'];
        $cmimet = $_POST['item_cost'];
        $fotot = $_POST['item_image'];

        $stmt = $conn->prepare("INSERT INTO cart (item_id, item_name, item_cost, item_image, user_id) VALUES (?, ?, ?, ?, ?)");
        foreach ($ids as $i => $item_id) {
            $emri = $emrat[$i];
            $cmimi = $cmimet[$i];
            $foto = $fotot[$i];

            $stmt->bindValue(1, $item_id, PDO::PARAM_INT);
            $stmt->bindValue(2, $emri, PDO::PARAM_STR);
            $stmt->bindValue(3, $cmimi, PDO::PARAM_STR); 
            $stmt->bindValue(4, $foto, PDO::PARAM_STR); 
            $stmt->bindValue(5, $user_id, PDO::PARAM_INT);
            $stmt->execute();
        }
        echo "<script>alert('Cart saved successfully!');</script>;";
    } else {
        echo "No items selected!";
    }
}


    $query = "SELECT item_id, item_name, item_cost, item_image FROM cart WHERE user_id = :user_id";
    $stmt = $conn->prepare($query);
    $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->execute();

    $items_mycart = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (count($items_mycart) > 0) {
        foreach ($items_mycart as $item) {
            echo "<div class='cart-item'>";
            echo "<img src='" . $item['item_image'] . "' alt='" . $item['item_name'] . "'>"; 
            echo "<p>" . $item['item_name'] . "</p>";
            echo "<p>Cost: $" . $item['item_cost'] . "</p>";
            echo "</div>";
        }
    } else {
        echo "<p>Your cart is empty.</p>";
    }

?>
