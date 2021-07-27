<?php
//start php session
session_start();
$_SESSION = array();

include_once("cfg.php");
if (isset($_POST["submit"])) {

    $user_login = login($_POST["email"]);
    if ($user_login && mysqli_num_rows($user_login) > 0) {
        $user_info = mysqli_fetch_array($user_login);
        if (!password_verify($_POST["password"], $user_info[3])) {
            goto error; //buat lg stu condition kalau x activate, kne authenticate kt email dulu
        } else {
            // Login success
            $_SESSION["login"] = "YES";
            $_SESSION['user_id'] = $user_info[0];
            $_SESSION['user_name'] = $user_info[1];
            $_SESSION['user_email'] = $user_info[2];
            $_SESSION['user_mobile'] = $user_info[4];
            Header("Location:../mainpage.php");
        }
    } else {
        error:
        // Failed!
        $_SESSION["login"] = "NO";
        echo "<script>
                alert('Incorrect email or password! Please log in again.');
                window.location.href='../index.php';
                </script>";
    }
}