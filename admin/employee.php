<!-- // if(isset($success)) {echo"<script>alert('$success')</script>";} -->

<?php include_once "class/function.php" ?> 

<?php include_once 'includes/head.php'; ?>
<body>
    <div class="container my-4 p-4 shadow table-responsive">
        <div class="title row mb-4" style="text-align: center;color:cornflowerblue"><h1>Rapid Employee</h1></div>
<!--------------------------Add Empolyee Button Start------------------------>
        <div class="row mb-3">
                <?php require_once 'form.php'; ?>
<!--------------------------Search Button Start------------------------>
                    <div class="col-lg-6">
                        <div class="input-group rounded">
                            <input type="search" class="form-control rounded fa-fa-search" placeholder="Search" />
                            <span class="input-group-text" id="basic-addon2"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
<!--------------------------Search Button End------------------------>

        <?php include_once 'employeestable.php';?>
<!---------------------- Pagination Start ----------------------->
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled"><a class="page-link">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
        <!---------------------- Pagination End ----------------------->
    </div>

<?php include_once "includes/scripts.php" ?>
</body>


