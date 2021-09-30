<div class="col-lg-6">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add New <i class="fas fa-user-circle"></i>
    </button>
</div>
<!--------------------------Add Empolyee Button End------------------------>
<!------------------------ Employee Form Modal ----------------------->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="text-align: center;">New Employee</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" name="emp_name" id="emp_name" class="form-control" placeholder="Enter Full Name">
                        </div>
                        <div class="form-group">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Select Designation</option>
                                <option value="1">One</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="email" name="emp_email" id="emp_email" class="form-control" placeholder="Enter email address" />
                        </div>
                        <div class="form-group">
                            <span class="" style="margin-right: 40px;">Gender</span>
                            <input type="radio" name="flexRadioDefault" id="flexRadioDefault1" class="form-check-input"   >
                            <label class="form-check-label" style="margin-right: 30px;" for="flexRadioDefault1">
                                Male
                            </label>
                            <input type="radio" name="flexRadioDefault" id="flexRadioDefault1" class="form-check-input" >
                            <label class="form-check-label" for="flexRadioDefault1">
                                Female
                            </label>
                        </div>
                        <div class="form-group">
                            <input type="text" name="emp_age" id="emp_age" class="form-control"  placeholder="Enter Age" />
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="doj">Date of Join</label>
                            <input type="date" name="doj" id="doj" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="emp_salary">Salary</label>
                            <input type="number" name="emp_salary" id="emp_salary" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="emp_phone" id="empphone" class="form-control" placeholder="Enter Phone" />
                        </div>
                        <div>
                            <input type="file" name="user_img" id="user_file"/>
                        </div>
                        <div class="modal-footer">
                            <input type="button" value="Close" class="btn btn-danger" data-bs-dismiss="modal">
                            <input type="submit" value="ADD" name="submit" class="btn btn-primary" data-bs-dismiss="modal">
                        </div>
                    </form>
                </div> 
            </div>
        </div>
    </div>
</div>
