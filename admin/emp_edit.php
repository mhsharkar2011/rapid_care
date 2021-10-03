<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModal">Employee Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST">
                <div class="modal-body">
                    <?php echo $v['emp_name']; ?>
                </div>
                <div class="modal-footer">
                    <button type="button" name="editdata" id="editdata" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" name="editdata" id="editdata" class="btn btn-info" data-bs-dismiss="modal">Update</button>
                </div>
            </form>

        </div>
    </div>
</div>