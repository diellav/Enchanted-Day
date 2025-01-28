<?php
class Databaza_kontakt{
    private $conn;
    private $table_name = 'contact';

    public function __construct($db) {
        $this->conn = $db;
    }
public function getAllUsers() {
    $conn = $this->conn;

    $sql = "SELECT * FROM contact";

    $statement = $conn->query($sql); 
    $contact = $statement->fetchAll(PDO::FETCH_ASSOC); 

    return $contact; 
    }
}
?>