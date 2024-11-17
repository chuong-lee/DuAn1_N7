<?php
require_once './controllers/home.controller.php';
require_once './controllers/product.controller.php';
require_once './controllers/news.controller.php';
require_once './controllers/introduce.controller.php';
require_once './views/header.php';
require_once '../public/models/database.php';
require_once '../public/models/product.model.php';
require_once '../public/models/category.model.php';

$productController = new ProductController();

if (isset($_GET['page'])) {
    $page = $_GET['page'];

    switch ($page) {
        case 'trangChu':
            $productController->getAllProduct();
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
?>