<?php include_once "includes/head.php"; ?>

<body class="sb-nav-fixed">
    <?php include_once "includes/header.php"; ?>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <?php include_once "includes/sidebar.php" ?>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Rapid Care Homeopathic</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Branches</li>
                    </ol>
                    <?php include_once "includes/branches.php" ?>
                    <?php include_once "includes/chart.php" ?>
                    <?php include_once "includes/usertable.php"?>
                </div>
            </main>
            <?php  ?>
        </div>
    </div>
    <?php include_once "includes/footer.php" ?>
    <?php include_once "includes/scripts.php" ?>
</body>
</html>