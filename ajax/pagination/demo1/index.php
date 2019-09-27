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
</head>
<body>
    <div id="phantrang">
        <button trang="1">1</button>
        <button trang="2">2</button>
        <button trang="3">3</button>
    </div>

    <!-- content to be added -->
    <div id="noidung"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $("button").click(function(){
            // vừa click chuột cái, code chạy chỗ này 

            var t = $(this).attr("trang");
            
            //Ajx 
            $.get("xuly.php", {trang:t}, function(data){
                // phải đợi data trả về thì mới chạy chỗ này 
                var json = JSON.parse(data);
                $("#noidung").empty();
                json.forEach(function(item){
                    $("#noidung").append("<h2>" + item.TEN + "</h2>");
                });
            });
        });
    
    
    </script>
</body>
</html>