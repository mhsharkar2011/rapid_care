<?php 
            $dbserver = 'localhost';
            $dbuser = 'root';
            $dbpass = "";
            $dbname = 'db_rapid';

            $conn = new mysqli($dbserver,$dbuser,$dbpass,$dbname);
            if(!$conn){
                die(mysqli_error($conn));
            }
    ?>

    