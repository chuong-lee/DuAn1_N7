<?php
require_once '../config/importAdminController.php';
require_once '../config/importModel.php';
require_once 'views/headerAdmin.php';
$productController = new ProductAdminController();
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        // case 'trangChuAdmin':
        //     $productController->renderViewAdmin();
        //     break;

        // case 'baocao':
        //     $productController->renderViewAdmin();
        //     break;

        case 'addProducts':
            $productController->getAllCategory();
            $productController->addPro();
            break;

        case 'capnhatdanhmuc':
            // $productController->getProductByCategory();
            break;

        case 'capnhatsanpham':
            $productController->getDataByname();
            break;

        // case 'thongtin':
        //     $productController->renderViewAdmin();
        //     break;



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