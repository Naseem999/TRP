<?php
session_start();
if (!isset($_SESSION['admin_email'])) {
    echo "<script>
    window.location.assign('login.php');
    </script>";
} else {
    $admin_id = $_SESSION['admin_id'];
    $admin_email = $_SESSION['admin_email'];
    $admin_name = $_SESSION['admin_name'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include_once 'partial/head.php';
    ?>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
        include_once 'partial/nav.php';
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php
                include_once 'partial/topbar.php';
                ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <?php
                        $doc = 0;
                        $sql = "SELECT * FROM login_details WHERE role='doctor'";
                        $result = mysqli_query($con, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $doc++;
                            }
                        }

                        $users = 0;
                        $sql = "SELECT * FROM login_details WHERE role='admin'";
                        $result = mysqli_query($con, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $users++;
                            }
                        }

                        $staff = 0;
                        $sql = "SELECT * FROM login_details WHERE role='staff'";
                        $result = mysqli_query($con, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $staff++;
                            }
                        }
                        ?>
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-400 py-3">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-l font-weight-bold text-primary text-uppercase mb-1">
                                                Doctors</div>
                                            <div class="h4 mb-0 font-weight-bold text-gray-800"><?php echo $doc; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <!-- <i class="fas fa-calendar fa-3x text-gray-300"></i> -->
                                            <i class="fas fa-briefcase-medical fa-3x text-gray-300"></i>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-400 py-3">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-l font-weight-bold text-success text-uppercase mb-1">
                                                Admins</div>
                                            <div class="h4 mb-0 font-weight-bold text-gray-800"><?php echo $users; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user-cog fa-3x text-gray-300"></i>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->


                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-400 py-3">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-l font-weight-bold text-warning text-uppercase mb-1">
                                                Staff</div>
                                            <div class="h4 mb-0 font-weight-bold text-gray-800"><?php echo $staff ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user-friends fa-3x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->



        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->





    <?php
    include_once 'partial/scripts.php';
    ?>

</body>

</html>