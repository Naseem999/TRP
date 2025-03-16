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
    <title>Add Doctors </title>
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
                                <i class="fas fa-briefcase-medical"></i>
                                Add New Doctor
                            </h6>
                        </div>
                        <div class="card-body">
                            <form action="add_doc_process.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" name="name" class="form-control" id="name">
                                </div>
                                <div class="form-group">
                                    <label for="account_details">Email:</label>
                                    <input type="email" name="mail" class="form-control" id="account_details">
                                </div>
                                <div class="form-group">
                                    <label for="name">Phone Number:</label>
                                    <input type="text" name="phone" class="form-control" id="name">
                                </div>
                                <div class="form-group">
                                    <label for="account_details">Password:</label>
                                    <input type="password" name="pass" class="form-control" id="account_details">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Select Branch</label>
                                    <select name="branch" class="form-control" id="exampleFormControlSelect1">
                                        <?php
                                        $sql3 = "SELECT * FROM branch";
                                        $result3 = mysqli_query($con, $sql3);
                                        $resultch3 = mysqli_num_rows($result3);
                                        if ($resultch3 > 0) {
                                            while ($row = mysqli_fetch_assoc($result3)) {
                                        ?>
                                                <option value="<?php echo $row['name'] ?>"><?php echo $row['name'] ?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>

                                <button name="add_doc" type="submit" class="btn btn-icon-split " style="color: white; background-color: #5da2f3; margin-bottom: 2em; margin-top: 2em;">
                                    <span class="text">
                                        <i class="fas fa-plus "></i>
                                        Add Staff
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