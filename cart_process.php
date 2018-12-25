<?php


//Khoi dong session
session_start();


define( 'SITE_ROOT', 'http://localhost:81/tmdt'); //website
define( 'SITE_IMG_ROOT', 'http://localhost:81/tmdt/img'); //website image
define( 'THEME_ROOT', 'http://localhost:81/tmdt/adm'); //website adm

//include config
$root_dir = $_SERVER["DOCUMENT_ROOT"].'/tmdt';
$root_adm=  $root_dir."/adm";
include $root_dir."/mysqli/config.php";
include $root_dir."/func/fn.cart.php";


//1. khoi tao hoac lay cart tu session neu co
$cart['dssp']=[];
$cart['total']=0;
if(isset($_SESSION["cart"])){
    $cart=$_SESSION["cart"];
}

//lay lenh
$do = $_GET["do"];

//xem lenh la gi voi gio hang
if($do=="add2cart"){
    $product_id = $_GET["product_id"];


    //1. kiem tra product id co trong gio hang hay ko?
    $da_co_trong_gio_hang = fn_kiem_tra_product_id_ton_tai_trong_gio_hang($cart,$product_id);
    if($da_co_trong_gio_hang){
        //+1
        foreach ($cart['dssp'] as &$item){
            if($item['product_id'] == $product_id){
                if($item['so_luong']+1 <= 5){ //gioi han
                    $item['so_luong']+=1;
                }
            }
        }
    }else{
        //add
        $product = fn_lay_san_pham_boi_product_id($con,$product_id);
        $product['so_luong']=1;
        $cart['dssp'][] = $product;

    }

}

if($do=="minus"){
    $product_id = $_GET["product_id"];
    foreach ($cart['dssp'] as &$item){
        if($item['product_id'] == $product_id){
            if($item['so_luong']-1>0){ //gioi han
                $item['so_luong']-=1;
            }
        }
    }
}
if($do=="delete"){
    $product_id = $_GET["product_id"];
    foreach ($cart['dssp'] as $key=> &$item){
        if($item['product_id'] == $product_id){
            unset($cart['dssp'][$key]);
        }
    }
}
//set lai cart
fn_calculator_total_cart($cart);
$_SESSION['cart'] = $cart;


header("Location: cart.php");
?>