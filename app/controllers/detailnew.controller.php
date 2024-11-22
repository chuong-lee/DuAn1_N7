<?php
class DetailNewController{
    public function __construct() {
        $id = isset($_GET['id']);
        $sp = new DetailNewsModel();

        if ($id !== '') {
            $sp->onesp($id);
            require_once 'views/content/ctbaiviet.php';
        } 
    }
}
?>
