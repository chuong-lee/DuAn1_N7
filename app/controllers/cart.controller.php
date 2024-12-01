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
        if(isset($_GET['userId'])){
            $userId = $_GET['userId'];
            $cartProduct= $this->cartModel->getProductByIdUser($userId); 
            if(!empty($cartProduct)){
                $data['cartProduct'] = $cartProduct;
                $this->renderView($data, 'gioHang');
            }else{
                echo  'Không có sản phẩm trong giỏ hàng';
            }
        }
        
    }

    function deleteProductInCart(){
        if(isset($_GET['id_product'])&&($_GET['id_product'])> 0 && isset($_GET['userId'])){
            $productId = $_GET['id_product'];
            $userId = $_GET['userId'];
            $this->cartModel->deleteProductInCart($productId);
            echo'<script>location.href="index.php?page=gioHang&userId='.$userId.'";</script>'; 
        }
    }

    function updateQuantityInCart() {
        if (isset($_POST['increaseQuantity'])) {
            $data = [];
            $data['id_user'] = $_POST['id_user'] ?? '';
            $data['id_product'] = $_POST['id_product'] ?? '';
            $data['quantity'] = $_POST['quantity'] ?? '';
            
    
            if (!empty($data['id_product']) && !empty($data['id_user']) && !empty($data['quantity'])) {
                // Kiểm tra nếu sản phẩm đã tồn tại trong giỏ hàng
                $existingProduct = $this->cartModel->findProductInCart($data['id_product'], $data['id_user']);
    
                if ($existingProduct) {
                    $this->cartModel->updatedProductToCart($data);
                }
            } else {
                // Nếu không có user hoặc product ID, chuyển hướng đến trang đăng nhập
                echo '<script>location.href="index.php?page=dangNhap";</script>';
            }
        }
    }
}
?>