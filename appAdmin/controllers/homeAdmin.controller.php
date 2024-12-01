<?php
class HomeAdminController

{
    private $data;
    private $productModel;

    function __construct() {
        $this->productModel = new ProductModel();
        // $this->categoryModel = new CategoryModel();
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

    
}
