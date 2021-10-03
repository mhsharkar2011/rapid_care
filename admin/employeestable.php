<!------------------ PHP Code here ------------------------->
<?php 
include_once "database/db_conn.php";
include_once "includes/head.php";
//================== View Results ======================
$stmt = $conn->prepare("SELECT * FROM tbl_employee");
$stmt->execute();
//$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

?>
<!--##################################################### -->
<table class="table align-middle table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Designation</th>
            <th>Joining Date</th>
            <th>Phone</th>
            <th>Profile</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
<?php foreach ($stmt->fetchAll() as $k => $v) { ?>
        <tr style="line-height:80px;">
            <td><?php echo $v['id']; ?></td>
            <td><img height="80" width="80" style="border-radius: 5%; border:none" src="upload/employee/<?php echo $v['img']; ?>" alt="Photo"></td>
            <td><?php echo $v['emp_name']; ?></td>
            <td><?php echo $v['emp_position']; ?></td>
            <!-- <td><?php echo $v['emp_email']; ?></td> -->
            <td><?php echo $v['doj']; ?></td>
            <td><?php echo $v['emp_phone']; ?></td>
            <!-- <td><?php echo $v['emp_salary']; ?></td> -->
            <td>
                <!------------------------- For Profile ---------------------->
                <?php include_once "emp_profile.php"; ?>
                <button data-bs-toggle="modal" data-bs-target="#profileModal" class="fas fa-user btn btn-success"></button>
                <!-- ###################################################### -->
            </td>
            <td>
                <!--------------------------- For Edit ----------------------->
                <?php include_once "emp_edit.php"; ?>
                <button data-bs-toggle="modal" data-bs-target="#editModal" class="fas fa-edit btn btn-info"></button>
                <!-- ###################################################### -->
            </td>
            <td>
                <!--------------------------- For Delete ----------------------->
                <?php include_once "emp_delete.php"; ?>
                <button data-bs-toggle="modal" data-bs-target="#deleteModal" class="fas fa-trash-alt btn btn-danger"></button>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>

<?php include_once "includes/scripts.php"; ?>