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
            if (isset($_POST['login'])) {
                $username = $_POST['email'] ?? '';
                $password = $_POST['password'] ?? '';
                $pattern = '/^[a-zA-Z0-9._%+-]+@gmail\.com$/';
                if (!empty($username) && !empty($password)) {
                    if(!preg_match($pattern, $username)){
                        echo '<script>alert("'.$username.' không đúng định dạng email. Vui lòng nhập định dạng của email như: abc@gmail.com");</script>';
                        return;
                    }
                    $user = $this->user->getUser($username, $password);
                    if ($user) {
                        echo '<script>
                        sessionStorage.setItem("userId", "'.$user['id'].'");
                        sessionStorage.setItem("name", "'.$user['name'].'");
                        
                        </script>';
                        if ($user['id_role'] == 1) {
                            echo '<script>location.href="indexAdmin.php";</script>';
                        } elseif ($user['id_role'] == 2) {
                            echo '<script>location.href="index.php";</script>';
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
            if(isset($_POST['register'])){
                $data = [];
                $data['name'] = $_POST['name'] ?? '';
                $data['phone'] = $_POST['phone'] ?? '';
                $data['email'] = $_POST['email'] ?? '';
                $data['password'] = $_POST['password'] ?? '';
                $data['confirm-password'] = $_POST['confirm-password'] ?? '';
                $data['address'] = $_POST['address'] ?? '';
                
                if ($this->user->getUserByName($data['email'])){
                    echo '<script>alert("Tài khoản đã được đăng ký ")</script>';
                } else {
                    if (!empty($data['name']) && !empty($data['phone']) && !empty($data['email']) && !empty($data['password'] && !empty($data['address']) && !empty($data['confirm-password']))) {
                        if($data['confirm-password'] === $data['password']){
                            $this->user->insertUserForUser($data);
                            echo '<script>alert("Đăng kí thành công")</script>';
                            echo '<script>location.href="index.php?page=dangNhap";</script>';
                        }
                        echo '<script>alert("Đăng kí thất bại")</script>';
                    } else {
                        echo "Tất cả các trường đều bắt buộc.";
                    }
                }
                
            }
            
        }

        public function getUserById(){
            if(isset($_GET['userId'])){
                $userId = $_GET['userId'];
                $userDetail = $this->user->getUserById($userId);
                if($userDetail){
                    $data['userDetail'] =$userDetail;
                    $this->renderView($data, 'header');
                }else{
                    echo '<script>location.href="index.php?page=dangNhap";</script>';
                }
            }
            
        }
    }
