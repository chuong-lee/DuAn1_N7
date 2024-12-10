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

    public function getDataByname()
    {
        $data['dsdm'] = $this->categoryModel->getAllCategory();
        $allProducts = [];
        if (!empty($data['dsdm'])) {
            foreach ($data['dsdm'] as $category) {
                $categoryId = $category['id'];
                $products = $this->productModel->getAllProducts($categoryId);
                if (!empty($products)) {
                    $allProducts = array_merge($allProducts, $products);
                }
            }
        }
        $this->data['dssp'] = $allProducts;
        $this->renderView($this->data, 'capnhatsanpham');
    }

    public function getAllCategory(){
        $listCategory = $this->categoryModel->getAllCategory();
        if($listCategory){
            $data['dsdm'] = $listCategory;
            $this->renderView($data, 'addProducts');
        }else{
            echo ' Danh sách danh mục chưa có';
        }
    }

    public function addPro() {
        $data = [];
        if (isset($_POST['addPro'])) {
            $data['id_cate'] = $_POST['id_cate'] ?? null;
            $data['name'] = $_POST['product-name'] ?? '';
            $data['price'] = $_POST['price'] ?? 0;
            $data['quantity'] = $_POST['quantity'] ?? 0;
            $data['description'] = $_POST['description'] ?? '';
            $data['sale_price'] = $_POST['sale_price'] ?? 0;
            $tendanhmuc = $_POST['tendanhmuc'] ?? 'default';
            $formatTenDanhMuc = str_replace(' ', '', $tendanhmuc);
            // Tạo đường dẫn lưu ảnh theo tên danh mục
            // Kiểm tra nếu có file ảnh được tải lên
            if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
                $data['image'] = $_FILES['image']['name'] ?? ''; // Lấy tên file ảnh
                $uploadDir = "../public/client/images/danhmuc/{$formatTenDanhMuc}/";
                echo '$uploadDir'. $uploadDir;
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }
    
                // Đường dẫn lưu file ảnh
                $file = $uploadDir . basename($data['image']);
    
                // Di chuyển ảnh vào thư mục lưu trữ
                if (move_uploaded_file($_FILES['image']['tmp_name'], $file)) {
                    // Lưu đường dẫn ảnh vào cơ sở dữ liệu
                    $data['image'] = "{$uploadDir}{$data['image']}";
                    $this->productModel->insertPro($data);
                    echo '<script>alert("Thêm sản phẩm thành công!");</script>';
                    echo '<script>location.href="indexAdmin.php?page=capnhatsanpham";</script>';
                } else {
                    echo '<script>alert("Không thể tải lên hình ảnh. Vui lòng thử lại.");</script>';
                }
            } else {
                echo '<script>alert("Vui lòng chọn một hình ảnh để tải lên.");</script>';
            }
        }
    }
    
    

}
