<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'eventicaweb';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$stmt = $con->prepare('SELECT username, email,phone FROM tbl_user WHERE id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['email']);
$stmt->execute();
$stmt->bind_result($username, $email,$phone);
$stmt->fetch();
$stmt->close();
?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My profile</title>
</head>

<body>

    <table>
        <thead>
            <tr>
                <th scope="col">username</th>
                <th scope="col">email</th>
                <th scope="col">Contact Number</th>
                

            </tr>
        </thead>
        <tbody>

            
            <tr>


                <td scope="row"><?php echo $result['id']; ?></td>
                <td><?php echo $result['username']; ?></td>
                <td><?php echo $result['email']; ?></td>
                <td><?php echo $result['phone']; ?></td>
            </tr>

           

        </tbody>
    </table>

</body>

</html>