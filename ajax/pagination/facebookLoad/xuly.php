<?php 
require "./../db.php";

$sotin1trang = 10;
$trangdangxem = $_GET["trang"];
settype($trangdangxem, "int");

$from = ($trangdangxem - 1) * $sotin1trang;

$qr = "
    SELECT * FROM products
    ORDER BY id ASC
    LIMIT $from, $sotin1trang
";

$rows = mysqli_query($con, $qr);

$mang = array();
while ($r = mysqli_fetch_assoc($rows)) {
    array_push($mang, new SanPham($r["id"], $r["name"]));
}

echo json_encode($mang);

class SanPham{
    public $ID;
    public $TEN;
    function __construct($i, $t) {
        $this->ID = $i;
        $this->TEN = $t;
    }
}
