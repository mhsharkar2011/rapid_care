<?php 
    Class Database
    {
        private $dbserver = 'localhost';
        private $dbuser = 'root';
        private $dbpass = '';
        private $dbname = 'db_rapid';
        protected $conn;

        public function __construct(){
            try {
                $dsn = "mysql:host={$this->dbserver}; dbname={$this->dbname}; charset=utf8";
                $options = array(PDO::ATTR_PERSISTENT);
                $this->conn = new PDO($dsn, $this->dbuser, $this->dbpass, $options);
            
            } catch (PDOException $e) {
                echo "Connection Error:". $e->getMessage();
            }
        }

    }
    ?>
    