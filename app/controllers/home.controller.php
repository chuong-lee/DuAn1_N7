<!-- b1: tạo the php -->
<!-- b2: tạo class có tên là home controller -->
<!-- b3: tạo contrutor chứa tham số  -->
<!-- b4: tạo hàm chức năng -->
<?php
class HomeController
{
    private $productModel;
    private $categoryModel;
    private $data;
    public function __construct()
    {
        $this->productModel = new ProductModel();
        $this->categoryModel = new CategoryModel();
    }
    public function renderHome($data)
    {
        require_once './views/content/trangChu.php';
    }

    public function getAll()
    {
        $this->data['products'] = $this->productModel->getAllProduct();
        $this->getDataByname(8, 1);
        $this->getProductByCate();
        $this->data['dsdm'] = $this->categoryModel->getAllCategory();
        $this->data['sptrending'] = $this->productModel->getProductTrending();
        $this->renderHome($this->data);
    }

    public function getDataByname($limit, $page)
    {
        $this->data['dsdm'] = $this->categoryModel->getAllCategory();
        $allProducts = [];
        if (!empty($this->data['dsdm'])) {
            foreach ($this->data['dsdm'] as $category) {
                $categoryName = $category['name'];
                $products = $this->productModel->getDataByName($categoryName);
                if (!empty($products)) {
                    $allProducts = array_merge($allProducts, $products);
                }
            }
        }
        usort($allProducts, function ($a, $b) {
            return $b['buying'] <=> $a['buying'];
        });
        $offset = ($page - 1) * $limit;
        $allProducts = array_slice($allProducts, $offset, $limit);
        $this->data['dssp'] = $allProducts;
    }

    public function getProductByCate()
    {
        // b1 nhận request để lấy giá trị của cate 
        // b2 lấy danh sách sản phẩm theo cate
        // b3 đưa dữ liệu vào mảng dssp
        if (isset($_GET['id_danhmuc'])) {
            $id_danhmuc = $_GET['id_danhmuc'];
            $products = $this->productModel->getProductByCate($id_danhmuc);
            $allProducts = $products;
        }else{
            $allProducts = [];
        }
        $this->data['sptdm'] = $allProducts;
    }
}
?>