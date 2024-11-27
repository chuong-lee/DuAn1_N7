<?php
class DetailNewsModel {
    public $mangsp;
    public $motsp;

    public function onesp($id) {
        $sp = new Database();
        $sql = "SELECT * FROM post WHERE id = :id";
        
        // Pass an associative array with the correct parameter format
        $params = array(':id' => $id);
        
        // Assuming getOne() method in Database class can accept params as an array
        $this->motsp = $sp->getOne($sql, $params); 
    }
}
