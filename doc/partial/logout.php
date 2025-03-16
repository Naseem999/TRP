<?php

session_start();
if (isset($_SESSION['doctor_email'])) {


    session_unset();
    session_destroy();
    echo "<script>alert('You are logged out');
        window.location.assign('../../login.php');
        </script>";
} else {
    echo "<script>alert('Login As Doctor');
        window.location.assign('../../login.php');
        </script>";
}
