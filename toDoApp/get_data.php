<?php 


$queryString = "SELECT * FROM tasks";
$result = mysqli_query($con, $queryString);

$tasks = array();

while ($row = mysqli_fetch_assoc($result)) {
    $tasks[] = $row;

}

?>