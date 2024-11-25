<!--  -->
<?php 
class DetailNewController {
    public function __construct() {
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $sp = new DetailNewsModel();

        if ($id !== null) {
            $sp->onesp($id); // Call the method to fetch data
            $article = $sp->motsp; // Get the article details
            require_once 'views/content/ctbaiviet.php'; // Pass data to the view
        }
    }
}
?>
