    <?php
    class CategoryModel
    {
        private $db;
        public function __construct()
        {
            $this->db = new Database();
        }
        public function getAllCategory()
        {
            $sql = "SELECT * FROM category";
            $result = $this->db->getAll($sql);
            return $result;
        }
        public function getCategoryById($idCate)
        {
            $sql = "SELECT name FROM category WHERE id = ". $idCate;
            $result = $this->db->getOne($sql);
            return $result;
        }
        }
