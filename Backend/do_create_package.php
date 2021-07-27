<?php
session_start();
include_once("cfg.php");

$start_city = $_POST["start_city"];
$tour_city = $_POST["tour_city"];
$adult = $_POST["adult"];
$child = $_POST["child"];
$tour_type = $_POST["tour_type"];

add_package($start_city, $tour_city, $adult, $child, $tour_type);
echo "<script>alert('Package Added Now You Can Customize Your Tour'); window.location.href='../customize.php'; </script>";

?>