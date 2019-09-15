<?php 

$con = mysqli_connect('localhost', 'root', '', 'kp_php');
mysqli_set_charset($con, 'utf8');

if (!$con) {
    echo 'Error connect';
}

$queryString = "INSERT INTO DMKHOA(MaKH, TenKhoa) VALUES ('abc', 'test')";
$result = mysqli_query($con,  $queryString);

$queryString = "SELECT * FROM SinhVien";
$result = mysqli_query($con,  $queryString);

$list = array();

while ($row = mysqli_fetch_assoc($result)) {
    $list[] = $row;
}

echo '<prev>';
var_dump($list);
echo '</prev>';

// if ($result) {
//     echo 
// }

// mysqli_close();