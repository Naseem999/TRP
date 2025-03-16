<?php
include_once 'partial/head.php';

if (isset($_POST['add_branch'])) {
    $b_name = mysqli_real_escape_string($con, $_POST['b_name']);
    $app = mysqli_real_escape_string($con, $_POST['app']);


    if (empty($b_name) || empty($app)) {
        echo "<script>alert('Fill All Required Feilds');
        window.location.assign('add_branch.php');
        </script>";
    }
    $sql3 = "SELECT * FROM branch WHERE name='$b_name' ";
    $result3 = mysqli_query($con, $sql3);
    $resultch3 = mysqli_num_rows($result3);
    if ($resultch3 < 1) {

        $sql1 = "INSERT INTO branch(name,amount_p_p) 
                VALUES('$b_name','$app');";
        if (mysqli_query($con, $sql1)) {
            echo "<script>alert('Branch Added');
            window.location.assign('add_branch.php');
            </script>";
        }
    } else {
        echo "<script>alert('Branch Already Exsist');
        window.location.assign('add_branch.php');
        </script>";
    }
}
