    <?php
    class ProductController
    {
        private $productModel;
        private $categoryModel;
        private $userModel;
        private $cartModel;

        public $data = [];
        function __construct()
        {
            $this->productModel = new ProductModel;
            $this->categoryModel = new CategoryModel;
            $this->userModel = new UserModel;
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

        function getAllProduct()
        {
            $products = $this->productModel->getAllProduct();
            if (!empty($products)) {
                $data['products'] = $products;
                $this->renderView($data, 'sanPham');
            } else {
                echo "Không tìm thấy sản phẩm.";
            }
        }

        function detail()
        {
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
            } else {
                $id = 0;
            }
            $detail = $this->productModel->getProductDetail($id);
            if (is_array($detail)) {
                $data['productDetail'] = $detail;
                $this->renderView($data, 'chiTietSp');
            } else {
                echo "Không tìm thấy sản phẩm ";
            }
        }



        public function getProductByCategory()
        {
            $data['dsdm'] = $this->categoryModel->getAllCategory();
            if (isset($_GET['id_danhmuc'])) {
                $id_danhmuc = $_GET['id_danhmuc'];
                $products = $this->productModel->getProductByCate($id_danhmuc);
                $allProducts = $products;
            } else {
                $allProducts = [];
            }
            if (is_array($allProducts)) {
                $data['products'] = $allProducts;
                // $data['currentUser'] = $this->userModel->getUser();
                $this->renderView($data, 'sanPham');
            } else {
                echo "Không tìm thấy sản phẩm ";
            }
        }

        function addProductToCart() {
            if (isset($_POST['addProductToCart'])) {
                $data = [];
                $data['id_user'] = $_POST['id_user'] ?? '';
                $data['id_product'] = $_POST['id_product'] ?? '';
        
                if (!empty($data['id_product']) && !empty($data['id_user'])) {
                    $existingProduct = $this->cartModel->findProductInCart($data['id_product'], $data['id_user']);
                    $productData = $existingProduct->fetch(PDO::FETCH_ASSOC);
                    if ($productData) {
                        $data['quantity'] = $productData['quantity'] + 1;
                        $this->cartModel->updatedProductToCart($data);
                        echo '<script>alert("Cập nhật sản phẩm thành công")</script>';
                    } else {
                        if (is_array($_POST['id_product'])) {
                            $productCount = array_count_values($_POST['id_product']);
                            $data['quantity'] = $productCount[$data['id_product']] ?? 0;
                        } else {
                            $data['quantity'] = 1;
                        }
                        $this->cartModel->insertProductToCart($data);
                        echo '<script>alert("Thêm sản phẩm thành công")</script>';
                    }
                } else {
                    echo '<script>location.href="index.php?page=dangNhap";</script>';
                }
            }
        }
        
        

    }
