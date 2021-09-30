<?php
// include("class/function.php");


//$obj = new AdminBoard();

// if (isset($_POST['admin_login'])) {
//     $obj->admin_login($_POST);
// }
// //session_start();
// //$id = $_POST['adminID'];
// if (!$id) {
//     header("location:dashboard.php");
// }
?>

<?php include_once "includes/head.php" ?>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Rapid Care Login</h3>
                                </div>
                                <div class="card-body">
                                    <form action="dashboard.php" method="post">
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputEmailAddress">Email</label>
                                            <input name="admin_email" class="form-control py-4" id="inputEmailAddress" type="email" placeholder="Enter email address" />
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputPassword">Password</label>
                                            <input name="admin_pass" class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" />
                                        </div>
                                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="small" href="password.php">Forgot Password?</a>
                                            <input type="submit" value="Login" name="admin_login" class="btn btn-primary">
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