<?php
class category_M {
    public function listcategory() {
        include_once 'config/db.config.php';
        $th = new ConnectModel();
        $sql = "SELECT * FROM category";
        return $th->selectall($sql);
    }

    public function add($category) {
        $sql = "INSERT INTO category (category) VALUES ('$category')";
        include_once 'config/db.config.php';
        $dm = new ConnectModel();
        $dm->ketnoi();
        $stmt = $dm->conn->prepare($sql);
        $stmt->execute();
        $dm->conn = null;
    }

    public function xoa($id) {
        $sql = "DELETE * FROM category WHERE id=$id";
        include_once 'config/db.config.php';
        $dm = new ConnectModel();
        $dm->ketnoi();
        $stmt = $dm->conn->prepare($sql);
        $stmt->execute();
        $dm->conn = null;
    }

    public function category($id) {
        $sql = "SELECT * FROM category WHERE id=$id";
        include_once 'config/db.config.php';
        $dm = new ConnectModel();
        $dm->ketnoi();
        $stmt = $dm->conn->prepare($sql);
        $stmt->execute();
        $kq = $stmt->fetch(PDO::FETCH_ASSOC);
        $dm->conn = null;
        return $kq;
    }

    public function capnhat($id, $name) {
        $sql = "UPDATE dm_sp SET name='$name' WHERE id=$id";
        include_once 'config/db.config.php';;
        $dm = new ConnectModel();
        $dm->ketnoi();
        $stmt = $dm->conn->prepare($sql);
        $stmt->execute();
        $dm->conn = null;
    }
}
?>