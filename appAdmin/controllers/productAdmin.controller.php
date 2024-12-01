<?php
class ProductAdminController
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
        $viewPath = './views/contentAdmin/' . $view . '.php';
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
            $this->renderView($data, 'capnhatsanpham');
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
        // b1 nhận request để lấy giá trị của cate 
        // b2 lấy danh sách sản phẩm theo cate
        // b3 đưa dữ liệu vào mảng dssp
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
            $this->renderView($data, 'capnhatsanpham');
        } else {
            echo "Không tìm thấy sản phẩm ";
        }
    }

    function addProductToCart(){
        if(isset($_POST['addProductToCart'])){
            $data = [];
            $data['id_user'] = $_POST['id_user'] ?? '';
            $data['id_product'] = $_POST['id_product'] ?? '';
            if (!empty($data['id_product']) && !empty($data['id_user'])) {
                if (is_array($_POST['id_product'])) {
                    // Đếm số lần xuất hiện của id_product trong mảng
                    $productCount = array_count_values($_POST['id_product']);
                    // Gán quantity bằng số lần xuất hiện của id_product
                    $data['quantity'] = $productCount[$data['id_product']] ?? 0;
                } else {
                    // Nếu id_product không phải là mảng, chỉ định quantity là 1
                    $data['quantity'] = 1;
                }
                $this->cartModel->insertProductToCart($data);
                echo '<script>alert("Thêm sản phẩm thành công")</script>';
            } else {
                echo '<script>location.href="index.php?page=dangNhap";</script>';
            }
        }
    }

}