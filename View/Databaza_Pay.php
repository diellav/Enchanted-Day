<?php
class Databaza_Pay{
    private $conn;
    private $table_name = 'payments';

    public function __construct($db) {
        $this->conn = $db;
    }
public function getAllFromPay() {
    $conn = $this->conn;

    $sql = "SELECT * FROM payments";

    $statement = $conn->query($sql); 
    $payment = $statement->fetchAll(PDO::FETCH_ASSOC); 

    return $payment; 
    }
}
?>