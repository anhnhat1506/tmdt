<?php
//include config
$root_dir = $_SERVER["DOCUMENT_ROOT"].'/tmdt';
include $root_dir."/mysqli/config.php";
$msg = "";


$rs = [];
$rs['ket_qua'] =false;
$rs['thong_bao'] = 'Thêm thất bại';

$name = isset($_POST["name"])?$_POST["name"]:"";
$price = isset($_POST["price"])?$_POST["price"]:"";
$main_photo = isset($_POST["main_photo"])?$_POST["main_photo"]:"";
$introduce = "";//isset($_POST["introduce"])?$_POST["introduce"]:"";
$cate_id = 1;//isset($_POST["cate_id"])?$_POST["cate_id"]:"";
$brand_id = 1;//isset($_POST["brand_id"])?$_POST["brand_id"]:"";
// co $con
$sql="INSERT INTO product(`name`,price,main_photo,introduce,category_id,brand_id) values ('$name',$price,'$main_photo','$introduce',$cate_id,$brand_id)";
$result = mysqli_query($con,$sql);
if ($result){
    $product_id_added = $con->insert_id;
    //duyet tat ca phan tu cua label
    if(isset($_POST["label"]) && count($_POST["label"])>0){

        foreach ($_POST["label"] as $key=>$value){
            $label_id  = $value;
            mysqli_query($con,"insert into product_label(product_id,label_id) values ($product_id_added,$label_id)");
        }
    }
    $rs = [];
    $rs['ket_qua'] =true;
    $rs['thong_bao'] = 'Thêm ok';
    //header("location: index.php");
}

header('Content-type: application/json');
echo json_encode($rs);
exit;
?>