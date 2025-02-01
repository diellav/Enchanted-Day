<?php
class BookingDatabase{
    private $conn;
    private $table_name = 'booking_venue';

    public function __construct($db) {
        $this->conn = $db;
    }
    public function book($first_name, $last_name, $email, $event_date, $guest_number,$additional_details) {
        if ($_SESSION['email'] !== $email) {
            $_SESSION['error'] = 'You can only book a venue with your own email address.';
            return false;
        }
        $userId=$_SESSION['user_id'];
        $venue=$_SESSION['venue'];
        $query = "INSERT INTO {$this->table_name} (first_name, last_name, email, event_date,guest_number,additional_details, user_id,venue) VALUES (:first_name, :last_name, :email,  :event_date, :guest_number,:additional_details, :userId, :venue)";

        $stmt = $this->conn->prepare($query);
        
        $stmt->bindParam(':first_name', $first_name);
        $stmt->bindParam(':last_name', $last_name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':event_date', $event_date);
        $stmt->bindParam(':guest_number', $guest_number);
        $stmt->bindParam(':additional_details', $additional_details);
        $stmt->bindParam(':userId', $userId); 
        $stmt->bindParam(':venue', $venue); 
        if ($stmt->execute()) {
            return true;
        }
        return false;
       
    }
    public function getAllFromBookVenues() {
        $conn = $this->conn;
    
        $sql = "SELECT * FROM booking_venue";
    
        $statement = $conn->query($sql); 
        $bookVenue = $statement->fetchAll(PDO::FETCH_ASSOC); 
    
        return $bookVenue; 
        }
    

}

?>