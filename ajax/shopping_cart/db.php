<?php
session_start();
$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "kp_php");
mysqli_query($con, "SET NAMES 'utf8' ");
