<?php
require "./../db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .one-piece {
            border: 2px dotted black;
            width: 100px;
            height: 200px;
            margin: auto;
            margin-top: 5px;
        }

        .loading {
            border: 2px dotted black;
            width: 200px;
            height: 200px;
            margin: auto;
            margin-top: 5px;
            display: none;
        }
    </style>
</head>

<body>
    <!-- <div id="phantrang">
        <button trang="1">1</button>
        <button trang="2">2</button>
        <button trang="3">3</button>
    </div> -->

    <!-- content to be added -->
    <div id="noidung">
        <?php
        $qr = "
            SELECT * FROM products
            ORDER BY id ASC
            LIMIT 0, 10
        ";

        $rows = mysqli_query($con, $qr);
        $list = array();

        while ($row = mysqli_fetch_array($rows)) {
            $list[] = $row;
        }
        foreach ($list as $item) {
            ?>
            <div class='one-piece'> <?= $item["name"] ?> </div>
        <?php
        }
        ?>

    </div>
    <div class="loading">LOADING......</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        var t = 0;
        $(window).scroll(function() {
            if ($(window).scrollTop() + $(window).height() > $(document).height() - 5) {
                // show loading div
                setTimeout(function() {
                    $(".loading").show()
                }, 5000);
                t++;
                //Ajx 
                $.get("xuly.php", {
                    trang: t
                }, function(data) {
                    // hide loading div
                    $(".loading").hide(1000);
                    // phải đợi data trả về thì mới chạy chỗ này 
                    var json = JSON.parse(data);
                    // $("#noidung").empty();
                    json.forEach(function(item) {
                        $("#noidung").append("<div class='one-piece'>" + item.TEN + "</div>");
                    });
                });
            }
        });


        // $("button").click(function() {
        //     // vừa click chuột cái, code chạy chỗ này 

        //     var t = $(this).attr("trang");

        //     //Ajx 
        //     $.get("xuly.php", {
        //         trang: t
        //     }, function(data) {
        //         // phải đợi data trả về thì mới chạy chỗ này 
        //         var json = JSON.parse(data);
        //         $("#noidung").empty();
        //         json.forEach(function(item) {
        //             $("#noidung").append("<div class='one-piece'>" + item.TEN + "</div>");
        //         });
        //     });
        // });
    </script>
</body>

</html>