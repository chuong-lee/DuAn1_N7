<?php
class OrderController{
    private $orderModel;
    private $orderDetailModel;

    public $data = [];
    function __construct()
    {
        $this->orderModel = new OrderModel();
        $this->orderDetailModel = new OrderDetailModel();
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

    function createdOrderProduct() {
        if (isset($_POST['orderProduct'])) {
            $data = [];
            $data['id_user'] = $_GET['id_user'] ?? '';
            if(!empty(($data['id_user']))){
                $this->orderModel->insertOrder($data);
            }
            $data['id_order'] = $_POST['id_order'] ?? '';
            // $existOrder = $this->orderModel->findOrderById($data['id_order']);
            // if($existOrder){
            //     $data['id_product'] = $_POST['id_product'] ?? '';
            //     $data['quantity'] = $_POST['quantity'] ?? '';
            //     if (!empty($data['id_product']) && !empty($data['quantity'])) {
            //         $this->orderDetailModel->insertOrderDetail($data);
            //         echo '<script>alert("Đặt hàng thành công")</script>';
            //     }

            // }
        }else{
            echo 'Bạn chưa truyền order xuống db';
        }
    }
}
?>