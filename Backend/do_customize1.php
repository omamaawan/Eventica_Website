<?php
session_start();
include_once("cfg.php");
if (isset($_POST['submit'])) {
    // call function to get data from tbl_package
    $package = get_package($_POST["startCity"], $_POST["tourCity"], $_POST["tour_type"]);
    //if function return 1, fetch from db
    if (mysqli_num_rows($package) > 0) {
        $package_info = mysqli_fetch_array($package);
        $duration = ceil(abs(strtotime($_POST["endDate"]) - strtotime($_POST["startDate"])) / 86400);
        $total_price = $package_info[1] * $_POST["adults"] * $duration;
        if (!empty($_POST["children"])) {
            $total_price += $package_info[2] * $_POST["children"] * $duration;
            $error = user_customize($_SESSION['user_id'], $_POST["startDate"], $duration, $_POST["adults"], $_POST["children"], $package_info[0], $total_price);
        } else {
            $error = user_customize($_SESSION['user_id'], $_POST["startDate"], $duration, $_POST["adults"], 0, $package_info[0], $total_price);
        }
        switch ($error) {
            case 1:
                echo "Error! Please try again";
                break;
            default:
                $_SESSION["package_id"] = mysqli_insert_id($GLOBALS['conn']);
                header('Location: ../tour_cost.php');
        }
    }
}