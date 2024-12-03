<?php
class HomeAdminController

{
    private $data;
    private $productModel;
    private $categoryModel;

    function __construct() {
        $this->productModel = new ProductModel();
        $this->categoryModel = new CategoryModel();
    }
    public function renderViewAdmin($view, $data)
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

    function getProduct(){
        $this->data['products'] = $this->productModel->getAllProduct();
        $this->renderViewAdmin('trangChuAdmin',$this->data);
    }

    
    public function getDataByname()
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
        $this->data['dssp'] = $allProducts;
    }
    
}
