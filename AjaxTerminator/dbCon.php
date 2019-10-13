<?php 

$con = mysqli_connect("localhost:81", "root", "123456");
mysqli_select_db($con, "ajax");
mysqli_query($con, "SET NAMES 'utf8'");


?>