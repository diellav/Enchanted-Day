<?php
class Databaza_Cart{
    private $conn;
    private $table_name = 'cart';

    public function __construct($db) {
        $this->conn = $db;
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