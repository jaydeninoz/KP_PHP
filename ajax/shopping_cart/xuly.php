<?php
require './db.php';
require './Item.php';

$id = $_GET["idd"];

$qr = "SELECT * FROM shopping WHERE id=$id";
$result = mysqli_query($con, $qr);
$row = mysqli_fetch_array($result);

array_push($_SESSION["cart"], new Item($row["id"], $row["name"], $row["price"]));

echo json_encode($_SESSION["cart"]);

// class Item
// {
//     public $ID;
//     public $NAME;
//     public $PRICE;
//     function __construct($i, $n, $p)
//     {
//         $this->ID = $i;
//         $this->NAME = $n;
//         $this->PRICE = $p;
//     }
// }
