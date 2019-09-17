<?php 

session_start();
$con = mysqli_connect('localhost', 'root', '', 'kp_php');
mysqli_set_charset($con, 'utf8');

if ($_SESSION['register_fail_mes']) {
    unset($_SESSION['register_fail_mes']);
}


if (isset($_POST['btnSignup'])) {
    if (isset($_POST['txtUsername']) && isset($_POST['txtPassword'])) {
        $username = $_POST['txtUsername'];
        $password = md5($_POST['txtPassword']);  //md5 encrypt

        $queryString = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($con, $queryString);
        $row = mysqli_fetch_assoc($result);
        if (count($row) > 0) {
            $_SESSION['register_fail_mes'] = 'The username does not exist! Please choose another one';
            header('location: signup.php');
            exit;
        }
        
        $queryString = "INSERT INTO users(username, password, role) VALUES('$username', '$password', 2)";
        $result = mysqli_query($con, $queryString); // push data to database

        if ($result) {
            $_SESSION['username'] = $username;
            header('location: index.php');
            exit;
        } else {
            $_SESSION['register_fail_mes'] = 'Registration is unsuccessful! Please try again!';
            header('location: signup.php');
            exit;
        }
    }
}

?>