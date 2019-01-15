<?php
//include config
$root_dir = $_SERVER["DOCUMENT_ROOT"].'/tmdt';
include $root_dir."/mysqli/config.php";
$msg = "";


$rs = [];
$rs['ket_qua'] =false;
$rs['thong_bao'] = 'Xóa thất bại';



$product_id_xoa = $_GET["product_id"];
$sql_xoa ="delete from product where product_id=$product_id_xoa";
$result = mysqli_query($con,$sql_xoa);

if ($result){
    $rs = [];
    $rs['ket_qua'] =true;
    $rs['thong_bao'] = 'Xóa ok';
    //header("location: index.php");
}

header('Content-type: application/json');
echo json_encode($rs);
exit;
?>