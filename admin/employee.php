<!-- // if(isset($success)) {echo"<script>alert('$success')</script>";} -->
<?php include_once "database/db_conn.php";    ?>

<?php 

if(isset($_POST['userid']))
{
    $emp_name = $_POST['emp_name'];
    $emp_position = $_POST['emp_position'];
    $emp_email = $_POST['emp_email'];
    $emp_age = $_POST['emp_age'];
    $doj = $_POST['doj'];
    $emp_salary = $_POST['emp_salary'];
    $emp_phone = $_POST['emp_phone'];

    $conn->beginTransaction();
    $insert_query ="INSERT INTO tbl_employee(emp_name,emp_position,emp_email,emp_age,doj,emp_salary,emp_phone)VALUE('$emp_name','$emp_position','$emp_email','$emp_age','$doj','$emp_salary','$emp_phone')";
    // use exec() because no results are returned
    $conn->prepare($insert_query);
    $conn->exec($insert_query);
    $conn->commit();
    echo "New record created successfully";
}

    $stmt = $conn->prepare("SELECT * FROM tbl_employee");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
?>
<?php include_once 'includes/head.php'; ?>
<body>
    <div class="container my-4 p-4 shadow table-responsive">
        <div class="title row mb-4" style="text-align: center;color:cornflowerblue"><h1>Rapid Employee</h1></div>
<!--------------------------Add Empolyee Button Start------------------------>
        <div class="row mb-3">
                <?php require_once 'form.php'; ?>
                <?php if(isset($return_msg)){echo $return_msg;}?>
<!--------------------------Search Button Start------------------------>
                    <div class="col-lg-6">
                        <div class="input-group rounded">
                            <input type="search" class="form-control rounded fa-fa-search" placeholder="Search" />
                            <span class="input-group-text" id="basic-addon2"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
<!--------------------------Search Button End------------------------>

        <?php include_once 'employeestable.php';?>
<!---------------------- Pagination Start ----------------------->
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled"><a class="page-link">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
        <!---------------------- Pagination End ----------------------->
    </div>

<?php include_once "includes/scripts.php" ?>
</body>


