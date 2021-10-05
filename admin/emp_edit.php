<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Employee Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                        <form id="editform" action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="text" name="emp_name" id="emp_name" class="form-control"  
                                value="<?php echo $v['emp_name']; ?>" />
                                </div>
                            <div class="form-group">
                                <input type="text" name="emp_position" id="emp_position" class="form-control" 
                                value="<?php echo $v['emp_position']; ?>" />
                            </div>
                            <div class="form-group">
                                <input type="email" name="emp_email" id="emp_email" class="form-control"
                                value=<?php echo $v['emp_email']; ?>" />
                            </div>
                            <div class="form-group">
                                <span class="" style="margin-right: 40px;">Gender</span>
                                <input type="radio" name="gender" value="Male" id="male" class="form-check-input">
                                <label class="form-check-label" style="margin-right: 30px;" for="male">Male</label>
                                <input type="radio" name="gender" value="Female" id="female" class="form-check-input">
                                <label class="form-check-label" for="female">Female</label>
                            </div>
                            <div class="form-group">
                                <input type="text" name="emp_age" id="emp_age" class="form-control"  
                                value="<?php echo $v['emp_age']; ?>" />
                            </div>
                            <div class="form-group">
                                <label class="small mb-1" for="doj">Date of Join</label>
                                <input type="date" name="doj" id="doj" class="form-control" 
                                value="<?php echo $v['doj']; ?>" />
                            </div>
                            <div class="form-group">
                                <label class="small mb-1" for="emp_salary">Salary</label>
                                <input type="number" name="emp_salary" id="emp_salary" class="form-control" 
                                value="<?php echo $v['emp_salary']; ?>" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="emp_phone" id="empphone" class="form-control" 
                                value="<?php echo $v['emp_phone']; ?>" />
                            </div>
                            <div>
                                <input type="file" name="emp_img" id="user_file">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                <input type="submit" class="btn btn-primary" name="update_btn" value="Update">
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>