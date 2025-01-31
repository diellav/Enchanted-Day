<?php
class ContactDatabase{
    private $conn;
    private $table_name = 'contact';

    public function __construct($db) {
        $this->conn = $db;
    }
    public function contact($name, $surname, $email, $message) {
        $query = "INSERT INTO {$this->table_name} (name, surname, email, message) VALUES (:name, :surname, :email,  :message)";

        $stmt = $this->conn->prepare($query);
        
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':surname', $surname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':message', $message);

        if ($stmt->execute()) {
            return true;
        }
        return false;
       
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