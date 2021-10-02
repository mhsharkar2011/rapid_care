<?php  
//include_once "database/connection.php";
//include_once "class/upload.php";

 class adminBoard
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
     public function addData($data)
     {
        //  if(!empty($data)){
        //      $fields = $placeholders = [];
        //      foreach ($data as $field => $value) {
        //          $fields[] = $field;
        //          $placeholders[] = ":{$field}";
        //      }
         $emp_name = $data['emp_name'];
         $emp_position = $data['emp_position'];
         $emp_email = $data['emp_email'];
        //  $gender = $data['gender'];
         $emp_phone = $data['emp_phone'];
         $emp_age = $data['emp_age'];
         $doj = $data['doj'];
         $emp_salary = $data['emp_salary'];
         //$emp_img = $_FILES['emp_img']['name'];
         //$emp_tmp_img = $_FILES['emp_img']['tmp_name'];
         
        // $sql = "INSERT INTO {$this->tablename}(". implode(',',$fields).") VALUES(". implode(',',$placeholders).")";
        $sql = "INSERT INTO tbl_employee('emp_name','emp_position','emp_email','emp_phone','emp_age','doj','emp_salary') VALUES($emp_name,$emp_position,$emp_email,$emp_phone,$emp_age,$doj,$emp_salary)";
        
            if(mysqli_query($this->conn,$sql)){
                return "Information";
            }
     }
/**
 * function is used to get records
 * @param int $stmt
 * @param int $limit
 * @return array $results
 */
    //  public function getRows($start = 0, $limit=4)
    //  {
    //     $sql = "SELECT * FROM {$this->tablename} ORDER BY id DESC LIMIT {$start},{$limit}";
    //     $stmt = $this->conn->prepare($sql);
    //     $stmt -> execute();
    //     if($stmt->rowCount() > 0){
    //         $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //     }else{
    //         $results = [];
    //     }
    //     return $results;
    //  }
/**
 * function is used to get single record based on the column value
 * @param string $filed
 * @param any $value
 * @param array $results
 */
    //  public function getRow($field,$value)
    //  {
    //      $sql = "SELECT * FROM {$this->tablename} WHERE {$field}=:{$field}";
    //      $stmt = $this->conn->prepare($sql);
    //      $stmt->execute(["{:$field}"=> $value]); //$fields may be use here
    //      if($stmt->rowCount() > 0){
    //          $result = $stmt->fetch(PDO::FETCH_ASSOC);
    //      }else{
    //          $result = [];
    //      }
    //      return $result;
    //  }
/**
 * function is used to upload file
 * @param array $file
 * @return string $newFileName
 */
     public function uploadPhoto($file)
     {
        if(!empty($file)){
            $fileTempPath = $file['tmp_name'];
            $fileName = $file['name'];
            $fileSize = $file['size'];
            $fileType = $file['type'];
            $fileNameCmps = explode('.', $fileName);
            $fileExtension = strtolower(end($fileNameCmps));
            $newFileName = md5(time().$fileName).'.'. $fileExtension;
            $allowedExtn = ["jpg","png","gif","jpeg"];
            if(in_array($fileExtension,$allowedExtn)){
                $uploadFileDir = getcwd() . 'uploads/employee/';
                $destFilePath = $uploadFileDir . $newFileName;
                if(move_uploaded_file($fileTempPath, $destFilePath)){
                    return $newFileName;
                }
            }
        }
     }

 }
