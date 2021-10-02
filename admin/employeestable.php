<?php include_once "includes/head.php"; ?>

<table class="table align-middle table-striped table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Designation</th>
            <!-- <th>Email</th> -->
            <th>Joining Date</th>
            <th>Phone</th>
            <!-- <th>Salary</th> -->
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($stmt->fetchAll() as $k => $v) { ?>
            <tr style="text-align:center; font-size: 20px;color:#007bff;background:palegreen ">
                <td><?php echo $v['id']; ?></td>
                <td style="text-align: left;"><img height="80" width="80" style="border-radius: 50%; border:none" src="upload/employee/<?php echo $v['img']; ?>" alt="Photo"></td>
                <td><?php echo $v['emp_name']; ?></td>
                <td><?php echo $v['emp_position']; ?></td>
                <!-- <td><?php echo $v['emp_email']; ?></td> -->
                <td><?php echo $v['doj']; ?></td>
                <td><?php echo $v['emp_phone']; ?></td>
                <!-- <td><?php echo $v['emp_salary']; ?></td> -->
                <td style="text-align: right;padding-right:30px;">
                    <!-- For Profile -->
                    <a href="#">
                        <i data-bs-toggle="modal" data-bs-target="#exampleModal" class="fas fa-users" style="font-size: 25px;color:orange">
                        </i>
                    </a>
                    <!-- For Edit -->
                    <button onclick="GetUserDetails('.<?php $v['id'];?>.')" class="btn btn-warning">Edit</button>
                    <!-- <input type="hidden" name="userid" value="adduser" data-bs-toggle="modal" data-bs-target="#exampleModal"><a href="edit.php?status=edit&&id=<?php echo $v['id']; ?>">Edit</a> -->
                    <!-- For Delete -->
                    <a href="?status=delete&&id=<?php echo $v['id']; ?>"><i class="fas fa-trash-alt" style="font-size: 25px; color:red">
                        </i>
                    </a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php include_once "includes/scripts.php"; ?>