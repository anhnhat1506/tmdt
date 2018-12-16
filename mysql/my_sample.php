<?php
include "config.php";


$rs= $db->fetch_multi_row('product',array('product_id','name','price','main_photo','category_id','brand_id','introduce'),array('category_id'=>'1'));
foreach ($rs as $key) {
    var_dump($key);
}

?>