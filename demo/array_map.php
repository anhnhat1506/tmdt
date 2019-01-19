<?php
function fn_array_map($a){
    return ($a+$a);
}
$a=[1,2,3,4,5];
print_r(array_map("fn_array_map",$a));
var_dump($a);
var_dump(array_map("fn_array_map",$a));
?>