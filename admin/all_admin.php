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
    <title> Branches </title>
</head>

<?php
if (isset($_GET['id']) && isset($_GET['action'])) {
    $id = $_GET['id'];
    $action = $_GET['action'];
    if ($action == 'del') {
        $sql = "DELETE  FROM  login_details WHERE id='$id'";
        if (mysqli_query($con, $sql)) {
            echo "<script>alert('Admin  Deleted');
            window.location.assign('all_admin.php');
            </script>";
        }
    } else {
        echo "<script>alert('Smothing Wrong');
            window.location.assign('all_admin.php');
            </script>";
    }
}
?>

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
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 style="text-align: left;" class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-user"></i> All Admins</h6>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Pass</th>
                                        <th>Phone Number</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM login_details WHERE role='admin'";
                                    $result = mysqli_query($con, $sql);

                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                            <tr>
                                                <td><?php echo $row['id']; ?></td>
                                                <td><?php echo $row['username']; ?></td>
                                                <td><?php echo $row['email']; ?></td>
                                                <td><?php echo $row['pass']; ?></td>
                                                <td><?php echo $row['phone']; ?></td>
                                                <td><a href="edit_admin.php?id=<?php echo $row['id']; ?>"><i class="fas fa-edit"></i></a></td>
                                                <td><a style="color: red;" href="all_admin.php?id=<?php echo $row['id']; ?>&action=del"><i class="fas fa-trash"></i></a></td>
                                            </tr>
                                    <?php
                                        }
                                    }
                                    ?>

                                </tbody>
                            </table>
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