<?php 

session_start();

if (isset($_SESSION['username'])) {
    echo $_SESSION['username'] . ' has login successfully';
} else {
    header('location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="logout.php">Log Out</a>
</body>
</html>