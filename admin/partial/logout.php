<?php

session_start();
if (isset($_SESSION['admin_id'])) {


    session_unset();
    session_destroy();
    echo "<script>alert('You are logged out');
        window.location.assign('../login.php');
        </script>";
} else {
    echo "<script>alert('Login As Admin');
        window.location.assign('login.php');
        </script>";
}
