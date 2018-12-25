<?php

ini_set("xdebug.var_display_max_children", -1);
ini_set("xdebug.var_display_max_data", -1);
ini_set("xdebug.var_display_max_depth", -1);


//Khoi dong session
session_start();
include "./mysql/config.php";
//seo title
$GB_PAGE_TITLE = 'GIỎ HÀNG CỦA BẠN';



//1. khoi tao hoac lay cart tu session neu co
$cart['dssp']=[];
$cart['total']=0;
if(isset($_SESSION["cart"])){
    $cart=$_SESSION["cart"];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <?php
        include "./layout/header.php";
    ?>
    <link href="./css/cart.css" rel="stylesheet">

</head>
<body>

<!-- Navigation -->
<?php include "./layout/nav.php"?>

<!-- Page Content -->
<div class="container">

    <div class="row">
            <?=var_dump($cart)?>
            <table class="thong-so" style="width: 100%; margin-top: 5px; margin-bottom: 5px">
                <tr>
                    <th colspan="3" style="text-align: center">Giỏ hàng</th>
                </tr>
                <?php
                    foreach ($cart['dssp'] as $cart_item){

                ?>
                <tr>
                    <td style="width:22%;">
                        <img src="<?=$cart_item['main_photo']?>" class="hinh-gio-hang">
                    </td>
                    <td>
                        <a href="#" class="cart-sp-1"><?=$cart_item['name']?></a>
                    </td>
                    <td>
                        <p class="price-cart"><span><?=number_format($cart_item['price'],0, ',', '.')?></span> <span class="dong-cart">đ</span></p>
                        <div class="quantity buttons_added">
                            <a type="button" style="padding: 5px 15px;" href="cart_process.php?do=minus&product_id=<?=$cart_item['product_id']?>" class="minus">-</a>
                            <input type="number" step="1" min="1" max="5" name="quantity" value="<?=$cart_item['so_luong']?>" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="" style="text-align: center">
                            <a type="button" style="padding: 5px 15px;" href="cart_process.php?do=add2cart&product_id=<?=$cart_item['product_id']?>" class="minus">+</a>
                            <a type="button" style="padding: 5px 15px;" href="cart_process.php?do=delete&product_id=<?=$cart_item['product_id']?>" class="minus">X</a>
                        </div>
                    </td>
                </tr>
                <?php } ?>
                <tr>
                    <td>
                        <p>Tổng tiền: </p>

                    </td>
                    <td colspan="2" class="thanh-tien">
                        <p> <?=number_format($cart['total'],0, ',', '.')?> ₫</p>

                    </td>
                </tr>
            </table>
        <table style="width: 100%">
            <tr>
                <td>
                    <p>
                        <input type="radio" name="sex" value="male" class="gioi-tinh" /> Anh
                        <input type="radio" name="sex" value="male" /> Chị
                    </p>
                </td>

            </tr>
            <tr>
                <td>
                    <form class="form-inline">
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputName2" placeholder="Họ và tên">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Số Điện Thoại">
                        </div>
                    </form>
                    <br/>
                    <input type="text" class="form-control" placeholder="Yêu cầu khác (không bắt buộc)">
                </td>
            </tr>
            <tr>
                <td>
                    <p><span class="phuc-vu">Để được phục vụ nhanh hơn</span>, hãy chọn thêm:</p>
                    <p>
                        <input type="radio" name="dia-chi" value="tan-noi" /> Địa chỉ giao hàng
                        <input type="radio" name="dia-chi" value="sieu-thi" /> Nhận tại siêu thị
                    </p>
                </td>
            </tr>
            <td>
                <button type="button" class="btn btn-primary btn-thanh-toan" style="width: 100%">Thanh Toán Online<br/>
                    <span class="the-atm">Bằng thẻ ATM, Visa, Master</span></button>
            </td>
        </table>
    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<?php include "./layout/footer.php"?>

</body>

</html>
