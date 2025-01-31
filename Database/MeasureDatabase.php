<?php
class MeasureDatabase{
    private $conn;
    private $table_name = 'measurements';

    public function __construct($db) {
        $this->conn = $db;
    }

    public function addMeasurements($userId, $bride_bust, $bride_waist, $bride_hips, $groom_chest, $groom_waist, $groom_hips,
    $bridesmaids_bust,$bridesmaids_waist,$bridesmaids_hips,$groomsmen_chest,$groomsmen_waist,$groomsmen_hips) {
        $query = "INSERT INTO measurements 
        (userId, bride_bust, bride_waist, bride_hips, groom_chest, groom_waist, groom_hips, 
        bridesmaids_bust, bridesmaids_waist, bridesmaids_hips, 
        groomsmen_chest, groomsmen_waist, groomsmen_hips) 
        VALUES (:userId, :bride_bust, :bride_waist, :bride_hips, :groom_chest, :groom_waist, :groom_hips, 
        :bridesmaids_bust, :bridesmaids_waist, :bridesmaids_hips, :groomsmen_chest, :groomsmen_waist, :groomsmen_hips)";
        
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':userId', $userId);
        $stmt->bindParam(':bride_bust', $bride_bust);
        $stmt->bindParam(':bride_waist', $bride_waist);
        $stmt->bindParam(':bride_hips', $bride_hips);
        $stmt->bindParam(':groom_chest', $groom_chest);
        $stmt->bindParam(':groom_waist', $groom_waist);
        $stmt->bindParam(':groom_hips', $groom_hips); 
        $stmt->bindParam(':bridesmaids_bust', $bridesmaids_bust); 
        $stmt->bindParam(':bridesmaids_waist', $bridesmaids_waist); 
        $stmt->bindParam(':bridesmaids_hips', $bridesmaids_hips); 
        $stmt->bindParam(':groomsmen_chest', $groomsmen_chest); 
        $stmt->bindParam(':groomsmen_waist', $groomsmen_waist); 
        $stmt->bindParam(':groomsmen_hips', $groomsmen_hips); 
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
   
    public function getAllFromMeasurements() {
        $conn = $this->conn;

        $sql = "SELECT * FROM measurements";

        $statement = $conn->query($sql); 
        $measure = $statement->fetchAll(PDO::FETCH_ASSOC); 

        return $measure; 
    }
     
}
?>