<?php 

require "../dbCon.php";

// mẹo:
// cứ khai báo biến của page tĩnh gửi lên 

// $username = $_POST["username"];
// $password = md5($_POST["password"]);
// $fullname = $_POST["fullname"];
// $email = $_POST["email"];

$username = $_GET["username"];
$password = md5($_GET["password"]);
$fullname = $_GET["fullname"];
$email = $_GET["email"];

$qr = "INSERT INTO users VALUES(
    null,
    '$username',
    '$password',
    '$fullname',
    '$email'
)";

if(mysqli_query($con, $qr)){
    echo "dc";
}else{
    echo "khong";
}

