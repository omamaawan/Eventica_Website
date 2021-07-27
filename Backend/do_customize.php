<?php
session_start();
include_once("cfg.php");

//check whether child field is empty or not
if (!empty($_POST["children"])) {
    $child = $_POST["children"];
} else {
    $child = 0;
}
if (isset($_POST['submit'])) {

    // call function to get data from tbl_package
    $package = get_package($_POST["startCity"], $_POST["tourCity"], $_POST["tour_type"]);


    if ($package && mysqli_num_rows($package) > 0) {
        //if function have number of rows greater 0, fetch from db
        $package_info = mysqli_fetch_array($package);

        //calculate duration days from start date to end date
        $duration = ceil(abs(strtotime($_POST["endDate"]) - strtotime($_POST["startDate"])) / 86400);

        // change date format
        $date = str_replace('-"', '/', $_POST["startDate"]);
        $startDate = date("d/m/Y", strtotime($date));

        $date = str_replace('-"', '/', $_POST["endDate"]);
        $endDate = date("d/m/Y", strtotime($date));

        // calculate the total cost, if possible put in js to count
        $total_cost = (($_POST["adults"] * $package_info[1]) + ($child * $package_info[2])) * $duration;

        // insert data into tbl_customize
        $add_userCustom = add_custom($_SESSION['user_id'], $_POST["startDate"], $_POST["endDate"], $duration, $_POST["adults"], $child, $package_info[0], $total_cost);

        if ($add_userCustom == 1) {
            header('Location: ../tour_cost.php');
        } else {
            goto error;
            // echo "No ";
        }
    } else {
        goto error;
    }
    $_SESSION['adult_pr'] = $package_info[1];
    $_SESSION['child_pr'] = $package_info[2];
    $_SESSION['start_City'] = $_POST["startCity"];
    $_SESSION['tour_City'] = $_POST["tourCity"];
    $_SESSION['start_Date'] = $startDate;
    $_SESSION['end_Date'] = $endDate;
    $_SESSION['adult'] = $_POST["adults"];
    $_SESSION['children'] = $child;
    $_SESSION['total'] = $total_cost;
} else {
    error:
    echo "<script>alert('Error! Please Try Again.');
                window.location.href='../customize.php';
                </script>";
}