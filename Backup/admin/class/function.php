<?php 
    Class AdminBoard{

        private $conn;

        public function __construct()
        {
            #databse host, database user, database pass, database name
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = "";
            $dbname = 'db_rapid';

            $this->conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
            if(!$this->conn){
                die("Database Connection Error!!");
            }
        }
        // --------------Admin Login--------------
        public function admin_login($data){
            $admin_email = $data['admin_email'];
            $admin_pass = md5($data['admin_pass']);

            $query ="SELECT * FROM admin_info WHERE admin_email='$admin_email' && admin_pass='$admin_pass'";

            //if(mysqli_query($this->conn, $query)){
               // $admin_info = mysqli_query($this->conn, $query);

                //if($admin_info){
                   // header("location:index.php");
                    //$admin_data = mysqli_fetch_assoc($admin_info);
                    //session_start();
                    //$_SESSION ['adminID'] = $admin_data ['id'];
                    //$_SESSION ['admin_name'] = $admin_data ['admin_name'];
                }
           // }
        //}
        // ------------------Admin Login End ----------------------

        // ------------------User Data Insert----------------------
        public function userInsert($data){
            $img_name = $_FILES['user_img']['name'];
            $tmp_name= $_FILES['user_img']['tmp_name'];
            move_uploaded_file($tmp_name,"upload/".$img_name);

            $userName = $data['user_name'];
            $userEmail = $data['user_email'];
            $userPass = md5($data['user_pass']);

            $insert_query = "INSERT INTO tbl_user_reg(userName,userEmail,userPass,userImg) VALUES('$userName','$userEmail','$userPass','$img_name')";
            
            // if(mysqli_query($this->conn,$insert_query)){
            //     return "Data Addred succesfully";
            // }
            if ($this->conn->query($insert_query) === TRUE) {
                return "New record created successfully";
                } else {
                        echo "Error: " . $insert_query . "<br>" . $this->conn->error;
                    }
        }
        public function userDataView(){
            $query = "SELECT * FROM tbl_user_reg";
            if(mysqli_query($this->conn,$query)){
                $userData = mysqli_query($this->conn,$query);
                return $userData;
            }
            
        }
    }

?>