<?php
class Product_C {
    public function index() {
        include_once 'models/product_M.php';
        $sp = new Product_M();
        $mangsp = $sp->dssp();
        include_once 'views/product.php';
    }

    public function addProduct() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $tensp = $_POST['tensp'];
            $mota = $_POST['mota'];
            $iddm = $_POST['iddm'];
            $hinh = $_FILES['product_image']['name'];
            move_uploaded_file($_FILES['product_image']['tmp_name'], "public/img/".$hinh);

            include_once 'models/product_M.php';
            $sp = new Product_M();
            $sp->addProduct($tensp, $mota, $iddm, $hinh);

            header("Location: index.php?trang=product");
        } else {
            include_once 'views/product_Them.php';
        }
    }

    public function deleteProduct() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            include_once 'models/product_M.php';
            $sp = new Product_M();
    
            $product = $sp->getProductById($id);
    
            $sp->deleteProduct($id);

            $imagePath = "public/img/" . $product['hinh'];
    
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
    
            header("Location: index.php?trang=product");
        }
    }
    

    public function editProduct() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'];
            $tensp = $_POST['tensp'];
            $mota = $_POST['mota'];
            $iddm = $_POST['iddm'];
            $hinh = $_FILES['product_image']['name'];
            move_uploaded_file($_FILES['product_image']['tmp_name'], "public/img/".$hinh);

            include_once 'models/product_M.php';
            $sp = new Product_M();
            $sp->updateProduct($id, $tensp, $mota, $iddm, $hinh);

            header("Location: index.php?trang=product");
        } else {
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                include_once 'models/product_M.php';
                $sp = new Product_M();
                $product = $sp->getProductById($id);
                include_once 'views/product_Sua.php';
            }
        }
    }
}
?>
