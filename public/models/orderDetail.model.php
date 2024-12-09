<?php

class OrderDetailModel{
    private $db;
    public function __construct(){
        $this->db = new Database();
    }

    public function insertOrderDetail($data){
        $sql = "INSERT INTO `orderdetail` (id_product, id_order, quantity) VALUES (?, ?, ?)";
        $params = [$data['id_product'], $data['id_order'], $data['quantity']];
        return $this->db->insert($sql, $params);
    }
}


?>