<?php 
    echo sm("Welcome!");
    function sm($str){return $str?sm(substr($str,1)).$str[0]:'';}

?>

<?
    #databse host, database user, database pass, database name
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = "";
    $dbname = 'db_rapid';

    $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    if(!$this->conn){
        die("Database Connection Error!!");
    }

    $sql = mysqli_query($conn,"SELECT * FROM tbl_user_reg");
    echo $sql;
?>