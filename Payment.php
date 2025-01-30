<?php
class Payment{
private $conn;
    private $table_name = 'payments';

    public function __construct($db) {
        $this->conn = $db;
    }

    public function pay($name_surname, $method, $card_number, $expiration_year, $security_Code, $address, $userId) {


       $userId = $_SESSION['user_id'];
       $total= $_SESSION['total'];

        $query = "INSERT INTO {$this->table_name} ( name_surname, method, card_number, expiration_year, security_Code, address, total, userId) VALUES ( :Name_Surname, :Method, :Card_number,  :Expiration_year, :Security_Code, :Address,:total, :userId)";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':Name_Surname', $name_surname);
        $stmt->bindParam(':Method', $method);
        $stmt->bindParam(':Card_number', $card_number);
        $stmt->bindParam(':Expiration_year', $expiration_year);
        $stmt->bindParam(':Security_Code', $security_Code);
        $stmt->bindParam(':Address', $address); 
        $stmt->bindParam(':total', $total);
        $stmt->bindParam(':userId', $userId); 

        if ($stmt->execute()) {
            return true;
        }
        return false;
       
    }
}
?>