<?php
//include config
$root_dir = $_SERVER["DOCUMENT_ROOT"].'/tmdt';
include $root_dir."/mysqli/config.php";

if(isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];
    $sql = "select * from product where product_id=$product_id;";
    $kq = mysqli_query($con, $sql);
    $product = mysqli_fetch_assoc($kq);


    header('Content-type: application/json');
    echo json_encode($product);
    exit;
}