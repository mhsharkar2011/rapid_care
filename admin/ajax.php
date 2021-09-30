<?php 
$action = $_REQUEST['action'];
if(!empty($action)){
    require_once 'class/connection.php';
    $obj = new AdminBoard();
}
if($action == 'adduser' && !empty($_POST)){
    $empName = $_POST['emp_name'];
    $empPosition = $_POST['emp_dsgn'];
    $empEmail = $_POST['emp_email'];
    $empPhone = $_POST['emp_phone'];
    $empAge = $_POST['emp_age'];
    $empDoj = $_POST['doj'];
    $empSalary = $_POST['emp_salary'];
    $photo = $_FILES['emp_img'];
    $empId = (!empty($_POST['userid'])) ? $_POST['userid'] : '';
    
    //Validation
    //file (photo) upload
    $imagename = '';
    if(!empty($photo['name'])){
        $imagename = $obj->uploadPhoto($photo);
        $empData = [
            'emp_name'=>$empName,
            'emp_dsgn'=>$empPosition,
            'emp_email'=>$empEmail,
            'emp_phone'=>$empPhone,
            'emp_age'=>$empAge,
            'doj'=>$empName,
            'emp_salary'=>$empSalary,
            'emp_img'=>$photo,
        ];
    }else{
        $empData = [
            'emp_name'=>$empName,
            'emp_dsgn'=>$empPosition,
            'emp_email'=>$empEmail,
            'emp_phone'=>$empPhone,
            'emp_age'=>$empAge,
            'doj'=>$empName,
            'emp_salary'=>$empSalary,
        ];
    }
    $employeeId = $obj ->addData($empData);
    if(!empty($employeeId)){
        $employee = $obj->getRow('id',$employeeId);
        echo json_encode($employee);
    }
}

?>