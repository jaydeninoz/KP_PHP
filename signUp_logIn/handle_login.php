<?php 

session_start();
$con = mysqli_connect('localhost', 'root', '', 'kp_php');
mysqli_set_charset($con, 'utf8');



if (isset($_POST['btnLogin'])) {
    if (isset($_POST['txtUsername']) && isset($_POST['txtPassword'])) {
        $username = $_POST['txtUsername'];
        $password = md5($_POST['txtPassword']);  //md5 encrypt
        
        $queryString = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($con, $queryString);
        $row = mysqli_fetch_assoc($result);

        if (count($row) > 0) {
            if (isset($_SESSION['login_fail_mes'])) {
                unset($_SESSION['login_fail_mes']);
            }
            
            $_SESSION['username'] = $row['username'];
            header('location: index.php');
        } else {
            $_SESSION['login_fail_mes'] = 'Either Username or Password is invalid';
            header('location: login.php');
        }

    }
}

?>