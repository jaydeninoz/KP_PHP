<?php
require './Item.php';
session_start();

// var_dump($_SESSION["cart"]);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Summary</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="cart-summary container">
        <h3 class="text-danger w-50 mx-auto">Payment Checkout</h3>
        <?php
        // $cart = serialize($_SESSION["cart"]);
        $total = 0;
        if (isset($_SESSION["cart"])) {
            foreach ($_SESSION["cart"] as $item) {
                $total += $item->PRICE;
                ?>
                <button class='btn btn-primary'><?= $item->NAME ?></button>
                <h4><?= $item->PRICE ?></h4>
        <?php
            }
        }
        ?>
        <hr>
        <h1> <?= $total ?> </h1>
    </div>

</body>

</html>