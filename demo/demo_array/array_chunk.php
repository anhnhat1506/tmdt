<?php
$arr= array(5,8,6,2,3,4,9);
function ham_chunk($arr,$num){
    $dem_ptu_trong_mang= count($arr);//7
    /*$so_mang_con_can_co= $dem_ptu_trong_mang/$num;//7/2=3.5 */
    //$so_mang_con_can_co=round(($dem_ptu_trong_mang/$num),0,PHP_ROUND_HALF_UP);//lam trong 3.5 thanh 4
    $so_mang_con_can_co=ceil($dem_ptu_trong_mang/$num);
    //nếu trường hợp tách nhỏ 1 mảng có 4 value thì sao
    echo "so mang con can co: $so_mang_con_can_co .<br/>";
    echo "so pt trong mang: $dem_ptu_trong_mang";
    $kq=[];
    for ($i=0;$i<$dem_ptu_trong_mang;$i+=$num){
        $item = [];
        for ($j=$i;$j<=$i+$num-1;$j++){
            var_dump($j);
            //nếu ko kt tồn tại phần tử đó có trong mảng ko thì nó sẽ báo lỗi
            if(isset($arr[$j])){
                $item[]=$arr[$j];
            }
        }
        echo "-------------------";
        $kq[] = $item;
    }
    return $kq;
}
$mang_can_co=ham_chunk($arr,2);
var_dump($mang_can_co);

for ($x=1;$x<=5;$x++){
    for ($y=1;$y<=$x;$y++){
        echo "*";
        if ($y<$x){
            echo " ";
        }
    }
    echo "\n";
}

?>