<?php
$con = mysqli_connect("localhost","root","","tmdt");
if(!$con){
    die('Ket noi that bai:'.mysqli_connect_error());
}

$sql = "select product_id,name, price from product where price>100000";
$result = mysqli_query($con,$sql); //f5 thuc thi mot cau truy van
$total_num_rows = mysqli_num_rows($result); //dem so luong dong sau khi da truy van sqls

/*
$ket_qua = []; //array()
while($row = mysqli_fetch_assoc($result)){
    $ket_qua[]  = $row;
}
*/


$ket_qua = []; //array();
for($i=0;$i<$total_num_rows;$i++){
    $ket_qua[] = mysqli_fetch_assoc($result); //lay tung dong
}

var_dump($ket_qua);

echo '<table>';
foreach ($ket_qua as  $key => $value){
    echo '<tr>';
    echo '<td>'.$value['product_id'].'</td>';
    echo '<td>'.$value['name'].'</td>';
    echo '<td>'.$value['price'].'</td>';
    echo '</tr>';
}
echo '</table>';