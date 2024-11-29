<?php
require_once './views/header.php';
require_once '../config/importModel.php';
require_once '../config/importController.php';

$productController = new ProductController();
$signin = new UserController();
$cartDetail = new CartController();
if (isset($_GET['page'])) {
    $page = $_GET['page'];

    switch ($page) {
        case 'trangChu':
            $productController->getAllProduct();
            break;

        case 'chiTietSp':
            $productController->detail();
            $productController->addProductToCart();
            break;

        case 'dangNhap':
            $signin->signinUser();
            break;

        case 'dangKy':
            $signin->addUser();
            break;

        case 'tintuc':
            $tintuc = new NewsController();
            break;
        case 'ctbaiviet':
            $ctbaiviet = new DetailNewController();
            break;

        case 'gioithieu':
            $gioithieu = new gioithieuController();
            break;

        case 'thanhtoan':
            $thanhtoan = new transaction();
            $thanhtoan->renderView();
            break;

        case 'lienhe':
            $contact = new ContactController();
            $contact->renderView();
            break;

        case 'sanPham':
            $productController->getProductByCategory();
            $productController->addProductToCart();
            break;

        case 'gioHang':
            $cartDetail->getProductToCart();
            break;

        case 'delProductInCart':
            $cartDetail->deleteProductInCart();
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
