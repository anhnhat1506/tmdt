<?php
    include "./db.php";
    //khoi tao doi tuong db bieu hien cua class Db
    $db= new Db();


    $dssp = $db->fn_lay_danh_sach("select * from product");



    $dong = $db->fn_lay_dong("select * from product where product_id=6");


    //insert sp
    //$them_sp = $db->fn_query("insert into product(name,price,main_photo,category_id,brand_id) values ('product new 1',50000,'abc.jpg',1,1)");
    //var_dump($them_sp);
    //$update_sp = $db->fn_query("update product set name='IP 5s', price =60000 where product_id=11");
    //var_dump($update_sp);
    $del_sp = $db->fn_query("delete from product where product_id =10");
    var_dump($del_sp);
?>