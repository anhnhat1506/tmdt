<?php
$a = array(-1,8,6,2,0,100,270,4,123,28,27,14,-3,-10);
function fn_tim_mang_so_chan($a){
    $mang_chan = [];
    foreach ($a as $value){
        if ($value%2==0){
            $mang_chan[]= $value;
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
function fn_tim_gtri_trung_binh($a){
    $mang_chan=[];
    $gtri_tb= 0;
    foreach($a as $value){
        if ($value%2==0){
            $mang_chan[]= $value;
        }
        $c=array_sum($mang_chan)/count($mang_chan);
        $gtri_tb=$c;
    }
    return $gtri_tb;
}
$arr = [100,2,8,7,9,9,78,24,95,92,36,24,-15,-18,-22,27,684,22,415,356,244,46,81,1];
var_dump($arr);
var_dump(fn_tim_gtri_trung_binh($arr));
$so_nguyen_to1=5;
function is_ngto($a){
    if ($a<=1){
        return false;
    }
    else {
            for ($i = 2; $i < $a; $i++) {
                if ($a % $i == 0) {
                    return false;
                }
            }
        return true;
    }
}
function is_ngto1($a){
    $dem=0;
    if ($a<=1){
        return false;
    }
    else {
        for ($i = 2; $i <$a; $i++)
        {
            if ($a % $i == 0) {
               $dem++;
               if ($dem>0){
                   return false;
               }
            }
        }
        return true;
    }
}
var_dump(is_ngto(9));

var_dump(is_ngto1(7));

function fn_sua_mang($a,$n){
    //sua mang
    for ($i=$n-1;$i< count($a)-1;$i++){
        $a[$i]=$a[$i+1];
    }
    //return $a;
    //xoa ptu cuoi du trong mang
    $mang_moi=[];
    for ($i=0;$i< count($a)-1;$i++){
        $mang_moi[]=$a[$i];
    }
    return $mang_moi;
}

var_dump(fn_sua_mang($arr,10));
function fn_tim_so_nguyen_to_trong_mang($a){
    $mang_nguyen_to=[];
    for ($i=0; $i<count($a);$i++)
    {
        if (is_ngto($a[$i])==true){
            $mang_nguyen_to[]=$a[$i];
        }

    }
    return $mang_nguyen_to;
}
var_dump(fn_tim_so_nguyen_to_trong_mang($arr));
function fn_loai_bo_trung($a){
    $mang_sau=[];
    foreach ($a as $num){
        $dem_trung=0;
        foreach ($a as $num2){
            if ($num==$num2){
                $dem_trung++;
                if ($dem_trung>2){
                    break;
                }
            }
        }
        if ($dem_trung==1){
            $mang_sau[]=$num;
        }
    }
    return $mang_sau;
}
var_dump(fn_loai_bo_trung($arr));
?>