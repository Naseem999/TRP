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
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include_once 'partial/head.php';
    ?>
    <title>Add Staff</title>
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
                    <div class="card shadow mb-4" style="border-radius: 20px;">
                        <div class="card-header py-3" style="border-top-left-radius: 20px;border-top-right-radius: 20px;">
                            <h6 style="text-align: left; color: #5da2f3;" class="m-1 font-weight-bold ">
                                <i class="fas fa-procedures"></i>
                                Register New Paitent
                            </h6>
                        </div>
                        <div class="card-body">
                            <form action="add_paitent_process.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" name="name" class="form-control" id="name">
                                </div>

                                <div class="form-group">
                                    <label for="name">Phone Number:</label>
                                    <input type="text" name="phone" class="form-control" id="name">
                                </div>
                                <div class="form-group">
                                    <label for="account_details">Date of Birth:</label>
                                    <input type="date" name="dob" class="form-control" id="account_details">
                                </div>


                                <button name="add_staff" type="submit" class="btn btn-icon-split " style="color: white; background-color: #5da2f3; margin-bottom: 2em; margin-top: 2em;">
                                    <span class="text">
                                        <i class="fas fa-plus "></i>
                                        Add Paitent
                                    </span>
                                </button>
                            </form>
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