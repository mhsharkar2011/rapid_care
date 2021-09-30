<?php 
    Class AdminBoead
    {

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

        public function userSearch(){
            $q = $_REQUEST["q"];
            if ($q !== ""){
            $q = intval($q);
            $querySearch = "SELECT * FROM tbl_user_reg WHERE id = '".$q."'";
            }
            if(mysqli_query($this->conn,$querySearch)){
                $userDataSearch = mysqli_query($this->conn,$querySearch);
                return $userDataSearch;
            }
            
        }

// ------------------ Employee Data Insert ----------------------
public function empInsert($data){
    $img_name = $_FILES['user_img']['name'];
    $tmp_name= $_FILES['user_img']['tmp_name'];
    move_uploaded_file($tmp_name,"upload/".$img_name);
    $empName = $data['emp_name'];
    $empPosition = $data['emp_dsgn'];
    $empEmail = $data['emp_email'];
    $empPhone = $data['emp_phone'];
    $empAge = $data['emp_age'];
    $empDoj = $data['doj'];
    $empSalary = $data['emp_salary'];
    $insert_query = "INSERT INTO tbl_employee(userName,userEmail,userPass,userImg) VALUES('$empName','$empPosition','$empEmail','$empPhone','$empAge','$empDoj','$empSalary','$img_name')";
    
    // if(mysqli_query($this->conn,$insert_query)){
    //     return "Data Addred succesfully";
    // }
    if ($this->conn->query($insert_query) === TRUE) {
        return "New record created successfully";
        } else {
                echo "Error: " . $insert_query . "<br>" . $this->conn->error;
            }
}
// ------------------ Employee Data Delete ---------------------

    }

?>