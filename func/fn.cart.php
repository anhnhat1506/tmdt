<?php

    function fn_lay_san_pham_boi_product_id($con, $product_id){
            $rs = null;
            $query = mysqli_query($con,"select * from product where product_id=$product_id");
            if(mysqli_num_rows($query)==1){
                $rs = mysqli_fetch_assoc($query);
            }
            return $rs;
    }
    function fn_kiem_tra_product_id_ton_tai_trong_gio_hang($cart,$product_id){
        $rs = false;
        foreach ($cart['dssp'] as $item){
            if($item['product_id'] == $product_id){
                $rs = true;
            }
        }
        return $rs;
    }
    function fn_calculator_total_cart(&$cart){
        $total = 0;
        foreach ($cart['dssp'] as $cart_product_cart){
            $thanh_tien_item_cart =  $cart_product_cart['price']*$cart_product_cart['so_luong'];
            $cart_product_cart['thanh_tien'] = $thanh_tien_item_cart;
            $total += $thanh_tien_item_cart;
        }
        //total
        $cart['total']=$total;
    }
?>