    <!-- 
    B1 tạo ra class db 
    B2 khai báo biến để kết nói db tên là conn
    B3 tạo ra hàm contruct để kết nói db 
    -->
    <?php
    require_once "../config/db.config.php";
    class Database{
        private $conn;
        private $stmt;
        public function __construct() {
            try {
                $this->conn = new PDO(
                    "mysql:host=".DB_HOST."; dbname=". DB_NAME."; charset=utf8", DB_USER, DB_PASS 
                );
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
        }

        public function getAll($sql){
            try {
                $stmt = $this->conn->prepare($sql);
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                echo "Query failed: " . $e->getMessage();
                return false;
            }
        }

        function query($sql, $param = []){
            $this->stmt = $this->conn->prepare($sql);
            $this->stmt->execute($param);
            return $this->stmt;
        }
        
        public function getOne($sql, $params = []) {
            try {
                // Prepare the SQL statement
                $stmt = $this->conn->prepare($sql);
        
                // Bind the parameters if any
                foreach ($params as $key => $value) {
                    $stmt->bindValue($key, $value);
                }
        
                // Execute the statement
                $stmt->execute();
        
                // Fetch and return the result
                return $stmt->fetch(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                echo "Query failed: " . $e->getMessage();
                return false;
            }
        }
        
        

        function insert($sql, $param){
            $this->query($sql, $param);
            return $this->conn->lastInsertId();
            }
        function delete($sql, $param){
            $this->query($sql, $param);
            }
        function update($sql, $param){
            $this->query($sql, $param);
            }
        public function lastInsertId() {
            return $this->conn->lastInsertId();
            }
        public function getAllInfoOrder($sql, $params = []){
            try {
                $stmt = $this->conn->prepare($sql);
                $stmt->execute($params);
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                echo "Query failed: " . $e->getMessage();
                return false;
            }
            }
    }
    ?>
