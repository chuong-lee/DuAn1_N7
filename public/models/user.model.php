<?php
class UserModel
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    
    public function getUser($username, $pass)
    {
        $sql = "select * from `user` u where email = '$username' and password = '$pass'";
        return $this->db->getOne($sql);
    }

    public function getUserByName($username)
    {
        $sql = "SELECT * FROM user where email = '$username'";
        return $this->db->getOne($sql);
    }

    function insertUserForUser($data)
    {
        $sql = "INSERT INTO user (name, phone, email, password) VALUES (?, ?, ?, ?)";
        $param = [$data['name'], $data['phone'], $data['email'], $data['password']];
        return $this->db->insert($sql, $param);
    }
}
