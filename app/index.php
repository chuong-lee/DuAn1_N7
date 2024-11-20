<?php
require_once './controllers/home.controller.php';
require_once './controllers/product.controller.php';
require_once './controllers/UserController.php';
require_once './controllers/news.controller.php';
require_once './controllers/introduce.controller.php';
require_once './views/header.php';
require_once '../config/importModel.php';

$productController = new ProductController();
$signin = new UserController();
if (isset($_GET['page'])) {
    $page = $_GET['page'];

    switch ($page) {
        case 'trangChu':
            $productController->getAllProduct();
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
