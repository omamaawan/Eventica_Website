<!DOCTYPE html>
<html>
<style>
#pwd {
    padding-bottom: 10px;
    padding-top: 5px;
    padding-left: 20px;
    padding-right: 20px;
    font-size: 10px;
    text-align: justify;
}
</style>

<head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="icon" type="image/png" href="images/logo.png">
    <link href="style1.css" rel="stylesheet" type="text/css">
    <link href="styletry.css" rel="stylesheet" type="text/css">
    <script src="validation.js"></script>
</head>

<body>
    <div class="register">
        <h1>Register</h1>
        <form action="Backend/do_register.php" method="post" name="signup" onsubmit="return validate();">
            <label for="username">
                <i class="fas fa-user"></i>
            </label>
            <input type="text" name="username" placeholder="Username" id="username" required>
            <label for="email">
                <i class="fas fa-envelope"></i>
            </label>
            <input type="email" name="email" placeholder="Email" id="email" required>
            <label for="password">
                <i class="fas fa-lock"></i>
            </label>
            <input type="password" name="password" placeholder="Password" id="password" required
                style="margin-bottom: 0;">
            <span id="pwd">Your
                password
                must be at least 8
                characters long, have at
                least one lowercase and uppercase character, one number and one special character.</span>
            <label for="repassword">
                <i class="fas fa-lock"></i>
            </label>
            <input type="password" name="repassword" placeholder="Confirm Password" id="repassword" required>
            <label for="mobilenumber">
                <i class="fas fa-user"></i>
            </label>
            <input type="text" name="mobile" placeholder="Mobile Number" id="mobile" required>
            <span><a href="index.php">Already have an account? Log in here </a></span>
            <input type="submit" value="Register" name="submit" id="submit">
        </form>
    </div>
</body>

</html>