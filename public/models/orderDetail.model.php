    <?php

    class OrderDetailModel
    {
        private $db;
        public function __construct()
        {
            $this->db = new Database();
        }
        public function insertOrderDetail($data)
        {
            $sql = "INSERT INTO `orderdetail` (id_product, id_order, quantity) VALUES (?, ?, ?)";
            $params = [$data['id_product'], $data['id_order'], $data['quantity']];
            return $this->db->insert($sql, $params);
        }
        public function getOrderDetail($userId, $status)
        {
            $sql = 'SELECT p.name, p.price, p.image, o.quantity, o2.status, o2.id, o2.id_user 
                FROM product p 
                JOIN orderdetail o ON o.id_product = p.id 
                JOIN `order` o2 ON o2.id = o.id_order 
                JOIN category c ON c.id = p.id_cate 
                WHERE o2.id_user = ? AND o2.status = ?';
            return $this->db->getAllInfoOrder($sql, [$userId, $status]);
        }
    }
    ?>