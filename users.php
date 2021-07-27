<?PHP
$connection = mysqli_connect('localhost','root','','sdawebsite');
if($connection)
{
    $id = sessionStorage.getItem("email");
    $FeetchingData = "SELECT * FROM user where id= 'id'";
    $result = mysqli_query($connection,$FeetchingData);
     if(!$result)
    echo "ERROR IN FETCHING USER RECORDS";

}
else
{
    die("can not connect:) Connection Failed ". mysql_error( $connection));
}


?>