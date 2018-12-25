<?php
include "./mysql/config.php";
$product_id = $_REQUEST['product_id'];
$product=$db->fetch_single_row('product','product_id',$product_id);
//seo title
$GB_PAGE_TITLE = $product->name;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "./layout/header.php"?>
    <link href="./css/detail.css" rel="stylesheet">
</head>
<!--Chan v2xxl zz jih hkjh kjhkjhkj kj hk hzzzzzzzzzz-zz--->
<body>

<!--vuong coi-->
<!--hom nayh gt hfgh fg toi buon-->
<!-- Navigation -->
<?php include "./layout/nav.php";?>
<!-- Page Content -->
<div class="container">

    <div class="row">

        <div class="col-lg-4 khung-anh">
            <img src="<?=$product->main_photo?>">
        </div>
        <!-- /.col-lg-4 -->

        <div class="col-lg-8">
            <p class="ten-sp"><?=$product->name?></p>
            <h4 class="price">giá: <span><?=$product->price?></span> <span class="dong">đ</span></h4>
            <a type="button" class="btn btn-warning dat-hang" href="cart_process.php?do=add2cart&product_id=<?=$product->product_id?>">đặt hàng</a>
            <table class="thong-so" style="width: 100%; margin-top: 5px; margin-bottom: 5px">
                <tr>
                    <th colspan="2" style="text-align: center">Thông số kĩ thuật</th>
                </tr>
                <tr>
                    <td>Màn hình</td>
                    <td>IPS LCD, 6.2", HD+</td>
                </tr>
                <tr>
                    <td>ROM</td>
                    <td>55577854</td>
                </tr>
                <tr>
                    <td>Camera sau:</td>
                    <td>13 MP và 2 MP (2 camera)</td>
                </tr>
                <tr>
                    <td>Camera trước:</td>
                    <td>8 MP</td>
                </tr>
                <tr>
                    <td>CPU:</td>
                    <td>Qualcomm Snapdragon 450 8 nhân 64-bit</td>
                </tr>
                <tr>
                    <td>Bộ nhớ trong:</td>
                    <td>32 GB</td>
                </tr>
                <tr>
                    <td colspan="2">
                        <h2>Giới thiệu sản phẩm:</h2>
                        <?=$product->introduce?>
                    </td>
                </tr>
            </table>
        </div>
        <!-- /.col-lg-8 -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
<?php
include "./layout/footer.php";
?>


</body>

</html>
