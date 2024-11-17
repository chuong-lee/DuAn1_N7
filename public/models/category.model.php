<?php
class CategoryModel
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllCategory()
    {
        $sql = "SELECT * FROM category";
        $result = $this->db->getAll($sql);
        return $result;
    }

    
}
