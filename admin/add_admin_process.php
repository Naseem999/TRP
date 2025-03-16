<?php
include_once 'partial/head.php';

if (isset($_POST['add_admin'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $mail = mysqli_real_escape_string($con, $_POST['mail']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $pass = mysqli_real_escape_string($con, $_POST['pass']);


    if (empty($name) || empty($mail) || empty($phone) || empty($pass)) {
        echo "<script>alert('Fill All Required Feilds');
        window.location.assign('add_admin.php');
        </script>";
    }
    $sql3 = "SELECT * FROM login_details WHERE email='$mail' and role='admin'";
    $result3 = mysqli_query($con, $sql3);
    $resultch3 = mysqli_num_rows($result3);
    if ($resultch3 < 1) {

        $sql1 = "INSERT INTO login_details(username,email,pass,phone,role) 
                VALUES('$name','$mail','$phone','$pass','admin');";
        if (mysqli_query($con, $sql1)) {
            echo "<script>alert('Admin  Added');
            window.location.assign('add_admin.php');
            </script>";
        }
    } else {
        echo "<script>alert('Admin Already Exsist');
        window.location.assign('add_admin.php');
        </script>";
    }
}
