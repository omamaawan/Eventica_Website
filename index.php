<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="icon" type="image/png" href="images/logo.png">
    <!-- <link href="style.css" rel="stylesheet" type="text/css"> -->
    <link href="styletry.css" rel="stylesheet" type="text/css">


</head>

<body>
    <div class="login">
        <h1>Login</h1>
        <form action="Backend/do_login.php" method="post">



            <label for="email">
                <i class="fas fa-user"></i>
            </label>

            <input type="email" name="email" placeholder="Email" id="email" required>


            <label for="password">
                <i class="fas fa-lock"></i>
            </label>
            <input type="password" name="password" placeholder="Password" id="password" required>
            <span><a href="register.php">Don't have an account? Register here </a></span>
            <input type="submit" value="Login" name="submit" id="submit">
        </form>
    </div>
</body>

</html>