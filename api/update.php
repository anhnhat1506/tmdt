<?php
//include config
$root_dir = $_SERVER["DOCUMENT_ROOT"].'/tmdt';
include $root_dir."/mysqli/config.php";
    $msg = "";
    $rs = [];
    $rs['ket_qua'] =false;
    $rs['thong_bao'] = 'Cập nhật thất bại';
    $product_id =  isset($_POST['product_id'])?$_POST['product_id']:"";
    $name = isset($_POST['name'])?$_POST['name']:"";
    $price = isset($_POST['price'])?$_POST['price']:"";
    $main_photo = isset($_POST['main_photo'])?$_POST['main_photo']:"";
    $introduce = "";
    $cate_id = 1;
    $brand_id = 1;
    $kqua= mysqli_query($con,"update product set name='$name',price=$price,main_photo='main_photo',introduce='$introduce',category_id=$cate_id,brand_id=$brand_id where product_id=$product_id");
    if ($kqua){
        $rs['ket_qua'] =true;
        $rs['thong_bao'] = 'Cập nhật thành công';
    }
    //TRA VE JSON
    header('Content-type: application/json');
    echo json_encode($rs);
    exit;
?>