<?php 

require('db.php');

if (isset($_POST['btnSubmit'])) {
    if (!empty($_POST['task'])) {
        $task = $_POST['task'];
        $queryString = "INSERT INTO tasks (name) VALUES ('$task')";
        $result = mysqli_query($con, $queryString);
    
        if (!$result) {
            die('Error insert');
        } 
    } else {
        $insertError = "Please insert task";
    }
}

// Delete handle
if (isset($_POST['btnDelete'])) {
    if (!empty($_POST['taskId'])) {
        $taskId = $_POST['taskId'];
        $queryString = "DELETE FROM tasks WHERE id = $taskId";
        $result = mysqli_query($con, $queryString);
    
        if (!$result) {
            die('Error delete');
        } 
    }
}


// Update handle
if (isset($_POST['btnUpdate'])) {
    if (!empty($_POST['taskId'])) {
        $taskId = $_POST['taskId'];
        $updateContent = $_POST['updateContent'];
        $queryString = "UPDATE tasks SET name = '$updateContent' WHERE id = $taskId";
        $result = mysqli_query($con, $queryString);

        if (!$result) {
            die('Error Update');
        }
    }
}



header('location: index.php');

?>