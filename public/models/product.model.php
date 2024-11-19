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
        $sql = "select c.id as id_danhmuc, c.name as tendanhmuc, p.id as id_product, p2.name, p2.image, p2.sale_price, p2.buying, p2.price  
        from category c 
        join productcategory p on p.id_cate = c.id
        join product p2 on p2.id = p.id_product
        where c.name = '$param'
        order by p2.buying DESC";
        $result = $this->db->getAll($sql);
        return $result;
    }

    public function getProductByCate($param)
    {
        $sql = "select c.id as id_danhmuc, c.name as tendanhmuc, p.id as id_product, p2.name, p2.image, p2.sale_price, p2.buying, p2.price  
        from category c 
        join productcategory p on p.id_cate = c.id
        join product p2 on p2.id = p.id_product
        where c.id = '$param'
        order by p2.buying DESC";
        $result = $this->db->getAll($sql);
        return $result;
    }

    public function getProductTrending()
    {
        $sql = "select c.id as id_danhmuc, c.name as tendanhmuc, p.id as id_product, p2.name, p2.image, p2.sale_price, p2.buying, p2.price  
        from category c 
        join productcategory p on p.id_cate = c.id
        join product p2 on p2.id = p.id_product
        order by p2.buying DESC
        LIMIT 3";
        $result = $this->db->getAll($sql);
        return $result;
    }
}
