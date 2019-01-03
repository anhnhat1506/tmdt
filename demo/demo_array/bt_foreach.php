<?php
$a = array(-1,8,6,2,0,100,270,4,123,28,27,14,-3,-10);
function fn_tim_mang_so_chan($a){
    $mang_chan = [];
    foreach ($a as $key => $value){
        if ($value%2==0){
            $mang_chan[]= $a[$key];
        }
    }
    return $mang_chan;
}
var_dump(fn_tim_mang_so_chan($a));
function fn_tim_mang_so_le($a){
    $mang_le =[];
    foreach ($a as $key => $value){
        if ($value%2!=0){
            $mang_le[]= $a[$key];
        }
    }
    return $mang_le;
}
var_dump(fn_tim_mang_so_le($a));
function fn_tim_gtri_lon_nhat($a){
    $max= $a[0];
    foreach($a as $key => $value){
        if($a[$key]>$max){
            $max=$a[$key];
        }
    }
    return $max;
}
var_dump(fn_tim_gtri_lon_nhat($a));
function fn_tim_gtri_nho_nhat($a){
    $min = $a[0];
    foreach ($a as $key => $value){
        if ($a[$key]<$min){
            $min=$a[$key];
        }
    }
    return $min;
}
var_dump(fn_tim_gtri_nho_nhat($a));
function fn_tim_gtri_lon_nhat_nho_nhat($a){
    $max= $a[0];
    foreach ($a as $key => $value){
        if($a[$key]> $max){
            $max= $a[$key];
        }
    }
    $min =$a[0];
    foreach ($a as $key => $value){
        if($a[$key]< $min){
            $min= $a[$key];
        }
    }
    return array("Giá trị nhỏ nhất là:"=> $min,"Giá trị lớn nhất là:" => $max);
}
var_dump(fn_tim_gtri_lon_nhat_nho_nhat($a));
//tìm số âm trong mảng
function fn_tim_so_am($a){
    $so_am=[];
    foreach ($a as $key => $value){
        if($a[$key]<0){
            $so_am[]=$a[$key];
        }
    }
    return $so_am;
}
var_dump(fn_tim_so_am($a));
//tìm số dương tong mảng
function fn_tim_so_duong($a){
    $so_duong=[];
    foreach ($a as $key => $value){
        if ($a[$key]>=0){
            $so_duong[]=$a[$key];
        }
    }
    return $so_duong;
}
var_dump(fn_tim_so_duong($a));
?>