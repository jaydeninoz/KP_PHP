<?php 

session_start();

if (isset($_SESSION['username'])) {
    echo $_SESSION['username'] . ' has login successfully';
} else {
    header('location: login.php');
}
