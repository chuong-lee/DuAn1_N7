<?php
class ContactController{
    public function __construct(){
    }
    public function renderView($data=null)
    {
        require_once './views/content/lienHe.php';
    }

}
?>