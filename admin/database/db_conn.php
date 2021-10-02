<?php 
    $dbhost = "localhost";
    $dbuser="root";
    $dbpass = "";
    $dbname = "db_rapid";
       try {
        $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if(!$conn){
            die("Database not connected");
        }
        
    } catch (PDOException $e) {
        echo $insert_query. "Database Connection faild: ". $e->getMessage();
    }

?>

