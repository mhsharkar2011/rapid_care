<?php 
    Class Database
    {
        private $conn;

        public function __construct()
        {
            $dbserver = 'localhost';
            $dbuser = 'root';
            $dbpass = "";
            $dbname = 'db_rapid';

            $this->conn = mysqli_connect ($dbserver,$dbuser,$dbpass,$dbname);
            
            if(!$this->conn){
                die("Error");
            }
        }

    }
    ?>

    