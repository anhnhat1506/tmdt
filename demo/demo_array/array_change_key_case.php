<?php
$input_array= array("FriSt"=> 1, "SEcond"=> 2);
//chuyển tất cả kiểu key sang in hoa hoặc in thường
$chuyen_key_in_hoa = array_change_key_case($input_array, CASE_UPPER);
var_dump($input_array);
foreach ($chuyen_key_in_hoa as $key => $value){
    echo "Giá trị key lúc này sau khi chuyển sang in hoa $key <br/>";
}
$chuyen_key_thuong=array_change_key_case($input_array, CASE_LOWER);
print_r($chuyen_key_thuong) ;
?>