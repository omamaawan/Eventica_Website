<?php
// for local
$adb = 'eventicaweb';
$db_server = 'localhost';
$db_user = 'root';
$db_password = '';

$conn = mysqli_connect($db_server, $db_user, $db_password, $adb);

function add_package($start_city, $tour_city, $per_adult, $per_child, $tour_type){
    $query = "insert into tbl_package(start_city, tour_city, per_adult, per_child, tour_type) values('".$start_city."', '".$start_city."', '".$per_adult."', '".$per_child."', '".$tour_type."')";
    mysqli_query($GLOBALS['conn'], $query);
}

function get_user_history($user_id){
    $query = "select tbl_customize.start, tbl_customize.end, tbl_customize.duration, tbl_customize.adult, tbl_customize.children, tbl_package.start_city, tbl_package.tour_city, tbl_package.tour_type from tbl_customize, tbl_package where tbl_customize.package_id = tbl_package.id AND tbl_customize.user_id = '".$user_id."' ";
    $result = mysqli_query($GLOBALS['conn'], $query);
    return $result;
}

function get_profile($id){
    $query = "select  username,email,phone from tbl_user  where id = '".$id."' ";
    $result = mysqli_query($GLOBALS['conn'], $query);
    return $result;
}

function get_city_name($city_id){
    $query = "select city from tbl_cities where id = $city_id";
    $result = mysqli_query($GLOBALS['conn'], $query);
    while($query_data = mysqli_fetch_row($result))
        $city = $query_data[0];
    return $city;
}

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
    where start_city = '" . $start_City . "' and tour_city = '" . $tour_City . "' and tour_type = '" . $type . "'  ";

    $result = mysqli_query($GLOBALS['conn'], $query);
    return $result;
}
//enter user customize details
function user_customize($user_id, $startDate, $duration, $adult, $children, $package_id, $total_price)
{
    $error = 1;
    $query = "insert into tbl_customize(user_id, start, duration, adult, children, package_id, total_pr) 
    values('" . $user_id . "', '" . $startDate . "', '" . $duration . "', '" . $adult . "', '" . $children . "', '" . $package_id . "', '" . $total_price . "')";
    if (mysqli_query($GLOBALS['conn'], $query)) {
        $error = 0;
    }
    return $error;
}

// insert user customize form into tbl_customize
function add_custom($userid, $start_date, $end_date, $duration, $adult, $child, $packageid, $total_cost)
{
    $success = 0;

    $query = "insert into tbl_customize(user_id, start, end, duration,  adult, children, package_id, total_pr) 
    values('" . $userid . "', '" . $start_date . "', '" . $end_date . "', '" . $duration . "', '" . $adult . "', '" . $child . "', '" . $packageid . "', '" . $total_cost . "' )";

    if (mysqli_query($GLOBALS['conn'], $query)) {
        $success = 1;
    }

    return $success;
}

//get the cityname of user's custom start city
function get_userStartCity($startCity)
{
    $query = "select city from tbl_cities
    where id = '" . $startCity . "' ";

    $result = mysqli_query($GLOBALS['conn'], $query);

    if (mysqli_num_rows($result)) {
        $rows = mysqli_fetch_assoc($result);
    }

    return $rows;
}

//get the cityname of user's custom tour city
function get_userTourCity($tourCity)
{
    $query = "select city from tbl_cities
    where id = '" . $tourCity . "' ";

    $result = mysqli_query($GLOBALS['conn'], $query);

    if (mysqli_num_rows($result)) {
        $rows = mysqli_fetch_assoc($result);
    }

    return $rows;
}