<?php include_once "includes/head.php" ?>
<?php
include_once "class/function.php";

$objAdminBoard = new AdminBoard();

$users = $objAdminBoard->userDataView();

?>

<body>

    <div class="container my-4 p-4 shadow table-responsive">
        <table class="table align-middle table-striped">
            <thead style="text-align: center;">
                <h1 style="text-align: center;">USER LIST</h1>
                <tr >
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Photo</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody style="text-align: center;">

                <tr>
                    <?php while ($user = mysqli_fetch_assoc($users)) { ?>
                        <td><?php echo $user['id']; ?></td>
                        <td><?php echo $user['userName']; ?></td>
                        <td><?php echo $user['userEmail']; ?></td>
                        <td><img height="30px" src="upload/<?php echo $user['userImg']; ?>" alt=""></td>
                        <td><a href="edit.php"><i class="fas fa-user-edit"></i></a></td>
                        <td>Delete</td>
                </tr>
            <?php } ?>

            </tbody>
        </table>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">View</button>
      </div>
    </div>
  </div>
</div>

<!-- -------------------------- -->

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#userModal">
  Launch
</button>

<!-- Modal -->
<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Edit</button>
      </div>
    </div>
  </div>
</div>










<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>
    <?php include_once "includes/scripts.php" ?>
</body>
