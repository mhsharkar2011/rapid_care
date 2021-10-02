<?php include_once "database/db_conn.php";    ?>

<?php 
    if(isset($_GET['status'])){
        if($_GET['status']='edit'){
            $id=$_GET['id'];
        }
    }
    $stmt = $conn->prepare("SELECT * FROM tbl_employee WHERE id=$id");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

?>


<?php include_once "includes/head.php"; ?>

<!------------------------ Employee Edit Form Modal ----------------------->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="text-align: center;">Update Employee Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                <?php foreach ($stmt->fetchAll() as $k => $v) { ?>
                    <form id="editform" action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" name="emp_name" id="emp_name" class="form-control" value="<?php echo $v['emp_name']; ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" name="emp_position" id="emp_position" class="form-control" placeholder="Enter Position" value="<?php if(isset($emp_position)){ echo  $emp_position;} ?>">
                        </div>
                        <div class="form-group">
                            <input type="email" name="emp_email" id="emp_email" class="form-control" placeholder="Enter email address" value="<?php if(isset($emp_email)){ echo  $emp_email;} ?>" />
                        </div>
                        <div class="form-group">
                            <span class="" style="margin-right: 40px;">Gender</span>
                            <input type="radio" name="gender" value="Male" id="male" class="form-check-input"   >
                            <label class="form-check-label" style="margin-right: 30px;" for="male">
                                Male
                            </label>
                            <input type="radio" name="gender" value="Female" id="female" class="form-check-input" >
                            <label class="form-check-label" for="female">
                                Female
                            </label>
                        </div>
                        <div class="form-group">
                            <input type="text" name="emp_age" id="emp_age" class="form-control"  placeholder="Enter Age" value="<?php if(isset($emp_age)){ echo  $emp_age;} ?>" />
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="doj">Date of Join</label>
                            <input type="date" name="doj" id="doj" class="form-control" value="<?php if(isset($doj)){ echo  $doj;} ?>" />
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="emp_salary">Salary</label>
                            <input type="number" name="emp_salary" id="emp_salary" class="form-control" value="<?php if(isset($emp_salary)){ echo  $emp_salary;} ?>"/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="emp_phone" id="empphone" class="form-control" placeholder="Enter Phone" value="<?php if(isset($emp_phone)){ echo  $emp_phone;} ?>" />
                        </div>
                        <div>
                            <input type="file" name="emp_img" id="user_file"/>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <!-- <button type="button" class="btn btn-success" id="addButton" data-bs-dismiss="modal">Submit</button> -->
                            <!-- <input type="hidden" name="userid" value="adduser"> -->
                            <input type="submit" class="btn btn-primary" name="userid"  value="Save">
                        </div>
                    </form>
                    <?php }?>
                </div> 
            </div>
        </div>
    </div>
</div>
<?php include_once "includes/scripts.php" ?>