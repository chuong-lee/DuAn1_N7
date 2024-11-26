<?php
class CartController{
    private $cartModel;

    public $data = [];
    function __construct()
    {
        $this->cartModel = new CartModel;
    }
    function renderView($data, $view)
    {
        if (!empty($data)) {
            extract($data);
        }
        $viewPath = './views/content/' . $view . '.php';
        if (file_exists($viewPath)) {
            include $viewPath;
        } else {
            echo "View không tồn tại.";
        }
    }

    function getProductToCart(){
        $userId= 4;
        $cartProduct= $this->cartModel->getProductByIdUser($userId); 
        if(!empty($cartProduct)){
            $data['cartProduct'] = $cartProduct;
            $this->renderView($data, 'gioHang');
        }else{
            $data['cartProduct'] = $cartProduct;
            $this->renderView($data, 'gioHang');
            echo  'Không có sản phẩm trong giỏ hàng';
        }
    }

    function deleteProductInCart(){
        if(isset($_GET['id_product'])&&($_GET['id_product'])> 0){
            $productId = $_GET['id_product'];
            $this->cartModel->deleteProductInCart($productId);
            echo'<script>location.href="index.php?page=gioHang";</script>';
        }
    }
}
?>