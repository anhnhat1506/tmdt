<?php
$root_dir = $_SERVER["DOCUMENT_ROOT"].'/tmdt';
include $root_dir."/mysqli/config.php";
$msg="";

var_dump($_GET);

if (isset($_POST['btn_capnhat'])){
    $product_id =  isset($_POST['product_id'])?$_POST['product_id']:"";
    $name = isset($_POST['name'])?$_POST['name']:"";
    $price = isset($_POST['price'])?$_POST['price']:"";
    $main_photo = isset($_POST['main_photo'])?$_POST['main_photo']:"";
    $introduce = isset($_POST['introduce'])?$_POST['introduce']:"";
    $cate_id = isset($_POST['cate_id'])?$_POST['cate_id']:"";
    $brand_id = isset($_POST['brand_id'])?$_POST['brand_id']:"";
    $sql_capnhat="update product set name='$name',price=$price,main_photo='main_photo',introduce='$introduce',category_id=$cate_id,brand_id=$brand_id where product_id=$product_id";
    var_dump($sql_capnhat);
    $kqua= mysqli_query($con,$sql_capnhat);
    var_dump($kqua);
    if ($kqua){
        //redirect ve trang them.php
        header('Location: them.php');
    }else{
        $msg ="<p style='color:yellow'>Xoa thất bại</p>";
    }
}

if(isset($_GET['product_id'])){
    $product_id=$_GET['product_id'];
    $sql="select * from product where product_id=$product_id;";
    $kq= mysqli_query($con,$sql);
    $product=mysqli_fetch_assoc($kq);
    var_dump($product);
?>

<h1>Cập nhật SẢN PHẨM</h1>
<form action="capnhat.php" method="post">
    <input type="hidden" name="product_id" value="<?=$product_id?>">
    <div>
        <label>Name</label>
        <input type="text" name="name" required value="<?=$product['name']?>"/>
    </div>
    <div>
        <label>Giá</label>
        <input type="number" name="price" required value="<?=$product['price']?>" />
    </div>
    <div>
        <label>Ảnh chính</label>
        <input type="text" name="main_photo" required value="<?=$product['main_photo']?>" />
    </div>
    <div>
        <label>Giới thiệu</label>
        <textarea rows="5" cols="20" name="introduce" value="<?=$product['introduce']?>"></textarea>
    </div>
    <div>
        <label>Cate_id</label>
        <input type="number" name="cate_id" required value="<?=$product['category_id']?>"/>
    </div>
    <div>
        <label>Brand_id</label>
        <input type="number" name="brand_id" required value="<?=$product['brand_id']?>" />
    </div>
    <h1><?=$msg?></h1>
    <input type="submit" value="Cập nhật sản phẩm" name="btn_capnhat" />
</form>

<?php } ?>

<hr />
<a href="index.php">Back</a>
