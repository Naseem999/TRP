<?php
session_start();
if (!isset($_SESSION['doctor_email'])) {
    echo "<script>
    alert('login as Doctor');
    window.location.assign('../login.php');
    </script>";
} else {
    $doc_id = $_SESSION['doctor_name'];
    $doc_email = $_SESSION['doctor_email'];
    $doc_name = $_SESSION['doctor_name'];
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

                <!-- /.container-fluid -->
                <div class="row">
                    <div class="col-xl-12 col-md-12 " style="padding: 10px; margin-top: 0px;">
                        <?php
                        include_once 'partial/chart.php';
                        ?>
                    </div>
                </div>

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