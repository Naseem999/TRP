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
    <title> Edit Branches</title>
</head>

<body id="page-top">

    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }
    if (isset($_POST['edit_staff'])) {
        $re_id = mysqli_real_escape_string($con, $_POST['re_id']);
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $mail = mysqli_real_escape_string($con, $_POST['mail']);
        $phone = mysqli_real_escape_string($con, $_POST['phone']);
        $pass = mysqli_real_escape_string($con, $_POST['pass']);
        $branch = mysqli_real_escape_string($con, $_POST['branch']);


        $sql1 = "UPDATE login_details SET username='$name',email='$mail',email='$mail',pass='$pass',phone='$phone',branch='$branch' WHERE id='$re_id'";
        if (mysqli_query($con, $sql1)) {
            echo "<script>alert('Staff Updated');
                window.location.assign('edit_staff.php?id=$re_id');
                </script>";
        } else {
            echo "<script>alert('Smothing Wrong');
            window.location.assign('edit_staff.php?id=$re_id');
            </script>";
        }
    }



    ?>
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
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 style="text-align: left; color: #5da2f3;" class="m-0 font-weight-bold"><i class="fas fa-edit"></i> Edit Staff</h6>
                        </div>
                        <div class="card-body">
                            <?php
                            $sql = "SELECT * FROM login_details WHERE id='$id'";
                            $result = mysqli_query($con, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                    <form action="edit_staff.php" method="post" enctype="multipart/form-data">

                                        <input type="hidden" name="re_id" value="<?php echo $row['id']; ?>">

                                        <div class="form-group">
                                            <label for="name">Username:</label>
                                            <input type="text" name="name" class="form-control" id="name" value="<?php echo $row['username']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="account_details">Email:</label>
                                            <input value="<?php echo $row['email']; ?>" type="text" name="mail" class="form-control" id="account_details">
                                        </div>

                                        <div class="form-group">
                                            <label for="name">Phone Number:</label>
                                            <input type="text" name="phone" class="form-control" id="name" value="<?php echo $row['pass']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="account_details">Password:</label>
                                            <input type="text" name="pass" class="form-control" id="account_details" value="<?php echo $row['phone']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Select Branch</label>
                                            <select name="branch" class="form-control" id="exampleFormControlSelect1">
                                                <option value="<?php echo $row['branch']; ?>"  selected><?php echo $row['branch']; ?></option>
                                                <?php
                                                $sql3 = "SELECT * FROM branch";
                                                $result3 = mysqli_query($con, $sql3);
                                                $resultch3 = mysqli_num_rows($result3);
                                                if ($resultch3 > 0) {

                                                    while ($row1 = mysqli_fetch_assoc($result3)) {
                                                ?>
                                                        <option value="<?php echo $row1['name'] ?>"><?php echo $row1['name'] ?></option>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>


                                        <button name="edit_staff" type="submit" class="btn btn-primary btn-icon-split" style="color: white; background-color: #5da2f3; margin-bottom: 2em; margin-top: 2em;">
                                            <span class="text">Update Staff</span>
                                        </button>
                                    </form>
                            <?php
                                }
                            }
                            ?>
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