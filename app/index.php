<?php
require_once './views/header.php';
require_once '../config/importModel.php';
require_once '../config/importController.php';

$productController = new ProductController();
$userController = new UserController();
$cartController = new CartController();
$transactionController = new TransactionController();
$orderController = new OrderController();
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
            $userController->signinUser();
            break;

        case 'dangKy':
            $userController->addUser();
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
            $transactionController -> getUserById();
            $orderController->createdOrderProduct();
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
            $cartController->getProductToCart();
            $cartController->updateQuantityInCart();
            break;

        case 'delProductInCart':
            $cartController->deleteProductInCart();
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
