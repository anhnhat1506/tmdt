<?php
include "./mysql/config.php";
//seo title
$GB_PAGE_TITLE = 'GIỎ HÀNG CỦA BẠN';
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
            <table class="thong-so" style="width: 100%; margin-top: 5px; margin-bottom: 5px">
                <tr>
                    <th colspan="3" style="text-align: center">Giỏ hàng</th>
                </tr>
                <tr>
                    <td style="width:22%;">
                        <img src="./img/phone/apple/iphone-xs-256gb-white-600x600.jpg" class="hinh-gio-hang">
                    </td>
                    <td>
                        <a href="#" class="cart-sp-1">OPPO A3s 32GB</a>
                        <ul>
                            <li>Ốp lưng (áp dụng từ 14/12)</li>
                            <li>Cơ hội trúng 61 xe Wave Alpha khi trả góp Home Credit <a href="#">Xem chi tiết</a></li>
                        </ul>
                        <div>
                            <select style="width: 30%">
                                <option value="0">Màu: Đỏ</option>
                                <option value="1">Đỏ</option>
                                <option value="2">Tím</option>
                            </select>
                        </div>


                    </td>
                    <td>
                        <p class="price-cart"><span>4.690.000</span> <span class="dong-cart">đ</span></p>
                        <div class="quantity buttons_added">
                            <input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="" style="text-align: center"><input type="button" value="+" class="plus">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="">
                        <img src="./img/phone/apple/iphone-xs-256gb-white-600x600.jpg" class="hinh-gio-hang">
                    </td>
                    <td>
                        <a href="#" class="cart-sp-1">OPPO A3s 32GB</a>
                        <ul>
                            <li>Ốp lưng (áp dụng từ 14/12)</li>
                            <li>Cơ hội trúng 61 xe Wave Alpha khi trả góp Home Credit <a href="#">Xem chi tiết</a></li>
                        </ul>
                        <div>
                            <select style="width: 30%">
                                <option value="0">Màu: Đỏ</option>
                                <option value="1">Đỏ</option>
                                <option value="2">Tím</option>
                            </select>
                        </div>


                    </td>
                    <td>
                        <p class="price-cart"><span>4.690.000</span> <span class="dong-cart">đ</span></p>
                        <div class="quantity buttons_added">
                            <input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="" style="text-align: center"><input type="button" value="+" class="plus">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Tổng tiền:</p>
                        <p class="thanh-tien-1">Bạn cần thanh toán:</p>
                    </td>
                    <td colspan="2" class="thanh-tien">
                        <p>12.380.000₫</p>
                        <p class="thanh-tien-1">12.380.000₫</p>
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
