<?php
class user_C {
    public $lenh;
    public $id;
    public $tennd;
    public $email;

    public function __construct($lenh, $id = null, $tennd = null, $email = null) {
        $this->lenh = $lenh;
        $this->id = $id;
        $this->tennd = $tennd;
        $this->email = $email;
    }

    public function index() {
        include_once 'models/user_M.php';
        $user = new user_M();

        switch ($this->lenh) {
            case '':
                $manguser = $user->dsnd();
                include_once 'views/users.php';
                break;
            case 'them':
                $user->them($this->tennd, $this->email);
                $manguser = $user->dsnd();
                include_once 'views/users.php';
                break;
            case 'sua':
                if ($this->id) {
                    $usersua = $user->sua($this->id);
                    include_once 'views/updataUser.php';
                }
                break;
            case 'capnhat':
                if ($this->id) {
                    $user->capnhat($this->id, $this->tennd, $this->email);
                    header('Location: index.php?trang=users'); // Redirect to the main users page after update
                    exit(); // Ensure no further code is executed after the redirect
                }
                break;
            case 'xoa':
                if ($this->id) {
                    $user->xoa($this->id);
                    $manguser = $user->dsnd();
                    include_once 'views/users.php';
                }
                break;
        }
    }
}
?>
