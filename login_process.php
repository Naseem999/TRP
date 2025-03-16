<?php
session_start();
include_once 'partial/head.php';
if (isset($_SESSION['doctor_email'])) {
    echo "<script>
    window.location.assign('doc/index.php');
    </script>";
}
if (isset($_SESSION['staff_email'])) {
    echo "<script>
    window.location.assign('staff/index.php');
    </script>";
}
if (isset($_POST['login_submit'])) {

    $username = mysqli_real_escape_string($con, $_POST['username']);
    $pass = mysqli_real_escape_string($con, $_POST['pass']);
    $role = mysqli_real_escape_string($con, $_POST['role']);

    if (empty($username) || empty($pass) || empty($role)) {
        echo "<script>alert('Fill All Required Feilds');
        window.location.assign('login.php');
        </script>";
    }
    $sql3 = "SELECT * FROM login_details WHERE email='$username' and role='$role'";
    $result3 = mysqli_query($con, $sql3);
    $resultch3 = mysqli_num_rows($result3);
    if ($resultch3 > 0) {
        $row = mysqli_fetch_assoc($result3);

        if ($row['pass'] == $pass) {

            if ($role == 'doctor') {
                $_SESSION['doctor_name'] = $row['username'];
                $_SESSION['doctor_email'] = $row['email'];
                $_SESSION['doctor_id'] = $row['id'];

                echo "<script>alert('Sucessfully Logged In');
                window.location.assign('doc/index.php');
                </script>";
            }
            if ($role == 'staff') {
                $_SESSION['staff_name'] = $row['username'];
                $_SESSION['staff_email'] = $row['email'];
                $_SESSION['staff_id'] = $row['id'];

                echo "<script>alert('Sucessfully Logged In');
                window.location.assign('staff/index.php');
                </script>";
            }
        } else {
            echo "<script>alert('Password Not Matched');
        window.location.assign('login.php');
        </script>";
        }
    } else {
        echo "<script>alert('no Such User Exsist');
        window.location.assign('login.php');
        </script>";
    }
}
