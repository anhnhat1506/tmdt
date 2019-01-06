<?php
$kq=array(
    array(
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe',
    ),
    array(
        'id' => 3245,
        'first_name' => 'Sally',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones',
    ),
    array(
        'id' => 5623,
        'first_name' => 'Peter',
        'last_name' => 'Doe',
    )
);
//trả về giá trị theo cột trong mảng đó
$first_name= array_column($kq,'first_name');
print_r($first_name);
var_dump($first_name);
$id=array_column($kq,'id');
var_dump($id);
$last_name= array_column($kq,'last_name');
var_dump($first_name);

?>