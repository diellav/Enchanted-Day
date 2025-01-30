<?php
class Databaza_Booking_Venue{
    private $conn;
    private $table_name = 'booking_venue';

    public function __construct($db) {
        $this->conn = $db;
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