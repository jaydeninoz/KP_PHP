<?php 

    $con = mysqli_connect('localhost', 'root', '', 'kp_php');
    mysqli_set_charset($con, 'utf8');

    $username = $_POST['username'];

    $queryString = "SELECT * FROM usernames WHERE username = '$username'";
    $result = mysqli_query($con, $queryString);
    $row = mysqli_fetch_array($result);

    $invalid = "The username is not available";
    $valid = "You can use this username";

    // if (!($row != null))  {
    //     echo $valid;
    // } else {
    //     echo $invalid;
    // }

    

    if (mysqli_num_rows($result) == 0)  {
        echo $valid;
    } else {
        echo $invalid;
    }

?>