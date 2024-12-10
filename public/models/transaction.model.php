    <?php
    class TransactionModel{
        private $db;
        public function __construct()
        {
            $this->db = new Database();
        }
        public function insertTransaction($data){
            $sql = "";
            $query = "";
            return $this->db->insert($sql, $query);
        }
        
        }
    ?>