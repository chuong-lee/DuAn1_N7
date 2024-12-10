    <?php
    class TransactionController
    {
        private $transaction;
        private $userModel;
        private $cartModel;
        public $data = [];
        public function __construct()
        {
            $this->userModel = new UserModel();
            $this->cartModel = new CartModel();
        }
        public function renderView($data, $view)
        {
            $viewPath = './views/content/' . $view . '.php';
            require_once $viewPath;
        }

        public function getUserById()
        {
            if (isset($_GET['userId'])) {
                $userId = $_GET['userId'];
                $userDetail = $this->userModel->getUserById($userId);
                $cartProduct = $this->cartModel->getProductByIdUser($userId);

                if ($userDetail) {
                    $data['userDetail'] = $userDetail;
                    $data['cartProduct'] = $cartProduct;
                    $this->renderView($data, 'thanhtoan');
                } else {
                    echo '<script>location.href="index.php?page=dangNhap";</script>';
                }
            }

        }


    }
    ?>