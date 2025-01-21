<?php
class User {
    private $conn;
    private $table_name = 'user';

    public function __construct($db) {
        $this->conn = $db;
    }

    public function signUp($name_surname, $partner, $email, $Phone_number, $username, $password) {
        $query = "INSERT INTO {$this->table_name} (Name_Surname, Partner_name_surname, Email,  Phone_number, Username, Password) VALUES (:Name_Surname, :Partner_name_surname, :Email,  :Phone_number, :Username, :Password)";

        $stmt = $this->conn->prepare($query);


        $stmt->bindParam(':Name_Surname', $name_surname);
        $stmt->bindParam(':Partner_name_surname', $partner);
        $stmt->bindParam(':Email', $email);
        $stmt->bindParam(':Phone_number', $Phone_number);
        $stmt->bindParam(':Username', $username);
        $stmt->bindParam(':Password', password_hash($password, PASSWORD_DEFAULT)); 

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}
?>