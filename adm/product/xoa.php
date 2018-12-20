<?php
    //include config
    $root_dir = $_SERVER["DOCUMENT_ROOT"].'/tmdt';
    include $root_dir."/mysqli/config.php";


    $product_id_xoa = $_GET["product_id"];
    $sql_xoa ="delete from product where product_id=$product_id_xoa";
    $result = mysqli_query($con,$sql_xoa);
    if ($result){
        //redirect ve trang them.php
        header('Location: index.php');
    }else{
        echo "<p style='color:red'>Xoa thất bại</p>";
    }
?>
