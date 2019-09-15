<?php 

$con = mysqli_connect('localhost', 'root', '', 'kp_php');
mysqli_set_charset($con, 'utf8');
if (!$con) {
    die('Error connect');
}

?>