<?php
$a = array(-1,8,6,2,0,100,270,4,123,28,27,14,-5,-8,16);
//a. Viết hàm đưa vào mảng a, trả về 1 mảng mới toàn số chẵn

function fn_get_all_even($a){
    $mang_chan=[];
    for ($i=0;$i< count($a);$i++){
        if ($a[$i]%2==0){
            $mang_chan[] = $a[$i];
        }
    }
    return $mang_chan;
}
$b = fn_get_all_even($a);
var_dump($b);
//b. Viết hàm đưa vào mảng a, trả về 1 mảng mới toàn số lẽ
function fn_get_all_odd($a){
    $mang_le=[];
    for ($i=0;$i< count($a);$i++){
        if ($a[$i]%2!=0){
            $mang_le[] = $a[$i];
        }
    }
    return $mang_le;
}
$c = fn_get_all_odd($a);
var_dump($c);
// viet hàm đưa vào a  trả về  gtri lớn nhất
function fn_get_max($a){
    $max = $a[0];
    for($i=1;$i< count($a);$i++){
        if ($a[$i]>$max){
            $max=$a[$i];
        }
    }
    return $max;
}
var_dump(fn_get_max($a));//trả về 1 mảng với 1 giá trị max


// viet hàm đưa vào a  trả về gtri nhỏ nhất
function fn_get_min($a){
    $min = $a[0];
    for ($i=1;$i< count($a); $i++){
        if ($a[$i] < $min ){
            $min=$a[$i];
        }
    }
    return $min;//trả về 1 mảng với 1 giá trị min
}
var_dump(fn_get_min($a));
// viet hàm đưa vào a trả về 2 gtri lớn nhất và nhỏ nhất
function fn_tim_gtri_min_max($a){
    $max = $a[0];
    for($i=1;$i< count($a);$i++){
        if ($a[$i]>$max){
            $max=$a[$i];
        }
    }
    $min = $a[0];
    for ($i=1;$i< count($a); $i++){
        if ($a[$i] < $min ){
            $min=$a[$i];
        }
    }
    //return array($min,$max); cái này trả về key 0,1
    //khởi tạo mảng dùng array()
    return array('min'=>$min,'max'=>$max);
}
var_dump(fn_tim_gtri_min_max($a));
//tìm các số âm trong mảng
function fn_find_so_am($a){
    $so_am = [];
    for ($i=0; $i< count($a);$i++){
        if($a[$i]<0){
            $so_am[]= $a[$i];
        }
    }
    return $so_am;
}
var_dump(fn_find_so_am($a));
//tim các số dương tong mảng
function fn_find_so_duong($a){
    $so_duong=[];
    for ($i=0; $i< count($a);$i++){
        if ($a[$i]>0){
            $so_duong[]= $a[$i];
        }
    }
    return $so_duong;
}
var_dump(fn_find_so_duong($a));
//tìm số chính phương trong mảng
function fn_find_so_chinh_phuong($a){
    $so_chinh_phuong = [];
    foreach ($a as $item){
        $canbac2=sqrt($item);
        if (floor($canbac2) == $canbac2){
            //floor la ham lay so nguyen
                $so_chinh_phuong[] = $item;

        }
    }
    return $so_chinh_phuong;
}
var_dump(fn_find_so_chinh_phuong($a));
//so nguyen to

echo "----------";
$mang2  = array(
    'k1'=>1025,
    'k2'=>79878
);
$a = ['k1','k2'];
var_dump(array_keys($mang2));
var_dump(array_values($mang2));
$a = array(); // var a = [];

?>