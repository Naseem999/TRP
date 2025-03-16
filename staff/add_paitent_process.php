<?php
include_once 'partial/head.php';

if (isset($_POST['add_staff'])) {
    date_default_timezone_set('Asia/Kolkata');
    $currentdate = date('Y-m-d');

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $dob = mysqli_real_escape_string($con, $_POST['dob']);


    if (empty($name) || empty($phone) || empty($dob)) {
        echo "<script>alert('Fill All Required Feilds');
        window.location.assign('add_patient.php');
        </script>";
        exit();
    } else {
        $sql3 = "SELECT * FROM patient WHERE name='$name' and phone='$phone'";
        $result3 = mysqli_query($con, $sql3);
        $resultch3 = mysqli_num_rows($result3);
        if ($resultch3 < 1) {

            $sql1 = "INSERT INTO patient(name,phone,dob,date_reg) 
                VALUES('$name','$phone','$dob','$currentdate');";
            if (mysqli_query($con, $sql1)) {
                echo "<script>alert('Patient Added');
            window.location.assign('add_patient.php');
            </script>";
            }
        } else {
            echo "<script>alert('Patient Already Exsist');
        window.location.assign('add_patient.php');
        </script>";
        }
    }
}
