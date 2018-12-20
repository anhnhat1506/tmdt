<?php
$root_dir = $_SERVER["DOCUMENT_ROOT"].'/tmdt';
$root_adm=  $root_dir."/adm";
include $root_adm."/template/header.php"; ?>
<!--CONTENT-->


<?php
$msg = "";
if(isset($_POST["btn_themsp"])){
    $name = isset($_POST["name"])?$_POST["name"]:"";
    $price = isset($_POST["price"])?$_POST["price"]:"";
    $main_photo = isset($_POST["main_photo"])?$_POST["main_photo"]:"";
    $introduce = isset($_POST["introduce"])?$_POST["introduce"]:"";
    $cate_id = isset($_POST["cate_id"])?$_POST["cate_id"]:"";
    $brand_id = isset($_POST["brand_id"])?$_POST["brand_id"]:"";
    // co $con
    $sql="INSERT INTO product(`name`,price,main_photo,introduce,category_id,brand_id) values ('$name',$price,'$main_photo','$introduce',$cate_id,$brand_id)";
    $result = mysqli_query($con,$sql);
    if ($result){
       header("location: index.php");
    }else{
        $msg ="<p style='color:red'>Thêm thất bại</p>";
    }
}
?>

<h1>THÊM SẢN PHẨM</h1>
<form action="them.php" method="post">
    <div>
        <label>Name</label>
        <input type="text" name="name" required />
    </div>
    <div>
        <label>Giá</label>
        <input type="number" name="price" required />
    </div>
    <div>
        <label>Ảnh chính</label>
        <input type="text" name="main_photo" required />
    </div>
    <div>
        <label>Giới thiệu</label>
        <textarea rows="5" cols="20" name="introduce"></textarea>
    </div>
    <div>
        <label>Cate_id</label>
        <input type="number" name="cate_id" required />
    </div>
    <div>
        <label>Brand_id</label>
        <input type="number" name="brand_id" required />
    </div>
    <h1><?=$msg?></h1>
    <input type="submit" value="Thêm sản phẩm" name="btn_themsp" />
</form>


<a href="index.php">Back</a>


<!--/CONTENT-->
<?php  include $root_adm."/template/footer.php"; ?>