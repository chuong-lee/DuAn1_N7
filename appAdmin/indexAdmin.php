<?php
require_once '../config/importAdminController.php';
require_once '../config/importModel.php';
require_once 'views/headerAdmin.php';
$productController = new ProductAdminController();
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        case 'addProducts':
            $productController->getAllCategory();
            $productController->addPro();
            break;

        case 'editProducts':
            $productController->viewEdit();
            $productController->editPro();
            break;

        case 'capnhatdanhmuc':
            // $productController->getProductByCategory();
            break;
        
        case 'delpro':
            $productController->delPro();
            break;

        case 'sanpham':
            $productController->getDataByname();
            break;

        default:
            $home = new HomeAdminController();
            $home->getProduct();
            break;
    }
} else {
    $home = new HomeAdminController();
    $home->getProduct();
}

require_once 'views/footerAdmin.php';

?>