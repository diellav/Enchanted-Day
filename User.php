<?php
class User{
    private $conn;
    private $table_name = 'user';

    public function __construct($db) {
        $this->conn = $db;
    }

    public function signUp($name_surname, $partner, $email, $phone, $username, $password) {
        $query = "INSERT INTO {$this->table_name} (Name_Surname, Partner_name_surname, Email, Phone_number, Username, Password) VALUES (:Name_Surname, :Partner_name_surname, :Email,  :Phone_number, :Username, :Password)";

        $stmt = $this->conn->prepare($query);


        $stmt->bindParam(':Name_Surname', $name_surname);
        $stmt->bindParam(':Partner_name_surname', $partner);
        $stmt->bindParam(':Email', $email);
        $stmt->bindParam(':Phone_number', $phone);
        $stmt->bindParam(':Username', $username);
        $stmt->bindParam(':Password', password_hash($password, PASSWORD_DEFAULT)); 

        if ($stmt->execute()) {
            return true;
        }
        return false;
       
    }
    public function login($username, $password) {
        $query = "SELECT id, Name_Surname, Partner_name_surname, Email , Phone_number,Username,Password FROM {$this->table_name} WHERE Username = :username";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':username', $username);

        if ($stmt->execute()) {
            if ($stmt->rowCount() > 0) {
                // User found, check the password
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                if (password_verify($password, $row['Password'])) {
                    // Password verified
                    session_start();
                    $_SESSION['user_id'] = $row['id'];
                    $_SESSION['username'] = $row['Username'];
                    return true;
                } else {
                    $_SESSION['error'] = 'Incorrect password';
                    return false;
                }
            } else {
                $_SESSION['error'] = 'Username does not exist';
                return false;
            }
        } else {
            $_SESSION['error'] = 'Error executing query';
            return false;
        }
        

}
}
?>