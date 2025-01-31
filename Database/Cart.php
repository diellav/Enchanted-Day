<?php
class Cart {
    private $conn;
    private $userId;

    public function __construct($dbConnection, $userId) {
        $this->conn = $dbConnection;
        $this->userId = $userId;
    }

    public function addItem($itemId, $itemName, $itemCost, $itemImage) {
        $stmt = $this->conn->prepare("INSERT INTO cart (item_id, item_name, item_cost, item_image, user_id) VALUES (?, ?, ?, ?, ?)");
        return $stmt->execute([$itemId, $itemName, $itemCost, $itemImage, $this->userId]);
    }

    public function removeItem($itemId) {
        $stmt = $this->conn->prepare("DELETE FROM cart WHERE item_id = ? AND user_id = ?");
        return $stmt->execute([$itemId, $this->userId]);
    }

    public function getCartItems() {
        $stmt = $this->conn->prepare("SELECT item_id, item_name, item_cost, item_image FROM cart WHERE user_id = ?");
        $stmt->execute([$this->userId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getAllFromCart() {
        $conn = $this->conn;
    
        $sql = "SELECT * FROM cart";
    
        $statement = $conn->query($sql); 
        $cart = $statement->fetchAll(PDO::FETCH_ASSOC); 
    
        return $cart; 
        }
}
?>