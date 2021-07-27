<?php
// for local
$adb = 'eventicaweb';
$db_server = 'localhost';
$db_user = 'root';
$db_password = '';

$conn = mysqli_connect($db_server, $db_user, $db_password, $adb);

//check if user exists or not
function checkUser($email)
{
    $flag = 0;
    $query = "select id from tbl_user 
    where email = '" . $email . "' ";
    $result = mysqli_query($GLOBALS['conn'], $query);
    if (mysqli_num_rows($result) > 0) {
        $flag = 1; //user exists
    }
    return $flag;
}
//Register
function register($username, $email, $password, $phone)
{
    $hashedpassword = password_hash($password, PASSWORD_DEFAULT);
    $error = 1;
    $query = "insert into tbl_user(username, email, password, phone, created_at) 
    values('" . $username . "', '" . $email . "', '" . $hashedpassword . "', '" . $phone . "', NOW())";
    if (mysqli_query($GLOBALS['conn'], $query)) {
        $error = 0;
    }
    return $error;
}
// login
function login($email)
{
    $query = "select id, username, email, password, phone from tbl_user 
    where email = '" . $email . "' ";
    $result = mysqli_query($GLOBALS['conn'], $query);
    return $result;
}
// get user info
function getUserInfo($user_id)
{
    $query = "select username, email, password from tbl_user 
    where id = '" . $user_id . "' ";
    $result = mysqli_query($GLOBALS['conn'], $query);
    return $result;
}
//get list of start city
function get_Startcity()
{
    $query = "select distinct tbl_cities.id, tbl_cities.city from tbl_cities, tbl_package
    where tbl_cities.id = tbl_package.start_city ";
    $result = mysqli_query($GLOBALS['conn'], $query);
    return $result;
}
//get list of tour city based on start city
function get_tourCity($startCity_id)
{
    $query = "select distinct tbl_cities.id, tbl_cities.city from tbl_cities, tbl_package
    where tbl_cities.id = tbl_package.tour_city and tbl_package.start_city = '" . $startCity_id . "'";
    $result = mysqli_query($GLOBALS['conn'], $query);
    return $result;
}

//get data tbl_package
function get_package($start_City, $tour_City, $type)
{
    $query = "select id, pr_adult, pr_child from tbl_package
    where start_city = '" . $start_City . "' and  tour_city = '" . $tour_City . "' and tour_type = '" . $type . "'  ";
    // echo $query;
    // die();
    $result = mysqli_query($GLOBALS['conn'], $query);
    return $result;
    
}