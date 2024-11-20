<?php
require_once './views/header.php';
require_once '../config/importModel.php';
require_once '../config/importController.php';

$productController = new ProductController();
$signin = new UserController();
if (isset($_GET['page'])) {
    $page = $_GET['page'];

    switch ($page) {
        case 'trangChu':
            $productController->getAllProduct();
            break;

        case 'chiTietSp':
            $productController->detail();
            break;

        case 'dangNhap':
            $signin->signinUser();
            break;

        case 'dangKy':
            $signin->addUser();
            break;

        case 'tintuc':
            $tintuc = new tintucController();
            break;

        case 'gioithieu':
            $gioithieu = new gioithieuController();
            break;

        default:
            $home = new HomeController();
            $home->getAll();
            break;
    }
} else {
    $home = new HomeController();
    $home->getAll();
}
require_once './views/footer.php';
