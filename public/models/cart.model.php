<?php
class CartModel{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function insertProductToCart($data){
        $sql = "insert into cartdetail (id_product, quantity ,id_user)
        values (?, ?, ?)";
        $param = [$data['id_product'], $data['quantity'], $data['id_user']];
        return $this->db->insert($sql, $param);
    }

    public function updatedProductToCart($data){
        $sql = "UPDATE CartDetail SET quantity = ? WHERE id_product = ? AND id_user = ?";
        $param = [$data['quantity'], $data['id_product'], $data['id_user']];
        return $this->db->update($sql, $param);
    }

    public function getProductByIdUser($userId){
        $sql = "SELECT c.id_product, SUM(c.quantity) AS quantity, p.price, p.image, p.name, c2.name AS tendanhmuc
        FROM cartdetail c
        JOIN product p ON c.id_product = p.id 
        JOIN productcategory p2 ON p.id = p2.id_product 
        JOIN category c2 ON p2.id_cate = c2.id 
        WHERE c.id_user = ".$userId."
        GROUP BY c.id_product, p.price, p.image, p.name, c2.name;";

        return  $this->db->getAll($sql);
    }

    public function getProductByUserId($userId){
        $sql = "SELECT c.id_product, SUM(c.quantity) AS quantity, p.price, p.image, p.name, c2.name AS tendanhmuc, u.name , u.email , u.phone , u.phone 
        FROM cartdetail c
        JOIN product p ON c.id_product = p.id 
        JOIN productcategory p2 ON p.id = p2.id_product 
        JOIN category c2 ON p2.id_cate = c2.id 
        join `user` u ON u.id = c.id_user 
        WHERE c.id_user = ".$userId."
        GROUP BY c.id_product, p.price, p.image, p.name, c2.name;";

        return  $this->db->getAll($sql);
    }

    public function deleteProductInCart($productId){
        $sql ='delete from cartdetail where id_product= ?';
        return $this->db->delete($sql,[$productId]);
    }

    public function findProductInCart($productId , $userId){
        $sql = "SELECT * FROM cartdetail WHERE id_product = ? AND id_user = ?";
        return $this->db->query($sql, [$productId, $userId]);
    }
}
?>