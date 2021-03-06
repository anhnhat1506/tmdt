<?php
$root_dir = $_SERVER["DOCUMENT_ROOT"].'/tmdt';
$root_adm=  $root_dir."/adm";
$TPL_TITLE = "Dashboard";
include $root_adm."/template/header.php"; ?>
<!--CONTENT-->

<?php
$msg="";

if (isset($_POST['btn_capnhat'])){

    $product_id =  isset($_POST['product_id'])?$_POST['product_id']:"";
    $name = isset($_POST['name'])?$_POST['name']:"";
    $price = isset($_POST['price'])?$_POST['price']:"";
    $main_photo = isset($_POST['main_photo'])?$_POST['main_photo']:"";
    $introduce = isset($_POST['introduce'])?$_POST['introduce']:"";
    $cate_id = isset($_POST['cate_id'])?$_POST['cate_id']:"";
    $brand_id = isset($_POST['brand_id'])?$_POST['brand_id']:"";
    $kqua= mysqli_query($con,"update product set name='$name',price=$price,main_photo='main_photo',introduce='$introduce',category_id=$cate_id,brand_id=$brand_id where product_id=$product_id");

    //1. CAP NHAT N-N
    // xoa di tat ca cac label cua san pham dang update
    $kqua_xoa= mysqli_query($con,"delete from product_label where product_id=$product_id");


    //insert lai N-N
    if(isset($_POST["label"])  && count($_POST["label"])>0){
        foreach ($_POST["label"] as $key=>$value){
            $label_id  = $value;
            mysqli_query($con,"insert into product_label(product_id,label_id) values ($product_id,$label_id)");
        }
    }

    if ($kqua){
        $msg ="<p style='color:blue'>Cap nhat thanh cong!</p>";
    }else{
        $msg ="<p style='color:yellow'>Cap nhat  thất bại</p>";
    }
}

if(isset($_GET['product_id'])){
    $product_id=$_GET['product_id'];
    $sql="select * from product where product_id=$product_id;";
    $kq= mysqli_query($con,$sql);
    $product=mysqli_fetch_assoc($kq);


    //lay tat ca cac label_id cua san pham dang edit

    $all_label_id_full=fn_lay_tat_ca_label_id_cua_product($con,$product_id);
    $all_label_ids = [];
    foreach ($all_label_id_full as $key=>$value) {
        $all_label_ids[] = $value["label_id"];
    }
    var_dump($all_label_ids);
?>
<?php
    $all_category = fn_lay_tat_ca_category($con);
    $all_brand = fn_lay_tat_ca_brand($con);
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

        <select name="cate_id">
            <?php foreach ($all_category as $key =>$value){?>
             <option <?=$value['category_id']==$product['category_id']?"selected=selected":""?> value="<?=$value['category_id']?>"><?=$value['name']?></option>
            <?php } ?>
        </select>
    </div>
    <div>
        <label>Brand_id</label>
        <select name="brand_id">
            <?php
            foreach ($all_brand as $key => $value){?>
                <option <?=$value['brand_id']==$product['brand_id']?"selected=selected":""?> value="<?=$value['brand_id']?>"><?=$value['name']?></option>
            <?php }
            ?>
        </select>
    </div>

    <div>
        <label>Label</label>
    <?php
        $all_label = fn_lay_tat_ca_label($con);
        foreach ($all_label as $key => $value){
            ?>
            <input type="checkbox" name="label[]"
                   <?=in_array($value['label_id'],$all_label_ids)?"checked=checked":""?>
                   value="<?=$value['label_id']?>"/><?=$value['name']?>
            <?php
        }
        ?>


    </div>

    <input type="submit" value="Cập nhật sản phẩm" name="btn_capnhat" />
</form>

<?php } ?>

<hr />
<h1><?=$msg?></h1>
<a href="index.php">Back</a>



<!--/CONTENT-->
<?php  include $root_adm."/template/footer.php"; ?>