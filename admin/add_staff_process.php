<?php
include_once 'partial/head.php';

if (isset($_POST['add_staff'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $mail = mysqli_real_escape_string($con, $_POST['mail']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $pass = mysqli_real_escape_string($con, $_POST['pass']);
    $branch = mysqli_real_escape_string($con, $_POST['branch']);


    if (empty($name) || empty($mail) || empty($phone) || empty($pass) || empty($branch)) {
        echo "<script>alert('Fill All Required Feilds');
        window.location.assign('add_staff.php');
        </script>";
    }
    $sql3 = "SELECT * FROM login_details WHERE email='$mail' and role='staff'";
    $result3 = mysqli_query($con, $sql3);
    $resultch3 = mysqli_num_rows($result3);
    if ($resultch3 < 1) {

        $sql1 = "INSERT INTO login_details(username,email,phone,pass,role,branch) 
                VALUES('$name','$mail','$phone','$pass','staff','$branch');";
        if (mysqli_query($con, $sql1)) {
            echo "<script>alert('Staff Added');
            window.location.assign('add_staff.php');
            </script>";
        }
    } else {
        echo "<script>alert('Staff Already Exsist');
        window.location.assign('add_staff.php');
        </script>";
    }
}
