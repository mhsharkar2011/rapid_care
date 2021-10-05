<?php include_once "database/connection.php"; ?>
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModal">Delete Employee</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="<?php echo $v['id'];?>" id="delete_id" >
                    <h4>Do you want to realy delete data??</h4>   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-bs-dismiss="modal">No</button>
                    <button type="button" name="deletedata" id="deletedata" class="btn btn-danger" data-bs-dismiss="modal"><a href="?deleteid=$id">Yes!!</a></button>
                </div>
            </form>
        </div>
    </div>
</div>