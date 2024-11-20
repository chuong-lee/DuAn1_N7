<?php
class UserController{
    public $user;

    public function __construct()
    {
        $this->user = new UserModel();
    }

    public function renderView($view)
    {
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
        $this->renderView('dangKy');
        if(isset($_POST['add'])){
            $data = [];
            $data['ten'] = $_POST['ten'] ?? '';
            $data['phone'] = $_POST['phone'] ?? '';
            $data['email'] = $_POST['email'] ?? '';
            $data['password'] = $_POST['password'] ?? '';
            
            if ($this->user->getUserByName($data['email'])){
                echo '<script>alert("Tên người dùng đã tồn tại. Vui lòng chọn tên khác.");</script>';
            } else {
                if (!empty($data['ten']) && !empty($data['phone']) && !empty($data['email']) && !empty($data['password'])) {
                    $this->user->insertUserForUser($data);
                    echo '<script>alert("Đăng kí thành công")</script>';
                    echo '<script>location.href="index.php?page=signin";</script>';
                } else {
                    echo "Tất cả các trường đều bắt buộc.";
                }
            }
        }
    }
}
