<?php
class Product_M {
    public function dssp() {
        $sql = "SELECT product.*, tendm FROM product INNER JOIN category ON product.id = category.id";
        include_once 'config/db.config.php';
        $sp = new ConnectModel();
        return $sp->selectall($sql);
    }

    public function addProduct($name, $description, $id, $image) {
        $sql = "INSERT INTO product (name, description, id, image) VALUES (:tensp, :description, :iddm, :image)";
        include_once 'config/db.config.php';
        $sp = new ConnectModel();
        return $sp->execute($sql, ['name' => $name, 'description' => $description, 'iddm' => $id, 'image' => $image]);
    }

    public function deleteProduct($id) {
        $sql = "DELETE FROM product WHERE id = :id";
        include_once 'config/db.config.php';
        $sp = new ConnectModel();
        return $sp->execute($sql, ['id' => $id]);
    }

    public function updateProduct($id, $name, $description, $iddm, $image) {
        $sql = "UPDATE product SET name = :name, description = :description, iddm = :iddm, image = :image WHERE id = :id";
        include_once 'config/db.config.php';
        $sp = new ConnectModel();
        return $sp->execute($sql, ['id' => $id, 'name' =>$name, 'description' => $description, 'iddm' => $iddm, 'image' => $image]);
    }

    public function getProductById($id) {
        $sql = "SELECT * FROM product WHERE id = :id";
        include_once 'config/db.config.php';
        $sp = new ConnectModel();
        return $sp->selectone($sql, $id);
    }
}
?>
