<!--  -->
<?php 
class DetailNewController {
    public function __construct() {
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $sp = new DetailNewsModel();

        if ($id !== null) {
            $sp->onesp($id); 
            $article = $sp->motsp; 
            require_once 'views/content/ctbaiviet.php'; 
        }
    }
}
?>
