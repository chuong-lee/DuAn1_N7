<?php
class Dm_sp_C {
    public $lenh;
    public $tendm;

    public function __construct($lenh, $tendm = null) {
        $this->lenh = $lenh;
        $this->tendm = $tendm;
    }

    public function index() {
        switch($this->lenh) {
            case '':
                include_once 'models/dm_sp_M.php';
                $th = new Dm_sp_M();
                $mangdm = $th->dsdm();
                include_once 'views/dm_sp.php';
                break;
            case 'them':
                include_once 'models/dm_sp_M.php';
                $th = new Dm_sp_M();
                $th->them($this->tendm);
                $mangdm = $th->dsdm();
                include_once 'views/dm_sp.php';
                break;
            case 'xoa':
                if(isset($_GET['id'])) {
                    $id = $_GET['id'];
                    include_once 'models/dm_sp_M.php';
                    $th = new Dm_sp_M();
                    $th->xoa($id);
                    $mangdm = $th->dsdm();
                    include_once 'views/dm_sp.php';
                }
                break;
            case 'sua':
                if(isset($_GET['id'])) {
                    $id = $_GET['id'];
                    include_once 'models/dm_sp_M.php';
                    $th = new Dm_sp_M();
                    $dm = $th->laydm($id);
                    include_once 'views/dm_sp_Sua.php';
                }
                break;
            case 'capnhat':
                if(isset($_GET['id'])) {
                    $id = $_GET['id'];
                    include_once 'models/dm_sp_M.php';
                    $th = new Dm_sp_M();
                    $th->capnhat($id, $this->tendm);
                    $mangdm = $th->dsdm();
                    include_once 'views/dm_sp.php';
                }
                break;
        }
    }
}
?>