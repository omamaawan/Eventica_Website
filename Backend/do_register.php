<?php
include_once("cfg.php");
if (isset($_POST["submit"])) {
    $loc = "../index.php";
    $email = $_POST['email'];
    $user_exists = checkUser($email);
    switch ($user_exists) {
        case 0:
            $error_reg = register($_POST['username'], $email, $_POST['password'], $_POST['mobile']);
            switch ($error_reg) {
                case 0:
                    $msg = "You have been successfully registered!";
                    break;
                default:
                    $msg = "Error occured! Please register again";
                    $loc = "../register.php";
            }
            break;
        case 1: //user already exists in db
            $msg = "Error! An account already exists with this email.";
            break;
    }
    echo "<script>
        alert('$msg');
        window.location.href= '$loc' ;
        </script>";
}