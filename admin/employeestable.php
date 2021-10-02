<?php include_once "database/db_conn.php";?>

<table class="table align-middle table-striped table-hover">
    <thead>
        <tr>  
            <th>ID</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Designation</th>
            <th>Email</th>
            <th>Joining Date</th>
            <th>Phone</th>
            <th>Salary</th>
            <th >Action</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($stmt->fetchAll() as $k => $v){ ?>
        <tr style="text-align:center; font-size: 20px;color:#007bff;background:palegreen ">
            <td><?php echo $v['id']; ?></td>
            <td style="text-align: left;"><img height="45px" src="#" alt=""><?php echo $v['img']; ?></td>
            <td><?php echo $v['emp_name']; ?></td>
            <td><?php echo $v['emp_position']; ?></td>
            <td><?php echo $v['emp_email']; ?></td>
            <td><?php echo $v['doj']; ?></td>
            <td><?php echo $v['emp_phone']; ?></td>
            <td><?php echo $v['emp_salary']; ?></td>
            <td style="text-align: right;padding-right:30px;">
                <!-- For Profile -->
                <a href="#">
                    <i data-bs-toggle="modal" data-bs-target="#exampleModal" class="fas fa-users" style="font-size: 25px;color:orange">
                    </i>
                </a>
                <!-- For Edit -->
                <a href="Template/Model.php">
                    <i data-bs-toggle="modal" data-bs-target="#exampleModal" class="fas fa-user-edit" style="font-size: 25px;color:orange"></i>
                </a>
                <!-- For Delete -->
                <a href="#">
                    <i class="fas fa-trash-alt" style="font-size: 25px; color:red">
                    </i>
                </a>
            </td>
        </tr>
        <?php }?>
            </tbody>
        </table>