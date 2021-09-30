<?php include_once "includes/head.php" ?>
<?php 
    include_once"class/function.php";

    $objUserReg = new AdminBoard();

    if(isset($_POST["btn_reg"])){
        $success = $objUserReg->userInsert($_POST);
    }
?>
<?php if(isset($success)) {echo"<script>alert('$success')</script>";} ?>
<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                        <a style="color: #fff; text-decoration:none;font-size:30px;background:red;padding:10px; border-radius:8px;" href="index.php">Home
                        
                        </a>
                        </li> 
                    </ul>
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">New User</h3>
                                </div>
                                <div class="card-body">
                                    <form action="" method="post" enctype="multipart/form-data">
                                    <?php if(isset($return_msg)){ echo $return_msg;} ?>
                                        <div class="form-group">
                                            <label class="small mb-1" for="username">Full Name</label>
                                            <input name="user_name" class="form-control py-4" id="user_name" type="text" placeholder="Enter Full Name" />
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="useremail">Email</label>
                                            <input name="user_email" class="form-control py-4" id="useremail" type="email" placeholder="Enter email address" />
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="userpass">Password</label>
                                            <input name="user_pass" class="form-control py-4" id="userpass" type="password" placeholder="Enter password" />
                                        </div>
                                        <div>
                                            <input name="user_img"  id="user_file" type="file"/>
                                        </div>
                                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <input type="submit" value="Submit" name="btn_reg" class="btn btn-primary">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <?php include_once "includes/footer.php" ?>
    </div>
    <?php include_once "includes/scripts.php" ?>
</body>

</html>