<?php
class Dm_sp_M {
    public function dsdm() {
        include_once 'models/connectmodel.php';
        $th = new ConnectModel();
        $sql = "SELECT * FROM dm_sp";
        return $th->selectall($sql);
    }

    public function them($tendm) {
        $sql = "INSERT INTO dm_sp (tendm) VALUES ('$tendm')";
        include_once 'models/connectmodel.php';
        $dm = new ConnectModel();
        $dm->ketnoi();
        $stmt = $dm->conn->prepare($sql);
        $stmt->execute();
        $dm->conn = null;
    }

    public function xoa($id) {
        $sql = "DELETE FROM dm_sp WHERE id=$id";
        include_once 'models/connectmodel.php';
        $dm = new ConnectModel();
        $dm->ketnoi();
        $stmt = $dm->conn->prepare($sql);
        $stmt->execute();
        $dm->conn = null;
    }

    public function laydm($id) {
        $sql = "SELECT * FROM dm_sp WHERE id=$id";
        include_once 'models/connectmodel.php';
        $dm = new ConnectModel();
        $dm->ketnoi();
        $stmt = $dm->conn->prepare($sql);
        $stmt->execute();
        $kq = $stmt->fetch(PDO::FETCH_ASSOC);
        $dm->conn = null;
        return $kq;
    }

    public function capnhat($id, $tendm) {
        $sql = "UPDATE dm_sp SET tendm='$tendm' WHERE id=$id";
        include_once 'models/connectmodel.php';
        $dm = new ConnectModel();
        $dm->ketnoi();
        $stmt = $dm->conn->prepare($sql);
        $stmt->execute();
        $dm->conn = null;
    }
}
?>