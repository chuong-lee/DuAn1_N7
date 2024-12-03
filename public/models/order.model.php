<?php

class OrderModel{
    private $db;
    public function __construct(){
        $this->db = new Database();
    }

    public function insertOrder($data) {
        $sql = "INSERT INTO `order` (id_user) VALUES (?)";
        $params = [$data['id_user']];
        return $this->db->insert($sql, $params);
    }
    

    public function findOrderById($orderId) {
        $sql = "SELECT * FROM `order` WHERE id = " . $orderId;
        return $this->db->getOne($sql);
    }
}


?>