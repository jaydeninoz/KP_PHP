<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Sign Up</h2>
    <form action="handle_signup.php" method="post">
        <input type="text" name="txtUsername" id="" placeholder="Username"><br/>
        <input type="password" name="txtPassword" id="" placeholder="Password" ><br/>
        <button type="submit" name="btnSignup">Sign Up</button>
    </form>        

    <?php 
        session_start();
        if (isset($_SESSION['register_fail_mes'])) {
            echo '<h2>' . $_SESSION['register_fail_mes'] . '</h2>';
            unset($_SESSION['register_fail_mes']);
        }
    ?>
</body>
</html>