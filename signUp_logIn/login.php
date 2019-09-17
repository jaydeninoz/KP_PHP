<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Sign In</h1>
    <form action="handle_login.php" method="POST">
        <input type="text" name="txtUsername" placeholder="Username" id=""> <br/>
        <input type="password" name="txtPassword" placeholder="Password" id=""> <br/>
        <button type="submit" name="btnLogin">Sign In</button>
    </form>
    <h3>Don't have account?</h3>
    <br/>
    <a href="signup.php">Sign Up</a>

    <?php 
        session_start();
        if (isset($_SESSION['login_fail_mes'])) {
            echo '<h2>' . $_SESSION['login_fail_mes'] . '</h2>';
            unset($_SESSION['login_fail_mes']);
        }
    ?>


</body>
</html>