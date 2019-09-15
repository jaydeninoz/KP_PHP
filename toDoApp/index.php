<?php 

require('db.php');
require('get_data.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="toDo.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
    <h1>WORD TO-DOS</h1>
    <p class="instruction1">Enter text into the input field to add items to your list (max. 28 characters).</p>
    <p class="instruction2">Click the item to mark it as complete</p>
    <p class="instruction3">Click the "X" to remove the item from your list</p>

    <?php 
        if (isset($insertError)) {
            echo "<b>$insertError</b>";
        }
    ?>

    <form action="handle_form.php" method="post">
        <input id="input" type="text" name="task" value="" placeholder="New item...">
        <button type="submit" name="btnSubmit"  class="edit" onclick="addItem()"><i class="fas fa-pencil-alt"></i></button>
    </form>

    <br>
    <br>
    <br>
    <div id="todoBox">
        <?php 
            foreach ($tasks as $task) {
                ?>
                <div class="item">
                    <!-- <div class="content"> // $task['name'] </div> -->
                    <input type="text" class="content" value="<?= $task['name'] ?>">

                    <form action="handle_form.php" method="POST">
                        <input type="hidden" name="taskId" value="<?php echo $task['id']?>">
                        <button type="submit" name="btnDelete" class="delete">x</button>
                    </form>
                </div>
                <?php 
            }
        ?>      
    </div>
</body>
</html>