<?php
class UserController{
    public $user;

    public function __construct()
    {
        $this->user = new UserModel();
    }

    public function renderView($view, $data = ['abc'])
    {
        if(!empty($data)){
            extract($data);
            print_r($data);
        }
        $viewPath = './views/content/' . $view . '.php';
        require_once $viewPath;
    }
    public function signinUser()
    {
        $this->renderView('dangNhap');
        if (isset($_POST['sign'])) {
            $username = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';

            if (!empty($username) && !empty($password)) {
                $user = $this->user->getUser($username, $password);
                if ($user) {
                    if ($user['role'] == 1) {
                        header("Location: admin/index.php");
                    } elseif ($user['role'] == 0) {
                        header("Location: index.php");
                    }
                    exit();
                } else {
                    echo '<script>alert("Tên đăng nhập hoặc mật khẩu không chính xác.");</script>';
                }
            } else {
                echo '<script>alert("Vui lòng nhập tên đăng nhập và mật khẩu.");</script>';
            }
        }
    }

    public function addUser(){
        $messageError = '';
        $this->renderView('dangKy',['messageError' => $messageError]);
        if(isset($_POST['register'])){
            $data = [];
            $data['name'] = $_POST['name'] ?? '';
            $data['phone'] = $_POST['phone'] ?? '';
            $data['email'] = $_POST['email'] ?? '';
            $data['password'] = $_POST['password'] ?? '';
            $data['address'] = $_POST['address'] ?? '';
            
            if ($this->user->getUserByName($data['email'])){
                $messageError = 'Tài khoản đã được đăng ký';
                // echo '<script>alert("Đăng kí that bau")</script>';
            } else {
                if (!empty($data['name']) && !empty($data['phone']) && !empty($data['email']) && !empty($data['password'] && !empty($data['address']))) {
                    $this->user->insertUserForUser($data);
                    echo '<script>alert("Đăng kí thành công")</script>';
                    echo '<script>location.href="index.php?page=dangNhap";</script>';
                } else {
                    echo "Tất cả các trường đều bắt buộc.";
                }
            }
        }
        $this->renderView('dangKy',['messageError' => $messageError]);
    }
}
