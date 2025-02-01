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
    public function getVenueById($id) {
        $sql = "SELECT * FROM venues WHERE id = ?"; 
        $statement = $this->conn->prepare($sql);
    
        if (!$statement) {
            die("Error in SQL preparation.");
        }
    
        $statement->execute([$id]); 
        $venue = $statement->fetch(PDO::FETCH_ASSOC);
        return $venue ? $venue : false; 
    }

    
    public function updateVenue($id, $name, $category, $location, $photo, $link) {
        $conn = $this->conn;


        $sql = "UPDATE venues SET name=?, category=?, location=?, photo=?, link=? WHERE id=?";

        $statement = $conn->prepare($sql); 

      
        $statement->execute([ $name, $category, $location, $photo, $link, $id]);

      
        echo "<script>alert('Update was successful');</script>";
    }

    
    public function deleteVenue($id) {
        $conn = $this->conn;

      
        $sql = "DELETE FROM venues WHERE id=?";

        $statement = $conn->prepare($sql); 

       
        $statement->execute([$id]);

       
        echo "<script>alert('Delete was successful');</script>";
    }
}
?>