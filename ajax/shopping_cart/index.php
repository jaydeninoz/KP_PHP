<?php

require './db.php';
$_SESSION["cart"] = array();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping cart</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <script src="./jquery.js"></script>
    <script>
        $(document).ready(function() {
            $("button").click(function() {

                // get ID of the product 
                var id = $(this).attr("id");

                // Ajax
                $.get("xuly.php", {
                    idd: id,
                }, function(data) {
                    var json = JSON.parse(data);
                    var totalPrice = 0;
                    $("#item-list").empty();
                    json.forEach(function(item) {
                        $("#item-list").append("<button class='btn btn-secondary'>" + item.NAME + "</button>" + "<h4>" +
                            Number(item.PRICE) + "</h4>");
                        totalPrice += Number(item.PRICE);
                    });
                    $("#item-list").append("<h1>" + totalPrice + "</h1>");
                });


            });

        });
    </script>
</head>

<body>

    <h1 class="text-danger my-3">Shopping Cart</h1>
    <div class="container">
        <div class="row">
            <div class="product-list col-md-8">
                <?php
                $qr = "SELECT * FROM shopping";
                $result = mysqli_query($con, $qr);
                $list = array();

                while ($row = mysqli_fetch_array($result)) {
                    $list[] = $row;
                }
                foreach ($list as $item) {
                    ?>
                    <div class="item row">
                        <div class="col-md-6">
                            <button class="btn btn-warning my-1" id="<?= $item['id'] ?>"><?= $item['name'] ?></button>
                        </div>
                        <div class=" col-md-6">
                            $<?= $item["price"] ?>
                        </div>
                    </div>
                <?php
                }
                ?>

            </div>
            <div class="summary col-md-4">
                <h3 class="text-success">Summary</h3>
                <div id="item-list"></div>
                <hr>
                <p id="total"></p>
            </div>
        </div>
    </div>

</body>

</html>