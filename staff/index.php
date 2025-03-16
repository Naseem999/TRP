<?php
session_start();
if (!isset($_SESSION['staff_email'])) {
    echo "<script>
    alert('login as Doctor');
    window.location.assign('../login.php');
    </script>";
} else {
    $staff_id = $_SESSION['staff_id'];
    $staff_email = $_SESSION['staff_email'];
    $staff_name = $_SESSION['staff_name'];
}
date_default_timezone_set('Asia/Kolkata');
$currentdate = date('Y-m-d');
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
                        $patient_today = 0;
                        $sql = "SELECT * FROM patient WHERE date_reg='$currentdate'";
                        $result = mysqli_query($con, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $patient_today++;
                            }
                        }

                        $patients = 0;
                        $sql = "SELECT * FROM patient ";
                        $result = mysqli_query($con, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $patients++;
                            }
                        }
                        ?>
                        <div class="col-xl-5 col-sm-12 col-md-5 ">
                            <div class="card border-left-primary shadow h-400 py-3">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-l font-weight-bold text-primary text-uppercase mb-1">
                                                Total Registered Patients</div>
                                            <div class="h4 mb-0 font-weight-bold text-gray-800"><?php echo $patients; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <!-- <i class="fas fa-calendar fa-3x text-gray-300"></i> -->
                                            <i class="fas fa-procedures fa-3x text-gray-600"></i>

                                        </div>
                                    </div>
                                </div>
                            </div>
<br>
                            <div class="card border-left-primary shadow h-400 py-3">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-l font-weight-bold text-primary text-uppercase mb-1">
                                             Patients Registered Today</div>
                                            <div class="h4 mb-0 font-weight-bold text-gray-800"><?php echo $patient_today; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <!-- <i class="fas fa-calendar fa-3x text-gray-300"></i> -->
                                            <i class="fas fa-procedures fa-3x text-gray-600"></i>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-sm-12 col-md-7  lotti ">
                            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                            <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_vPnn3K.json" background="transparent" speed="0.7" style=" height:auto;" loop autoplay></lottie-player>
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

<style>
    .lotti {
        margin-top: -15vh;
    }

    @media only screen and (max-width: 600px) {
        .lotti {
            margin-top: 0vh;
        }
    }
</style>