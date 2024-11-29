<?php
class UserModel
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    
    public function getUser($email, $pass)
    {
        $sql = "select * from `user` u where email = '$email' and password = '$pass'";
        return $this->db->getOne($sql);
    }

    public function getUserById($userId)
    {
        $sql = "select * from `user` u where u.id = " . $userId;
        return $this->db->getOne($sql);
    }

    public function getUserByName($email)
    {
        $sql = "SELECT * FROM user where email = '$email'";
        return $this->db->getOne($sql);
    }

    function insertUserForUser($data)
    {
        $sql = "insert  into  `user` (name, email, password, phone, address) values (?, ?, ?, ?, ?)";
        $param = [$data['name'], $data['email'], $data['password'], $data['phone'],$data['address']];
        return $this->db->insert($sql, $param);
    }
}
