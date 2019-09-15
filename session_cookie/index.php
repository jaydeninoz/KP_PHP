<?php 

session_start();

if (isset($_SESSION['login'])) {
    echo 'login successfully';
} else {
    header('location: login.php');
}
