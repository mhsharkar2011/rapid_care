<?php include_once "database/connection.php"; ?>
<?php 

extract($_POST);

if(
    isset($_POST['emp_name']) && 
    isset($_POST['emp_position']) && 
    isset($_POST['emp_email']) && 
    isset($_POST['male']) && 
    isset($_POST['female']) && 
    isset($_POST['emp_age']) && 
    isset($_POST['doj']) && 
    isset($_POST['emp_salary']) && 
    isset($_POST['emp_position']) &&
    isset($_POST['emp_phone'])
    ){
        $insert_query = "INSERT INTO tbl_employee
                                                (
                                                emp_name,
                                                emp_position,
                                                emp_email,
                                                male,
                                                female,
                                                emp_age,
                                                doj,
                                                emp_salary,
                                                emp_position,
                                                emp_phone
                                                )VALUE(
                                                '$emp_name',
                                                '$emp_position',
                                                '$emp_email',
                                                '$male',
                                                '$female',
                                                '$emp_age',
                                                '$doj',
                                                '$emp_salary',
                                                '$emp_position',
                                                '$emp_phone'
                                                
                                                )";
        mysqli_query($conn,$insert_query);

}
?>
