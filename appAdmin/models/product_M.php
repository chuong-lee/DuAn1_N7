<?php
class Product_M {
    public function dssp() {
        $sql = "SELECT sanpham.*, tendm FROM sanpham INNER JOIN dm_sp ON sanpham.iddm = dm_sp.id";
        include_once 'models/connectmodel.php';
        $sp = new ConnectModel();
        return $sp->selectall($sql);
    }

    public function addProduct($tensp, $mota, $iddm, $hinh) {
        $sql = "INSERT INTO sanpham (tensp, mota, iddm, hinh) VALUES (:tensp, :mota, :iddm, :hinh)";
        include_once 'models/connectmodel.php';
        $sp = new ConnectModel();
        return $sp->execute($sql, ['tensp' => $tensp, 'mota' => $mota, 'iddm' => $iddm, 'hinh' => $hinh]);
    }

    public function deleteProduct($id) {
        $sql = "DELETE FROM sanpham WHERE id = :id";
        include_once 'models/connectmodel.php';
        $sp = new ConnectModel();
        return $sp->execute($sql, ['id' => $id]);
    }

    public function updateProduct($id, $tensp, $mota, $iddm, $hinh) {
        $sql = "UPDATE sanpham SET tensp = :tensp, mota = :mota, iddm = :iddm, hinh = :hinh WHERE id = :id";
        include_once 'models/connectmodel.php';
        $sp = new ConnectModel();
        return $sp->execute($sql, ['id' => $id, 'tensp' => $tensp, 'mota' => $mota, 'iddm' => $iddm, 'hinh' => $hinh]);
    }

    public function getProductById($id) {
        $sql = "SELECT * FROM sanpham WHERE id = :id";
        include_once 'models/connectmodel.php';
        $sp = new ConnectModel();
        return $sp->selectone($sql, $id);
    }
}
?>
