<?php
class ProfileAdminController
{
    function __construct() {}
    public function renderViewAdmin($view, $data)
    {
        require_once './views/contentAdmin/thongtin.php';
    }
}
