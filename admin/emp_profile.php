<?php 
include_once "database/connection.php";



?>

<div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="profileModalLabel">Employee Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <form id="profileinfo" action="emp_profile.php" method="POST">
                <div class="modal-body">
                    <div class="card-body">
                    <div class="row">
                    <div class="item-img col">
                    <img height="100" src="upload/employee/<?php echo $v['img']?>" alt="">
                    </div>
                    <div class="item-details col">
                    <?php echo $v['emp_name']; ?>
                    </div>
                    <div class="item-details col">
                    <?php echo $v['emp_email']; ?>
                    </div>
                    <div class="item-details col">
                    <?php echo $v['emp_phone']; ?>
                    </div>
                    </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" name="deletedata" id="deletedata" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </form>

        </div>
    </div>
</div>
