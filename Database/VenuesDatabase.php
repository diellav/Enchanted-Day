<?php 
    class VenuesDatabase{
        private $conn;
        private $table_name = 'venues';
    
        public function __construct($db) {
            $this->conn = $db;
        }
    

    public function addVenue($name, $category, $location, $photo, $link) {
         $stmt = $this->conn->prepare("INSERT INTO venues (name, category, location, photo, link) VALUES (:name, :category, :location, :photo, :link)");
        
        $stmt->bindValue(':name', $name);
        $stmt->bindValue(':category', $category);
        $stmt->bindValue(':location', $location);
        $stmt->bindValue(':photo', $photo);
        $stmt->bindValue(':link', $link); 
        if ($stmt->execute()) {
            return "Venue added successfully";
        } else {
            return "Error: " . $stmt->error;
        }
    }

    public function getVenues(){
        try {
        $sql = "SELECT * FROM venues";

        $statement = $this->conn->query($sql); 
        $venues = $statement->fetchAll(PDO::FETCH_ASSOC); 

        return $venues; 
    } catch (PDOException $e) {
        die("Error fetching venues: " . $e->getMessage());
    }
    }
    }
?>