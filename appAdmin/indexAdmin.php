<?php
include_once 'views/header.php';
$page = isset($_GET['trang']) ? $_GET['trang'] : 'index';
$lenh = isset($_GET['lenh']) ? $_GET['lenh'] : '';
$id = isset($_POST['id']) ? $_POST['id'] : (isset($_GET['id']) ? $_GET['id'] : '');
$baocao = isset($_POST['baocao']) ? $_POST['baocao'] : '';
$tennd = isset($_POST['tennd']) ? $_POST['tennd'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';

switch ($page) {
    case 'index':
        include_once 'views/index.php';
        break;
    case 'dm_sp':
        include_once 'controllers/dm_sp_C.php';
        $th = new Dm_sp_C($lenh, $baocao);
        $th->index();
        break;
    case 'users':
        include_once 'controllers/user_C.php';
        $user = new user_C($lenh, $id, $tennd, $email);
        $user->index();
        break;
    case 'updateProduct':
        include_once 'views/updateProduct.php';
        break;
    case 'updataUser':
        include_once 'views/updataUser.php';
        break;
    case 'product':
        include_once 'controllers/product_C.php';
        $sp = new Product_C();
        if ($lenh == 'add') {
            $sp->addProduct();
        } elseif ($lenh == 'edit') {
            $sp->editProduct();
        } elseif ($lenh == 'delete') {
            $sp->deleteProduct();
        } else {
            $sp->index();
        }
        break;
}
?>
