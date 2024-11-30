<?php
class user_M {
    public function dsnd() {
        include_once 'models/connectmodel.php';
        $user = new ConnectModel();
        $sql = "SELECT * FROM user";
        return $user->selectall($sql);
    }

    public function them($tennd, $email){
        $sql = "INSERT INTO user (tennd, email) VALUES (:tennd, :email)";
        include_once 'models/connectmodel.php';
        $user = new ConnectModel();
        $user->ketnoi();
        $stmt = $user->conn->prepare($sql);
        $stmt->execute([':tennd' => $tennd, ':email' => $email]);
        $user->conn = null;
    }

    public function sua($id) {
        $sql = "SELECT * FROM user WHERE id=:id";
        include_once 'models/connectmodel.php';
        $user = new ConnectModel();
        $user->ketnoi();
        $stmt = $user->conn->prepare($sql);
        $stmt->execute([':id' => $id]);
        $kq = $stmt->fetch(PDO::FETCH_ASSOC);
        $user->conn = null;
        return $kq;
    }

    public function capnhat($id, $tennd, $email) {
        $sql = "UPDATE user SET tennd=:tennd, email=:email WHERE id=:id";
        include_once 'models/connectmodel.php';
        $user = new ConnectModel();
        $user->ketnoi();
        $stmt = $user->conn->prepare($sql);
        $stmt->execute([':tennd' => $tennd, ':email' => $email, ':id' => $id]);
        $user->conn = null;
    }

    public function xoa($id) {
        $sql = "DELETE FROM user WHERE id = :id";
        include_once 'models/connectmodel.php';
        $user = new ConnectModel();
        $user->ketnoi();
        $stmt = $user->conn->prepare($sql);
        $stmt->execute([':id' => $id]);
        $user->conn = null;
    }
}
?>
