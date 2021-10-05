
<!------------------------ Add Empolyee Button End ------------------->
<div class="col-lg-6">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#insertModal">Add New <i class="fas fa-user-circle"></i>
    </button>
</div>
<!-- ############################################################## -->
<!------------------------ Insert Employee Form Modal ----------------------->
<div class="modal fade" id="insertModal" tabindex="-1" aria-labelledby="insertModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background: #007bff;">
                <h5 class="modal-title" id="insertModal">New Employee</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <!-- <form id="" action="" method="POST" enctype="multipart/form-data"> -->
                        <div class="form-group">
                            <input type="text" name="" id="emp_name" class="form-control" placeholder="Enter Full Name" 
                            value="" />
                            </div>
                        <div class="form-group">
                            <input type="text" name="" id="emp_position" class="form-control" placeholder="Enter Position" 
                            value="" />
                        </div>
                        <div class="form-group">
                            <input type="email" name="" id="emp_email" class="form-control" placeholder="Enter email address" 
                            value="" />
                        </div>
                        <div class="form-group">
                            <span class="" style="margin-right: 40px;">Gender</span>
                            <input type="radio" name="" value="Male" id="male" class="form-check-input">
                            <label class="form-check-label" style="margin-right: 30px;" for="male">Male</label>
                            <input type="radio" name="" value="Female" id="female" class="form-check-input">
                            <label class="form-check-label" for="female">Female</label>
                        </div>
                        <div class="form-group">
                            <input type="text" name="" id="emp_age" class="form-control" placeholder="Enter Age" 
                            value="" />
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="doj">Date of Join</label>
                            <input type="date" name="" id="doj" class="form-control" 
                            value="" />
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="emp_salary">Salary</label>
                            <input type="number" name="" id="emp_salary" class="form-control" 
                            value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="" id="emp_phone" class="form-control" placeholder="Enter Phone" 
                            value="" />
                        </div>
                        <!-- <div>
                            <input type="file" name="" id="emp_img">
                        </div> -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="addRecord()">Save</button>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>


