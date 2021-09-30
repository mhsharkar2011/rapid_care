<?php  
include_once "database/connection.php";

 class AdminBoard extends Database
 {
     protected $tablename = 'tbl_employee';
/**
 * function is used to add record
 * @param array $data
 * @return int $lastInsertedId
 */
     public function addData($data)
     {
         if(!empty($data)){
             $fields = $placeholders = [];
             foreach ($data as $field => $value) {
                 $fields[] = $field;
                 $placeholders[] = ":{$field}";
             }
         }
        $sql = "INSERT INTO {$this->tablename}(". implode(',',$fields).") VALUES(". implode(',',$placeholders).")";
        $stmt = $this->conn->prepare($sql);
        try {
            $this->conn->beginTransaction();
            $stmt->execute($data);
            $lastInsertedId = $this->conn->lastInsertId();
            $this->conn->commit();
            return $lastInsertedId;
        } catch (PDOException $e) {
            echo "Error:" . $e->getMessage();
            $this->conn->rollback();
        }
     }
/**
 * function is used to get records
 * @param int $stmt
 * @param int $limit
 * @return array $results
 */
     public function getRows($start = 0, $limit=4)
     {
        $sql = "SELECT * FROM {$this->tablename} ORDER BY id DESC LIMIT {$start},{$limit}";
        $stmt = $this->conn->prepare($sql);
        $stmt -> execute();
        if($stmt->rowCount() > 0){
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }else{
            $results = [];
        }
        return $results;
     }
/**
 * function is used to get single record based on the column value
 * @param string $filed
 * @param any $value
 * @param array $results
 */
     public function getRow($field,$value)
     {
         $sql = "SELECT * FROM {$this->tablename} WHERE {$field}=:{$field}";
         $stmt = $this->conn->prepare($sql);
         $stmt->execute(["{:$field}"=> $value]); //$fields may be use here
         if($stmt->rowCount() > 0){
             $result = $stmt->fetch(PDO::FETCH_ASSOC);
         }else{
             $result = [];
         }
         return $result;
     }
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
