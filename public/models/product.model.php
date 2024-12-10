<?php
class ProductModel
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllProduct()
    {
        $sql = "SELECT * FROM product";
        $result = $this->db->getAll($sql);
        return $result;
    }

    public function getDataByName($param)
    {
        $sql = "select c.id as id_danhmuc, c.name as tendanhmuc, p2.id as id_product, p2.name, p2.image, p2.sale_price, p2.buying, p2.price  
        from category c 
        join product p2 on p2.id_cate = c.id
        where c.name = '$param'
        order by p2.buying DESC";
        $result = $this->db->getAll($sql);
        return $result;
    }

    public function getProductByCate($param)
    {
        $sql = "select c.id as id_danhmuc, c.name as tendanhmuc, p2.id as id_product, p2.name, p2.image, p2.sale_price, p2.buying, p2.price  
        from category c 
        join product p2 on p2.id_cate = c.id
        where c.id = '$param'
        order by p2.buying DESC";
        $result = $this->db->getAll($sql);
        return $result;
    }

    public function getProductTrending()
    {
        $sql = "select c.id as id_danhmuc, c.name as tendanhmuc, p2.id as id_product, p2.name, p2.image, p2.sale_price, p2.buying, p2.price  
        from category c 
        join product p2 on p2.id_cate = c.id
        order by p2.buying DESC
        LIMIT 3";
        $result = $this->db->getAll($sql);
        return $result;
    }

    public function getProductDetail($id)
    {
        if ($id > 0) {
            $sql = "select c.id as id_danhmuc, c.name as tendanhmuc, p2.id as id_product, p2.name , p2.image, p2.sale_price, p2.buying ,p2.price 
            from category c 
            join product p2 on p2.id_cate = c.id
            where p2.id = " . $id;
            $result = $this->db->getOne($sql);
            return $result;
        } else {
            return null;
        }
    }

    public function getAllProducts($categoryId)
    {
        $sql = "select c.id as id_danhmuc, c.name as tendanhmuc, p2.id as id_product, p2.name, p2.image, p2.sale_price, p2.buying, p2.price, p2.quantity
        from category c 
        join product p2 on p2.id_cate = c.id
        where c.id = '$categoryId'
        order by p2.buying DESC";
        $result = $this->db->getAll($sql);
        return $result;
    }

    function insertPro($data){
        $sql = "INSERT INTO product (name, price, description, quantity, image, sale_price, id_cate) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $param = [$data['name'],$data['price'],$data['description'],$data['quantity'],$data['image'],$data['sale_price'],$data['id_cate']];
        return $this->db->insert($sql, $param);
    }

    function updatePro($data){
        $sql = "UPDATE product SET name = ?, price = ?, description = ?,quantity = ?, image = ?,sale_price = ?, id_cate = ? WHERE id = ?";
        $param = [$data['name'],$data['price'],$data['description'],$data['quantity'],$data['image'],$data['sale_price'],$data['id_cate'], $data['id']];
        $this->db->insert($sql,$param);
    }
    
    function getIdPro($idpro){
        if($idpro > 0){
            $sql = "SELECT * FROM product WHERE id = " . $idpro;
            return $this->db->getOne($sql);
        }else{
            return null;
        }
    }

    function deletePro($id) {
        $sql = "DELETE FROM product WHERE id = ?";
        return $this->db->delete($sql,[$id]);
    }
}
