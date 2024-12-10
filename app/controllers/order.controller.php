<?php
class OrderController{
    private $orderModel;
    private $cartModel;
    private $orderDetailModel;

    public $data = [];
    function __construct()
    {
        $this->orderModel = new OrderModel();
        $this->orderDetailModel = new OrderDetailModel();
        $this->cartModel = new CartModel();
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

    // khi người dùng nhấn đặt hàng sẽ truyền id_user vào order và khởi tạo
    // b2 nó sẽ lấy cái id_order đem truyền xuống câu sql để thực việc thêm orderDetail
    
    function createdOrderProduct() {
        if (isset($_POST['orderProduct'])) {
            $data = [];
            $data['id_user'] = $_GET['userId'] ?? '';
            
            if (!empty($data['id_user'])) {
                $id_order = $this->orderModel->insertOrder($data);
                $data['id_order'] = $id_order;

                if (is_array($_POST['productId']) && is_array($_POST['quantity'])) {
                    foreach ($_POST['productId'] as $index => $id_product) {
                        $data['id_product'] = $id_product;
                        $data['quantity'] = $_POST['quantity'][$index];
                        $this->orderDetailModel->insertOrderDetail($data);
                        $this->cartModel->deleteProductInCart($id_product);
                    }
                    echo '<script>alert("Đặt hàng thành công")</script>';
                } else {
                    echo '<script>alert("Dữ liệu sản phẩm không hợp lệ")</script>';
                }
            }
        }
    }

    
    function getOrderDetail(){
        $userId = 4;
        $status = 'pending';
        $orderId = $this->orderDetailModel->getOrderDetail($userId, $status);
        if($orderId){
            $data['orderDetails'] = $orderId;
            $this->renderView($data, 'orderInfo');
        }else{
            echo 'Chưa có đơn hàng nào được xử lý';
        }
    }
    
}
?>